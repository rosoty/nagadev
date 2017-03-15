<?php
//Theme & Plugin Compatibility
function simple_directory_vc_compatibility(){
  $directory_settings = get_option('simple_directory_settings');
  if(isset($directory_settings['listing_vc_compatibility']) && $directory_settings['listing_vc_compatibility'] == 'yes'){
    echo '<div class="theme_page" style="visibility: hidden; padding: 0 !important; height: 0 !important;">
  	<div class="vc_row wpb_row vc_row-fluid"></div>
  </div>';
  }
  else { echo '';}
}
function sdir_single_id(){
//Footer Credit Link
function simple_directory_credit_link(){
	echo '<p>Simple Directory Plugin by <a href="http://contexta.ca" target="_blank" title="Contexta WordPress Development">Contexta</a>.</p>';
}
$directory_settings = get_option('simple_directory_settings');
$credit_link = $directory_settings['show_credit_link'];
if ($credit_link =='yes'){
	add_action('wp_footer','simple_directory_credit_link');
}