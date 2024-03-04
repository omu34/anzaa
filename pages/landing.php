<?php

/**
 *
 * Template Name: landing
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package anzaa
 */
get_header();


get_template_part('components/landing/headers');
get_template_part('components/landing/banner');
get_template_part('components/landing/our-properties');
get_template_part('components/landing/real-estate');
get_template_part('components/landing/our-mission');
get_template_part('components/landing/with-you');
get_template_part('components/landing/learn-real-estate');
get_template_part('components/landing/move-pay');
get_template_part('components/landing/footers');
?>
<?php get_footer(); ?>