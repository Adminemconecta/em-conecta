//backstretch
$(document).ready(function() {
	jQuery.backstretch(_BASE_URL+"public/img/fruits-market-colors-compressor.jpg");
	$("#conf_inicial").click(function(){
	    $(".social_user_mail").toggle("fade");
	    $(".portafolio_card").hide("fade");
	    $(".productos_cad").hide("fade");
	    $(".blog_cad").hide("fade");
	    $(".card_mail").hide("fade");
	});
	$("#portafolio").click(function(){
	    $(".portafolio_card").toggle("fade");
	    $(".social_user_mail").hide("fade");
	    $(".productos_cad").hide("fade");
	    $(".blog_cad").hide("fade");
	    $(".card_mail").hide("fade");
	});

	$("#tienda").click(function(){
	    $(".productos_cad").toggle("fade");
	    $(".social_user_mail").hide("fade");
	    $(".social_user_mail").hide("fade");
	    $(".portafolio_card").hide("fade");
	    $(".blog_cad").hide("fade");
	    $(".card_mail").hide("fade");
	});

	$("#blog").click(function(){
	    $(".blog_cad").toggle("fade");
	    $(".productos_cad").hide("fade");
	    $(".social_user_mail").hide("fade");
	    $(".social_user_mail").hide("fade");
	    $(".portafolio_card").hide("fade");
	    $(".card_mail").hide("fade");
	});

	$("#mail").click(function(){
	    $(".card_mail").toggle("fade");
	    $(".blog_cad").hide("fade");
	    $(".productos_cad").hide("fade");
	    $(".social_user_mail").hide("fade");
	    $(".social_user_mail").hide("fade");
	    $(".portafolio_card").hide("fade");
	});
});
