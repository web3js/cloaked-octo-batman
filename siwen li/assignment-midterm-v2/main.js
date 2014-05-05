var app = app || {};

app.main = (function(){

	var totalCalorie = 0;

	var dietTime = new Date();
	var month = ['Jan','Feb','March','April','May','June','July','August','September','October','November','December'];

	var elements = {
		calculatorResult: document.querySelector('#totalCalorie'),
		category: document.querySelectorAll('.food-box'),
		clearButton: document.querySelector('.clearResult'),
		dietTime: document.querySelector('#date'),
        foodLabel: document.querySelector('#label')
	};

    var dataset = [];

	var attachEvents = function() {

    	fetchJSONFile('data.json', function(data){
        // do something with your data
            for (var j = 0; j < data.length; j++) {
                var newFood = new Model(data[j].name, data[j].unit, data[j].value);
                new View(newFood).init();
            }
        //console.log(dataset[0].name);
        });
        
        
        
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

    //fetch a json file
    var fetchJSONFile = function(path, callback) {

        var httpRequest = new XMLHttpRequest();
        httpRequest.onreadystatechange = function() {
            if (httpRequest.readyState === 4) {
                if (httpRequest.status === 200) {
                    var data = JSON.parse(httpRequest.responseText);
                    if (callback) callback(data);
                }
            }
        };

        httpRequest.open('GET', path);
        httpRequest.send(); 
    };

    // this requires the file and executes a callback with the parsed result once
    // it is available
    

    var Model = function(name,unit,value){

        foodName = name;
        foodUnit = unit;
        foodValue = value;

    };


	var View = function(food) {
        this.render = function() {
            //add contents
            this.txtName = document.createElement('div');
            this.txtUnit = document.createElement('span');

            //add class
            this.txtName.classList.add('food-box');
            this.txtUnit.classList.add('unit');

            //add relationship
            this.txtName.innerHTML = food.foodName;
            this.txtUnit.innerHTML = food.foodUnit;
            this.txtName.appendChild(elements.foodLabel);
            this.txtUnit.appendChild(this.txtName);
            this.txtName.setAttribute('data-value','food.foodValue');
        }

        this.init = function() {
            this.render();
            return this;
        };

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