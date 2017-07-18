<?php

/*
Plugin Name: WePROTECT
Description: Provides core data on activation of WEP theme if no content found
Version: 1.0.0
Author: Panlogic Ltd
*/

class Wep_Plugin {
	public static $categories = [
		'Case studies' => 0,
		'Events' => 0,
		'News' => 0
	];
	public static $forms = [
		'Apply for membership' => 'apply-for-membership'
    ];
	public static $menus = [

		// Top menu
		'Top' => [
			'contact-us' => ''
		],

		// Main menu
		'Main' => [
			'who-we-are' => [
				'our-mission' => '',
				'our-commitments' => '',
				'our-leadership' => '',
				'our-members' => '',
				'who-we-work-with' => '',
				'our-history' => '',
				'contact-us' => ''
			],
			'what-we-do' => [
				'why-we-must-act' => '',
				'funded-projects' => '',
				'faqs' => '',
				'how-you-can-help' => '',
				'how-to-report-cseo' => ''
			],
			'funding' => [
				'about-the-fund' => '',
				'how-the-fund-is-spent' => '',
				'apply-for-funding' => '',
				'donors' => '',
				'other-funding-methods' => ''
			],
			'get-involved' => [
				'membership' => '',
				'donating' => ''
			],
			'resources' => [
				'model-national-response' => '',
				'policy-legislation' => '',
				'case-studies' => '',
				'educators-and-parents' => '',
				'useful-links' => '',
				'submit-resources' => ''
			],
			'news-and-events' => [
				'news' => '',
				'newsletter' => '',
				'events' => ''
			]
		],

		// Support menu
		'Support' => [
			'contact-us' => '',
			'useful-contacts' => '',
			'helplines-in-your-region' => '',
			'feedback' => ''
		],

		// Social menu
		'Connect' => [
			'link_facebook' => '',
			'link_twitter' => '',
			'link_email' => ''
		]
	];
	public static $slugs = [];
	public static $fields = [
        'title' => '5964ec11ce4cb',
        'type' => '595e465405629',
        'bg_colour' => '595e57673b050',
        'colour' => '595e57673b049',
        'linked_page' => '5964b1b8127f0',
        'button_label' => '5964ec11ee4db',
        'section_1' => '5964e987a10bb',
        'section_2' => '5964e9a8a10bc',
        'section_3' => '5964e9b2a10bd',
        'shortcode' => '5964ec11ed4db'
    ];
	public static $blocks = [
		'landing-banner' => [
			'post_title' => 'Landing banner',
			'post_content' => '',
			'title' => 'Worldwide cooperation to end child sexual exploitation online',
			'type' => 'image',
			'bg_colour' => '#eaeaea',
			'linked_page' => 'our-mission'
		],
		'why-we-must-act' => [
			'post_title' => 'Why we must act',
			'post_content' => '<p>Leo suspendisse imperdiet augue etiam ac in a ullamcorper tortor suspendisse ad ullamcorper maecenas class at a.</p>',
			'title' => 'Why we must act',
			'type' => 'cta3',
			'linked_page' => 'who-we-work-with',
			'section_1' => '<p>Lorem ipsu dolor sit amet</p>',
			'section_2' => '<p>Lorem ipsu dolor sit amet</p>',
			'section_3' => '<p>Lorem ipsu dolor sit amet</p>'
		],
		'model-national-response' => [
			'post_title' => 'Model National Response',
			'post_content' => '<p>Leo suspendisse imperdiet augue etiam ac in a ullamcorper tortor suspendisse ad ullamcorper maecenas class at a.</p>',
			'title' => 'Model National Response',
			'type' => 'cta1',
			'linked_page' => 'model-national-response',
			'button_label' => 'View full guidance'
		],
		'fund-to-end-violence-against-children' => [
			'post_title' => 'Fund to end violence against children',
			'post_content' => '<p>Leo suspendisse imperdiet augue etiam ac in a ullamcorper tortor suspendisse ad ullamcorper maecenas class at a.</p><h4>Case studies</h4>',
			'title' => 'Fund to end violence against children',
			'type' => '',
			'bg_colour' => '#eaeaea',
			'linked_page' => 'funding',
			'button_label' => 'Find out about funding'
		],
		'latest-news-and-events' => [
			'post_title' => 'Latest news and events',
			'type' => '',
			'title' => 'Latest news and events',
			'shortcode' => '[wep-latest max="3" categories="news,events"]',
		],

		// Our mission
		'our-mission' => [
			'post_title' => 'Our mission',
			'post_content' => '<p>We have assembled, for the first time, the influence, resources and expertise to transform how this crime is dealt with worldwide, to deliver our vision of more victims safeguarded, more perpetrators apprehended and an end to online child sexual exploitation.</p>',
			'title' => 'Our mission',
			'type' => 'cta1'
		],
		'achieving-our-goals' => [
			'post_title' => 'Achieving our goals',
			'post_content' => '<p>The WePROTECT Global Alliance Board are focused on four key areas to help deliver our mission</p>',
			'title' => 'Achieving our goals',
			'type' => 'cta3',
			'linked_page' => 'what-we-do',
			'section_1' => '<p>Securing high-level commitment by governments, the technology industry and international and civil society organisations to tackling this crime</p>',
			'section_2' => '<p>Support comprehensive national action, through the WePROTECT Model National Response and the Fund to End Violence Against Children</p>',
			'section_3' => '<p>Galvanising global action by catalysing and driving critical interventions needed to end online child sexual exploitation</p>'
		],
		'un-sustainable-development-goals' => [
			'post_title' => 'UN sustainable development goals',
			'post_content' => '<h4>WePROTECT Global Alliance will support the landmark commitment by world leaders to end abuse, exploitation, trafficking and all forms of violence and abuse of children by 2030 as part of the UN Sustainable Development Goals.</h4>',
			'title' => '',
			'type' => 'cta1'
		],

		'we-protect-strategy' => [
			'post_title' => 'WePROTECT Global Alliance Statergy',
			'post_content' => '<p>Read more about our vision and objectives in the WePROTECT Global Alliance Strategy.</p>',
			'title' => 'WePROTECT Global Alliance Statergy',
			'type' => '',
			'bg_colour' => '#eaeaea'
		],

		'membership' => [
			'post_title' => 'Membership',
			'post_content' => '<p>The WePROTECT Global Alliance is a movement of unprecedented reach, with 70 countries already members of WePROTECT or the Global Alliance, along with major international organisations, 20 of the biggest names in the global technology industry, and 17 leading civil society organisations.</p>',
			'title' => 'Membership',
			'type' => 'cta1'
		],
        'membership-form' => [
	        'post_title' => 'Membership form',
	        'title' => 'Apply for membership',
	        'post_content' => '<p>Can your government, company or organisation join them, by making a commitment to end the sexual exploitation of children online? Contact us  using the form below to learn more.</p><p>[contact-form-7 id="4" title="Apply for membership"]</p>'
		],
		'why-join' => [
			'post_title' => 'Membership - Why join',
			'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
			'title' => 'Why join?',
			'type' => 'cta3',
			'linked_page' => 'who-we-are',
			'section_1' => '<p>Reason one</p>',
			'section_2' => '<p>Reason two</p>',
			'section_3' => '<p>Reason three</p>'
		],
		'join-us' => [
			'post_title' => 'Join us',
			'post_content' => '<p>Can your government, company or organisation join them, by making a commitment to end the sexual exploitation of children online? Contact us to learn more.</p>',
			'title' => 'Join us',
			'type' => 'cta1',
			'linked_page' => 'membership',
            'button_label' => 'Why join WePROTECT?'
		],
		'how-to-join' => [
			'post_title' => 'How to join',
			'post_content' => '<p>Leo suspendisse imperdiet augue etiam ac in a ullamcorper tortor suspendisse ad ullamcorper maecenas class at a.</p>',
			'title' => 'How to join',
			'type' => 'points',
			'bg_colour' => '#eaeaea',
			'linked_page' => 'join-us',
			'button_label' => 'Apply for membership',
			'section_1' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
			'section_2' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
			'section_3' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
		],
		'our-members' => [
			'post_title' => 'Our members',
			'post_content' => '<p>WePROTECT Global Alliance to End Child Sexual Exploitation Online combines two major initiatives: the Global Alliance, led by the U.S. Department of Justice and the EU Commission and WePROTECT, which was convened by the UK.</p><p>This new, merged initiative has unprecedented reach, with 70 countries already members of WePROTECT or the Global Alliance, along with major international organisations, 20 of the biggest names in the global technology industry, and 17 leading civil society organisations.</p>',
			'title' => 'Our members',
			'type' => '',
			'linked_page' => 'our-members',
			'button_label' => 'Who\'s a member?'
		],
		'our-members-list' => [
			'post_title' => 'Our members list',
			'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
			'title' => 'Our members',
			'type' => '',
            'shortcode' => '[wep-members-list default="country"]'
		]
	];
	public static $posts = [
		'home' => array(
			'post_type' => 'page',
			'post_title' => 'Worldwide cooperation to end child sexual exploitation online',
			'post_content' => '',
			'blocks' => [
				'landing-banner',
                'why-we-must-act',
				'model-national-response',
				'fund-to-end-violence-against-children',
				'latest-news-and-events'
			]
		),
		'join-us' => array(
			'post_type' => 'page',
			'post_title' => 'Join us',
			'post_content' => '',
            'blocks' => [
	            'membership',
	            'membership-form'
            ]
		),
		'useful-contacts' => array(
			'post_type' => 'page',
			'post_title' => 'Useful contacts',
			'post_content' => '',
			'menu_order' => 100
		),
		'i-need-help' => array(
			'post_type' => 'page',
			'post_title' => 'I need help',
			'post_content' => '',
			'menu_order' => 101
		),
		'helplines-in-your-region' => array(
			'post_type' => 'page',
			'post_title' => 'Helplines in your region',
			'post_content' => '',
			'menu_order' => 102
		),
		'feedback' => array(
			'post_type' => 'page',
			'post_title' => 'Feedback',
			'post_content' => '',
			'menu_order' => 103
		),

		/**
		 * Who we are
		 */
		'who-we-are' => array(
			'post_type' => 'page',
			'post_title' => 'Who we are',
			'post_content' => '',
			'menu_order' => 200
		),
		'our-mission' => array(
			'post_type' => 'page',
			'post_title' => 'Our mission',
			'post_content' => '',
			'menu_order' => 201,
			'blocks' => [
				'our-mission',
				'achieving-our-goals',
				'un-sustainable-development-goals',
				'our-members',/*,
                'we-protect-strategy',
                'join-us'*/
			]
		),
		'our-commitments' => array(
			'post_type' => 'page',
			'post_title' => 'Our commitments',
			'post_content' => '',
			'menu_order' => 202
		),
		'our-leadership' => array(
			'post_type' => 'page',
			'post_title' => 'Our leadership',
			'post_content' => '',
			'menu_order' => 203
		),
		'our-members' => array(
			'post_type' => 'page',
			'post_title' => 'Our members',
			'post_content' => '',
			'menu_order' => 204,
			'blocks' => [
				'membership',
                'our-members-list'
			]
		),
		'who-we-work-with' => array(
			'post_type' => 'page',
			'post_title' => 'Who we work with',
			'post_content' => '',
			'menu_order' => 205
		),
		'our-history' => array(
			'post_type' => 'page',
			'post_title' => 'Our history',
			'post_content' => '',
			'menu_order' => 206
		),
		'contact-us' => array(
			'post_type' => 'page',
			'post_title' => 'Contact us',
			'post_content' => '',
			'menu_order' => 207
		),

		/**
		 * What we do
		 */
		'what-we-do' => array(
			'post_type' => 'page',
			'post_title' => 'What we do',
			'post_content' => '',
			'menu_order' => 300
		),
		'why-we-must-act' => array(
			'post_type' => 'page',
			'post_title' => 'Why we must act',
			'post_content' => '',
			'menu_order' => 301
		),
		'funded-projects' => array(
			'post_type' => 'page',
			'post_title' => 'Funded projects',
			'post_content' => '',
			'menu_order' => 302
		),
		'faqs' => array(
			'post_type' => 'page',
			'post_title' => 'FAQs',
			'post_content' => '',
			'menu_order' => 303
		),
		'how-you-can-help' => array(
			'post_type' => 'page',
			'post_title' => 'How you can help',
			'post_content' => '',
			'menu_order' => 304
		),
		'how-to-report-cseo' => array(
			'post_type' => 'page',
			'post_title' => 'How to report CSEO',
			'post_content' => '',
			'menu_order' => 305
		),

		/**
		 * Funding
		 */
		'funding' => array(
			'post_type' => 'page',
			'post_title' => 'Funding',
			'post_content' => '',
			'menu_order' => 400
		),
		'about-the-fund' => array(
			'post_type' => 'page',
			'post_title' => 'About the fund',
			'post_content' => '',
			'menu_order' => 401
		),
		'how-the-fund-is-spent' => array(
			'post_type' => 'page',
			'post_title' => 'How the fund is spent',
			'post_content' => '',
			'menu_order' => 402
		),
		'apply-for-funding' => array(
			'post_type' => 'page',
			'post_title' => 'Apply for funding',
			'post_content' => '',
			'menu_order' => 403
		),
		'donors' => array(
			'post_type' => 'page',
			'post_title' => 'Donors',
			'post_content' => '',
			'menu_order' => 404
		),
		'other-funding-methods' => array(
			'post_type' => 'page',
			'post_title' => 'Other funding methods',
			'post_content' => '',
			'menu_order' => 405
		),

		/**
		 * Get involved
		 */
		'get-involved' => array(
			'post_type' => 'page',
			'post_title' => 'Get involved',
			'post_content' => '',
			'menu_order' => 500
		),
		'membership' => array(
			'post_type' => 'page',
			'post_title' => 'Membership',
			'post_content' => '',
			'menu_order' => 501,
			'blocks' => [
				'membership',
				'why-join',
				'how-to-join',
				'our-members'
			]
		),
		'donating' => array(
			'post_type' => 'page',
			'post_title' => 'Donating',
			'post_content' => '',
			'menu_order' => 502
		),

		/**
		 * Resources
		 */
		'resources' => array(
			'post_type' => 'page',
			'post_title' => 'Resources',
			'post_content' => '',
			'menu_order' => 600
		),
		'model-national-response' => array(
			'post_type' => 'page',
			'post_title' => 'Model National Response',
			'post_content' => '',
			'menu_order' => 601
		),
		'policy-and-legislation' => array(
			'post_type' => 'page',
			'post_title' => 'Policy and legislation',
			'post_content' => '',
			'menu_order' => 602
		),
		'case-studies' => array(
			'post_type' => 'page',
			'post_title' => 'Case studies',
			'post_content' => '',
			'menu_order' => 603
		),
		'educators-and-parents' => array(
			'post_type' => 'page',
			'post_title' => 'Educators and parents',
			'post_content' => '',
			'menu_order' => 604
		),
		'useful-links' => array(
			'post_type' => 'page',
			'post_title' => 'Useful links',
			'post_content' => '',
			'menu_order' => 605
		),
		'submit-resources' => array(
			'post_type' => 'page',
			'post_title' => 'Submit resources',
			'post_content' => '',
			'menu_order' => 606
		),

		/**
		 * News and events
		 */
		'news-and-events' => array(
			'post_type' => 'page',
			'post_title' => 'News and events',
			'post_content' => '',
			'menu_order' => 700
		),
		'news' => array(
			'post_type' => 'page',
			'post_title' => 'News',
			'post_content' => '',
			'menu_order' => 701
		),
		'newsletter' => array(
			'post_type' => 'page',
			'post_title' => 'Newsletter',
			'post_content' => '',
			'menu_order' => 702
		),
		'events' => array(
			'post_type' => 'page',
			'post_title' => 'Events',
			'post_content' => '',
			'menu_order' => 703
		)
	];

	public static function _create_menu( $items = [], $menu_id = 0, $parent_id = 0 ) {
		foreach( $items as $key => $val ) {
			$post = get_posts([
				'name'        => $key,
				'post_type'   => 'page',
				'post_status' => 'publish',
				'numberposts' => 1
			]);
			if( count( $post ) ) {
				if( strpos( $key, 'link_') !== false ) {
					$array = [
						'menu-item-type' => 'custom',
						'menu-item-url' => 'http://example.com/',
						'menu-item-title' => 'http://example.com/',
						'menu-item-status' => 'publish',
						'menu-item-parent-id' => $parent_id
					];
				} else {
					$array = [
						'menu-item-object' => 'page',
						'menu-item-object-id' => $post[0]->ID,
						'menu-item-type' => 'post_type',
						'menu-item-status' => 'publish',
						'menu-item-parent-id' => $parent_id
					];
				}

				$item_id = wp_update_nav_menu_item( $menu_id, 0, $array );

				if( is_array( $val ) ) {
					self::_create_menu( $val, $menu_id, $item_id );
				}
			}
		}
	}

	/**
	 * Create all CF7 forms
	 *
	 * @return bool
	 */
	public static function create_forms() {

	    // Create forms
		if( count( self::$forms ) ) {
		    $i = 1;
			foreach( self::$forms as $title => $name ) {
				$path = realpath( ABSPATH . '../data/forms' ) . '/' . $name . '.php';
			    if( file_exists( $path ) ) {
				    include $path;
				    if( isset( $array ) ) {

					    // Post
					    if( $i == 1 ) {
						    $post = get_posts([
							    'name'        => 'contact-form-1',
							    'post_type'   => 'wpcf7_contact_form',
							    'post_status' => 'publish',
							    'numberposts' => 1
						    ]);
						    if( $post ) {
							    $id = wp_update_post([
								    'ID' => $post[0]->ID,
								    'post_title' => $title,
								    'post_content' => '',//$contents
							    ]);
						    }
					    } else {
						    $id = wp_insert_post([
							    'post_name' => 'contact-form-' . $i,
							    'post_type' => 'wpcf7_contact_form',
							    'post_title' => $title,
							    'post_status' => 'publish',
							    'post_content' => '',//$contents
						    ]);
					    }

					    if( !$id ) {
						    return false;
					    }

					    // Meta
					    else {
						    //var_dump( "POST: " . $id );
						    foreach( $array as $key => $value ) {
							    update_post_meta( $id, $key, $value );
						    }
                        }
				    }
                }
				$i++;
			}
		}

		return true;
    }

	/**
	 * Create all categories
	 *
	 * @return bool
	 */
	public static function create_categories() {

		// Create categories
		if( count( self::$categories ) ) {
			foreach( self::$categories as $name => $id ) {
				$category_id = wp_create_category( $name );
				if( !$category_id ) {
				    return false;
                }
				self::$categories[ $name ] = $category_id;
			}
		}

		return true;
	}

	/**
	 * Create all menus and assign items
	 *
	 * @return bool
	 */
	public static function create_menus() {

		// Create menus
		if( count( self::$menus ) ) {
			$locations = [];
			foreach( self::$menus as $name => $items ) {
				//wp_delete_nav_menu($name);
				$menu_id = wp_create_nav_menu( $name );
				if( !$menu_id ) {
				    return false;
                }
				self::_create_menu( $items, $menu_id );

				$term = get_term_by('name', $name, 'nav_menu');
				$locations[ $term->slug ] = $term->term_id;
			}
			set_theme_mod('nav_menu_locations', $locations);
		}

		return true;
	}

	/**
     * Create all pages for the site
     *
	 * @return bool
	 */
	public static function create_pages() {

		// Create pages
		if( count( self::$posts ) ) {
			foreach( self::$posts as $name => $content ) {
				$blocks = null;
				if( $content['blocks'] ) {
					$blocks = $content['blocks'];
					unset( $content['blocks'] );
				}

				$content['post_name'] = $name;
				if (array_key_exists('post_parent', $content)) {
					if(array_key_exists($content['post_parent'], self::$slugs)) {
						$content['post_parent'] = self::$slugs[$content['post_parent']];
					}
				}
				//var_dump($content);
				$content['post_status'] = 'publish';
				$id = wp_insert_post($content);
				if( !$id ) {
				    return false;
                }
				self::$slugs[$name] = $id;
			}
		}

		return true;
	}

	/**
	 * Create post block relations
	 *
	 * @return bool
	 */
	public static function create_page_block_relations() {

        // Create page block relations
        if( count( self::$posts ) ) {
            foreach( self::$posts as $name => $content ) {
                if( $content['blocks'] ) {
	                $post = get_posts([
		                'name'        => $name,
		                'post_type'   => 'page',
		                'post_status' => 'publish',
		                'numberposts' => 1
	                ]);
	                if( $post ) {
	                    $id = $post[0]->ID;
		                $meta = [];
		                foreach( $content['blocks'] as $block ) {
			                $post = get_posts([
				                'name'        => $block,
				                'post_type'   => 'content_block',
				                'post_status' => 'publish',
				                'numberposts' => 1
			                ]);
			                if( $post ) {
				                $meta[] = $post[0]->ID;
			                } else {
				                var_dump('BLOCK ASSIGN FAILED:',$name,$content);
                            }
		                }
		                if( $meta ) {
			                update_post_meta( $id, 'assigned_blocks', $meta );
			                update_post_meta( $id, '_assigned_blocks', 'field_595e437018a98' );
		                }
	                }
                }
            }
        }

		return true;
	}

	/**
	 * Create post block relations
	 *
	 * @return bool
	 */
	public static function create_blocks() {

	    // Create blocks
		if( count( self::$blocks ) ) {
			foreach( self::$blocks as $name => $data ) {
				$content = [];
				$content['post_name'] = $name;
				$content['post_type'] = 'content_block';
				$content['post_title'] = $data['post_title'];
				$content['post_content'] = $data['post_content'];
				$content['post_status'] = 'publish';
				$id = wp_insert_post($content);
				if( !$id ) {
				    var_dump('BLOCK FAILED:',$name,$content);
					return false;
				}

				//var_dump($id, $content);

				foreach( $data as $key => $val ) {
				    if( array_key_exists( $key, self::$fields ) ) {
					    if( $key == 'linked_page' ) {
						    $post = get_posts([
							    'name'        => $val,
							    'post_type'   => 'page',
							    'post_status' => 'publish',
							    'numberposts' => 1
						    ]);
						    if( $post ) {
							    $val = array( $post[0]->ID );
						    }
					    }
					    update_post_meta( $id, $key, $val );
					    update_post_meta( $id, '_' . $key, 'field_' . self::$fields[ $key ] );
                    }
                }
			}
		}

		return true;
    }

	public static function setup() {

		// Plugins!
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
		activate_plugin( 'advanced-custom-fields/acf.php' );
		activate_plugin( 'contact-form-7/wp-contact-form-7.php' );
		activate_plugin( 'bootstrap-for-contact-form-7/bootstrap-for-contact-form-7.php' );
		activate_plugin( 'wordpress-seo/wp-seo.php' );

		// Clear default content
		wp_delete_comment( 1 );
		wp_delete_post( 1, TRUE );
		wp_delete_post( 2, TRUE );

		// Add core content
		include_once( ABSPATH . 'wp-admin/includes/taxonomy.php' );
	    self::create_categories();
		self::create_forms();
		self::create_pages();
		self::create_menus();
		self::create_blocks();
		self::create_page_block_relations();

		// Site labels
		update_option( 'blogname', 'WePROTECT Global Alliance' );
        update_option( 'blogdescription', '' );

		// Set homepage as index
		$post = get_posts([
			'name'        => 'home',
			'post_type'   => 'page',
			'post_status' => 'publish',
			'numberposts' => 1
		]);
		if( $post ) {
			update_option( 'page_on_front', $post[0]->ID );
			update_option( 'show_on_front', 'page' );
		}

		// Permalinks
		update_option('permalink_structure', '/%category%/%postname%/' );
	}
}

/**
 * ACP settings
 * Class MySettingsPage
 */

class MySettingsPage
{
	/**
	 * Holds the values to be used in the fields callbacks
	 */
	private $options;

	/**
	 * Start up
	 */
	public function __construct()
	{
		add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'page_init' ) );
	}

	/**
	 * Add options page
	 */
	public function add_plugin_page()
	{
		// This page will be under "Settings"
		add_options_page(
			'WePROTECT',
			'WePROTECT',
			'manage_options',
			'wep-administration',
			array( $this, 'create_admin_page' )
		);
	}

	/**
	 * Options page callback
	 */
	public function create_admin_page()
	{
		// Set class property
		$this->options = get_option( 'my_option_name' );
		?>
		<div class="wrap">
			<h1>Options</h1>
            <p>No options available at this time.</p>
			<form method="post">
				<?php
				// This prints out all hidden setting fields
				settings_fields( 'my_option_group' );
				do_settings_sections( 'my-setting-admin' );
				//submit_button('Install core data', $type = 'primary', 'install-core');
				?>
			</form>
		</div>
		<?php
	}

	/**
	 * Register and add settings
	 */

	// TODO: REFACTOR
	public function page_init()
	{
		if( $_POST['install-core'] ) {
			//Wep_Plugin::setup();
		}
	}

	/**
	 * Sanitize each setting field as needed
	 *
	 * @param array $input Contains all settings fields as array keys
	 */
	public function sanitize( $input )
	{
		$new_input = array();
		if( isset( $input['id_number'] ) )
			$new_input['id_number'] = absint( $input['id_number'] );

		if( isset( $input['title'] ) )
			$new_input['title'] = sanitize_text_field( $input['title'] );

		return $new_input;
	}

	/**
	 * Print the Section text
	 */
	public function print_section_info()
	{
		print 'Enter your settings below:';
	}

	/**
	 * Get the settings option array and print one of its values
	 */
	public function id_number_callback()
	{
		printf(
			'<input type="text" id="id_number" name="my_option_name[id_number]" value="%s" />',
			isset( $this->options['id_number'] ) ? esc_attr( $this->options['id_number']) : ''
		);
	}

	/**
	 * Get the settings option array and print one of its values
	 */
	public function title_callback()
	{
		printf(
			'<input type="text" id="title" name="my_option_name[title]" value="%s" />',
			isset( $this->options['title'] ) ? esc_attr( $this->options['title']) : ''
		);
	}
}

if( is_admin() )
	$my_settings_page = new MySettingsPage();