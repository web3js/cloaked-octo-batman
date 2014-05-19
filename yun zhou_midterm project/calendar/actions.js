
	 $(document).on( "click", "td", function(){
 		$(".currDayHover").removeClass("currDayHover");
      	$(this).addClass("currDayHover");
		var row = $(this).parent();
		$("tr").hide();
		$(".weekHeader").show();
		row.show();

		//4.6
		// if ($("this").hasClass("currDay")) {
		// 	$("#div1").append("<div class ='detail'><div class = 'seeCal'></div><div style = “clear: both”></div>");
		// }else{
		// 	$("#div1").append("<div class ='detail'><span class = 'currDay'></span><div style = “clear: both”></div>");

		// };
		
		$("#div1").append("<div class ='detail'><span class = 'pre'></span><span class = 'next'></span><p>Oops, no diary that day.</p></div>");
		//if currDay is before this td, click pre to currDay td, click next to alert
		//if currDay is after this td, click next to currDay td, click pre to alert
		//if currDay is this td, click pre and next to alert
		$(".pre").click(function(){
			$(this).prevUntil("currDay");
		})
		$("h1").click(function(){
			location.reload();
			// $("tr").show();
			// $(".detail").hide();
			
		
	});
		if ($(this).hasClass("currDay")) {
				$(".detail").append("<span class = 'currDayImg'></span>");
				$("p").hide()
			}else{
				$(".currDayImg").hide();
			}


	 } );

	$(document).on("click", ".clickable", function(){
		$(".detail").hide();
		// $(".currDayImg").hover($(".detail").append("<h2>Pasta for a nice night:)</h2>"),("h2").hide());

	})

	// try to make text over the img when hovering the img.

// 	$(document).on("hover", ".currDayImg", function()){
// 		$(".currDayImg").append("<h2>Pasta for a nice night:)</h2>");
// }

// $(document).ready(function(){
// 	$(".currDayImg").hover($(".detail").append("<h2>Pasta for a nice night:)</h2>"),("h2").hide());
// })
// $(document).ready(function(){
// 	$(".currDayImg").mouseenter(function(){
// 	// $(".detail").append("<h2>Pasta for a nice night:)</h2>");
// 	$("#div1").hide();
// });
// })

// $(".currDayImg").hover(
// 	function(){
// 		$(this).append($("<h2>Pasta for a nice night:)</h2>"));
//      // $("#div1").hide();
// 	}, function(){
// 		$(this).find("h2").remove();
// 	});
