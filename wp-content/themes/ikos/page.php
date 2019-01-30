<?php
/*
 * Template name: Меню
 */
?>

<?php get_header(); ?>

	


	<div class="menuList container">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php else: ?>
				<h1><?php _e( 'К сожалению, запись не найдена', 'html5blank' ); ?></h1>
		<?php endif; ?>
	</div>

	</div>


<?php get_footer(); ?>
