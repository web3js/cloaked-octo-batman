// create a namespace for a simple calculator app

var calculator = {

	name: 'Bo-Ris da calculator',
	version: 0.1,

	add: function(v1,v2){
		this.shove(v1 + v2);
	},
	subtract: function(v1,v2){
		this.shove(v1 - v2);
	},
	multiply: function(v1,v2){
		this.shove(v1 * v2);
	},
	divide: function(v1,v2){
		this.shove(v1 / v2);
	},
	remainder: function(v1,v2){
		this.shove(v1 % v2);
	},

	numException: {
		name: 'Number exception',
		message: 'Bo-Ris says numbers only!'
	},

	optionException: {
		name: 'Option exception',
		message: 'Bo-Ris says your options are: add, subtract, multiply, divide, remainder.'
	},

	calculate : function(option, v1, v2){

		//to do: do a check for optionException. For Loop?

		var options = ["add","subtract","multiply","divide","remainder"],
			len = options.length,
			i = 0;

		// for (i; i < len; i++) {
		// 		if (option !== options[i]){
		// 			throw this.optionException.message;							
		// 		}
		// 	}				

		if (typeof v1 === "number" && typeof v2 === "number"){
			switch(option) {
				case "add" : this.add(v1,v2); break;
				case "subtract" : this.subtract(v1,v2); break;
				case "multiply" : this.multiply(v1,v2); break;
				case "divide" : this.divide(v1,v2); break;
				case "remainder" : this.remainder(v1,v2); break;
			}

		} else {

			throw this.numException.message;
		}
	}, 
	
	shove : function(result){
		this.data.push(result);
	},

	data : []
}
