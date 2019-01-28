<?php
/*
 * Template name: Контакты
 */
?>

<?php get_header(); ?>

		<div class="contacts container">
			<div class="contacts-item">
				<h1 class="main-title"><?php the_field('заголовок'); ?></h1>
				<div class="restaurant-name">
					<p><?php the_field('название_ресторана'); ?></p>
				</div>
				<div class="restaurant-adress">
					<p>
						<?php the_field('адрес'); ?>
					</p>
					<a href="tel:+1234567890">
						<?php the_field('телефон'); ?>
					</a>
					<a href="mailto:info@ikosolivia.lv">
						<?php the_field('почта'); ?>
					</a>
				</div>
			</div>
			<div class="contacts-item">
				<img src="<?php the_field('Фотография'); ?>">
			</div>
		</div>
		<div class="timetable container">
			<div class="timetable-title">
				<p>
					<?php the_field('заголовок_для_времени_работы'); ?>
				</p>
			</div>
			<p>
				<?php the_field('время-работы'); ?>
			</p>
		</div>
		<div class="ikos-insideImg_wrap">
			<div class="ikos-insideImg parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php the_field('баннер'); ?>"></div>
		</div>
	</div>

<?php get_footer(); ?>
