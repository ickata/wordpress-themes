<?php

// enqueue resources
add_action( 'wp_head', 'wpboot_enqueue_styles' );
function wpboot_enqueue_styles() {
   // This is the compiled css file from LESS - this means you compile the LESS 
   // file locally and put it in the appropriate directory if you want to make 
   // any changes to the master bootstrap.css.
   wp_register_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css', array(), '1.0', 'all' );
   wp_enqueue_style( 'bootstrap' );
}