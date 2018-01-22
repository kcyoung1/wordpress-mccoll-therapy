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
			<div class="container">
				<p><span class="bold">Mental Wellness</span> is important for people to have healthy, productive lives. It is a state of positive health and quality of life that enables people to meet responsibilities, pursue ambitions, and grow as individuals. To maintain this optimal state of being people develop knowledge, skills, and habits that serve different aspects of personal health.</p>
				<p>
				Four <span class="bold">Health Dimensions</span> work together to build resilience and maintain Mental Wellness through experiences of adversity, illness, and injury. McColl Therapy assists individuals to understand and attend to each dimension, enabling individuals to experience personal growth and lasting wellness.
				</p>
			</div>
			<h2 class="section-header">Health Dimensions</h2> 
			<?php get_template_part( 'template-parts/content', 'wellness' ); ?>	
			<div class="container" style="padding-bottom: 0;">
				<p>The Health Dimensions are connected internally, with the human nervous system, as well as externally with communities and workplaces. When one dimension is negatively impacted by injury, illness or adversity, the other dimensions find strategies to compensate. 
        <br>
        <br>
				If the Health Dimensions are unable to effectively protect Mental Wellness, <span class="bold">Health Imbalances</span> can develop.
				</p>	
			</div>

		
    <div class="container">
        <h2 class="section-header">Health Imbalances</h2>
        <p>Many different situations may lead to Health Imbalances, from significant life difficulties to seemingly mundane stress to lapses in self-care. Typically, imbalances don’t become concerns for Mental Wellness until there are multiple occurring at the same time.
        <br>
        <br>
        Imbalance in one Health Dimension can lead to imbalances in other dimensions. For example:</p>
          <div class="flexbox">
            <div class="flex-half flex-item">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wellness-list.png" alt="Wellness List" style="max-width 85%;" />
            </div>
            <div class="flex-half flex-item list-container">
                <p>Common Health Imbalances include:</p>
                <ul>
                  <li>
                    <p>Regular lack of sleep, nutrition, or exercise</p>
                  </li>
                  <li>
                    <p>Relationship conflict and strain</p>
                  </li>
                  <li>
                    <p>Loss and transition life events</p>
                  </li>
                  <li>
                    <p>Work, school, or financial stress</p>
                  </li>
                  <li>
                    <p>Lack of social or professional support</p>
                  </li>
                </ul>
            </div>
        </div>

        <div class="section-spacing">
          <h2 class="section-header">Wellness Concern</h2>
          <div class="flexbox">
            <div class="flex-half flex-item">
              <p>Much like when a cup spills over, imbalances that linger and accumulate can disrupt Mental Wellness. The resulting Wellness Concerns may occur gradually or suddenly, and if left unaddressed may act as further imbalances.
              <br>
              <br>
              The concerns people experience can vary significantly, as do the strategies to address Imbalances and restore Mental Wellness.</p>
            </div>
            <div class="flex-half flex-item">
              <img style="max-width: 95%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/wellness-diagram.png" alt="Wellness Diagram" />
            </div>
          </div>
        </div>

        <div class="section-spacing">
          <h2 class="section-header">Mental Wellness</h2>
          <p>Advanced skills are often required to address Health Imbalances and Wellness Concerns effectively. Innovative solutions can assist to mitigate or prevent future imbalances and concerns. Assistance to better understand concerns and develop effective strategies enables people to maintain Mental Wellness and prevent future challenges from impacting quality of life.</p>
					<div class="flexbox">
						<div class="flex-half flex-item">
              <img style="max-width: 90%;" src="<?php echo get_template_directory_uri(); ?>/assets/images/dimensions.png" alt="Wellness Diagram" />
              
						</div>
						<div class="flex-half flex-item list-container">
							<p>
              McColl Therapy offers comprehensive Occupational Therapy for mental wellness. Our approach balances evidence-based practices with your life values and context. Through this personalized approach for well-being and activity, we assist to:
              </p>
              <ul>
                <li>
                  <p>Develop strategies and resources</p>
                </li>
                <li>
                  <p>Overcome challenges and barriers</p>
                </li>
                <li>
                  <p>Apply knowledge, skills, and strengths</p>
                </li>
                <li>
                  <p>Build independence and success</p>
                </li>
              </ul>
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
            <br>
            <p><a href="/#services" class="bold">Read more</a> about McColl Therapy services or <a href="/#contact" class="bold">request an appointment</a></p>
					</div>
        </div>
    </div>
	

</section>


<?php get_footer(); ?>
