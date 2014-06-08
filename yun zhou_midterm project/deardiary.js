$(document).on("click",".z1",function(){
	$("#mobilepro").removeClass("z1").addClass("z2");
})
$(document).on("click",".z2",function(){
	$("#mobilepro").removeClass("z2").addClass("z3");
})
$(document).on("click",".z3",function(){
	$("#mobilepro").removeClass("z3").addClass("z4");
})
$(document).on("click",".z4",function(){
	$("#mobilepro").removeClass("z4").addClass("z5");
})
$(document).on("click",".z5",function(){
	$("#mobilepro").removeClass("z5").addClass("z1");
})

//right side bar
$(document).ready(function(){
	$(".w").hide();
	$(".c").hide();
})
$(document).on("click",".work",function(){
	$(".w").show();
	$(".c").hide();

})
$(document).on("click",".concept",function(){
	$(".c").show();
	$(".w").hide();
})
