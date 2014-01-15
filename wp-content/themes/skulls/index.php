<?php
// File Security Check
if ( ! function_exists( 'wp' ) && ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?><?php
/**
 * Index Template
 *
 * Here we setup all logic and XHTML that is required for the index template, used as both the homepage
 * and as a fallback template, if a more appropriate template file doesn't exist for a specific context.
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();
	global $woo_options;
	
?>
    
    <div id="content" class="col-full <?php if ( $woo_options[ 'woo_homepage_banner' ] == "true" ) echo 'with-banner'; ?> <?php if ( $woo_options[ 'woo_homepage_sidebar' ] == "false" ) echo 'no-sidebar'; ?>">
    
    	<?php woo_main_before(); ?>
    
<!--		<div class="flexslider">
			<ul class="slides">
				<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide.png" /></li>
				<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide2.png" /></li>
				<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide3.png" /></li>
				<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide4.png" /></li>
				<li><img src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide5.png" /></li>
			</ul>
		</div>-->
                <div id="index_slider" class="camera_wrap">
                    <div data-src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide.png"></div>
                    <div data-src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide2.png"></div>
                    <div data-src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide3.png"></div>
                    <div data-src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide4.png"></div>
                    <div data-src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide5.png"></div>
                </div>
		<div class="clearfix"></div>
		<div class="feature_title">Featured Products</div>
                <div class="feature_item poket_shirts" data-href="<?= get_bloginfo('url');?>/?product_cat=pocket-shirts"></div>
		<div class="feature_item snapbacks" data-href="<?= get_bloginfo('url');?>/?product_cat=snapbacks"></div>
		<div class="feature_item crewnecks" data-href="<?= get_bloginfo('url');?>/?product_cat=crewnecks"></div>
		
		<?php woo_main_after(); ?>

        <?php if ( $woo_options[ 'woo_homepage_sidebar' ] == "true" ) get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>