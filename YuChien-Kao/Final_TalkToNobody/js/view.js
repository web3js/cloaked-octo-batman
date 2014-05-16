//CSS notes
//Text field id = inText
//Screen id = dialog
// .us (p > [b])
// .ai (p > [b])



function response(question,ans_id){

	replaceOutput("<b>NOBODY &raquo;</b>" + processInput(question), ans_id);

	out.scrollByLines(100);
}



// Takes input from <input type=text>---------------------
// textField HTML Element Where input is being taken from
function takeInput(e){
	
	// e.which == 13 -> ENTER
	if(e.which !=13){
		return false;
	}

	var question = this.value;
	//appendOutput("<p class='us'><b>ME &raquo;</b>" + question + "<p>", out);
	//appendOutput("<p class='ai'><b>NOBODY &raquo;</b>" + processInput(question) + "<p>", out);
	//appendOutput("<hr/>", out);

    answer_id++;	
	var ans_id='answer'+answer_id;
	appendOutput("<p class='us'><b>ME &raquo;</b>" + question + "<p>" + 
		   "<p class='ai' id='"+ ans_id +"'><b>NOBODY &raquo;...</b><p>", out);
	setTimeout(function(){response(question,ans_id);}, 1000);

	this.focus();
	this.select();

	out.scrollByLines(100);
}

// Process input-----------------------------------------
function processInput(question){
	// default
	var answer = "Nothing to say.";

	// Conversations-way1 
	// if (question.toUpperCase() == "HELLO"){
	// 	answer = "Hi there!"
	// }
	// else if (question.toUpperCase() == "WHO ARE YOU"){
	// 	answer = "Im a robot."
	// }

	// Conversations-way2 : link to the ai-dictionary
	// if(dictionary[question.toUpperCase()]){
	// 	var randKey = parseInt(Math.random() * dictionary[question.toUpperCase()].length);
	// 	answer = dictionary[question.toUpperCase()][randKey];
	// }

	// Conversations-way3 : use the indexOf
	// if (question.toUpperCase().indexOf("HELLO") >= 0){
	// 	answer = "Hi there!"
	// }
	// else if (question.toUpperCase().indexOf("WHO ARE YOU") >= 0){
	// 	answer = "Im a robot in the nowhere."
	// }

	// Conversations-way4 : link to the dictionary & indexOf & forloop
	for (var i = 0; i <checkQuestions.length; i++) {
		var check = question.toUpperCase().indexOf(checkQuestions[i]);

		if(check>=0){
		var randKey = parseInt(Math.random() * dictionary[checkQuestions[i]].length);
		answer = dictionary[checkQuestions[i]][randKey];
		}
	}

	return answer;
}

// Displays output---------------------------------------
// message string Message to be displayed
// dest HTML Element Where message is to be displayed
function appendOutput(message, dest){
	
	dest.innerHTML += message;

}

function replaceOutput(message, ans_id){
   var dest = document.getElementById(ans_id);
	dest.innerHTML = message;
}



// Init code
var input = document.getElementById("inText");
input.onkeyup = takeInput;

var out = document.getElementById("dialog");
var answer_id = 0;

input.focus();



