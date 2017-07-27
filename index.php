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
        <main id="main" class="front-page" role="main">
            <?php
             $args = array( 'category__in' => 2, 3  );
              $query = new WP_Query( $args ); 
?>
                <?php if ( $query->have_posts() ) : ?>
                    <div class="grid-outer">
                        <div class="img-container first-box">
                            <div class="float-left">
                                <h2 class="intro-head">Canadian Refugee Champions</h2> </div>
                            <div class="float-right"></div>
                        </div>
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="grid-cell-container">
                                <!--  Image -->
                                <?php if ( has_post_thumbnail()) : ?>
                                    <div class="img-container"> <a class="post-title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
												<img class="blur" src="<?php the_post_thumbnail_url(); ?>"/>
													<div class="grid-title">  <?php the_title(); ?></div>
											</a> </div>
                                    <?php else :?>
                                        <div class="post-no-img">
                                            <a class="post-title-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
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
        </main>
      
        <!-- #main -->
    </div>
<a onclick="window.open('https://www.gravityscan.com/verify/e8a53799ff883b1a43df02e88226922299d3e0c14a83c39f9adedbed557b394e','gravityscan-verified-secure-site','width=760,height=470,left=160,top=170');return false;" href="https://www.gravityscan.com/verify/e8a53799ff883b1a43df02e88226922299d3e0c14a83c39f9adedbed557b394e" target="_blank" rel="noopener noreferrer"><img src="https://badges.gravityscan.com/badges/aito.ca-e8a53799ff883b1a43df02e88226922299d3e0c14a83c39f9adedbed557b394e" alt="Gravityscan Badge" width="117" height="67"></a>
    <!-- .site-wrapper -->
    </div>
    <!-- .wrap -->
    <?php get_footer();