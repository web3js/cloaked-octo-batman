var app = app || {};

app.main  = (function() {  

  var elements = {
    noteType : document.querySelector('.note-type'),//add type
    noteField : document.querySelector('.write-note'),
    noteSubmit : document.querySelector('.submit-note'),
    noteList : document.querySelector('.notes'),
    noNotesFound : document.querySelector('.no-notes-found')
  };


  var notes = [];


  var attachEvents = function() {
    elements.noteSubmit.addEventListener('click', function(event) {
      event.preventDefault();
      var fieldValue = elements.noteField.value;
      var fieldType = elements.noteType.value;//add type
      var newNote = new Model({ noteBodyText : fieldValue, noteType: fieldType, liked: false }, notes).save();//add type

      new View(newNote, elements.noteList).init();
      
      elements.noteField.value = '';

    });

    window.addEventListener('hashchange', function(e) {
      e.preventDefault();
      console.log('hash just changed'); 
      app.router.route();
    });

  };

  

  var addAsFirstChild = function(parent, child) {
    var parentNode = parent,
      childNode = child;
    if(parentNode.firstChild) {
      parentNode.insertBefore(child, parent.firstChild);
    } else {
      parentNode.appendChild(child);
    }

  };

  var View = function(note, containerEl) {
    var index = notes.indexOf(note),
        that = this;

    this.render = function() {
      this.listItem = document.createElement('li');
      this.paragraph = document.createElement('p');
      this.actions = document.createElement('ul');
      this.removeButton = document.createElement('li');
      this.likeButton = document.createElement('li');

      this.listItem.classList.add('note');

      this.actions.classList.add('actions');
      this.removeButton.classList.add('remove' ,'icon-cancel');
      // this.likeButton.classList.add('like' ,'icon-heart');

      // this.paragraph.innerHTML = "<span class='"+
	     //   note.data.noteType+"'>"+
	     //   note.data.noteType+
	     //  "</span><br><br>"+note.data.noteBodyText;//add type
      this.paragraph.classList.add(note.data.noteType);//add class and change background color
      this.paragraph.innerHTML = note.data.noteType+"<br><br><br>"+note.data.noteBodyText;//add type

      this.actions.appendChild(this.removeButton);
      this.actions.appendChild(this.likeButton);
      this.listItem.appendChild(this.paragraph);
      this.listItem.appendChild(this.actions);


      if (note.data.liked) {
        this.likeButton.classList.add('liked');
      }


      addAsFirstChild(elements.noteList, this.listItem);

      elements.noNotesFound.classList.add('hidden');

      return this;
    };

    this.like = function() {
      note.like(); 
      console.log('View says: am I liked?', note.data.liked);
      that.likeButton.classList.toggle('liked');
    };

    this.remove = function() {
      console.log('View says: I am a goner');
      elements.noteList.removeChild(that.listItem); 
      note.remove(); 
      if(elements.noteList.childElementCount === 0) {
        elements.noNotesFound.classList.remove('hidden'); 
      }
    };
    this.attachEvents = function() {
      this.likeButton.addEventListener('click', this.like);
      this.removeButton.addEventListener('click', this.remove);
    };
    
    this.init = function() {
      this.render();
      this.attachEvents();
      return this;
    };

  };

  var Model = function(noteData, collection) { 

    this.data = noteData;
    
    this.save = function() {
 
      collection.push(this.data);

      localStorage.setItem('notes', JSON.stringify(collection));
      return this;
    };

    this.like = function() {


      this.data.liked = !this.data.liked;

      var indexToUpdate = collection.indexOf(this.data);


      console.log('Liking item: ', this.data, ' from index: ', indexToUpdate);
      
 
      collection.splice(indexToUpdate, 1, this.data);
      
      localStorage.setItem('notes', JSON.stringify(collection));
      
      console.log('Model says: Am I liked?' , this.data.liked);
      
      return this;
    };

    this.remove = function() {
      console.log('Model says: I am a goner : ' , this.data);

      var indexToRemove = collection.indexOf(this.data);
      
      console.log('Removing item: ', this.data, ' from notes:', collection ,'index: ', indexToRemove);
      
      collection.splice(indexToRemove, 1);
      
      console.log('After remove the collection is: ', collection);
      
      localStorage.setItem('notes', JSON.stringify(notes));

      return this;
    };
  };

  var initialRender = function() {
    console.log('this is the saved data:', JSON.parse(localStorage.getItem('notes')));
    

    if(('notes' in localStorage) && (JSON.parse(localStorage.getItem('notes')).length > 0)) {
    
      console.log('We have localStorage. Notes from it are: ', notes);
         
      notes = JSON.parse(localStorage.getItem('notes')).slice();

      var i = 0,
      len = notes.length, 

      loadedNote;

      for(i; i < len; i += 1) {

        loadedNote = new Model(notes[i], notes);  

        new View(loadedNote, elements.noteList).init();
      
      }
    
    } else {
      elements.noNotesFound.classList.remove('hidden'); 
    }

  };

  
  var init = function() {
    console.log('App init');
    attachEvents();
    initialRender();
    app.router.route();

  };
  
  return {
    init : init,
    notes : notes
  };

})();

window.addEventListener('DOMContentLoaded', app.main.init);
