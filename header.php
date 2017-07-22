<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js no-svg" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:updated_time" content="<?=time()?>" />
		<meta attribute="author" content="Stephanie Tran, Amnesty International Toronto Organization" />
		<meta attribute="description" content="iWelcome Refugees - an Amnesty International campaign welcoming refugee and migrants.">
		<meta attribute="keywords" content="AITO, Amnesty, Amnesty International, Toronto, human rights, refugee rights"
		/>

		<meta property="og:url" content="http://aito.ca/iWelcome" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="iWelcome Refugees" />
		<meta property="og:description" content="iWelcome Refugees - an Amnesty International campaign welcoming refugee and migrants."
		/>
		<meta property="og:image" content="http://aito.ca/reelawareness/wp-content/uploads/aito-reel-awareness-film-festival-banner.png"
		/>
		<!-- sharing thumbnail image -->
		<link rel="image_src" href="http://aito.ca/iwelcome/wp-content/uploads/2017/07/screenshot-1.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">
		
			<header class="masthead clearfix" role="banner">

				<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

				<?php if ( has_nav_menu( 'top' ) ) : ?>
				<div class="navigation-top">
					<div class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div>
					<!-- .wrap -->
				</div>
				<!-- .navigation-top -->
				<?php endif; ?>

			</header>
			<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

				<div class="site-content-contain">
					<div id="content" class="site-content">