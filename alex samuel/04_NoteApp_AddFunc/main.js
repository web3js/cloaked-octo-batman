var app = (function(){
	
	
	var DOM = { 
		noteField 	: document.querySelector('.write-note'),
		noteSubmit 	: document.querySelector('.submit-note'),
		noteList	: document.querySelector('.notes'),
	};
	
	var notes = [];
	
	var attachEvents = function(){
		DOM.noteSubmit.addEventListener('click', function(e){
			e.preventDefault();
			var fieldValue = DOM.noteField.value;
			notes.push(new Note(fieldValue).init());
			console.log(fieldValue);
			DOM.noteField.value = '';
		});	
		
	};
	
	var Note = function(newBodyText){
		//add note to note list as a paragraph in a list item
		this.noteBodyText = newBodyText;
		this.listItem = document.createElement('li');
		this.paragraph = document.createElement('p');
		this.listItem.classList.add('note');
		this.paragraph.innerHTML = this.noteBodyText;

		var rightnow = new Date();
		this.date = document.createElement('h2');
		this.date.innerHTML = rightnow.toLocaleDateString() + " at " + rightnow.toLocaleTimeString();

		this.listItem.appendChild(this.date);
		this.listItem.appendChild(this.paragraph);

		//append buttons
		this.actions = document.createElement('ul');
		this.actions.classList.add('actions');
		this.removeButton = document.createElement('li');
		this.likeButton = document.createElement('li');
		this.removeButton.classList.add('remove', 'icon-cancel');
		this.likeButton.classList.add('like', 'icon-heart');
		this.actions.appendChild(this.removeButton);
		this.actions.appendChild(this.likeButton);
		this.listItem.appendChild(this.actions);

		//push all to list
		DOM.noteList.appendChild(this.listItem);

		//add like toggle
		var that = this; //define 'that' to defined 'that' as 'this Note'
		this.liked = false;
		this.like = function(){
			that.liked = !that.liked; //use that to prevent the element from connecting to what you clicked
			that.likeButton.classList.toggle('liked'); //bound to Note, not likeButton
		};
		
		//add delete option
		this.remove = function(){
			notes.splice(notes.indexOf(that), 1);
			DOM.noteList.removeChild(that.listItem);
		};
		
		//add listeners
		this.attachEvent = function(){
			this.likeButton.addEventListener('click', this.like);
			this.removeButton.addEventListener('click', this.remove);
					
		};
		
		//init
		this.init = function(){
			this.attachEvent();
			return this;	
		};
		
	};
	
	var init = function(){	
		//all the functions that make the app run.
		console.log('app.init()');
		attachEvents();
	};
	
	
	return {
		init : init,
		notes : notes
	};
	
	
})();




window.addEventListener('DOMContentLoaded', app.init);




































/*
//--dude.js
var dude = (function() {
	
	var name = 'Justin Charles';
	var getName = function(){
		return name;	
	};
	
	var setName = function(newName){
		name = newName;
	};
	
	return {
		getName : getName, //public name - private reference
		setName : setName
	};
	
	
})(); //adding () at the end immediately invokes it and makes it private



//--shouter.js
//dependent on dude module

var shouter = (function(){
	var shout = function(name){
		alert(name);
	};
	
	return {
		shout : shout		
	};
	
})();


//--pt2 (constructors)
//constructor -- always use 'new' before. ie: var me = new Person();
//always capitalized
var Person = function (firstName, lastName, age, profession, hobby){
	
	this.firstName = firstName;
	this.lastName = lastName;
	this.age = age;
	this.profession = profession;
	this.hobby = hobby;	
};


var me = new Person('Alex', 'Samuel', 28, 'Hot Mess', 'Cooking');
*/