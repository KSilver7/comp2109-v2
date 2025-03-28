<?php
/**
 * Template Name: A2 Homepage
 * Template Post Type: page, thefuture
 */
get_header();
?>
<main>
<!-- This is the homepage template for Assignment 2-->
    <section class="home-masthead" style="background-image: url('<?php echo wp_kses_post(get_field('masthead_image')); ?>')">
        <div>
            <h1><?php echo wp_kses_post(get_field('masthead_title'));?></h1>
        </div>
    </section>
    <section class="home-row">
        <div class="home-row-one">
            <h2><?php echo wp_kses_post(get_field('row_one_title'));?></h2>
            <p><?php echo wp_kses_post(get_field('row_one_text'));?></p>
        </div>
    </section>
<!-- Not sure that I need a second home row and all this extra stuff-->
    <section class="home-row-two">
        <div>
        <h3><?php echo wp_kses_post(get_field('row_teo_title'));?></h3>
        <p><?php echo wp_kses_post(get_field('row_two_text'));?></p>
        </div>
        <div>
            <img src="<?php echo wp_kses_post(get_field('row_two_image'));?>" alt="<?php echo wp_kses_post(the_field('row_two_image_alt'));?>">
        </div>
    </section>
    <section class="custom-plugin-section row">
        <?php echo do_shortcode("[thefuture]"); ?>
    </section>
</main>
<?php
get_footer();
?>