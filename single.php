<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header(); ?>
        <header class="masthead-single" role="banner">
            <a href="http://aito.ca/iwelcome">
	           <img src="http://aito.ca/iwelcome/wp-content/uploads/2017/07/amnesty-logo-bw.png" alt="Amnesty logo."/>
                <h1>Refugee Champions<i class="icon-house-icon"></i></h1>
            </a>
		</header>

				<div class="site-content-contain">
					<div id="content" class="site-content">
                        
<div class="site-wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="post" role="main">

			<?php
			/* Start the Loop */ while ( have_posts() ) : the_post(); ?>
            
            <div class="before-content">
               
                <!--top photo-->
                <?php 
                    $image = get_field('main-photo');
                    if( !empty($image) ): ?>
                <div id="photo-contain">
                    <div class="frame">
                        <img src="<?php echo $image['url']; ?>"/>
                    </div>
                 </div>
                <!--quote-->
                <?php 
                    $quote = get_field('quote');
                echo  '<div class="quote-box"><blockquote><br/>' . $quote . '</blockquote>
                        </div>' ;
                ?>
                
                
                <?php else: ?>
                        <i id="no-pic" class="icon-house-icon"></i>
                        <!--quote-->
                        <?php 
                            $quote = get_field('quote');
                        echo  '<div class="quote-box" id="only-quote"><blockquote><br/>' . $quote . '</blockquote>
                                </div>' ;
                        ?>
                
                 <?php endif; ?>   
                
               
            </div>
            
            <!-- content body -->
            <div class="content-body">
                
                <h2 style="margin: 0px;"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
            
        <div id="after-content">
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
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
