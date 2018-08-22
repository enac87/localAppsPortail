
( function( $ ) {
  $( document ).ready(function() {

    $('#previous').click(function(){
        window.history.back();
    });

    $('#forward').click(function(){
        window.history.forward();
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
$('#body-row .collapse').collapse('hide');

// Collapse/Expand icon
// $('#collapse-icon').removeAttr('src');

// Collapse click
$('[data-toggle=sidebar-colapse]').click(function() {
    SidebarCollapse();
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
