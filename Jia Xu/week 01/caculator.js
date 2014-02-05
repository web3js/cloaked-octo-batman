var caculator = {

	add : function(a,b){
		return a+b;
	},

	subtract : function(c,d){
		return c-d; 
	},

	multiply : function(e,f){
		return e*f; 
	},

	divide : function(g,h){
		return g/h;
	},
};


var myApp = {
  results : [],
  
  functions : {
    operation : function(num1, num2){
      myApp.results.push(caculator.add(num1,num2),caculator.subtract(num1,num2),caculator.multiply(num1,num2),caculator.divide(num1,num2));
      
    }
  }
	
};

myApp.functions.operation(6,4);

console.log(myApp.results);
