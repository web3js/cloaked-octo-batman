var calculator = {
  results : [],
  
  calculate : {
    
    add : function(num1, num2){
      this.results.push(num1 + num2);
    },
    
    subtract : function(num1, num2){
      this.results.push(num1 - num2);
    },
  
    multiply : function(num1, num2){
      this.results.push(num1 * num2);
    },

    devide : function(num1, num2){
      this.results.push(num1 / num2);
    },

    remainder : function(num1, num2){
      this.results.push(num1 % num2);
    }

  }

};
