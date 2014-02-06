// 1
// var calculator = {

//     name: 'YuChien Kao',
//     Version:'1.0',
    
//     results : [],

//     add: function (n1, n2){
//         //this = object(calculator)
//         this.results.push(n1+n2);
//     },
//     subtract: function(n1, n2){
//         this.results.push(n1-n2);
//     },
//     divide: function(n1, n2){
//         this.results.push(n1/n2);
//     },
//     mutiply: function(n1, n2){
//         this.results.push(n1*n2);
//     },
//     remainder: function(n1, n2){
//         this.results.push(n1%n2);
//     }
// };

// calculator.add(3,2);
// calculator.subtract(3,2);
// calculator.divide(3,2);
// calculator.mutiply(3,2);
// calculator.remainder(3,2);
// console.log(calculator.results);

//2 
//Problem: before reload, the console shows Array[5] 
//After reload, the console shows [5, 1, 1.5, 6, 1] 
var calculator ={
    
    name:'YuChien Kao',
    Version:'2.0',
    
    results : [],

    functions:{
        add: function(n1, n2){
            calculator.results.push(n1+n2);
        },
        subtract: function(n1, n2){
            calculator.results.push(n1-n2);
        },
        divide: function(n1, n2){
            calculator.results.push(n1/n2);
        },
        mutiply: function(n1, n2){
            calculator.results.push(n1*n2);
        },
        remainder: function(n1, n2){
            calculator.results.push(n1%n2);
        }
    }
};

calculator.functions.add(3,2);
calculator.functions.subtract(3,2);
calculator.functions.divide(3,2);
calculator.functions.mutiply(3,2);
calculator.functions.remainder(3,2);
console.log(calculator.results);
