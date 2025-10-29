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