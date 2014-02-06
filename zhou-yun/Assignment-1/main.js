var operation = {
    add: function(a,b){
        return a+b
    },
    subtract: function(a,b){
        return a-b
    },
	multiply: function(a,b){
			return a*b;
	},
	divide: function(a,b){
	    if(b !== 0){return a/b}else{
			throw alert;
			
	}
		}
}
var alert = {
    name :'Alert',
    message : 'No zero.'
}


//operation.add(4.2,7.6);
//operation.subtract(8,10);
//operation.multiply(1.2,0);
//operation.divide(20,5);
operation.divide(7,0);



