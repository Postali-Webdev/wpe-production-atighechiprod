<?php
/**
 * Template Name: Practice Area Parent 
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="banner">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <h1><?php the_title(); ?></h1>
                    <p class="headline"><?php the_field('banner_headline'); ?></p>
                    <?php if( have_rows('banner_bullet_points') ): ?>
                    <ul class="banner-bullets">
                    <?php while( have_rows('banner_bullet_points') ): the_row(); ?>  
                        <li><?php the_sub_field('bullet'); ?></li>
                    <?php endwhile; ?>
                    </ul>
                    <?php endif; ?> 
                    <a href="https://atighechi.cliogrow.com/book" class="btn gold" target="blank">Schedule a Consultation</a>
                </div>
                <div class="column-50">
                    <?php $background_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                    <div class="banner-img">
                        <img src="<?php echo esc_attr( $background_img[0] ); ?>" alt="<?php echo esc_attr( $background_img[1] ); ?>">
                    </div>
                    <div class="banner-testimonial">
                    <?php
                    $featured_post = get_field('banner_testimonial');
                    if( $featured_post ): ?>
                        <?php 
                            $author = get_field('testimonial_author', $featured_post->ID);
                            $image = get_field('attribution_source', $featured_post->ID);
                        ?>
                        <p><?php echo esc_html( $featured_post->post_content ); ?></p>
                        <div class="author-attribution">
                            <p><?php echo esc_html( $author ); ?></p>
                            <?php if($image = 'google') { ?>
                                <img src="/wp-content/uploads/2025/03/google-reviews.svg" alt="Google reviews logo">
                            <?php } elseif ($image = 'avvo') { ?>
                                <img src="/wp-content/uploads/2025/03/avvo-reviews.svg" alt="AVVO reviews logo">
                            <?php } ?>
                        </div>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services blue">
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <h2><?php the_field('services_headline'); ?></h2>
                    <div class="spacer-15"></div>
                    <?php if( have_rows('services') ): ?>
                    <?php while( have_rows('services') ): the_row(); ?>  
                        <?php if(get_sub_field('services_page_link')) { ?>
                        <a class="column-50 service" href="<?php the_sub_field('services_page_link'); ?>">
                            <h3><?php the_sub_field('service_title'); ?></h3>
                            <p><?php the_sub_field('service_description'); ?></p>
                        </a>
                        <?php } else { ?>
                        <div class="column-50 service">
                            <h3><?php the_sub_field('service_title'); ?></h3>
                            <p><?php the_sub_field('service_description'); ?></p>
                        </div>
                        <?php } ?>
                    <?php endwhile; ?>
                    <?php endif; ?> 
                    <div class="spacer-60"></div>
                    <p class="lg"><?php the_field('services_cta'); ?></p>
                    <div class="spacer-break"></div>
                    <a href="https://atighechi.cliogrow.com/book" class="btn gold" target="blank">Schedule a consultation</a>
                </div>
            </div>
        </div>
    </section>

    <section class="process">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <p class="section"><?php the_field('process_title'); ?></p>
                    <p class="headline"><?php the_field('process_headline'); ?></p>
                </div>
                <div class="spacer-30"></div>
                <div class="column-66">
                    <div class="img-box">
                    <?php 
                    $image = get_field('section_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                </div>
                <div class="column-33">
                    <p><?php the_field('process_intro_copy'); ?></p>
                    <?php the_field('process_body_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="awards blue">
        <div class="container wide">
            <div class="column-full">
                <?php get_template_part('block','slider'); ?>
            </div>
        </div>
    </section>

    <div class="spacer-30"></div>

    <section class="why white">
        <div class="container wide padded">
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('why_headline'); ?></h2>
                </div>
                <div class="column-50">
                    <?php the_field('why_section_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs">
        <div class="container wide padded">
            <div class="columns">
                <div class="column-full">
                    <h2><?php the_field('faqs_headline'); ?></h2>
                </div>
                <div class="spacer-30"></div>
                <?php if( have_rows('faqs') ): ?>
                <?php while( have_rows('faqs') ): the_row(); ?>  
                    <div class="column-33 faqs">
                        <h3><?php the_sub_field('question'); ?></h3>
                        <?php the_sub_field('answer'); ?>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?> 
            </div>
        </div>
    </section>

    <?php get_template_part('block','pre-footer'); ?>

</div>

<?php get_footer();?>