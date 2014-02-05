//Calculator assignment for web3.js
//Code by Nicole Yi Messier

var myApp = {
  
  //array to store returned values
  results : [],
   

  functions : {
    
    //functions that make the returned values visible in console & store the returned values in the results array
    add: function (num1, num2){
    	console.log(this.addFunction(num1, num2));
    	myApp.results.push(this.addFunction(num1, num2));
    },
    subtract: function (num1, num2){
    	console.log(this.subtractFunction(num1, num2));
    	myApp.results.push(this.subtractFunction(num1, num2));
    },
    divide: function (num1, num2){
    	console.log(this.divideFunction(num1, num2));
    	myApp.results.push(this.divideFunction(num1, num2));
    },
    multiply: function (num1, num2){
    	console.log(this.multiplyFunction(num1, num2));
    	myApp.results.push(this.multiplyFunction(num1, num2));
    },
    
    
    //calculator functions
    addFunction : function(num1, num2){return num1+num2;},
    subtractFunction : function(num1, num2){return num1-num2;},
    divideFunction : function(num1, num2){return num1/num2;},
    multiplyFunction : function(num1, num2){return num1*num2;},
  }
	
};


//demonstrating calculator functionality 
myApp.functions.add(2,3);
myApp.functions.subtract(4,3);
myApp.functions.divide(6,3);
myApp.functions.multiply(5,5);
console.log(myApp.results);
