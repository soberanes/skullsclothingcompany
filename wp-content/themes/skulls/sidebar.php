<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php 
/**
 * Sidebar Template
 *
 * If a `primary` widget area is active and has widgets, display the sidebar.
 *
 * @package WooFramework
 * @subpackage Template
 */
	global $woo_options;
	
	if ( isset( $woo_options['woo_layout'] ) && ( $woo_options['woo_layout'] != 'layout-full' ) ) {
?>	
<div id="skulls-sidebar" class="skulls-col-left">

<?php

echo '<ul>';
if(isset($_GET['product_cat']) ){
	echo '<li class="cat_parent"><a href="' . get_bloginfo('url') . '/?product_cat='.$_GET['product_cat'].'">'.str_replace("-", " ", $_GET['product_cat']).'</a></li>';
}else{
	echo '<li class="cat_parent"><a href="' . get_bloginfo('url') . '/?post_type=product">Shop</a></li>';
}
echo '<li';if(isset($_GET['post_type'])){echo ' class="active_cat"';} echo '><a href="' . get_bloginfo('url') . '/?post_type=product">All</a></li>';

//Clothing
$term_id = 16;
$taxonomy_name = 'product_cat';
$termchildren = get_term_children( $term_id, $taxonomy_name );

echo '<li';if($_GET['product_cat'] == 'clothing'){echo ' class="active_cat"';} echo '><a href="' . get_bloginfo('url') . '/?product_cat=clothing">Clothing</a></li>';
foreach ( $termchildren as $child ) {
	$term = get_term_by( 'id', $child, $taxonomy_name );
	echo '<li';if($_GET['product_cat'] == $term->slug){echo ' class="active_cat"';} echo '><a href="' . get_term_link( $child, $taxonomy_name ) . '">- ' . $term->name . '</a></li>';
}

//Accesories
$term_id = 41;
$taxonomy_name = 'product_cat';
$termchildren = get_term_children( $term_id, $taxonomy_name );

echo '<li';if($_GET['product_cat'] == 'accesories'){echo ' class="active_cat"';} echo '><a href="' . get_bloginfo('url') . '/?product_cat=accesories">Accesories</a></li>';
foreach ( $termchildren as $child ) {
	$term = get_term_by( 'id', $child, $taxonomy_name );
	echo '<li';if($_GET['product_cat'] == $term->slug){echo ' class="active_cat"';} echo '><a href="' . get_term_link( $child, $taxonomy_name ) . '">- ' . $term->name . '</a></li>';
}
echo '</ul>';

echo '</ul>';



?> 
	
</div><!-- /#sidebar -->
<?php } // End IF Statement ?>