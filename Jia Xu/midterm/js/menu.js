$(document).ready(function() {

  var dd1 = false;
  var dd2 = false;
  var dd3 = false;
  var dd4 = false;
  
  //BTN1
  $('.dd_btn1').click(function() {
    
      if(dd2 === true) {
        $('.dd2').removeClass('fadeInDown').addClass('hidden');
      }
    
      if(dd3 === true) {
        $('.dd3').removeClass('fadeInDown').addClass('hidden');
      }
    
     if(dd4 === true) {
        $('.dd4').removeClass('fadeInDown').addClass('hidden');
      }
      
      dd1 = true;
      $('.dd1').removeClass('hidden').addClass('fadeInDown');
  
  });

 //BTN2
  $('.dd_btn2').click(function() {
    
      if(dd1 === true) {
        $('.dd1').removeClass('fadeInDown').addClass('hidden');
      }
    
      if(dd3 === true) {
        $('.dd3').removeClass('fadeInDown').addClass('hidden');
      }
    
     if(dd4 === true) {
        $('.dd4').removeClass('fadeInDown').addClass('hidden');
      }
      
      dd2 = true;
      $('.dd2').removeClass('hidden').addClass('fadeInDown');
  
  });
  
   //BTN3
  $('.dd_btn3').click(function() {
    
      if(dd1 === true) {
        $('.dd1').removeClass('fadeInDown').addClass('hidden');
      }
    
      if(dd2 === true) {
        $('.dd2').removeClass('fadeInDown').addClass('hidden');
      }
    
     if(dd4 === true) {
        $('.dd4').removeClass('fadeInDown').addClass('hidden');
      }
      
      dd3 = true;
      $('.dd3').removeClass('hidden').addClass('fadeInDown');
  
  });
  
   //BTN4
  $('.dd_btn4').click(function() {
    
      if(dd1 === true) {
        $('.dd1').removeClass('fadeInDown').addClass('hidden');
      }
    
      if(dd2 === true) {
        $('.dd2').removeClass('fadeInDown').addClass('hidden');
      }
    
     if(dd3 === true) {
        $('.dd3').removeClass('fadeInDown').addClass('hidden');
      }
      
      dd4 = true;
      $('.dd4').removeClass('hidden').addClass('fadeInDown');
  
  });
  
});