<?php
get_header();
?>

<main id="main-content background-second-color">
  <section id="posts">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

    <article <?php post_class('margin-bottom-basic text-second-color'); ?> id="post-<?php the_ID(); ?>">
      <div class="cover-photo grid-row justify-center align-items-end margin-bottom-basic" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        <div class="grid-item item-s-12 item-l-9 text-align-center">
          <h1 class="margin-top-tiny margin-bottom-basic drop-shadow font-larger"><?php the_title(); ?></h1>
        </div>
      </div>

      <div class="grid-row justify-center container">
        <div class="grid-item item-s-12 item-l-9 content-copy text-main-color">
          <?php the_content(); ?>
        </div>
      </div>

    </article>

<?php
  }
} else {
?>
      <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>

    </div>
    <div class="grid-row justify-center">
      <div class="grid-item item-s-6">
        <?php get_template_part('partials/pagination'); ?>
      </div>
    </div>
  </section>


</main>

<?php
get_footer();
?>
