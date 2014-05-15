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
	displayInfo,
	playSounds;

	elements = {
		spin : $('.spin')
	};

	attachEvents  = function(){
		elements.spin.on('click', function(event) {

			// ---------------sound plugin---------------------
			 $.ionSound({
            sounds: [
                "ping",
                "buzzer2",
                "coins"
            ],
            path: "sounds/",
            multiPlay: true,
            volume: "1.0"
        });
			$.ionSound.play("ping");
			event.preventDefault();
			numberGenerator();
			winnerGenerator();
			fetchData();
			displayInfo();
			playSounds();

			console.log('spin button clicked');         

		});
	};

	tpl = $('.gif-tpl').text();
	renderGif = _.template(tpl);

	numberGenerator = function(){
		contractNumber = Math.floor(Math.random()*14);
		return contractNumber;
		console.log('contractNumber: ' + contractNumber);
	};

	winnerGenerator = function(){
		var number = Math.floor(Math.random()*4);

		if(number === 1){
			winnerStatus = "Loser!";
		} else {
			winnerStatus = "Winner!";
		}

		console.log("winnerStatus: " + winnerStatus);
		return winnerStatus;
	};

	//insert json contract data 
	contractData = {"contracts" : 
	[{"contractName":"Honeycomb Sandwich Training","contractKeyword":"sandwhich","contractAmount":"21,588.80","contractDescription":"Contract for trainning!(?)","source":"https://www.fbo.gov/index?s=opportunity&mode=form&tab=core&id=d36996faf8640697419bf70bf2d768e"},
{"contractName":"Sushi Prep Tables","contractKeyword":"sushi","contractAmount":"4 Million","contractDescription":"Contract for sushi vendors!","source":"https://www.fbo.gov/?s=opportunity&mode=form&tab=core&id=c96e05c45d5d40fbee87658aa88c34e7&_cview=0"},
{"contractName":"Textiles","contractKeyword":"textiles","contractAmount":"41 Million","contractDescription":"Contracts for textiles! ","source":"http://www.usaspending.gov/explore?fromfiscal=yes&carryfilters=on&fiscal_year=2014&maj_contracting_agency=7000&maj_contracting_agency_name=Department+of+Homeland+Security&typeofcontractpricing=J&tab=By%2BPrime%2BAwardee&typeofview=transactions&piid=HSBP1014J00020&agencyid=7014&agencyname=U.S.+CUSTOMS+AND+BORDER+PROTECTION"},
{"contractName":"Ribbons & Bracelets","contractKeyword":"bracelets","contractAmount":"62,000.00","contractDescription":"Contract for ribbons & bracelets!  Easy $!","source":"https://www.fbo.gov/?s=opportunity&mode=form&id=a43df8a993492300c44d1dc28b5117c1&tab=core&_cview=0"},
{"contractName":"Pencils & Stickers","contractKeyword":"pencils","contractAmount":"62,000.00","contractDescription":"Contract for pencils & stickers!  Easy $!","source":"https://www.fbo.gov/?s=opportunity&mode=form&id=a43df8a993492300c44d1dc28b5117c1&tab=core&_cview=0"},
{"contractName":"Bowling Entertainment System","contractKeyword":"bowling","contractAmount":"99,000.00","contractDescription":"Bowling System Upgrade!","source":"https://www.fbo.gov/index?s=opportunity&mode=form&id=d72744005fdbbd81ec9c3080e459b5be&tab=core&_cview=0"},
{"contractName":"Folgers Coffee","contractKeyword":"coffee","contractAmount":"2,986.00","contractDescription":"Contract for Folgers Coffee!","source":"https://www.fbo.gov/?s=opportunity&mode=form&tab=core&id=454d8e309c4215701d6ead90267d200e&_cview=0"},
{"contractName":"Coffee Mugs","contractKeyword":"coffe","contractAmount":"300,000.00","contractDescription":"Contract for Coffee Mugs!","source":"https://www.fbo.gov/index?s=opportunity&mode=form&tab=core&id=c031763adc23a23a7c2bad163b2e141b&_cview=0"},
{"contractName":"Digital Photo Frames","contractKeyword":"frame","contractAmount":" 4 Million","contractDescription":"Various incentive awards","source":"https://www.fbo.gov/index?s=opportunity&mode=form&id=842862bf6bef63a2cf8c2cb4feda2fbb&tab=core&tabmode=list&="},
{"contractName":"Buffet Style Food for a Day","contractKeyword":"buffet","contractAmount":"27,475.00","contractDescription":"wings - hot dogs - hamburgers - pigs n blanket ","source":"https://www.fbo.gov/?s=opportunity&mode=form&id=2b92634c96e9ef9933f40e3d0af5d846&tab=core&_cview=0"},
{"contractName":"Snow Cone Maker","contractKeyword":"cone","contractAmount":"17,767.43","contractDescription":"Contract for snow cone maker!","source":"https://www.fbo.gov/index?s=opportunity&mode=form&tab=core&id=bfcf7b02b8f5bc48e189eaf9789e944b"},
{"contractName":"Cotton Candy Machine","contractKeyword":"cotton","contractAmount":"17,767.43","contractDescription":"Contract for cotton candy machine!","source":"https://www.fbo.gov/index?s=opportunity&mode=form&tab=core&id=bfcf7b02b8f5bc48e189eaf9789e944b"},
{"contractName":"Amazon Kindle eContent","contractKeyword":"amazon","contractAmount":"1.3 Million","contractDescription":"eContent compatible with Amazon Kindle","source":"https://www.fbo.gov/index?s=opportunity&mode=form&id=a0a6312a47b29f14135fbcf7456a453e&tab=core&tabmode=list"},
{"contractName":"Make-up Services","contractKeyword":"Make Up","contractAmount":"250,000.00","contractDescription":"Contract for make-up services!","source":"https://www.fbo.gov/index?s=opportunity&mode=form&id=c5d127cfde5c84b97fe5f813af3039cd&tab=core&_cview=0"}
]};	

	var defaultWord = 'usa government';

	// ----------test winner data ----------------
	var contractNumber = 8;
	var testData = contractData.contracts[contractNumber].contractKeyword; 
	

	initialFetchData = function(){
		$.getJSON('http://api.giphy.com/v1/gifs/search?q=' + defaultWord + '&api_key=dc6zaTOxFJmzC&limit=2', function(result){
			console.log('data received', result.data);

			$(renderGif({gifs : result.data})).appendTo('.gifs');

		});



		$.getJSON('http://api.giphy.com/v1/gifs/search?q=' + 'america' + '&api_key=dc6zaTOxFJmzC&limit=1', function(result){
			console.log('data received', result.data);

			$(renderGif({gifs : result.data})).appendTo('.gifs');
		});

		$('.winnerStatus').text('Play the Game!');
			$('.contractAmount').text('$0.00 Million');
			$('#contractName').html('Win US Government <br> $Money$');
			$('#contractName').css('color', 'black');
			
			
			

		// ----------test winner data ----------------
			// $('.winnerStatus').text('Winner!');
			// $('.contractAmount').text('$' + contractData.contracts[contractNumber].contractAmount);
			// $('#contractName').text(contractData.contracts[contractNumber].contractName);
			// $('#contractDescription').text('Description: ' + contractData.contracts[contractNumber].contractDescription);
			// $('#source').html( 'Source: ' +'<a href = \' ' + contractData.contracts[contractNumber].source + ' \'> fedBizOpps.gov </a>' );
			// $('#moneyLost').text('');

				// ----------test loser data ----------------

			// $('.winnerStatus').text('Try Again!');
			// $('.contractAmount').text('$0.00 Million');
			// $('#contractName').text(contractData.contracts[contractNumber].contractName);
			// $('#contractDescription').text('Description: ' + contractData.contracts[contractNumber].contractDescription);
			// $('#moneyLost').text('Money Lost: $' + contractData.contracts[contractNumber].contractAmount);
			// $('#source').html( 'Source: ' +'<a href = \' ' + contractData.contracts[contractNumber].source + ' \'> fedBizOpps.gov </a>' );
	};

	fetchData = function(){
		
		if (winnerStatus == "Winner!" & contractData.contracts[contractNumber].contractKeyword !== "sushi" & contractData.contracts[contractNumber].contractKeyword !== "frame" ){
			$.getJSON('http://api.giphy.com/v1/gifs/search?q=' + contractData.contracts[contractNumber].contractKeyword + '&api_key=dc6zaTOxFJmzC&limit=3', function(result){
				console.log('data received', result.data);
				$('.gifs').html('');

				$(renderGif({gifs : result.data})).appendTo('.gifs');

				//console.log("results: " + result);
			});
		} else if  (winnerStatus == "Loser!"& contractData.contracts[contractNumber].contractKeyword !== "sushi"  & contractData.contracts[contractNumber].contractKeyword !== "frame" ){

			$.getJSON('http://api.giphy.com/v1/gifs/search?q=' + "gambling"+ '&api_key=dc6zaTOxFJmzC&limit=3', function(result){
				console.log('data received', result.data);


			

				$('.gifs').html('');
				$(renderGif({gifs : result.data})).appendTo('.gifs');
				//console.log("results: " + result);
				});
		} else if(winnerStatus == "Winner!" & contractData.contracts[contractNumber].contractKeyword == "sushi"){
			console.log('SUSHI!!');

			$.getJSON('http://api.giphy.com/v1/gifs/search?q=' + contractData.contracts[contractNumber].contractKeyword + '&api_key=dc6zaTOxFJmzC&limit=2', function(result){
				console.log('data received', result.data);
				$('.gifs').html('');
				$(renderGif({gifs : result.data})).appendTo('.gifs');
			});

			$.getJSON('http://api.giphy.com/v1/gifs/search?q=' + 'bills' + '&api_key=dc6zaTOxFJmzC&limit=1', function(result2){
				console.log('data received', result2.data);
				$(renderGif({gifs : result2.data})).appendTo('.gifs');
			});

		} else if(winnerStatus == "Winner!" & contractData.contracts[contractNumber].contractKeyword == "frame"){
			console.log('frames!!');

			$.getJSON('http://api.giphy.com/v1/gifs/search?q=' + contractData.contracts[contractNumber].contractKeyword + '&api_key=dc6zaTOxFJmzC&limit=2', function(result){
				console.log('data received', result.data);
				$('.gifs').html('');
				$(renderGif({gifs : result.data})).appendTo('.gifs');
			});

			$.getJSON('http://api.giphy.com/v1/gifs/search?q=' + 'bills' + '&api_key=dc6zaTOxFJmzC&limit=1', function(result2){
				console.log('data received', result2.data);
				$(renderGif({gifs : result2.data})).appendTo('.gifs');
			});

		} 
			
	};

	displayInfo = function(){
		if (winnerStatus == "Winner!"){
			$('.winnerStatus').text('Winner!');
			$('.contractAmount').text('$' + contractData.contracts[contractNumber].contractAmount);
			$('#contractName').text(contractData.contracts[contractNumber].contractName);
			$('#contractDescription').text('Description: ' + contractData.contracts[contractNumber].contractDescription);
			$('#source').html( 'Contract Source: ' +'<a class = \'source\' href = \' ' + contractData.contracts[contractNumber].source + ' \'> fedBizOpps.gov/' + contractData.contracts[contractNumber].contractKeyword +  '</a>' );
			$('#moneyLost').text('');
		} else if(winnerStatus == "Loser!"){
			$('.winnerStatus').text('Try Again!');
			$('.contractAmount').text('$0.00 Million');
			$('#contractName').text(contractData.contracts[contractNumber].contractName);
			$('#contractDescription').text('Description: ' + contractData.contracts[contractNumber].contractDescription);
			$('#moneyLost').text('Money Lost: $' + contractData.contracts[contractNumber].contractAmount);
			$('#source').html( 'Contract Source: ' +'<a class = \'source\' href = \' ' + contractData.contracts[contractNumber].source + ' \'> fedBizOpps.gov/' + contractData.contracts[contractNumber].contractKeyword + '</a>' );
		};

		console.log('displayInfo function!');
	};


	playSounds = function()
	{
		if(winnerStatus == "Winner!"){
			$.ionSound.play("coins");
		} else if (winnerStatus == "Loser!") {
			$.ionSound.play("buzzer2");
		};
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