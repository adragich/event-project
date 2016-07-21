
		function translateToPoint(x, y, e, d){
			setTimeout( function()
			{ e.delay( d ).css( {'top': y, "left": x, "opacity": "1"} ) 
			} , d);
		}
		function getPoint(){
			var x = $(".loadAnimation").width() * 0.4, y = $(".loadAnimation").height() * 0.3, point = [x, y];
			return point;
		}
		function generateFigure(point, part1, part2, part3, part4){
			var x = point[0], y = point[1];
			translateToPoint(x + part4.width() - part1.width(), y, part1, 0);
			translateToPoint(x + part1.width() + part4.width() - part1.width(), y + part1.height() - part2.height(), part2, 250);
			translateToPoint(x + part4.width(), y + part1.height(), part3, 500);
			translateToPoint(x, y + part1.height(), part4, 750);
		}
		$(function(){
			var part1 = $("#firstPart"), part2 = $("#secondPart"), part3 = $("#thirdPart"), part4 = $("#fourthPart");
			var point = getPoint(), nav = $(".navigation");
			generateFigure(point, part1, part2, part3, part4);
			$(window).resize(function(){
				point = getPoint();
				generateFigure(point, part1, part2, part3, part4);
			});
			nav.click(function(){
				var scroll = $("body").scrollTop() + $(window).height() - 15;
				$("body").animate({scrollTop: scroll}, 1000);
			});

		});