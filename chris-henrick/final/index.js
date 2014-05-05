// revealing module pattern, remember?
// passing the global "exports" to the module, in case we wanna add stuff to it.
var server = (function(exports){

	// list local variables
	var express,
		app,
		http,
		guesses,
		bodyParser;

	// instantiate all vars here
	// importing modules: both ones installed with npm and ones we created
	express = require('express');
	http = require('http');
	guesses = require('./routes/guesses');
	bodyParser = require('body-parser');

	// define app as express
	app = express();

	// set some configs for app.
	app.set('port', 9999);
	app.use(bodyParser());
	app.use(express.static(__dirname + '/public'));

	// set up the routes. match routes with functions.
	// HTTP verbs! These will come from ajax calls in main.js in public
	app.get('/api/guesses/', guesses.findAll);
	//app.get('/api/:id', guesses.findById);
	app.post('/api/guesses/', guesses.addGuess);
	//app.put('/api/guesses/:id', guesses.updateGuess);
	app.delete('/api/guesses/', guesses.deleteAllGuesses);

	// this is the initiation function. call this and everything kicks off.
	init = function() {
		http.createServer(app).listen(app.get('port'), function() {
			console.log('Magic Happening on port: ', app.get('port'));
		});
	}

	return {
		init : init
	}

})(exports);

server.init();