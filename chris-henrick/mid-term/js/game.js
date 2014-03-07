var app = app || {};

app.game = (function(){

	var attributes = {
		popup_content: '<form class=\"write-answer-form\"> <input type=\"text\" class=\"write-answer\"> <input type=\"submit\" class=\"submit-answer\" value=\"Add\"> </form>',
		answerField : document.querySelector('.write-answer'),
		answerSubmit : document.querySelector('.submit-answer'),
		answerList : document.querySelector('.answers')
	};

	var answers = JSON.parse(localStorage.getItem('answers')) || [];

	var attachEvents = function(){
		attributes.popup_content.addEventListener('click', function(e) {
			e.preventDefault();
			var fieldValue = attributes.answerField.value;
			var newAnswer = new Model(fieldValue, answers).save();
			new View(newAnswer, attributes.answerList).init();
		});
	}

	var View = function(answer, containerEl) {
		var index = answers.indexOf(answer),
			that = this;

		this.render = function() {

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

	var init = function(){
		console.log('app.game init');
		app.map.init();

	}

	return {
		init : init,
		attributes : attributes
	}

})();

window.addEventListener('DOMContentLoaded', app.game.init);