<!DOCTYPE html>
<html>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title('&raquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<!--<link rel="icon" href="<?= get_stylesheet_directory_uri() ?>/images/logo.png">-->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/main.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-146933727-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-146933727-2');
	</script>
	<!-- Facebook Pixel Code -->
	<script>
		! function(f, b, e, v, n, t, s) {
			if (f.fbq) return;
			n = f.fbq = function() {
				n.callMethod ?
					n.callMethod.apply(n, arguments) : n.queue.push(arguments)
			};
			if (!f._fbq) f._fbq = n;
			n.push = n;
			n.loaded = !0;
			n.version = '2.0';
			n.queue = [];
			t = b.createElement(e);
			t.async = !0;
			t.src = v;
			s = b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t, s)
		}(window, document, 'script',
			'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '2157837101184733');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2157837101184733&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class('no-js'); ?>>
	<script>
		document.body.className = document.body.className.replace(" no-js", " js");
	</script>
	<!--[if lt IE 9]>
    <p>You are using an outdated browser. <a href="http://browsehappy.com/" class="alert-link">Upgrade your browser today</a></p>
  <![endif]-->
	<?php if (is_page('start')) : ?>

		<div class="fullscreen-bg">
			<video autoplay muted loop poster="<?php echo get_template_directory_uri(); ?>/images/video_poster.png" class="fullscreen-bg__video">
				<source src="<?php echo get_template_directory_uri(); ?>/images/smoke.mp4" alt="smoke video avicii" type="video/mp4">
			</video>
		</div>
		<header class="header" id="myHeader">
			<div class="container">
				<a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logotyp.svg" alt="Avicii logotyp" width="109"></a>
				<nav class="header__menu">
					<ul>
						<li><a class="ripplelink" href="#lineup">Lineup</a></li>
						<li><a class="ripplelink" href="#foundation">Foundation</a></li>
						<li><a class="button rippleink" href="http://www.ticketmaster.se/event/557215" target="_blank">Buy tickets</a></li>
						<ul>
				</nav>

				<!-- Simulate a smartphone / tablet -->
				<div class="mobile-container">

					<!-- Top Navigation Menu -->
					<div class="mobile__nav">
						<a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logotyp.svg" alt="Avicii logotyp" width="85"></a>
						<a href="javascript:void(0);" class="mobile__icon" onclick="mobileFunction()">
							<span class="menu-mobile__lines"></span>
						</a>
						<div id="myLinks">
							<a href="#lineup">Lineup</a>
							<a href="#foundation">Foundation</a>
							<a class="button" href="http://www.ticketmaster.se/event/557215" target="_blank">Buy tickets</a>
						</div>
					</div>
					<!-- End smartphone / tablet look -->

					<script>
						//Menu mobile
						function mobileFunction() {
							var x = document.getElementById("myLinks");
							if (x.style.display === "block") {
								x.style.display = "none";
							} else {
								x.style.display = "block";
							}
						}
					</script>
				</div>
			</div>
		</header>
		<section class="cover">
			<img src="<?php echo get_template_directory_uri(); ?>/images/siluette.png" alt="Avicii siluette">
		</section>
		<section class="section section__top">
			<div class="container">
				<img class="top_img" src="<?php echo get_template_directory_uri(); ?>/images/avicii_tribute_concert.png" alt="Avicii tribute concert" width="350">
			</div>
		</section>
		<section>

			<section class="section section__announcement">
				<div class="container">
					<img class="top_img" src="<?php echo get_template_directory_uri(); ?>/images/announcement_date.png" alt="Avicii tribute concert date" width="500">
				</div>
			</section>
		</section>
		<section class="section section__countdown">
			<div class="container">
				<div id="clockdiv" class="timer">
					<div class="time_item">
						<span class="days"></span>
						<div class="smalltext">Days</div>
					</div>
					<div class="time_item">
						<span class="hours"></span>
						<div class="smalltext">Hours</div>
					</div>
					<div class="time_item">
						<span class="minutes"></span>
						<div class="smalltext">Minutes</div>
					</div>
					<div class="time_item">
						<span class="seconds"></span>
						<div class="smalltext">Seconds</div>
					</div>
				</div>
			</div>
		</section>


	<?php else : ?>
		<header class="header">
			<div class="container">
				<a class="header__logo header__logo--large" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logotyp.svg" alt="Avicii logotyp" width="109"></a>
				<a class="header__logo header__logo--small" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logotyp.svg" alt="Avicii logotyp" width="177"></a>
			</div>
		</header>
	<?php endif; ?>