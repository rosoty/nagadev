<?php
/*
Title:Listing Details
Post Type: listing
Priority: high
*/
piklist ('field', array(
	'type' => 'radio'
	,'field' => 'listing_type'
	,'label' =>__('Type','simple-dir')
	,'value' =>'organization'
	,'attributes' => array(
		'class' =>'text'
	)
	,'choices' => array(
	'individual' => __('Individual','simple-dir')
	,'organization' => __('Organization')
	)
	));

piklist ('field', array(
		'type' => 'text'
		,'field' =>'listing_ind_org'
		,'label' => __('Organization','simple-dir')
		,'attributes' => array(
			'class' => 'text'
			)
		,'conditions' => array(
		array(
			'field' => 'listing_type'
			,'value' =>'individual'
			))
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
			));
piklist ('field' ,array(
		'type' =>'text'
		,'field' =>'listing_ind_title'
		,'label' =>__('Title','simple-dir')
		,'attributes'=>array(
			'class' =>'text'
			)
		,'conditions' => array(
			array(
				'field' => 'listing_type'
				,'value' =>'individual'
				))
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
			));
piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_email',
	'label' => __('Email Address','simple-dir'),
	'attributes' => array(
		'class' => 'text')
	,'sanitize' => array(
      array(
        'type' => 'email'
      )
    )
));

piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_phone_1',
	'label' => __('Telephone Number','simple-dir'),
	'description' => __('Primary Telephone Number','simple-dir'),
	'attributes' => array(
		'class' =>'text'
	)
	,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_phone_2',
	'label' => __('Telephone Number','simple-dir'),
	'description' => __('Other Telephone Number','simple-dir'),
	'attributes' => array(
		'class' =>'text'
	)
	,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type' => 'text'
	,'field' =>'phone_2_label'
	,'label' => __('Label for Other Phone Number','simple-dir')
	,'help' =>__('Enter the label you want displayed with the other phone number.  Examples are \'mobile\' or \'toll free\'.','simple-dir')
	,'sanitize' => array(
		array(
		'type' => 'text_field'
		))
		));

piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_fax',
	'label' => __('Fax Number','simple-dir'),
	'description' => '',
	'attributes' => array(
		'class' =>'text'
	)
	,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));
piklist ('field', array(
	'type' => 'text',
	'field' => 'listing_website_url',
	'label' => __('Website URL','simple-dir'),
	'description' =>__('The address of your website, <strong>without the http://</strong>','simple-dir'),
	'attributes' => array(
		'class' =>'text')


));



piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_street_address',
	'label'=> __('Street Address','simple-dir'),
	'description' => __('Street Address','simple-dir'),
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_city',
	'label'=> __('City','simple-dir'),
	'description' => __('City','simple-dir'),
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_state',
	'label'=> __('State/Province','simple-dir'),
	'description' => '',
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_country',
	'label'=> __('Country','simple-dir'),
	'description' => '',
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));

piklist ('field', array(
	'type'=> 'text',
	'field'=> 'listing_postalcode',
	'label'=> __('ZIP/Postal Code','simple-dir'),
	'description' => '',
	'attributes' => array(
		'class' => 'text')
		,'sanitize' => array(
      array(
        'type' => 'text_field'
      )
    )
));
