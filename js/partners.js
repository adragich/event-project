
		$(function(){
			var part1 = $("#secondPart"), part2 = $("#fourthPart");
			var point = getPoint(0.8, 0.57), nav = $(".navigation"),
				scroll = $("body").scrollTop() + $(window).height() - 300 + parseInt(nav.attr("data-scroll"));


			var x = point[0], y = point[1];

			translateToPoint(x, y, part1, 0);
			translateToPoint(x, y, part2, 250);

			$(window).resize(function(){
				point = getPoint(0.4, 0.3);
				var x = point[0], y = point[1];
				translateToPoint(x - part1.width(), y - part1.height()/2, part1, 0);
				translateToPoint(x, y, part2, 250);
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
