<?php
/**
 * The Front Page.
 *
 * @package McColl_Therapy_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section id="home" class="banner-wrapper">
				<div class="hero-banner" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-banner-5.jpg">
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
				<p class="align-center">
					Our team provides you with the highest quality services through extensive training and a dedication to the well-being of our clients
				</p>
				<ul class="bxslider-profile profile-list">
					<?php $profile_info = array(
						'post_type' => 'profile',
						'posts_per_page' => 10,
						'order' => 'ASC',
						'orderby' => 'date');
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

			<section  id= "wellness"  class="wellness-wrapper">
				<div class="wellness-banner" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-banner-3.jpg">
					<h2>Understanding Wellness</h2>
				</div>
				<div class="dimensions-wrapper">
					<div class="dimensions-title">
						<h3>Dimensions of Wellness</h3>
					</div>
					<div class="blue-bg white">
						<p class="align-center">
							Barriers and challenges experienced can affect people’s lives in different ways. Understanding and maintaining one's wellness prepares us to manage the challenges of life and keep growing.
						</p>
					</div>
					<ul class="wellness-icons">
						<li class="emotional-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-emotional.svg" alt="Emotional Logo" />
							<div>
								<h4>Emotional</h4>
								<p class="margin-bottom">Noticing and handling our feelings in effective ways</p>
								<span class="popup-trigger btn">Read More</span>

								<!-- The Overlay only has to be put in one location -->
								<div class="overlay"></div>

								<div class="popup">
									<span class="popup-btn-close">close</span>
									<div class="popup-content">
										<div class="popup-header">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-emotional.svg" alt="Emotional Logo" />
											Emotional
										</div>
										<div class="popup-body">
											Aliquam felis risus, pretium non bibendum efficitur, bibendum convallis nisl. Proin pellentesque facilisis elit quis lobortis. Aenean hendrerit massa ac tortor suscipit egestas. Maecenas posuere ultrices pretium. Nunc euismod malesuada egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum laoreet ac tellus vitae consequat. Maecenas in volutpat mi. Etiam eget volutpat risus. Praesent varius tortor non aliquam rutrum. Fusce hendrerit sagittis hendrerit. Donec a tempus urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean nec lectus nulla.
										</div>
									</div>
								</div>

							</div>
						</li>
						<li class="mental-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-mental.svg" alt="" />
							<div>
								<h4>Mental</h4>
								<p class="margin-bottom">Using our minds to problem solve and be productive</p>
								<span class="popup-trigger btn">Read More</span>

								<div class="popup">
									<span class="popup-btn-close">close</span>
									<div class="popup-content">
										<div class="popup-header">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-mental.svg" alt="" />
											<h4>Mental</h4>
										</div>
										<div class="popup-body">
											Aliquam felis risus, pretium non bibendum efficitur, bibendum convallis nisl. Proin pellentesque facilisis elit quis lobortis. Aenean hendrerit massa ac tortor suscipit egestas. Maecenas posuere ultrices pretium. Nunc euismod malesuada egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum laoreet ac tellus vitae consequat. Maecenas in volutpat mi. Etiam eget volutpat risus. Praesent varius tortor non aliquam rutrum. Fusce hendrerit sagittis hendrerit. Donec a tempus urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean nec lectus nulla.
										</div>
									</div>
								</div>

							</div>
						</li>
						<li class="physical-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-physical.svg" alt="" />
							<div>
								<h4>Physical</h4>
								<p>Attending to our body and maintaining a healthy lifestyle</p>
								<span class="popup-trigger btn">Read More</span>

								<div class="popup">
									<span class="popup-btn-close">close</span>
									<div class="popup-content">
										<div class="popup-header">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-physical.svg" alt="" />
											<h4>Physical</h4>
										</div>
										<div class="popup-body">
											Aliquam felis risus, pretium non bibendum efficitur, bibendum convallis nisl. Proin pellentesque facilisis elit quis lobortis. Aenean hendrerit massa ac tortor suscipit egestas. Maecenas posuere ultrices pretium. Nunc euismod malesuada egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum laoreet ac tellus vitae consequat. Maecenas in volutpat mi. Etiam eget volutpat risus. Praesent varius tortor non aliquam rutrum. Fusce hendrerit sagittis hendrerit. Donec a tempus urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean nec lectus nulla.
										</div>
									</div>
								</div>

							</div>
						</li>
						<li class="spiritual-wrap">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-spiritual.svg" alt="" />
							<div>
								<h4>Spiritual</h4>
								<p>Aligning decisions and actions with our values and beliefs</p>
								<span class="popup-trigger btn">Read More</span>

								<div class="cover"></div>
								<div class="popup">
									<span class="popup-btn-close">close</span>
									<div class="popup-content">
										<div class="popup-header">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-spiritual.svg" alt="" />
											<h4>Spiritual</h4>
										</div>
										<div class="popup-body">
											Aliquam felis risus, pretium non bibendum efficitur, bibendum convallis nisl. Proin pellentesque facilisis elit quis lobortis. Aenean hendrerit massa ac tortor suscipit egestas. Maecenas posuere ultrices pretium. Nunc euismod malesuada egestas. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum laoreet ac tellus vitae consequat. Maecenas in volutpat mi. Etiam eget volutpat risus. Praesent varius tortor non aliquam rutrum. Fusce hendrerit sagittis hendrerit. Donec a tempus urna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean nec lectus nulla.
										</div>
									</div>
								</div>

							</div>
						</li>
					</ul>
				</div>
					<div class="blue-bg">
						<p class="align-center">
								Our practice brings together effective, well-studied therapy approaches that best suit your personal needs. We strive to work with you as a partner in understanding your concerns and making progress towards your goals.
						</p>
				</div>
				<div class="dw-diagram container">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dimensions.jpg" alt="Dimensions Diagram" />
					<div class="diagram-info align-center">
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

			<section  id= "resources" class="resources-wrapper">
				<div class="resources-banner" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-banner-7.jpg">
					<h2>Resources</h2>
					<div class="resources-info">
						<h5>Contact information for support</h5>
								<ul>
									<li>
										For local Edmonton resources:
										<a href="http://edmonton.cmha.ca/211-resource-lists/" target="_blank">211 Resource List</a></li>
									<li>
										If in distress:
										<a href="http://edmonton.cmha.ca/programs_services/distress-line/" target="_blank">Distress Lines</a></li>
									<li>
										If in immediate danger:
										<a href="http://www.edmontonpolice.ca/ContactEPS.aspx" target="_blank">911 Edmonton Police</a></li>
								</ul>
								<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources.png" alt="Resources Image" /> -->
					</div>
				</div>
			</section><!-- .information-wrapper -->

			<section id= "contact" class="contact-wrapper  container">
				<h2>Contact Us</h2>
				<div class="contact-form-info">
							<div class="contact-info-wrapper">
								<div class="contact-paragraph">
									<p>
										 For any inquiries, please send us a message or contact us directly through:
									</p>
								</div>
								<div class="contact-info">
									<h5>McColl Therapy Inc.</h5>
									<p>780.965.9906</p>
									<p>logan@mccolltherapy.com</p>
										<p>
												9707 –110St #312
												Edmonton, Alberta T5K 2L9
										</p>
								</div>
							</div>
							<?php
								echo do_shortcode('[contact-form-7 id="12" title="Contact form 1"]');
								?>
				</div>

			</section><!-- .contact-wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
