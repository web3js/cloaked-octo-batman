var myApp = {
 results : [],

 calculate : {
    add : function(val1, val2){
    	myApp.results.push(val1 + val2);
    	return (val1 + val2);
    },
    subtract : function(val1, val2){
    	myApp.results.push(val1 - val2);
    	return (val1 - val2);
    },
    multiply : function(val1, val2){
    	myApp.results.push(val1 * val2);
    	return (val1 * val2);
    },
    divide : function(val1, val2){
    	myApp.results.push(val1 / val2);
    	return (val1 / val2);
    }
  },

};