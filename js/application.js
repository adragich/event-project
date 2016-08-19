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

        $('#portfolio').val(files[0]);
        $('.pdf-input').removeClass('required');

    }
});

$(document).on('click', '.teams-list p', function(){
    var team = $(this).text(), label = $(".choose-team .current"),
        block = $('.teams-list'), button = $('.expander');
    label.text(team);
    $('#team').val(team);
    label.addClass('chosen-team');
    block.slideUp();
    button.removeClass('active');
    $('.choose-team').removeClass('required');
});

$(document).ready(function(){
    $("#phone").inputmask("+99-999-999-999");
});

$(".send-application").click(function(e){
    var portfolio = $("#portfolio"),
        team = $("#team");

    if(portfolio.val() == ''){
        e.preventDefault();
        $('.pdf-input').addClass('required');
    }
    else if(team.val() == ''){
        e.preventDefault();
        $('.choose-team').addClass('required');
    }
});
//
