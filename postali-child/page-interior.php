<?php
/**
 * Template Name: Interior
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="banner">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <div class="columns">
                <div class="column-66 centered center">
                    <h1><?php the_title(); ?></h1>
                    <div class="spacer-30"></div>
                    <p class="headline"><?php the_field('banner_headline'); ?></p>
                    <a href="https://atighechi.cliogrow.com/book" class="btn gold" target="blank">Schedule a Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="columns">
                <div class="column-66 center column">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php get_template_part('block','pre-footer'); ?>

</div>

<?php get_footer();?>