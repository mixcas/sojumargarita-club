<?php

/* Get post objects for select field options */
function get_post_objects( $query_args ) {
  $args = wp_parse_args( $query_args, array(
    'post_type' => 'post',
  ) );
  $posts = get_posts( $args );
  $post_options = array();
  if ( $posts ) {
    foreach ( $posts as $post ) {
      $post_options [ $post->ID ] = $post->post_title;
    }
  }
  return $post_options;
}


/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Hook in and add metaboxes. Can only happen on the 'cmb2_init' hook.
 */
add_action( 'cmb2_init', 'igv_cmb_metaboxes' );
function igv_cmb_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_igv_';

	/**
	 * Metaboxes declarations here
   * Reference: https://github.com/WebDevStudios/CMB2/blob/master/example-functions.php
	 */



  $show_meta = new_cmb2_box( array(
    'id'            => $prefix . 'show_meta',
    'title'         => esc_html__( 'Show Metadata', 'cmb2' ),
    'object_types'  => array( 'show', ), // Post type
    // 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
    // 'context'    => 'normal',
    'priority'   => 'high',
    // 'show_names' => true, // Show field names on the left
    // 'cmb_styles' => false, // false to disable the CMB stylesheet
    // 'closed'     => true, // true to keep the metabox closed by default
    // 'classes'    => 'extra-class', // Extra cmb2-wrap classes
    // 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.
  ) );

  $show_meta->add_field( array(
    'name'    => 'Cover photo',
    'desc'    => 'Upload an image or enter an URL.',
    'id'   => $prefix . 'cover_photo',
    'type'    => 'file',
    // Optional:
    'options' => array(
      'url' => false, // Hide the text input for the url
    ),
    'text'    => array(
      'add_upload_file_text' => 'Add Cover Photo' // Change upload button text. Default: "Add or Upload File"
    ),
  ) );

  $show_meta->add_field( array(
    'name' => __( 'Youtube playlist ID', 'cmb2' ),
    'id'   => $prefix . 'playlist_id',
    'type' => 'text',
  ));

  $show_meta->add_field( array(
    'name' => __( 'Youtube playlist link', 'cmb2' ),
    'id'   => $prefix . 'playlist_link',
    'type' => 'text',
  ));

  $show_meta->add_field( array(
    'name' => __( 'Tracklist', 'cmb2' ),
    'id'   => $prefix . 'tracklist',
    'type' => 'wysiwyg',
  ));

  $show_meta->add_field( array(
    'name' => __( 'Episode #', 'cmb2' ),
    'id'   => $prefix . 'episode_number',
    'type' => 'text',
    'attributes' => array(
      'pattern' => '\d*',
    ),
  ));

}
?>
