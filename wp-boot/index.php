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
      <div class="container">
         <!-- main column -->
         <div class="col-md-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- post list starts -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <header>
                  <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
               </header>
               <?php the_content(); ?>
            </article>
            <!-- post list ends -->
            <?php endwhile; endif ?>
         </div>
      </div>
      <!-- wp_footer starts -->
      <?php wp_footer() ?>
      <!-- wp_footer ends -->
   </body>
</html>