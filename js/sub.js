
		$(function(){
			var part1 = $("#firstPart"), part2 = $("#secondPart"), part3 = $("#thirdPart"), part4 = $("#fourthPart");
			var point = getPoint(0.4, 0.3), nav = $(".navigation"), scroll = $("body").scrollTop() + $(window).height() - 300 + parseInt(nav.attr("data-scroll"));
			generateFigure(point, part1, part2, part3, part4);
			$(window).resize(function(){
				point = getPoint(0.4, 0.3);
				generateFigure(point, part1, part2, part3, part4);
			});
			console.log(scroll);
			nav.attr("data-scroll", scroll);
			nav.click(function(){
				var dest = $(this).attr("data-scroll");
				$("body").animate({scrollTop: dest}, 1000);
			});
			screwDesigners();
		});

		$(window).resize(function(){
			screwDesigners();
		});
