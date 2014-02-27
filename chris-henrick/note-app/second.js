//second.js
// second try to re-write this and clean up!

var app = (function(w,d){
	var DOM = {
		noteField : d.querySelector('.write-note'),
		noteSubmit : d.querySelector('.submit-note'),
		noteList : d.querySelector('.notes')
	};

	var notes = [];

	var sanitize = function(string) {
		return string.replace(/(^\s+|\s+$)/g,'');
	};	


	var attachEvents = function() {
		DOM.noteSubmit.addEventListener('click', function(e){
			e.preventDefault();
			var fieldValue = DOM.noteField.value;
			notes.push(new Note(sanitize(fieldValue)).init());
			DOM.noteField.value = '';
		});
	};

	// note constructor
	var Note = function(noteBodyText) {
		// note text to be added to note list
		this.noteBodyText = noteBodyText;
		this.listItem = d.createElement('li');
		this.paragraph = d.createElement('p');
		this.listItem.classList.add('note');
		this.paragraph.innerHTML = this.noteBodyText;

		// date time stuff
		var now = new Date().format("M/d/20y h:m");
		this.noteTime = d.createElement('h3');
		this.noteTime.innerHTML = now;
		this.listItem.appendChild(this.noteTime); //add time header
		this.listItem.appendChild(this.paragraph); //add note text 

		// buttons!
		this.actions = d.createElement('ul');
		this.actions.classList.add('actions');
		this.removeButton = d.createElement('li');
		this.likeButton = d.createElement('li');
		this.removeButton.classList.add('remove', 'icon-cancel');
		this.likeButton.classList.add('like', 'icon-heart');
		this.actions.appendChild(this.removeButton);
		this.actions.appendChild(this.likeButton);
		this.listItem.appendChild(this.actions);

		// add all the above to the DOM noteList,
		// the ul containing the notes
		DOM.noteList.appendChild(this.listItem);

		// use variable that to refer to note being targeted by UI
		var that = this;
		// whether the note is liked or not
		this.liked = false;

		// function to like a note
		this.like = function() {
			that.liked = !that.liked;
			console.log('liked? ', that.liked);
			that.likeButton.classList.toggle('liked');
		};
		//function to remove a note
		this.remove = function() {
			console.log('removed');
			notes.splice(notes.indexOf(that),1);
			DOM.noteList.removeChild(that.listItem);
		};
		// function to add like and remove interaction
		this.attachEvents = function() {
			this.likeButton.addEventListener('click', this.like);
			this.removeButton.addEventListener('click', this.remove);
		};
		// function that instantiates a Note
		this.init = function(){
			this.attachEvents();
			return this;
		};
	}; // end Note

	var init = function(){
		console.log('App init');
		// implement the app
		attachEvents();
	}

	return {
		init : init,
		DOM : DOM,
		Note : Note,
		notes : notes
	};

})(window,document);

window.addEventListener('DOMContentLoaded', app.init);