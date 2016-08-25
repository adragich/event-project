function constructMenuLinks(){
	var minHeight = $(window).height(), li;
	$(".stick .container").css("min-height", minHeight + "px");
	if($(window).width > 768){
		li = $(".nav li:not(.workshops)");
	}
	else{		
		li = $(".nav li");
	}
	var height = ($(window).height() - parseInt($(".sideBar").css("padding-top")) - 2*parseInt($(".nav").css("padding-top")) 
		- parseInt($(".lang a").css("line-height")) - $(".socials a").height() - parseInt($(".socials").css("bottom"))) / li.length ;
	li.css("line-height", height + "px"); 
}
$(function() {
	constructMenuLinks();
    scrollOptions();
	$(".menu").click(function(){
			$(".sideBar").addClass("appeared");
			$(".overlay").fadeIn();
			$("body").addClass("stick-temp");
			setTimeout(function() {
				$(".lang").slideDown();
			}, 1000);

			$('.nav li').each(function(index, value){
				var li = $(this);
				setTimeout(function(){
					li.fadeIn();
				}, 80*index + 1000 );
			});

            $('.socials a').each(function(index, value){
                var a = $(this);
                setTimeout(function(){
                    a.fadeIn();
                }, 100*index + 1000 );
            });
	});

	$(".close, .overlay").click(function(){
		$(".lang").slideUp();
		$('.nav li').fadeOut();
        $('.socials a').fadeOut();
		setTimeout(function() {
			$(".sideBar").removeClass("appeared");
			$(".overlay").fadeOut();
			$("body").removeClass("stick-temp");
		}, 500);
	});

	$(".navigation").click(function(){

		var id = $(this).attr('data-id'),
			offset = $(this).attr('data-offset');
		scrollToElement(id, offset);

	});

});

$(window).resize(function(){
	constructMenuLinks();
});

$( window ).on( "orientationchange", function( event ) { 
	constructMenuLinks();
} );


function translateToPoint(x, y, e, d){
	setTimeout( function()
	{ e.delay( d ).css( {'top': y, "left": x, "opacity": "1"} )
	} , d);
}
function getPoint(a, b){
	var x = $(".loadAnimation").width() * a, y = $(".loadAnimation").height() * b, point = [x, y];
	return point;
}
function generateFigure(point, part1, part2, part3, part4){
	var x = point[0], y = point[1];
	translateToPoint(x + part4.width() - part1.width(), y, part1, 0);
	translateToPoint(x + part1.width() + part4.width() - part1.width(), y + part1.height() - part2.height(), part2, 250);
	translateToPoint(x + part4.width(), y + part1.height(), part3, 500);
	translateToPoint(x, y + part1.height(), part4, 750);
}
function screwDesigners(){
	var checker = $('.place-section');

	if(checker.length > 0){
		var wrap1 = $('.placeWrap:nth-child(2)'),
			wrap2 = $('.placeWrap:nth-child(3)'),text1, text2;

		if($(window).width() < 678 && !checker.is('.screwed')){
			text1 = wrap1.find("[data-index='1']");
			text2 = wrap2.find("[data-index='2']");
			wrap1.append(text2);
			wrap2.append(text1);
			checker.addClass('screwed');
		}
		else if($(window).width() > 677 && checker.is('.screwed')){
			text1 = wrap1.find("[data-index='2']");
			text2 = wrap2.find("[data-index='1']");
			wrap1.append(text2);
			wrap2.prepend(text1);
			console.log(text1.length);
			console.log(text2.length);
			console.log(text1.html());
			console.log(text1.html());
			checker.removeClass('screwed');
		}
	}
}

function scrollToElement(id, offset){
	var scroll = $(id).offset().top;
	$( "html, body" ).stop().animate({scrollTop: scroll + offset}, '500', 'swing');
}

$(window).scroll(function() {
    if($(window).width() > 675){
        scrollOptions();
    }
});

function scrollOptions(){
	if($(window).scrollTop() > 100){
		$(".animScrollLink").addClass('inScroll');
	}
	else{
		$(".animScrollLink").removeClass('inScroll');
	}
}