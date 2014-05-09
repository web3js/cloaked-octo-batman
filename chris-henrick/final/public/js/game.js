// TO DO:
// add a option for a hint
// add a score counter 
// add a timer
// add a start and stop

var app = app || {};

app.game = (function( w, d, $, _ ){

	// switched to jquery
	var attributes = {
		playAgain : $('#play-again'),
		status : $('.status'),
		answerField : $('.write-answer'),
		answerSubmit : $('.submit-answer'),
		guessList : $('.guesses'),
		answerCount: $('.status').find('#answer-count'),
		noAnswers : $('.no-answers-found'),
		answerListTitle : $('#answers-title'),
		docAnswer : $('.answer'),
		popup_content : $('.leaflet-popup-content'),
		popup_wrapper : $('.leaflet-popup-content-wrapper'),
		popup_submit : $('.submit-answer')				
	};

	//var answers = JSON.parse(localStorage.getItem('answers')) || [];
	var guesses = [];

	//var correct = false;
	var guessTemplate = $('.guess-template').text();
	var compiledTemplate = _.template(guessTemplate);

	// event listener for pop-up form submit
	var attachEvents = function(){
		$('.submit-answer').on('click', function(e) {
			e.preventDefault();
			if ($('.write-answer').val() !== "") {
				var fieldValue = $('.write-answer').val();
				console.log('write-answer: ', fieldValue);
				var newGuess = new Model({
					guessBodyText: fieldValue, 
					correct : false					
				}, guesses).guessCheck().save();				
				new View(newGuess, attributes.guessList).init();
				
				attributes.answerField.val('');				
			} 
		});
		
		app.events.subscribe('status:update', updateStatus);
		app.events.subscribe('ajax:GETcomplete', initialRender);		
	};

	// clear the guesses collection and start over.
	var playAgain = function(){		
		$('#play-again').on('click', function(e){
			console.log('play-again clicked');
			//localStorage.clear();			
			var clearGuesses = new Model({guessBodyText: null, correct: null}, guesses).remove();
			new View(clearGuesses, attributes.guessList).init();
			location.reload(true);
		});
	}

	// add each guess to the top of the guesses list
	var addAsFirstChild = function(parent,child) {
		var parentNode = parent,
			childNode = child;
		if (parentNode.firstChild) {
			parentNode.insertBefore(child, parent.firstChild);
		} else {
			parentNode.appendChild(child);
		}
	};

	var View = function(model, containerEl) {
		var index = guesses.indexOf(model),
			that = this;

		this.render = function() {
			this.$listItem = $(compiledTemplate({ guess : model.data }));
			if (model.data.correct === true) {				
				this.$listItem.find('p').addClass('correct');
			}			

			//addAsFirstChild(attributes.answerList, this.listItem);
			attributes.guessList.prepend(this.$listItem);			

			attributes.noAnswers.addClass('hidden');
			attributes.playAgain.removeClass('hidden');
			attributes.answerListTitle.removeClass('hidden');
			attributes.status.removeClass('hidden');	

			return this;
		};

		this.guess = function(){
			model.guess();
			return this;
		}

		this.checkFeature = function(){

		}

		// whoot!
		this.publishStatus = function() {
			var parsedArray = _.map(guesses, function(item) {
				return JSON.parse(item.guess);
			});
			var correctLen = _.where(parsedArray, {correct : true}).length;
			app.events.publish('status:update', [guesses.length, correctLen]);
			return this;
		}

		this.init = function() {
			//console.log('guesses are: ', guesses);
			this.publishStatus();
			this.render();
			return this;
		}
	}

	var Model = function(guessData, collection) {
		this.data = guessData;
		this.correct = false;
		var that = this;

		// test to see if the guess matches the answer
		this.guessCheck = function() {	
			
			var target = app.map.elements.target;
			if (target.indexOf(this.data.guessBodyText) !== -1) {
				console.log('guess match!', target);
				this.data.correct = true;
			}

			return this;
		}

		this.updateStatus = function() {
			if (this.data.correct === true) {

			}
			return this;
		}

		// now an ajax call
		this.save = function() {
			// stringify the data
			var stringified = JSON.stringify(this.data);

			// hit API with a POST request and send new guess along
			$.ajax({
				url : '/api/guesses/',
				type : 'POST',
				dataType: 'json',
				data: { guess: stringified },
				success : function(data, textStatus, jqXHR) {
					that._id = data._id;
					app.events.publish('ajax:POSTcomplete', data);
				},
				error: function(jqXHR, textStatus, error) {
					console.log('error', error);
				}
			});

			return this;			
		};

		this.remove = function() {
			ajaxUrl = '/api/guesses/';
			$.ajax({
				url: ajaxUrl,
				type: 'DELETE',
				dataType: 'json',
				success: function(data, textStatus, jqXHR) {
					console.log(data, 'delete success');
				}, error: function(jqXHR, textStatus, error) {
					console.log('ajax delete error: ', error);
				}
			});
			return this;
		}

		this.guess = function() {
			var stringified = JSON.stringify(this.data);
			//console.log('this.answerText: ', this.answerText);
			// do this test somewhere else?
			if (app.map.elements.target.indexOf(this.guessBodyText) !== -1) {
				this.correct = !this.correct;
				this.data.correct = true;				
			}

			var id = this['_id'],
			ajaxUrl = '/api/guesses/';			
			var stringifed = JSON.stringify(this.data);
			$.ajax({
				url: ajaxUrl,
				type: 'PUT',
				dataType: 'json',
				data: { guess: stringified },
				success: function(data, textStatus, jqXHR) {
					app.events.publish('ajax:PUTcomplete', data);
				},
				error: function(jqXHR, textStatus, error) {
					console.log('ajaxPUT error: ', error);
				}
			});

			//localStorage.setItem('answers', JSON.stringify(collection));
			console.log('Model says: correct? ', this.correct);
			return this;
		}

		// !!! to fix; perform check to turn correct polygon grey !!!
		this.checkFeature = function(){
			var layers  = app.map.elements.hoods.getLayers(),
				len = layers.length,
				i = 0;
			console.log('checkFeature layers: ', layers);
			console.log('this.guessBodyText: ', this.guessBodyText);
			for (i; i<len; i++){
				//console.log(layers[i]);
				if (layers[i].feature.properties.neighborho.indexOf(this.guessBodyText) !== -1) {
					console.log('matching layer: ', layers[i]);
					//app.map.elements.hoods.resetStyle(e.)
				}
			}
			return this;
		}

		this.test = function(){
			//console.log("test this.answerText: ", this.answerText);
			var answer = this.guessBodyText;
			var geojson = app.map.elements.hoods;
			geojson.setStyle(function(e){
				//console.log("setStyle e: ", e);
				//console.log("indexOf: ", e.properties.neighborho.indexOf(this.answerText));
				//console.log("test this.answerText: ", this.answerText);
				//console.log('answer: ', answer);
				if (e.properties.neighborho.indexOf(answer) !== -1) {
					console.log('test match!');
					//return app.map.style.d;
				}
			});
			return this;
		}
	}

	var initialRender = function(guesses){
		if (guesses.length > 0) {
			var i=0,
				len = guesses.length,
				guess,
				data,
				_id,
				model;

			for (i; i<len; i +=1) {
				guess = guesses[i];
				data = JSON.parse(guess.guess);
				model = new Model(data, guesses);
				model._id = guess._id;
				//console.log('initial render created this model: ', model);
				new View(model, attributes.guessList).init();
			} 
		} else {
			attributes.noAnswers.removeClass('hidden');
			app.events.publish('status:update',[0,0]);
		}
	};

	var initialFetch = function() {
		$.ajax({
			url: '/api/guesses/',
			type: 'GET',
			dataType: 'json',
			success: function(res) {
				console.log('initialFetch res: ', res);
				guesses = _.clone(res);
				// console.log(guesses);
				app.events.publish('ajax:GETcomplete', guesses);
			},
			error: function(jqXHR, textStatus, error) {
				console.log('initialFetch error: ', error);
			}
		});
	}

	var updateStatus = function(counts) {
	      //console.log('updating notes count with args', counts);
      	attributes.answerCount.text(counts[1]);          
  	};

	var init = function(){
		console.log('app.game init called');
		app.map.init();		
		initialFetch();
		playAgain();
		attachEvents();
	};

	return {
		init : init,
		attributes : attributes,
		guesses : guesses,
		attachEvents : attachEvents,
		playAgain : playAgain
		//createPopupContent : createPopupContent()
	}

})( window, document, jQuery, _ );

window.addEventListener('DOMContentLoaded', app.game.init);