
var nav = (function(){
	
	var init =  function(){
		
		 build();
		 listen();
		
	};
	
	var build = function(){
		
		$('option#here').text(loc.name);
		$('option#nabe').text(loc.nabe);
		$('option#boro').text(loc.boro);

		console.log('ready');
		readyCheck();
		//once built, call and load feed
		//		callLog();
		
	};
	
	var readyCheck = function(){
		
		var loc = $('select#locationType').find('option:selected').val();
		if(loc !== 'nabe'){
			callLog();
		}else{
			setTimeout(readyCheck, 1000);	
		};
		
	};
	var listen = function(){
	
		console.log('listen()');
		
		$('select#newsType').change(function(){ 
			
			if( category() == 'all'){
				$('#locationType').css('opacity', '1');
				$('#inLabel').css('opacity', '1');
			}else{
				$('#locationType').css('opacity', '0.2');
				$('#inLabel').css('opacity', '0.2');
			};
			
			 callLog();
		});
			
		$('select#locationType').change(function(){ 
			 callLog();
		});
		
		$('select#timeType').change(function(){ 
			 callLog();
		});
	
	};
	
	var category = function(){
		return $('select#newsType').find('option:selected').attr('id');	
	};
	
	var location = function(){
		return $('select#locationType').find('option:selected').attr('id');	
	};
		
	var location_sql = function(){

		var sqlDist;
		
		switch( location()) {
	
			case 'here':
			sqlDist = 'geoName = "'+ loc.name+ '" and';
			break;
		
			case 'nabe':
			sqlDist =  'geoNabe = "'+ loc.nabe+ '" and';
			break;
			
			case 'boro':
			sqlDist =  'geoBoro = "'+ loc.boro+ '" and';
			break;
			
			case 'city':
			sqlDist = '';
			break;
		};
		
		return sqlDist;
	};
	
	var time = function(){
		return $('select#timeType').find('option:selected').attr('id');
	};
	
	var results = {};
	
	var results_total_count = 0;
	
	var results_count = 0;
	
	var callLog = function(){
		console.log('calllog()');
		 $('#loading_feed').fadeIn();
		
		 results_total_count = 0;
		 results_count = 0;

		if( category() == 'all'){
					
			var sqlCat = '';
			var sqlLoc =  location_sql();
			var sqlTime = 'DATE_SUB(CURDATE(),INTERVAL ' +  time() + ' DAY) <= date';
			var sqlInsert = 'select * from log where nameArt != "NULL" and ' + sqlLoc + ' ' + sqlCat + ' ' + sqlTime+ ";";
			var callback = function(data){ getUrl(data);}
			var errorcallback =  noresults();
			
			db.call(sqlInsert, callback, errorcallback);
			
		}else{
			
			newsfeed.pullByCat( category(),  time());
			$('#loading_feed').fadeOut();
				
		};
	
	};
	
	var getUrl = function(d){
		console.log('getURL()');

		d = '[' + d + ']';
		d = d.replace(/\}{/g, '},{').replace('},]', '}]').replace(/\^/g, '\'');			
		
		var arr = JSON.parse(d);

		if(arr.length < 1){
			noresults();
			$('#loading_feed').fadeOut();
		};
		
		var i;
		var num = arr.length;
		 results_total_count=arr.length;
		
		 results = [];
		
		if(arr[0]){
			for(i = 0; i<num; i++){
				 getData(arr[i].urlArt);
							
				//url_list.push({"url" : arr[i].urlArt});
			};
		};
	};
	
	var getData = function(url){
		console.log('getData');
		var sqlInsert = 'select * from wire where storyURL = "' + url + '"';
		var test_callback = function(){console.log('got data');};
		var callback = function(data){
			if(data.length > 10){
				results = results + "," + data;			
			};
			results_count =  results_count + 1;
			if( results_count ==  results_total_count){
				$('#loading_feed').fadeOut();
				sort( results);
			};
		};

		db.call(sqlInsert, callback);
	};
	
	var noresults = function(){
		console.log('no results');
	};

	var sort = function(data){
		//console.log('sort()');

		//prepare data for parsing
		data = '[' + data + ']';
		data = data.replace('[,{', '[{').replace('},]', '}]').replace(/\^/g, '\'');
			
		//parse data
		var array = JSON.parse(data);		
		
		//sort list of heds by frequency
		var sorted_results_map = {};

		var i;
		var num = array.length	
		for(i=0; i<num; i++){
			var key = array[i].hed;
			sorted_results_map[key] = (sorted_results_map[key] || 0) + 1;
		};
				
		//push sorted list of heds to new array
		var sorted_results = [];
		for(key in sorted_results_map) sorted_results.push({
			key: key, 
			freq: sorted_results_map[key],
		});
		
		sorted_results.sort(function(a,b){return b.freq - a.freq});
				
		//create sorted list w. all story info
		var newList = [];		
		var checkList = [];
		
		for(key in sorted_results) {		

			var obj = sorted_results[key].key;
			var j;		
			
		    for (j = 0; j < array.length; j++) {
		        if (array[j].hed === obj) {

		        	//if obj is not in checkList, then push it to new list.
					var dupeTest = checkList.indexOf(obj);
					if(dupeTest === -1){
						newList.push(array[j])
					};
					
					checkList.push(array[j].hed);

		        };
		    };
		};
		
		parse(newList);
				
	};
	
	var parse = function(array){
		console.log('parse()');
		newsfeed.empty();
		
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
		    	newsfeed.load(article);
	
			};
		};	
	};
	
	return {
		init : init
	};
	

})();


