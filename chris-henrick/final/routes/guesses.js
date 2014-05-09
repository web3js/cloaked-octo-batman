var guesses = (function(exports) {

	var mongo,
		Server,
		Db,
		BSON,
		server,
		db,
		init,
		findAll,
		addGuess,
		deleteAllGuesses;

	/*** vanilla mongodb init here ***/
	mongo = require('mongodb');
	Server = mongo.Server;
	Db = mongo.Db;
	BSON = mongo.BSONPure;
	server = new Server('localhost', 27017, {auto_reconnect: true});
	db = new Db('nychoods', server);

	/*** mongoose stuff here... ***/
	// var mongoose = require('mongoose');
	// mongoose.connect('mongodb://localhost/nychoods');

	// var db = mongoose.connection;
	// db.on('error', console.error.bind(console, 'connection error:'));
	// db.once('open', function(){
	// 	console.log('opened db with mongoose');
	// });

	// var guessSchema = mongoose.Schema({
	// 	correct: Number,
	// 	incorrect: Number,
	// 	hoods: [String]
	// });

	// var userSchema = mongoose.Schema({
	// 	name: String,
	// 	points: Number,
	// 	guesses: [guessSchema],
	// 	rank: Number
	// });

	// var User = mongoose.model('User', userSchema);

	// // test user creation
	// var boris = new User({ name: "Bo-Ris", points: null, guesses: {correct: 0, incorrect: 0,}, rank: 0});
	// boris.save(function (err, boris) {
	// 	if (err) return console.log(err);
	// 	console.log('added boris!');
	// });

	// createUser = function(req, res) {
	// 	var name = req.name
	// 	User.create({ name: })	
	// }

	// findAll = function(req, res) {

	// }

	// addGuess = function(req, res) {

	// }

	// deleteAllGuesses = function(req, res) {

	// }

	/*** vanilla mongo functions here ***/
	db.open(function(err, db) {
		if (!err) {
			console.log('connected to db');
			db.collection('guesses', {strict: true}, function(err, collection) {
				if (err) {
					console.log("the guesses collection doesn't exist yet. create it.");
				}
			});
		}
	});

	// find all guesses 
	findAll = function(req, res) {
			db.collection('guesses', function(err, collection){
				collection.find().toArray(function(err, items) {
					console.log('here are the guesses: ', items);
					res.send(items);
				});
			});
	}

	// post a guess
	addGuess = function(req, res) {
		var guess = req.body;
		console.log('adding guess');
		db.collection('guesses', function(err, collection) {
			collection.insert(guess, {safe: true}, function(err, result) {
				if (err) {
					console.log("error: ", err);
				} else {
					console.log("guess added", result[0]);
					res.send(result[0]);
				}
			});
		});
	}

	// delete all guesses to start game over
	deleteAllGuesses = function(req, res) {
		console.log("deleting guesses");
		db.collection('guesses', function(err, collection) {			
			collection.remove({});
			console.log("all guesses removed")
		});
	}

	init = function() {
		exports.findAll = findAll;
		exports.addGuess = addGuess;
		exports.deleteAllGuesses = deleteAllGuesses;
	}

	return {
		init : init
	}

})(exports);

guesses.init();