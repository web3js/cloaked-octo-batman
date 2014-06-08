// TO DO:
// add a timer
// add a start and stop

var app = app || {};

app.game = (function( w, d, $, _ ){

	var attributes = {
		playAgain : $('#play-again'),
		status : $('.status'),
		answerField : $('.write-answer'),
		answerSubmit : $('.submit-answer'),
		guessList : $('.guesses'),
		answerCount: $('.status').find('#answer-count'),
		guessesCount: $('.status').find('#guesses-count'),
		hoodsToGo: $('#hoods-to-go '),
		noAnswers : $('.no-answers-found'),
		answerListTitle : $('#answers-title'),
		docAnswer : $('.answer'),
		popup_content : $('.leaflet-popup-content'),
		popup_wrapper : $('.leaflet-popup-content-wrapper'),
		popup_submit : $('.submit-answer')				
	};

	var guesses = [],
		hoodsLeft = 310,
		correct = 0,
		guessed = 0;

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
					correct : false,
					hood : null,
					boro : null															
				}, guesses).guessCheck().save().updateGuesses();				
				new View(newGuess, attributes.guessList).init();
				
				$('.write-answer').val('');							
			} 
		});

		//show hint
		$('.show-hint').on('click', function(e){
			e.preventDefault();					
			$('.hint').removeClass('hidden');
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
			model.checkFeature();
			return this;
		}

		this.publishStatus = function() {			
			var parsedArray = _.map(guesses, function(item) {
				return JSON.parse(item.guess);
			});
			
			var correctLen = _.where(parsedArray, {correct : true}).length;
			app.events.publish('status:update', [guesses.length, correctLen]);
			console.log([guesses.length, correctLen])			
			attributes.hoodsToGo.text(hoodsLeft - correctLen);
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
			this.data.hood = target.feature.properties.neighborho;
			this.data.boro = target.feature.properties.borough;
			
			if (this.data.hood.toLowerCase().indexOf(this.data.guessBodyText.toLowerCase()) !== -1) {								
				this.data.correct = true;
				target.feature.properties.guessed = true;				
				// reduce the number of hoods left to guess				
				hoodsLeft -= 1;
				attributes.hoodsToGo.text(hoodsLeft);				
			} 
			// grey out polygon, prevent clicking, change cursor to default;
			styleGeojson(this.data);				
			return this;
		}

		// add function updateGuesses
		this.updateGuesses = function() {
			$.ajax({
				url: '/api/guesses/',
				type: 'GET',
				dataType: 'json',				
				success: function(res) {
					console.log('updateGuesses res: ', res);
					guesses = _.clone(res);
					//console.log(guesses);
					app.events.publish('update:status', guesses);					
				},
				error: function(jqXHR, textStatus, error) {
					console.log('updateGuesses error: ', error);
				}
			});
			return this;
		};

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
					//console.log('that._id: ', that._id);
					app.events.publish('ajax:POSTcomplete', data);
					console.log('ajax data: ', data);
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
				//console.log("guesses from initialFetch:", guesses);
				app.events.publish('ajax:GETcomplete', guesses);
			},
			error: function(jqXHR, textStatus, error) {
				console.log('initialFetch error: ', error);
			}
		});
	}

	var updateStatus = function(counts) {
	      console.log('updating notes count with args', counts);
	      attributes.guessesCount.text(counts[0]);
      	attributes.answerCount.text(counts[1]);          
  	};

  	// restyle neighborhood geojson if guess is made
	var styleGeojson = function(data) {
		var target = app.map.elements.target;
		var hood = target.feature.properties.neighborho;
		var state = data.correct;
		if (state) {
			target.setStyle(app.map.style.d);
			target.closePopup();
			target.unbindPopup();
			target['_path'].style.cursor = 'default';
		} else {
			//target.setStyle(app.map.style.g); // include another style if area is guessed but not correct
			target.closePopup();
		}
		return this;
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
	};

})( window, document, jQuery, _ );

window.addEventListener('DOMContentLoaded', app.game.init);