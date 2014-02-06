//Team Namreta
//Feb. 6th, 2014

//operation
var myApp = {
  //array that's going out to look for the 
  arr : [],
  //function
  calculate : {
    //addthing to values
    add : function(val1, val2){
    	myApp.arr.push(val1 + val2);
   	return(val1 + val2);
    },
    //subtracting to values
    subtract : function(val1, val2){
    	myApp.arr.push(val1 - val2);
    return(val1 - val2);
    },
    //multipling to values
    multiply : function(val1, val2) {
    	myApp.arr.push(val1 * val2);
    return(val1 * val2);
    },
    //dividing to values
    divide : function(val1, val2) {
    	myApp.arr.push(val1 / val2);
    return(val1 / val2);
    },
    //percent to values
    percent : function(val1, val2) {
      myApp.arr.push(val1 % val2);
    return(val1 / val2);
    }
  }
	//console.log(results);
};

