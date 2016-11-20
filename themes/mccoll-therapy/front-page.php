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
					<div class="gradient"></div>
					<h1>McColl Therapy</h1>
					<h5>Supporting personal growth and lasting wellness</h5>
				</div>
			</section><!-- .banner-wrapper -->

			<section id="about" class="about-wrapper container">
				<h2>About</h2>
				<p>McColl Therapy offers personalized therapy and counselling for success in the challenging parts of life. Our health professionals assist you with...</p>
				<ul class="bxslider">
					<li>
						<p>
							Determining <span class="bold"> health </span>and
							<span class="bold"> wellness </span>goals
						</p>
					</li>
					<li>
						<p>
							Identifying areas for <span class="bold"> growth </span> and <span class="bold"> balance </span>
						</p>
					</li>
					<li>
						<p>
							Developing<span class="bold"> plans </span>
							and <span class="bold"> skills </span>to achieve goals
						</p>
					</li>
					<li>
						<p>
							Building<span class="bold"> independence </span>and <span class="bold"> success </span>
						</p>
					 </li>
				</ul>
			</section><!-- .about-wrapper -->

			<section id="services" class="services-wrapper">
				<h2>Services</h2>
				<div class="border"></div>
				<ul class="services-list accordian">
					<?php $services_icons = array(
						'post_type' => 'services',
						'posts_per_page' => 4,
						'order' => 'ASC',
						'orderby' => 'date');
						$services = get_posts( $services_icons );
						foreach ( $services as $post ) : setup_postdata( $post ); ?>

						<li class="accordian-content">
								<div class="accordian-head">
									<?php the_post_thumbnail('full'); ?>
									<h2><?php the_title(); ?></h2>
									<button type="button" name="button">+</button>
								</div>
								<div class="border"></div>
								<div class="expand-content">
										<div class="content-wrap">
											<?php the_content(); ?>
											<a href="#contact" class="btn">Contact Us</a>
										</div>
								</div>
						</li>
					<?php endforeach;
									wp_reset_postdata(); ?>
				</ul><!-- services-list -->
			</section><!-- .services-wrapper -->

			<section id="team" class="profile-wrapper container">
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
									<div class="profile-line"><?php echo wp_kses_post(CFS()->get( 'position' )); ?></div>
									<div class="profile-line"><?php echo wp_kses_post(CFS()->get( 'education' )); ?></div>
									<?php echo wp_kses_post(CFS()->get( 'bio' )); ?>
								</div>
							</div>
						</li>
					<?php endforeach;
									wp_reset_postdata(); ?>
				</ul><!-- services-list -->

			</section><!-- .profile-wrapper -->

			<section  id= "wellness"  class="wellness-wrapper">
					<?php get_template_part( 'template-parts/content', 'wellness' ); ?>
			</section><!-- .wellness-wrapper -->

			<!-- <section  id= "resources" class="resources-wrapper">
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
					</div>
				</div>
			</section> .resources-wrapper -->

			<h2 class="contact-banner">Contact Us</h2>
			<section id= "contact" class="contact-wrapper  container">
				<div class="contact-form-info">
							<div class="contact-info-wrapper">
								<div class="contact-paragraph">
									<p>
										 For any inquiries, please call or complete the form below to book an appointment.
									</p>
								</div>
								<div class="contact-info">
									<h5>McColl Therapy Inc.</h5>
									<p>780.965.9906</p>
									<a href="mailto:ldmccoll@gmail.com">ldmccoll@gmail.com</a>
										<p>
												Ledgeview Business Centre<br/>
												Edmonton, Alberta
												<br/>T5K 2L9
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
