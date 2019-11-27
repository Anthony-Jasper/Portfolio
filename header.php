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
    <div class="off-canvas-wrapper">
      <div class="off-canvas position-left" id="offCanvas" data-off-canvas>
        <!-- Your menu or Off-canvas content goes here -->
        <div id="star-container">
          <div class="shooting-star"></div>
          <div class="shooting-star"></div>
          <div class="shooting-star"></div>
          <div class="shooting-star"></div>
          <div class="shooting-star"></div>
        </div>
        <button class="close-button" aria-label="Close menu" type="button" data-close>
          <span aria-hidden="true">Return</span>
        </button>
        <div id="triangle-topleft"></div>
        <div id="triangle-topright"></div>
        <p class="pfont h1">Anthony Jasper</p>
        <p class="h6">front-end web developer &amp; designer</p>
        <p id="rec-github"><a href="https://github.com/Anthony-Jasper/Portfolio">View Code on GitHub</a></p>
        <div class="beams">
          <hr>
          <hr>
        </div>
        <p class="pfont h5">Developer Projects</p>
        <div id="developer-projects">
          <div class="dp-cell">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/cloudyne_background.png" /> 
            <div class="dp-cell-content">
              <p class="hfont h5">Cloudyne Limited</p>
              <div>
                <p class="hfont h6">Description</p>
                <p>Cloudyne is a business that focuses on providing small businesses with up-to-date websites with the latest trends. Websites can be expensive and can come as a shock to some people, so they provide them with reasonable prices for the size of their business. Alongside websites, Cloudyne offers domain and hosting with no increased recurring pricing.</p>
              </div>
              <div>
                <p class="hfont h6">Features</p>
                <ul>
                  <li>Responsive</li>
                  <li>Quote form</li>
                  <li>Page Scroll Animations</li>
                  <li>particles.js Library</li>
                  <li>WHMCS Integration</li>
                </ul>
              </div>
              <div>
                <p class="hfont h6">Extras</p>
                <ul>
                  <li>Timeframe:<span>1 Month</span></li>
                  <li>Framework:<span>Foundation</span></li>
                  <li>CMS:<span>WordPress</span></li>
                  <li>On-Going Updates:<span>Yes</span></li>
                </ul>
              </div>
              <a href="https://www.cloudyne.co.uk" target="_blank">www.cloudyne.co.uk</a>
            </div>
          </div>
          <div class="dp-cell">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/shea-me_background.png" /> 
            <div class="dp-cell-content">
              <p class="hfont h5">Shea-Me</p>
              <div>
                <p class="hfont h6">Description</p>
                <p>Shea-Me is an e-commerce website that focuses on selling natural Shea butter products with no additives. The products use ethically sourced, organic and pure ingeediants that are then 100% hand made.</p>
              </div>
              <div>
                <p class="hfont h6">Features</p>
                <ul>
                  <li>Responsive</li>
                  <li>WooCommerce</li>
                  <li>Review System</li>
                  <li>Customisable Products</li>
                  <li>Login</li>
                </ul>
              </div>
              <div>
                <p class="hfont h6">Extras</p>
                <ul>
                  <li>Timeframe:<span>3 Months</span></li>
                  <li>Framework:<span>None</span></li>
                  <li>CMS:<span>WordPress</span></li>
                  <li>On-Going Updates:<span>Yes</span></li>
                </ul>
              </div>
              <a href="https://www.shea-me.com" target="_blank">www.shea-me.com</a>
            </div>
          </div>
          <div class="dp-cell">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/pout_background.png" /> 
            <div class="dp-cell-content">
              <p class="hfont h5">Pout &amp; Sparkle</p>
              <div>
                <p class="hfont h6">Description</p>
                <p>Pout &amp; Sparkle is an insured technician studio that provides hair &amp; beauty services alongside plasma pen-fibroblasting. Fibroblasting is a procedure that is designed to tighten and life the skin without surgery.</p>
              </div>
              <div>
                <p class="hfont h6">Features</p>
                <ul>
                  <li>Responsive</li>
                  <li>Sparkle Hover</li>
                  <li>Tooltips</li>
                </ul>
              </div>
              <div>
                <p class="hfont h6">Extras</p>
                <ul>
                  <li>Timeframe:<span>3 Weeks</span></li>
                  <li>Framework:<span>Foundation</span></li>
                  <li>CMS:<span>WordPress</span></li>
                  <li>On-Going Updates:<span>No</span></li>
                </ul>
              </div>
              <a href="https://www.poutandsparkle.co.uk"target="_blank">www.poutandsparkle.co.uk</a>
            </div>
          </div>
          <div class="dp-cell">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/sherwood_background.png" /> 
            <div class="dp-cell-content">
              <p class="hfont h5">Sherwood and Hope</p>
              <div>
                <p class="hfont h6">Description</p>
                <p>sherwood and Hope are independant funeral directors in Kent, that handle everything from arranging a funeral, to on the day transportation of a loved one.</p>
              </div>
              <div>
                <p class="hfont h6">Features</p>
                <ul>
                  <li>Responsive</li>
                  <li>Image Slider</li>
                  <li>Image Enlarger</li>
                  <li>Google Maps</li>
                </ul>
              </div>
              <div>
                <p class="hfont h6">Extras</p>
                <ul>
                  <li>Timeframe:<span>2 Weeks</span></li>
                  <li>Framework:<span>Foundation</span></li>
                  <li>CMS:<span>WordPress</span></li>
                  <li>On-Going Updates:<span>No</span></li>
                </ul>
              </div>
              <a href="https://www.sherwoodandhope.co.uk" target="_blank">www.sherwoodandhope.co.uk</a>
            </div>
          </div>
          <div class="dp-cell">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/medway_background.png" /> 
            <div class="dp-cell-content">
              <p class="hfont h5">Medway Vegan Festivals</p>
              <div>
                <p class="hfont h6">Description</p>
                <p>A website that will promote and host vegan festivals within Medway. Businesses will be able to order stall slots through the website and visitors will be kept up to date with future festivals appearing near them.</p>
              </div>
              <div>
                <p class="hfont h6">Features</p>
                <ul>
                  <li>Facebook Feed</li>
                  <li>particles.js Library</li>
                  <li>WooCommerce</li>
                  <li>Custom Emails</li>
                </ul>
              </div>
              <div>
                <p class="hfont h6">Extras</p>
                <ul>
                  <li>Timeframe:<span>2 Months</span></li>
                  <li>Framework:<span>Foundation</span></li>
                  <li>CMS:<span>WordPress</span></li>
                  <li>On-Going Updates:<span>No</span></li>
                </ul>
              </div>
              <a class="prev-website" href="https://projects.cloudyne.co.uk/medwayveganfestival" target="_blank">Under Development</a>
            </div>
          </div>
        </div>
        <div class="beams">
          <hr>
          <hr>
        </div>
        <p class="pfont h5">Designer Projects</p>
        <div id="designer-projects">
          <div>
            <img src="<?php bloginfo('template_url'); ?>/assets/images/ecommerce_background.png" />
            <div class="desp-content">
              <p class="hfont h5">E-Commerce Template</p>
              <p>This template was created with the focus on selling men's and women's clothing. It also features contests that allows designers to submit their designs for shirts etc every month.</p>
              <p class="hfont h6">Template Targets</p>
              <ul>
                <li>Gradient colours</li>
                <li>Easy on the eye colours</li>
                <li>Card Focal Points</li>
                <li>Powerful Imagery</li>
                <li>Compact but Fluid</li>
              </ul>
            </div>
            <a href="https://preview.uxpin.com/ac2e5b1750025319fcbb99235e6dc0c423b8c73f#/pages/110105689/simulate/sitemap?mode=i" target="_blank">Interactive Link</a>
          </div>
          <div class="desp-content">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/streamer_background.png" />
            <div class="desp-content">
              <p class="hfont h5">Media Streaming Template</p>
              <p>This template was created with the focus on media streaming, mostly for Twitch.tv. It features Twitches API to allow streaming on the website, merch store and a sponsor section</p>
              <p class="hfont h6">Template Targets</p>
              <ul>
                <li>Easy Navigation</li>
                <li>Large Images/Videos</li>
                <li>Minimal use of bright colours</li>
                <li>Minimal use of text content</li>
              </ul>
            </div>
            <a href="https://preview.uxpin.com/85b1db3d2d958d033a62b3ef4e957eb3755b32fc#/pages//simulate/sitemap?mode=i" target="_blank">Interactive Link</a>
          </div>
        </div>
      </div>
      <div class="off-canvas-content" data-off-canvas-content>

        <div class="reveal small datapad" id="greeting" data-animation-in="fade-in slow" data-animation-out="fade-out fast" data-reveal>
          <div class="datapad-tube">
            <div class="datapad-tube-circle">
              <p class="pfont h1">A</p>
            </div>
          </div>
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
              <div id="about-nav" class="cell auto large-2">
                <div id="about"></div>
              </div>
              <div id="cloudyne-nav" class="cell auto large-2">
                <div id="cloudyne"></div>  
              </div>
              <div id="home-nav" class="cell auto large-4">
                <div id="home"></div>  
              </div>
              <div id="experience-nav" class="cell auto large-2">
                <div id="experience"></div> 
              </div>
              <div id="contact-nav" class="cell auto large-2">
                <div id="contact"></div>
              </div>
            </div>
            <h1 id="planet-heading">Home</h1>
            <h2 id="planet-desc">Dock at Earth and fend off the alien invasion</h2>
            <div class="hyperdrive-menu" data-magellan data-offset="-25" data-animation-duration="2000" data-animation-easing="swing">
              <a class="c2a-button travel-button" href="#home" data-open="hyperspace">
                <span>&#x2B39;</span>
                <p>Travel</p>
                <span>&#x2B39;</span>
              </a>
            </div>
          </div>
          <div class="hyperdrive-menu" data-magellan data-offset="-25" data-animation-duration="2000" data-animation-easing="swing">
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
            <ul class="menu hyperdrive-menu" data-magellan data-offset="-25" data-animation-duration="2000" data-animation-easing="swing">
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
    