<?php
/**
 * The template for displaying the footer.
 *
 * @package McColl_Therapy_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div id= "contact" class="container" style="padding: 20px 0;">

					<div class="flexbox">

						<div class="flex-item flex-half">
							<div class="logo-container">
								<a href="/" class="mccoll-logo">
									<img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.png" alt="McColl Therapy Logo" />
									<h3>McColl Therapy</h3>
								</a>
							</div>
							<p class="disclaimer show-for-tablet">&#169; All rights reserved 2017 McColl Therapy Inc.</p>
						</div>

						<div class="flex-item flex-half">
							<div class="contact-info">
								<a href="https://www.google.ca/maps/place/9707+110+St+%23312,+Delta,+BC+V4C/@49.1557601,-122.9204789,17z/data=!3m1!4b1!4m5!3m4!1s0x5485d9180122f993:0x60f3115c9097c34e!8m2!3d49.1557601!4d-122.9182902?q=%23312-9707+110+Street+NW&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiWkIrT5pTYAhUT9mMKHal_AcEQ_AUICigB" target="_blank">
									#312-9707 110 Street NW<br/>
									Edmonton, AB, T5K 2L9
								</a>
								<br>
								<a href="mailto:logan@mccolltherapy.com ">logan@mccolltherapy.com</a>
								<br>
								<a href="tel:780-965-9906">780-965-9906</a>
							</div>
						</div>

					</div>

					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>" class="display-none"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .container -->

				<p class="disclaimer hide-for-tablet">&#169; All rights reserved 2017 McColl Therapy Inc.</p>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
