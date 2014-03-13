var tr = (function(){

	var init = function(q){
		
		call(q);
		
	};
	
	var call = function(url){
		
		var url = 'lib/soc/twitter_roll.php?q=' + url;
		console.log(url);

		$.ajax({
				url: url
			}).success(function(data) {
				parse(data);
			}).error(function(data){				
				console.log(data);
			});
		
	};
	
	var parse = function(d){
		
		var arr = JSON.parse(d);
		var num = arr.length;
		var i;
		
		for(i = 0; i<num; i++){
			var name = arr[i].user.screen_name;
			var namelink = 'https://twitter.com/'+name;
			var tweet = arr[i].text;
			var tweetlink = 'https://twitter.com/'+name+'/status/'+arr[i].id_str;
			build(name, namelink, tweet, tweetlink);
		};

		
	};
	
	var build = function(name, namelink, tweet, tweetlink){
		//build newsfeed block
		var template = $('.twitterFeed li.template');
		var feedBlock = template.clone();
		feedBlock.removeClass('template').addClass('tweet');
		
		//feedBlock.find('name').text(name).text();
		var name_link = document.createElement('a');
		var name_link_name = document.createTextNode('@' + name);
		name_link.appendChild(name_link_name);
		name_link.href = namelink;
		name_link.target = "_blank";
		feedBlock.find('h2').append(name_link);
		
		var tweet_link = document.createElement('a');
		var tweet_link_text = document.createTextNode(tweet);
		tweet_link.appendChild(tweet_link_text);
		tweet_link.href = tweetlink;
		tweet_link.target = "_blank";
		feedBlock.find('h1').append(tweet_link);
 	
		$('.twitterFeed ul').append(feedBlock);
		
	};
	
	
	return {
		init: init
	};
	
	
})();
