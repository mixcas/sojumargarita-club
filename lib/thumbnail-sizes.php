<?php

if( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

if( function_exists( 'add_image_size' ) ) {
  add_image_size( 'admin-thumb', 150, 150, false );
  add_image_size( 'opengraph', 1200, 630, true );

  add_image_size( 'l-3', 264, 264, false );
  add_image_size( 'l-4', 400, 400, false );
  add_image_size( 'l-10', 1300, 9999, false );
  add_image_size( 'l-3', 400, 432, false );

  add_image_size( 'gallery', 1200, 9999, false );
}
