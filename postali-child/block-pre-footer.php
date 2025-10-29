    <section class="pre-footer blue">
        <div class="container">
            <div class="columns">
                <div class="column-66 block">
                    <p class="section">Contact Us</p>
                    <h2><?php the_field('footer_cta_headline'); ?></h2>
                    <?php if(!empty('footer_cta_copy')) { ?>
                    <?php the_field('footer_cta_copy'); ?>
                    <?php } ?>
                    <div class="spacer-30"></div>
                    <a href="https://atighechi.cliogrow.com/book" class="btn gold" target="blank">SCHEDULE A CONSULTATION TODAY</a>
                </div>
                <?php $image = get_field('footer_cta_image');?>
                <div class="column-33" style="background-image:url('<?php echo $image; ?>');"></div>
            </div>
        </div>
    </section>