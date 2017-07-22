<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/post/content', get_post_format() );


				the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post' ) . '</span><span aria-hidden="true" class="nav-subtitle fa fa-arrow-circle-o-left"></span>%title</span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post' ) . '</span><span aria-hidden="true" class="nav-subtitle"></span> <span class="nav-title">%title<span class="nav-title-icon-wrapper fa  fa-arrow-circle-o-right"></span></span>',
				) );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
