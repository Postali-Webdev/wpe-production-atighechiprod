<?php
/**
 * Template Name: Areas Served 
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="banner">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <h1><?php the_title(); ?></h1>
                    <div class="spacer-30"></div>
                    <p class="headline"><?php the_field('banner_headline'); ?></p>
                    <a href="/contact/" class="btn gold">Schedule a Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section class="locations">
        <div class="container">
            <div class="columns">
            <?php if (have_rows('locations')) : ?>
            <?php while (have_rows('locations')) : the_row(); ?>
                <div class="column-33 areas">
                    <?php if(get_sub_field('location_link')) { ?>
                    <span class="location-link"><a href="<?php the_sub_field('location_link'); ?>"><h3><?php the_sub_field('location'); ?></h3> <span class="icon-arrow-right"></span></a></span>
                    <?php } else { ?>
                    <h3><?php the_sub_field('location'); ?></h3>
                    <?php } ?>
                    <p><?php the_sub_field('description'); ?></p>
                    <?php 
                    $image = get_sub_field('image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </section>

</div>

<?php get_footer();?>