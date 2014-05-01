// Web3: Midterm

var app = (function(w, d) { 
	var DOM = {
		'write-note-form' : d.querySelector('.write-note-form'), 
		'write-note' : d.querySelector('.write-note'), 
		'submit-note' :  d.querySelector('.submit-note'),
		'notes' : d.querySelector('.notes')
	};

var sanitize = function(string) {
		return string.replace(/(^\s+|\s+$)/g,'');
	};

var attachEvents = function() {
		DOM['submit-note'].addEventListener('click', function(e) {
			e.preventDefault();
			notes.push(new Note(sanitize(DOM['write-note'].value), DOM['notes']).init());
			// make a new Note object and push it to "notes" array.
			DOM['write-note'].value = '';
			// empty the form text field.
		});
	};

var Note = function(text, list) {
		this.text = text; // body text
		this.list = list; // a list to append itself into
		this.listItem = d.createElement('li'); 
		this.paragraph = d.createElement('p'); 
		this.actions = d.createElement('ul'); 
		this.likeButton = d.createElement('li'); // an <li> button for like buttons
		this.removeButton = d.createElement('li'); // an <li> for remove buttons
		this.liked = false;

		var that = this; // We will use this var in like(); and remove(); method. 
		// this is the like function.
		this.like = function() {
			if (that.liked === false){
				that.likeButton.className += " liked";								
				that.liked = true;
			} else if (that.liked === true) {
				that.likeButton.className = "like icon-heart";
				that.liked = false;
			} 
		
		};
		this.remove = function() {

			 /*Something needs to happen here with 'this.' ugh*/
            that.list.removeChild(that.listItem); //WHAT????

		};
		this.attachEvents = function() {
	
			this.likeButton.addEventListener('click', function() {
		
				that.like(); 
				console.log("that.liked: " + that.liked);
			alert('Much Love!');

			});
			this.removeButton.addEventListener('click', function() {
			
				that.remove();
			alert('Not Cool!');
			

			});
		};

		this.init = function() {
			this.listItem.className += 'note'; 
			this.paragraph.innerHTML = this.text; 
			this.listItem.appendChild(this.paragraph); 
			this.actions.className += 'actions'; 
			this.likeButton.className += 'like icon-heart'; 
			this.removeButton.className += 'remove icon-cancel'; 
			this.actions.appendChild(this.removeButton); // append the remove button to the ".actions" list
			this.actions.appendChild(this.likeButton); // append the like button to the ".actions" list
			this.listItem.appendChild(this.paragraph);  // append the paragraph to this note's list item
			this.listItem.appendChild(this.actions); // append the ".actions" <ul> element to the note.
			this.list.appendChild(this.listItem); // append the note to the notes list.
			this.attachEvents(); 
			return this; 
		}

	};

	var notes = []; // the array to keep all the notes. we do notes.push(); at the top of the file.

	var init = function() {
		console.log('App init'); // write some text to console.
		attachEvents(); // run the function that looks out for all the events for THE APP MODULE
	};

	
	return {
		DOM : DOM, 
		attachEvents : attachEvents,
		init : init,
		notes : notes
	};


})(window, document); 
window.addEventListener('DOMContentLoaded', app.init); 
