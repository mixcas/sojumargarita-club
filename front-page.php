<?php
get_header();
?>

<main id="main-content">
  <section id="latest-shows">
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
    <div class="container">
      <div class="grid-row">
        <article <?php post_class('grid-item item-s-6'); ?> id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        </article>
        <article <?php post_class('grid-item item-s-6'); ?> id="post-<?php the_ID(); ?>">
          <?php the_content(); ?>
        </article>
      </div>
    </div>
<?php
    } else {

      if ($index == 1) {
?>
    <div class="container">
      <div class="grid-row">
<?php
      }
?>
        <article <?php post_class('grid-item item-s-3'); ?> id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('l-3'); ?></a>
        </article>
<?php
      if ($index == 3) {
?>
      </div>
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

  </section>

  <?php get_template_part('partials/pagination'); ?>

</main>

<?php
get_footer();
?>
