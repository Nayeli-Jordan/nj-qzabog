<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="es" class="tmptnj-html">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); ?></title>
		<!-- Sets initial viewport load and disables zooming -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- SEO -->
		<meta name="keywords" content="">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Meta robots -->
		<meta name="robots" content="index, follow" />
		<meta name="googlebot" content="index, follow" />

		<!-- Favicon -->
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo THEMEPATH; ?>favicon/favicon-16x16.png" sizes="16x16" />

		<!-- Facebook, Twitter metas -->
		<meta property="og:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo site_url(); ?>" />
		<meta property="og:image" content="<?php echo THEMEPATH; ?>images/share.jpg">
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:description" content="<?php bloginfo('description'); ?>" />
		<meta name="twitter:image" content="<?php echo THEMEPATH; ?>images/share.jpg" />
		<meta name="twitter:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:image:width" content="210" />
		<meta property="og:image:height" content="110" />
		<meta property="fb:app_id" content="" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@" />

		<!-- Google+ -->
		<link rel="publisher" href="https://plus.google.com/+">

		<!-- Compatibility -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">

		<!-- Google font(s) -->
		<link href="https://fonts.googleapis.com/css?family=Lato:900|Open+Sans&display=swap" rel="stylesheet">

		<!--Style-->
		<link type="text/css" rel="stylesheet" href="<?php echo THEMEPATH; ?>stylesheets/styles.css" media="screen,projection, print" />

		<!-- Canonical URL -->
		<link rel="canonical" href="<?php echo site_url(); ?>" />

		<!-- Sitemap Google Verify -->
		<meta name="google-site-verification" content="" />

		<!-- Noscript -->
		<noscript>Tu navegador no soporta JavaScript!</noscript>
		<?php wp_head(); ?>
	</head>
	<body>
		<?php 
			$current_user = wp_get_current_user();
			$current_user_id = $current_user->ID;
		?>
		<?php if (!is_singular( 'tarjeta' )) { ?>			
			<header class="js-header">		
				<div class="container">
					<a href="<?php echo SITEURL; ?>" class="tmptnj-logo">
						<h1 class="hide"><?php bloginfo('name'); ?></h1>
						<img src="<?php echo THEMEPATH; ?>images/identidad/logo.png" alt="">
					</a>
					<?php if ($current_user_id == 1) { ?>
						<div class="tmptnj-nav">
							<div class="tmptnj-nav-desktop">
								<?php if (is_home()) { ?>
									<ul>
										<li><p id="nosotros" class="item-scroll">Nosotros</p></li>
										<li><p id="servicios" class="item-scroll">Servicios</p></li>
										<li><p id="clientes" class="item-scroll">Clientes</p></li>
										<li><p id="contacto" class="item-scroll">Contacto</p></li>				
									</ul>									
								<?php } else {
									wp_nav_menu( array( 
										'theme_location' => 'top_menu' 
									) );
								} ?>				
							</div>
							<div class="social-links "><!-- wow fadeIn -->
								<?php include (TEMPLATEPATH . '/template/contact-links.php'); ?>
							</div>
							<em id="open-nav" class="icon-menu"></em><!--  wow slideInRight -->
							<nav>
								<em class="close-nav icon-close hide-on-small"></em>
								<?php wp_nav_menu( array( 
									'theme_location' => 'top_menu' 
								) ); ?>
								<em class="close-nav icon-close hide-on-sm-and-up"></em>				
							</nav>
						</div>
					<?php } ?>	
				</div>
			</header>
		<?php } ?>

		<div class="[ main-body ]">