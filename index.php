<!DOCTYPE HTML>
<html>
  <head>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <style type="text/css">
    </style>
 <body>
<div id="Total">
        <div id="Header"><?php get_header(); ?></div>
	<table id="above_the_fold">
	  <tr>
            <td id="Pics"> </td>
	    <td id="Featured">
	        <?php query_posts('category_name="fp"&posts_per_page=1'); ?>
	    <?php while (have_posts()) : the_post();
		  ?>		
	    	<h2><a href="<?php the_permalink()?>" style="text-decoration:none; color: #555; font-family: verdana;"><?php the_title(); ?></a></h2>
                <div class="byline">By <?php the_author()?></div>
		<div class="article_content"><?php the_content("Read More")?>
		</div>
		<?php endwhile; ?>
	  </tr>
	</table>
            
        <table>
	  <tr class="Articles">
            <td class="article_column" id="Article1"> <h2>News </h2>	    
<?php query_posts('category_name="news"&posts_per_page=3'); ?>
	    <?php while (have_posts()) : the_post();
		  ?>
		  <div>
	    <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
	    <?php the_excerpt(); ?><div>
	    <?php endwhile; ?>
	    </td>
	    <td class="article_column" id="Article2"> <h2>Features </h2>
<?php query_posts('category_name="feature"&posts_per_page=3'); ?>
	    <?php while (have_posts()) : the_post();
		  ?>
		  <div>
	    <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
	    <?php the_excerpt(); ?><div>
	    <?php endwhile; ?>              
	    </td>
            <td class="article_column" id="Article3"><h2>Opinion </h2>
	    <?php query_posts('category_name="oped"&posts_per_page=3'); ?>
	    <?php while (have_posts()) : the_post();
		  ?>
		  <div>
	    <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
	    <?php the_excerpt(); ?><div>
	    <?php endwhile; ?>
	    </td>
	  </tr>
	  <tr class="Articles">
            <td class="article_column" id="Article1"> <h2>Art &amp; Literature </h2> 
<?php query_posts('category_name="art-lit"&posts_per_page=3'); ?>
	    <?php while (have_posts()) : the_post();
		  ?>
		  <div>
	    <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
	    <?php the_excerpt(); ?><div>
	    <?php endwhile; ?>              
	    </td>
            <td class="article_column" id="Article2"> <h2>Green </h2>
<?php query_posts('category_name="green"&posts_per_page=3'); ?>
	    <?php while (have_posts()) : the_post();
		  ?>
		  <div>
	    <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
	    <?php the_excerpt(); ?><div>
	    <?php endwhile; ?>              
            </td>
            <td class="article_column" id="Article3"> <h2>Sports </h2> 
<?php query_posts('category_name="sports"&posts_per_page=3'); ?>
	    <?php while (have_posts()) : the_post();
		  ?>
		  <div>
	    <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
	    <?php the_excerpt(); ?><div>
	    <?php endwhile; ?>              
	    </td>	    
        </tr>
	</table>
        <div id="Footer"><p><?php get_footer();?></p></div>
    </div></body></html>
