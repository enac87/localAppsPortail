
( function( $ ) {
  $( document ).ready(function() {

    $('.sidebar-submenu > .list-group-item').click(function(event){

        $('.list-group-item').removeClass("selected_item");
        $(this).addClass("selected_item");
        // $('.holder').removeClass('visible');
        // $('#' + $(this).children('a').attr('data-target-container')).addClass('visible');
    });

    $('#previous').click(function(){
        window.history.back();
    });

    $('#forward').click(function(){
        window.history.forward();
    });

    $('#refresh').click(function(){
        var iframe = $('.holder.visible iframe.embed-responsive-item')[0];
        var href = iframe.contentWindow.location.href;
        iframe.contentWindow.location.href = null;
        iframe.contentWindow.location.href = href;
    });

    $('.sidebar-submenu > a').click(function() {

      //< First make all Iframe Holders not visible by removing the visible class
      $('.holder').removeClass('visible');

      //Make the Iframe Holder of the selected item visible
      var target = $(this).attr("data-target-container");
      $('#' + target).addClass('visible');
    });
  });
} )( jQuery );


// Hide submenus
$('#body-row .collapse').collapse('show');

// Collapse/Expand icon
// $('#collapse-icon').removeAttr('src');

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
});

$(".list-group-item-action").on('click', function(e){
  if($("#sidebar-container").hasClass("sidebar-collapsed")){
    e.stopPropagation();
    SidebarCollapse();
  }
});

function SidebarCollapse () {
    $('.menu-collapsed').toggleClass('d-none');
    $('.sidebar-submenu').toggleClass('d-none');
    $('.submenu-icon').toggleClass('d-none');
    $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

    // Treating d-flex/d-none on separators with title
    var SeparatorTitle = $('.sidebar-separator-title');
    if ( SeparatorTitle.hasClass('d-flex') ) {
        SeparatorTitle.removeClass('d-flex');
    } else {
        SeparatorTitle.addClass('d-flex');
    }
}
