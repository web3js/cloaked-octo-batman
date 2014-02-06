// create a namespace for a simple calculator app

var mm = {

	name: 'Math Magic',
	
	version: 'v1.0',
	
	answerLog : [],

	exception: {
		nan: {
			name: 'Error: NaN',
			message: 'Sorry, Magic Math requires numbers.'
		},
	
		func: {
			name: 'Error: Not A Function',
			message: "Sorry, Magic Math will only add, subtract, divide or multiply. It's not so magic after all."
		},
	},
	
	form: {
		listen: function(){
			
			$('#calculate').click(function(e){
				e.preventDefault();
			    console.log('click');
			    mm.form.numCheck(mm.calculate);
			});	
		},
		
		numCheck: function(callback){
			console.log('numcheck');
			
			var method = $('#method').find(":selected").val(); //.text($(this).find(":selected").text());
			var num1 = $('#num1').val();
			var num2 = $('#num2').val();
						
			
			if(num1 == "" || num2 == ""){
				alert("numbers only!");
			}else{
			
			console.log(method + ', ' + parseFloat(num1) + ', ' + parseFloat(num2));
			callback(method, parseFloat(num1), parseFloat(num2));
			}
		},
		
		
	},

	saveResult : function(num){
		this.answerLog.push(num);
		console.log(num);
		$('#result').text(num);
	},
	
	calculate : function(method, num1, num2){
	
		var answer;
		
		if (typeof num1 === 'number' && typeof num2 === 'number'){
			switch(method) {
				case 'add': 
				answer = num1 + num2;
				break;
				
				case 'subtract': 
				answer = num1 - num2;
				break;
				
				case 'divide':
				answer = num1 / num2; 
				break;
				
				case 'multiply': 
				answer = num1 * num2;
				break;	
				
				default:
				throw this.exception.func.message;
				break;
			}
			
			mm.saveResult(answer);
			
		} else {
			throw this.exception.nan.message;
		}

	}, 
	
}


$( document ).ready(function() {
	mm.form.listen();
});

