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

$(".file-uploader").each(function(){
    var button = $(this);
    button.uploadFile({
        url:"actions/upload.php",
        multiple:false,
        dragDrop:false,
        maxFileCount:1,
        filename: 'file',
        // acceptFiles:"application/pdf",
        uploadStr:"+",
        showDelete: true,
        onSuccess:function(files,data,xhr,pd)
        {
            var input = button.attr('data-input-id');
            $(input).val(files[0]);
            button.removeClass('required');

        },
        deleteCallback: function(data,pd)
        {
            for(var i=0; i<data.length; i++)
            {
                $.post("actions/delete.php",{op:"delete",name:data[i]},
                    function(resp, textStatus, jqXHR)
                    {
                        //Show Message
                        console.log("File Deleted");
                    });
            }
            pd.statusbar.hide();

        }
    });
});
$(document).on('click', '.apply-trigger', function(e){
    e.preventDefault();

    var id = $(this).attr( 'href' ),
        scroll = $(id).offset().top;
    $( "html, body" ).stop().animate({scrollTop:scroll}, '500', 'swing');
});

// $(document).on('click', '.teams-list p', function(){
//     var team = $(this).text(), label = $(".choose-team .current"),
//         block = $('.teams-list'), button = $('.expander');
//     label.text(team);
//     $('#team').val(team);
//     label.addClass('chosen-team');
//     block.slideUp();
//     button.removeClass('active');
//     $('.choose-team').removeClass('required');
// });

$(document).ready(function(){
    var sendButton = $(".send-application"),
        portfolio = $("#portfolio"),
        team = $("#team"),
        check = $('[name="accepted"]'),
        label = $('[for="accepted"]'),
        phone = $("#phone");


    label.click( function(){

        if( check.val() == 0 ){
            sendButton.addClass('half-visible');
            label.addClass('required');
        }
        else{
            sendButton.removeClass('half-visible');
            label.removeClass('required');
        }

    });

    sendButton.click(function(e){

        if( check.val() == 0 ){
            e.preventDefault();
            label.addClass('required');
        }
        else if(portfolio.val() == ''){
            e.preventDefault();
            $('.file-input').addClass('required');
        }
        else if(team.val() == ''){
            e.preventDefault();
            $('.choose-team').addClass('required');
        }
    });

    phone.inputmask({
        mask: "(+99)9{3,4}-99{2,3}-99{2,3}",
        greedy: false
    });
    phone.on("keydown change", function() {
        if ($(this).val().replace(/[_\-()]/g,"").length >= 11) {
            $(this).inputmask("(+99)999-999-999");
        }
        else {
            $(this).inputmask("(+99)9999-99-99");
        }
    });
});

//
