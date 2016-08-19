/**
 * Created by nastia on 18/08/16.
 */

// application
$(document).on('click', '.expander', function(){
    var button = $(this),
        block = $(button.attr('data-block'));
    if(!button.is('.active')){
        block.slideDown();
        button.addClass('active');
    }
    else{
        block.slideUp();
        button.removeClass('active');
    }
});

$(".pdf-uploader").uploadFile({
    url:"actions/upload.php",
    multiple:false,
    dragDrop:false,
    maxFileCount:1,
    filename: 'file',
    acceptFiles:"application/pdf",
    uploadStr:"+PDF",
    onSuccess:function(files,data,xhr,pd)
    {

       console.log(files, data);

    }
});

$(document).on('click', '.teams-list p', function(){
    var team = $(this).text(), label = $(".choose-team .current"),
        block = $('.teams-list'), button = $('.expander');
    label.text(team);
    block.slideUp();
    button.removeClass('active');
});

$(".send-application").click(function(){

    var name = $( '[name = "name"]' ).val(),
        email = $( '[name = "email"]' ).val(),
        phone = $( '[name = "phone"]' ).val();
    var data = {
        'name': name,
        'email': email,
        'phone': phone,
        'portfolio': portfolio,
        'online-portfolio': onlinePortfolio,
        'team': team
    };

    $.ajax({
        method: 'POST',
        url: '../actions/swiftmailer.php',
        data: data,
        dataType: 'json'
    }).done(function(e){
        console.log(e);
        console.log('done');
    });


});

//
