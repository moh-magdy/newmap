/*global $, jquery, alert*/

$(function () {
    
 //confirmation  Message On Button
    
 $('.confirm').click(function () {
    
     return confirm('Are You Sure?');
 });

 
 $('.toggle-info').click(function () {
    
     $(this).toggleClass('selected').parent().next('.panel-body').slideToggle();
     
     $(this).hasClass('selected')?$(this).html('<i class="fa fa-plus fa-lg" aria-hidden="true"></i>'): $(this).html('<i class="fa fa-minus fa-lg" aria-hidden="true"></i>');

 });

});