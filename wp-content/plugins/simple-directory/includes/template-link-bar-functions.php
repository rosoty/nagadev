<?php
function sdir_link_bar(){
global $wp_query;
$postid = $wp_query->post->ID;
$m = get_post_meta($postid);

if(isset($m['listing_phone_1'][0]) && !empty($m['listing_phone_1'][0])){
echo '<li><a class="button secondary" href="tel:'. $m['listing_phone_1'][0].'"><i class="fi-telephone"></i> '.$m['listing_phone_1'][0].'</a></li>';
}
if(isset($m['listing_website_url'][0]) && !empty($m['listing_website_url'][0])){
$url = $m['listing_website_url'][0];
$url = preg_replace('#^https?://#','',rtrim($url,'/'));
echo '<li><a class="button secondary" href="http://'.$url.'" target="_blank" rel="nofollow"><i class="fi-laptop"></i> '.__('Website','simple-dir').'</a> </li>';
}

if(isset($m['listing_street_address'][0]) && !empty($m['listing_street_address'][0])){
$mapStreet = $m['listing_street_address'][0];
$mapStreet = preg_replace('/\s+/', '+', $mapStreet);
$mapCity = $m['listing_city'][0];
$mapCity = preg_replace('/\s+/','+',$mapCity);
$mapPostcode  = $m['listing_postalcode'][0];
$mapPostcode = preg_replace('/\s+/','+',$mapPostcode);
echo '<li>
<a class="button secondary" href="https://www.google.com/maps/dir/Current+Location/'. $mapStreet.'+'.$mapCity.'+'.$mapPostcode.'" target="_blank"><i class="fi-marker"></i> '. __('Directions','simple-dir').'</a>
</li>';

}


}

function sdir_mobile_link_bar(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(isset($m['listing_phone_1'][0]) && !empty($m['listing_phone_1'][0])){
    echo '<a class="item" href="tel:'.$m['listing_phone_1'][0].'"><i class="fi-telephone"></i></a>';
  }
  if(isset($m['listing_website_url'][0]) && !empty($m['listing_website_url'][0])){
  $url = $m['listing_website_url'][0];
  $url = preg_replace('#^https?://#','',rtrim($url,'/'));
  echo '<a class="item" href="http://'.$url.'" target="_blank"><i class="fi-laptop"></i></a>';

}
if(isset($m['listing_street_address'][0]) && !empty($m['listing_street_address'][0])){
$mapStreet = $m['listing_street_address'][0];
$mapStreet = preg_replace('/\s+/', '+', $mapStreet);
$mapCity = $m['listing_city'][0];
$mapCity = preg_replace('/\s+/','+',$mapCity);
$mapPostcode  = $m['listing_postalcode'][0];
$mapPostcode = preg_replace('/\s+/','+',$mapPostcode);
echo '<a class="item" href="https://www.google.com/maps/dir/Current+Location/'. $mapStreet.'+'.$mapCity.'+'.$mapPostcode.'" target="_blank"><i class="fi-marker"></i></a>';
}
}
