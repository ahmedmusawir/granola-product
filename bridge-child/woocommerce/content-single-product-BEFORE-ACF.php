<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$price = $product->sale_price;
$sale = $product->regular_price;
$off_price = $sale - $price;
$percent_off = ($off_price / $sale) * 100;

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<section id="SINGLE-PRODUCT-CONTENT" class="clearfix">

	<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
			/**
			 * woocommerce_before_single_product_summary hook.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
		?>

		<div id="SINGLE-PRODUCT-SUMMERY" class="summary entry-summary clearfix">

			<?php
				/**
				 * woocommerce_single_product_summary hook.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				// do_action( 'woocommerce_single_product_summary' );
			?>

			<div class="product-title">
				<?php woocommerce_template_single_title(); ?>
			</div>	
			<div class="product-rating">
				<?php echo woocommerce_template_single_rating(); ?>
			</div>
			<div class="price">
				<?php woocommerce_template_single_price(); ?>
				<article class="price-description">
					<h3>SAVE <?php echo ceil($percent_off); ?>% OFF TODAY!</h3>
				</article>
			</div>
			<div class="excerpt">
				<?php woocommerce_template_single_excerpt(); ?>
			</div>
			<div class="add-to-cart">
				<?php woocommerce_template_single_add_to_cart(); ?>
			</div>
			<div class="single-meta">
				<?php woocommerce_template_single_meta(); ?>
			</div>
			<div class="single-sharing">
				<?php woocommerce_template_single_sharing(); ?>
			</div>
			
			<?php //echo meta_key->_sale_price; ?>

		</div><!-- .summary -->

		<?php
			/**
			 * woocommerce_after_single_product_summary hook.
			 *
			 * @hooked woocommerce_output_product_data_tabs - 10
			 * @hooked woocommerce_upsell_display - 15
			 * @hooked woocommerce_output_related_products - 20
			 */
			// do_action( 'woocommerce_after_single_product_summary' );
		?>

		<div class="product-data-tabs clearfix">
			<?php woocommerce_output_product_data_tabs(); ?>
		</div>

		<section id="OPTIN-BLOCK">
			<figure class="flex-container">
				
				<article class="flex-item">

					<h3>
						GET BEST OFFERS FIRST
					</h3>
					<h4>Join our newsletter to be the first to receive special offers and discounts.</h4>

						<?php echo do_shortcode('[contact-form-7 id="17679" title="Granola Form"]'); ?>

					<h5>*  We respect your privacy.</h5>
					
				</article>
				<article class="flex-item">
					<h3>
						FREE SHIPPING
					</h3>
					<h4>All Orders $49 And Up ... Buy Today and SAVE!!</h4>
					<img class="pull-right img-responsive" src="https://www.stickersbanners.com/image/USAFREESHIPPING1.png" alt="">
				</article>

			</figure>
		</section>

		<div class="related-products clearfix">
			
			<?php woocommerce_output_related_products(); ?>

		</div>



	</div><!-- #product-<?php the_ID(); ?> -->	
</section>

<?php do_action( 'woocommerce_after_single_product' ); ?>





































