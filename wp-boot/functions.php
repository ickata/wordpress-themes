<?php

include 'classes/nav-menu-walker.php';

// enqueue resources
add_action( 'wp_enqueue_scripts', 'wpboot_enqueue_styles' );
function wpboot_enqueue_styles() {
   // This is the compiled css file from LESS - this means you compile the LESS 
   // file locally and put it in the appropriate directory if you want to make 
   // any changes to the master bootstrap.css.
   wp_register_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', array(), '1.0', 'all' );
   wp_enqueue_style( 'bootstrap' );
   // theme css
   wp_register_style( 'wpboot', get_stylesheet_uri(), array(), '1.0', 'all' );
   wp_enqueue_style( 'wpboot' );
}

// register sidebars
add_action( 'widgets_init', 'wpboot_register_sidebars' );
function wpboot_register_sidebars() {
   register_sidebar( array(
      'name'          => __( 'Main Sidebar', 'wpboot' ),
      'id'            => 'main-sidebar',
      'description'   => __( 'Appears in the sidebar (right column) section of the site.', 'wpboot' ),
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
   ) );
}

// print categories with custom style
function wpboot_the_category( $separator = ' ' ) {
   global $post;
   $categories = get_the_category( $post->ID );
   foreach ( $categories as $i => $category ) {
      echo $i > 0 ? $separator : '';
      echo '<a class="btn btn-default" href="'. get_category_link( $category->cat_ID ) .'">' . $category->cat_name . '</a>';
   }
}

// setup theme
add_action( 'after_setup_theme', 'wpboot_setup' );
function wpboot_setup() {
   // register main navigation menu
   register_nav_menu( 'main-menu', __( 'Main Menu' ) );
}