$(function() {
	var duration = 1000;
	$(".static-content").css("opacity", 1);
	$(".aside.left").addClass(" animated fadeInDown");
	setTimeout('$(".grey-stripe").addClass(" animated fadeInDown")',  duration/2);
	setTimeout('$(".event-link").addClass(" animated fadeInRight")',  duration/2);

	setTimeout('$(".big-grey-stripe").addClass(" animated fadeInDown")',  duration);
	setTimeout('$(".event-left-link").addClass(" animated fadeIn")',  1.5*duration);
	
	setTimeout('$(".aside.right").addClass(" animated fadeInDown")',  2*duration);


	setTimeout('$(".mainTitle").addClass(" animated fadeInUp")',  duration*2.5);
	setTimeout('$(".note").addClass(" animated fadeInUp")',  duration*2.7);
	setTimeout('$(".date").addClass(" animated fadeInUp")',  duration*2.9);
	setTimeout('$(".city").addClass(" animated fadeInUp")',  duration*3.1);
	setTimeout('$(".company").addClass(" animated fadeInUp")',  duration*3.3);

	setTimeout('$(".bottom-link").addClass(" animated fadeInRight")',  duration*2);
})