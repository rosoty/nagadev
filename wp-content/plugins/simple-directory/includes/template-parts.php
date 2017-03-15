<?php


function sdir_listing_type(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(isset($m['listing_type'][0]) && $m['listing_type'][0] == 'individual') {
  echo  'Person';
}
else {
  echo 'LocalBusiness';
}}

function sdir_listing_level(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if($m['listing_status'][0] != 'basic'){
      the_title('<span itemprop="name" class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>&nbsp;<i class="fi-star"></i> &nbsp;</span>' );
    }
else {
the_title( '<span itemprop="name" class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a> </span>' );
}}

function sdir_social_block(){

	global $wp_query;
	$postid = $wp_query->post->ID;
	$m = get_post_meta($postid);
  if (isset($m['listing_status'][0]) && $m['listing_status'][0] =='premium'){
    echo '<div class="row"><div class="small-12 columns">';
	if(isset($m['listing_email'][0]) && $m['listing_email'][0] != ''){
		echo '<a href="mailto:'.$m['listing_email'][0].'"><i class="fi-mail icon-medium"></i></a>&nbsp;';	}
 if(isset($m['listing_facebook'][0]) && $m['listing_facebook'][0] != '') {
 echo '<a href="'. $m['listing_facebook'][0] .'" target="_blank" rel="nofollow"> <i class="fi-social-facebook icon-medium"></i></a>&nbsp;'; }
 if(isset($m['listing_twitter'][0]) && $m['listing_twitter'][0] !=''){
 echo '<a href="http://twitter.com/'.$m['listing_twitter'][0].'" rel="nofollow" target="_blank"><i class="fi-social-twitter icon-medium"></i></a>&nbsp;'; }
if(isset($m['listing_gplus'][0])&& $m['listing_gplus'][0] != '') {
	echo '<a href="' . $m['listing_gplus'][0] .'" rel="nofollow" target="_blank"><i class="fi-social-google-plus icon-medium"></i></a>&nbsp;'; }
if(isset($m['listing_linkedin'][0]) && $m['listing_linkedin'][0] !='') {
echo '<a href="'. $m['listing_linkedin'][0] . '" rel="nofollow" target="_blank"><i class="fi-social-linkedin icon-medium"></i></a>&nbsp;'; }
if(isset($m['listing_youtube'][0]) && $m['listing_youtube'][0] !='') {
	echo '<a href="'. $m['listing_youtube'][0] .'" rel="nofollow" target="_blank"><i class="fi-social-youtube icon-medium"></i></a>&nbsp;'; }
if(isset($m['listing_instagram'][0]) && $m['listing_instagram'][0] !='') {
	echo '<a href="http://instagram.com/'. $m['listing_instagram'][0] .'" rel="nofollow" target="_blank"><i class="fi-social-instagram icon-medium"></i></a>&nbsp;'; }
if(isset($m['listing_pinterest'][0])&& $m['listing_pinterest'][0] !='') { echo '<a href="' . $m['listing_pinterest'][0] .'" rel="nofollow" target="_blank"><i class="fi-social-pinterest icon-medium"></i></a>&nbsp;'; }
 if(isset($m['listing_rss'][0]) && $m['listing_rss'][0] !='') { echo '<a href="' . $m['listing_rss'][0] .'" rel="nofollow" target="_blank"><i class="fi-rss icon-medium"></i></a>&nbsp;'; }
 echo '</div></div>';
}
else {echo '';}
}

function sdir_featured_marker(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(isset($m['listing_status'][0]) && $m['listing_status'][0] != 'basic'){
    ?>
    <span class="button tiny radius sdir-featured-marker">FEATURED</span>
  <?php }
  else {'';}
}
