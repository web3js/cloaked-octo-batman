// when page loads call spacebrew setup function 
		$(window).on("load", setupSpacebrew);

		// wher the jquery mobile is ready to initialize the UI call the setUI function 
		$(document).bind("pageinit", setupUI);

		// Creates the Spacebrew Object
		var sb, 
			//app name
			app_name = " Candyfloss Mobile",
			//values are of range
			values = {} ;

			//buttons
		var bIsOn;

		//Spacebrew function
		function setupSpacebrew (){
			//if button is on
			bIsOn = true;

			console.log(bIsOn);

			//we already named our app
			app_name = app_name;
			//creating an instance of the spacebrew client object and assigning this to sb object
			console.log("Setting up spacebrew connection");
			//look at all the objects being reused
			sb = new Spacebrew.Client({reconnect:true});
			//it takes the parameters, name, description
			sb.name(app_name);
			sb.description("Sliders for sending and displaying SpaceBrew range messages.");

			// configure the publication and subscription feeds 
			//adding two sliders
			sb.addPublish("slider1", "range", "500");
			sb.addPublish("slider2", "range", "500");
			//the call back function
			sb.addSubscribe( "toggleBackground", "boolean" );

			// override Spacebrew events - this is how you catch events coming from Spacebrew
			sb.onBooleanMessage = onBooleanMessage;
			sb.onRangeMessage = onRangeMessage;
			sb.onOpen = onOpen;

			// connect to spacbrew
			sb.connect();

			// listen to the mouse 
			$("#buttonMsg").on("mousedown", onButtonPress);
			$("#buttonMsg").on("mouseup", onButtonRelease);
		};

		//Function that is called when Spacebrew connection is established
		function onOpen() {
			var message = "Connected as <strong>" + sb.name() + "</strong>. ";
			if (sb.name() === app_name) {
			//	message += "<br>You can customize this app's name in the query string by adding <strong>name=your_app_name</strong>."
			}
			$("#name").html( message );
		}

		//function that is setting up the UI listening for the slider input
		function setupUI() {
			console.log("Setting up the UI listeners");
			// when the slider state changes it sends a message to spacebrew
			$(".slider").bind( "change", function(event, ui) {
				if (values[event.target.id] != event.target.value) {
					sb.send(event.target.id, "range", event.target.value);
					values[event.target.id] = event.target.value;
				}
			});
		}

		//function for the range msg. 
		function onRangeMessage(name, value){
			console.log("Received new range message ", value);
			$("#"+name).slider('refresh', value);
		};


		function onButtonPress (evt){
			console.log("[onButtonPress] button has been pressed"); 
	        // sb.send("buttonPress", "boolean", "true");
		}

		function onButtonRelease (evt){
			bIsOn = !bIsOn;
			console.log("[onButtonRelease] button has been released"); 
			
			if (bIsOn)  {
				sb.send("buttonPress", "boolean", "false");
			} else {
				sb.send("buttonPress", "boolean", "true");
			}

		}



		function onBooleanMessage( name, value ){
			console.log("[onBooleanMessage] boolean message received ", value);

			var div = document.getElementById( 'range' );

			var buttonMsg = document.getElementById('buttonMsg');
			if (value) {
				// buttonMsg.innerHTML = 'on';
				div.style.background = "#7F003D"
			} else {
				// buttonMsg.innerHTML = 'off';
				div.style.background = "#FF4CA2"

			}



		}