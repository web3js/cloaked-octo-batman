var guesses = (function(exports) {

	var mongo,
		Server,
		Db,
		BSON,
		server,
		db,
		init,
		addGuess,
		deleteGuess;

	mongo = require('mongodb');
	Server = mongo.Server;
	Db = mongo.db;
	BSON = mongo.BSONPure;
	server = new Server('localhost', 27017, {auto_reconnect: true});
	db = new Db('guesses', server);

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

	// post a correct guess

	// delete all guesses to start game over

})();

guesses.init();