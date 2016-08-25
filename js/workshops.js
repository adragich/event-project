$(function(){
	$(".modal-trigger").click(function(){
		var modal = $(this).attr("data-open");
		$(modal).fadeIn();
		$("body").addClass("stick-temp");
	});


});
