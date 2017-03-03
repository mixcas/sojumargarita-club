<?php
get_header();
?>

<main id="main-content" class="background-second-color">
  <section id="posts">

<?php
if( have_posts() ) {
  while( have_posts() ) {
    the_post();
?>

    <article <?php post_class('margin-bottom-basic text-second-color'); ?> id="post-<?php the_ID(); ?>">
    <?php get_template_part('partials/cover-photo'); ?>


      <div class="grid-row justify-center margin-top-small container">
        <div class="grid-item item-s-12 item-l-9 content-copy text-main-color">
          <?php the_content(); ?>
        </div>
      </div>

      <div class="grid-row justify-center container">
        <div class="grid-item item-s-12 item-m-3 margin-bottom-tiny">
          <a class="background-color-facebook share-button justify-center padding-top-tiny padding-bottom-tiny" href="#" onclick="Site.Share.onFB()">
            <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/facebook_share.svg'); ?></a>
          </a>
        </div>
        <div class="grid-item item-s-12 item-m-3 margin-bottom-tiny">
          <a class="background-color-twitter share-button justify-center padding-top-tiny padding-bottom-tiny" href="#" onclick="Site.Share.onTW()">
            <?php echo url_get_contents(get_bloginfo('stylesheet_directory') . '/img/dist/twitter_share.svg'); ?></a>
          </a>
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
