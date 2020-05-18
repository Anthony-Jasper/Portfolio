jQuery( document ).ready(function( $ ) {
  $( document ).foundation();
  // Theme JS here

  $(".hamburger").click(function () {
    if($(this).hasClass('is-active')){
      $('.hamburger').removeClass('is-active');
    }else{
      $(this).addClass('is-active');
    }
  });

});