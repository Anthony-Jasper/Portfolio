<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cosmic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
  <body <?php body_class(); ?> id="home" data-magellan-target="home"> 
    <!-- particles.js container --> 
    <div id="particles-js"></div> 
    <?php echo get_template_part('inc/recruiter'); ?>
        <div class="reveal small datapad" id="greeting" data-animation-in="fade-in slow" data-animation-out="fade-out fast" data-reveal>
          <div class="datapad-pad">
            <p class="pfont h1">Welcome Explorer</p>
            <p>Hello Explorer, and welcome to your first day in the Sol system. Feel free to stay docked at Earth or adventure out to the other planets and discover what you can about a certain human called ‘Anthony Jasper’.
            </p>
            <p>While you’re out there in the nothingness, keep a watchful eye open for those pesky aliens, you certainly don’t want to get caught in a firefight with them.
            </p>
          </div>
          <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <header class="main-header">
          <button id="open-canvas" type="button" class="button" data-toggle="offCanvas">Recruiters</button>
          <div id="star-container">
            <div class="shooting-star"></div>
            <div class="shooting-star"></div>
            <div class="shooting-star"></div>
            <div class="shooting-star"></div>
            <div class="shooting-star"></div>
          </div>

          <div class="grid-container full">
            <div class="planet-nav grid-x">
              <div id="about-nav" class="cell auto xlarge-2">
                <div id="about"></div>
              </div>
              <div id="cloudyne-nav" class="cell auto xlarge-2">
                <div id="cloudyne"></div>  
              </div>
              <div id="home-nav" class="cell auto xlarge-4">
                <div id="home"></div>
              </div>
              <div id="experience-nav" class="cell auto xlarge-2">
                <div id="experience"></div> 
              </div>
              <div id="contact-nav" class="cell auto xlarge-2">
                <div id="contact"></div>
              </div>
            </div>
            <div id="planet-content">
              <h1 id="planet-heading">Home</h1>
              <h2 id="planet-desc">Dock at Earth and fend off the alien invasion</h2>
              <div class="hyperdrive-menu" data-magellan data-offset="-25" data-animation-duration="2000" data-animation-easing="linear">
                <a class="c2a-button travel-button" href="#home" data-open="hyperspace">
                  <i class="material-icons-outlined">
                    arrow_back
                  </i>
                  <p>Travel</p>
                  <i class="material-icons-outlined">
                    arrow_forwards
                  </i>
                </a>
              </div>
            </div>
          </div>
          <div class="hyperdrive-menu" id="game-link" data-magellan data-offset="-25" data-animation-duration="2000" data-animation-easing="linear">
            <div>Game Only Available at 1600px+</div>
            <a href="#game-section" data-open="hyperspace">
              <img id="alien" src="<?php bloginfo('template_url'); ?>/assets/images/alien-gameintro.png" />  
            </a>
          </div>
          <div id="hamburger-menu">
            <button id="hamburger" type="button">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </button>
          </div><!-- hamburger-menu -->
          <div id="boring-nav" >
            <ul class="menu hyperdrive-menu" data-magellan data-offset="-25" data-animation-duration="2000" data-animation-easing="linear">
              <li><a href="#home" data-open="hyperspace">Home</a></li>
              <li><a href="#about-section" data-open="hyperspace">About</a></li>
              <li><a href="#cloudyne-section" data-open="hyperspace">Cloudyne</a></li>
              <li><a href="#experience-section" data-open="hyperspace">Experience</a></li>
              <li><a href="#contact-section" data-open="hyperspace">Contact</a></li>
            </ul>
          </div>
        </header>
      </div>
    </div>
    