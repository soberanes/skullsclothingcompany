<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
global $woo_options, $woocommerce;
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php if ( $woo_options['woo_boxed_layout'] == 'true' ) echo 'boxed'; ?> <?php if (!class_exists('woocommerce')) echo 'woocommerce-deactivated'; ?>">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<title><?php woo_title(''); ?></title>
<?php woo_meta(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/favicon.ico">
<?php
	wp_head();
	woo_head();
?>
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/includes/css/flexslider.css" type="text/css">
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/includes/css/camera.css" type="text/css">
<script src="<?php echo get_bloginfo('template_directory'); ?>/includes/js/jquery.flexslider-min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/includes/js/masonry.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/includes/js/detectmobilebrowser.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/includes/js/camera.js"></script>
</head>

<body <?php body_class(); ?>>
<?php woo_top(); ?>

<div id="wrapper">

    <?php woo_header_before(); ?>

	<header id="header" class="col-full">
		<div id="header_container">
			<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr( get_bloginfo( 'description' ) ); ?>">
		    	<img src="<?php echo $logo; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
		    </a>
                    <nav id="menu_mobile" class="clearfix">  
                        <ul class="clearfix">  
                            <li>
                                <a href="<?= $woocommerce->cart->get_cart_url(); ?>">
                                    <span class="cart_content">
                                        Cart (<?= $woocommerce->cart->get_cart_contents_count(); ?>)
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= esc_url($woocommerce->cart->get_checkout_url());?>"><?= __('Checkout','woothemes');?></a>
                            </li>  
                            <li>
                                <a href="<?= get_bloginfo('url');?>/?page_id=7">My Account</a>
                            </li>
                            <li>
                                <a href="<?= get_bloginfo('url');?>/?post_type=product">Shop</a>
                            </li>
                            <li><a href="<?= get_bloginfo('url');?>/?page_id=139">Media</a></li>
                            <li><a href="<?= get_bloginfo('url');?>/?page_id=241">Events</a></li>
                            <li><a href="<?= get_bloginfo('url');?>/?page_id=139">Lifestyle</a></li>
                        </ul>  
                        <a href="#" id="pull">Menu</a>  
                    </nav>
		    <div class="menu">
				<div id="top">
					<nav class="col-full" role="navigation">
					
						<?php
							if ( class_exists( 'woocommerce' ) ) {
								echo '<ul class="nav wc-nav">';
								//woocommerce_cart_link();
								?>
								<li>
									<a href="<?= $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>"  class="li_link">
										<span class="cart_content">
											Cart (<?= $woocommerce->cart->get_cart_contents_count();?>)
										</span>
									</a>
								</li>
								<li class="li_divisor"><span class="small_divisor"></span></li>
								<?php
								echo '<li class="checkout"><a href="'.esc_url($woocommerce->cart->get_checkout_url()).'" class="li_link">'.__('Checkout','woothemes').'</a></li>';
								echo get_search_form();
						?>
								<li class="li_account"><a href="<?= get_bloginfo('url');?>/?page_id=7"  class="li_link">My Account</a></li>
								<li class="li_socials">
									<a href="http://facebook.com/skulls.clothing.company" class="facebook" target="_blank"></a>
									<a href="http://instagram.com/skullsclothingco" class="instagram" target="_blank"></a>
									<a href="http://www.youtube.com/user/SkullsClothingCo" class="youtube" target="_blank"></a>
									<a href="http://skullsclothingcompany.tumblr.com/" class="tumblr" target="_blank"></a>
								</li>
						<?php
								echo '</ul>';
							}
						?>
					</nav>
				</div>
		        <?php woo_nav_before(); ?>
		
				<nav id="navigation" class="col-full" role="navigation">
		
					<?php
					if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
						wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav fr', 'theme_location' => 'primary-menu' ) );
					} else {
					?>
			        <ul id="main-nav" class="nav fl">
			        	<li class="page_item page-item-4"><a href="<?= get_bloginfo('url');?>/?post_type=product">Shop</a></li>
			        	<li class="li_divisor"><span class="divisor">&nbsp;</span></li>
			        	<li class="page_item page-item-4"><a href="<?= get_bloginfo('url');?>/?page_id=139">Media</a></li>
			        	<li class="li_divisor"><span class="divisor">&nbsp;</span></li>
			        	<li class="page_item page-item-4"><a href="<?= get_bloginfo('url');?>/?page_id=241">Events</a></li>
			        	<li class="li_divisor"><span class="divisor">&nbsp;</span></li>
						<li class="page_item page-item-4 last"><a href="http://localhost/skulls/?page_id=4">Lifestyle</a></li>
					</ul>
			        <?php } ?>
		
				</nav>
		
				<?php woo_nav_after(); ?>
			</div>
                        
		</div>
	</header><!-- /#header -->
	<?php woo_content_before(); ?>