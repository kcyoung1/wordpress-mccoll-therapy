<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package McColl_Therapy_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="color-header"></div>

			<section class="error-404 not-found container">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Sorry, page cannot be found' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<!-- <a href="/" class="mccoll-logo"><img src="<?php bloginfo('template_directory'); ?>/assets/icons/mccoll-therapy.png" alt="McColl Therapy Logo" /></a> -->
					<p class="error-msg"><?php echo esc_html( 'It looks like nothing was found at this location.' ); ?> Click <a href="/" class="link">here</a> to go back to the front page.</p>

					<?php if ( mccoll_therapy_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php echo esc_html( 'Most Used Categories' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
