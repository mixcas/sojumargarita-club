<?php
get_header();
?>

<main id="main-content">
<?php
if( have_posts() ) {
?>
  <section id="noticias" class="noticias-archive text-main-color background-second-color">
<?php
  while( have_posts() ) {
    the_post();
?>
    <a href="<?php the_permalink(); ?>">
      <article <?php post_class('text-second-color'); ?> id="post-<?php the_ID(); ?>">
    <?php get_template_part('partials/cover-photo'); ?>
      </article>
    </a>


<?php
  }
} else {
?>
    <article class="u-alert grid-item item-s-12"><?php _e('Sorry, no posts matched your criteria :{'); ?></article>
<?php
} ?>
  <?php get_template_part('partials/pagination'); ?>
  </section>


</main>

<?php
get_footer();
?>
