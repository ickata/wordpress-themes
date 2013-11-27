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
      <!-- header -->
      <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#"><?php bloginfo('title') ?></a>
            </div>
            <div class="">
               <?php
               wp_nav_menu( array(
                  'menu'            => 'main-menu',
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse',   // bootstrap class names
                  'container_id'    => '',
                  'menu_class'      => 'nav navbar-nav',             // bootstrap class names
                  'menu_id'         => '',
                  'echo'            => true,
                  'fallback_cb'     => 'wp_page_menu',
                  'before'          => '',
                  'after'           => '',
                  'link_before'     => '',
                  'link_after'      => '',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                  'depth'           => 2,
                  'walker'          => new WPBoot_Nav_Walker
               ) );
               ?>
           </div><!-- /.nav-collapse -->
         </div><!-- /.container -->
      </div>
      <div class="container">
         <!-- main column -->
         <div class="col-md-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- post list starts -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               <header>
                  <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                  <p class="text-muted"><?php the_date() ?> <?php edit_post_link() ?></p>
               </header>
               <?php the_content(); ?>
               <footer>
                  <?php wpboot_the_category() ?>
               </footer>
            </article>
            <!-- post list ends -->
            <?php endwhile; endif ?>
         </div>
         <!-- sidebar -->
         <div class="col-md-4">
            <?php dynamic_sidebar( 'main-sidebar' ); ?>
         </div>
      </div>
      <!-- wp_footer starts -->
      <?php wp_footer() ?>
      <!-- wp_footer ends -->
   </body>
</html>