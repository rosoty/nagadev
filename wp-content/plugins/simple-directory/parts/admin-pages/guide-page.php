<?php
/*
 * Page: simple-directory-guide
 */

global $current_user;
get_currentuserinfo();

?>
<style type="text/css">
#wpcontent {background-color: #ffffff;}
.guide-content p {font-size:16px;}
a .dashicons {text-decoration: none;}
.row {width:100%;}
.col-12 {width:100%;}
.col-9 {width:75%;}
.col-8 {width:66.66%;}
.col-6 {width:50%;}
.col-4 {width:33.33%;}
.col-3 {width:25%;}

[class*='col-'] {
  float: left;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

*, *:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

[class*='col-'] {
  padding-right: 20px;
}
[class*='col-']:last-of-type {
  padding-right: 0;
}
[class*='col-'] {
  padding-right: 20px;
}
[class*='col-']:last-of-type {
  padding-right: 0;
}
.grid-pad > [class*='col-']:last-of-type {
  padding-right: 20px;
}
.white-bg {background-color:#ffffff; border:1px solid #BDBDBD;}
.box {padding:10px; margin-top:3px;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
border-radius: 3px;
padding-bottom:15px;}
.btn {
  -webkit-box-shadow: 0px 1px 3px #666666;
  -moz-box-shadow: 0px 1px 3px #666666;
  box-shadow: 0px 1px 3px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 16px;
  background: #3498db;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
  margin-bottom:5px;
}

.btn:hover {
		color:#ffffff;
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
text-decoration:underline;
}
.center {text-align:center;}
</style>
<div class="guide-content">
  <div class="row">
  <div class="col-12">
    <h1><?php _e('Version','simple-dir');?>: <?php $version = get_option('SDIR_VERSION_NUM');
    echo $version;?></h1>
  </div>
  <p>

  <?php _e('Developed by:','simple-dir');?> <a href="http://contexta.ca" target="_blank">Contexta</a>
</p>
<p>
  <a class="twitter_link" href="http://twitter.com/michaellautman" target="_blank"><span class="dashicons dashicons-twitter"></span></a>
  <a class="facebook_link" href="http://facebook.com/contextadev" target="_blank"><span class="dashicons dashicons-facebook"></span></a>
</p>
</div>
<div class="row">

<div class="col-8">
<p>
  <?php _e('Quickly and easily create almost a directory of local businesses, organizations and even individuals.','simple-dir');?>
</p>
  <h2><?php _e('Listings','simple-dir');?></h2>

<p><?php _e('Simple Directory creates a custom post type called a <strong>Listing</strong>.  Listings are ther basic building block of your directory site.','simple-dir');?></p>
<h2><?php _e('Use Categories for SEO','sdir');?></h2>
<p>
  <?php _e('Listings can be organized into <strong>Categories</strong>, just like blog posts.  When you create a category, you can add a description and even a featured image that will be displayed on the category page.  You can enhance the descriptions by formatting them with HTML.','simple-dir');?>
</p>
<h2><?php _e('Widgets','simple-dir');?></h2>
<p>
  <?php _e('Two easy to use widgets are included in Simple Directory:  <strong>Listings Search</strong> and <strong>Recent Listings</strong>.','simple-dir');?>
</p>
<div class="row">
  <div class="col-6">
    <img src="../wp-content/plugins/simple-directory/admin/img/search-widget.png"/>
  </div>
  <div class="col-6">
    <img src="../wp-content/plugins/simple-directory/admin/img/recent-listings-widget.png" />
  </div>
</div>
<h2><?php _e('Powerful Search Shortcode','simple-dir');?></h2>
<p>
  <?php _e('use the <strong>[listings_search]</strong> shortcode to easily allow your site visitors to search only listings on your site. ','simple-dir');?>
</p>
<h2><?php _e('Support','simple-dir');?></h2>
<p><?php _e('Looking for support? Got questions?','simple-dir');?>  <a href="https://wordpress.org/support/plugin/simple-directory" target="_blank"><?php _e('Visit the support forum to get answers','simple-dir');?></a>.  <?php _e('Want more?','simple-dir');?>  <a href="http://codecanyon.net/item/simple-directory-pro/11869464man/portfolio?ref=michaellautman" target="_blank"><?php _e('Upgrage to Pro','simple-dir');?></a>.</p>

</div>
<div class="col-4 center">
<div class="box white-bg">

<h2><?php _e('Want More?','simple-dir');?></h2>
<h3><?php _e('More Features.  More Support.','simple-dir');?></h3>
<p><?php _e('<strong>Simple Directory Pro</strong> gives you more features and more control to take your directory site to new heights.','simple-dir');?></p>
<p><ul><li>Display payment types and business hours</li>
<li>"Add to Contacts" link</li>
<li>New features coming all the time</li>
</ul>
<a href="http://codecanyon.net/item/simple-directory-pro/11869464man/portfolio?ref=michaellautman" target="_blank" class="btn"><?php _e('Learn About Pro','simple-dir');?></a>
</div>
<div class="box white-bg">
<h2><?php _e('Improve Your Local SEO','simple-dir');?></h2>
<p><?php _e('Display your contact info property formatted for Rich Snippets, with the <strong>FREE</strong> hCard Widget Plugin','simple-dir');?></p>
<a href="http://wordpress.org/plugins/hcard-widget" target="_blank" class="btn"><?php _e('Get the hCard Widget','simple-dir');?></a>
</div>
</div>
</div>

</div>
