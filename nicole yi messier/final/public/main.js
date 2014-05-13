//var app = app || {};

var app = (function(w, d, $, _) {

	var init,
	attachEvents, 
	elements,
	numberGenerator,
	contractNumber,
	winnerGenerator,
	winnerStatus,
	fetchData,
	initialFetchData,
	tpl, 
	renderGif,
	contractData,
	displayInfo;

	elements = {
		spin : $('.spin')
	};

	attachEvents  = function(){
		elements.spin.on('click', function(event) {
			event.preventDefault();
			numberGenerator();
			fetchData();
			winnerGenerator();
			displayInfo();

			console.log('spin button clicked');
		});
	};

	tpl = $('.gif-tpl').text();
	renderGif = _.template(tpl);

	numberGenerator = function(){
		contractNumber = Math.floor(Math.random()*2);
		return contractNumber;
		console.log('contractNumber: ' + contractNumber);
	};

	winnerGenerator = function(){
		var number = Math.floor(Math.random()*4);

		if(number === 1){
			winnerStatus = "Winner!";
		} else {
			winnerStatus = "Loser!";
		}

		console.log("winnerStatus: " + winnerStatus);
		return winnerStatus;
	};

	//insert json contract data 
	contractData = {"contracts" : [
	    {
	        "contractName" : "Glitter",
	        "contractKeyword" : "glitter",
	        "contractAmount" : "5 Million",
	        "contractDescription" : "Contract for glitter!",
	        "source" : "https://www.fbo.gov/?s=opportunity&mode=form&tab=core&id=c96e05c45d5d40fbee87658aa88c34e7&_cview=0"
	    },
	    {
	        "contractName": "Sushi Prep Tables ",
	        "contractKeyword" : "sushi", 
	        "contractAmount" : "4 Million",
	        "contractDescription" : "Contract for sushi vendors!",
	        "source" : "https://www.fbo.gov/?s=opportunity&mode=form&tab=core&id=c96e05c45d5d40fbee87658aa88c34e7&_cview=0"
	    }
	]};	

	var defaultWord = 'america';

	initialFetchData = function(){
		$.getJSON('http://api.giphy.com/v1/gifs/search?q=' + defaultWord + '&api_key=dc6zaTOxFJmzC&limit=3', function(result){
			console.log('data received', result.data);

			$(renderGif({gifs : result.data})).appendTo('.gifs');
		});
	};

	fetchData = function(){
		$.getJSON('http://api.giphy.com/v1/gifs/search?q=' + contractData.contracts[contractNumber].contractKeyword + '&api_key=dc6zaTOxFJmzC&limit=3', function(result){
			console.log('data received', result.data);
			$('.gifs').html('');
			$(renderGif({gifs : result.data})).appendTo('.gifs');
			//console.log("results: " + result);
		});
	};

	displayInfo = function(){
		if (winnerStatus == "Winner!"){
			$('.winnerStatus').text('Winner!');
			$('.contractAmount').text('$' + contractData.contracts[contractNumber].contractAmount);
			$('#contractName').text('Name: ' + contractData.contracts[contractNumber].contractName);
			$('#contractDescription').text('Description: ' + contractData.contracts[contractNumber].contractDescription);
			$('#source').html( 'Source: ' +'<a href = \' ' + contractData.contracts[contractNumber].source + ' \'> fedBizOpps.gov </a>' );
		} else if(winnerStatus == "Loser!"){
			$('.winnerStatus').text('Try Again!');
			$('.contractAmount').text('$0.00 Million');
			$('#contractName').text('Name: ' + contractData.contracts[contractNumber].contractName);
			$('#contractDescription').text('Description: ' + contractData.contracts[contractNumber].contractDescription);
			$('#moneyLost').text('Money Lost: ' + contractData.contracts[contractNumber].contractAmount);
			$('#source').html( 'Source: ' +'<a href = \' ' + contractData.contracts[contractNumber].source + ' \'> fedBizOpps.gov </a>' );
		};

		console.log('displayInfo function!');
	};


	init = function(){
		initialFetchData();
		attachEvents();
		console.log("app is running!");
		//console.log(contractData.contracts[0].contractName);
		//console.log(contractData.contracts[contractNumber].contractKeyword);
	};

	return{
		init : init
	}

})(window, document, jQuery, _);

window.addEventListener('DOMContentLoaded', app.init);