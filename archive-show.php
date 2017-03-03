<?php
get_header();
?>

<main id="main-content" class="margin-top-large">

<?php
if( have_posts() ) {
?>
<section id="shows-archive" class="padding-bottom-basic">
  <div class="container">
<?php

  if( have_posts() ) {
    $index = -1;
    while( have_posts() ) {
      the_post();
      $index++;


        if ($index%3 == 0) {
?>
    <div class="grid-row justify-start">
<?php
        }
?>
      <article <?php post_class('grid-item item-s-12 item-m-4 margin-bottom-small'); ?> id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink() ?>">
<?php
        $cover = get_post_meta( get_the_ID(), '_igv_cover_photo_id', 1 );
        if ($cover) {
          echo wp_get_attachment_image($cover, 'l-4');
        }
?>
        </a>
      </article>
<?php
        if ($index%3 == 2) {
?>
    </div>
<?php
        }
?>
<?php
    }
  } else {
?>
      <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
  } ?>
</section>

<?php
}
?>

  </div>
</main>

<?php
get_footer();
?>
