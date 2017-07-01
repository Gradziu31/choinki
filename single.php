	<?php get_header(); ?>

	<div class="lorem_ipsum_prawa_strona">
		<?php the_category(); ?>
		</div>
	
	
	<div class="miejsce_na_tekst_prawa_strona">
	
	
	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
	<div <?php post_class(); ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</div>
 
<?php endwhile; ?>
  
<?php else : ?>
 
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1>Przykro nam brak postów do wyświetlenia.</h1>
	</div>
 
<?php endif; ?>
	





		</div>

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
	
	
	
	
	
	
	