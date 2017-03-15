<?php

function listing_cat_page_title(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if (isset($m['listing_status'][0]) && $m['listing_status'][0]=='premium'){?>
    <?php the_title( '<span itemprop="name"><h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a> &nbsp;<i class="fi-star"></i></h3><span>' ); ?>
      <? sdir_job_info();?>

  <?}
  else {?>
<?php the_title( '<span itemprop="name"><h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3><span>' ); ?>
  <?php sdir_job_info();?>

  <?php }




}


  function sdir_job_info(){
    global $wp_query;
    $postid = $wp_query->post->ID;
    $m = get_post_meta($postid);
   if(isset($m['listing_type'][0]) && $m['listing_type'][0] == 'individual') {
      if(isset($m['listing_ind_title'][0])){
      echo'<span itemprop="jobTitle">' . $m['listing_ind_title'][0] .'</span><br/>';
    }

      if(isset($m['listing_ind_org'][0])) {
      echo '<span itemprop="worksFor"><strong>' .  $m['listing_ind_org'][0] . '</strong></span>' ;
      }
    }

}






function sdir_site_url(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(!empty($m['listing_website_url'][0])){
    $url = $m['listing_website_url'][0];
    $url = preg_replace('#^https?://#','',rtrim($url,'/'));
    echo '<i class="fi-laptop single-listing-icon"></i> <a class="single-listing-meta" href="http://'. $url. '" target="_blank" rel="nofollow">' . __('Website','simple-dir') . '</a>';
  }
  else {echo '';}
}

function sdir_phone_link(){
  global $wp_query;
  $postid = $wp_query->post->ID;
  $m = get_post_meta($postid);
  if(isset($m['listing_phone_1'][0]) && $m['listing_phone_1'][0] !=''){
    echo '<i class="fi-telephone single-listing-icon"></i> <a class="single-listing-meta" href="tel:' . $m['listing_phone_1'][0].'">' . $m['listing_phone_1'][0] . '</a>';
  }
  else{'';}
}






 ?>
