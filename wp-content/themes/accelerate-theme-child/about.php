<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div id="primary" class="home-page hero-content">
    <div class="main-content" role="main">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop. 
        ?>
    </div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>