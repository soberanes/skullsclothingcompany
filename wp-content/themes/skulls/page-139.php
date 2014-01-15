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
    <div id="content">
        <div class="camera_wrap">
            <div data-src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide.png"></div>
            <div data-src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide2.png"></div>
            <div data-src="<?php echo get_bloginfo('template_directory'); ?>/images/skulls/slider/slide3.png"></div>
        </div>

    </div><!-- /#content -->
		
<?php get_footer(); ?>