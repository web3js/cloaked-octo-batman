var Article = function(pub, hed, dek, storyURL, date, time, img, keys, cat, body, callback) {

	this.pub = pub;

	this.hed = hed.replace(/\?/g, "'");;

	this.dek = dek;
	this.url = storyURL;
	this.img = JSON.parse(img);
	this.keys = keys;
	this.cat = cat;
	this.body = body;
		
	//date parsing
	this.date = date.split('T');
	if(this.date[0] == '0000-00-00'){
		this.date = '';
	}else{
		this.date = this.date[0];
	}
		
	this.time = time;	
	if(this.time == '00:00:00'){
		this.time = '';
	};
	
	this.reader_init = function(){
	
		//clear reader
			reader.clear();
		
		//build reader content
			this.readerLoad();

		//add listeners
			this.readerListeners();
			
		//init social
			ip.init();
			
		//add to user log
			this.track();
		
	};
	
	this.readerLoad = function(){
		//add hed, pub + link to story
		$('.readerhead').append('<h1>'+this.hed+'</h1><br>');

		$('.readerhead').append('<div class="tags">');
		$('.tags').append('<h2><a href="'+this.url+'" target="_blank">'+this.pub+'</a></h2>');
		
		
		//add date
		if(this.date != '0000-00-00'){		
			$('.tags').append('<h3><a href="">'+this.date+ '</a></h3>');

		}else{
			
		};
		
		$('.tags').append('<div class="social-icons"><img src="style/img/twitter.png" id="twitter"><img src="style/img/instapaper.png" id="instapaper"><img src="style/img/mail.png" id="mail"></div>');
		$('.tags').append('<br>');
		
		$('.readerhead').append('<?php include /lib/social.php ?></div><br></div>');
		
		//append keys	
		if(this.keys != undefined){
			var kw = this.keys.split(',');
			for(i = 0; i < kw.length; i++){
				if(kw[i] != "null" && kw[i] != "news"){
					$('.readerkeys').append('<p><a href="">'+kw[i]+'</a></p>');
				};
			};
		};

		//--FIX WHEN IMAGES ARE LOADING
		if(this.img[0].src){
			console.log(this.img[0].src);		
			$('.readerimg').append('<div class="img_thumb">');
			$('.img_thumb').append('<img src="'+this.img[0].src+'"><br>');
		};		
		
	
		//append body
		var body = '<p>' + this.body.replace(/[*]/g, '<p>').replace(/#/g, '').replace(/\^/g, '\'').replace(/~/g, '"').replace(/\?/g, '');
		$('.readerbody').append(body);
		reader.open();
			
	};
	
	this.readerListeners = function(){
	
		//console.log('listening...');
		var that = this;
		
		$('#textup').click(function(){reader.textUP();});	
		$('#textdown').click(function(){reader.textDOWN();});	
		$('#textreset').click(function(){reader.textRESET();});	
		
		$( '.tags h2 a').click(function(e){that.readerLink(e);});
		$('.readerkeys p').click(function(e){
			e.preventDefault();
			$('#loading_feed').fadeIn();
			reader.keyword(e);
		});	
		
		var that = this;
		$('#instapaper').click(function(){
			console.log('click!');
			var hed = that.hed;
			var url = that.url;
			ip.check(hed, url);
		});
		$('#mail').click(function(){
			console.log('click!');
			mail.send(that.pub, that.hed, that.url);
		});
		
	};
	
	this.readerLink = function(e){
		
		e.preventDefault();
		
		var sqlInsert = 'INSERT INTO log (date, time, finger, geoLat, geoLon, geoNabe, geoBoro, geoName, geoType, urlArt, pub, ct) VALUES ("' + now.date() + '", "' + now.time() + '", "' + now.fp() + '", "' + loc.lat + '", "' + loc.lng + '", "' + loc.nabe + '", "' + loc.boro + '", "' + loc.name + '", "' + loc.type + '", "' + e.target.href +
		'", "' + e.target.innerText + '", "1")';
		console.log('click through post commented out');
		//db.call(sqlInsert);	
		
		var url = e.target.href;
		if(url){
			window.open(url,'_blank');
		} 

		
		
	};
	
	this.feedModule = function(){

		//build newsfeed block
		var template = $('.newsFeed li.template');
		var feedBlock = template.clone();
		feedBlock.removeClass('template').addClass('article');
		feedBlock.find('h1').text(this.hed).text();
		feedBlock.find('pub').text(this.pub).text();
		feedBlock.find('a').attr('href', this.url).attr('target', '_blank').attr('id', this.keys);

		//add listener
		var that = this;
		$(feedBlock).on('click', function(e){
			e.preventDefault(); 
			e.stopPropagation();
			that.reader_init(e)
		});

		return feedBlock;

	};

	this.track = function(){
		//USER TRACKING		
		var sql_statement = 'INSERT INTO log (date, time, finger, geoLat, geoLon, geoNabe, geoBoro, geoName, geoType, keysArt, nameArt, urlArt, pub) VALUES ("' + now.date() + '", "' + now.time() + '", "' + now.fp() + '", "' + loc.lat + '", "' + loc.lng + '", "' + loc.nabe + '", "' + loc.boro + '", "' + loc.name + '", "' + loc.type + '", "'+ this.keys +'", "' + this.hed + '", "' + this.url + '", "' + this.pub +'")';		
		db.call(sql_statement);	
		//console.log('article post commented out');

		
	};
		
};
