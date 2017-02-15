<?php

// Custom hooks (like excerpt length etc)


function sort_show_archive_by_ep_num( $query ) {
  if ( $query->is_post_type_archive('show') && $query->is_main_query() ) {
    $query->set('orderby','meta_value_num');
    $query->set('meta_key','_igv_episode_number');
  }
}
add_action( 'pre_get_posts', 'sort_show_archive_by_ep_num' );
