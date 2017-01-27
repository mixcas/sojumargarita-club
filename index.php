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

        <article <?php post_class('grid-row justify-center margin-bottom-basic'); ?> id="post-<?php the_ID(); ?>">
          <div class="grid-item item-s-6 text-align-center">
            <a href="<?php the_permalink() ?>"><h2 class="margin-bottom-small font-size-h1"><?php the_title(); ?></h2></a>
          </div>

          <div class="grid-item item-s-8 content-copy">
            <?php the_post_thumbnail() ?>

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
