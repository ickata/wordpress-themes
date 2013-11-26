<?php

/** 
 * @class WPBoot_Nav_Walker
 * Custom navigation walker class
 * @extends Walker_Nav_Menu
**/
class WPBoot_Nav_Walker extends Walker_Nav_Menu {
   // add classes to ul sub-menus
   function start_lvl( &$output, $depth ) {
      // build html
      $output .= '<ul class="dropdown-menu">';
   }
   
   // add Bootstrap's "active" class to current menu items
   function start_el( &$output, $item, $depth, $args ) {
      if (
         array_search( 'current_page_item', $item->classes ) > -1 or
         array_search( 'current_page_parent', $item->classes ) > -1
      ) {
         array_push( $item->classes, 'active' );
      }
      parent::start_el( $output, $item, $depth, $args );
   }
}