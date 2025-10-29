<?php
/**
 * Template Name: Sitemap
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
                    <h1>Atighetchi Law Group</h1>
                    <div class="spacer-30"></div>
                    <p class="headline">Sitemap</p>
                </div>
            </div>
        </div>
    </section>

    <div class="spacer-60"></div>

    <section>
        <div class="container">
            <div class="columns">
                <div class="column-full">
                    <?php if (have_posts()) : 
                        while (have_posts()) : the_post(); ?>
                        <div class="column-50 block">
                            <h2>Pages</h2> 
                            <ul class="sitemap">
                                <?php wp_list_pages("title_li=" ); ?>
                            </ul> 
                        </div>
                        <div class="column-50 block">
                            <h2>Blogs</h2> 
                            <ul class="sitemap">
                                <?php wp_get_archives('type=postbypost'); ?>
                            </ul>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    <?php if(get_field('include_awards','options')) : ?>
        <?php get_template_part('block','awards'); ?>
    <?php endif; ?>

</div>

<?php get_footer();?>