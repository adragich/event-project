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
        offsetTop = parseInt(blueTriangle.css("border-left-width"), 10),

        //top = (heightWrap - heightTemplate)/2 - 45,

        top = template.position().top,
        left = template.position().left,

        //left = (widthWrap - widthTemplate)/2,
        right = left,

        //right = widthWrap - left - widthTemplate,
        bottom = top + offsetBottom + offsetTop,
       // bottom = heightWrap - top - heightTemplate,
       // bottomDefigned = bottom + heightTemplate - offsetBottom,
       // topDefigned = top + orangeSquare.height(),

        //position = [top, left, right, bottomDefigned];
        position = [top, left, right, bottom];
    console.log(position);

    //template.css({"top": top, "left": left});

    console.log(parseInt(wrap.css("top")));
    //define position of elements
    console.log(template.position());
    if(checkAnim == false){
        orangeSquare.css({"left": left + 'px'});
        blueTriangle.css("top", top + 'px');
        yellowTriangle.css("right", right + 'px');
        redSquare.css("bottom", bottom + 'px');
        //show template
        wrap.animate({
            opacity: 1
        }, 500);
        template.animate({
            opacity: 1
        }, 1000);
        checkAnim = animateItems(orangeSquare, blueTriangle, yellowTriangle, redSquare, position, 500, wrap);
    }
    else{
        orangeSquare.css({"top": top + 'px', "left": left + 'px'});
        blueTriangle.css({"top": top + 'px', "right": right + 'px'});
        yellowTriangle.css({"top": top + 'px', "right": right + 'px'});
        redSquare.css({"left": left + 'px', "top": topDefigned + 'px'});
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
            wrap.css({"right": right, "left": "45%"}).addClass("ready");
            $(".static-content").css("opacity", 1);
            $(".aside.left").addClass(" animated fadeInDown");

            setTimeout('$(".grey-stripe").addClass(" animated fadeInDown")',  duration/2);
            setTimeout('$(".event-link").addClass(" animated fadeInRight")',  duration/2);

            setTimeout('$(".big-grey-stripe").addClass(" animated fadeInDown")',  duration);
            setTimeout('$(".event-left-link").addClass(" animated fadeIn")',  1.5*duration);

            setTimeout('$(".aside.right").addClass(" animated fadeInDown")',  2*duration);


            setTimeout('$(".mainTitle").addClass(" animated fadeInUp")',  duration*2.5);
            setTimeout('$(".note").addClass(" animated fadeInUp")',  duration*2.7);
            setTimeout('$(".date").addClass(" animated fadeInUp")',  duration*2.9);
            setTimeout('$(".city").addClass(" animated fadeInUp")',  duration*3.1);
            setTimeout('$(".company").addClass(" animated fadeInUp")',  duration*3.3);

            setTimeout('$(".bottom-link").addClass(" animated fadeInRight")',  duration*2);
            return true;
        });
    });
}
$(function() {
    var checkAnim = false;
    setPosition(checkAnim);
});
$(window).resize(function(){
    setPosition();
});