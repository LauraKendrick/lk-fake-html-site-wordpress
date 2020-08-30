<?php

wp_enqueue_style ('theme-style', get_template_directory_uri().'/style/style.css');

function wpb_custom_new_menu() {
  register_nav_menu('primary-menu',__( 'primary-menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

// Auto add featured image
function wpsites_auto_set_featured_image() {
   global $post;
   $featured_image_exists = has_post_thumbnail($post->ID);
      if (!$featured_image_exists)  {
         $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
         if ($attached_image) {
            foreach ($attached_image as $attachment_id => $attachment) {set_post_thumbnail($post->ID, $attachment_id);}
         }
      }
}
add_action('the_post', 'wpsites_auto_set_featured_image');

add_theme_support( 'post-thumbnails' );


/*register_sidebar;*/

register_sidebar( array(
'name' => 'Footer Sidebar 1',
'id' => 'footer-sidebar-1',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 2',
'id' => 'footer-sidebar-2',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Sidebar 3',
'id' => 'footer-sidebar-3',
'description' => 'Appears in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
   'name' => 'Footer Sidebar 4',
   'id' => 'footer-sidebar-4',
   'description' => 'Appears in the footer area',
   'before_widget' => '<aside id="%1$s" class="widget %2$s">',
   'after_widget' => '</aside>',
   'before_title' => '<h3 class="widget-title">',
   'after_title' => '</h3>',
   ) );
register_sidebar( array(
      'name' => 'Footer Sidebar 5',
      'id' => 'footer-sidebar-5',
      'description' => 'Appears in the footer area',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
      ) );
register_sidebar( array(
         'name' => 'Footer Sidebar 6',
         'id' => 'footer-sidebar-6',
         'description' => 'Appears in the footer area',
         'before_widget' => '<aside id="%1$s" class="widget %2$s">',
         'after_widget' => '</aside>',
         'before_title' => '<h3 class="widget-title">',
         'after_title' => '</h3>',
         ) );      
?>
