<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<div id="primary" class="home-page hero-content">
    <div class="hero-about-container">
        <h2>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h2>
    </div>
</div><!-- #primary -->

<section class="about-container">
    <?php while (have_posts()) : the_post();
        $title_1 = get_field('title_1');
        $title_2 = get_field('title_2');
        $title_3 = get_field('title_3');
        $title_4 = get_field('title_4');
        $description_1 = get_field('description_1');
        $description_2 = get_field('description_2');
        $description_3 = get_field('description_3');
        $description_4 = get_field('description_4');
        $icon_1 = get_field('icon_1');
        $icon_2 = get_field('icon_2');
        $icon_3 = get_field('icon_3');
        $icon_4 = get_field('icon_4');
        $size = "medium"; ?>
        <div class="about-headline-container">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
        <div class="service-container icon-left">
            <div class="service-description">
                <h3><?php echo $title_1 ?></h3>
                <p><?php echo $description_1 ?></p>
            </div>
            <figure>
                <?php if ($icon_1) {
                        echo wp_get_attachment_image($icon_1, $size);
                    } ?>
            </figure>
        </div>
        <div class="service-container icon-right">
            <div class="service-description">
                <h3><?php echo $title_2 ?></h3>
                <p><?php echo $description_2 ?></p>
            </div>
            <figure>
                <?php if ($icon_2) {
                        echo wp_get_attachment_image($icon_2, $size);
                    } ?>
            </figure>
        </div>
        <div class="service-container icon-left">
            <div class="service-description">
                <h3><?php echo $title_3 ?></h3>
                <p><?php echo $description_3 ?></p>
            </div>
            <figure>
                <?php if ($icon_3) {
                        echo wp_get_attachment_image($icon_3, $size);
                    } ?>
            </figure>
        </div>
        <div class="service-container icon-right">
            <div class="service-description">
                <h3><?php echo $title_4 ?></h3>
                <p><?php echo $description_4 ?></p>
            </div>
            <figure>
                <?php if ($icon_4) {
                        echo wp_get_attachment_image($icon_4, $size);
                    } ?>
            </figure>
        </div>
        <div class="call-to-action">
            <h2>Interested in working for us?</h2>
            <a id="contact-button" class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
        </div>
    <?php endwhile; // end of the loop. 
    ?>
</section>

<?php get_footer(); ?>