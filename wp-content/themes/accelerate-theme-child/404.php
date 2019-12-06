<?php

/**
 * The template for displaying all 404
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="site-content sidebar error-main">
    <div class="main-content" role="main" id="error-content">
        <?php while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; // end of the loop. 
        ?>
        <div style="width:100%;height:0;padding-bottom:50%;position:relative;"><iframe src="https://giphy.com/embed/sw7KSBKL3yme4" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
        <div class="error-message-container">
            <h2>Whoops you landed in the wrong school...</h2>
            <h3>THAT IS SO FETCH!</h3>
            <p>But seriously... Feel free to leave and head towards our <a href="<?php the_permalink(); ?>">blog</a>.</p>
            <p>Remember...<br>On Wednesdays we wear <span>pink!</span></p>
        </div>
    </div><!-- .main-content -->
</div><!-- #primary -->

<?php get_footer(); ?>