<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
		</div><!-- #content -->
<footer class="mastfoot" id="mastfoot">
		<div class="inner">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'iwelcome' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . iwelcome_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .inner -->
		</footer><!-- .mastfoot -->
	</div><!-- .site-content-contain -->
        <script>
            jQuery(document).ready(function( $ ) {
            // smooth nav scrolling
                // only run this script if window size is wide

				$('a[href*="#"]:not([href="#"])').click(function () {
					if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
						var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
						if (target.length) {
							$('html, body').animate({
								scrollTop: target.offset().top
							}, 1000);
							return false;
						}
					}
				});
        });
        </script>
        

<?php wp_footer(); ?>
<?php if (is_page()): ?>
            <!--home page custom JS-->
            <script type="text/javascript">
                 jQuery(document).ready(function( $ ) {
                     
                     $(window).load(function(){
                        $('#loader').delay(1500).slideUp(1000);
                        $('#front-page').delay(1500).fadeIn(2000);
                        $('#mastfoot').delay(2000).fadeIn(2000);
                    });
                     
                 });
            </script>
        <?php endif; ?>
</body>
</html>
