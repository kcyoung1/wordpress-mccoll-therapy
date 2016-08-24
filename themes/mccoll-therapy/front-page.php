<?php
/**
 * The Front Page.
 *
 * @package McColl_Therapy_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="banner-wrapper">
				<div class="hero-banner" data-type="background" data-speed="10">
					<h1>McColl Therapy</h1>
					<h3>Support for a lasting wellness</h3>
				</div>
			</section><!-- .banner-wrapper -->

			<section id="about" class="about-wrapper container">
				<h2>About</h2>
				<p>Our registered health professionals work with you to address your concerns through effective counselling and personalized therapy</p>
				<ul class="bxslider">
					<li>Health and Wellness</li>
					<li>Independence and Success</li>
					<li>Growth and Balance</li>
				</ul>
			</section><!-- .about-wrapper -->

			<section id="services" class="services-wrapper">
				<h2>Services</h2>
				<ul class="services-list">
					<?php $services_icons = array(
						'post_type' => 'services',
						'posts_per_page' => 4,
						'order' => 'ASC',
						'orderby' => 'name');
						$services = get_posts( $services_icons );
						foreach ( $services as $post ) : setup_postdata( $post ); ?>

						<li>
							<div class="services-wrap">
								<div class="services-icon">
									<?php the_post_thumbnail('full'); ?>
								</div>
								<div class="services-info">
									<h3 class="services-title"><?php the_title(); ?></h3>
									<span class="popup-trigger btn">Read More</span>

									<div class="popup">
										<span class="popup-btn-close">close</span>
										<div class="popup-content">
											<div class="popup-header">
												<?php the_post_thumbnail('full'); ?>
												<h3><?php the_title(); ?></h3>
											</div>
											<div class="popup-body">
												<div><?php the_content(); ?></div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</li>
					<?php endforeach;
									wp_reset_postdata(); ?>
				</ul><!-- services-list -->
			</section><!-- .services-wrapper -->

			<section class="profile-wrapper container">
				<h2>Our Team</h2>

				<ul class="bxslider-profile profile-list">
					<?php $profile_info = array(
						'post_type' => 'profile',
						'posts_per_page' => 4,
						'order' => 'ASC',
						'orderby' => 'name');
						$profiles = get_posts( $profile_info );
						foreach ( $profiles as $post ) : setup_postdata( $post ); ?>

						<li>
							<div class="profile-wrap">
								<div class="profile-image">
									<?php the_post_thumbnail('full'); ?>
								</div>
								<div class="profile-info">
									<h3 class="profile-title"><?php the_title(); ?></h3>
									<p><?php echo wp_kses_post(CFS()->get( 'position' )); ?></p>
									<p><?php echo wp_kses_post(CFS()->get( 'education' )); ?></p>
									<?php echo wp_kses_post(CFS()->get( 'bio' )); ?>
								</div>
							</div>
						</li>
					<?php endforeach;
									wp_reset_postdata(); ?>
				</ul><!-- services-list -->

			</section><!-- .profile-wrapper -->

			<section class="wellness-wrapper">
				<div class="wellness-banner" data-type="background" data-speed="10">
					<h2>Understanding Wellness</h2>
				</div>
				<div class="dimensions-wrapper">
					<h3>Dimensions of Wellness</h3>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-emotional.svg" alt="Emotional Logo" />
							<div>
								<h3>Emotional</h3>
								<p class="margin-bottom">Noticing and handling our feelings in effective ways</p>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-mental.svg" alt="" />
							<div>
								<h3>Mental</h3>
								<p class="margin-bottom">Using our minds to problem solve and be productive</p>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-physical.svg" alt="" />
							<div>
								<h3>Physical</h3>
								<p>Attending to our body and maintaining a healthy lifestyle</p>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-spiritual.svg" alt="" />
							<div>
								<h3>Spiritual</h3>
								<p>Aligning decisions and actions with our values and beliefs</p>
							</div>
						</li>
					</ul>
				</div>
			</section><!-- .wellness-wrapper -->

			<section class="resources-wrapper container">
				<h2>Resources</h2>
				<h4>Contact information for support</h4>
				<div class="resources-info">
					<div class="distress-res">
						<h3>Distress Lines</h3>
						<p>211 for Edmonton resources</p>
						<p>911 for immediate emergency</p>
					</div>
					<div class="financial-res">
						<h3>Financial Support</h3>
						<a href="#">Links</a>
						<a href="#">Links</a>
					</div>
				</div>
			</section><!-- .information-wrapper -->

			<section id= "contact" class="contact-wrapper  container">
				<h2>Contact Us</h2>
				<div class="contact-form-info">
						<?php
							echo do_shortcode('[contact-form-7 id="12" title="Contact form 1"]');
							?>
							<div class="contact-info">
								<p>call: 780 965 9906</p>
								<p>email: logan@mccolltherapy.com</p>

								<p>Location:</p>
								<p>9707 –110St #312</p>
								<p>Edmonton, Alberta T5K 2L9</p>
							</div>
				</div>

			</section><!-- .contact-wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
