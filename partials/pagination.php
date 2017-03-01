<?php
if( get_next_posts_link() || get_previous_posts_link() ) {
?>
<nav id="pagination" class="background-fourth-color padding-top-basic padding-bottom-basic text-second-color">
  <div class="grid-row justify-center container font-larger">
  <!-- post pagination -->
<?php
$previous = get_previous_posts_link('<<');
$next = get_next_posts_link('>>');

if ($next) {
?>
    <div class="grid-item item-s-4 font-larger text-align-right">
      <?php echo $next; ?>
    </div>
<?php
}

if ($previous && $next) {
?>
    <div class="grid-item item-s-4 font-larger">
      <?php echo ' &mdash; '; ?>
    </div>
<?php
}

if ($previous) {
?>
    <div class="grid-item item-s-4 font-large text-align-left">
      <?php echo $previous; ?>
    </div>
<?php
}
?>
    </div>
  </div>
</nav>
<?php
}
?>
