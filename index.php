<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<a class="" href="<?php the_permalink() ?>" rel="bookmark" title="Ir a <?php the_title(); ?>"> 
				<?php the_excerpt(); ?>
			</a>						
		<?php endwhile; ?>
	<?php else : ?>
