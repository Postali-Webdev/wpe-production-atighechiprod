<?php
/**
 * Template Name: About 
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="banner">
        <div class="container">
            <div class="columns">
                <div class="column-66 column">
                    <h1><?php the_title(); ?></h1>
                    <?php the_field('banner_content'); ?>
                    <div class="spacer-30"></div>
                    <a href="https://atighechi.cliogrow.com/book" class="btn gold" target="blank">Schedule a Consultation</a>
                </div>
                <div class="column-33" style="background-image:url('<?php the_field('banner_image'); ?>');">
                    <div id="award-scroller-mini">
                    <?php if (have_rows('awards', 'options')) : ?>
                    <?php while (have_rows('awards', 'options')) : the_row(); ?>
                        <div class="slides">
                            <div>
                            <?php 
                            $image = get_sub_field('award_badge');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_1 white">
        <div class="container wide padded">
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('section_1_headline'); ?></h2>
                </div>
                <div class="column-50">
                    <?php the_field('section_1_content'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section_2">
        <div class="container">
            <div class="columns">
                <div class="column-66 center column">
                    <h2><?php the_field('section_2_headline'); ?></h2>
                    <?php the_field('section_2_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="blue" id="hp-serve">
        <div class="container wide">
            <div class="columns">
                <div class="column-66" style="background:url(<?php the_field('who_photo'); ?>);"></div>
                <div class="column-33 column">
                    <?php the_field('who_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="columns testimonial-boxes">
            <?php if( have_rows('testimonials') ): ?>
            <?php while( have_rows('testimonials') ): the_row(); ?>
                <?php $post_object = get_sub_field('testimonial'); ?>
                <?php if( $post_object ): ?>
                    <?php // override $post
                    $post = $post_object;
                    setup_postdata( $post );
                    ?>
                    <div class=" testimonial-box"><?php the_content(); ?></a></li>
                        <?php 
                            $image = get_field('attribution_source');
                        ?>
                        <div class="author-attribution">
                            <p><?php the_field('testimonial_author'); ?></p>
                            <?php if($image == 'google') { ?>
                                <img src="/wp-content/uploads/2025/03/google-reviews.svg" alt="Google reviews logo">
                            <?php } elseif ($image == 'avvo') { ?>
                                <img src="/wp-content/uploads/2025/03/avvo-reviews.svg" alt="AVVO reviews logo">
                            <?php } ?>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </section>

</div>

<?php get_footer();?>