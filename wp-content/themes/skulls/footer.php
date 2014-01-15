<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
	global $woo_options;

	$total = 4;
	if ( isset( $woo_options['woo_footer_sidebars'] ) && ( $woo_options['woo_footer_sidebars'] != '' ) ) {
		$total = $woo_options['woo_footer_sidebars'];
	}
?>
	<div class="footer-wrap">
		<footer id="footer" class="col-full">
			<div id="footer_container">
				<div id="footer_content" class="col-left">
					<h3>Subscribe</h3>
                                        <div id="mc_embed_signup">
                                            <form action="http://skullsclothingcompany.us3.list-manage.com/subscribe/post?u=b02f564708d0983ffc82e4e45&amp;id=a9055657da" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                                    <input type="email" value="" name="EMAIL" class="suscribe_text required email" id="mce-EMAIL" placeholder="Email Address">
                                                    <input type="submit" class="suscribe_button" value="Sign Up" />
                                                    <div id="mce-responses" class="clear">
                                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            </form>
                                        </div>
					<div id="footer_links">
						<div class="payment"></div>
						<div class="util_links">
							<a href="#" class="contact_link">Contact Us</a>
							<span class="pipe">|</span>
							<a href="#" class="faq_link">FAQ</a>
						</div>
					</div>
					
				</div>
				<div id="footer_skulls" class="col-right"></div>
			</div>
		</footer><!-- /#footer  -->
	</div><!-- / footer-wrap -->
	<div id="credits">SKULLS CLOTHING CO. &copy; // ALL RIGHTS RESERVED.</div>

</div><!-- /#wrapper -->
<?php wp_footer(); ?>
<?php woo_foot(); ?>
</body>
</html>