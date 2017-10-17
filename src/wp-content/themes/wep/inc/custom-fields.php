<?php

$countries = require WEP_VENDOR . '/umpirsky/country-list/data/en_GB/country.php';

if ( function_exists( "register_field_group" ) ) {
	register_field_group( array(
		'id'         => 'acf_mnr-fields',
		'title'      => 'MNR Fields',
		'fields'     => array(
			array(
				'key'             => 'field_5975c5f60af7e',
				'label'           => 'Group',
				'name'            => 'group',
				'type'            => 'relationship',
				'required'        => 1,
				'return_format'   => 'id',
				'post_type'       => array(
					0 => 'page',
				),
        'taxonomy' => array (
          0 => 'all',
        ),
				'filters'         => array(
					0 => 'search',
				),
				'result_elements' => array(
					0 => 'post_title',
				),
				'max'             => 1,
			),
		),
		'location'   => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'mnr',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options'    => array(
			'position'       => 'normal',
			'layout'         => 'no_box',
			'hide_on_screen' => array(),
		),
		'menu_order' => 0,
	) );
}


if ( function_exists( "register_field_group" ) ) {
	register_field_group( array(
		'id'         => 'acf_assigned-content-blocks',
		'title'      => 'Assigned Content Blocks',
		'fields'     => array(
			array(
				'key'             => 'field_595e437018a98',
				'label'           => 'Content Blocks',
				'name'            => 'assigned_blocks',
				'type'            => 'relationship',
				'instructions'    => 'Select the desired content blocks to assign to this page, and drag into the required order.',
				'return_format'   => 'object',
				'post_type'       => array(
					0 => 'content_block',
				),
				'taxonomy'        => array(
					0 => 'all',
				),
				'filters'         => array(
					0 => 'search',
				),
				'result_elements' => array(
					0 => 'post_type',
					1 => 'post_title',
				),
				'max'             => '',
			),
		),
		'location'   => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'page',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options'    => array(
			'position'       => 'normal',
			'layout'         => 'no_box',
			'hide_on_screen' => array(),
		),
		'menu_order' => 0,
	) );
	register_field_group( array(
		'id'         => 'acf_content-block-type',
		'title'      => 'Content Block Type',
		'fields'     => array(
			array(
				'key'           => 'field_595e465405629',
				'label'         => 'Type',
				'name'          => 'type',
				'type'          => 'select',
				'instructions'  => 'Content block layout format',
				'choices'       => array(
					''         => 'Standard',
					'image'    => 'Banner with title (optional image)',
					'cta'      => 'Call-to-action (with right-side image)',
					'sections' => 'Call-to-action (with sections)',
					'points'   => 'Call-to-action (with points)',
				),
				'default_value' => '',
				'allow_null'    => 0,
				'multiple'      => 0,
			),
			array(
				'key'           => 'field_5964ec11ce4cb',
				'label'         => 'Title',
				'name'          => 'title',
				'type'          => 'text',
				'instructions'  => 'Heading for the content block',
				'default_value' => '',
				'placeholder'   => '',
				'prepend'       => '',
				'append'        => '',
				'formatting'    => 'html',
				'maxlength'     => '',
			),
			array(
				'key'           => 'field_5964ec11ed4db',
				'label'         => 'Shortcode',
				'name'          => 'shortcode',
				'type'          => 'text',
				'instructions'  => 'Shortcode to be added directly after the block template',
				'default_value' => '',
				'placeholder'   => '',
				'prepend'       => '',
				'append'        => '',
				'formatting'    => '',
				'maxlength'     => '',
			),
			array(
				'key'          => 'field_595e56cb3b048',
				'label'        => 'Image',
				'name'         => 'image',
				'type'         => 'image',
				'save_format'  => 'object',
				'preview_size' => 'thumbnail',
				'library'      => 'all',
			),
			array(
				'key'           => 'field_595e57673b050',
				'label'         => 'Background Colour',
				'name'          => 'bg_colour',
				'type'          => 'color_picker',
				'default_value' => '',
			),
			array(
				'key'           => 'field_595e57673b049',
				'label'         => 'Font Colour',
				'name'          => 'colour',
				'type'          => 'color_picker',
				'default_value' => '',
			),
			/*array (
				'key' => 'field_59648b7bc3baf',
				'label' => 'Related Case Studies',
				'name' => 'related_casestudies',
				'type' => 'relationship',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_595e465405629',
							'operator' => '==',
							'value' => 'casestudies',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'object',
				'post_type' => array (
					0 => 'post',
				),
				'taxonomy' => array (
					0 => 'category:' . $case_studies->term_id,
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_title',
				),
				'max' => '',
			),
			array (
				'key' => 'field_59662c755e113',
				'label' => 'Related Events',
				'name' => 'related_events',
				'type' => 'relationship',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_595e465405629',
							'operator' => '==',
							'value' => 'events',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'object',
				'post_type' => array (
					0 => 'post',
				),
				'taxonomy' => array (
					0 => 'category:' . $events->term_id,
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_title',
				),
				'max' => '',
			),
			array (
				'key' => 'field_59662c8a5e114',
				'label' => 'Related News',
				'name' => 'related_news',
				'type' => 'relationship',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_595e465405629',
							'operator' => '==',
							'value' => 'news',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'object',
				'post_type' => array (
					0 => 'post',
				),
				'taxonomy' => array (
					0 => 'category:' . $news->term_id,
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_title',
				),
				'max' => '',
			),
			array (
				'key' => 'field_59664a2a5161b',
				'label' => 'Related Posts',
				'name' => 'related_any',
				'type' => 'relationship',
				'required' => 1,
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_595e465405629',
							'operator' => '==',
							'value' => 'any',
						),
					),
					'allorany' => 'all',
				),
				'return_format' => 'object',
				'post_type' => array (
					0 => 'post',
				),
				'taxonomy' => array (
					0 => 'category:' . $case_studies->term_id,
					1 => 'category:' . $events->term_id,
					2 => 'category:' . $news->term_id,
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'post_title',
				),
				'max' => '',
			),*/
			array(
				'key'             => 'field_5964b1b8127f0',
				'label'           => 'Linked Page',
				'name'            => 'linked_page',
				'type'            => 'relationship',
				'instructions'    => 'If selected, provides a button at the bottom of the block to the selected page',
				'return_format'   => 'object',
				'post_type'       => array(
					0 => 'page',
				),
				'taxonomy'        => array(
					0 => 'all',
				),
				'filters'         => array(
					0 => 'search',
				),
				'result_elements' => array(
					0 => 'post_title',
				),
				'max'             => 1,
			),
			array(
				'key'           => 'field_5964ec11ee4db',
				'label'         => 'Button Label',
				'name'          => 'button_label',
				'type'          => 'text',
				'instructions'  => 'Label for the linked page button (defaults to page title if blank)',
				'default_value' => '',
				'placeholder'   => '',
				'prepend'       => '',
				'append'        => '',
				'formatting'    => 'html',
				'maxlength'     => '',
			),
			array(
				'key'               => 'field_5964e987a10bb',
				'label'             => 'Section One',
				'name'              => 'section_1',
				'type'              => 'wysiwyg',
				'conditional_logic' => array(
					'status'   => 1,
					'rules'    => array(
						array(
							'field'    => 'field_595e465405629',
							'operator' => '==',
							'value'    => 'sections',
						),
						array(
							'field'    => 'field_595e465405629',
							'operator' => '==',
							'value'    => 'points',
						),
					),
					'allorany' => 'any',
				),
				'default_value'     => '',
				'toolbar'           => 'full',
				'media_upload'      => 'yes',
			),
			array(
				'key'               => 'field_5964e9a8a10bc',
				'label'             => 'Section Two',
				'name'              => 'section_2',
				'type'              => 'wysiwyg',
				'conditional_logic' => array(
					'status'   => 1,
					'rules'    => array(
						array(
							'field'    => 'field_595e465405629',
							'operator' => '==',
							'value'    => 'sections',
						),
						array(
							'field'    => 'field_595e465405629',
							'operator' => '==',
							'value'    => 'points',
						),
					),
					'allorany' => 'any',
				),
				'default_value'     => '',
				'toolbar'           => 'full',
				'media_upload'      => 'yes',
			),
			array(
				'key'               => 'field_5964e9b2a10bd',
				'label'             => 'Section Three',
				'name'              => 'section_3',
				'type'              => 'wysiwyg',
				'conditional_logic' => array(
					'status'   => 1,
					'rules'    => array(
						array(
							'field'    => 'field_595e465405629',
							'operator' => '==',
							'value'    => 'sections',
						),
						array(
							'field'    => 'field_595e465405629',
							'operator' => '==',
							'value'    => 'points',
						),
					),
					'allorany' => 'any',
				),
				'default_value'     => '',
				'toolbar'           => 'full',
				'media_upload'      => 'yes',
			),
			array(
				'key'               => 'field_5964e9b2a10be',
				'label'             => 'Section Four',
				'name'              => 'section_4',
				'type'              => 'wysiwyg',
				'conditional_logic' => array(
					'status'   => 1,
					'rules'    => array(
						array(
							'field'    => 'field_595e465405629',
							'operator' => '==',
							'value'    => 'sections',
						),
						array(
							'field'    => 'field_595e465405629',
							'operator' => '==',
							'value'    => 'points',
						),
					),
					'allorany' => 'any',
				),
				'default_value'     => '',
				'toolbar'           => 'full',
				'media_upload'      => 'yes',
			),
		),
		'location'   => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'content_block',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options'    => array(
			'position'       => 'normal',
			'layout'         => 'no_box',
			'hide_on_screen' => array(),
		),
		'menu_order' => 0,
	) );
}

//////////////////

if ( function_exists( "register_field_group" ) ) {
	register_field_group( array(
		'id'         => 'acf_member-fields',
		'title'      => 'Member Fields',
		'fields'     => array(
			array(
				'key'           => 'field_597068f8afb36',
				'label'         => 'Group',
				'name'          => 'group',
				'type'          => 'select',
				'required'      => 1,
				'choices'       => array(
					'country'      => 'Country',
					'organisation' => 'Organisation',
					'industry'     => 'Industry',
				),
				'default_value' => '',
				'allow_null'    => 0,
				'multiple'      => 0,
			),
			array(
				'key'               => 'field_597069491a1af',
				'label'             => 'Country',
				'name'              => 'country',
				'type'              => 'select',
				'conditional_logic' => array(
					'status'   => 1,
					'rules'    => array(
						array(
							'field'    => 'field_597068f8afb36',
							'operator' => '==',
							'value'    => 'country',
						),
					),
					'allorany' => 'all',
				),
				'choices'           => $countries,
				'default_value'     => '',
				'allow_null'        => 0,
				'multiple'          => 0,
			),
			array(
				'key'           => 'field_59706f6101217',
				'label'         => 'Sign Up',
				'name'          => 'sign_up',
				'type'          => 'select',
				'choices'       => array(
					'none' => 'None',
					'ga'   => 'Global Alliance',
					'wp'   => 'WePROTECT',
					'wpga' => 'WPGA',
				),
				'default_value' => '',
				'allow_null'    => 0,
				'multiple'      => 0,
			),
			array(
				'key'           => 'field_597070b8f57f1',
				'label'         => 'Engagement',
				'name'          => 'engagement',
				'type'          => 'wysiwyg',
				'default_value' => '',
				'toolbar'       => 'full',
				'media_upload'  => 'yes',
			),
			array(
				'key'           => 'field_597070cd13e15',
				'label'         => 'Actions',
				'name'          => 'actions',
				'type'          => 'wysiwyg',
				'default_value' => '',
				'toolbar'       => 'full',
				'media_upload'  => 'yes',
			),
			array(
				'key'               => 'field_597070892d24e',
				'label'             => 'Criticality',
				'name'              => 'criticality',
				'type'              => 'select',
				'conditional_logic' => array(
					'status'   => 1,
					'rules'    => array(
						array(
							'field'    => 'field_597068f8afb36',
							'operator' => '==',
							'value'    => 'country',
						),
					),
					'allorany' => 'all',
				),
				'choices'           => array(
					0 => 'Low',
					1 => 'Medium',
					2 => 'High',
				),
				'default_value'     => '',
				'allow_null'        => 0,
				'multiple'          => 0,
			),
			array(
				'key'               => 'field_5970700ba285d',
				'label'             => 'Official Contact',
				'name'              => 'official_contact',
				'type'              => 'text',
				'conditional_logic' => array(
					'status'   => 1,
					'rules'    => array(
						array(
							'field'    => 'field_597068f8afb36',
							'operator' => '==',
							'value'    => 'country',
						),
					),
					'allorany' => 'all',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'formatting'        => 'html',
				'maxlength'         => '',
			),
			array(
				'key'               => 'field_597070273ed0c',
				'label'             => 'Official Contact Email',
				'name'              => 'official_contact_email',
				'type'              => 'email',
				'conditional_logic' => array(
					'status'   => 1,
					'rules'    => array(
						array(
							'field'    => 'field_597068f8afb36',
							'operator' => '==',
							'value'    => 'country',
						),
					),
					'allorany' => 'all',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
			),
			array(
				'key'               => 'field_59706fb813519',
				'label'             => 'Minister',
				'name'              => 'minister',
				'type'              => 'text',
				'conditional_logic' => array(
					'status'   => 1,
					'rules'    => array(
						array(
							'field'    => 'field_597068f8afb36',
							'operator' => '==',
							'value'    => 'country',
						),
					),
					'allorany' => 'all',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
				'formatting'        => 'html',
				'maxlength'         => '',
			),
			array(
				'key'               => 'field_59706ffc5d1c4',
				'label'             => 'Minster Email',
				'name'              => 'minster_email',
				'type'              => 'email',
				'conditional_logic' => array(
					'status'   => 1,
					'rules'    => array(
						array(
							'field'    => 'field_597068f8afb36',
							'operator' => '==',
							'value'    => 'country',
						),
					),
					'allorany' => 'all',
				),
				'default_value'     => '',
				'placeholder'       => '',
				'prepend'           => '',
				'append'            => '',
			),
		),
		'location'   => array(
			array(
				array(
					'param'    => 'post_type',
					'operator' => '==',
					'value'    => 'member',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options'    => array(
			'position'       => 'acf_after_title',
			'layout'         => 'no_box',
			'hide_on_screen' => array(
				0 => 'permalink',
				1 => 'the_content',
				2 => 'slug',
			),
		),
		'menu_order' => 0,
	) );
}


/*if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_mnr-groups',
		'title' => 'MNR Groups',
		'fields' => array (
			array (
				'key' => 'field_597f46ce9d522',
				'label' => 'Group Colour',
				'name' => 'group_colour',
				'type' => 'color_picker',
				'default_value' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'mnr.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
*/
