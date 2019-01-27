<?php
/*
 * Template name: Меню
 */
?>

<?php get_header(); ?>

	<div class="main-banner menu-banner parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php echo get_template_directory_uri(); ?>/img/menu-banner.jpg">
		<p>Bagātas gastronomiskās tradīcijas</p>
		<h2 class="main-title">Ēdienkarte</h2>
	</div>
	<div class="menuList container">
		<div class="menuList-title">
			<p>Uzkodas</p>
		</div>
		<div class="menuList-item menuList-mobShow">
			<div class="menuList-item_name"><span>Siera plate ar lāceņu džemu, 2 personām</span>
			</div>
			<div class="menuList-item_price"><span>€12,50</span>
			</div>
		</div>
		<div class="menuList-item menuList-mobShow">
			<div class="menuList-item_name"><span>Burrata siers</span>
				<p>ar mango krēmu, dažādas sēklas, tomāti, ķirbju eļļa</p>
			</div>
			<div class="menuList-item_price"><span>€9,45</span>
			</div>
		</div>
		<div class="menuList-item">
			<div class="menuList-item_name"><span>Ceviche izlase</span>
				<p>Zobenzivs, jūras veltes, avokado un batātes krēms ar aromātisku mērci</p>
			</div>
			<div class="menuList-item_price"><span>€12,45</span>
			</div>
		</div>
		<div class="menuList-item">
			<div class="menuList-item_name"><span>Tuna Colada</span>
				<p>Viegli apcepts tuncis, Pina Colada krēms, rieksti, tomāti, žāvētas jūras aļģes, Matsuhisa mērce</p>
			</div>
			<div class="menuList-item_price"><span>€10,90</span>
			</div>
		</div>
		<div class="menuList-item">
			<div class="menuList-item_name"><span>Nicoise</span>
				<p>
					Sparģeļi, krāsnī cepts kartupelis, avokado, lēni gatavota ola, medus mērcepasniedzam ar karsti kūpinātu Norvēģijas fjordu foreli</p>
			</div>
			<div class="menuList-item_price"><span>€9,95</span>
			</div>
		</div>
		<div class="menuList-title">
			<p>Karstas uzkodas</p>
		</div>
		<div class="menuList-item menuList-mobShow">
			<div class="menuList-item_name"><span>Jūras simfonija</span>
				<p>Sviestā cepts tuncis un jūras veltes, citrusa mērce un ceptu banānu Aioli mērce</p>
			</div>
			<div class="menuList-item_price"><span>€16,50</span>
			</div>
		</div>
		<div class="menuList-item menuList-mobShow">
			<div class="menuList-item_name"><span>Sviestā cepta krabja falangas centrālā daļa</span>
				<p>pasniegta ar krabju čaulu novārījumu, sparģeļiem un ābolu biezen</p>
			</div>
			<div class="menuList-item_price"><span>€23,50</span>
			</div>
		</div>
		<div class="menuList-item">
			<div class="menuList-item_name"><span>Mīdijas, sautētas Neapoles mērcē </span>
				<p>ar kūpinātu Pancetta un saldo krējumu</p>
			</div>
			<div class="menuList-item_price"><span>€14,55</span>
			</div>
		</div>
		<div class="menuList-item">
			<div class="menuList-item_name"><span>Liellopa gaļas tataki Vidusjūras stilā (Josper)</span>
				<p>Dezināts puravs, antrekots, Romanesco mērce, Parmezāns</p>
			</div>
			<div class="menuList-item_price"><span>€16,75</span>
			</div>
		</div>
	</div>
	<div class="gallery-wrap">
		<div class="swiper-container">
			<div class="slider-line"></div>
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu-slide.jpg">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu-slide.jpg">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu-slide.jpg">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu-slide.jpg">
				</div>
				<div class="swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/img/menu-slide.jpg">
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
