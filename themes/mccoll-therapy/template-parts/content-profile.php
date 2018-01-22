<?php
/**
 * Template part for displaying single posts.
 *
 * @package McColl_Therapy_Theme
 */

?>

<section id="team" class="profile-wrapper container">
    <!-- <h2>Profile</h2> -->
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
    </ul><!-- profile-list -->

</section><!-- .profile-wrapper -->