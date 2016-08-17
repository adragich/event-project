
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
			var point = getPoint(), nav = $(".navigation"), scroll = $("body").scrollTop() + $(window).height() - 300 + parseInt(nav.attr("data-scroll"));
			generateFigure(point, part1, part2, part3, part4);
			$(window).resize(function(){
				point = getPoint();
				generateFigure(point, part1, part2, part3, part4);
			});
			console.log(scroll);
			nav.attr("data-scroll", scroll)
			nav.click(function(){
				var dest = $(this).attr("data-scroll");
				$("body").animate({scrollTop: dest}, 1000);
			});
			screwDesigners();
		});

		$(window).resize(function(){

			if(!$('.place-section').addClass('screwed')){
				screwDesigners();
			}

		});

		function screwDesigners(){
			if($(window).width() < 678 && $('.placeWrap').length > 0){
				var wrap1 = $('.placeWrap:nth-child(2)'),
					wrap2 = $('.placeWrap:nth-child(3)'),
					text1 = wrap1.find(".place-info"),
					text2 = wrap2.find(".place-info");
				wrap1.append(text2);
				wrap2.append(text1);
				$('.place-section').addClass('screwed');
			}
		}