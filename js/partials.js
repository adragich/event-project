function constructMenuLinks(){
	if($(window).width > 768){
		var li = $(".nav li:not(.bilety)");
	}
	else{		
		var li = $(".nav li");
	}
	var height = ($(".sideBar").height() - $(".lang").height() - $(".socials").height() - parseInt($(".socials").css("bottom"))) / li.length;
	li.css("line-height", height + "px");
}
$(function() {
	constructMenuLinks();
	$(".menu").click(function(){
			$(".sideBar").addClass("appeared");
			$(".overlay").removeClass("clear");
	});
	$(".close").click(function(){
			$(".sideBar").removeClass("appeared");
			$(".overlay").addClass("clear");
	});
});
$(window).resize(function(){
	constructMenuLinks();
});