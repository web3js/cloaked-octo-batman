var app  = (function() {  
  
  var elements = {
    noteField : document.querySelector('.write-note'),
    noteSubmit : document.querySelector('.submit-note'),
    noteList : document.querySelector('.notes')
  };
  
  var notes = [];
  
  var attachEvents = function() {
    elements.noteSubmit.addEventListener('click', function(event) {
      event.preventDefault();
        var fieldValue = elements.noteField.value;
      notes.push(new Note(fieldValue).init());
        elements.noteField.value = '';
        // var form = document.getElementById("myForm");
        // form.reset();
    });
  };
  var Note = function(noteBodyText) {
    this.noteBodyText = noteBodyText;
    this.listItem = document.createElement('li');
    this.paragraph = document.createElement('p');
    var penguin=document.getElementById('penguin');
    penguin.addEventListener('click',function(){
        this.image = document.createElement('img');
        
        },false)
    this.listItem.classList.add('note');
    this.paragraph.innerHTML = this.noteBodyText;
  this.listItem.appendChild(this.paragraph);
  
    penguin.addEventListener('click',function(){
       
        this.img.src = "images/penguin.png";
        this.listItem.appendChild(this.image);

    },false)
 
  elements.noteList.appendChild(this.listItem);

  
    
    this.init = function() {
      this.attachEvents();
        return this;
    };
  };

// var addImage = function(){
//   var penguin=document.getElementById('penguin');
//     penguin.addEventListener('click',function(){
//         this.image = document.createElement('img');
//         this.img.src = "images/penguin.png";
//         this.listItem.appendChild(this.image);

//     },false)
//   };
  
  
  
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
