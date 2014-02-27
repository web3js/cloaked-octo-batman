var app = (function(){

var elements = {
	titleField : document.querySelector('.write-title'),
	noteField : document.querySelector('.write-note'),
	noteSubmit : document.querySelector('.submit-note'),
    noteList : document.querySelector('.notes')

	// element = document.querySelector(selectors)
	//element is an element object; selectors is a string containing one or more css selectors
	//returns the first element within the document that matches the specified group of selectors
};

//array to store each note
var notes = [];

//array to store each title
var titles = [];

var idCounter = 0;

  var attachEvents = function() {

	//listens for a click
    elements.noteSubmit.addEventListener('click', function(event) {
      //cancels the event without stopping further propagation of the event
		//therefore, stops the event from reloading the page
      event.preventDefault();
      
      //creates variable for value typed into the form
      var fieldValue = elements.noteField.value;
      var titleFieldValue = elements.titleField.value;
      console.log("titleFieldValue: " + titleFieldValue);

      //pushes the new Note to the notes array
      titles.push(titleFieldValue);
      notes.push(new Note(fieldValue).init());

      	//clears the form line after the note is submitted
        elements.noteField.value = '';
        elements.titleField.value = '';
    });
  };



//constructor 
var Note = function(noteBodyText){
	//id for each notethis.id = idCounter++;
	this.id = idCounter++;
	//this.noteTitle = noteTitle;
	//console.log(this.noteTitle);
	this.noteBodyText = noteBodyText;

	//this.listItem is a created element object
	//"li" is the tagName which is a string that specifies the type of element to be created
	this.listItem = document.createElement('li');
	this.paragraph = document.createElement('p');
	this.headerTwo = document.createElement('h2');
	this.headerOne = document.createElement('h1');
	

	//---------format time----------------
	
	this.today = new Date();
	this.day = this.today.getDate();
	this.month = this.today.getMonth()+1 //January is 0
	this.year = this.today.getFullYear();

	if(this.day < 10) {
		this.day = '0'+day;
	};
	if(this.month<10){
		this.month = '0' + this.month;
	}

	this.date = this.month + '/' + this.day + '/' + this.year;

	this.time;
	this.hour = this.today.getHours();
	this.minutes =  this.today.getMinutes();

	if(this.hour == 0){
		this.hour =12;
	};

	if(this.hour>13){
		this.hour = this.hour-12;
	};

	if(this.hour<10){
		this.hour = '0'+this.hour;
	};

	if(this.minutes <10){
		this.minutes = '0' + this.minutes;
	};

	if(this.today.getHours()<12){
		this.time = this.hour + ':' + this.minutes + '   ' + 'am';
	};

	if(this.today.getHours()>12){
		this.time = this.hour + ':' + this.minutes + ' ' + 'pm';
	};

	console.log("this.time: " + this.time);
	console.log("this.date: " + this.date);
	//---------format time----------------

	//classlist can only be modified using the add() & remove() methods
	//classlist returns a token list of the class attribute of the element
	//add() adds a class to an element's list of classes
	this.listItem.classList.add('note');

	//the html of this.paragraph is not equal to the text on the form line
	this.paragraph.innerHTML = this.noteBodyText;
	this.headerOne.innerHTML = this.date + ' ' + this.time;
	this.indexNumber = this.id;
	//console.log("indexNumber: " + this.indexNumber);
	this.headerTwo.innerHTML = app.titles[this.indexNumber];
	//console.log("id: " + this.id);
	//console.log("headerTwo: " + this.headerTwo.innerHTML);

	//appendChild adds a node to the end of the list of children of a specified parent nod
	this.listItem.appendChild(this.headerTwo);
	this.listItem.appendChild(this.headerOne);
	this.listItem.appendChild(this.paragraph);
	this.actions = document.createElement('ul');
	this.actions.classList.add('actions');
	this.removeButton = document.createElement('li');
	this.likeButton = document.createElement('li');
	this.likeButton.classList.add('like' ,'icon-heart');
	this.removeButton.classList.add('remove' ,'icon-cancel');
    this.actions.appendChild(this.removeButton);
    this.actions.appendChild(this.likeButton);
    this.listItem.appendChild(this.actions);
    elements.noteList.appendChild(this.listItem);

    var that = this;

    this.like = function(){
    	//changes state of boolean
    	that.liked =! that.liked;
    	console.log("I am liked", that.liked);

    	//toggles the like button
    	that.likeButton.classList.toggle('liked');
    };

    this.remove = function() {
    	notes.splice(notes.indexOf(that), 1);
    	elements.noteList.removeChild(that.listItem);
    };

    this.attachEvents = function(){

    	//type is "click"; listener is this.like
    	//listen for a click and notify this.like
    	this.likeButton.addEventListener('click', this.like);
    	this.removeButton.addEventListener('click', this.remove);
    };

    this.init = function (){
    	this.attachEvents();
    	return this;
    };
    
};

var init = function(){
	console.log('App init');
	attachEvents();
};

//the public part of the app function that is returned

return {
	init : init,
	elements : elements,
	Note : Note,
	notes : notes,
	titles : titles
};

})();

//method regitsers the specified listener on the event target 
//target.addEventListener(type, listener)
//where type is a string representing the event type to listen for &
//listener is the object tht receives a notification when an event of the specified type occurs
window.addEventListener('DOMContentLoaded', app.init);