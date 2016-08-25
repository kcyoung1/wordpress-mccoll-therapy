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
					<h5>Support for a lasting wellness</h5>
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
									<h5 class="services-title"><?php the_title(); ?></h5>
									<span class="popup-trigger btn">Read More</span>

									<div class="popup">
										<span class="popup-btn-close">close</span>
										<div class="popup-content">
											<div class="popup-header">
												<?php the_post_thumbnail('full'); ?>
												<h4><?php the_title(); ?></h4>
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
									<h4 class="profile-title"><?php the_title(); ?></h4>
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
					<div class="blue-bg white">
						<p>
							Barriers and challenges experienced can affect people’s lives in different ways. Understanding and maintaining one's wellness prepares us to manage the challenges of life and keep growing.
						</p>
					</div>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-emotional.svg" alt="Emotional Logo" />
							<div>
								<h4>Emotional</h4>
								<p class="margin-bottom">Noticing and handling our feelings in effective ways</p>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-mental.svg" alt="" />
							<div>
								<h4>Mental</h4>
								<p class="margin-bottom">Using our minds to problem solve and be productive</p>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-physical.svg" alt="" />
							<div>
								<h4>Physical</h4>
								<p>Attending to our body and maintaining a healthy lifestyle</p>
							</div>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-spiritual.svg" alt="" />
							<div>
								<h4>Spiritual</h4>
								<p>Aligning decisions and actions with our values and beliefs</p>
							</div>
						</li>
					</ul>
				</div>
					<div class="blue-bg">
						<p>
								Our practice brings together effective, well-studied therapy approaches that best suit your personal needs. We strive to work with you as a partner in understanding your concerns and making progress towards your goals.
						</p>
				</div>
				<div class="dw-diagram container">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dimensions.jpg" alt="Dimensions Diagram" />
					<div class="diagram-info">
							Our practice brings together effective, well-studied therapy approaches that best suit your personal needs. We strive to work with you as a partner in understanding your concerns and making progress towards your goals.
					</div>
				</div>
				<div class="where-we-help">
					<h4>Where We Help</h4>
					<p class="container">
						We work with teens, adults, couples and families to help them succeed in challenging parts of life
					</p>
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/au-independence.png" alt="Independence Icon" />
							<h5>Independence</h5>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/au-mental-health.png" alt="Mental Health Icon" />
							<h5>Mental Health</h5>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/au-relatiionships.png" alt="Relationships Icon" />
							<h5>Relationships</h5>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/au-substance.png" alt="Substance Icon" />
							<h5>Substance</h5>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/au-tech-use.png" alt="Tech Use Icon" />
							<h5>Tech Use</h5>
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/au-work-edu.png" alt="Work Edu Icon" />
							<h5>Work Edu</h5>
						</li>
					</ul>
				</div>
			</section><!-- .wellness-wrapper -->

			<section class="resources-wrapper container">
				<h2>Resources</h2>
				<h5>Contact information for support</h5>
				<div class="resources-info">
						<ul>
							<li>
								For local Edmonton resources:
								<a href="http://edmonton.cmha.ca/211-resource-lists/">211 Resource List</a></li>
							<li>
								If in distress:
								<a href="http://edmonton.cmha.ca/programs_services/distress-line/">Distress Lines</a></li>
							<li>
								If in immediate danger:
								<a href="http://www.edmontonpolice.ca/ContactEPS.aspx">911 Edmonton Police</a></li>
						</ul>
				</div>
			</section><!-- .information-wrapper -->

			<section id= "contact" class="contact-wrapper  container">
				<h2>Contact Us</h2>
				<div class="contact-form-info">
						<?php
							echo do_shortcode('[contact-form-7 id="12" title="Contact form 1"]');
							?>
							<div class="contact-info">
								<p><span>Call:</span> 780 965 9906</p>
								<p><span>Email:</span> logan@mccolltherapy.com</p>
								<div>
									<span>Meet:</span>
									<p>
											 9707 –110St #312
											Edmonton, Alberta T5K 2L9
									</p>
								</div>
							</div>
				</div>

			</section><!-- .contact-wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
