/**
 * Created by nastia on 18/08/16.
 */

// application
$(document).on('click', '.expander', function(){
    var button = $(this),
        block = $(button.attr('data-block'));
    if(button.is('.active')){
        block.slideUp();
        button.removeClass('active');
    }
    else{
        block.slideDown();
        button.addClass('active');
    }
    button.toggleClass('active');
});


$(document).on('click', '.pdf-input', function(){
    $("input[name='pdf']").click();
});

$(".pdf-input").uploadFile({
    url:"partials/upload.php",
    multiple:false,
    dragDrop:false,
    maxFileCount:1,
    filename: 'pdf',
    acceptFiles:"application/pdf",
    uploadStr:"Dołącz portfolio w formie PDF"
});

$(document).on('click', '.teams-list p', function(){
    var team = $(this).text(), label = $(".choose-team .current"),
        block = $('.teams-list'), button = $('.expander');
    label.text(team);
    block.slideUp();
    button.removeClass('active');
});

//
