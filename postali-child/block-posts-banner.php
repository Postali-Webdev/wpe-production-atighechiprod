    <section class="banner">
        <div class="container">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
            <div class="columns">
                <div class="column-66 centered center">
                    <?php if(is_tag()) { ?>
                    <h1>Legal Blog > <?php single_tag_title(); ?></h1>
                    <?php } elseif(is_category()) { ?>
                    <h1>Legal Blog > <?php single_cat_title(); ?></h1>
                    <?php } else { ?>
                    <h1>Legal Blog</h1>
                    <?php } ?>
                    <div class="spacer-30"></div>
                    <p class="headline"><?php the_field('blog_landing_banner_headline','options'); ?></p>
                    <a href="https://atighechi.cliogrow.com/book" class="btn gold" target="blank">Schedule a Consultation</a>
                </div>
            </div>
        </div>
    </section>