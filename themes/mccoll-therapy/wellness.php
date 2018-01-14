<?php /* Template Name: Wellness */ get_header();?>

<div class="back-btn main-navigation logo-container">
    <a href="/" class="mccoll-logo">
        <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.png" alt="McColl Therapy Logo" /> -->
        <h3>&#8678; <span>Back</span></h3>
    </a>
</div>

<section class="wellness">

    <div class="banner">
			<h1>Mental Wellness</h1>
    </div>
		<div class="section-spacing">
			<div class="container">
				<p><span class="bold">Mental Wellness</span> is important for people to have healthy, productive lives. It is a state of positive health and quality of life that enables people to meet responsibilities, pursue ambitions, and grow as individuals. To maintain this optimal state of being people develop knowledge, skills, and habits that serve different aspects of personal health.</p>
				<p>
				<span class="bold">Four Health Dimensions</span> work together to build resilience and maintain Mental Wellness through experiences of adversity, illness, and injury. McColl Therapy assists individuals to understand and attend to each dimension, enabling individuals to experience personal growth and lasting wellness.
				</p>
			</div>
			<h2>Health Dimensions</h2> 
			<?php get_template_part( 'template-parts/content', 'wellness' ); ?>	
			<div class="container">
				<p>The Health Dimensions are connected internally, with the human nervous system, as well as externally with communities and workplaces. When one dimension is negatively impacted by injury, illness or adversity, the other dimensions find strategies to compensate. 
        <br>
        <br>
				If the Health Dimensions are unable to effectively protect Mental Wellness, <span class="bold">Health Imbalances</span> can develop.
				</p>	
			</div>
		</div>

		
    <div class="container">

        <div class="section-spacing">
            <h2>Mental Health Concerns</h2>
            <div class="flexbox">
                <div class="flex-half flex-item">
                    <p>Much like when a cup overflows, Mental Wellness is disrupted when imbalances accumulate and can no longer be handled effectively. The resulting concerns may create more imbalances and further impact quality of life.</p>
                </div>
                <div class="flex-half flex-item">
                    <img style="max-width: 90%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/wellness-diagram.png" alt="Wellness Diagram" />
                </div>
            </div>

            <p>The concerns people may experience vary significantly, as do the strategies to address imbalances and restore Mental Wellness.</p>
        </div>

        <div class="section-spacing">
					<h2>Addressing Imbalances</h2>
					<div class="flexbox">
						<div class="flex-half flex-item">
							<img style="max-width: 90%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/dimensions.png" alt="Wellness Diagram" />
						</div>
						<div class="flex-half flex-item">
							<p>The health dimensions often require advanced skills to address imbalances and concerns. For example, the skills of emotion regulation.
							<br/>
							<br/>
							Learning and mastering such skills through experience and repetition can enable people to handle imbalances effectively, maintain Mental Wellness, and prevent impact to quality of life.
							</p>
						</div>
					</div>

					<br>

					<div class="info-box">
						<p>For more information on how to maintain and restore Mental Wellness:</p>
						<ul>
							<li>Speak with a Health Link Registered Nurse by calling 8-1-1</li>
							<li>Discuss concerns with your Doctor</li>
							<li>If seeking immediate help, please call the <span class="bold">Distress Line at <a href="tel:780-482-4357" class="bold">780-482-4357</a></span></li>
						</ul>
					</div>
        </div>
    </div>
	

</section>


<?php get_footer(); ?>
