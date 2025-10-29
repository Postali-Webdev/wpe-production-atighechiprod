<div id="award-slider">
<?php if (have_rows('awards', 'options')) : ?>
<?php while (have_rows('awards', 'options')) : the_row(); ?>
    <div class="slides">
        <div>
        <?php 
        $image = get_sub_field('award_badge');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        </div>
    </div>
<?php endwhile; ?>
<?php endif; ?>
</div>