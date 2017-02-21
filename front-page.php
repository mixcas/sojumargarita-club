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
  <section id="noticias" class="noticias-archive padding-top-basic padding-bottom-basic text-main-color background-second-color">
    <div class="container">


<?php
  while( $latest_posts->have_posts() ) {
    $latest_posts->the_post();
?>

        <article <?php post_class('grid-row justify-center margin-bottom-basic'); ?> id="post-<?php the_ID(); ?>">
          <div class="grid-item item-s-12 item-m-10 text-align-center">
            <a href="<?php the_permalink() ?>"><h2 class="margin-bottom-small font-size-h1 text-fourth-color"><?php the_title(); ?></h2></a>
          </div>

          <div class="grid-item item-s-12 item-l-9 content-copy">
            <?php the_post_thumbnail() ?>

            <?php the_content(); ?>
          </div>

        </article>

<?php
  }
?>
    </div>
    <div class="grid-row justify-center">
      <div class="grid-item item-s-8 text-align-center">
      <a class="font-bold font-italic" href="<?php echo home_url('/noticias/page/2'); ?>">Más Noticias</a>
      </div>
    </div>
  </section>
<?php
}
?>

</main>

<?php
get_footer();
?>
