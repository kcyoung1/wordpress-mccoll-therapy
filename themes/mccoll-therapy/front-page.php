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
				<p>
					Custom post type possibly
					About Us company overview - Who We Are - supporting [balance and growth / independence and resilience / ???] (horizontal side scroll? Currently mission, values etc. should be minimal text, ~3 statements)
				</p>
			</section><!-- .about-wrapper -->

			<section class="profile-wrapper container">
				<h2>Profiles</h2>
				<p>
					Custom post type possibly
					Specific About Us - circle headshots of each practitioner associated, name, designation and titles under - click each headshot for a pop-up page - half body shot (cutoff lower legs), background, bio, specializations
				</p>

				<ul class="profile-list">
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
									<p><?php echo wp_kses_post(CFS()->get( 'designation' )); ?></p>
									<?php echo wp_kses_post(CFS()->get( 'background' )); ?>
									<p>	<?php echo wp_kses_post(CFS()->get( 'specialization' )); ?></p>
									<?php echo wp_kses_post(CFS()->get( 'bio' )); ?>
								</div>
							</div>
						</li>
					<?php endforeach;
									wp_reset_postdata(); ?>
				</ul><!-- services-list -->

			</section><!-- .profile-wrapper -->

			<section class="graphic-one-wrapper container">
				<h2>Infographic Part 1</h2>
				<p>
					Hardcode
					Infographic part 1 - top, each wellness dimension, individual circle, title underneath - click icon for pop-up page, additional info and very general recommendations - underneath, left shifted logo wellness diagram - right shifted explanation of diagram
				</p>
			</section><!-- .graphic-one-wrapper -->

			<section class="graphic-two-wrapper container">
				<h2>Infographic Part 2</h2>
				<p>
					Icons
					Infographic part 2 - top text, links importance of  maintaining and growing in important aspects of wellness allows people to handle challenges and live meaningfully - underneath, icons, click each icon for pop-up page, additional info and very general recommendations
				</p>
			</section><!-- .graphic-two-wrapper -->

			<section id="services" class="services-wrapper">
				<h2>Services</h2>
				<!-- <p>
					Custom Post Type
					Services - all visible or side scroll - icons and name and/or with taglines/hooks if sidescroll - Click for pop-up page with description of service
				</p> -->

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

			<section class="information-wrapper container">
				<h2>Information</h2>
				<p>
					Link
					Information and resources for support - links to financial aid, free local resources eg crisis number, support network number, 211 because they offer counselling too
				</p>
			</section><!-- .information-wrapper -->

			<section id= "contact" class="contact-wrapper  container">
				<h2>Contact Us</h2>
				<p>
					Contact form 7 with call to action
					<?php
						echo do_shortcode('[contact-form-7 id="12" title="Contact form 1"]');
						?>
				</p>
			</section><!-- .contact-wrapper -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
