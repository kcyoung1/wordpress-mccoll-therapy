<?php /* Template Name: Wellness */ get_header();?>

<div class="back-btn main-navigation logo-container">
    <a href="/" class="mccoll-logo">
        <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.png" alt="McColl Therapy Logo" /> -->
        <h3>&#8678; <span>Back</span></h3>
    </a>
</div>

<section class="wellness">

    <div class="banner">
			<h1>Understanding Mental Wellness</h1>
    </div>
    
		<div class="section-spacing">
			<h2>Health Dimensions</h2> 
			<div class="container">
				<!-- <p><span class="bold physical">Physical Wellness</span> entails attending to our bodies’ needs and maintaining a healthy lifestyle. Developing this area protects us from chronic health issues and reduces imbalance across other dimensions of wellness.</p>
				<p><span class="bold cognitive">Cognitive Wellness</span> entails self-awareness, open-mindedness, and effective problem solving. Developing this area enables us to live productively and overcome challenges.</p>
				<p><span class="bold emotional">Emotional Wellness</span> entails awareness, expression and acceptance of our feelings. Developing this area makes us more in-tune when handling difficult emotions and fostering connections with others.</p>
				<p><span class="bold spiritual">Spiritual Wellness</span> entails making decisions and acting in line with personal values and beliefs. Developing this area allows us to nurture self-esteem and to pursue rewarding experiences in life.</p> -->
				<p>The health dimensions are connected internally, with the human nervous system, and externally, with communities and workplaces. Injury, illness, or adversity that impact one or more dimension’s ability to support the system lead to imbalances. The other dimensions will work to manage the imbalance and continue supporting Mental Wellness.</p>
        <p>When the other dimensions are unable to compensate effectively, further imbalances may occur and in turn disrupt Mental Wellness.</p>
			</div>
			<?php get_template_part( 'template-parts/content', 'wellness' ); ?>		
		</div>

		
    <div class="container">

        <div class="section-spacing">
            <h2>Mental Health Concerns</h2>
            <div class="flexbox">
                <div class="flex-half flex-item">
                    <p>Much like when a cup overflows, Mental Wellness is disrupted when imbalances accumulate and can no longer be handled effectively. The resulting concerns may create more imbalances and further impact quality of life.</p>
                </div>
                <div class="flex-half flex-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wellness-diagram.png" alt="Wellness Diagram" />
                </div>
            </div>

            <p>The concerns people may experience vary significantly, as do the strategies to address imbalances and restore Mental Wellness.</p>
        </div>

        <div class="section-spacing">
					<h2>Addressing Imbalances</h2>
					<div class="flexbox">
						<div class="flex-half flex-item">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dimensions.png" alt="Wellness Diagram" />
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
