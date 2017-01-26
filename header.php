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

    <header id="header" class="u-visuallyhidden padding-top-tiny padding-right-basic yellow-shadow">
      <div class="container">
        <div class="grid-row">

          <div class="grid-item item-m-3">
            <h1 class="u-visuallyhidden"><?php bloginfo('name'); ?></h1>
            <div class="logo">
              <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/logo_abc.svg'); ?>
              <div class="logo-shadow"> <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/logo_abc.svg'); ?> </div>
              <div class="logo-hangul"> <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/logo_hangul.svg'); ?> </div>
            </div>
          </div>

          <div class="grid-item item-m-12">
          </div>
        </div>
      </div>
    </header>
