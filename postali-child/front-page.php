<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<div class="body-container">

    <section class="hp-banner" style="background: url(<?php the_field('banner_background_image'); ?>);">
        <div class="mobile-banner">
            <img src="<?php the_field('banner_background_image'); ?>" alt="">
        </div>
        <div class="container wide">
            <div class="columns">
                <div class="column-full column">
                    <h1><?php the_title(); ?></h1>
                    <p class="banner-headline"><?php the_field('banner_headline'); ?></p>
                    <p class="banner-subheadline"><?php the_field('banner_subheadline'); ?></p>
                    <div class="spacer-30"></div>
                    <a href="https://atighechi.cliogrow.com/book" class="btn gold" target="blank">Schedule a Consultation</a>
                </div>
               <div class="column-full touts-block">
               <?php if (have_rows('banner_touts')) : ?>
                <?php while (have_rows('banner_touts')) : the_row(); ?>
                    <div class="tout" data-cue="fadeIn" data-duration="2000">
                        <?php the_sub_field('tout'); ?>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
               </div>
            </div>
        </div>
    </section>

    <div class="spacer-30"></div>

    <section class="blue" id="hp-about">
        <div class="container wide">
            <div class="columns">
                <div class="column-33" style="background:url(<?php the_field('about_left_photo'); ?>);"></div>
                <div class="column-66">
                    <h2><span><?php the_field('about_pre_headline'); ?></span><?php the_field('about_main_headline'); ?></h2>
                    <?php the_field('about_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <div class="spacer-30"></div>

    <section class="awards blue">
        <div class="container wide">
            <div class="column-full">
                <?php get_template_part('block','slider'); ?>
            </div>
        </div>
    </section>

    <div class="spacer-30"></div>

    <section id="hp-practice-areas">
        <div class="container">
            <div class="columns">
                <div class="column-33" data-cue="fadeIn" data-duration="2000">
                    <p class="section"><?php the_field('pa_pre_headline'); ?></p>
                    <h2 class="lg"><?php the_field('pa_main_headline'); ?></h2>
                    <?php the_field('pa_copy'); ?>
                    <div class="spacer-30"></div>
                    <p><strong><?php the_field('pa_cta_text'); ?></strong></p>
                    <a href="/practice-areas/" class="btn gold">VIEW ALL PRACTICE AREAS</a>
                </div>
                <div class="column-66">
                    <div id="pa-slider">
                    <?php if (have_rows('pa_practice_areas')) : ?>
                    <?php while (have_rows('pa_practice_areas')) : the_row(); ?>
                        <div class="practice-area slides">
                            <div class="left">
                                <h3><?php the_sub_field('practice_area'); ?></h3>
                            </div>
                            <div class="right">
                                <p><?php the_sub_field('intro_copy'); ?></p>
                                <div class="pa-link"><a href="<?php the_sub_field('page_link'); ?>" class="more-link">LEARN MORE</a> <span class="icon-arrow-right"></span></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>

                    <a href="/practice-areas/" class="pa-mobile">View All Practice Areas +</a>

                    <div class="pa-arrows">
                        <a class="prev-arrow"><span class="icon-arrow-left"></span> Prev</a>
                        <a class="next-arrow">Next <span class="icon-arrow-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blue" id="hp-serve">
        <div class="container wide">
            <div class="columns">
                <div class="column-66">
                    <div class="serve-for">
                    <?php if (have_rows('who_photo')) : ?>
                    <?php while (have_rows('who_photo')) : the_row(); ?>
                        
                        <?php 
                        $image = get_sub_field('background');
                        if( !empty( $image ) ): ?>
                        <div>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                        <?php endif; ?>
                        
                    <?php endwhile; ?>
                    <?php endif; ?>
                    
                    </div>

                    <div class="serve-for-mini">
                    <?php if (have_rows('who_photo')) : ?>
                    <?php while (have_rows('who_photo')) : the_row(); ?>
                        
                        <?php 
                        $image = get_sub_field('background');
                        if( !empty( $image ) ): ?>
                        <div>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                        <?php endif; ?>
                        
                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>

                </div>
                <div class="column-33 column">
                    <?php the_field('who_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-approach">
        <div class="container">
            <div class="columns">
                <div class="column-50 column" data-cue="fadeIn" data-duration="2000">
                    <p class="section"><?php the_field('approach_pre_headline'); ?></p>
                    <h2 class="lg"><?php the_field('approach_main_headline'); ?></h2>
                </div>
                <div class="column-50 column">
                    <?php the_field('approach_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="featured">
        <div class="container wide">
            <div class="columns">
                <div class="column-50 highlight column">
                    <span class="icon-diamond-icon"></span>
                    <p class="xxl">Exceptional Legal Acumen</p>
                </div>
                <div class="column-50 callouts">
                    <div class="callout-box">
                        <span class="icon-diamond-icon"></span>
                        <p>Compassionate Guidance</p>
                    </div>
                    <div class="callout-box">
                        <span class="icon-diamond-icon"></span>
                        <p>Responsive Communication</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-faqs">
        <div class="container">
            <div class="columns">
                <div class="column-full column">
                    <p class="section" data-cue="fadeIn" data-duration="2000"><?php the_field('faq_pre_headline'); ?></p>
                    <h2 class="lg" data-cue="fadeIn" data-duration="2000"><?php the_field('faq_main_headline'); ?></h2>
                    <div class="faq-arrows">
                        <a class="prev-arrow-faq"><span class="icon-arrow-left"></span> Prev</a>
                        <a class="next-arrow-faq">Next <span class="icon-arrow-right"></span></a>
                    </div>
                    <div class="spacer-60"></div>
                    <div id="faq-slider">
                    <?php if (have_rows('hp_faqs')) : ?>

                    <?php $c = 1; ?>
                    
                    <?php while (have_rows('hp_faqs')) : the_row(); ?>

                    <?php if ($c == 1) { ?>
                    <div class="three-block">
                    <?php } ?>

                        <div class="faq" id="faq_<?php echo $c; ?>">
                            <h3><?php the_sub_field('question'); ?></h3>
                            <?php the_sub_field('answer'); ?>
                        </div>

                    <?php $c++; ?>
                    
                    <?php if ($c == 4) { ?>
                    </div>
                    <?php } ?>

                    <?php if ($c == 4) { ?>
                    <div class="three-block">
                    <?php } ?>

                    <?php if ($c == 7) { ?>
                    </div>
                    <?php } ?>

                    <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="spacer-30"></div>

    <?php get_template_part('block','pre-footer'); ?>

</div>

<?php get_footer();?>