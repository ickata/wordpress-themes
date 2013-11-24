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
}