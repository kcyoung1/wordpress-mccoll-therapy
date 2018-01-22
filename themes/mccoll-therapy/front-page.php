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
				<div class="hero-banner" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg">
					<div class="gradient"></div>
					<h1>McColl Therapy</h1>
					<p>Supporting personal growth and lasting wellness</p>
				</div>
			</section><!-- .banner-wrapper -->

			<section id="about" class="about-wrapper container">
				<h2>About</h2>
				<p>McColl Therapy offers personalized therapy and counselling <br/> for the challenging parts of life.</p>
				<ul class="bxslider">
					<li>
						<p>
							Determine <span class="bold"> health </span>and
							<span class="bold"> wellness </span>goals
						</p>
					</li>
					<li>
						<p>
							Promote  <span class="bold"> balance </span> and <span class="bold"> growth </span> in life
						</p>
					</li>
					<li>
						<p>
							Develop<span class="bold"> skills </span>
							and <span class="bold"> plans </span>to act on
						</p>
					</li>
					<li>
						<p>
							Build<span class="bold"> independence </span>and <span class="bold"> success </span>
						</p>
					 </li>
				</ul>

				<div class="categories">
					<ul>
						<li>
							<div class="img-circle">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cat-focus.png" alt="Focus and Productivity">
							</div>	
							<h4>Focus & Productivity</h4>
							<p>Fully engage in activities to meet goals</p>
						</li>
						<li>
							<div class="img-circle">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cat-work.png" alt="Work-Self Balance">
							</div>	
							<h4>Work-Self Balance</h4>
							<p>Pursue interests and enjoy each moment</p>
						</li>
						<li>
							<div class="img-circle">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cat-emotion.png" alt="Emotion Regulation">
							</div>	
							<h4>Emotion Regulation</h4>
							<p>Experience and handle emotions effectively</p>
						</li>
						<li>
							<div class="img-circle">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cat-transition.png" alt="Transitions and Independence">
							</div>	
							<h4>Transitions & Independence</h4>
							<p>Engage in new activities of daily living</p>
						</li>
						<li>
							<div class="img-circle">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cat-mental.png" alt="Mental Illness Recovery">
							</div>	
							<h4>Mental Illness Recovery</h4>
							<p>Pursue life goals and prevent relapse</p>
						</li>
						<li>
							<div class="img-circle">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cat-safety.png" alt="Safety and Risk Management">
							</div>	
							<h4>Safety and Risk Management</h4>
							<p>Handle ineffective and harmful urges</p>
						</li>
					</ul>
				</div>
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
									<!-- <?php the_post_thumbnail('full'); ?> -->
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
					<div style="">
							<p style="max-width: 900px; width: 100%; margin: 0 auto;">Mental Wellness is important for people to have healthy, productive lives. It is a personal state of positive health and quality of life that enables people to meet responsibilities, pursue ambitions, and grow as individuals.</p>
							<!-- <div class="flexbox" style="margin: 50px 0;">
									<div class="flex-half flex-item ">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-physical.png" alt="Physical" />
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-cognitive.png" alt="Cognitive" />
									</div>
									<div class="flex-half flex-item ">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-emotional.png" alt="Emotional" />
											<img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-spiritual.png" alt="Spiritual" />
									</div>  
							</div>
							<p>Four health dimensions maintain Mental Wellness: <span class="bold physical">Physical</span>, <span class="bold cognitive">Cognitive</span>, <span class="bold emotional">Emotional</span>, and <span class="bold spiritual">Spiritual</span>.</p> -->
					</div>
					<div class="dw-diagram flexbox">
						<div class="flex-item flex-half">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dimensions.png" alt="Dimensions Diagram" />
						</div>
						<div class="flex-item flex-half">
								<p>Four Health Dimensions work together to build resilience and maintain Mental Wellness through experiences of adversity, illness, and injury. McColl Therapy assists individuals to understand and attend to each Health Dimension, enabling individuals to experience personal growth and lasting wellness.
								<br>
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
