<?php
/**
 * Template Name: A1 Footer
 * Template Post Type: post
 */
get_header();
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
    <section class="post-footer-content">
        <div style="background-image: url('<?php echo $featuredImg[0]; ?>');"></div>
        <div>
            <h4><?php the_title(); ?></h4>
            <p><?php echo get_the_content(); ?></p>
        </div>
<?php
get_footer();
?>