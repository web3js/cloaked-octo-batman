// web3js assignment 1
// simple calculator

var ti82 = {
	name: 'TI-82',
	version: 0.01,
	results : [],
	calculate: {
		add: function(n1,n2){
			ti82.results.push(n1+n2);
		},
		subtract: function(n1,n2){
			ti82.results.push(n1-n2);
		},
		multiply: function(n1,n2){
			ti82.results.push(n1*n2);
		},
		divide: function(n1,n2){
			ti82.results.push(n1/n2);
		},
	}	
};

ti82.calculate.add(1,1);
ti82.calculate.subtract(3,1);
ti82.calculate.divide(4,2);
ti82.calculate.multiply(6,6);
console.log(ti82.results);