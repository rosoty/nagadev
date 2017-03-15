<?php


piklist('field',array(
  'type'        => 'text'
  ,'field'      => 'recent_listings_widget_title'
  ,'label'      => __('Widget Title','sdp')

));


piklist('field',array(
  'type'        => 'select'
  ,'field'      => 'recent_listings_widget_count'
  ,'label'      => __('Listing Count','sdp')
  ,'help'       => __('Set the number of recent listings to display.  The default is 5.','sdp')
  ,'choices'    => array(
    '1'     => '1'
    ,'2'    => '2'
    ,'3'    => '3'
    ,'4'    => '4'
    ,'5'    => '5'
    ,'6'    => '6'
    ,'7'    => '8'
    ,'9'    => '9'
    ,'10'   => '10'
  )
  ,'value'      => '5'
  ,'columns'    =>2


));



 ?>
