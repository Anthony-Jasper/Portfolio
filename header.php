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
    <header class="main-header">
      <div id="hamburger-menu">
        <button id="hamburger" type="button">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </button>
      </div>
    </header>
    