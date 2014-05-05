var mongo = require('mongodb');
 
var Server = mongo.Server,
Db = mongo.Db,
BSON = mongo.BSONPure;
 
var server = new Server('localhost', 27017, {auto_reconnect: true});
db = new Db('experienceDb', server);

/*--------------------------------------------------------------------------------------------------------------------*/
// Populate database with sample data -- Only used once: the first time the application is started.
// You'd typically not find this code in a real-life app, since the database would already exist.
var populateDB = function() {
 
	var experience = [
		{
			description: "WIREFRAME",
			content: "this is a wireframe",
			picture: "wireframe.jpg"
		},
		{
			description: "FLOWDIAGRAM",
			content: "this is a flowdiagram",
			picture: "flowdiagram.jpg"
		}
	];
 
	db.collection('experienceDb', function(err, collection) {
		collection.insert(experience, {safe:true}, function(err, result) {});
	});
 
};
 
db.open(function(err, db) {
	if(!err) {
		console.log("Connected to 'experienceDb' database");
		db.collection('experienceDb', {strict:true}, function(err, collection) {
		if (err) {
			console.log("The 'experienceDb' collection doesn't exist. Creating it with sample data...");
			populateDB();
			}
		});
	}
});
 
 var findById = function(req, res) {
	var id = req.params.id;
	console.log('Retrieving experienceElement: ' + id);
	db.collection('experienceDb', function(err, collection) {
		collection.findOne({'_id':new BSON.ObjectID(id)}, function(err, item) {
			res.send(item);
		});
	});
};
 
var findAll = function(req, res) {
	db.collection('experienceDb', function(err, collection) {
		collection.find().toArray(function(err, items) {
		res.send(items);
		});
	});
};
 
var addexperienceElement = function(req, res) {
	var experienceElement = req.body;
		console.log('Adding experienceElement: ' + JSON.stringify(experienceElement));
		db.collection('experienceDb', function(err, collection) {
			collection.insert(experienceElement, {safe:true}, function(err, result) {
				if (err) {
					res.send({'error':'An error has occurred'});
				} else {
					console.log('Success: ' + JSON.stringify(result[0]));
					res.send(result[0]);
				}
			});
		});
};
 
var updateexperienceElement = function(req, res) {
	var id = req.params.id;
		var experienceElement = req.body;
		console.log('Updating experienceElement: ' + id);
		console.log(JSON.stringify(experienceElement));
		db.collection('experienceDb', function(err, collection) {
			collection.update({'_id':new BSON.ObjectID(id)}, experienceElement, {safe:true}, function(err, result) {
				if (err) {
					console.log('Error updating experienceElement: ' + err);
					res.send({'error':'An error has occurred'});
				} else {
					console.log('' + result + ' document(s) updated');
					res.send(experienceElement);
				}	
			});
		});
};
 
var deleteexperienceElement = function(req, res) {
	var id = req.params.id;
		console.log('Deleting experienceElement: ' + id);
		db.collection('experienceDb', function(err, collection) {
			collection.remove({'_id':new BSON.ObjectID(id)}, {safe:true}, function(err, result) {
				if (err) {
					res.send({'error':'An error has occurred - ' + err});
				} else {
					console.log('' + result + ' document(s) deleted');
				res.send(req.body);
				}
			});
		});
};
 
exports.findById = findById;
exports.findAll = findAll;
exports.addexperienceElement = addexperienceElement;
exports.updateexperienceElement = updateexperienceElement;
exports.deleteexperienceElement = deleteexperienceElement;
