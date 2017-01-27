<?php
get_header();
?>

<main id="main-content">
  <section id="posts">
    <div class="container">
      <div class="grid-row justify-center">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

        <article <?php post_class('grid-item item-s-12 item-m-10 content-copy'); ?> id="post-<?php the_ID(); ?>">

          <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>

          <?php the_content(); ?>

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
    </div>
  </section>


</main>

<?php
get_footer();
?>
