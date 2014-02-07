// Xiaofeng Lin Week One Calculator Assignment

var myCalculator = {

	add : function(a,b){
		return(a + b);
	},
	subtract : function(c,d){
		return(c - d); 
	},
	multiply : function(e,f){
		return(e * f); 
	},
	divide : function(g,h){
		return(g / h);
	},
};

var myApp = {

  results : [],
  
  functions : {
    operation : function(num1, num2){
      		myApp.results.push(
      		myCalculator.add(num1,num2),
      		myCalculator.subtract(num1,num2),
      		myCalculator.multiply(num1,num2),
      		myCalculator.divide(num1,num2)
      		);     
	  		}
	  		  }
};

myApp.functions.operation(3,5);
console.log(myApp.results);