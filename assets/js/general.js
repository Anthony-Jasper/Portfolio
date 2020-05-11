jQuery( document ).ready(function( $ ) {
  $( document ).foundation();
  // Theme JS here

  $("#hamburger").click(function () {
    if($('#hamburger').hasClass('is-active')){
      $('#hamburger').removeClass('is-active');
      $('#boring-nav').removeClass('expand-nav');
    }else{
      $('#hamburger').addClass('is-active');
      $('#boring-nav').addClass('expand-nav');
    }
  });

});