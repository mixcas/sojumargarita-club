<?php
$align_items_center = is_front_page() || is_archive() || is_home();
?>
  <div class="cover-photo-holder grid-row justify-center <?php echo $align_items_center == true ? 'align-items-center' : 'align-items-end'; ?>" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
    <div class="cover-photo"></div>
    <div class="grid-item item-s-11 item-l-9 text-align-center">
      <h1 class="margin-top-tiny margin-bottom-basic drop-shadow font-larger <?php echo is_single() ? 'mobile-hide' : ''; ?>"><span class="highlight"><?php the_title(); ?></span></h1>
    </div>
  </div>

<?php
if (is_single()) {
?>
  <div class="grid-row justify-center">
    <div class="grid-item item-s-12">
      <h1 class="margin-top-tiny drop-shadow font-larger medium-hide desktop-hide"><span class="highlight"><?php the_title(); ?></span></h1>
    </div>
  </div>
<?php
}
?>
