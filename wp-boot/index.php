<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <title><?php wp_title( '|', true, 'right' ) ?></title>
      
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
      
      <!-- wp_head starts -->
      <?php wp_head() ?>
      <!-- wp_head ends -->
   </head>
   <body <?php body_class() ?>>
      <h1>Hello, world!</h1>
      <!-- wp_footer starts -->
      <?php wp_footer() ?>
      <!-- wp_footer ends -->
   </body>
</html>