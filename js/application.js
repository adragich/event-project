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
    showDelete: true,
    onSuccess:function(files,data,xhr,pd)
    {

        $('#portfolio').val(files[0]);
        $('.pdf-input').removeClass('required');

    },
    deleteCallback: function(data,pd)
    {
        for(var i=0;i<data.length;i++)
        {
            $.post("..actions/delete.php",{op:"delete",name:data[i]},
                function(resp, textStatus, jqXHR)
                {
                    //Show Message
                    console.log("File Deleted");
                });
        }
        pd.statusbar.hide(); //You choice to hide/not.

    }
});
$(document).on('click', '.apply-trigger', function(e){
    e.preventDefault();

    var id = $(this).attr( 'href' );
    $( "body" ).scrollTop($(id).scrollTop());
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
    $("#phone").inputmask({
        mask: "(+99)9{3,4}-99{2,3}-99{2,3}",
        greedy: false
    });
    $("#phone").on("keydown change", function() {
        if ($(this).val().replace(/[_\-()]/g,"").length >= 11) {
            $(this).inputmask("(+99)999-999-999");
        }
        else {
                $(this).inputmask("(+99)9999-99-99");
        }
    });
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
