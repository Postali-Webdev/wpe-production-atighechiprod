<?php
/**
 * Testimonials Archive
 *
 * @package Postali Parent
 * @author Postali LLC
 */

get_header(); ?>

<div class="body-container">

    <section class="banner">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
            <div class="columns">
                <div class="column-66 centered center column">
                    <h1>Testimonials</h1>
                    <p class="headline"><?php the_field('banner_headline','options'); ?></p>
                    <a href="/contact/" class="btn gold">Schedule a Consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section class="featured">
        <div class="container wide">
            <div class="columns">
                <div class="column-50 highlight column">
                    <span class="stars"></span>
                    <p class="xxl"><?php the_field('banner_highlight_left','options'); ?></p>
                </div>
                <div class="column-50 reviews">
                <?php $n=1; ?>

                <?php 
                $featured_query = new WP_Query( array(
                    'posts_per_page'    => 2,
                    'post_type'         => 'testimonials', 
                    'post_status'       => 'publish',
                    'meta_query'        => array (
                        array (
                            'key' => 'make_featured', 
                            'value' => 'yes', 
                            'compare' => 'LIKE',
                        ),  
                    ),
                ) );
                ?>
                <?php while( $featured_query->have_posts() ) : $featured_query->the_post(); ?>
                    
                    <div class="testimonial-box <?php if($n == 2) { ?>blue<?php } ?>">
                        <?php 
                            $author = get_field('testimonial_author');
                            $image = get_field('attribution_source');
                        ?>
                        <p><?php the_content(); ?></p>
                        <div class="author-attribution">
                            <p><?php echo esc_html( $author ); ?></p>
                            <?php if($image = 'google') { ?>
                                <img src="/wp-content/uploads/2025/03/google-reviews.svg" alt="Google reviews logo">
                            <?php } elseif ($image = 'avvo') { ?>
                                <img src="/wp-content/uploads/2025/03/avvo-reviews.svg" alt="AVVO reviews logo">
                            <?php } ?>
                        </div>
                    </div>
                    <?php $n++; ?>
                    <?php $exclude_posts[] = $post->ID; ?>
                <?php endwhile; wp_reset_postdata(); ?>

                </div>
            </div>
        </div>
    </section>

    <section class="posts">
        <div class="container">
            <div class="columns">

            <?php 
            $wp_query = new WP_Query( array(
                'posts_per_page'    => 9,
                'post_type'         => 'testimonials', 
                'post_status'       => 'publish',
                'paged'             => $paged,
                'post__not_in'      => $exclude_posts,
            ) );
            ?>

            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
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
            <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="spacer-90"></div>
            <div class="prev-next">
            <?php 
            if( get_previous_posts_link() ) {
                previous_posts_link( '<span class="prev"><span class="icon-arrow-left"></span> PREV</span>' );
            } else {
                echo '<span class="prev_off"><span class="icon-arrow-left"></span> PREV</span>';
            }
            ?>
            <?php 
            if( get_next_posts_link() ) {
                next_posts_link( '<span class="next">NEXT <span class="icon-arrow-right"></span></span>' );
            } else {
                echo '<span class="next_off">NEXT <span class="icon-arrow-right"></span></span>';
            }
            ?>
            </div>
            
        </div>
    </section>

</div>

<?php get_footer();
