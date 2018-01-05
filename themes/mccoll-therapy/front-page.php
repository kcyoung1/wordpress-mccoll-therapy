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
				<div class="hero-banner" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-old.jpg">
					<div class="gradient"></div>
					<h1>McColl Therapy</h1>
					<p>Supporting personal growth and lasting wellness</p>
				</div>
			</section><!-- .banner-wrapper -->

			<section id="about" class="about-wrapper container">
				<h2>About</h2>
				<p>McColl Therapy offers personalized therapy and counselling for the challenging parts of life.</p>
				<ul class="bxslider">
					<li>
						<p>
							Determining <span class="bold"> health </span>and
							<span class="bold"> wellness </span>goals
						</p>
					</li>
					<li>
						<p>
							Promoting  <span class="bold"> balance </span> and <span class="bold"> growth </span> in life
						</p>
					</li>
					<li>
						<p>
							Developing<span class="bold"> skills </span>
							and <span class="bold"> plans </span>to act on
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
									<button type="button" name="button">&times;</button>
								</div>
								<div class="border"></div>
								<div class="expand-content">
										<div class="content-wrap">
											<?php the_content(); ?>
											<br/>
											<a href="#contact" class="btn">Contact Us</a>
										</div>
								</div>
						</li>
					<?php endforeach;
									wp_reset_postdata(); ?>
				</ul><!-- services-list -->
			</section><!-- .services-wrapper -->

			<?php get_template_part( 'template-parts/content', 'profile' ); ?>

			<div id= "wellness" class="wellness-wrapper">
				<div class="wellness-banner">
					<h2>Mental Wellness</h2>
				</div>	
				<div class="container">
					<div style="text-align: center;">
							<p style="max-width: 900px; width: 100%; margin: 0 auto;">Mental Wellness is important for people to live healthy, productive lives. It is a state of self-awareness and value-driven behavior that supports growth and success.</p>
							<div class="flexbox" style="margin: 50px 0;">
									<div class="flex-half flex-item ">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-physical.png" alt="Physical" />
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-cognitive.png" alt="Cognitive" />
									</div>
									<div class="flex-half flex-item ">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-emotional.png" alt="Emotional" />
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-spiritual.png" alt="Spiritual" />
									</div>  
							</div>
							<p>Four health dimensions maintain Mental Wellness: <span class="bold physical">Physical</span>, <span class="bold cognitive">Cognitive</span>, <span class="bold emotional">Emotional</span>, and <span class="bold spiritual">Spiritual</span>.</p>
					</div>
					<div class="dw-diagram flexbox">
						<div class="flex-item flex-half">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dimensions.png" alt="Dimensions Diagram" />
						</div>
						<div class="flex-item flex-half">
								<p>Wellness entails balancing all dimensions to positively impact one’s life. McColl Therapy provides assistance to support personal growth and lasting wellness.
								<br>
								<br>
								<a href="/wellness" class="btn">Read More</a>
								</p>	
						</div>
					</div>
				</div>

			</div>

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

			<?php get_template_part( 'template-parts/content', 'contact' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
