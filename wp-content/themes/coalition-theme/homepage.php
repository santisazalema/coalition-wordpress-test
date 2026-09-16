<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div class="homepage-wrapper">
        <?php 
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile; 
        ?>
    </div>
</main>

<?php get_footer(); ?>