<?php
/**
 * Template Name: error404
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
                    <h1>Error 404: We’re Sorry, This Page Doesn’t Exist.</h1>
                    <p>The page you’re looking for has moved or the URL is incorrect.</p>
                    <a href="/" class="btn gold">TAKE ME BACK TO THE SITE</a>
                </div>
                <div class="column-33 on-page">
                    <p class="section">HELPFUL LINKS</p>
                    <ul>
                        <li><a href="/about/">About The Firm</a></li>
                        <li><a href="/divorce-lawyer/">Divorce In California</a></li>
                        <li><a href="/child-custody-lawyer/">Child Custody Lawyer</a></li>
                        <li><a href="/blog/">Legal Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


</div>

<?php get_footer();?>