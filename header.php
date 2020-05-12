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
  <body <?php body_class(); ?> id="home"> 
    <?php /* echo get_template_part('inc/recruiter'); */ ?>
    <header id="main-header">

      <img id="header-background" src="" alt="" srcset="">
      <div id="header-overlay">
        <div class="header-overlay-lines"></div><!-- line -->
        <div class="header-overlay-lines"></div><!-- line -->
        <div class="header-overlay-lines"></div><!-- line -->
      </div>

      <!-- Top Half -->
      <div id="page-topbar">
        <div id="page-topleft" class="page-left">Front-End</div>
        <div class="page-line"></div> <!-- line -->
        <div id="hamburger-menu">
          <button id="hamburger" type="button">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
          </button>
        <div class="page-line"></div> <!-- line -->
        <div id="page-topright" class="page-right">
          <a id="linkedin" href="" target="_blank" rel="noopener noreferrer"><i class="material-icons-outlined"></i></a>
          <a id="github" href="" target="_blank" rel="noopener noreferrer"><i class="material-icons-outlined"></i></a>
        </div>
        <nav id="primary-nav2">
          <ul>
            <li><a href="http://" target="_blank" rel="noopener noreferrer">Home</a></li>
            <li><a href="http://" target="_blank" rel="noopener noreferrer">About</a></li>
            <li><a href="http://" target="_blank" rel="noopener noreferrer">Experience</a></li>
            <li><a href="http://" target="_blank" rel="noopener noreferrer">Cloudyne</a></li>
            <li><a href="http://" target="_blank" rel="noopener noreferrer">Contact</a></li>
          </ul>
        </nav>
      </div>

      <h1 class="h1 hfont">Anthony Jasper</h1>
      <h2 class="h2 hfont">Front-End Develoepr & Designer</h2>

      <nav id="primary-nav">
        <ul>
          <li><a href="http://" target="_blank" rel="noopener noreferrer">Home</a></li>
          <li><a href="http://" target="_blank" rel="noopener noreferrer">About</a></li>
          <li><a href="http://" target="_blank" rel="noopener noreferrer">Experience</a></li>
          <li><a href="http://" target="_blank" rel="noopener noreferrer">Cloudyne</a></li>
          <li><a href="http://" target="_blank" rel="noopener noreferrer">Contact</a></li>
        </ul>
      </nav>

      <?php echo get_template_part('inc/boxstyle-left'); ?>
      <?php echo get_template_part('inc/boxstyle-right'); ?>

      <!-- Bottom Half -->
      <div id="page-bottombar">
        <div id="page-bottomleft" class="page-left">Developer</div>
        <div class="page-line"></div> <!-- line -->
        <a id="page-next" href="" target="_blank" rel="noopener noreferrer"><i class="material-icons-outlined"></i></a>
        <div class="page-line"></div> <!-- line -->
        <div id="page-bottomright" class="page-right">Designer</div>
      </div>
    </header>
    