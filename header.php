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
	<!-- particles.js container --> 
		<div id="particles-js"></div> 
		<?php echo get_template_part('inc/pageoverlay'); ?>
		<div id="star-container">
			<div class="shooting-star"></div>
			<div class="shooting-star"></div>
			<div class="shooting-star"></div>
			<div class="shooting-star"></div>
			<div class="shooting-star"></div>
		</div>
		
		<?php echo get_template_part('inc/recruiter'); ?>
    <header id="main-header">

      <h1 class="h1">Anthony Jasper</h1>
      <h2 class="h3">Front-End Developer & Designer</h2>
			<div id="header-boxflex">
				<button id="open-developer" class="open-projects" type="button" data-toggle="offCanvas" aria-expanded="false" aria-controls="offCanvas"><?php echo get_template_part('inc/boxstyle'); ?></button>
				
				<button id="open-designer" class="open-projects" type="button" data-toggle="offCanvasRight" aria-expanded="false" aria-controls="offCanvasRight"><?php echo get_template_part('inc/boxstyle'); ?></button>
			</div>

    </header>
    