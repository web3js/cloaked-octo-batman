var activeURL = '';




//---user info 
var now = {

	time: function(){
		var d = new Date();
		var hh = d.getHours();
		var mm = d.getMinutes();
		if(mm < 10){mm = '0' + mm;}
		var ss = d.getSeconds();
		if(ss < 10){ss = '0' + ss;}
		var full = hh + ":" + mm + ":" + ss;
		return full;
	},
	
	date: function(){
		var d = new Date();
		var yy = d.getFullYear();
		var mm = d.getMonth()+1;
		if(mm < 10){mm = '0' + mm;}
		var dd = d.getDate();
		if(dd < 10){dd = '0' + dd;}
		var full = yy + "-" + mm + "-" + dd;
		return full;
	},
	
	fp: function(){
		var fingerprint = new Fingerprint({canvas: true}).get();
		return fingerprint;
	}

};


//---location
var loc = {
	nabe: '',
	boro: '',
	lat: '',
	lng: '',
	name: 'here',
	type: '',
	
	getNabe: function(p){
	
	    loc.lat = p.coords.latitude;
	    loc.lng = p.coords.longitude;
	  	
	  	var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='+loc.lat+','+loc.lng+'&sensor=true';	
		//gp	var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=40.7310412,-73.9585554&sensor=true';
		//d12	var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=40.737047,-73.992206&sensor=true'; 
		//ues	var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=40.770556,-73.956730&sensor=true'; 

		
	  	jQuery.ajax({
		    url: url,
		    success: function(result) {		
		    
				console.log(result);
				
				var num = result.results.length - 1;				

				var nabe = [];
				var i;
				for(i = num; i > -1; i--){
					if(result.results[i].types[0] == 'neighborhood'){
						nabe.unshift(result.results[i].address_components[0].long_name);						
					}
					if(result.results[i].types[0] == 'sublocality'){
						loc.boro = result.results[i].address_components[0].long_name;
					}
				}

			    loc.nabe = nabe[0];
			    
				var greeting = "What's up, " + loc.nabe + "?";
				var d= $('div#location').find('h1').empty().append(greeting);

				loc.exploreNabe();
				
		    }
		});

	},
	exploreNabe: function(){	
	
		var pos = loc.lat + "," + loc.lng;
	
		var url = 'https://api.foursquare.com/v2/venues/search?ll='+pos+'&client_id=RCA4MKWEBGDO52TBPHUIXNWF010RQWV24MKJ4HHBBVQFEBJY&client_secret=HN1G12G4O44NWH412TBZU4YWH1XQ1YULMDOK2QT2V4U1F0V5&v=20131016'
		
		
		$.getJSON( url, function( data ) {
			var venues = data.response.venues;
			var num = venues.length-1;
			var output = [];
			
			for(i = 0; i < num; i++){
				
				var name = venues[i].name;
				
				if(venues[i].categories[0]){
					var type = venues[i].categories[0].name;
				}else{ var type = 'unknown'; }
				
				
				var o = new Option(name, type);	
				$(o).html(name);
				output.push(o);
					
			}
			
			//alphabetize list
			var outputSort = output.slice(0);
			outputSort.sort(function(a,b) {
			    return a.text - b.text;
			});
			
			//add spacer
			o = new Option('', '#');	
			$(o).html('');
			outputSort.push(o);
	
			//add "none" option
			o = new Option('None of these', '#');	
			$(o).html('None of these');
			outputSort.push(o);
			
			//append array
			$(".location").append(outputSort);
			
			var location = $('select.location');
			location.change(function(data){
				
				var selected = $(this).find('option:selected');
				loc.name = selected[0].text.replace("'", "");
				loc.type = selected[0].value;
				
				loc.post();
			})
	
		})
		.success(function(){
			nav.init();
		})
	},
	post: function(){

		//USER TRACKING
		var sqlInsert = 'INSERT INTO log (date, time, finger, geoLat, geoLon, geoNabe, geoBoro, geoName, geoType) VALUES ("' + now.date() + '", "' + now.time() + '", "' + now.fp() + '", "' + loc.lat + '", "' + loc.lng + '", "' + loc.nabe + '", "' + loc.boro + '", "' + loc.name + '","'+ loc.type	+'")';
		db.call(sqlInsert);
		//console.log('location post commented out');
		$('.landing').fadeOut();
		$('#blur').fadeOut();
	   
	},
};


//--database
var db = {

	response: '',
	
	feed: [],

	standardurl: '/_n/call.php?sql=',

	call: function(sql, callback, errorcallback){	

		console.log('calling db...');
		//console.log(db.standardurl + "'" + sql + "'");
		
		if(!callback){callback = function(){}};
		if(!errorcallback){errorcallback = function(){}};
	
				
		$.ajax({
				url: db.standardurl + "'" + sql + "'",
			}).done(function(data) {
				db.response = data;
				callback(data);
				//console.log(data);
			}).error(function(data){
				errorcallback(data); 
			});
			
	},		
	
};


//---feed  -- UPDATED
var newsfeed = {
	init: function(){
		newsfeed.viewToggle();
		newsfeed.showTwitter();
	},
	
	pullByCat: function(selected, days){
	
		if(!days){
			console.log('no days');
			days = 30;
		};
		
		//pull by category
		var sqlInsert = 'SELECT * FROM wire WHERE hed != "NULL" and hed !=" " and cat LIKE "%' + selected + '%" and DATE_SUB(CURDATE(),INTERVAL ' + days + ' DAY) <= date';
		var callback = function(data){newsfeed.parse(data);}
		db.call(sqlInsert, callback);
		
		
		//USER TRACKING
		var sqlInsert = 'INSERT INTO log (date, time, finger, geoLat, geoLon, geoNabe, geoName, geoType, keysTop) VALUES ("' + now.date() + '", "' + now.time() + '", "' + now.fp() + '", "' + loc.lat + '", "' + loc.lng + '", "' + loc.nabe + '", "' + loc.name + '", "' + loc.type + '","' + selected + '")';
		//console.log('category post commented out');
		db.call(sqlInsert);
		
	},
	
	parse: function(data){
	
		this.empty();
				
		//prepare data to be parsed
		data = '[' + data + ']';
		data = data.replace(/\}{/g, '},{').replace('},]', '}]').replace(/\^/g, '\'').replace(/,,/g, ',');
		
		//--PARSE DATA
		var array = JSON.parse(data);		
				
		for(i = 0; i<array.length; i++) {
		
			if(array[i]){
		    	var pub = array[i].pub;
		    	var hed = array[i].hed;
		    	var dek = array[i].dek;
		    	var storyURL = array[i].storyURL;
		    	var date = array[i].date;
		    	var time = array[i].time;
		    	var img = array[i].img;
		    	var keys = array[i].keys;
		    	var cat = array[i].cat;
		    	var body = array[i].body;
		    	    	
		    	//---MAKE ARTICLE OBJECT
		    	var article = new Article(pub, hed, dek, storyURL, date, time, img, keys, cat, body);
		    	this.load(article);
	
			};
		};
		
		$('#loading_feed').fadeOut();
	},
	
	load: function(article){
		
		var d = article.feedModule();
		$('.newsFeed ul').append(d);

	},
	
	empty: function(){
		$('.article').remove();		
	},
 	
  	viewToggle: function(){
	  $('.readersidebar').click(function(e){
	  	$('.readersidebar').toggleClass('readersidebar-hide');
	  	reader.wideToggle();
	  });
  	},
  	
  	showTwitter: function(){
		$('#showtwitter').click(function(e){
				e.stopPropagation();
				this.id="showtwitter-active";
				var x = document.getElementById('shownews-active');
				if(x){
					x.id = 'shownews';
				};
				newsfeed.showNews();
	
		});
	},
	
	showNews: function(){
		$('#shownews').click(function(e){
				e.stopPropagation();
				this.id="shownews-active";
				
				var x = document.getElementById('showtwitter-active');
				if(x){
					x.id = 'showtwitter';
				};
				
				newsfeed.showTwitter();
	
		});
	},
		
};

//---reader + story handlers
var reader = {
	
	init: function(){
		
		reader.closeListener();
		
	},
	
	textSize: {
		
		up: function(){
			console.log('textUP');
			var text = $('.reader').find('p');
			var fontSize = parseInt($(text).css("font-size"));
			fontSize = fontSize + 3;
			$(text).css({'font-size': fontSize});
	
		},
		
		down: function(){
			var text = $('.reader').find('p');
			var fontSize = parseInt($(text).css("font-size"));
			fontSize = fontSize - 3;
			$(text).css({'font-size': fontSize});
		},
	
		reset: function(){
			var text = $('.reader').find('p');
			$(text).css({'font-size': '15'});
		},
		
	},
	
	clear: function(){
		$('.readerhead').empty();
		$('.readerkeys').empty();
		$('.readerimg').empty();
		$('.readerbody').empty();		
	},
		
	keyword: function(key){
		
		var searchVal = key.target.innerText;		
		console.log(searchVal);
		search.call(searchVal);
		
	},
	
	hide: function(){
		console.log('hide');
	},
	
	open: function(){
		$('.reader').css('display', 'block');	
		
	},
	
	wideToggle: function(){	
		$('.reader').toggleClass('reader-wide');
	},
	
	close: function(){
		$('.reader').css('display', 'none');	
	},
	
	closeListener: function(){
		
		$('.readerclose').click(function(){
			
			console.log('hi');
			reader.close();
			
		});
		
	}
	


};


//--search
var search = {

	init: function(){
			$('#searchbar').click(function(){
			search.listen();
			//$('#searchbar').animate({width: '200px'});
			$('#searchbar').focusout(function(){
				$('#searchbar').animate({width: '22px'});
				$('#searchval').val('');
			});
		});
		
		$('#searchbar').hover(function(){
			$('#searchbar').animate({width: '200px'});
			
		});
		
	},
	
	listen: function(){
		
		$("#searchval").keypress(function(e){

			if (e.which == 13){
				var searchval = $('#searchval').val();
				search.call(searchval);
				$('#searchval').val('');
				$('#loading_feed').fadeIn();
				
			}

		});
		
		$("#searchval").focusout(function(){
			$('#searchbar').animate({width: '22px'});			
		});

	},

	call: function(searchVal){

		var sqlInsert = 'SELECT * FROM wire WHERE keywords like "%'+ searchVal +'%" OR hed like "%' +searchVal+ '%"';		
		db.call(sqlInsert, function(){newsfeed.parse(db.response)}, function(){console.log('no results');});
		
		//USER TRACKING
		var sqlInsert = 'INSERT INTO log (date, time, finger, geoLat, geoLon, geoNabe, geoName, geoType, keysSearch) VALUES ("' + now.date() + '", "' + now.time() + '", "' + now.fp() + '", "' + loc.lat + '", "' + loc.lng + '", "' + loc.nabe + '", "' + loc.name + '", "' + loc.type + '","' + searchVal + '")';
		//console.log('search post commented out');
		db.call(sqlInsert);
		
	},
	
};



//---social 
var soc = {

	show: function(){	
		$('#hidebar').css('display', 'block');
		$('.reader-bar').css('display', 'block');
		this.instapaper.click();
		this.mail.click();
	},

	instapaper: {
		click: function(){
			$( '#instapaper' ).click(function(e){
				
				var title = $('.reader').find('h1').get();
				title = title[0].innerText;
				var url = activeURL;
				
				soc.instapaper.post(title, url);

				$('#mail-to').slideUp();//.css('display', 'none');
				$('#instapaper-login').slideDown();//.fadeIn();
				
				$('body').click(function(e) {
				    if (!$(e.target).closest('#instapaper-login').length){
				        $("#instapaper-login").hide();
				    }
				});

			});
			
			
		},
		post: function(title, url){
			console.log(title, url);
			
			$( 'button#submit' ).click(function(e){
		
			  	e.preventDefault();
		
			  	
			   	var base = $('form#instapaper-login').get();
			   				   	
			   	var username = base[0][0].value;
			   	var pword = base[0][1].value;
			   	
			   	var link = 'lib/instapaper.php?username='+username+'&password='+pword+'&url='+url+'&title='+title;
			   	
			   	window.open(link, "loader");
			   	
			   	$('#instapaper-login').fadeOut();
			  	
		  	}) 
		
		}
	},
	
	mail: {
		click: function(){
			$( '#mail' ).click(function(e){
							
				var title = $('.reader').find('h1').get();
				title = title[0].innerText;
				var url = activeURL;
				
				soc.mail.post(title, url);
				
				$('#instapaper-login').slideUp();//css('display', 'none');
				$('#mail-to').slideDown();//.fadeIn();
				
				$('body').click(function(e) {
				    if (!$(e.target).closest('#mail-to').length){
				        $("#mail-to").hide();
				    }
				});

			
				
			});
		},
		post: function(title, url){
			console.log(title, url);
			
			$( 'button#send' ).click(function(e){
		
			  	e.preventDefault();
			  	
			   	var base = $('form#mail-to').get();			   				   	
			   	var fromName = base[0][0].value;
			   	var from = base[0][1].value;
			   	var to = base[0][2].value;
			   	var message = base[0][3].value;			   	
			   	
			   	var link = 'lib/mail.php?to='+to+'&fromName='+fromName+'&from='+from+'&message='+message+'&title='+title+'&url='+url;
			   	console.log(link);
			   	
			   	window.open(link,"loader");
			   	
			   	$('form#mail-to').fadeOut();
			  	
		  	}) 
		
		},
	}
};
	

var spinner = (function(){

	var init = function(){
		var target = document.getElementById('loading_feed');
		new Spinner({color:'#fff', lines: 12, radius: 5, width: 4, top: 0, left: 0}).spin(target);
	};
	
	return{
		init : init
	}
})();


var blur = (function(){
	
	var blur = function(){
	
		return document.getElementById('blur');
		
	};
	
	var blur_hide = function(){

		return document.getElementById('blur-hide');
		
		
	};
	
	var show = function(){
		var d = blur_hide();
		if(d){
			document.getElementById('blur-hide').setAttribute('id', 'blur');
		}
	
	
	};
	
	var hide = function(){
		var d = blur();
		if(d){
			document.getElementById('blur').setAttribute('id', 'blur-hide');
		}
		
	};
	
	return {
		hide : hide,
		show : show
	};
})();


//--init listeners
function init(){

	navigator.geolocation.getCurrentPosition(loc.getNabe);
	reader.init();
	newsfeed.init();
	search.init();
	spinner.init();
	tr.init('http://cnn.com');

	//nav.init(); moved to ln. 145 to ensure it happens when nabe is loaded
	  	
};


$(document).ready(function(){

	init();
	//$('.landing').fadeOut();
	//blur.hide();
	
});


