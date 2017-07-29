<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header(); ?>

<div class="site-wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="post" role="main">

			<?php
			/* Start the Loop */ while ( have_posts() ) : the_post(); ?>

			<!--  title -->
			<div class="post-title-div">
				<h2 class="post-title-text"><?php the_title(); ?></h2>
			</div>
            
            <!-- Header image div -->
    <?php 
        $image = get_field('main-photo');
        if( !empty($image) ): ?>
            <div class="huge-img" style="background-image: url('<?php echo $image['url']; ?>'); background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;"></div>
     <?php endif; ?>   
            
            <!-- content body -->
            <div class="content-body">
                <?php the_content(); ?>
            </div>
            
            
			<div class="center">
			<?php edit_post_link('Edit this entry','','.'); ?>
			</div>

		<?php
				the_post_navigation( array(
					'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post' ) . '</span><span aria-hidden="true" class="nav-subtitle fa fa-arrow-circle-o-left"></span><span class="nav-title">   %title</span></span>',
					'next_text' => '<span class="screen-reader-text">' . __( 'Next Post' ) . '</span><span aria-hidden="true" class="nav-subtitle"></span> <span class="nav-title">%title   </span><span class="nav-title-icon-wrapper fa  fa-arrow-circle-o-right"></span>',
				) );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
