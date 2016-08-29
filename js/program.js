/**
 * Created by nastia on 29/08/16.
 */
$(function(){
   var expanders = $("[data-role='parent']");
    expanders.each(function(){
        var topic = $(this).attr('data-topic'),
            state= $(this).attr('data-state'),
            children = $("[data-topic='" + topic + "'][data-role='child']");
console.log(children.length);
       $(this).on('click', function(){

           if(state == 'collapsed'){
               children.each(function(i, e){
                   setTimeout(function(){
                       $(e).fadeIn();
                   }, i*250);
               });
               $(this).attr('data-state', 'expanded');
           }
           else{
               children.each(function(i, e){
                   setTimeout(function(){
                       $(e).fadeOut();
                   }, i*250);
               });
               $(this).attr('data-state', 'collapsed');
           }
       });
    });
});