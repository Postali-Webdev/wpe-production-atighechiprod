<?php
/**
 * Template Name: Practice Area Child 
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="banner">
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <div class="spacer-60"></div>
        <div class="container">
            <div class="columns">
                <div class="column-66 column">
                    <h1><?php the_title(); ?></h1>
                    <?php the_field('banner_content'); ?>
                    <a href="https://atighechi.cliogrow.com/book" class="btn gold" target="blank">Schedule a Consultation</a>
                </div>
                <div class="column-33 on-page">
                    <p class="section">On This PAge:</p>
                    <ul>
                        <?php if(get_field('section_1_btn_text')) { ?>
                        <li><a href="#section_1"><?php the_field('section_1_btn_text'); ?></a></li>
                        <?php } ?>
                        <?php if(get_field('section_2_btn_text')) { ?>
                        <li><a href="#section_2"><?php the_field('section_2_btn_text'); ?></a></li>
                        <?php } ?>
                        <?php if(get_field('section_3_btn_text')) { ?>
                        <li><a href="#section_3"><?php the_field('section_3_btn_text'); ?></a></li>
                        <?php } ?>
                        <?php if(get_field('section_4_btn_text')) { ?>
                        <li><a href="#section_4"><?php the_field('section_4_btn_text'); ?></a></li>
                        <?php } ?>
                        <?php if(get_field('faq_section_btn_text')) { ?>
                        <li><a href="#section_5"><?php the_field('faq_section_btn_text'); ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section_1 white" id="section_1">
        <div class="container wide padded">
            <div class="columns">
                <div class="column-50">
                    <h2><?php the_field('section_1_headline'); ?></h2>
                </div>
                <div class="column-50 column">
                    <?php the_field('section_1_content'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section_2" id="section_2">
        <div class="container">
            <div class="columns">
                <div class="column-66 center column">
                    <h2><?php the_field('section_2_headline'); ?></h2>
                    <?php the_field('section_2_content'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section_3 white" id="section_3">
        <div class="container wide padded">
            <div class="columns">
                <div class="column-66">
                    <h2><?php the_field('section_3_headline'); ?></h2>
                </div>
                <div class="column-50">
                    <?php the_field('section_3_content'); ?>
                    <a href="https://atighechi.cliogrow.com/book" class="btn gold" target="blank">Schedule a Consultation</a>
                </div>
                <div class="column-50">
                    <div class="img-box">
                    <?php 
                    $image = get_field('section_3_image');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_4" id="section_4">
        <div class="container">
            <div class="columns">
                <div class="column-66 center column">
                    <h2><?php the_field('section_4_headline'); ?></h2>
                    <?php the_field('section_4_content'); ?>
                    <div class="btn-block">
                        <a href="https://atighechi.cliogrow.com/book" class="btn gold" target="blank">Schedule a Consultation</a> <a href="tel:<?php the_field('global_phone','options'); ?>" class="btn blue"><?php the_field('global_phone','options'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs" id="section_5">
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
    <?php get_template_part('block','testimonials'); ?>

</div>

<?php get_footer();?>