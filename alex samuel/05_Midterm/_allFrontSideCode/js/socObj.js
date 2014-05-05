

var ip = (function(){
	
	var ip_u,
		ip_p,	
		ip_url,
		ip_t;
		
	var listeners = function(){
		
		$('#instapaper').click(function(){
			console.log('click');
			ip_loggedincheck();
		});

		$('#ip_login_close').click(function(){
			$('.ip_login').fadeOut();
			blur.hide();
			
		});

		$('#ip_login_submit').click(function(e){
			e.preventDefault();
			ip_getnewlogin();
		});
		
	};	
	
	var ip_loggedincheck = function(t, url){
	
		console.log('hi');
		
		var login = localStorage.getItem('bdgaiplog');
		
		if(login){
		
			var x = JSON.parse(login);		
			ip_u = x.u;
			ip_p = x.p;	
			ip_url = url;
			ip_t = t;		
			console.log('post');
			ip_posturl();
			
		}else{	
			console.log('you need to log in');
			blur.show();
			$('.ip_login').fadeIn();
			//load log in form
		}
		
	};
	
	var ip_getnewlogin = function(){
		ip_u = $('#ip_login_name').val();
		ip_p = $('#ip_login_pass').val();
		ip_loginsubmit();
		//LOAD SPINNER
	};
	
	var ip_savelogin = function(){
		var x = {u:ip_u, p: ip_p};
		x = JSON.stringify(x);
		localStorage.setItem("bdgaiplog", x) ;	
	};
		
	var ip_loginsubmit = function(){
		
		var url = 'ip_logincheck.php?u=' + ip_u + '&p=' + ip_p;
		
		$.ajax({
				url: url
			}).success(function(data) {
				//HIDE SPINNER
				console.log(data);
				//ENCRYPT PASSWORD
				blur.hide();
				$('.ip_login').fadeOut();
				ip_savelogin();
				ip_posturl();
			}).error(function(data){				
				//ERROR MESSAGE
				console.log(data);
			});

	};
	
	var ip_posturl = function(){

		var url = 'lib/soc/ip_addurl.php?u=' + ip_u + '&p=' + ip_p + '&url=' + ip_url + '&t=' + ip_t;
		console.log(url);
		
		$.ajax({
				url: url
			}).done(function(data) {
				//HIDE SPINNER
				if(data == '201'){
					alert('posted!');
				};
			}).error(function(data){				
				//ERROR MESSAGE
				console.log(data);
			});
			
	};
	
	var init = function(){
		
		listeners();
	};
	
	return{
		init: init,
		check : ip_loggedincheck
	}	
	
})();


var mail = (function(){

	
	var send = function(pub, title, url){

		var subj = "Spotted On [Bodeg.ga]: " + title;
		var body = "I thought you'd be interested in this article from " + pub + ": " + url;

	    var link = 'mailto:?subject='
                             + encodeURIComponent(subj)
                             + "&body=" 
                             + encodeURIComponent(body);
             
	    window.location.href = link;
		
	};
	
	
	return {
		send: send
	};
	
	
})();






