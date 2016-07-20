$(function() {
	var duration = 1000;
	$(".static-content").css("opacity", 1);
	$(".aside.left").addClass(" animated fadeInDown");
	setTimeout('$(".event-link").addClass(" animated fadeInRight")',  duration/2);
	setTimeout('$(".aside.right").addClass(" animated fadeInDown")',  duration);
	setTimeout('$(".mainTitle").addClass(" animated fadeInUp")',  duration);
	setTimeout('$(".note").addClass(" animated fadeInUp")',  duration*1.2);
 	setTimeout('$(".bottom-link").addClass(" animated fadeInRight")',  duration*1.4);
})