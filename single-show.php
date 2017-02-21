<?php
get_header();
?>

<main id="main-content">
  <section id="posts">
    <div class="container">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
    $playlist_id = get_post_meta($post->ID, '_igv_playlist_id', true);
?>

        <article <?php post_class('grid-row justify-center margin-bottom-basic text-second-color'); ?> id="post-<?php the_ID(); ?>">
          <div class="grid-item item-s-6 text-align-center">
            <a href="<?php the_permalink() ?>"><h1 class="margin-bottom-small"><?php the_title(); ?></h1></a>
          </div>

<?php
      if ($playlist_id) {
?>
          <div class="grid-item item-s-10">
            <div class="u-video-embed-container margin-bottom-small">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=<?php echo $playlist_id; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
<?php
      }
?>

          <div class="grid-item item-s-8 content-copy">
            <?php the_content(); ?>
          </div>

        </article>

<?php
  }
} else {
?>
        <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

      <div class="grid-row justify-center">
        <div class="grid-item item-s-6">
          <?php get_template_part('partials/pagination'); ?>
        </div>
      </div>
    </div>
  </section>


</main>

<?php
get_footer();
?>
