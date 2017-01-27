<?php
get_header();
?>

<main id="main-content">

  <?php get_template_part('partials/latest-shows'); ?>


<?php
if( have_posts() ) {
?>
  <section class="noticias-archive padding-top-basic padding-bottom-basic">
    <h2 class="text-align-center margin-bottom-tiny font-size-h1">Noticias</h2>

    <div class="container">
      <div class="grid-row">

<?php
  while( have_posts() ) {
    the_post();
?>

        <article <?php post_class('grid-item item-s-12 content-copy'); ?> id="post-<?php the_ID(); ?>">

          <a href="<?php the_permalink() ?>"><h2 class="margin-bottom-tiny"><?php the_title(); ?></h2></a>

          <?php the_content(); ?>

        </article>

<?php
  }
?>
      </div>
    </div>
  </section>

  <?php get_template_part('partials/pagination'); ?>
<?php
}
?>

</main>

<?php
get_footer();
?>
