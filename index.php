<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cosmic
 */

get_header();?>
<main id="main">
  <?php echo get_template_part('inc/sections/about-me'); ?>
  <?php echo get_template_part('inc/sections/cloudyne'); ?>
  <?php echo get_template_part('inc/sections/experience'); ?>
  <?php echo get_template_part('inc/sections/contact'); ?>
  <?php echo get_template_part('inc/sections/game'); ?>
  <?php echo get_template_part('inc/sections/hyperspace'); ?>
</main>

<?php get_footer();
