<?php

piklist('field', array(
	'type' =>'text',
	'field' =>'search_widget_title',
	'label' =>__('Widget Title','simple-dir'),
	'attributes' =>array(
		'class'=>'text'
		)
		));

piklist('field',array(
	'type' =>'text',
	'field' => 'search_widget_text',
	'label' => __('Default Search Text','simple-dir'),
	'help' => __('Set the default text that appears in the search box.','simple-dir'),
	'value' => __('What are you looking for?','simple-dir'),
	'attributes' => array(
		'class' => 'text'
		)
		));
