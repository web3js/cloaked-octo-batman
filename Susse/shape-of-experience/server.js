
var express = require('express'),
	app = express(),
	http = require('http'),
	experience = require('./routes/experience');

app.configure(function () {
	app.set('port', process.env.PORT || 4000);
	app.use(express.logger('dev'));
	app.use(express.bodyParser());
});
 
app.get('/experience', experience.findAll);
app.get('/experience/:id', experience.findById);
app.post('/experience', experience.addExperienceElement);
app.put('/experience/:id', experience.updateExperienceElement);
app.delete('/experience/:id', experience.deleteexperienceElement);


http.createServer(app).listen(app/get('port'), function () {

	console.log("Express server listening on port " + app.get('port'));
});