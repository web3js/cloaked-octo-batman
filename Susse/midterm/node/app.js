// Load up Spacebrew
var Spacebrew = require("spacebrew");

// Load the TCP Library
net = require('net');
 
// Keep track of the clients
var clients = [];

// set port number
var port = 9001;
 
// Start a TCP Server
net.createServer(function (socket) {
 
  // Identify this client
  socket.name = socket.remoteAddress + ":" + socket.remotePort;

  // Put this new client in the list
  clients.push(socket);
  console.log('[CONN] New connection: ' + socket.name + ', total clients: ' + clients.length);
 
 
  // Handle incoming messages from clients.
  socket.on('data', function (data) {
    data = data.toString('utf8').trim();
    console.log('[RECV] ' + socket.name + ': ' + data);
  });

  socket.on('error', function(error) {
    if (error.code == "ECONNRESET") {
      clients.splice(clients.indexOf(socket), 1);
      console.log('[EROR] Disconnection: ' + socket.name + ', total clients: ' + clients.length)
    }
  });
 
  // Remove the client from the list when it leaves
  socket.on('end', function () {
    clients.splice(clients.indexOf(socket), 1);
    console.log('[END] Disconnection: ' + socket.name + ', total clients: ' + clients.length)
  });

 
}).listen(port);
 
console.log("[INIT] Server running on port", port);




//
// Spacebrew setup
//

var server = "sandbox.spacebrew.cc";
var name = "candyfloss nodejs";
var description = "This is a client that connects to incomming input from a url";
var sb = new Spacebrew.Client(server, name, description);

var rotationVal = 500;
var colorVal = 500; 

sb.addSubscribe("rotation", "range"); 
sb.addSubscribe("lightColor", "range");



var onRangeMessage = function(name, value) {

  if (name == "rotation") {
    rotationVal = value;
  }
  if (name == "lightColor") {
    colorVal = value;
  } 

  var mappedRotation = Math.floor(map(rotationVal, 0, 1023, 0, 180));
  var mappedColor = Math.floor(map(colorVal, 0, 1023, 0, 255)); 

  send(mappedRotation + "," + mappedColor);

}

sb.onRangeMessage = onRangeMessage;
sb.connect();


var send = function(message) {
  console.log('[SEND:' + clients.length + ']', message);

  if (!clients.length) return;

  for (var i = 0; i < clients.length; i++) {
  	// console.log("[SEND] Checking index "+ i +" of length "+ clients.length);
    var socket = clients[i];

    socket.write(message + "\n");
  }
}

var map = function(value, inputMin, inputMax, outputMin, outputMax) {
	return outVal = ((value - inputMin) / (inputMax - inputMin) * (outputMax - outputMin) + outputMin);
}
