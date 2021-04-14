<!-- File where there are some functions that add more functionality to themes, such as the logo, menus, color, thumbnails, scripts, and stylesheets;-->
<?php



// Add Menu Support
add_theme_support('menus');


// Register Nav Menu 
function wct_custom_new_menu() {
    register_nav_menus(
      array(
        'top-menu' => __( 'Top Menu' ),
        'footer-menu' => __( 'Footer Menu' )
      )
    );
  }


//   Add the hook to make the menu 
add_action( 'init', 'wct_custom_new_menu' );

// Adding sidebar 
function my_custom_theme_sidebar() {
  register_sidebar( array(
      'name' => __( 'Primary Sidebar', 'my-custom-theme' ),
      'id'   => 'sidebar-1',
  ) );
}
add_action( 'widgets_init', 'my_custom_theme_sidebar' );

// Adding Style 
function wct_loadStyle()
{
    wp_register_style( 'style1', get_template_directory_uri() . '/assets/css/style1.css',array(), false, 'all');
    wp_enqueue_style('style1');
}
add_action( 'wp_enqueue_scripts', 'wct_loadStyle' );

?>
