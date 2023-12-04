<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>
<header class="woocommerce-products-header">
	<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>
<h1>
    <?php bloginfo('title'); ?>
</h1>
<p>
    <?php bloginfo('description'); ?>
</p>

<div class="container">
    <header class="entry-header">
        <h2 class="entry-title">
            <?php the_title(); ?>
        </h2>
    </header>

    <h1>
        HelloWorlds
    </h1>


    <?php
	while ( $loop->have_posts() ) : $loop->the_post();
	?>
		<div class="col-md-2"> <!-- 2 birim genişliğinde, tek dikey sıralama için -->
			<?php wc_get_template_part( 'content', 'archive-product' ); ?>
		</div>
	<?php endwhile; ?>

    <?= get_footer( 'shop' ); ?>