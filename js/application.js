/**
 * Created by nastia on 18/08/16.
 */

// application
$(document).on('click', '.expander', function(){
    var button = $(this),
        block = $(button.attr('data-block')),
        icon = button.find('i');
    if(!button.is('.active')){
        block.slideUp();
    }
    else{
        block.slideDown();
    }
    button.toggleClass('active', false);
    icon.toggleClass( "fa-angle-up", false);

});


$(document).on('click', '.pdf-input', function(){
    $("input[name='pdf']").click();
});

$(document).on('click', '.teams-list p', function(){
    var team = $(this).text(), label = $(".choose-team .current"),
        block = $('.teams-list'), button = $('.expander');
    label.text(team);
    block.slideUp();
    button.removeClass('active');
});

//
