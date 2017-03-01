<?php
get_header();
?>

<main id="main-content">

  <?php get_template_part('partials/latest-shows'); ?>


<?php
  $latest_posts = new WP_Query( array(
    'posts_per_page'   => 5,
    'post_status'      => 'publish',
  ));
if( $latest_posts->have_posts() ) {
?>
  <section id="noticias" class="noticias-archive text-main-color background-second-color">


<?php
  while( $latest_posts->have_posts() ) {
    $latest_posts->the_post();
?>
    <a href="<?php the_permalink(); ?>">
      <article <?php post_class('text-second-color'); ?> id="post-<?php the_ID(); ?>">
    <?php get_template_part('partials/cover-photo'); ?>
      </article>
    </a>


<?php
    $next_page = get_next_posts_link();
  }
?>
    </div>
<?php
  if ($next_page) {
?>
    <div class="grid-row justify-center">
      <div class="grid-item item-s-8 text-align-center">
      <a class="font-bold font-italic" href="<?php echo home_url('/noticias/page/2'); ?>">Más Noticias</a>
      </div>
    </div>
<?php
  }
?>
  </section>
<?php
}
?>

</main>

<?php
get_footer();
?>
