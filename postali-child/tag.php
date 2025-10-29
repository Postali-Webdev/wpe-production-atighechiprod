<?php
/**
 * Template Name: Blog
 * 
 * @package Postali Child
 * @author Postali LLC
 */

get_header(); ?>

<div class="body-container">

    <?php get_template_part('block','posts-banner'); ?> 
    <?php get_template_part('block','posts'); ?>

</div>

<?php get_footer(); ?>
