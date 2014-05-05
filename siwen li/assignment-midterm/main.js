var app = app || {};

app.main = (function(){

	var totalCalorie = 0;

	var dietTime = new Date();
	var month = ['Jan','Feb','March','April','May','June','July','August','September','October','November','December'];

	var elements = {
		calculatorResult: document.querySelector('#totalCalorie'),
		category: document.querySelectorAll('.food-box'),
		clearButton: document.querySelector('.clearResult'),
		dietTime: document.querySelector('#date')
	};

	var attachEvents = function() {

    	for (var i = 0; i < elements.category.length;i++) {
    		
    		elements.category[i].addEventListener('click', function(event){
    			event.preventDefault();
    			var categoryValue = Number(this.dataset.value);
    			console.log(categoryValue);
    			
    			totalCalorie += categoryValue;
    			console.log(totalCalorie);

    			elements.calculatorResult.innerHTML = "TOTAL CALORIE: " + totalCalorie;

    		});
    	}

    };

    var clearResult = function() {

    	elements.clearButton.addEventListener('click', function(event){
    		event.preventDefault();
    		totalCalorie = 0;
    		elements.calculatorResult.innerHTML = "TOTAL CALORIE: " + totalCalorie;
    	})

    };

    var getDietDate = function() {

    	//var timeInfo = dietTime.getHours()+':'+dietTime.getMinutes()+', '+month[dietTime.getMonth()]+' '+dietTime.getDate()+' '+dietTime.getFullYear();
    	var timeInfo = month[dietTime.getMonth()]+' '+dietTime.getDate()+' '+dietTime.getFullYear();
    	elements.dietTime.innerHTML = timeInfo;
    };


	var View = function(d) {


	};

	var Model = function() {


	};

	var init = function() {
	    console.log('App initialized');
	    attachEvents();
	    clearResult();
	    getDietDate();

  	};
	  
  	return {
	    init : init,
  	};



})();

window.addEventListener('DOMContentLoaded', app.main.init);