<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/

$phone = get_field('global_phone','options');

?>
<footer>

    <section class="footer">
        <div class="container footer-top wide">
            <div class="columns">
                <div class="column-33">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="column-66">
                    <div class="footer-contact">
                        CONTACT US <a href="tel:<?php echo $phone; ?>" class="btn gold"><?php echo $phone; ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container footer-bottom wide">
            <div class="columns">
                <div class="column-33">
                    <p><strong>ATIGHECHI LAW GROUP</strong></p>
                    <p>Ph. <a href="tel:<?php echo $phone; ?>" target="blank"><?php echo $phone; ?></a><br>
                    E. <a href="mailto:<?php the_field('global_email','options'); ?>" target="blank"><?php the_field('global_email','options'); ?></a></p>
                    <p class="sm-pd">Office</p>
                    <p><a href="<?php the_field('global_address_link','options'); ?>" target="blank"><?php the_field('global_address','options'); ?></a></p>
                    <iframe src="<?php the_field('global_map','options'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="column-66">
                    <div class="footer-menus">
                        <div class="menus">
                            <p><strong>PRACTICE AREAS</strong></p>
                            <nav>
                            <?php wp_nav_menu( [ 'container' => false, 'theme_location' => 'footer-pa-nav' ] ); ?>
                            </nav>
                        </div>
                        <div class="menus">
                            <p><strong>QUICK LINKS</strong></p>
                            <nav>
                            <?php wp_nav_menu( [ 'container' => false, 'theme_location' => 'footer-ql-nav' ] ); ?>
                            </nav>
                        </div>
                        <div class="social">
                            <ul class="social-links">
                                <?php if(get_field('social_facebook','options')) { ?>
                                <li><a href="<?php the_field('social_facebook','options'); ?>" target="blank"><span class="icon-facebook-icon"></span></a></li>
                                <?php } ?>
                                <?php if(get_field('social_linkedin','options')) { ?>
                                <li><a href="<?php the_field('social_linkedin','options'); ?>" target="blank"><span class="icon-linkedin-icon"></span></a></li>
                                <?php } ?>
                                <?php if(get_field('social_twitter','options')) { ?>
                                <li><a href="<?php the_field('social_twitter','options'); ?>" target="blank"><span class="icon-twitter-icon"></span></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-utility">
                        <img src="/wp-content/uploads/2025/03/footer-logo-mark.png" alt="Atighechi Law Group logo">
                        <?php if( have_rows('utility_menu','options') ): ?>
                        <ul class="utility-menu">
                        <?php while( have_rows('utility_menu','options') ): the_row(); ?>  
                            <li><a href="<?php the_sub_field('link_location'); ?>"><?php the_sub_field('link_title'); ?></a></li>
                        <?php endwhile; ?>
                        </ul>
                        <?php endif; ?> 
                        <?php the_field('disclaimer_text','options'); ?>
                    </div>
                </div>
            </div>
        </div>

    </section>

</footer>

<script type="text/javascript" src="//cdn.callrail.com/companies/313492113/0c44e4757404f71528c0/12/swap.js"></script>

<script src="/wp-content/themes/postali-child/assets/js/scrollCue.min.js"></script>
<script>scrollCue.init();</script>

<?php wp_footer(); ?>
</body>
</html>


