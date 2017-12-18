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
								<p style="margin-bottom: 10px;"> #312-9707 110 Street NW, Edmonton, AB, T5K 2L9</p>
								<a href="mailto:ldmccoll@gmail.com">ldmccoll@gmail.com</a>
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
