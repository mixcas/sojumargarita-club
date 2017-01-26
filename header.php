<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<?php
get_template_part('partials/globie');
get_template_part('partials/seo');
?>

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/dist/favicon.png">
  <link rel="shortcut" href="<?php bloginfo('stylesheet_directory'); ?>/img/dist/favicon.ico">
  <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/dist/favicon-touch.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/img/dist/favicon.png">

  <?php if (is_singular() && pings_open(get_queried_object())) { ?>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php } ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 9]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->

  <section id="main-container" class="padding-bottom-large">

    <header id="header" class="padding-top-small padding-bottom-small yellow-shadow">
      <div class="container">
        <div class="grid-row">

          <div class="grid-item item-m-3">
            <h1 class="u-visuallyhidden"><?php bloginfo('name'); ?></h1>
            <div class="logo">
              <a href="<?php echo home_url(); ?>"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/logo_horizontal.svg'); ?></a>
            </div>
          </div>

          <div class="grid-item item-m-6">
            <a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
            <a href="<?php echo home_url('/episodios'); ?>">Episodios</a>
          </div>

          <div class="grid-item item-m-3">
            <a class="social-icon" href="https://www.youtube.com/channel/UCXxiO5-SXm-1or2dcB-4qXQ" target="_blank" rel="nofollow"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/youtube_logo.svg'); ?></a>
            <a class="social-icon" href="http://facebook.com/sojumargaritaclub/" target="_blank" rel="nofollow"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/fb_logo.svg'); ?></a>
            <a class="social-icon" href="https://open.spotify.com/user/sojumargaritaclub/playlist/2yPxW7XUH6jhNXgqYZQWKY" target="_blank" rel="nofollow"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/spotify_logo.svg'); ?></a>
          </div>
        </div>
      </div>
    </header>
