<section id="latest-shows" class="padding-top-tiny padding-bottom-basic">
  <div class="container">
<?php

$shows = new WP_Query( array(
  'post_type' => 'show',
  'orderby' => 'meta_value_num',
  'meta_key' => '_igv_episode_number',
));

if( $shows->have_posts() ) {
  $index = -1;
  while( $shows->have_posts() ) {
    $shows->the_post();
    $index++;

    if ($index == 0) {
?>
    <article id="last-show" class="margin-bottom-small">
      <div id="cover-container" class="grid-row">
        <div <?php post_class('grid-item item-s-12 item-m-6'); ?> id="post-<?php the_ID(); ?>">
          <span class="u-pointer play-playlist"><?php the_post_thumbnail(); ?></span>
        </div>
        <div <?php post_class('grid-item item-s-12 item-m-6'); ?> id="post-<?php the_ID(); ?>">
          <h2 class="margin-bottom-tiny"><?php the_title(); ?></h2>
<?php
      the_content();
      $tracklist = get_post_meta($post->ID, '_igv_tracklist');

      if ($tracklist) {
          echo apply_filters('the_content', $tracklist[0]);
      }
?>
          </div>
        </div>
<?php
      $playlist_id = get_post_meta($post->ID, '_igv_playlist_id', true);

      if ($playlist_id) {
?>
      <div id="playlist-container" class"grid-row">
        <div class="grid-item item-s-12">
          <div class="u-video-embed-container">
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
    <div class="grid-row">
<?php
      }
?>
      <article <?php post_class('grid-item item-m-4 item-s-12'); ?> id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('l-4'); ?></a>
      </article>
<?php
      if ($index == 3) {
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
