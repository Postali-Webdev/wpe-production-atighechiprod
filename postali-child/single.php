<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */

$blogDefault = get_field('default_blog_header_image', 'options');

get_header();?>

<div class="body-container">

    <section class="banner">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <div class="container">
            <div class="columns">
                <div class="column-50 column title">
                    <h1><?php the_title(); ?></h1>
                    <p><span class="icon-diamond-icon"></span> <strong>Published: <?php echo get_the_date( 'F j, Y' ); ?></strong></p>
                    <p><span class="icon-diamond-icon"></span> <strong>Written By: <a href="/about/" title="About Maryam Atigechi">Attorney Maryam Atighechi</a></strong></p>
                </div>
                <div class="column-50">
                    <div class="article-single-featured-image">
                        <?php if ( has_post_thumbnail() ) { ?> <!-- If featured image set, use that, if not use options page default -->
                        <?php $featImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                            <img src="<?php echo $featImg[0]; ?>" class="article-featured-image"  />
                        <?php } else { ?>
                            <img src="<?php echo $blogDefault; ?>" id="article-featured-image-default" class="article-featured-image" >
                        <?php } ?>
                    </div>
                    <div class="banner-cta">
                        <?php the_field('blog_banner_cta','options'); ?>
                        <a href="tel:<?php the_field('global_phone','options'); ?>" class="btn gold"><?php the_field('global_phone','options'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="single-post" id="post-container">
        <div class="container">
            <div class="columns">
                <div class="column-66 center column">
                    <article>
                        <?php the_content(); ?>
                    </article>	
                    <p class="sm-pd"><strong>Categories:</strong></p>
                    <div class="categories">
                        <span class="post-meta-categories"><?php the_category(' '); ?></span>
                    </div>
                    
                    <?php
                    if ( has_tag() ) { ?>
                    <div class="spacer-60"></div>
                    <p class="sm-pd"><strong>Tags:</strong></p>
                    <div class="tags">
                        <?php echo get_the_tag_list(); ?>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('block','contact'); ?>

</div>

<?php get_footer(); ?>