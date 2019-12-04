<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div id="primary" class="home-page hero-content">
    <div class="hero-about-container">
        <h2>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
    </div>
    <div class="main-content" role="main">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop. 
        ?>
    </div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>