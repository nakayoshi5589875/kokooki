<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;900&display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="p-header">
		<h1 class="p-header__logo">
			<a href="<?php echo home_url("/"); ?>">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="ココロおき楽">
				</picture>
			</a>
		</h1>
		<div class="js-nav p-header__main">
			<nav class="p-header__nav">
				<a href="<?php echo home_url("/"); ?>/staff/" class="p-header__link">スタッフ紹介</a>
				<a href="<?php echo home_url("/"); ?>/case/" class="p-header__link">ご利用事例</a>
				<a href="<?php echo home_url("/"); ?>/news/" class="p-header__link">おき楽ニュース</a>
			</nav>
			<a href="/#contact" class="p-header__contact">問い合わせ・ご相談［無料］</a>
			<a href="https://www.instagram.com/kokorookiraku/" target="_blank" class="p-header__sns">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/icon_ig.webp" type="image/webp" />
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon_ig.png" alt="Instagtam">
				</picture>
			</a>
		</div>
		<div class="js-headButton js-nav p-header__button" data-target="js-nav">
			<span class="p-header__button__bar"></span><span class="p-header__button__bar"></span><span class="p-header__button__bar"></span>
			<p class="p-header__button__text">MENU</p>
		</div>
	</header>

