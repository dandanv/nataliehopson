<?php
// activate /%type%/
function wpa_show_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'work' ){
        $terms = wp_get_object_terms( $post->ID, 'work-category' );
        if( $terms ){
            return str_replace( '%work-category%' , $terms[0]->slug , $post_link );
        }
    }

    return $post_link;
}
add_filter( 'post_type_link', 'wpa_show_permalinks', 1, 2 );
function register_post_types(){
  //post type intent
  register_post_type( 'work',
    array(
    'labels' => array(
      'name' => __( 'Work' ),
      'singular_name' => __( 'Work' )
    ),
    'supports' => array( 'title','editor' ),
    'hierarchical' => false,
    'public' => true,
    'publicly_queryable'  => false,
    'has_archive' => false,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'work','with_front' => FALSE),
    'menu_icon' => 'dashicons-groups',
    'menu_position' => 4,
    'show_in_rest' => true,
    )
  );

  //register intent category
  register_taxonomy(
      'work-category',  //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
      array( 'work' ), //post types
      array(
          'hierarchical' => true,
          'label' => 'Work Category',  //Display name
          'query_var' => true,
          'show_in_nav_menus' => true,
          'show_admin_column' => true,
          'publicly_queryable'  => false,
          'rewrite' => array('slug' => 'work-category','with_front' => FALSE),
      )
  );


  register_post_type( 'photographs',
    array(
    'labels' => array(
      'name' => __( 'Photographs' ),
      'singular_name' => __( 'Photographs' )
    ),
    'supports' => array( 'title','thumbnail' ),
    'hierarchical' => false,
    'public' => true,
    'publicly_queryable'  => false,
    'has_archive' => false,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'photographs','with_front' => FALSE),
    'menu_icon' => 'dashicons-groups',
    'menu_position' => 4,
    'show_in_rest' => true,
    )
  );


}
add_action( 'init','register_post_types');