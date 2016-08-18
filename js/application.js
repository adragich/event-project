/**
 * Created by nastia on 18/08/16.
 */

// application
$(document).on('click', '.expander', function(){
    var button = $(this), block = $(button.attr('data-block'));
    if(button.is('.active')){
        block.slideUp();
        button.removeClass('active');
    }
    else{
        block.slideDown();
        button.addClass('active');
    }
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
