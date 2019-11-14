<!--template page accueil-->
<?php 
/*
 * Template Name: Accueil
 */
get_header(); ?>



<!--Affichage contenu de la page accueil-->
<div class="container page-accueil">
	<div class="row">
		<?php if( have_posts() ) : ?>
			<?php while( have_posts() ) : the_post(); ?>
				<div class="col-12 col-md-6 text-center">
					<?php the_post_thumbnail('medium'/*, ['class' => 'w-100']on peut ajouter ici des classes sous forme de tableau*/); ?>
				</div>
				<div class="col-12 col-md-6">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		
	</div>
</div>

<?php get_footer(); ?>