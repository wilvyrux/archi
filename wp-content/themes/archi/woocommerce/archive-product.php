<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $archi_option;

get_header( 'shop' ); ?>
	
	<?php global $archi_option; ?>
	<?php if($archi_option['subpage-switch']!=false){ ?>

	    <!-- subheader -->
	    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" <?php if($archi_option['shop_thumbnail'] != ''){ ?> style="background-image: url('<?php echo esc_url($archi_option['shop_thumbnail']['url']); ?>');" <?php } ?> >
	        <div class="container">
	            <div class="row">
	                <div class="col-md-12">
	                    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
							<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
						<?php endif; ?>
						
						<?php
							/**
							 * woocommerce_archive_description hook
							 *
							 * @hooked woocommerce_taxonomy_archive_description - 10
							 * @hooked woocommerce_product_archive_description - 10
							 */
							do_action( 'woocommerce_archive_description' );
						?>
	                    <?php do_action('breadcrumb_before_main_content'); ?>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- subheader close -->

	<?php }else{ ?>
	    <section class="no-subpage"></section>
	<?php } ?>		

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>	

		<?php if(isset($archi_option['shop-layout']) and $archi_option['shop-layout'] == 2 ){ ?>
	        <div class="col-md-3">
				<?php
					/**
					 * woocommerce_sidebar hook
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					do_action( 'woocommerce_sidebar' );
				?>
			</div>
	    <?php } ?>

		<div class="<?php if(isset($archi_option['shop-layout']) and $archi_option['shop-layout'] != 1 ){echo 'col-md-9';}else{echo 'col-md-12';}?>">
			
				<?php if ( have_posts() ) : ?>
					<div class="row">
						<?php
							/**
							 * woocommerce_before_shop_loop hook
							 *
							 * @hooked woocommerce_result_count - 20
							 * @hooked woocommerce_catalog_ordering - 30
							 */
							do_action( 'woocommerce_before_shop_loop' );
						?>
					</div>
					<div class="row">
						<?php woocommerce_product_loop_start(); ?>

							<?php woocommerce_product_subcategories(); ?>

							<?php while ( have_posts() ) : the_post(); ?>

								<?php wc_get_template_part( 'content', 'product' ); ?>

							<?php endwhile; // end of the loop. ?>

						<?php woocommerce_product_loop_end(); ?>
					</div>
					<?php
						/**
						 * woocommerce_after_shop_loop hook
						 *
						 * @hooked woocommerce_pagination - 10
						 */
						do_action( 'woocommerce_after_shop_loop' );
					?>				
				<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

					<?php wc_get_template( 'loop/no-products-found.php' ); ?>

				<?php endif; ?>

		</div>

		<?php if(isset($archi_option['shop-layout']) and $archi_option['shop-layout'] == 3 ){ ?>
	        <div class="col-md-3">
				<?php
					/**
					 * woocommerce_sidebar hook
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					do_action( 'woocommerce_sidebar' );
				?>
			</div>
	    <?php } ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
	

<?php get_footer( 'shop' ); ?>
