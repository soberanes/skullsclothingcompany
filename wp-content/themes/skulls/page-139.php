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
        <?php 
        //[camera slideshow='my-first-slideshow'] 
        echo do_shortcode("[camera slideshow='media']");
        ?>
        <div id="media_content">
            <iframe id="media_item" width="560" height="315" src="//www.youtube.com/embed/dEZWgSEWBWA?rel=0&vq=hd1080" frameborder="0" allowfullscreen></iframe>
        </div>
    </div><!-- /#content -->
		
<?php get_footer(); ?>