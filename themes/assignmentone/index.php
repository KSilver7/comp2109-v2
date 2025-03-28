<?php

// This is the main template file.

get_header();

// This variable will allow the usage of the featured image and will be added in the functions.php page
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>

<section class="post-masthead" style="background: url('<?php echo $featuredImg[0];?>')">
    <div>
        <h1><?php the_title(); ?></h1>
    </div>
</section>
<section class="homepage-content">
    <?php echo get_the_content(); ?>
</section>

<?php
get_footer();
?>