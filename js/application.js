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

$(".pdf-input").uploadFile({
    url:"actions/upload.php",
    multiple:false,
    dragDrop:false,
    maxFileCount:1,
    filename: 'file',
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

$(".send-application").click(function(){

    var data = new FormData(),
        name = $('[name="name"]').val();
    data.append(name, name);

    $.ajax('../actions/sendmail.php').done(function(e){
        console.log(e);
        console.log('done');
    }).fail(function(){
       console.log('fail');
    });
});

//
