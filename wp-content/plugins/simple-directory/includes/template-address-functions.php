<?php

  function sdir_address_output(){
    global $wp_query;
    $postid = $wp_query->post->ID;
    $m = get_post_meta($postid);
    $s = get_option('simple_directory_settings');
    $addressFormat = $s['sdir_address_format'];
    $l = $m['listing_street_address'][0] . $m['listing_city'][0] .$m['listing_state'][0] . $m['listing_postalcode'][0] ;

  if(isset($m['listing_street_address'][0]) && $m['listing_street_address'][0] !=''  && $addressFormat == 'us'){
    echo '<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="street-address">';
    echo '<span itemprop="addressLocality">' . $m['listing_street_address'][0] . '</span>,';

    echo '<span itemprop="addressLocality">' . $m['listing_city'][0] . '</span>,&nbsp;';
      if(strlen($l) >= 70 || has_post_thumbnail()) {echo'<br/>';}
    echo '<span itemprop="addressRegion">'. $m['listing_state'][0] .'</span>,&nbsp;';
    echo '<span itemprop="postalCode">'. $m['listing_postalcode'][0] .'</span></div>';


  }
  elseif(isset($m['listing_street_address'][0]) && $m['listing_street_address'][0] !=''  && $addressFormat == 'eu'){
    echo '<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" class="street-address">';
    echo '<span itemprop="addressLocality">' . $m['listing_street_address'][0] . '</span>,';

        echo '<span itemprop="postalCode">'. $m['listing_postalcode'][0] .'</span>,&nbsp;';
            if(strlen($l) >= 70 || has_post_thumbnail()) {echo'<br/>';}
    echo '<span itemprop="addressLocality">' . $m['listing_city'][0] . '</span>,&nbsp;';

    echo '<span itemprop="addressRegion">'. $m['listing_state'][0] .'</span></div>';

  }
        else {
        echo '';}

  }



 ?>
