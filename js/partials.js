function constructMenuLinks(){
	var li;
	if($(window).width() <= 1024){
		li = $(".nav li");
	}
	else{
		li = $(".nav li:not(.ticketsMobileLink)");
	}

	// $(".stick .container").css("min-height", minHeight + "px");
	// var height = $(window).height() * 0.7 / li.length ;
	var height = ($(window).height() - parseInt($(".inner-content").css("padding-top")) - 2.5*parseInt($(".nav").css("padding-top"))
		- $(".lang").height() - $(".socials").height() - parseInt($(".socials").css("bottom")))/ li.length;
	li.css("line-height", height + "px"); 
}

function getPathFromUrl(url) {
	return url.split("?")[0];
}
$(function() {
	constructMenuLinks();
    scrollOptions();

	$(".modal-trigger").click(function(){
		var modal = $(this).attr("data-open");
		$(modal).slideDown();
		$("body").addClass("stick-temp");
	});
	// var url = getPathFromUrl(window.location.href);
	// window.history.replaceState("", "", url);

	$('a[href="#"]').click(function(e){
		e.preventDefault();
	});

	$(".menu").click(function(){
			$(".sideBar").addClass("appeared");
			$(".overlay").fadeIn();
			setTimeout(function() {
				$("body").addClass("stick-temp");
			}, 1000);
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
		$("body").removeClass("stick-temp");
		var checker = $(this).attr('data-close');

		if( checker != '' && checker){
			$(checker).slideUp();
		}
		else{
			$(".lang").slideUp();
			$('.nav li').fadeOut();
			$('.socials a').fadeOut();
			setTimeout(function() {
				$(".sideBar").removeClass("appeared");
				$(".overlay").fadeOut();
			}, 500);
		}


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
	var scroll = 0;

	if(id && id != ''){
		scroll = $(id).offset().top - 30;
	}

	if($(window).width() > 675){
		scroll = scroll + parseInt(offset);
	}

	$( "html, body" ).stop().animate({scrollTop: scroll}, '500', 'swing');
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