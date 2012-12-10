<?php get_header(); ?>
	 
	<?php $args = array( 
		'order' =>'ASC', 
		'orderby' =>'date',
		);
	$loop = new WP_Query( $args ); ?>

	<?php if (have_posts()) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<a class="list" href="<?php the_permalink() ?>" rel="bookmark" title="<?php echo get_post_meta($post->ID, 'persona', true); ?> dixit"> 
				<?php the_excerpt(); ?>
			</a>						
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	<br>... 
<?php get_footer(); ?>
