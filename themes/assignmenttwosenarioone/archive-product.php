<?php
get_header();
$shopFeaturedImage = wp_get_attachement_image_src( get_post_thumbnail_id( wc_get_page_id( 'shop' ) ), 'full' );
?>
<section class="shop-masthead" style="background: url('<?php echo $shopFeaturedImage[0]; ?>');">
    <div>
        <h1>Shop Page</h1>
    </div>
</section>
<section class="shop-body">
    <?php
        do_action( 'woocommerce_before_shop_loop' );
            echo do_shortcode('[products limit="12" columns="4"]');
        do_action( 'woocommerce_after_shop_loop' );
    ?>
</section>
<?php
get_footer();