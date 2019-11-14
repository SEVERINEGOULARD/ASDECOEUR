<!--template page infos : all posts-->
<?php 
/*
 * Template Name: Infos
 */
get_header(); ?>

<section class="cst-section">
	<p class="temp"><b>infos.php</b></p>
</section>

<div>
	<div class="">
		<?php $args = [
						'post_type' 		=> 'post', //tri par le type post (= article)
						'posts_per_page' 	=> 3, //3 articles par page
						'orderby' 			=> 'date', //tri par date
						'order'				=> 'DESC' //dans l'ordre descendant
						];

				$ma_boucle = new WP_Query($args);	//permet de faire des requetes WP_Query()
				$i = 0;
					if( $ma_boucle->have_posts() && $i < 3 ) :
						while( $ma_boucle->have_posts() ) : $ma_boucle->the_post(); ?>
					
						      	<div class="">
						      		<h2><?php the_title(); ?></h2>
						      		<p><?php the_excerpt(); ?></p>
						      		<a href="<?= get_post_permalink(); ?>" class="btn btn-primary">Lire la suite</a>
						      	</div>
					
						    
					<?php $i++; endwhile; endif; ?>

<?php get_footer(); ?>