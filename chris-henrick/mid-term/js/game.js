// game stuff here
// to do:
// make a functionality that asks user for input and checks against geojson data
// make a functionality that keeps track of user's score in localstorage

var app = app || {};

app.game = (function(){

	var attributes = {
		playAgain : document.querySelector('#footer'),
		answerField : document.querySelector('.write-answer'),
		answerSubmit : document.querySelector('.submit-answer'),
		answerList : document.querySelector('.answers'),
		noAnswers : document.querySelector('.no-answers-found'),
		answerListTitle : document.querySelector('#answers-title'),
		docAnswer : document.querySelector('.answer'),
		popup_content : document.querySelector('.leaflet-popup-content'),
		popup_wrapper : document.querySelector('.leaflet-popup-content-wrapper'),
		popup_submit : document.querySelector('.submit-answer')				
	};

	var answers = JSON.parse(localStorage.getItem('answers')) || [];

	var correct = false;

	// event listener for pop-up form submit
	var attachEvents = function(){
		$('.submit-answer').on('click', function(e) {
			e.preventDefault();
			//console.log('e: ', e);
			var fieldValue = $('.write-answer').val(); //attributes.answerField.value;
			//console.log('fieldValue: ', fieldValue);

			var newAnswer = new Model(fieldValue, answers).save().guess().checkFeature();
			new View(newAnswer, attributes.answerList).init();
			$('.write-answer').val('');
		});
	}

	var playAgain = function(){
		$('#play-again').on('click', function(e){
			console.log('play-again clicked');
			localStorage.clear();
			location.reload(true);
		});
	}

	var addAsFirstChild = function(parent,child) {
		var parentNode = parent,
			childNode = child;
		if (parentNode.firstChild) {
			parentNode.insertBefore(child, parent.firstChild);
		} else {
			parentNode.appendChild(child);
		}
	};

	var View = function(answer, containerEl) {
		var index = answers.indexOf(answer),
			that = this;

		this.render = function() {
			//console.log("answer.correct: ", answer.correct);
			this.listItem = document.createElement('li');
			this.paragraph = document.createElement('p');

			this.listItem.classList.add('answer');
			this.paragraph.innerHTML = answer.answerText;
			this.listItem.appendChild(this.paragraph);

			if (answer.correct === true) {
				this.paragraph.classList.add('correct');
			}			

			addAsFirstChild(attributes.answerList, this.listItem);

			attributes.noAnswers.classList.add('hidden');
			attributes.playAgain.classList.remove('hidden');
			attributes.answerListTitle.classList.remove('hidden');

			return this;
		};

		this.guess = function(){
			answer.guess();
		}

		this.checkFeature = function(){

		}

		this.attachEvents = function() {
			// not needed?
		}

		this.init = function() {
			this.render();
			return this;
		}
	}

	var Model = function(answerText, collection) {
		this.answerText = answerText;
		this.correct = false;

		this.save = function() {
			collection.push(this);
			localStorage.setItem('answers', JSON.stringify(collection));
			return this;
		}

		this.guess = function() {
			console.log('this.answerText: ', this.answerText);
			if (app.map.elements.target.indexOf(this.answerText) !== -1) {
				this.correct = !this.correct;
			}
			localStorage.setItem('answers', JSON.stringify(collection));
			console.log('Model says: correct? ', this.correct);
			return this;
		}

		// to fix; perform check to turn correct polygon grey
		this.checkFeature = function(){
			var layers  = app.map.elements.hoods.getLayers(),
				len,
				i = 0;
			console.log('checkFeature layers: ', layers);
			for (i; i<len; i++){
				//console.log(layers[i]);
				if (layers[i].feature.properties.neighborho.indexOf(this.answerText) !== -1) {
					console.log('matching layer: ', layer[i]);
					app.map.elements.hoods._layers[i].setStyle(app.map.style.d);
				}
			}
			return this;
		}
	}

	var initialRender = function(){
		console.log('here is the saved data: ', JSON.parse(localStorage.getItem('answers')));

		if(('answers' in localStorage) && (JSON.parse(localStorage.getItem('answers')).length > 0)) {
			var savedAnswers = JSON.parse(localStorage.getItem('answers')),
				answers = savedAnswers.slice(),
				i = 0,
				len = savedAnswers.length;
			for (i; i<len; i++){
				new View(savedAnswers[i], attributes.answerList).init();
			}
			attributes.playAgain.classList.remove('hidden');
		} else {
			attributes.noAnswers.classList.remove('hidden');
			attributes.playAgain.classList.add('hidden');
		}
	};

	var init = function(){
		console.log('app.game init called');
		app.map.init();
		initialRender();
		playAgain();
	}

	return {
		init : init,
		attributes : attributes,
		answers : answers,
		attachEvents : attachEvents,
		playAgain : playAgain
		//createPopupContent : createPopupContent()
	}

})();

window.addEventListener('DOMContentLoaded', app.game.init);