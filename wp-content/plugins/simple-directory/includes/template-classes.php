<?php

function sdir_logo_class(){
  if(has_post_thumbnail()) {echo 'medium-2 hide-for-small-down columns';}
  if(!has_post_thumbnail()){ echo  'hidden';}
}
function sdir_title_class(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(!has_post_thumbnail()  && empty($m['listing_street_address'][0])){  echo 'small-12 columns';}
  if(has_post_thumbnail() && empty($m['listing_street_address'][0])){echo 'small-12 medium-8 columns';}
  if(!has_post_thumbnail() && !empty($m['listing_street_address'][0])){echo'small-12 medium-8 columns';}
  if(has_post_thumbnail() && !empty($m['listing_street_address'][0])) {echo'small-12 medium-6 columns';}
}

function sdir_title_on_cat_class(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(has_post_thumbnail()){echo 'small-10 columns';}
  else {echo 'small-12 columns';}
}
function sdir_map_class(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(empty($m['listing_street_address'][0])){echo 'hidden';}
  if(!has_post_thumbnail() && !empty($m['listing_street_address'][0])) {echo 'medium-4 columns hide-for-small-down';}
  if(has_post_thumbnail() && !empty($m['listing_street_address'][0])) {echo 'medium-4 columns hide-for-small-down';}

}









 ?>
