var app = app || {};

app.main = (function(){

	//store elements that you want to work with in the APP
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

	//an array to store user information
	var userInformation =[];


	//-----------------------START: attachEvents-------------------------------------
	var attachEvents = function() {
		
		elements.fullNameField.onblur = fullNameFeedBack;
		elements.userNameField.onblur = userNameFeedBack;
		elements.emailField.onblur = emailFeedback;

		elements.formSubmit.addEventListener('click', function(event){
			event.preventDefault();
			var fieldValue1 = elements.fullNameField.value;
			var fieldValue2 = elements.userNameField.value;
			var fieldValue3 = elements.emailField.value;
			var fieldValue4 = elements.passwordField.value;

			var newUser = new Model(
				{
					fullName : fieldValue1,
					userName : fieldValue2,
					email : fieldValue3,
					//password : fieldValue4
				 }, userInformation).save();

			new checkData(fieldValue1, fieldValue2, fieldValue3);
			console.log('clicked');
		});
		
	}; 
	//-----------------------END: attachEvents-------------------------------------

	var checkData = function(fullName, userName, email){
		this.fullName = fullName;
		this.userName = userName;
		this.email = email;
		this.atPos = this.email.indexOf("@");
		this.dotPos = this.email.lastIndexOf(".");
		console.log('checkData');

		// && this.userName>8
		if(this.fullName.length >=1 && this.userName.length>8 && checkEmail(this.email)==true ){
			console.log('complete!');
			console.log('check email: ');
			window.location.href = "userProfile.html";
		} else {
			console.log('not complete!');
		}
	};

	//-----------------------START: Check Form Field Functions-------------------------------------

	//give fullName feedback
	var fullNameFeedBack = function(event){
		var fieldValue1 = elements.fullNameField.value;
		new checkFullName(fieldValue1);
	};

	//check full name field
	var checkFullName = function(fullName){
		this.fullName = fullName;

		//check to make sure name is filled out
		if(this.fullName =='' || this.fullName ==null ){
			elements.fullNameFeed.innerHTML = "";
			this.paragraph = document.createElement('p');
			this.paragraph.innerHTML = "A name is required."
			this.paragraph.classList.add('feedback');
			elements.fullNameFeed.appendChild(this.paragraph);
		} else if(this.fullName.length >= 1){
			elements.fullNameFeed.innerHTML = "";
			this.paragraph = document.createElement('p');
			this.paragraph.innerHTML = "Name looks great!"
			this.paragraph.classList.add('feedback');
			elements.fullNameFeed.appendChild(this.paragraph);
		}
	};

	//check username field
	var userNameFeedBack = function(event){
		var fieldValue2 = elements.userNameField.value;
		new checkUserName(fieldValue2);
	};

	var checkUserName = function(userName){
		this.userName = userName;

		//check length of user name
		if(this.userName.length >= 7){
			elements.userNameFeed.innerHTML	= "";
			this.paragraph = document.createElement('p');
			this.paragraph.innerHTML = "Username looks great!"
			this.paragraph.classList.add('feedback');
			elements.userNameFeed.appendChild(this.paragraph);
			//console.log("checked user name!");
		} else if (this.userName.length < 7) {
			elements.userNameFeed.innerHTML	= "";
			this.paragraph = document.createElement('p');
			this.paragraph.innerHTML = "Please use between 8 & 30 characters."
			this.paragraph.classList.add('feedback');
			elements.userNameFeed.appendChild(this.paragraph);
		}
	};

	//check email field 
	var emailFeedback = function(event){
		var fieldValue3 = elements.emailField.value;
		new checkEmail(fieldValue3);
	};

	var checkEmail = function(e_mail){
		this.email = e_mail;
		this.signUpComplete = false;
		this.atPos = this.email.indexOf("@");
		//console.log("this.atPos: " + this.atPos);
		this.dotPos = this.email.lastIndexOf(".");
		//console.log(this.signUpComplete);
		
		//check e-mail format
		if(this.atPos<1 || this.dotPos<(this.atPos+2) || (this.dotPos+2) >= this.email.length){
			elements.emailFeed.innerHTML="";
			this.paragraph = document.createElement('p');
			this.paragraph.innerHTML = "Doesn't look like a valid email."
			this.paragraph.classList.add('feedback');
			elements.emailFeed.appendChild(this.paragraph);
			this.signUpComplete = false;
		} else {
			elements.emailFeed.innerHTML="";
			this.paragraph = document.createElement('p');
			this.paragraph.innerHTML = "We will e-mail you a confirmation."
			this.paragraph.classList.add('feedback');
			elements.emailFeed.appendChild(this.paragraph);
			this.signUpComplete = true;
		}

		return this.signUpComplete;
		return this;
	
	};
	//-----------------------END: Check Form Field Functions-------------------------------------

	//-----------------------START: Model-------------------------------------
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
	//-----------------------END: Model------------------------------------- 

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