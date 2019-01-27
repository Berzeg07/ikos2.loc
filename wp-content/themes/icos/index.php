<?php get_header(); ?>
<!-- <!DOCTYPE html> -->
<!-- <html lang="ru-RU">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body> -->
	<!-- <div class="wrapper">
		<div class="content">
			<div class="burger-menu"><span></span>
			</div>
			<div class="top-logobox">
				<a href="/">
					<img src="img/ikosolivia_logo.svg">
				</a>
			</div>
			<div class="header-fixed">
				<div class="header-container">
					<div class="header-fixed__left">
						<ul class="main-menu">
							<li><a href="#">Restorāns</a>
							</li>
							<li><a href="#">Ēdienkarte</a>
							</li>
							<li><a class="modal-show" href="#">Rezervēšana</a>
							</li>
						</ul>
					</div>
					<div class="header-fixed__right">
						<ul class="main-menu">
							<li><a href="#">Kontakti</a>
							</li>
						</ul>
						<ul class="main-menu lang-menu">
							<li><a href="#">LV</a>
							</li>
							<li><a href="#">RU</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<nav class="main-nav">
				<div class="close">
					<button class="close-btn" type="button"></button>
				</div>
				<ul class="mobile-menu">
					<li><a href="#">Restorāns</a>
					</li>
					<li><a href="#">Ēdienkarte</a>
					</li>
					<li><a class="modal-show" href="#">Rezervēšana</a>
					</li>
					<li><a href="#">Kontakti</a>
					</li>
				</ul>
				<ul class="mobile-menu">
					<li><a href="#">LV</a>
					</li>
					<li><a href="#">RU</a>
					</li>
				</ul>
			</nav> -->
			<div class="main-banner parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php echo get_template_directory_uri(); ?>/img/header-bg.jpg">
				<h2 class="main-title">Mediterranean <br>cuisine with Nordic taste accents</h2>
			</div>
			<div class="service service-01 container">
				<div class="service-item service-text">
					<p>Laipni lūdzam Vidusjūras restorānā pašā Rīgas centrā - Ikos Olivia. Atrodas unikālajā jūgendstila rajonā, kas iekļauts UNESCO pasaules mantojuma sarakstā. Šeit, gremdējoties Vidusjūras saulainajā atmosfērā un baudot burvīgu mūziku, un unikālus mākslas
						un interjera dizaina elementus, jūs aizbēgsiet no burzmas un pilsētas ritma ikdienas rūpēm.</p>
				</div>
				<div class="service-item service-img">
					<div class="service-item__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/service-1.1.jpg">
					</div>
					<div class="service-item__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/service-1.2.jpg">
					</div>
				</div>
				<div class="service-item service-text">
					<p>Restorāns Ikos Olivia apvieno labākās Vidusjūras reģiona valstu gastronomiskās tradīcijas un priecēs viesus un gardēžus ar neparastu itāļu, grieķu, franču un spāņu virtuves daudzveidību, pievienojot ēdieniem skandināvisku pieskaņu un papildinot to
						ar oriģinālu vīnu kolekciju no dažādiem reģioniem.</p>
					<div class="service-link"><a href="#">Skatit ēdienkarte</a>
					</div>
				</div>
			</div>
			<div class="service-02_wrap">
				<div class="service-02 parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php echo get_template_directory_uri(); ?>/img/service-2.jpg"></div>
			</div>
			<div class="service service-03 container">
				<div class="service-item">
					<div class="service-text">
						<p>Uzmanīgi sagatavotie oriģinālie Vidusjūras virtuves ēdieni, neparastās garšas kombinācijas, vienmēr vērīga un kvalitatīva apkalpošana, silta, draudzīga atmosfēra ar autentiskiem Vidusjūras dekora elementiem, siltām krāsām un dabiskiem materiāliem
							no koka - viss rada vienreizēju pievilcību, romantisku garastāvokli un īpašu siltuma un harmonijas sajūtu.</p>
						<div class="service-link"><a href="#">Rezervēt galdiņu</a>
						</div>
					</div>
				</div>
				<div class="service-item service-img">
					<div class="service-item__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/service-3-1.jpg">
					</div>
					<div class="service-item__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/service-3-2.jpg">
					</div>
				</div>
			</div>
			<div class="bars parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bars.jpg">
				<h2 class="main-title">Bars </h2>
			</div>
			<div class="service service-04 container">
				<div class="service-item service-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet tristique ex, a auctor nunc iaculis in. Donec et posuere nibh. Vivamus elit turpis, congue id nibh pharetra, semper eleifend nibh. In sed fringilla nulla. Cras ornare molestie ligula,
						fermentum ultrices massa placerat non. Cras vel volutpat libero.</p>
				</div>
				<div class="service-item service-img">
					<div class="service-item__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/service-4-1.jpg">
					</div>
					<div class="service-item__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/service-4-2.jpg">
					</div>
				</div>
				<div class="service-item service-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet tristique ex, a auctor nunc iaculis in. Donec et posuere nibh. Vivamus elit turpis, congue id nibh pharetra, semper eleifend nibh. In sed fringilla nulla. Cras ornare molestie ligula,
						fermentum ultrices massa placerat non. Cras vel volutpat libero.</p>
				</div>
			</div>
			<div class="our-team parallax-window" data-parallax="scroll" data-speed="0.7" data-image-src="<?php echo get_template_directory_uri(); ?>/img/team.jpg">
				<h2 class="main-title">Komanda    </h2>
			</div>
			<div class="service service-05 container">
				<div class="service-item service-text">
					<p>Mūsu pavāru komanda, ko vada šefpavārs Aleksandrs Kardašs, veido unikālus ēdienus, prasmīgi apvienojot tradicionālo Vidusjūras un Skandināvijas virtuvi.</p>
				</div>
				<div class="service-item service-img">
					<div class="service-item__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/test.jpg">
					</div>
					<div class="service-item__img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/test.jpg">
					</div>
				</div>
				<div class="service-item service-text">
					<p>Pateicoties talantīgā šefpavāra bagātīgajai pieredzei, viņš strādājis dažādās Eiropas valstīs un Michelin restorānos Itālijā, Francijā un Spānijā, kā arī guvis vērtīgu pieredzi Skandināvijas valstīs, ir iespējams panākt radīto ēdienu pārsteidzošu
						un unikālu garšu.</p>
					<p>Mūsu šefpavāram ir īpaša attieksme pret produktu un dažādu garšvielu izvēli. Sagatavojot maltītes, tiek izmantoti augstas kvalitātes vietējie sezonālie gardumi, aizjūras delikateses, svaigas zivis, jūras veltes, gaļa, pašcepta maize.</p>
					<div class="service-link"><a href="#">Rezervēt galdiņu</a>
					</div>
				</div>
			</div>
			<div class="gallery-wrap">
				<h2 class="gallery-title">Ikos Olivia ir vieta, kur piedzimst<br> dzīvesprieks un garšu bauda! </h2>
				<div class="swiper-container">
					<div class="slider-line"></div>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slide.jpg">
						</div>
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slide.jpg">
						</div>
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slide.jpg">
						</div>
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slide.jpg">
						</div>
						<div class="swiper-slide">
							<img src="<?php echo get_template_directory_uri(); ?>/img/slide.jpg">
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="footer-wrap">
			<div class="footer">
				<div class="footer-copyright">&copy; 2018 Ikos Olivia Restaurant</div>
				<div class="footer-social">
					<a class="footer-social_fb" href="#">
						<img src="img/fb.svg">
					</a>
					<a class="footer-social_inst" href="#">
						<img src="img/inst.svg">
					</a>
				</div>
			</div>
			<div class="overlay"></div>
			<div class="reservation-modal">
				<form class="form-reserv" action="#" method="post">
					<div class="modal-close">
						<button class="close-modal" type="button">
							<svg>
								<use xlink:href="img/sprites.svg#close-modal"></use>
							</svg>
						</button>
					</div>
					<div class="reservation-modal_title">
						<h3>Galdiņa rezervēšana</h3>
						<p>In case of lack of availability, please contact us: +371 27 33 88 66</p>
					</div>
					<div class="select-block">
						<div class="select-block_item">
							<div class="select-title">Datums</div>
							<select>
								<option value="1">01.01.2019</option>
								<option value="2">02.01.2019</option>
							</select>
						</div>
						<div class="select-block_item">
							<div class="select-title">Laiks</div>
							<select>
								<option value="1">20:00</option>
								<option value="2">21:00</option>
							</select>
						</div>
						<div class="select-block_item">
							<div class="select-title">Viesu skaits</div>
							<select>
								<option value="1">1</option>
								<option value="2">2</option>
							</select>
						</div>
					</div>
					<div class="input-block">
						<label class="inp_first">
							<input type="text" placeholder="Jūsu vārds" name="inp-1">
						</label>
						<label class="inp_second">
							<input type="text" placeholder="Jūsu tālrunis" name="inp-2">
						</label>
					</div>
					<div class="submit-btn">
						<button class="resevation-btn" type="submit">Rezervēt</button>
					</div>
				</form>
			</div>
			<div class="modal-thanks">
				<div class="modal-thanks_inner">
					<button class="close-modal" type="button">
						<svg>
							<use xlink:href="img/sprites.svg#close-modal"></use>
						</svg>
					</button>
					<p>Nam iaculis, ante ac aliquet pellentesque,
						<br>libero nulla fermentum</p>
				</div>
			</div>

			<script src="libs/jquery/jquery.min.js"></script>
			<script src="libs/parallax/parallax.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/js/swiper.min.js"></script>
			<script src="libs/selectric/jquery.selectric.min.js"></script>
			<script src="js/common.js"></script>
		</div>
	</div>
</body>

</html> -->


<?php get_footer(); ?>
