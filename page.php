<?php

get_header(); ?>
<div id="front">
<header class="masthead clearfix" role="banner">
    <a href="http://iwelcome.aito.ca">
        <h1>iWelcome Refugees <i class="icon-house-icon"></i></h1>
            <img src="http://iwelcome.aito.ca/wp-content/uploads/2018/05/YELLOW_RGB_Web_Use.jpg" alt="Amnesty logo."/>
    </a>
		</header>

				<div class="site-content-contain">
					<div id="content" class="site-content">
    <div class="site-wrapper home">
        <main id="front-page" class="front-page" role="main">
			
			<div id="topBox">
				<div class="layer" id="l1">
						<div class="header-text headerOne">REFUGEE CHAMPIONS <i class="icon-house-icon"></i></div>
					</div>
					<div class="layer" id="l2">
						<div class="header-text headerTwo">REFUGEE CHAMPIONS <i class="icon-house-icon"></i></div>
					</div>
			</div>
			<div class="section-0">
            
            </div>
            <?php
             $args = array( 'category__in' => 2, 3  );
              $query = new WP_Query( $args ); 
?>
                <?php if ( $query->have_posts() ) : ?>
                    <div class="grid-outer">
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
                </div>
            </div>
            
            
              <!-- 4th part of page -->
            <div class="section-4">
                            <div id="side-img-div">
                                <?php 
                                    $image = get_field('side_image');
                                    echo '<img src="' . $image . '"/>' ;
                                ?>
                            </div>
                <div id="section-4-container">
                    <?php echo get_field('bottom_section'); ?>
                </div>
            </div>
            <?php endwhile; ?>
        </main>
        <!-- #main -->
    </div>
    <!-- .site-wrapper -->
    </div>
    <!-- .wrap -->

    <?php get_footer();?>
 </div>