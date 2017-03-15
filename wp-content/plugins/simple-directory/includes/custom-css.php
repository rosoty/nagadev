<?php
//Inject Custom CSS

add_action( 'wp_head', 'simple_directory_custom_styles' );

function simple_directory_custom_styles() {

if ('listing' == get_post_type()){

  echo '<style type="text/css" id="sdir-custom-css" media="all">' . "\r\n";

 $settings = get_option('simple_directory_settings');
$custom_css = $settings['listing_custom_css'];
if(isset($settings['listing_content_padding'])  && $settings['listing_content_padding'] !=''){
  $padding = 'padding-left:'. $settings['listing_content_padding'] .'!important;padding-right:'.$settings['listing_content_padding'].'!important;';
}
else {$padding = '';}



if(isset($settings['single_listing_width']) && $settings['single_listing_width'] !=''){
  $single_width = 'width:'. $settings['single_listing_width'] .'!important;';

}
else {$single_width ='';}

if(isset($settings['archive_listing_width']) && $settings['archive_listing_width'] !=''){
  $archive_width = 'width:'. $settings['archive_listing_width'] .'!important;';

}
else {$archive_width ='';}
if(isset($settings['sdir_archive_list_title_size'][0])){
  $archive_listing_title_size = $settings['sdir_archive_list_title_size'][0];
}
else {
  $archive_listing_title_size = '1.75';
}
if(isset($settings['sdir_single_list_title_size'][0])){
  $single_listing_title_size = $settings['sdir_single_list_title_size'][0];
}
else {
  $single_listing_title_size = '1.0';
}

	echo $custom_css;
  echo '.single-listing .entry-title{font-size:' .$single_listing_title_size. 'rem!important;}';
  echo '.tax-listing_category .entry-title {font-size:'. $archive_listing_title_size.'rem!important;}';
  echo '@media screen and (min-width:61.5625em){';
 echo '.single-content {'. $single_width .'' .$padding.'}';
 echo '.archive-listing{'.$archive_width.'}}';
  echo '</style>' . "\r\n";
}


}


 ?>
