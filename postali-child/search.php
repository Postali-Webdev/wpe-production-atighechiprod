<?php
/**
 * Search results template.
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
                <div class="column-66 centered center">
                    <h1>Results for</h1>
                    <div class="spacer-30"></div>
                    <p class="headline">"<?php echo get_search_query(); ?>"</p>
                </div>
            </div>
        </div>
    </section>

    <div class="spacer-60"></div>


    <?php if ( have_posts() ) : ?>
    <section class="blue">
        <div class="container">
            <div class="columns">        
                <div class="search-box">
                    <p>Search again:</p>
                    <?php get_search_form(); ?>
                </div>
            </div>
            <div class="spacer-60"></div>
            <div class="columns">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'index' ); ?>
            <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php else : ?>
    <section class="blue">
        <div class="container">
            <div class="columns">
                <div class="search-box">
                    <p><?php printf( esc_html__( 'Our apologies but there\'s nothing that matches your search for "%s"', 'postali' ), get_search_query() ); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>  

    <div class="spacer-30"></div>

    <section class="pre-footer blue">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <p class="section">Contact Us</p>
                    <h2><?php the_field('footer_cta_headline','options'); ?></h2>
                    <?php the_field('footer_cta_copy','options'); ?>
                    <div class="spacer-30"></div>
                    <a href="/contact/" class="btn gold">SCHEDULE A CONSULTATION TODAY</a>
                </div>
                <?php $image = get_field('footer_cta_image','options');?>
                <div class="column-33" style="background-image:url('<?php echo $image; ?>');"></div>
            </div>
        </div>
    </section>

</div>

<?php get_footer();
