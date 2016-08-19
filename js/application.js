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
    uploadStr:"+PDF"
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
        name = $( '[name = "name"]' ).val();
    data.append('name', name);
    var data2 = {
        'name': name
    };

console.log(name);
    console.log(data);
    console.log(data2);
    $.ajax({
        method: 'POST',
        url: '../actions/swiftmailer.php',
        data: data,
        dataType: 'json'
    }).done(function(e){
        console.log(e);
        console.log('done');
    });

    // $.ajax({
    //     url: '../actions/swiftmailer.php',
    //     data: data,
    //     success: function(res){
    //         console.log(res);
    //         console.log('done');
    // }});


});

//
