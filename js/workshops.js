$(function(){
	$(".modal-trigger").click(function(){
		var modal = $(this).attr("data-open");
		$(modal).slideUp();
		$("body").addClass("stick-temp");
	});
});
