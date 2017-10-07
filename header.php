
	<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js no-svg" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">

	<head>
        
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta property="og:updated_time" content="<?=time()?>" >
		<meta attribute="author" content="Stephanie Tran, Amnesty International Toronto Organization">
		<meta attribute="description" content="Refugee Champions - an Amnesty International campaign profiling refugees who have made a new home in Canada as well as all those who welcome refugees to Canada.">
		<meta attribute="keywords" content="AITO, Amnesty, Amnesty International, Toronto, human rights, refugee rights, Canada">

		<meta property="og:url" content="https://iwelcome.aito.ca">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Refugee Champions">
		<meta property="og:description" content="Refugee Champions - an Amnesty International campaign profiling refugees who have made a new home in Canada as well as all those who welcome refugees to Canada.">
		<meta property="og:image" content="http://aito.ca/iwelcome/wp-content/uploads/2017/07/screenshot-1.png">
		<!-- sharing thumbnail image -->
		<link rel="image_src" href="http://aito.ca/iwelcome/wp-content/uploads/2017/07/screenshot-1.png">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
		<script  type="text/javascript">
	
		window.onload = function () {

	var parallaxBox = document.getElementById ( 'front-page' );
	var c1left = document.getElementById ( 'l1' ).offsetLeft,
	c1top = document.getElementById ( 'l1' ).offsetTop,
	c2left = document.getElementById ( 'l2' ).offsetLeft,
	c2top = document.getElementById ( 'l2' ).offsetTop;

	
	parallaxBox.onmousemove = function ( event ) {
		event = event || window.event;
		var x = event.clientX - parallaxBox.offsetLeft,
		y = event.clientY - parallaxBox.offsetTop;
		
		mouseParallax ( 'l1', c1left, c1top, x, y, 5 );
		mouseParallax ( 'l2', c2left, c2top, x, y, 15 );
	}
	
}

function mouseParallax ( id, left, top, mouseX, mouseY, speed ) {
	var obj = document.getElementById ( id );
	var parentObj = obj.parentNode,
	containerWidth = parseInt( parentObj.offsetWidth ),
	containerHeight = parseInt( parentObj.offsetHeight );
	obj.style.left = left - ( ( ( mouseX - ( parseInt( obj.offsetWidth ) / 2 + left ) ) / containerWidth ) * speed ) + 'px';
	obj.style.top = top - ( ( ( mouseY - ( parseInt( obj.offsetHeight ) / 2 + top ) ) / containerHeight ) * speed ) + 'px';
}
	</script>
	</head>

	
		<body <?php body_class(); ?>>
            <?php if (is_page()): ?>
               <div id="loader"><img id="loader-img" src="http://aito.ca/iwelcome/wp-content/uploads/2017/07/iwelcome-loader.gif" /><br>
                    <p style="text-align:center; color:#3a3a3a; letter-spacing:2px; ">LOADING</p>
            
            </div>
            <?php endif; ?>
		<div id="page" class="site">
		
