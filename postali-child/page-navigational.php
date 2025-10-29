<?php
/**
 * Template Name: Navigational 
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

    <div class="spacer-60"></div>

    <section class="blue">
        <div class="container">
            <div class="columns">
            <?php if (have_rows('pages')) : ?>
            <?php while (have_rows('pages')) : the_row(); ?>
                <div class="column-50 navigational">
                    <span class="parent"><a href="<?php the_sub_field('parent_link'); ?>"><h3><?php the_sub_field('page_title'); ?></h3> <span class="icon-arrow-right"></span></a></span>
                    <?php if (have_rows('child_pages')) : ?>
                    <ul>
                    <?php while (have_rows('child_pages')) : the_row(); ?>
                        <li><a href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('page_title'); ?></a></li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </section>

</div>

<?php get_footer();?>