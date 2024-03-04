<?php

/**
 *
 * Template Name: single-property
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
get_template_part('components/single-property/banner');
get_template_part('components/single-property/single-property');
get_template_part('components/single-property/related-properties');
get_template_part('components/landing/move-pay');
get_template_part('components/landing/footers');


?>
<?php get_footer(); ?>