function constructMenuLinks(){
	var minHeight = $(window).height();
	$(".stick .container").css("min-height", minHeight + "px");
	if($(window).width > 768){
		var li = $(".nav li:not(.bilety)");
	}
	else{		
		var li = $(".nav li");
	}
	var height = ($(window).height() - parseInt($(".sideBar").css("padding-top")) - 2*parseInt($(".nav").css("padding-top")) 
		- parseInt($(".lang a").css("line-height")) - $(".socials a").height() - parseInt($(".socials").css("bottom"))) / li.length ;
	li.css("line-height", height + "px"); 
}
$(function() {
	constructMenuLinks();
	$(".menu").click(function(){
			$(".sideBar").addClass("appeared");
			$(".overlay").removeClass("clear");
			$("body").addClass("stick-temp");
	});
	$(".close").click(function(){
			$(".sideBar").removeClass("appeared");
			$(".overlay").addClass("clear");
			$("body").removeClass("stick-temp");
	});
});
$(window).resize(function(){
	constructMenuLinks();
});
$( window ).on( "orientationchange", function( event ) { 
	constructMenuLinks();
} );