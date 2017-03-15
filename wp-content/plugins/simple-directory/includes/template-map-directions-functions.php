<?php


function sdir_embedded_map(){
  global $wp_query, $sdir_postid, $sdir_m;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  $mapStreet = get_post_meta($postid,'listing_street_address', true);
  $mapStreet = preg_replace('/\s+/', '+', $mapStreet);
    $_SESSION['mapStreet'] = $mapStreet;
  $mapCity = get_post_meta($postid,'listing_city',true);
  $mapCity = preg_replace('/\s+/','+',$mapCity);
    $_SESSION['mapCity'] = $mapCity;
  $mapPostcode = get_post_meta($postid,'listing_postalcode',true);
  $mapPostcode = preg_replace('/\s+/','+',$mapPostcode);
  $_SESSION['mapPostcode'] = $mapPostcode;
   if ($m['listing_street_address'][0] !='') {?>
  <iframe src="https://www.google.com/maps/embed/v1/search?key=AIzaSyAMFTG0wknrUxibhscMgOXWtcLCUi1tgmM&q=<?php echo $_SESSION['mapStreet']; ?>+<?php echo $_SESSION['mapCity']; ?>+<?php echo $_SESSION['mapPostcode']; ?>"
  width="350" height="150" frameborder="0" style="border:0"></iframe> <?php }
}

function sdir_directions_link(){
  global $wp_query, $sdir_postid, $sdir_m;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  $mapStreet = get_post_meta($postid,'listing_street_address', true);
  $mapStreet = preg_replace('/\s+/', '+', $mapStreet);
    $_SESSION['mapStreet'] = $mapStreet;
  $mapCity = get_post_meta($postid,'listing_city',true);
  $mapCity = preg_replace('/\s+/','+',$mapCity);
    $_SESSION['mapCity'] = $mapCity;
  $mapPostcode = get_post_meta($postid,'listing_postalcode',true);
  $mapPostcode = preg_replace('/\s+/','+',$mapPostcode);
  $_SESSION['mapPostcode'] = $mapPostcode;
if($m['listing_street_address'][0] !='') {?>

  <i class="fi-marker single-listing-icon"></i> <a class="single-listing-meta" href="https://www.google.com/maps/dir/Current+Location/<?php echo $_SESSION['mapStreet']; ?>+<?php echo $_SESSION['mapCity']; ?>" target="_blank"
                           ><?php _e('Get Directions','simple-dir');?></a> <?php }

 }


 ?>
