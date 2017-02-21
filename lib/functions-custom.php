<?php

// Custom functions (like special queries, etc)
function main_class() {
  if( is_archive() ) {
    return 'background-main-color';
  }

  if( is_single() || is_front_page() ) {
    return 'background-seconf-color';
  }
}
