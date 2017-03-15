<?php
/*
 Title: Recent Listings
 Description:  Shows recent listings
*/
echo $before_widget?>
<?php echo $before_title; ?>
<?php echo $settings['recent_listings_widget_title'];?>
<?php echo $after_title;?>
<?php
if(isset($settings['recent_listings_widget_count']) && !empty($settings['recent_listings_widget_count'])){
  $count = $settings['recent_listings_widget_count'];
}
else {$count = '5';}
$args =  array(
  'post_type'     => 'listing'
  ,'orderby'      => 'date'
  ,'order'        => 'ASC'
  ,'posts_per_page'=> $count
);

$recent  = new WP_Query($args);
while ($recent->have_posts()):$recent->the_post();
$m = get_post_meta($post->ID);
?>
<article id="post-<?php the_ID();?>" <?php post_class('recent-listing');?>>
<?php the_title('<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a> &nbsp;');?>
</article>
<?php endwhile;?>
 <?php echo $after_widget;?>
