<?php
/*
 * Template name: Главная
 */
?>
<?php get_header(); ?>
			<div class="main-banner parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php the_field('картинка_на_главном_баннере'); ?>">
				<h2 class="main-title"><?php the_field('заголовок_на_главном_баннере'); ?></h2>

			</div>
			<div class="service service-01 container">
				<div class="service-item service-text">
					<p>
						<?php the_field('текст-1'); ?>
					</p>
				</div>
				<div class="service-item service-img">
					<div class="service-item__img">
						<img src="<?php the_field('изображение-1'); ?>">
					</div>
					<div class="service-item__img">
						<img src="<?php the_field('изображение-2'); ?>">
					</div>
				</div>
				<div class="service-item service-text">
					<p>
						<?php the_field('текст-2'); ?>
					</p>
					<div class="service-link">
						<a href="#">
							<?php the_field('ссылка-1'); ?>
						</a>
					</div>
				</div>
			</div>
			<div class="service-02_wrap">
				<div class="service-02 parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php the_field('параллакс_изображение'); ?>"></div>
			</div>
			<div class="service service-03 container">
				<div class="service-item">
					<div class="service-text">
						<p>
							<!-- Uzmanīgi sagatavotie oriģinālie Vidusjūras virtuves ēdieni, neparastās garšas kombinācijas, vienmēr vērīga un kvalitatīva apkalpošana, silta, draudzīga atmosfēra ar autentiskiem Vidusjūras dekora elementiem, siltām krāsām un dabiskiem materiāliem
							no koka - viss rada vienreizēju pievilcību, romantisku garastāvokli un īpašu siltuma un harmonijas sajūtu. -->
							<?php the_field('блок-2-текст'); ?>
						</p>
						<div class="service-link">
							<a href="#">
								<!-- Rezervēt galdiņu -->
								<?php the_field('блок-2-ссылка'); ?>
							</a>
						</div>
					</div>
				</div>
				<div class="service-item service-img">
					<div class="service-item__img">
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/service-3-1.jpg"> -->
						<img src="<?php the_field('блок-2-картинка'); ?>">
					</div>
					<div class="service-item__img">
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/service-3-2.jpg"> -->
						<img src="<?php the_field('блок-2-картинка-2'); ?>">
					</div>
				</div>
			</div>
			<div class="bars parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php the_field('баннер_бара'); ?>">
				<h2 class="main-title"><?php the_field('текст-баннер-бар'); ?></h2>
			</div>
			<div class="service service-04 container">
				<div class="service-item service-text">
					<p>
						<!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet tristique ex, a auctor nunc iaculis in. Donec et posuere nibh. Vivamus elit turpis, congue id nibh pharetra, semper eleifend nibh. In sed fringilla nulla. Cras ornare molestie ligula,
						fermentum ultrices massa placerat non. Cras vel volutpat libero. -->
						<?php the_field('текст-бар-1'); ?>
					</p>
				</div>
				<div class="service-item service-img">
					<div class="service-item__img">
						<img src="<?php the_field('изображение-1-бар'); ?>">
					</div>
					<div class="service-item__img">
						<img src="<?php the_field('изображение-2-бар'); ?>">
					</div>
				</div>
				<div class="service-item service-text">
					<p>
						<!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet tristique ex, a auctor nunc iaculis in. Donec et posuere nibh. Vivamus elit turpis, congue id nibh pharetra, semper eleifend nibh. In sed fringilla nulla. Cras ornare molestie ligula,
						fermentum ultrices massa placerat non. Cras vel volutpat libero. -->
						<?php the_field('текст-2-бар'); ?>
					</p>
				</div>
			</div>
			<div class="our-team parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php the_field('баннер-команда'); ?>">
				<h2 class="main-title"><?php the_field('текст-баннер-команда'); ?></h2>
			</div>
			<div class="service service-05 container">
				<div class="service-item service-text">
					<p>
						<!-- Mūsu pavāru komanda, ko vada šefpavārs Aleksandrs Kardašs, veido unikālus ēdienus, prasmīgi apvienojot tradicionālo Vidusjūras un Skandināvijas virtuvi. -->
						<?php the_field('текст-1-команда'); ?>
					</p>
				</div>
				<div class="service-item service-img">
					<div class="service-item__img">
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/test.jpg"> -->
						<img src="<?php the_field('картинка-1-команда'); ?>">
					</div>
					<div class="service-item__img">
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/test.jpg"> -->
						<img src="<?php the_field('картинка-2-команда'); ?>">
					</div>
				</div>
				<div class="service-item service-text">
					<p>
						<!-- Pateicoties talantīgā šefpavāra bagātīgajai pieredzei, viņš strādājis dažādās Eiropas valstīs un Michelin restorānos Itālijā, Francijā un Spānijā, kā arī guvis vērtīgu pieredzi Skandināvijas valstīs, ir iespējams panākt radīto ēdienu pārsteidzošu
						un unikālu garšu. -->
						<?php the_field('текст-2-команда'); ?>
					</p>
					<p>
						<!-- Mūsu šefpavāram ir īpaša attieksme pret produktu un dažādu garšvielu izvēli. Sagatavojot maltītes, tiek izmantoti augstas kvalitātes vietējie sezonālie gardumi, aizjūras delikateses, svaigas zivis, jūras veltes, gaļa, pašcepta maize. -->
						<?php the_field('текст-3-команда'); ?>
					</p>
					<div class="service-link">
						<a href="#">
							<!-- Rezervēt galdiņu -->
							<?php the_field('ссылка-команда'); ?>
						</a>
					</div>
				</div>
			</div>

			<div class="gallery-wrap">
				<h2 class="gallery-title">Ikos Olivia ir vieta, kur piedzimst<br> dzīvesprieks un garšu bauda! </h2>
				<div class="swiper-container">
					<div class="slider-line"></div>
					<div class="swiper-wrapper">
						<?php echo do_shortcode('[nggallery id="'.get_field('gallery-main').'" template="gallery-1"]'); ?>
					</div>
				</div>
			</div>
		</div>

<?php get_footer(); ?>
