//Immediately Invoked Function Expression, means the function is wrapped in paranteses, 
//so we can have private and public members. Only the things we return is available when we console log app

var app  = (function() {  
  
  //our elements in the app, picking out the three main elemens by their class name. 
  var elements = {
    noteUser : document.querySelector('.write-user'),
    noteField : document.querySelector('.write-note'),
    noteSubmit : document.querySelector('.submit-note'),
    noteList : document.querySelector('.notes')
  };
  
  //create an empty array for the notes
  var notes = [];
  
  //create a function called attachEvents
  var attachEvents = function() {
    //adds an event listener everytime notesubmit is clicked
    elements.noteSubmit.addEventListener('click', function(event) {
      //will prevent the default event from occuring
      event.preventDefault();
        //makes a new note object and pushes a new value to the array notes
        var userValue = elements.noteUser.value; //created the object for the user
        var fieldValue = elements.noteField.value; //created the object for the filed text
      notes.push(new Note(userValue,fieldValue).init());
        elements.noteField.value = ''; //stores the value of thenote field
        elements.noteUser.value = ''; //stores the value of the user
    });
  };
  //created the Note function, the constuctor, the blueprints for making the note constuctor
  //this is capitalized
  var Note = function(noteUserText, noteBodyText) {
    //this referes back to the object so the window. 
    this.noteBodyText = noteBodyText; //body text
    this.noteUserText = noteUserText
    //creates the elements, li, p
    this.listItem = document.createElement('li');
    this.paragraph = document.createElement('p');
    //adds the class 'note' to li
    this.listItem.classList.add('note');

    this.addUser = document.createElement('li'); //created the user
    this.h1User = document.createElement('h1'); //created the user
    this.addUser.classList.add('note-user'); //created the user

    //set's notebodytext to be the paragraph we just created
    this.paragraph.innerHTML = this.noteBodyText; //body text
    //adds a node to the end of the list
    this.listItem.appendChild(this.paragraph); //body text

    this.h1User.innerHTML = this.noteUserText; //user
    this.listItem.appendChild(this.h1User); //user


    this.actions = document.createElement('ul');
    this.actions.classList.add('actions');
    this.removeButton = document.createElement('li');
    this.likeButton = document.createElement('li');
    this.dateTag  = document.createElement('li');
    this.removeButton.classList.add('remove' ,'icon-cancel');
    this.likeButton.classList.add('like' ,'icon-heart');
    this.actions.appendChild(this.removeButton);
    this.actions.appendChild(this.likeButton);
    
    this.listItem.appendChild(this.actions);
    elements.noteList.appendChild(this.listItem);
    //Because this frequently changes when changing scope by using a new function, 
    //you can't access the original value by using it. 
    //Aliasing it to that allows you still to access the original value of this
    var that = this;
    this.liked = false;
    //creates a function for like
    this.like = function() {
      //when it is liked
      that.liked = !that.liked;
      console.log('I am liked', that.liked);
      //toggle button liked
        that.likeButton.classList.toggle('liked');
    };
    this.dateTag = function() {
      var d = new Date();
      var curr_date = d.getDate();
      document.write(curr_date);
    }
    //create remove function
    this.remove = function() {
      console.log('I am a goner');
      //splice adds an item to an array
        notes.splice(notes.indexOf(that),1);
    elements.noteList.removeChild(that.listItem);
    };
    this.attachEvents = function() {
      this.likeButton.addEventListener('click', this.like);
      this.removeButton.addEventListener('click', this.remove);
    };
    //on init call event
    this.init = function() {

      this.attachEvents();
      //returns this
        return this;
    };
  };
  
  
  
  var init = function() {
    console.log('App init');
    attachEvents();
    // all the functions that make the app run.
  };
  
  return {
    init : init,
    elements : elements,
    Note : Note,
    notes : notes
  };
})();

window.addEventListener('DOMContentLoaded', app.init);

