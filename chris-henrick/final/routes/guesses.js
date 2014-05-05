var guesses = (function(exports) {

	var mongo,
		Server,
		Db,
		BSON,
		server,
		db,
		init,
		addGuess,
		deleteAllGuesses;

	mongo = require('mongodb');
	Server = mongo.Server;
	Db = mongo.Db;
	BSON = mongo.BSONPure;
	server = new Server('localhost', 27017, {auto_reconnect: true});
	db = new Db('nychoods', server);

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
		db.collection('guesses', function(req, res) {
			db.collection('guesses', function(err, collection){
				collection.find().toArray(function(err, items) {
					console.log('here are the guesses: ', items);
					res.send(items);
				});
			});
		});
	}

	// post a guess
	addGuess = function(req, res) {
		var guess = req.body;
		console.log('adding guess');
		db.collection('guesses', function(err, collection) {
			collection.insert(guess, {safe: true}, function(err, collection) {
				if (err) {
					console.log("error: ", err);
				} else {
					console.log("guess added", result[0]);
					req.send(result[0]);
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
		})
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