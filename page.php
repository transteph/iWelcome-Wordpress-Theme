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
        <div id="loader"><img id="loader-img" src="http://aito.ca/iwelcome/wp-content/uploads/2017/07/iwelcome-loader.gif" /></div>
        <main id="front-page" class="front-page" role="main">
            <?php
             $args = array( 'category__in' => 2, 3  );
              $query = new WP_Query( $args ); 
?>
                <?php if ( $query->have_posts() ) : ?>
                    <div class="grid-outer">
                        <div class="img-container first-box">
                            <div class="float-left">
                                <a href="#frontpage-content">
                                <h2>Refugee Champions</h2> 
                                </a>        
                            </div>
                            <div class="float-right"><i class="icon-house-icon"></i></div>
                        </div>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<div class="grid-cell-container">
									<!--  Image -->  
									<?php if ( has_post_thumbnail()) : ?>
										<div class="img-container">
											<a class="post-title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
												<img class="blur" src="<?php the_post_thumbnail_url(); ?>"/>
													<div class="grid-title">  <?php the_title(); ?></div>
											</a>
										</div>
										<?php else :?>
											<div class="post-no-img">
												<a class="post-title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
													<div class="grid-title">
													<?php the_title(); ?>
													</div>
												</a>
										</div>
									<?php endif; ?>
									</div>	
                        
                            <?php endwhile; ?>
                                <!-- end of the loop -->
                    </div>
                    <!-- .grid-outer -->
                    <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
            <!-- 2nd part of page -->
            <div class="section-2" >
                     <!-- 3rd part of page -->
                <div class="section-3" >
                    <?php while ( have_posts() ) : the_post(); ?> 
                            <div class="frontpage-content" id="frontpage-content">
                                <?php the_content(); ?> 
                            </div>
                             <?php endwhile; ?>
                </div>
            </div>
            
            
              <!-- 4th part of page -->
            <div class="section-4">
                
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- .site-wrapper -->
    </div>
    <!-- .wrap -->

    <?php get_footer();?>