<?php /* Template Name: Orden Random */ ?>
<?php get_header(); 
$loop = new WP_Query(array('orderby' =>'rand')); ?>
	<?php if (have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<a class="list" href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo get_post_meta($post->ID, 'persona', true); ?> dixit"> 
				<?php the_excerpt(); ?>
			</a>						
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
<?php get_footer(); ?>
