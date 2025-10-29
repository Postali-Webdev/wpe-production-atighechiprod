    <section class="posts">
        <div class="container">
            <div class="columns">
            <?php while( have_posts() ) : the_post(); ?>
                <a class="column-33 post" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <h2><?php the_title(); ?></h2>

                    <?php $content = get_the_content(); ?>
                    <p><?php echo wp_trim_words( $content , '25' ); ?></p>

                    <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                    <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                    <div class="article-image" style="background:url('<?php echo $featImg[0]; ?>') no-repeat; background-size:cover;">
                    <?php } else { ?>
                    <div class="article-image" style="background:url('<?php the_field('default_blog_header_image','options'); ?>') no-repeat; background-size:cover;" >
                    <?php } ?>
                    </div><!-- Close blog featured image -->
                </a>
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