$( document ).ready(function() {

	//var divID = $('body').attr("id");

	/*if (divID.attr("id") === "home") {
	  $("li").css("opacity", "1");
  }*/

	$('.tablinks').click(function() {
		$('.tablinks').toggleClass('active');
	});

	$('.more-info').click(function() {
		$("html, body").animate({ scrollTop: $('#more-event-info').offset().top }, 1000);
		   return false;
	});

	$('.next-two').click(function() {
		$(".stage.one").css("display","none");
		$(".stage.two").css("display","block");

		$(".progress.one").css("opacity",".5");
		$(".progress.two").css("opacity","1");
	});

	$('.prev-one').click(function() {
		$(".stage.one").css("display","block");
		$(".stage.two").css("display","none");

		$(".progress.one").css("opacity","1");
		$(".progress.two").css("opacity",".5");
		$(".progress.three").css("opacity",".3");
		$(".progress.four").css("opacity",".2");
	});

	$('.next-three').click(function() {
		$(".stage.two").css("display","none");
		$(".stage.three").css("display","block");

		$(".progress.one").css("opacity",".3");
		$(".progress.two").css("opacity",".5");
		$(".progress.three").css("opacity","1");
	});

	$('.prev-two').click(function() {
		$(".stage.two").css("display","block");
		$(".stage.three").css("display","none");

		$(".progress.one").css("opacity",".5");
		$(".progress.two").css("opacity","1");
		$(".progress.three").css("opacity",".3");
		$(".progress.four").css("opacity",".2");
	});

	$('.next-four').click(function() {
		$(".stage.three").css("display","none");
		$(".stage.four").css("display","block");

		$(".progress.one").css("opacity",".2");
		$(".progress.two").css("opacity",".3");
		$(".progress.three").css("opacity",".5");
		$(".progress.four").css("opacity","1");
	});

	$('.prev-three').click(function() {
		$(".stage.three").css("display","block");
		$(".stage.four").css("display","none");

		$(".progress.one").css("opacity",".2");
		$(".progress.two").css("opacity",".3");
		$(".progress.three").css("opacity","1");
		$(".progress.four").css("opacity",".5");
	});

});
