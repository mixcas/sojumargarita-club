<?php
// Get theme color
$theme_color_main = IGV_get_option( '_igv_site_options', '_igv_theme_color_main');
//pr($theme_color_main); die;
$theme_color_second = IGV_get_option( '_igv_site_options', '_igv_theme_color_second');
$theme_color_third = IGV_get_option( '_igv_site_options', '_igv_theme_color_third');
$theme_color_fourth = IGV_get_option( '_igv_site_options', '_igv_theme_color_fourth');

?>
<style>
:root {
  --fourth-color: <?php echo $theme_color_fourth; ?>;
}

.background-main-color {
  background: <?php echo $theme_color_main; ?>;
}

.background-second-color {
  background: <?php echo $theme_color_second; ?>;
}

.background-third-color, .button, a.button {
  background: <?php echo $theme_color_third; ?>;
}

.background-fourth-color {
  background: <?php echo $theme_color_fourth; ?>;
}

.text-main-color, .button, a.button {
  color: <?php echo $theme_color_main; ?>;
}

.text-second-color {
  color: <?php echo $theme_color_second; ?>;
}

.text-third-color {
  color: <?php echo $theme_color_third; ?>;
}

.text-fourth-color {
  color: <?php echo $theme_color_fourth; ?>;
}

.logo-hangul svg,
.logo svg,
.social-icon svg {
  fill: <?php echo $theme_color_second; ?>;
}

.drop-shadow {
  text-shadow: 2px 2px 0 <?php echo $theme_color_fourth; ?>;
}


html {
  text: <?php echo $theme_color_second; ?>;
}

.highlight {
  background-color: <?php echo $theme_color_fourth; ?>;
}

</style>
