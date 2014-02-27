// Build a simple calculator. No interface needed. Should work in console.
// Should: 
// - be namespaced
// - have properties such as: name , version, etc.
// - have functions as properties: add, multiply, etc. the more the fancier.
// - should store the results in an array, which should also be nested in the same namespace.


// Hint: we need a little help from our friend "this". Don't worry too much about it
// If it is unfamiliar. We will cover the hell out of it pretty soon. For now, take my word for it.



// var myApp = {
//   results : [],
  
//   functions : {
//     someFunction : function(num1, num2){
//       myApp.results.push(/*result of operation*/);
//       // it used to be:
//       // this.results.push();
//     }
//   }
	
// };

console.log("Hey beautiful, this is a calculator")

console.log("You can use it by typing: calculator.calculatorFunctions.'your desired function'(a number, another number);")

console.log("oh and there is four functions: add, subtrackt, multiply, divide")

//create the Object calculator
var calculator = {

	

	//array where the values are pushed to
	arrOutput : [ 1, 2, 3, 4 ],

	//my four functions, for adding, subtracting, multiplying and dividing
	calculatorFunctions : {
		//addFunction takes parameters x and y
		addFunction : function(x, y){
			calculator.arrOutput.push(this.add(x, y));
		},

		subtracktFunction : function(x, y){
			calculator.arrOutput.push(this.subtrackt(x, y));
		},

		multiplyFunction : function(x, y){
			calculator.arrOutput.push(this.multiply(x, y));
		},

		divideFunction : function(x, y){
			calculator.arrOutput.push(this.divide(x, y));
		},

			//Because we say this.add - it's going to look for the add function:
			//And this add function say that it should return x + y
			 add : function(x, y) {
				return(x + y);
			},

			 subtrackt : function(x, y) {
				return(x - y);
			},
			 multiply : function(x, y) {
			 	return(x * y);
			 },

			 divide : function(x, y) {
			 	return(x / y);
			 }

	}

};
	








