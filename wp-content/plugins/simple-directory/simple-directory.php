<?php
/**
 * Plugin Name: Simple Directory Plugin
 * Plugin URI: http://contexta.ca/simple-directory/
 * Description: Creates a very simple business listing post type.
 * Version:1.6.7
 * Author: michaellautman
 * Author URI: http://contexta.ca
 * Plugin Type: Piklist
 * Text Domain: simple-dir
 * Domain Path: /languages

 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *

 * @license http://www.gnu.org/licenses/old-licenses/gpl-3.0.html
 */


// Launch the plugin.
//Include the Piklist Checker

	define('SDIR_PLUGIN_URL', untrailingslashit(plugins_url('', __FILE__)));

	global $sdir_version;

	 $sdir_version = '1.6.6';

	  if (!defined('SDIR_VERSION_KEY'))
	      define('SDIR_VERSION_KEY', 'sdir_version');

	  if (!defined('SDIR_VERSION_NUM'))
	      define('SDIR_VERSION_NUM', '1.0.0');


	  add_option(SDIR_VERSION_KEY, SDIR_VERSION_NUM);
	  global $sdir_current_version;
	  $sdir_current_version = get_option(SDIR_VERSION_NUM);
		if ($sdir_version != $sdir_current_version){

		update_option('SDIR_VERSION_NUM',$sdir_version);
		 }
add_action('init', 'simple_dir_check_piklist');
function simple_dir_check_piklist()
{
  if(is_admin())
  {
   include_once('class-piklist-checker.php');

   if (!piklist_checker::check(__FILE__))
   {
     return;
   }
  }
}
add_action( 'plugins_loaded', 'simple_dir_load_textdomain' );
/**
 * Load plugin textdomain.
 *
 * @since 1.0.0
 */
function simple_dir_load_textdomain() {
  load_plugin_textdomain( 'simple-dir', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}


//Load The Templates
add_filter( 'template_include', 'simple_dir_load_templates' );
function simple_dir_load_templates( $template )
{
 if ( 'listing' === get_post_type() && is_single() )
 return dirname( __FILE__ ) . '/templates/single-listing.php';
	if ( 'listing' === get_post_type() && is_archive())
		return dirname(__FILE__) . '/templates/archive-listing.php';

 return $template;
}

//Create The Listing
include_once ('includes/create-listing.php');
//Edit The List Post Page

//Activate Sitelinks Search Box
include_once ('includes/sitelinks-searchbox-markup.php');
//Get The Shortcodes
include_once ('includes/shortcodes.php');

//Get The Template Functions
include_once('includes/template-classes.php');
include_once('includes/template-link-bar-functions.php');
include_once('includes/template-parts.php');
include_once('includes/template-title-functions.php');
include_once('includes/template-address-functions.php');
include_once('includes/template-map-directions-functions.php');
//Output the Settings
include_once ('includes/settings-output.php');
//Output Custom css
include_once('includes/custom-css.php');
//Customize the Query
include_once ('includes/query.php');
//Allow HTML in Category Descriptions
include_once('includes/html-in-categories.php');
//Enable Category images
include_once('includes/category-images.php');
//Enable Advanced Search
include_once('includes/advanced-search.php');

//Create The Settings Page
  add_filter('piklist_admin_pages', 'simple_directory_setting_pages');
  function simple_directory_setting_pages($pages)
  {
     $pages[] = array(
      'page_title' => __('Simple Directory Settings')
      ,'menu_title' => __('Settings', 'piklist')
      ,'sub_menu' => 'edit.php?post_type=listing'
      ,'capability' => 'manage_options'
      ,'menu_slug' => 'sdir-settings'
      ,'setting' => 'simple_directory_settings'
      ,'menu_icon' => plugins_url('piklist/parts/img/piklist-icon.png')
      ,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
      ,'single_line' => true
      ,'default_tab' => 'Basic'
      ,'save_text' => 'Save  Settings'
    );
		return $pages;
  }

 add_filter('piklist_admin_pages','simple_directory_guide_page');
  function simple_directory_guide_page($pages){


    $pages[] = array(
      'page_title' => __('Welcome To Simple Directory', 'simple-dir')
      ,'menu_title' => 'About'
		,'sub_menu' => 'edit.php?post_type=listing'
      ,'capability' => 'manage_options'
      ,'menu_slug' => 'simple-directory-guide'
      ,'single_line' => false
      ,'menu_icon' => plugins_url('piklist/parts/img/piklist-menu-icon.svg')
      ,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
    );
	return $pages;
	}



// Load Styles
function simple_directory_styles() {

	wp_register_style ('normalize', plugins_url('simple-directory/css/normalize.css', dirname(__FILE__)), false, false);
	wp_enqueue_style ('normalize');
	$directory_settings = get_option('simple_directory_settings');
	$disable_foundation = $directory_settings['simple_directory_disable_foundation'] == 'yes';
 if ($disable_foundation) {
 }
 else{
	wp_register_style( 'foundation', plugins_url('simple-directory/css/foundation.min.css', dirname(__FILE__)), false, false );
		wp_enqueue_style( 'foundation' );
  }
	wp_register_style('simple-directory-ficons', plugins_url('simple-directory/foundation-icons/foundation-icons.css', dirname(__FILE__)),false, false);
	wp_enqueue_style ('simple-directory-ficons');
	wp_register_style('simple-directory-style', plugins_url('simple-directory/style.css', dirname(__FILE__)),false, false);
	wp_enqueue_style('simple-directory-style');
}

add_action( 'wp_enqueue_scripts', 'simple_directory_styles');


//Update Notice

// add plugin upgrade notification
add_action('in_plugin_update_message-simple-directory/simple-directory.php', 'showUpgradeNotification', 10, 2);
function showUpgradeNotification($currentPluginMetadata, $newPluginMetadata){
   // check "upgrade_notice"
   if (isset($newPluginMetadata->upgrade_notice) && strlen(trim($newPluginMetadata->upgrade_notice)) > 0){
        echo '<p style="background-color: #d54e21; padding: 10px; color: #f9f9f9; margin-top: 10px"><strong>Users of Simple Directory Pro <em>SHOULD NOT UPDATE</em> until the next version of Simple Directory Pro is available!</strong> ';
         '</p>';
   }
}
