<?php
/*
Title: Simple Directory Settings
Setting: simple_directory_settings
Order: 1
Tab: Settings
Sub Tab: Basic

Flow: SDIR Workflow

*/

 piklist ('field', array(
	'type' => 'select'
	,'field' =>'simple_directory_disable_foundation'
	,'label' => __('Disable Foundation CSS?', 'simple_dir')
	,'help' => __('If your theme already uses Foundation, or if you are experiencing conflicts with the styling or layouts, you can disable Simple Directory&apos;s loading of the Foundation CSS.','simple_dir')
	,'attributes' => array(
		'class'=> 'text'
		)
	,'choices' => array(
		'yes' => __('Yes','simple_dir')
		,'no' => __('No', 'simple_dir')
		)
	,'value' => 'no'
	)
	);

  piklist('field',array(
    'type'=>'select'
    ,'field'=>'sdir_category_image_plugin'
    ,'label'=>__('This site uses the Categories Images Plugin','simple-dir')
    ,'help'=>__('If you are upgrading from a previous version of Simple Directory, you may be using the Categories Images plugin.  If you want to keep using it, select \'yes\'.  If you want to use the built in feature that allows you assign images to each category, select \'no\'','simple-dir')
    ,'value'=>'no'
    ,'choices'=>array(
      'yes'=>__('Yes','simple-dir')
      ,'no'=>__('No','simple-dir')
    )
  ));
  piklist('field',array(
    'type' => 'select'
    ,'field'=>'sdir_address_format'
    ,'label'=>__('Postal Address Format','simple-dir')
    ,'description'=>__('Choose the formatting of postal address on single listings and category pages.  Click the \'?\' for details.','simple-dir')
    ,'help'=>__('Two options are available:  US-UK-CANADA, which feature the zip or postal code AFTER the name of the city, or  EU-CHINA, which places the postal code BEFORE the name of the city.','simple-dir')
    ,'value'=>'us'
    ,'choices'=> array(
      'us'=>__('US-UK-CANADA','simple-dir')
      ,'eu'=>__('EU-CHINA','simple-dir')
    )
  ));
		 piklist ('field', array(
	'type' => 'select'
	,'field'=>'enable_sitelinks_search'
	,'label'=>__('Enable Sitelinks Search in Google Results?','simple-dir')
	,'value'=> 'yes'
	,'attributes' => array(
		'class' => 'text'
		)
	,'choices' =>array(
		'yes' => __('Yes','simple-dir')
		,'no' => __('No','simple-dir')
		)
		));

piklist ('field', array(
	'type' => 'select'
	,'field' =>'show_comments'
	,'label' =>__('Enable Comments?','simple-dir')
	,'help' => __('Allow users to leave comments on listings?','simple-dir')
	,'value' => 'yes'
	,'choices' => array(
		'yes' => __('Yes', 'simple-dir')
		,'no' => __('No','simple-dir')
		)
	,'attributes' => array(
		'class' => 'text'
		)
		));
/*
 piklist ('field', array(
	'type' => 'select'
	,'field'=>'show_credit_link'
	,'label'=>__('Show a credit link in the footer?','simple-dir')
	,'help' =>__('This plugin is free, but it takes a lot of work.  Show a little love by letting us place a small link in the footer of your site.  Thanks!','simple-dir')
	,'value' => 'no'
	,'attributes' => array(
		'class' => 'text'
		)
	,'choices' =>array(
		'yes' => __('Yes','simple-dir')
		,'no' => __('No','simple-dir')
		)
		));
    */
  piklist('field', array(
    'type' => 'textarea'
    ,'field' => 'listing_custom_css'
    ,'label' => __('Custom CSS','simple-dir')
	,'help' => __('You can customize the appearance of your listings and archive pages with your own CSS.','simple-dir')
    ,'value' => ''
    ,'attributes' => array(
      'rows' => 10
      ,'cols' => 50
      ,'class' => 'large-text code'
    )
  ));

piklist ('field',array(
  'type'=>'select',
  'field'=>'listing_vc_compatibility',
  'label'=>__('Enable Visual Composer Compatibility','simple-dir'),
  'description'=>__('If your theme uses the <a href="http://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431" target="_blank">Visual Composer</a> and/or the <a href="http://wpmegamenu.com/" target="_blank">UberMenu</a> plugins, you might need to enable this option to fix some compatibility issues.','simple-dir'),
    'value' =>'no',
    'choices'=> array(
      'yes'=>__('Yes','simple-dir'),
      'no'=>__('No','simpe-dir')
    )
));
/*
piklist('field',array(
  'type'=>'text'
  ,'field' => 'listing_content_padding'
  ,'label'=> __('Set Content Padding','simple-dir')
  ,'help' =>__('Improve the appearance of the listings on your site by setting the padding around the content.','simple-dir')
  ,'description'=>__('Enter a number in px. Do not include\'px\'','simple-dir')
  ,'attributes' =>array(
    'class'=>'text'
  )
));
*/
