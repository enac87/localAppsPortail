
( function( $ ) {
  $( document ).ready(function() {

    $('#cssmenu > ul > li > a').click(function() {

      if($(this).parent("li").hasClass('active')){
        $(this).parent("li").removeClass('active');
      } else {
        $(this).parent("li").addClass('active');
      }

      $(this).next('ul').slideToggle("slow");

    });
  });
} )( jQuery );

$(function(){

    $('.has-sub > ul > li').click(function(event){

        $('.has-sub > ul > li.selected_item').removeClass("selected_item");
        $(this).addClass("selected_item");
        $('.holder').removeClass('visible');
        $('#' + $(this).children('a').attr('data-target-container')).addClass('visible');
    });

    $('#prev').click(function(){
        window.history.back();
    });

    $('#forw').click(function(){
        window.history.forward();
    });
});
