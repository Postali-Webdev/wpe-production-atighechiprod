<?php
/**
 * Template Name: Contact 
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="banner">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
        <div class="container">
            <div class="columns">
                <div class="column-50 main">
                    <?php the_field('banner_content'); ?>
                </div>
                <div class="column-50 contact">
                    <div class="map-block">
                    <iframe src="<?php the_field('global_map','options'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="contact-content">
                        <?php the_field('contact_content'); ?>
                    </div>
                </div>
                <a class="contact-form-nav" href="#contact-block">
                    <span class="icon-arrow-left"></span> Contact form
                </a>
            </div>
        </div>
    </section>

    <?php get_template_part('block','contact'); ?>
    <?php get_template_part('block','testimonials'); ?>

</div>

<?php get_footer();?>