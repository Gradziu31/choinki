	<?php get_header('home'); ?>
	
	
		<div class="lorem_ipsum_prawa_strona">
		<?php the_title(); ?>
		</div>
		
	
	<div class="miejsce_na_tekst_prawa_strona">
	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>"></a>
		</h1>
<?php the_content(); ?>
	</div>
 
<?php endwhile; ?>
 
	<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>
 
<?php else : ?>
 
	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1>Przykro nam brak postów do wyświetlenia.</h1>
	</div>
 
<?php endif; ?>

		</div>

	
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
	