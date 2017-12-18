<?php /* Template Name: Wellness */ get_header();?>

<div class="back-btn main-navigation logo-container">
    <a href="/" class="mccoll-logo">
        <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/icons/logo.png" alt="McColl Therapy Logo" /> -->
        <h3>&#8678; <span>Back</span></h3>
    </a>
</div>

<section class="wellness">

    <div class="banner">
        <div class="container">
            <h1>Understanding Mental Wellness</h1>
        </div>
    </div>
    
    <div class="intro container">
        <p>Mental Wellness is important for people to live healthy, productive lives. It is a state of self-awareness and value-driven behavior that supports growth and success.</p>

        <p>Four health dimensions maintain Mental Wellness: <span class="bold physical">Physical</span>, <span class="bold cognitive">Cognitive</span>, <span class="bold emotional">Emotional</span>, and <span class="bold spiritual">Spiritual</span>.</p>
        <div class="flexbox">
            <div class="flex-half flex-item ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-physical.png" alt="Physical" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-cognitive.png" alt="Cognitive" />
            </div>
            <div class="flex-half flex-item ">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-emotional.png" alt="Physical" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/dw-spiritual.png" alt="Cognitive" />
            </div>  
        </div>

    </div>


</section>


<?php get_footer(); ?>
