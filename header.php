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
		<meta property="og:image" content="http://aito.ca/iwelcome/wp-content/uploads/2017/07/screenshot-1.png"
		/>
		<!-- sharing thumbnail image -->
		<link rel="image_src" href="http://aito.ca/iwelcome/wp-content/uploads/2017/07/screenshot-1.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>

		<body <?php body_class(); ?>>
            <?php if (is_page()): ?>
               <div id="loader"><img id="loader-img" src="http://aito.ca/iwelcome/wp-content/uploads/2017/07/iwelcome-loader.gif" /></div>
            <?php endif; ?>
		<div id="page" class="site">
		
