<?php
/**
 * Template Name: Testimonials Archive 
 * @package Postali Child
 * @author Postali LLC
**/

$args = array (
	'post_type' => 'testimonials',
	'post_per_page' => '9',
	'post_status' => 'publish',
	'order' => 'DESC',
    'paged' => $paged
);
$the_query = new WP_Query($args);

get_header();?>

<div class="body-container">

    <section class="banner">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center column">
                    <h1><?php the_title(); ?></h1>
                    <p class="headline"><?php the_field('banner_headline'); ?></p>
                    <a href="/contact/" class="btn gold">Schedule a Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="columns">
                <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="testimonial-box">
                        <div class="stars"></div>
                        <div class="quote"><?php the_content(); ?></div>
                        <p class="author"><?php the_title(); ?></p>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <?php the_posts_pagination(); ?>
        </div>
    </section>

</div>

<?php get_footer();?>