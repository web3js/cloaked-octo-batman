// create a namespace for a simple calculator app

var calculator = {

	name: 'Bo-Ris da calculator',
	version: 0.1,

	functions: {
		add: function(v1,v2){
			calculator.shove(v1 + v2);
		},
		subtract: function(v1,v2){
			calculator.shove(v1 - v2);
		},
		multiply: function(v1,v2){
			calculator.shove(v1 * v2);
		},
		divide: function(v1,v2){
			calculator.shove(v1 / v2);
		},
		remainder: function(v1,v2){
			calculator.shove(v1 % v2);
		},
	},

	numException: {
		name: 'Number exception',
		message: 'Bo-Ris says numbers only!'
	},

	optionException: {
		name: 'Option exception',
		message: 'Bo-Ris says your options are: add, subtract, multiply, divide, remainder.'
	},

	input: {
		listen: function() {

			$('.button').on('click', function(e){
				e.preventDefault();
				calculator.input.numCheck(calculator.calculate);
			});
		},

		numCheck: function(callback) {
			var option = $('#option').find(":selected").val(),
				val1 = $('#value1').val(),
				val2 = $('#value2').val();

			if (val1 == "" || val2 == "") {
				alert("numbers only!");
			} else {
				console.log(option + ', ' + val1 + ', ' + val2);
				callback(option, parseFloat(val1), parseFloat(val2));
			}
		}
	},

	calculate : function(option, v1, v2){				

		if (typeof v1 === "number" && typeof v2 === "number"){
			switch(option) {
				case "add" : calculator.functions.add(v1,v2); break;
				case "subtract" : calculator.functions.subtract(v1,v2); break;
				case "multiply" : calculator.functions.multiply(v1,v2); break;
				case "divide" : calculator.functions.divide(v1,v2); break;
				case "remainder" : calculator.functions.remainder(v1,v2); break;
				//default throw calculator.optionException.message; break;
			}

		} else {

			throw this.numException.message;
		}
	}, 
	
	shove : function(result){
		this.data.push(result);
		$('#result').html('<p>' + ' ' + calculator.data + '</p></br>');
	},

	data : []
}

$(document).ready(function(){
	calculator.input.listen();
})