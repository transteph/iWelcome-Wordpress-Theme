<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<main id="main" class="site-main" role="main">
<div class="post" id="post-<?php the_ID(); ?>">
		<div class="inner cover">
		
<ul class="front-page-posts">
		<?php
             $args = array( 'category__in' => 2, 3  );
              $query = new WP_Query( $args ); 
?>

	<?php if ( $query->have_posts() ) : ?>

		<div class="col-md-12">
				<div class="row">
					<div class="grid-outer">
						
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<li>
								<div class="overlay">
									<!--  Image -->  
									<?php if ( has_post_thumbnail()) : ?>
										
											<a class="post-title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
												<img src="<?php the_post_thumbnail_url(); ?>"/>
													<span class="post-title">  <?php the_title(); ?></span>
											</a>

										<?php else :?>
											<a class="post-title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
												<?php the_title(); ?>
										</a>
									<?php endif; ?>
									</div>	
							</li>
					

						<?php endwhile; ?><!-- end of the loop -->
						<!-- last box -->
						<li>
							<h3>iWelcome Refugees and Migrants</h3>
						</li>
					</div><!-- .grid-outer -->
				</div><!-- .row -->
		</div><!-- .col-md-12 -->
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</ul>
</div><!-- .inner .cover -->
</main><!-- #main -->
</div>	<!-- #primary -->
</div><!-- .wrap -->

	<?php get_footer();