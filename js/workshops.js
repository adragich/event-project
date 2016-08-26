$(function(){
	$(".modal-trigger").click(function(){
		var modal = $(this).attr("data-open");
		$(modal).slideDown();
		$("body").addClass("stick-temp");
	});
});
