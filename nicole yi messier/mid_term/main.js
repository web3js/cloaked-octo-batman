var app = app || {};

app.main = (function(){

	var elements = {
		fullNameField : document.querySelector('#fullName'),
		userNameField : document.querySelector('#userName'),
		emailField : document.querySelector('#e-mail'),
		passwordField : document.querySelector('#password1'),
		confirmPasswordField : document.querySelector('#confirmPassword'),
		formSubmit : document.querySelector('.submit'),
		userNameFeed : document.querySelector('#userNameFeed'),
		fullNameFeed : document.querySelector('#fullNameFeed'),
		passwordFeed : document.querySelector('#passwordFeed'),
		emailFeed :  document.querySelector('#e-mailFeed')
	};

	var userInformation =[];

	var attachEvents = function() {
		elements.formSubmit.addEventListener('click', function(event){
			event.preventDefault();
			var fieldValue1 = elements.fullNameField.value;
			var fieldValue2 = elements.userNameField.value;
			var fieldValue3 = elements.emailField.value;
			//var fieldValue4 = elements.passwordField.value;

			var newUser = new Model(
				{
					fullName : fieldValue1,
					userName : fieldValue2,
					email : fieldValue3,
					//password : fieldValue4
				 }, userInformation).save();

			new removeFeedback;
			new checkData(fieldValue1, fieldValue2, fieldValue3);

		});
		console.log('clicked');
	}; 

	var removeFeedback = function(){
		elements.fullNameFeed.innerHTML = "";
		elements.userNameFeed.innerHTML	= "";
		elements.passwordFeed.innerHTML	= "";
		elements.emailFeed.innerHTML = "";
	};

	var checkData = function(fullName, userName, e_mail){
		this.fullName = fullName;
		this.userName = userName;
		this.email = e_mail;
		this.atPos = this.email.indexOf("@");
		this.dotPos = this.email.lastIndexOf(".");
		this.length = this.userName.length;
		
		//check e-mail format
		if(this.atPos<1 || this.dotPos<(this.atPos+2) || (this.dotPos+2) >= this.email.length){
			this.paragraph = document.createElement('p');
			this.paragraph.innerHTML = "Doesn't look like a valid email."
			this.paragraph.classList.add('feedback');
			elements.emailFeed.appendChild(this.paragraph);
		}

		//check to make sure name is filled out
		if(this.fullName =='' || this.fullName ==null ){
			this.paragraph = document.createElement('p');
			this.paragraph.innerHTML = "A name is required."
			this.paragraph.classList.add('feedback');
			elements.fullNameFeed.appendChild(this.paragraph);
		} else if(this.fullName.length >= 1){
			this.paragraph = document.createElement('p');
			this.paragraph.innerHTML = "Name looks great!"
			this.paragraph.classList.add('feedback');
			elements.fullNameFeed.appendChild(this.paragraph);
		}

		//check length of user name
		if(this.length >= 7){
			this.paragraph = document.createElement('p');
			this.paragraph.innerHTML = "Username looks great!"
			this.paragraph.classList.add('feedback');
			elements.userNameFeed.appendChild(this.paragraph);
			//console.log("checked user name!");
		} else if (this.length < 7) {
			this.paragraph = document.createElement('p');
			this.paragraph.innerHTML = "Please use between 7 & 30 characters."
			this.paragraph.classList.add('feedback');
			elements.userNameFeed.appendChild(this.paragraph);
		}
	};

	//models are objects that hold functions and data for us
	//this is a constructor
	var Model = function(formData, collection){
		this.data = formData;

		this.save = function(){
			//push the user's data to the collection
			collection.push(this.data); 
			//make a JSON object of collection & stringify it
			//use setItem to add this information to localStorage 
			localStorage.setItem('userInformation', JSON.stringify(collection));
			return this; //this allows you to chain the method
		}; 

	}; 

	var init = function(){
		console.log('App Init - User Profile Sign Up')
		attachEvents();
	};

	return {
		init : init,
		userInformation: userInformation,
	};

})();

window.addEventListener('DOMContentLoaded', app.main.init);