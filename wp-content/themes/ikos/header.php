<!doctype html>
<html>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?> </title>


        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">


		<?php wp_head(); ?>



	</head>
	<body>
		<div class="wrapper">
			<div class="content">
				<div class="burger-menu"><span></span>
				</div>
				<div class="top-logobox logo-mobile">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ikosolivia_logo.svg">
					</a>
				</div>
				<div class="header-wrap">
					<div class="header-nofixed">
						<div class="header-container">

							<div class="header-fixed__left">
								<?php

			                    wp_nav_menu( array(
			                        'theme_location'  => '',
			                        'menu'            => 'Десктоп меню 1',
			                        'container'       => '',
			                        'container_class' => '',
			                        'container_id'    => '',
			                        'menu_class'      => 'main-menu',
			                        'menu_id'         => '',
			                        'echo'            => true,
			                        'fallback_cb'     => 'wp_page_menu',
			                        'before'          => '',
			                        'after'           => '',
			                        'link_before'     => '',
			                        'link_after'      => '',
			                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			                        'depth'           => 0,
			                        'walker'          => '',
			                        ) );


								?>
							</div>

							<div class="logo-desctop">
								<a href="/">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ikosolivia_logo.svg">
								</a>
							</div>

							<div class="header-fixed__right">

								<?php

			                    wp_nav_menu( array(
			                        'theme_location'  => '',
			                        'menu'            => 'Десктоп меню 2',
			                        'container'       => '',
			                        'container_class' => '',
			                        'container_id'    => '',
			                        'menu_class'      => 'main-menu',
			                        'menu_id'         => '',
			                        'echo'            => true,
			                        'fallback_cb'     => 'wp_page_menu',
			                        'before'          => '',
			                        'after'           => '',
			                        'link_before'     => '',
			                        'link_after'      => '',
			                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			                        'depth'           => 0,
			                        'walker'          => '',
			                        ) );


								?>
								<?php
								if ( qtrans_getLanguage() == 'ru' ) {
								  	?>
								  	<ul class="main-menu lang-menu">
										<li><a href="/lv">LV</a></li>
										<li><a href="/en">EN</a></li>
								  	</ul>
								  	<?php
								}
								elseif ( qtrans_getLanguage() == 'en' ) {
								  	?>
								  	<ul class="main-menu lang-menu">
										<li><a href="/lv">LV</a></li>
										<li><a href="/ru">RU</a></li>
								  	</ul>
								  	<?php
								}
								elseif ( qtrans_getLanguage() == 'lv' ) {
								 	?>
								  	<ul class="main-menu lang-menu">
										<li><a href="/ru">RU</a></li>
										<li><a href="/en">EN</a></li>
								  	</ul>
								  	<?php
								}
								?>

							</div>

						</div>
					</div>
				</div>
				<nav class="main-nav">
					<div class="close">
						<button class="close-btn" type="button"></button>
					</div>
					<?php
                    wp_nav_menu( array(
                        'theme_location'  => '',
                        'menu'            => 'Мобайл меню',
                        'container'       => '',
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'mobile-menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                        ) );
					?>
					<?php
                   		if ( qtrans_getLanguage() == 'ru' ) {
						  	?>
						  	<ul class="mobile-menu">
								<li><a href="/lv">LV</a></li>
								<li><a href="/en">EN</a></li>
						  	</ul>
						  	<?php
						}
						elseif ( qtrans_getLanguage() == 'en' ) {
						  	?>
						  	<ul class="mobile-menu">
								<li><a href="/lv">LV</a></li>
								<li><a href="/ru">RU</a></li>
						  	</ul>
						  	<?php
						}
						elseif ( qtrans_getLanguage() == 'lv' ) {
						 	?>
						  	<ul class="mobile-menu">
								<li><a href="/ru">RU</a></li>
								<li><a href="/en">EN</a></li>
						  	</ul>
						  	<?php
						}
					?>
				</nav>
