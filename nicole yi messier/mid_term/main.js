var app = app || {};

app.main = (function(){



	var init = function(){
		console.log('App Init - User Profile Sign Up')
	};

	return {
		init : init,
		userInfo: userInfo,
	}

})();

window.addEventListener('DOMContentLoaded', app.main.init);