$(function(){

    $('.sub').click(function(event){

        $('.main_sidebar>ul>li.selected_item').removeClass("selected_item");
        $(this).addClass("selected_item");
        $('.holder').removeClass('visible');
        $('#' + $(this).attr('data-target-container')).addClass('visible');
    });

    $('#prev').click(function(){
        window.history.back();
    });

    $('#forw').click(function(){
        window.history.forward();
    });
});
