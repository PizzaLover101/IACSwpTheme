<!DOCTYPE HTML>
<html>
  <head>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
    <style type="text/css">
      body {min-width: 800px; margin-left: 5%; margin-right: 5%; width: 90%;}
      
    
    </style>
  <body>



  <?php get_header(); ?>

<div class="related"><h3>More 
<!——Related posts code start here——->
<?php
add_image_size( 'related-posts', 90, 90, true );

$categories = get_the_category($post->ID);
$category_slug = $categories[0]->slug;
$category_name = $categories[0]->name;
?>
<?php echo $category_name;?></h3>
<?php
if ($category_slug) {
$args=array(
'category_name' => $category_slug,
'post__not_in' => array($post->ID),
'posts_per_page'=>15, // Number of related posts that will be shown.
'caller_get_posts'=>1,
'orderby'=>'rand' // Randomize the posts
);
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '<ul>';
while( $my_query->have_posts() ) {
$my_query->the_post(); ?>
<li>
<a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
<?php the_post_thumbnail( 'related-posts' ); ?>
</a>
<div>
<a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</div>
</li>
<? }
echo '</ul></div>';
} }
?>
<?php wp_reset_query(); ?>
<p/><br/>
<!——Related posts code end here——->
</div>

  
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="article"><H1><?php the_title();?></H1>
<div class="byline">By <?php the_author();?></div>
<div class="article_content">  <?php the_content(); ?>
<?php  endwhile;
  else: ?>
  <p><?php _e('Sorry, no posts matched.'); ?></p>
<?php  endif;
  ?>
</div></div>

  
</body>
    <?php the_footer(); ?></html>

