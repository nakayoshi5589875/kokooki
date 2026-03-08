<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<title>
<?php
if ( is_singular() ) {
echo get_the_title(). " | " .get_bloginfo('name');
} elseif ( is_post_type_archive() ) {
	$post_type = get_post_type();
	$obj = get_post_type_object( $post_type );
	echo $obj->labels->singular_name. " | " .get_bloginfo('name');
} elseif ( is_archive() ) {
    the_archive_title(). " | " .get_bloginfo('name');
} else {
  echo get_bloginfo('name');
}
?>
</title>
<meta name="description" content="<?php get_bloginfo('description'); ?>">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="icon" href="/favicon.png" sizes="32x32" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/assets/libs/splide/js/splide.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/libs/splide/css/splide.min.css">
<script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/rest.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

<?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <header class="js-header header">
    <a href="<?php echo home_url("/"); ?>/" class="header__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="ココロおき楽 児童発達支援・放課後等デイサービス・保育所等訪問支援"></a>
    <nav class="header__nav">
      <a href="<?php echo get_post_type_archive_link( 'staff' ); ?>" class="header__nav__link">スタッフ紹介</a>
      <a href="<?php echo get_post_type_archive_link( 'news' ); ?>" class="header__nav__link">ブログ</a>
      <a href="<?php echo home_url("/"); ?>/#contact" class="header__nav__contact">問い合わせ・ご相談［無料］</a>
      <a href="https://www.instagram.com/kokorookiraku.daycare.teruya?igsh=b3Ftems0cTJxMmIx&utm_source=qr" target="_blank" class="header__nav__sns"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_instagram.svg" alt="Instagramへのリンク"></a>
    </nav>
    <a href="#" class="js-toggle header__nav__btn" data-target="js-header">
      <span class="header__nav__btn__bar"></span>
      <span class="header__nav__btn__bar"></span>
      <span class="header__nav__btn__bar"></span>
      <span class="header__nav__btn__text">MENU</span>
    </a>
  </header>