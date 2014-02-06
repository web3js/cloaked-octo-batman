// Build a simple calculator. No interface needed. Should work in console.
// Should: 
// - be namespaced
// - have properties such as: name , version, etc.
// - have functions as properties: add, multiply, etc. the more the fancier.
// - should store the results in an array, which should also be nested in the same namespace.


// Hint: we need a little help from our friend "this". Don't worry too much about it
// If it is unfamiliar. We will cover the hell out of it pretty soon. For now, take my word for it.
// Super special points if you make an interface for it. Totally not a requirement tho.

console.log("Hello I am Boris. I can perform wild operations such as add, subtract, multiply, divide");
console.log("Type at the bottom boris.functions.desired operation(v1, v2);");

var boris = {

//this is my wonderful array to store values
  results : [],
  
//this are hte functions performing the operations right?  
  functions : {
    
  	add : function(v1, v2){ //these are my two values
  		boris.results.push(this.addOp(v1, v2)); //push the values to array
  	},
  	
  	subtract : function(v1, v2){
  		boris.results.push(this.subtractOp(v1, v2));
  	},
  	
  	multiply : function(v1, v2){
  		boris.results.push(this.multiplyOp(v1, v2));
  	},
  		
  	divide : function(v1, v2){
  		//return(v1 / v2);
  		boris.results.push(this.divideOp(v1, v2));
  		//console.log(this.divide(v1, v2));
  	},
  	
//now let's create the functions inside the functions that actually perform the operation

	addOp : function(v1, v2){
		return(v1 + v2);
	},
	
	subtract : function(v1, v2){
		return(v1 - v2);
	},
	
	multiplyOp : function(v1, v2){
		return(v1 * v2);
	},
	
	divideOp : function(v1, v2){
		return(v1 / v2);
	}
  	
  }
	
};

//testing if it works?!
boris.functions.add(4,5);
console.log(boris.results);	


