var app = app || {};
var weekdays=['sun','mon','tue','wen','thu','fri','sat'];
var elements =[];

app.main  = (function() {  

  // change to 7 days' notes
  for(w=0; w <weekdays.length; w++) {  
    elements[w]= {
      noteField : document.querySelector('.write-note-'+weekdays[w]),
      noteSubmit : document.querySelector('.submit-note-'+weekdays[w]),
      noteList : document.querySelector('.notes-'+weekdays[w]),
      noNotesFound : document.querySelector('.no-notes-found-'+weekdays[w])
    }
  };  

  // change to 7 days' notes
  var notes = [[],[],[],[],[],[],[],[]];

  var attachEvents = function() {
    elements[0].noteSubmit.addEventListener('click', function(event) {
        event.preventDefault();
        var fieldValue = elements[0].noteField.value;
        var newNote = new Model({ noteBodyText : fieldValue, liked: false }, notes[0],0).save();
        new View(newNote, elements[0].noteList,0).init();
        elements[0].noteField.value = '';
      });

    elements[1].noteSubmit.addEventListener('click', function(event) {
        event.preventDefault();
        var fieldValue = elements[1].noteField.value;
        var newNote = new Model({ noteBodyText : fieldValue, liked: false }, notes[1],1).save();
        new View(newNote, elements[1].noteList,1).init();
        elements[1].noteField.value = '';
      });

    elements[2].noteSubmit.addEventListener('click', function(event) {
        event.preventDefault();
        var fieldValue = elements[2].noteField.value;
        var newNote = new Model({ noteBodyText : fieldValue, liked: false }, notes[2],2).save();
        new View(newNote, elements[2].noteList,2).init();
        elements[2].noteField.value = '';
      });

    elements[3].noteSubmit.addEventListener('click', function(event) {
        event.preventDefault();
        var fieldValue = elements[3].noteField.value;
        var newNote = new Model({ noteBodyText : fieldValue, liked: false }, notes[3],3).save();
        new View(newNote, elements[3].noteList,3).init();
        elements[3].noteField.value = '';
      });

    elements[4].noteSubmit.addEventListener('click', function(event) {
        event.preventDefault();
        var fieldValue = elements[4].noteField.value;
        var newNote = new Model({ noteBodyText : fieldValue, liked: false }, notes[4],4).save();
        new View(newNote, elements[4].noteList,4).init();
        elements[4].noteField.value = '';
      });

    elements[5].noteSubmit.addEventListener('click', function(event) {
        event.preventDefault();
        var fieldValue = elements[5].noteField.value;
        var newNote = new Model({ noteBodyText : fieldValue, liked: false }, notes[5],5).save();
        new View(newNote, elements[5].noteList,5).init();
        elements[5].noteField.value = '';
      });

    elements[6].noteSubmit.addEventListener('click', function(event) {
        event.preventDefault();
        var fieldValue = elements[6].noteField.value;
        var newNote = new Model({ noteBodyText : fieldValue, liked: false }, notes[6],6).save();
        new View(newNote, elements[6].noteList,6).init();
        elements[6].noteField.value = '';
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

  var View = function(note, containerEl, w) {
    var index = notes[w].indexOf(note),
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

      this.paragraph.innerHTML = note.data.noteBodyText;
      this.actions.appendChild(this.removeButton);
      this.actions.appendChild(this.likeButton);
      this.listItem.appendChild(this.paragraph);
      this.listItem.appendChild(this.actions);


      addAsFirstChild(elements[w].noteList, this.listItem);

      elements[w].noNotesFound.classList.add('hidden');

      return this;     
    };


    this.remove = function() {
      console.log('View says: I am a goner');
      elements[w].noteList.removeChild(that.listItem);
      note.remove(); 
      if(elements[w].noteList.childElementCount === 0) {
        elements[w].noNotesFound.classList.remove('hidden'); 
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

  var Model = function(noteData, collection,w) {
    
    this.data = noteData;
    
    this.save = function() {
      collection.push(this.data);
      localStorage.setItem('notes-'+weekdays[w], JSON.stringify(collection));
      return this;
    };


    this.remove = function() {
      console.log('Model says: I am a goner : ' , this.data);
      var indexToRemove = collection.indexOf(this.data);
      console.log('Removing item: ', this.data, ' from notes:', collection ,'index: ', indexToRemove);
      collection.splice(indexToRemove, 1);
      console.log('After remove the collection is: ', collection);
      localStorage.setItem('notes-'+weekdays[w], JSON.stringify(collection));
      return this;
    };
  };

  var initialRender = function() {
    // change to 7 days' notes
    for(w=0; w <weekdays.length; w++) {  
    if(('notes-'+weekdays[w] in localStorage) && (JSON.parse(localStorage.getItem('notes-'+weekdays[w])).length > 0)) {
	     var nlen=JSON.parse(localStorage.getItem('notes-'+weekdays[w])).length;
      notes[w] = JSON.parse(localStorage.getItem('notes-'+weekdays[w])).slice();
      console.log('We have localStorage. Notes from it are: '+w+' ', notes[w]);
      

      var i = 0, 
      len = notes[w].length, 
      loadedNote;

      for(i; i < len; i += 1) {
        loadedNote = new Model(notes[w][i], notes[w],w);  
        new View(loadedNote, elements[w].noteList,w).init();
      }
    } else {
      elements[w].noNotesFound.classList.remove('hidden'); 
    }
    } // for w
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
