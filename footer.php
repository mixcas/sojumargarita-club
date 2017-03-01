  <footer id="footer" class="background-main-color padding-top-small padding-bottom-small text-second-color">
    <div class="container">
      <div class="grid-row">
        <div class="logo grid-item item-s-12:w
 margin-bottom-small">
          <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/logo.svg'); ?>
        </div>
      </div>
      <div class="grid-row">
        <div class="grid-item item-s-12 item-m-9">
          <p><?php bloginfo('description'); ?></p>
        </div>
        <div class="grid-item item-s-12 item-m-3 text-align-right">
          <a class="social-icon" href="https://www.youtube.com/channel/UCXxiO5-SXm-1or2dcB-4qXQ" target="_blank" rel="nofollow"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/youtube_logo.svg'); ?></a>
          <a class="social-icon" href="http://facebook.com/sojumargaritaclub/" target="_blank" rel="nofollow"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/fb_logo.svg'); ?></a>
          <a class="social-icon" href="https://open.spotify.com/user/sojumargaritaclub/playlist/2yPxW7XUH6jhNXgqYZQWKY" target="_blank" rel="nofollow"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/spotify_logo.svg'); ?></a>
          <a class="social-icon" href="https://soundcloud.com/sojumargaritaclub" target="_blank" rel="nofollow"><?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/soundcloud_logo.svg'); ?></a>
        </div>
      <div>
    </div>
  </footer>

</section>

<?php
  get_template_part('partials/schema-org');
  get_template_part('partials/scripts');
  get_template_part('partials/theme-style');
?>

</body>
</html>
