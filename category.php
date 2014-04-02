<!DOCTYPE HTML>
<html>
  <head>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <style type="text/css">
      body {min-width: 800px; margin-left: 5%; margin-right: 5%; width: 90%;}
      
    
    </style>
  <body>



  <?php get_header(); ?>
<?php $cat=get_thecategory(); ?>
<?php query_posts('category_id=$cat'); ?>
	    <?php while (have_posts()) : the_post();
		  ?>
		  <div>
	    <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
	    <?php the_author();
            the_post(); ?><div>
	    <?php endwhile; ?> 

  
</body>
    <?php the_footer(); ?></html>

