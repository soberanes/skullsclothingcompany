<?php
/**
 * Show options for ordering
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $woocommerce, $wp_query;

$sort_by = (isset($_GET['orderby'])) ? $_GET['orderby'] : 'Order by';

if ( 1 == $wp_query->found_posts || ! woocommerce_products_will_display() )
	return;
?>
<form class="woocommerce-ordering" method="get">
    <div class="selector-wrapper">
	<select id="product_order" name="orderby" class="orderby skulls_order">
		<?php
			$catalog_orderby = apply_filters( 'woocommerce_catalog_orderby', array(
				'menu_order' => __( 'Default sorting', 'woocommerce' ),
				'popularity' => __( 'Order by popularity', 'woocommerce' ),
				'rating'     => __( 'Order by average rating', 'woocommerce' ),
				'date'       => __( 'Order by newness', 'woocommerce' ),
				'price'      => __( 'Order by price: low to high', 'woocommerce' ),
				'price-desc' => __( 'Order by price: high to low', 'woocommerce' )
			) );

			if ( get_option( 'woocommerce_enable_review_rating' ) == 'no' )
				unset( $catalog_orderby['rating'] );

			foreach ( $catalog_orderby as $id => $name )
				echo '<option value="' . esc_attr( $id ) . '" ' . selected( $orderby, $id, false ) . '>' . esc_attr( $name ) . '</option>';
		?>
	</select>
        <a class="selectBox selectBox-dropdown" style="width: 243px; display: inline-block;">
            <span id="product_order_selected" class="selectBox-label" style="width: 192px;"><?= $sort_by;?></span><span class="selectBox-arrow"></span>
        </a>
    </div>
	<?php
		// Keep query string vars intact
		foreach ( $_GET as $key => $val ) {
			if ( 'orderby' == $key )
				continue;
			
			if (is_array($val)) {
				foreach($val as $innerVal) {
					echo '<input type="hidden" name="' . esc_attr( $key ) . '[]" value="' . esc_attr( $innerVal ) . '" />';
				}
			
			} else {
				echo '<input type="hidden" name="' . esc_attr( $key ) . '" value="' . esc_attr( $val ) . '" />';
			}
		}
	?>
</form>
