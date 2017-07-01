<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Sprawdza czy jest to strona wyszukiwania jesli tak to ma jej nie indexować !-->
	<?php if (is_search()):?>
		<meta name="robots" content="noindex, nofollow" />
	<?php endif; ?>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="tutaj,słowa,kluczowe,strony">
	<!-- Podłączenie style.css !-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<!-- Responsywność !-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- jQuery !-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Animacje !-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animacje.css" type="text/css">
	<!-- Reset styli !-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css">
	<!-- Bootstrap JS !-->
	<script type="text/javascript" SRC="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<!-- Bootstrap css !-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  rel="stylesheet">
	<!-- Czcionki !-->
	<link href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" rel='stylesheet' type='text/css'>

	<!-- animacja zdjęć
	warunek dodawania zdjęć!

	<a class="example-image-link" href="http://lokeshdhakar.com/projects/lightbox2/images/image-1.jpg" data-lightbox="example-1"><img class="example-image" src="http://lokeshdhakar.com/projects/lightbox2/images/thumb-1.jpg" alt="image-1" /></a>
	!-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lightbox.min.css">



	<!-- pomaga w indexowaniu bo rozsyła dalej !-->
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
	<?php wp_head(); ?>
</head>

<!-- pomaga wskazać czy jest zalogowany czy nie co wyświetla które klasy itd. !-->
<body <?php body_class()?>>
	<div class="container">
	<!-- Logo !-->
	<div class="logo_lewa_strona">
		<p class="nazwa_firmy"><b>RADEX</b></p>
		<p class="opis_dzialalnosci">sztuczne choinki</p>
		<img src="<?php echo get_template_directory_uri(); ?>/images/logo_radex_choinki_sztuczne.png" alt="..."></img>
	</div>

	<!-- Menu boczne !-->
	<div class="menu_gorne_prawa_strona">
		<nav>
			<?php wp_nav_menu(array(
				'theme_location' => 'mejemenu'
			));
			?>
			<ul>
				<?php echo do_shortcode('[google-translator]'); ?>
			</ul>
		</nav>
	</div>

	<!-- Slider !-->
	<div class="slider_prawa_strona">
		<div id="slider" class="carousel slide" data-ride="carousel">
			<!-- WSKAŹNIKI KROPKI -->
			<ol class="carousel-indicators">
				<li data-target="#slider" data-slide-to="0" class="active"></li>
				<li data-target="#slider" data-slide-to="1"></li>
				<li data-target="#slider" data-slide-to="2"></li>
			</ol>
			<!-- ZDJĘCIA W SLIDERZE -->
			<div class="carousel-inner" role="listbox">
				<!-- Pierwsze -->
					<div class="item active">
					<img src="<?php echo get_template_directory_uri(); ?>/images/photo1.jpg" class="img-responsive" alt="...">
					<div class="carousel-caption"></div>
					</div>
				<!-- Drugie -->
					<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/photo2.jpg" class="img-responsive" alt="...">
					<div class="carousel-caption"></div>
					</div>
				<!-- Trzecie -->
					<div class="item">
					<img src="<?php echo get_template_directory_uri(); ?>/images/photo3.jpg" class="img-responsive" alt="...">
					<div class="carousel-caption"></div>
					</div>
			</div>
			<!-- STRZAŁKI PRZEWIJANIA -->
				<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Lewa</span>
				</a>
				<a class="right carousel-control" href="#slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Prawa</span>
				</a>
		</div>
	</div>


	<div class="menu_boczne_lewa_strona">
						<div class="menu_z_lewej_napis"><b>MENU:</b>
								<?php echo do_shortcode('[google-translator]'); ?>
						</div>
						<ul>
								<?php wp_nav_menu(array(
									'theme_location' => 'Menuboczne'
								));
								?>
						</ul>
  </div>
