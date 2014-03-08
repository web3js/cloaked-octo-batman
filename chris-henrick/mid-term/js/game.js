var app = app || {};

app.game = (function(){

	var attributes = {
		answerField : document.querySelector('.write-answer'),
		answerSubmit : document.querySelector('.submit-answer'),
		answerList : document.querySelector('.answers'),
		noAnswers : document.querySelector('.no-answers-found'),
		popup_content : document.querySelector('.leaflet-popup-content'),
		popup_wrapper : document.querySelector('.leaflet-popup-content-wrapper'),
		popup_submit : document.querySelector('.submit-answer')				
	};

	var answers = JSON.parse(localStorage.getItem('answers')) || [];

	var attachEvents = function(){
		$('.submit-answer').on('click', function(e) {
			e.preventDefault();
			var fieldValue = $('.write-answer').value;
			var newAnswer = new Model(fieldValue, answers).save();
			new View(newAnswer, attributes.answerList).init();
			$('.write-answer').value = '';
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
			this.listItem = document.createElement('li');
			this.paragraph = document.createElement('p');

			this.listItem.classList.add('answer');
			this.paragraph.innerHTML = answer.answerText;
			this.listItem.appendChild(this.paragraph);

			addAsFirstChild(attributes.answerList, this.listItem);

			attributes.noAnswers.classList.add('hidden');

			return this;
		};

		this.guess = function(){
			answer.guess();
		}

		this.attachEvents = function() {
			// not needed
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
			this.correct = !this.correct;
			localStorage.setItem('answers', JSON.stringify(answers));
			console.log('Model says: correct? ', this.correct);
		}
	}

	var initialRender = function(){
		console.log('here is the saved data: ', JSON.parse(localStorage.getItem('answers')));

		if(('answers' in localStorage) && (JSON.parse(localStorage.getItem('answers')).length > 0)) {
			var savedAnswers = JSON.parse(localStorage.getItem('answers')),

			answers = savedAnswers.slice();

			i = 0,
			len = savedAnswers.length;
			for (i; i<len; i++){
				new View(savedAnswers[i], attributes.answerList).init();
			}
		} else {
			attributes.noAnswers.classList.remove('hidden');
		}
	};

	var init = function(){
		console.log('app.game init called');
		app.map.init();
		initialRender();
	}

	return {
		init : init,
		attributes : attributes,
		answers : answers,
		attachEvents : attachEvents
		//createPopupContent : createPopupContent()
	}

})();

window.addEventListener('DOMContentLoaded', app.game.init);