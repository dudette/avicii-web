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
				<source src="<?php echo get_template_directory_uri(); ?>/images/avicii.mp4" alt="smoke video avicii" type="video/mp4">
			</video>
		</div>
		<header class="header" id="myHeader">
			<div class="container">
				<a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logotyp.svg" alt="Avicii logotyp" width="109"></a>
				<nav class="header__menu">
					<ul>
						<li><a href="#lineup">Lineup</a></li>
						<li><a href="#foundation">Foundation</a></li>
						<li><a class="button" href="#services">Buy tickets</a></li>
						<ul>
				</nav>
			</div>
		</header>

<svg  class="one" width="200" height="200" viewBox="0 0 603 272" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 57.1 (83088) - https://sketch.com -->
    <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon class="icon" id="Path" fill="#979797" points="0 272 273 0 273 272"></polygon>
		<polygon class="icon" id="Path-2" fill="#979797" points="333 0 333 272 603 0"></polygon>
		<style>
        .one {
			position: fixed;
			top: 33%;
			left: 5%;
			z-index:-1;
        }
    </style>
    </g>
</svg>
<svg  class="two" width="500" height="500" viewBox="0 0 603 272" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 57.1 (83088) - https://sketch.com -->
    <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon class="icon" id="Path" fill="#979797" points="0 272 273 0 273 272"></polygon>
		<polygon class="icon" id="Path-2" fill="#979797" points="333 0 333 272 603 0"></polygon>
		<style>
        .two {
			position: fixed;
			top: 12%;
			left: 40%;
			z-index:-1;
        }
    </style>
    </g>
</svg>
<svg  class="three" width="300" height="300" viewBox="0 0 603 272" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 57.1 (83088) - https://sketch.com -->
    <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon class="icon" id="Path" fill="#979797" points="0 272 273 0 273 272"></polygon>
		<polygon class="icon" id="Path-2" fill="#979797" points="333 0 333 272 603 0"></polygon>
		<style>
        .three {
			position: fixed;
			top: 20%;
			right: 10%;
			z-index:-1;
        }
    </style>
    </g>
</svg>
<svg  class="four" width="150" height="150" viewBox="0 0 603 272" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 57.1 (83088) - https://sketch.com -->
    <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon class="icon" id="Path" fill="#979797" points="0 272 273 0 273 272"></polygon>
		<polygon class="icon" id="Path-2" fill="#979797" points="333 0 333 272 603 0"></polygon>
		<style>
		.four {
			position: fixed;
			bottom: 12%;
			left: 10%;
			z-index:-1;
        }
    </style>
    </g>
</svg>
<svg  class="five" width="200" height="200" viewBox="0 0 603 272" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <!-- Generator: Sketch 57.1 (83088) - https://sketch.com -->
    <g id="Artboard" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon class="icon" id="Path" fill="#979797" points="0 272 273 0 273 272"></polygon>
		<polygon class="icon" id="Path-2" fill="#979797" points="333 0 333 272 603 0"></polygon>
		<style>
        .five {
			position: fixed;
			bottom: 12%;
			right: 10%;
			z-index:-1;
        }
    </style>
    </g>
</svg>
<section class="cover">
<img src="<?php echo get_template_directory_uri(); ?>/images/avicii_portrait3.png" alt="Avicii portrait">
</section>
		<section class="section section__top">
			<div class="container">
				<img class="top_img" src="<?php echo get_template_directory_uri(); ?>/images/avicii_tribute_concert.png" alt="Avicii tribute concert" width="350">
			</div>
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