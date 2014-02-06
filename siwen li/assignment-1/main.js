var myCalculator = {
  
  name: Calculator,
  year_production: 2014,
  version: CXII,
  color: black,
  opertaion : {
    add: function (a, b) {
      return: a+b;
      this.shove(a+b);
    },
    subtract: function (a, b) {
      return: a-b;
      this.shove(a-b);
    },
    multiply: function (a, b) {
      return: a*b;
      this.shove(a*b);
    }
    divide: function (a, b) {
      if (b==0) {
        throw zeroDivision;
      } else {
      return: a/b;
      this.shove(a/b);
      }
    };
  },
  result: [],
  shove : function(thing) {
    this.result.push(thing)
  }	;
  zeroDivision: {
  name: 'zero division',
  expression: "Sorry, you can't divide a number by 0!"
  }
}
