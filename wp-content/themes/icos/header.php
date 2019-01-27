<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.6/css/swiper.min.css">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>



	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">
			<div class="content">
				<div class="burger-menu"><span></span>
				</div>
				<div class="top-logobox">
					<a href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/ikosolivia_logo.svg">
					</a>
				</div>
				<div class="header-fixed">
					<div class="header-container">
						<div class="header-fixed__left">
							<?php
								wp_nav_menu( array(
									'menu_class'=>'main-menu',
								    'theme_location'=>'desctopMenu'
								) );
							?>
						</div>
						<div class="header-fixed__right">
							<?php
								wp_nav_menu( array(
									'menu_class'=>'main-menu',
								    'theme_location'=>'desctopMenuConact'
								) );
							?>
							<?php
								wp_nav_menu( array(
									'menu_class'=>'main-menu lang-menu',
								    'theme_location'=>'langMenu'
								) );
							?>
						</div>
					</div>
				</div>
				<nav class="main-nav">
					<div class="close">
						<button class="close-btn" type="button"></button>
					</div>
					<?php
						wp_nav_menu( array(
							'menu_class'=>'mobile-menu',
							'theme_location'=>'mobileMenu'
						) );
					?>
					<?php
						wp_nav_menu( array(
							'menu_class'=>'mobile-menu',
							'theme_location'=>'langMenu'
						) );
					?>
				</nav>
