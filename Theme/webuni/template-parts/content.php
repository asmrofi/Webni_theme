<?php
/**
 *Template Name: Front Page
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package webuni
 */
get_header();
?>

<?php

    get_template_part('template-parts/fornt-page/hero-content');

    get_template_part('template-parts/fornt-page/coures-category');

    get_template_part('template-parts/fornt-page/search-category');

    get_template_part('template-parts/fornt-page/featured-courses');

    get_template_part('template-parts/fornt-page/community');






get_footer();
