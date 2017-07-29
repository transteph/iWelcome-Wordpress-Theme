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
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
		<link rel="profile" href="http://gmpg.org/xfn/11">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700" rel="stylesheet"><link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/b0e730e1-218c-4476-8d8b-be9d8367d52a.css"/>
		<?php wp_head(); ?>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>

		<body <?php body_class(); ?>>
		<div id="page" class="site">
		
		<header class="masthead clearfix" role="banner">
				<h1><a href="http://aito.ca/iwelcome/"><span>iWelcome Refugees <span class="icon-house-icon"></span></span>  </a></h1>
		</header>

				<div class="site-content-contain">
					<div id="content" class="site-content">