<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--méta générée par WP :-->
	<meta charset="<?php bloginfo('charset'); ?>">
	<!--fonction native WP qui indique qu'ici il va injecter le css : on doit ensuite lui indiquer où le trouver / idem footer :-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
	<!-- WP le génère tout seul (voir dans functions) : <title></title> -->
	
</head>

<body>

	<header class="cst-header">
		<div class="cst-header-left">
			<img src="<?php echo get_template_directory_uri(); ?>/img/plaque.jpg" alt="classement 2*" class="cst-img-header">
		</div>
		<div class="cst-header-right">
			<div class="cst-back-header-right">
				<h1>Appartement l'As De Coeur</h1>
				<h2>Location Mont-Dore</h2>
			</div>
		</div>
	</header>
	<nav>
		<!--display menu-->
		<?php wp_nav_menu(	['menu' => 'Menu Principal',
							'theme_location' => 'main_menu',
							'container' => 'div',
							'container_class' => 'cst-cont-menu',
							'menu_class' => 'cst-menu']
						); ?>
	</nav>

	<?php get_sidebar(); ?>


