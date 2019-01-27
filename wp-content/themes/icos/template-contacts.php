<?php
/*
 * Template name: Контакты
 */
?>

<?php get_header(); ?>

		<div class="contacts container">
			<div class="contacts-item">
				<h1 class="main-title">Kontakti</h1>
				<div class="restaurant-name">
					<p>Ikos Olivia Restaurant</p>
				</div>
				<div class="restaurant-adress">
					<p>
						Krišjāņa Valdemāra 25
						<br>Rīga, Latvia</p><a href="tel:+1234567890">+371 27 33 88 66</a>
						<a href="mailto:info@ikosolivia.lv">info@ikosolivia.lv</a>
				</div>
			</div>
			<div class="contacts-item">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ikos-img.jpg">
			</div>
		</div>
		<div class="timetable container">
			<div class="timetable-title">
				<p>Timetable</p>
			</div>
			<p>
				Monday – Saturday 12.30 – 14.30, 19.30 – 22.30
				<br>Sunday 12.30 – 14.30
			</p>
		</div>
		<div class="ikos-insideImg_wrap">
			<div class="ikos-insideImg parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php echo get_template_directory_uri(); ?>/img/ikos-inside.jpg"></div>
		</div>
	</div>

<?php get_footer(); ?>
