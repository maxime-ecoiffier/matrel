<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<header id="masthead" class="site-header" role="banner">
			<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
			  <button class="menu-icon" type="button" data-toggle></button>
			  <div class="title-bar-title"></div>
			</div>

			<section class="pre-header row">
			  <ul>
				  <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/matrel-logo.jpg"/></a></li>
				  <li><a href="#">Équipements et systèmes <br/>
					  pour finition et la présentation de documents</a></li>
			  </ul>
			</section>

			<div class="top-bar menu-principal" id="example-menu">
				<div class="row">
					<nav class="top-bar-left">
					    <ul class="dropdown menu" data-dropdown-menu>
					      <li><a href="#">ACCUEIL</a></li>
					      <li><a href="#">QUI SOMMES-NOUS</a></li>
					      <li><a href="#">PRODUITS</a></li>
						  <li><a href="#">CONTACT</a></li>
						  <li><a href="#">DOCUMENTATIONS</a></li>
					    </ul>
					</nav>
					<div class="top-bar-right">
					    <ul class="menu">
					      <li><a href="#" class="download">Télécharger notre catalogue</a></li>
					    </ul>
				  	</div>
			  	</div>
			</div>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
