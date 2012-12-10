<?php get_header(); ?>
	<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
				<div class="news">	
					<?php the_content(); ?>
				</div>
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>
