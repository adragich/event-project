/**
 * Created by nastia on 29/08/16.
 */
$(function(){
   var expanders = $("[data-role='parent']");
    expanders.each(function(){
        var state= $(this).attr('data-state'),
            topic = $(this).attr('data-topic'),
            children = $("[data-topic='" + topic + "'][data-role='child']");

        if(state == 'collapsed'){
            children.hide();
        }

       $(this).on('click', function(){
           var state= $(this).attr('data-state');

           if(state == 'collapsed'){
               children.each(function(i, e){
                   $(e).fadeIn();
               });
               $(this).attr('data-state', 'expanded');
           }
           else{
               children.fadeOut();
               $(this).attr('data-state', 'collapsed');
           }
       });
    });
});