jQuery( document ).ready(function( $ ) {
  console.log('To view what needs to be done or fixed for the website type todoWeb(); or issuesWeb(); If you want to see what future ideas I have for the site, type ideasWeb();');
 
  
  $( document ).foundation();
  // Theme JS here
  $(window).on('beforeunload', function() {
    $(window).scrollTop(0);
  });
  //Displays Alert for users displaying website below 1600px
  function screenSize() {
    if (window.innerWidth < 1600 || window.innerHeight < 900) {
      alert('You are seeing this alert because you are trying to view this site at a resolution that it not yet supported. \n\nThis site is still being developed. For a better viewing experience please view the site at 1600px+ width and 900px+ height.');
    }
  }
  // Fire.
  screenSize();
  // And recheck when window gets resized.
  $(window).resize(function() {
    clearTimeout(this.id);
    this.id = setTimeout(screenSize, 1000);
  });
  /*SHOTTING STAR - RUN FUNCTION*/
  shootingStars();
  /******************************/

  $("#hamburger").click(function () {
    if($('#hamburger').hasClass('is-active')){
      $('#hamburger').removeClass('is-active');
      $('#boring-nav').removeClass('expand-nav');
    }else{
      $('#hamburger').addClass('is-active');
      $('#boring-nav').addClass('expand-nav');
    }
  });


  $(".cell > div").click(function () {
    var title = $(this).attr("id");
    $("#planet-heading").text(title);
    $(".travel-button").attr("href", '#'+title+'-section');
    if(title === 'about'){
      $("#planet-desc").text('Travel to Mars and navigate the baron lands to find out more about Anthony Jasper.');
    }else if(title === 'cloudyne'){
      $("#planet-desc").text('Travel to Jupiter and explore the gas giant to find out more about Cloudyne');
    }
    else if(title === 'experience'){
      $("#planet-desc").text('Travel to Saturn and traverse the rings to find out more about Anthonys past');
    }
    else if(title === 'contact'){
      $("#planet-desc").text('Travel to Pluto and reach the comms station to send a message');
    }
  });
  $("#home-nav").click(function () {
    var title = $(this).children('div').attr("id");
    $(".travel-button").attr("href", '#'+title);
    $("#planet-heading").text(title);
    if(title === 'home'){
      $("#planet-desc").text('Dock at Earth and fend off the alien invasion');
    }
  });

  /*$(".hyperdrive-menu a").click(function () {
    $('.hyperdrive-menu').addClass('hyperdrive-active');
    $('#hamburger').removeClass('is-active');
    $('#boring-nav').removeClass('expand-nav');
    setTimeout(function(){
      $('#hyperspace').trigger(
        $.Event( 'keydown', { keyCode: 27, which: 27 } )
      );
    }, 2900);
  });*/
  $(".c2a-button").mouseenter(function () {
    $(this).addClass('expand-button');
  });
  $(".c2a-button").mouseleave(function () {
    $(this).removeClass('expand-button');
  });

  $('#greeting').foundation('open');
  $("#open-about").click(function () {
    $("#about-section").removeClass('fake-overlay');
    $("#about-greeting").css('display', 'none');
    $("#about-section .orbit").css('opacity', 1);
  });
  $(".education-hoveractive p").mouseenter(function () {
    $(this).next().css('top', 130);
    $(this).next().addClass('edu-fadein');
  });
  $(".education-hoveractive p").mouseleave(function () {
    $(this).next().css('top', 0);
    $(this).next().removeClass('edu-fadein');
  });

  $('.wpcf7-submit').attr("disabled", true);
  $('#contact-name').on('input', function() {
    if($('.wpcf7-form p:nth-of-type(2)').hasClass('contact-fadeinSlide')){
      $('.cn-icon').css('display', 'none');
    }else{
      $('.cn-icon').css('display', 'block');
    }
  });
  $('#contact-email').on('input', function() {
    $('.ce-icon').css('display', 'block');
    if($('.wpcf7-form p:nth-of-type(3)').hasClass('contact-fadeinSlide')){
      $('.ce-icon').css('display', 'none');
    }else{
      $('.ce-icon').css('display', 'block');
    }
  });
  $('#contact-subject').on('input', function() {
    $('.cs-icon').css('display', 'block');
    if($('.wpcf7-form p:nth-of-type(4)').hasClass('contact-fadeinSlide')){
      $('.cs-icon').css('display', 'none');
    }else{
      $('.cs-icon').css('display', 'block');
    }
  });
  $('#contact-message').on('input', function() {
    $('.cm-icon').css('display', 'block');
    if($('.wpcf7-form p:nth-of-type(5)').hasClass('contact-fadeinSlide')){
      $('.cm-icon').css('display', 'none');
    }else{
      $('.cm-icon').css('display', 'block');
    }
  });

  $(".wpcf7 .material-icons-outlined").click(function () {
    $(this).css({
      'color': 'darkgoldenrod', 
      'box-shadow': 'inset 0px 0px 10px 0px darkgoldenrod'
    });
    if($(this).hasClass('cn-icon')){
      $('.wpcf7-form p:nth-of-type(2)').css('display', 'block');
      $('.wpcf7-form p:nth-of-type(2)').addClass('contact-fadeinSlide');
      $('#photo-me').css(
        'filter', 'blur(15px) grayscale(0.7) contrast(0.3)'
      );
      $('#contact-photo').css(
        'transform', 'translateY(85px)'
      );
      $(this).css('display', 'none');
    }
    if($(this).hasClass('ce-icon')){
      $('.wpcf7-form p:nth-of-type(3)').css('display', 'block');
      $('.wpcf7-form p:nth-of-type(3)').addClass('contact-fadeinSlide');
      $('#photo-me').css(
        'filter', 'blur(10px) grayscale(0.5) contrast(0.5)'
      );
      $('#contact-photo').css(
        'transform', 'translateY(169px)'
      );
      $(this).css('display', 'none');
    }
    if($(this).hasClass('cs-icon')){
      $('.wpcf7-form p:nth-of-type(4)').css('display', 'block');
      $('.wpcf7-form p:nth-of-type(4)').addClass('contact-fadeinSlide');
      $('#photo-me').css(
        'filter', 'blur(5px) grayscale(0.2) contrast(0.8)'
      );
      $('#contact-photo').css(
        'transform', 'translateY(254px)'
      );
      $(this).css('display', 'none');
    }
    if($(this).hasClass('cm-icon')){
      $('.wpcf7-form p:nth-of-type(5)').css('display', 'block');
      $('.wpcf7-form p:nth-of-type(5)').addClass('contact-fadeinSlide');
      $('#photo-me').css(
        'filter', 'blur(0px) grayscale(0) contrast(1)'
      );
      $('.wpcf7-submit').attr("disabled", false);
      $(this).css('display', 'none');
    }
  });
  $("#sun").click(function () {
    $("#sun").addClass('explodeSun');
    $("#supernova").addClass('explodeNova');
    $("#cloudyne-heading").addClass('hideTop');
    $("#roles").addClass('hideBottom');
  });

  $(".prev-close").click(function () {
    $('*').removeClass('before-bkg');
    $("*").removeClass('star-active1');
    $("*").removeClass('star-active2');
    $("*").removeClass('star-active3');
    $("*").removeClass('star-active4');
    $("*").removeClass('star-active5');
    $(".supernova-star").next().children().css('display', 'none');
  });
  $(".supernova-star").click(function () {
    var background = $(this);
    $(this).next().children().css('display', 'block');
    $(this).next().children('.prev-logo').addClass('star-active1');
    $(this).next().children('.prev-likes').addClass('star-active2');
    $(this).next().children('.prev-website').addClass('star-active3');
    $(this).next().children('.prev-dislikes').addClass('star-active4');
    $(this).next().children('.prev-desc').addClass('star-active5');
    setTimeout(function () {
      background.next().addClass('before-bkg');
    }, 1500);

  });

  $(".tabs-title").mouseenter(function () {
    $(this).addClass('is-active');
    for(i = 0; i < $('.tabs-title').length; i++){
      var tabElement = $('.tabs-title').eq(i);
      var contentElement = $('.tabs-panel').eq(i);
      if(tabElement.hasClass('is-active')){
        contentElement.addClass('is-active');
      }
    };
  });
  $(".tabs-title").mouseleave(function () {
    $(this).removeClass('is-active');
    $('.tabs-panel').removeClass('is-active');
  });
});

function todoWeb() {
  console.log('Responsive');
  console.log('New Image for Contact Form');
  console.log('Improve "hyperspace" to look more realistic');
}
function issuesWeb() {

}
function ideasWeb() {
  console.log('Home - Planets slide into focus when selected');
  console.log('Sections - "Camera" Rotates to the right to view more info for that section');
}