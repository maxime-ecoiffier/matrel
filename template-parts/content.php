<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
	<section id="homepage-hero">
	<!--		FIL D'ARIANE	-->
	<div class="row container">
		<div class="row">
			<ul class="breadcrumbs">
			  <li><a href="#">Accueil</a></li>
			  <li><a href="#">Produits</a></li>
			  <li><a href="#">Raineuse-Plieuse</a></li>
			  <li><a href="#" class="active">Raineuse-Plieuse Touchline CF 375</a></li>
			</ul>
		</div>
	<!--		TITRE ARTICLE	-->
	<section class="row">
		<h1 class="large-6 columns titre-article"><?php the_title(); ?></h1>
	</section>
	<!--		DESCRIPTION	-->
	<section class="row">
		<article class="large-6 columns">
			<p><?php the_content(); ?></p>
		</article>
		<article class="large-6 columns Description">
			<p>
				<?php echo $value = get_field("description");?>
			</p>
			<div class="large-6 medium-6 columns Btn-download-container">
				<a href="<?php echo $value = get_field("catalogue");?>" target="_blank" class="download">Télécharger le catalogue</a>
			</div>
			<div class="large-6 medium-6 columns Btn-contact-container">
				<a href="<?php echo $value = get_field("contact");?>" target="_blank" class="contact">Contactez-nous</a>
			</div>
		</article>
	</section>
	<!--		CARACTERISTIQUES	-->
	<div class="caracteristiques-container">
		<section class="large-12 columns row caracteristiques-content">
			<div class="large-12 columns">
				<h2 class="titre-article">
					<?php echo $value = get_field("titre_caracteristiques");?>
				</h2>
			</div>
			<article class="large-12 columns">
				<iframe width="100%" height="auto" src="https://www.youtube.com/embed/pPLc8RMYmRg" frameborder="0" allowfullscreen></iframe>
			</article>
			<article class="large-6 medium-6 columns">
				<p>
					<?php echo $value = get_field("caracteristiques-1");?>
				</p>
			</article>

			<article class="large-6 medium-6 columns">
				<p>
					<?php echo $value = get_field("caracteristiques-2");?>
				</p>
			</article>
		</section>
		<section class="large-12 columns row">
			<div class="large-6 medium-6 columns">
				<a href="<?php echo $value = get_field("catalogue");?>" target="_blank" class="download-big">Télécharger le catalogue</a>
			</div>
			<div class="large-6 medium-6 columns">
				<a href="<?php echo $value = get_field("contact");?>" target="_blank" class="contact-big">Contact</a>
			</div>
		</section>
	</div>
	<!--		ARTICLES ASSOCIÉS	-->
	<div class="articles-associes-container">
		<section class="large-12 columns row articles-associes-content">
			<div class="large-12 columns">
				<h2 class="titre-article titre-associe">
					<?php echo $value = get_field("articles-associes");?>
				</h2>
			</div>
			<div class="large-4 medium-4 columns">
				<h5><a href="#">Raineuse C375</a></h5>
				<a href="#" class="image-article-associe">
					<div class="hover-img">
						<i class="fa fa-eye"></i>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/matrel-article-associe-1.jpg" alt="Raineuse C375"/>
					</a>
			</div>
			<div class="large-4 medium-4 columns">
				<h5><a href="#">Raineuse perforatrice Touchline CP 375</a></h5>
				<a href="#" class="image-article-associe">
					<div class="hover-img">
						<i class="fa fa-eye"></i>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/matrel-article-associe-2.jpg" alt="Raineuse perforatrice Touchline CP 375"/>
				</a>
			</div>
			<div class="large-4 medium-4 columns">
				<h5><a href="#">Raineuse perforatrice Touchline CP 375 duo</a></h5>

				<a href="#" class="image-article-associe">
					<div class="hover-img">
						<i class="fa fa-eye"></i>
					</div>
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/matrel/matrel-article-associe-3.jpg" alt="Raineuse perforatrice Touchline CP 375 duo"/>
				</a>
			</div>
		</section>
	</div>
</div>
	<section>
		<!--<?php foundationpress_entry_meta(); ?>-->
