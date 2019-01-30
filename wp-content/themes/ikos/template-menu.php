<?php
/*
 * Template name: Меню
 */
?>

<?php get_header(); ?>

	<div class="main-banner menu-banner parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php the_field('баннер_меню'); ?>">
		<p>
			<?php the_field('текст-баннер-меню'); ?>
		</p>
		<h2 class="main-title">
			<?php the_field('заголовок-баннер-меню'); ?>
		</h2>
	</div>


	<div class="menuList container">
		<?php 
		$categories = get_categories( array(
			'taxonomy'     => 'category',
			'type'         => 'post',
			'child_of'     => 0,
			'parent'       => '',
			'orderby'      => 'name',
			'order'        => 'ASC',
			'hide_empty'   => 1,
			'hierarchical' => 1,
			'exclude'      => '',
			'include'      => '',
			'number'       => 0,
			'pad_counts'   => false,
		) );

		if( $categories ){
			foreach( $categories as $cat ){
				// Данные в объекте $cat
				if ($cat->cat_ID != 1) {
					?>
					<div class="menuList-title">
						<p>
							<?php
							 echo $cat->name;
							?>
						</p>
					</div>
					<?php
						$args = array(
							'post_type' => 'menu-type', 
							'cat' => $cat->cat_ID
							
						);
					?>

					<?php $wp_query = new WP_Query($args); ?>
					<?php while ( $wp_query->have_posts() ) { ?>
					<?php $wp_query->the_post(); ?>

					

					<div class="menuList-item menuList-mobShow">
						<div class="menuList-item_name">
							<span><?php the_title();?></span>
							<p>
								<?php the_field('короткое_описание_блюда'); ?>
							</p>
						</div>
						<div class="menuList-item_price">
							<span>
								<?php the_field('цена_блюда'); ?>
							</span>
						</div>
					</div>
					<?php }?>
					<?php wp_reset_query(); ?>
					<?php
				}
				
				// $cat->term_id
				// $cat->name (Рубрика 1)
				// $cat->slug (rubrika-1)
				// $cat->term_group (0)
				// $cat->term_taxonomy_id (4)
				// $cat->taxonomy (category)
				// $cat->description (Текст описания)
				// $cat->parent (0)
				// $cat->count (14)
				// $cat->object_id (2743)
				// $cat->cat_ID (4)
				// $cat->category_count (14)
				// $cat->category_description (Текст описания)
				// $cat->cat_name (Рубрика 1)
				// $cat->category_nicename (rubrika-1)
				// $cat->category_parent (0)

			}
		}

		?>
	</div>

	</div>
	<div class="gallery-wrap">
		<div class="swiper-container">
			<div class="slider-line"></div>
			<div class="swiper-wrapper">
				<?php echo do_shortcode('[nggallery id="'.get_field('gallery-menu').'" template="gallery-3"]'); 	?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
