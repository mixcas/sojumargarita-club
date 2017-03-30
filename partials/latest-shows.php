<section id="latest-shows" class="background-main-color">
<?php

$shows = new WP_Query( array(
  'post_type' => 'show',
  'orderby' => 'meta_value_num',
  'meta_key' => '_igv_episode_number',
  'posts_per_page'   => 5,
  'post_status'      => 'publish',
));

if( $shows->have_posts() ) {
  $index = -1;
  while( $shows->have_posts() ) {
    $shows->the_post();
    $index++;

    if ($index == 0) {
      $playlist_id = get_post_meta($post->ID, '_igv_playlist_id', true);
      $playlist_link = get_post_meta($post->ID, '_igv_playlist_link', true);
?>
    <article id="last-show" class="margin-bottom-small play-playlist u-pointer">
      <div id="cover-container" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        <div class="container">
        <div class="grid-row justify-center">
          <div class="grid-item item-s-8 margin-top-mid margin-bottom-mid">
            <div class="logo">
                <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/logo_abc.svg'); ?>
              <div class="logo-shadow"> <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/logo_abc.svg'); ?> </div>
              <div class="logo-hangul"> <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/logo_hangul.svg'); ?> </div>
            </div>
<?php

      if ($playlist_id) {
?>
             <a id="play-button" class="button u-pointer mobile-hide">Play</a>
<?php
      }
      if ($playlist_link) {
?>
             <a id="play-link" class="button helvetica medium-hide desktop-hide" href="<?php echo $playlist_link; ?>">Play</a>
<?php
      }
?>
            </div>
          </div>
        </div>
        </div>
      </div>
<?php

      if ($playlist_id) {
?>
      <div id="playlist-container" class"grid-row">
        <div class="grid-item item-s-12">
          <div class="u-embed-container">
            <iframe id="playlist-embed" width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=<?php echo $playlist_id; ?>" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
<?php
      }
?>
    </article>

<?php
    } else {

      if ($index == 1) {
?>
  <div class="container">
    <div class="grid-row justify-center">
<?php
      }
?>
      <article <?php post_class('grid-item item-s-12 item-m-3 margin-bottom-small'); ?> id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink() ?>">
<?php
      $cover = get_post_meta( get_the_ID(), '_igv_cover_photo_id', 1 );
      if ($cover) {
        echo wp_get_attachment_image($cover, 'l-3');
      }
?>
        </a>
      </article>
<?php
      if ($index == 4) {
?>
    </div>
<?php
      }
?>
<?php
    }
  }
} else {
?>
      <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>
  </div>
</section>
