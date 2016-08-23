$(function() {
    var duration = 1000;
    $(".static-content").css("opacity", 1);
    $(".aside.left").addClass(" animated fadeInDown");

    // setTimeout('$(".grey-stripe").addClass(" animated fadeInDown")',  duration/3);
    // setTimeout('$(".event-link").addClass(" animated fadeInRight")',  duration/3);

    // setTimeout('$(".big-grey-stripe").addClass(" animated fadeInDown")',  duration/2);
    // setTimeout('$(".event-left-link").addClass(" animated fadeIn")',  0.75*duration);

    setTimeout('$("#topPart").addClass(" animated fadeInDown")',  2.75*duration);
    setTimeout('$("#middlePart").addClass(" animated fadeIn")',  2.5*duration);
    setTimeout('$("#bottomPart").addClass(" animated fadeInUp")',  3*duration);

    setTimeout('$(".aside.right").addClass(" animated fadeInDown")',  2*duration/3);


    setTimeout('$(".mainTitle").addClass(" animated fadeInUp")',  duration);
    setTimeout('$(".note").addClass(" animated fadeInUp")',  duration*1.5);
    // setTimeout('$(".date").addClass(" animated fadeInUp")',  duration*1.7);
    // setTimeout('$(".city").addClass(" animated fadeInUp")',  duration*1.9);
    // setTimeout('$(".company").addClass(" animated fadeInUp")',  duration*2.1);

    setTimeout('$(".bottom-link").addClass(" animated fadeInRight")',  duration*1.25);
})