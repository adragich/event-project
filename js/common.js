function setPosition(checkAnim){
	//container and letter P
	var wrap = $(".loadAnimation"),
	  	template = $(".imageCenter"),
	  	//elements of animation
		orangeSquare = $("#orangeSquare"),
		blueTriangle = $("#blueTriangle"),
		yellowTriangle = $("#yellowTriangle"),
		redSquare = $("#redSquare"),
		//sizing of template (letter P)
		widthTemplate = template.width(),
		heightTemplate = template.height(),
		//size of container
		widthWrap = wrap.width(),
		heightWrap = wrap.height(),
		//offset of template(letter P)
		offsetBottom = parseInt(blueTriangle.css("border-top-width"), 10),
		top = (heightWrap - heightTemplate)/2 - 45,
		left = (widthWrap - widthTemplate)/2,
		right = widthWrap - left - widthTemplate,
		bottom = heightWrap - top - heightTemplate,
		bottomDefigned = bottom + heightTemplate - offsetBottom,
		topDefigned = top + orangeSquare.height(),
		position = [top, left, right, bottomDefigned];
		console.log(position);
		template.css({"top": top, "left": left});
	//define position of elements
	  if(checkAnim == false){
		orangeSquare.css({"left": left});
		blueTriangle.css("top", top);
		yellowTriangle.css("right", right);
		redSquare.css("bottom", bottom);
		//show template
		wrap.animate({ 
			opacity: 1
	  	}, 500);
		template.animate({ 
			opacity: 1
	  	}, 1000);
	  	checkAnim = animateItems(orangeSquare, blueTriangle, yellowTriangle, redSquare, position, 1000, wrap);
	  }
	  else{
		orangeSquare.css({"top": top, "left": left});
		blueTriangle.css({"top": top, "right": right});
		yellowTriangle.css({"top": top, "right": right});
		redSquare.css({"left": left, "top": topDefigned});
	  }
}
function animateItems(first, second, third, fourth, position, duration, wrap){
	  first.delay( duration/2 ).animate({
	    opacity: 1,
	    top: "+=" + position[0]
	  }, duration, function() {
	    console.log("Animation complete.");
			  third.animate({
			    opacity: 1,
			    bottom: "+=" + position[3]
			  }, duration, function() {
			      console.log("Animation complete.");
			  });
	  });
	  second.delay( duration ).animate({
		opacity: 1,
		  right: "+=" + position[2]
		}, duration, function() {
		    console.log("Animation complete.");
				fourth.animate({
				 opacity: 1,
				 left: "+=" + position[1]
			}, duration, function() {
				var right = 0,
					strings = $(".additionalInfo p");
				 wrap.css({"right": right, "left": "inherit"}).addClass("ready");
				 $(".static-content").css("opacity", 1);
				 $(".aside.left").addClass(" animated slideInDown");
				 setTimeout('$(".event-link").addClass(" animated fadeInRight")',  duration/2);
				 setTimeout('$(".aside.right").addClass(" animated fadeInDown")',  duration);
				 setTimeout('$(".mainTitle").addClass(" animated fadeInUp")',  duration);
				 setTimeout('$(".note").addClass(" animated fadeInUp")',  duration*1.2);
				 setTimeout('$(".bottom-link").addClass(" animated fadeInRight")',  duration*1.4);
				 return true;
			});
		  });
}
function constructMenuLinks(){
	if($(window).width > 768){
		var li = $(".nav li:not(.bilety)");
	}
	else{		
		var li = $(".nav li");
	}
	var height = ($(".sideBar").height() - $(".lang").height() - $(".socials").height() - parseInt($(".socials").css("bottom"))) / li.length;
	li.css("line-height", height + "px");
}
$(function() {
	var checkAnim = false;
	setPosition(checkAnim);
	constructMenuLinks();
	$(".menu").click(function(){
			$(".sideBar").addClass("appeared");
			$(".overlay").removeClass("clear");
	});
	$(".close").click(function(){
			$(".sideBar").removeClass("appeared");
			$(".overlay").addClass("clear");
	});
});
$(window).resize(function(){
	setPosition();
	constructMenuLinks();
});