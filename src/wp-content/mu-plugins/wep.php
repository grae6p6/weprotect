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
	public static $media_path = '2017/07';
	public static $media = [
		'stock-1.jpg' => 0,
		'stock-2.jpg' => 0,
		'stock-3.jpg' => 0,
		'wep-logo.gif' => 0
    ];
	public static $menus = [

		// Top menu
		'Top' => [
			'contact-us' => ''
		],

		// Main menu
		'Main' => [
			'who-we-are' => [
				//'who-we-are' => '',
				'our-mission' => '',
				'our-commitments' => '',
				'our-leadership' => '',
				'our-members' => '',
				'who-we-work-with' => '',
				'our-history' => '',
				'contact-us' => ''
			],
			'what-we-do' => [
				//'what-we-do' => '',
				'why-we-must-act' => '',
				'funded-projects' => '',
				'faqs' => '',
				'how-you-can-help' => '',
				'how-to-report-cseo' => ''
			],
			'funding' => [
				//'funding' => '',
				'about-the-fund' => '',
				'how-the-fund-is-spent' => '',
				'apply-for-funding' => '',
				'donors' => '',
				'other-funding-methods' => ''
			],
			'get-involved' => [
				//'get-involved' => '',
				'membership' => '',
				'donating' => ''
			],
			'resources' => [
				//'resources' => '',
				'model-national-response' => '',
				'policy-legislation' => '',
				'case-studies' => '',
				'educators-and-parents' => '',
				'useful-links' => '',
				'submit-resources' => ''
			],
			'news-and-events' => [
				//'news-and-events' => '',
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
        'image' => '595e56cb3b048',
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
			'linked_page' => 'our-mission',
            'image' => 'stock-1.jpg'
		],
		'why-we-must-act-header' => [
			'post_title' => 'Header - Why we must act',
			'post_content' => '<p>It is an uncomfortable reality that while technology offers incredible possibilities to our societies, never before has it been easier for those who want to sexually exploit children to make contact with potential victims around the world, share images of their abuse and encourage each other to commit further crimes.</p>',
			'title' => 'Why we must act',
			'type' => 'cta1'
        ],
		'why-we-must-act' => [
			'post_title' => 'Why we must act',
			'post_content' => '<p>The Internet is an extraordinary catalyst of innovation, education, and expanding global economic growth. Technology offers endless benefits and possibilities to our children that we never experienced as they have unlimited access to information with the ability to communicate and connect with people they have never met from all over the planet. But with this comes a range of ever more sophisticated threats.</p><p>Included in that range of threats is online child sexual exploitation—a heinous crime that, through the reach of the internet, has become a major international crime of our age. Never before has it been easier for perpetrators to make contact with children, share images of abuse and inspire each other to commit further crimes.</p><p>It is a huge problem, with children being exploited on an industrial scale:</p>',
			'title' => 'Why we must act',
			'type' => 'cta3',
			'linked_page' => 'who-we-work-with',
			'section_1' => '<p>The National Centre for Missing and Exploited Children, which handles reports of child sexual exploitation from major tech companies in the US, has received more than 7.5 million reports since 1998.  4.4 million of these were received in 2015 alone.</p>',
			'section_2' => '<p>In 2014, INHOPE, the association of INTERNET hotlines, assessed 83,644 URLS as containing child sexual abuse material worldwide – a 64% increase from 2013.</p>',
			'section_3' => '<p>The exact extent of sexual exploitation on peer-to-peer networks, cloud services and the encrypted or dark web is less certain, but it is likely to be significant. For instance, the NGO Thorn assesses that some 30% of searches on the eDonkey P2P platform are for child sexual abuse material.</p>'//,
			//'section_4' => '<p>A recent study concluded that only 2% of hidden web services on TOR host child abuse material, yet these sites accounted for 80% of traffic.</p>'
		],
		'model-national-response' => [
			'post_title' => 'Model National Response',
			'post_content' => '<p>Leo suspendisse imperdiet augue etiam ac in a ullamcorper tortor suspendisse ad ullamcorper maecenas class at a.</p>',
			'title' => 'Model National Response',
			'type' => 'cta1',
			'linked_page' => 'model-national-response',
			'button_label' => 'View full guidance',
			'image' => 'stock-2.jpg'
		],
		'fund-to-end-violence-against-children' => [
			'post_title' => 'Fund to end violence against children',
			'post_content' => '<p>Leo suspendisse imperdiet augue etiam ac in a ullamcorper tortor suspendisse ad ullamcorper maecenas class at a.</p><h4>Case studies</h4>[wep-latest max="3" categories="projects"]',
			'title' => 'Fund to end violence against children',
			'type' => '',
			'bg_colour' => '#eaeaea',
			'linked_page' => 'funding',
			'button_label' => 'Find out about funding'
		],
		'latest-news-and-events' => [
			'post_title' => 'Latest news and events',
			'post_content' => '[wep-latest max="3" categories="news,events"]',
			'title' => 'Latest news and events',
			'type' => ''//,
			//'shortcode' => '[wep-latest max="3" categories="news,events"]'
		],

		// Our mission
		'our-mission' => [
			'post_title' => 'Our mission',
			'post_content' => '<p>We have assembled, for the first time, the influence, resources and expertise to transform how this crime is dealt with worldwide, to deliver our vision of more victims safeguarded, more perpetrators apprehended and an end to online child sexual exploitation.</p>',
			'title' => 'Our mission',
			'type' => 'cta1',
			'linked_page' => 'our-mission',
			'button_label' => 'Our mission and strategy'
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
			'post_title' => 'U.N. Sustainable development goals',
			'post_content' => '<h4>WePROTECT Global Alliance will support the landmark commitment by world leaders to end abuse, exploitation, trafficking and all forms of violence and abuse of children by 2030 as part of the UN Sustainable Development Goals.</h4>',
			'type' => 'cta1',
			'linked_page' => 'donating',
			'button_label' => 'Donate to the Fund'
		],
		'our-members' => [
			'post_title' => 'Our members',
			'post_content' => '<p>WePROTECT Global Alliance to End Child Sexual Exploitation Online combines two major initiatives: the Global Alliance, led by the U.S. Department of Justice and the EU Commission and WePROTECT, which was convened by the UK.</p><p>This new, merged initiative has unprecedented reach, with 70 countries already members of WePROTECT or the Global Alliance, along with major international organisations, 20 of the biggest names in the global technology industry, and 17 leading civil society organisations.</p>',
			'title' => 'Our members',
            'type' => '',
			'linked_page' => 'our-members'
		],
		'global-alliance-strategy' => [
			'post_title' => 'WePROTECT Global Alliance Strategy',
			'post_content' => '<p>Read more about our vision and objectives in the <u>WePROTECT Global Alliance Strategy.</u></p>',
			'title' => 'WePROTECT Global Alliance Strategy',
			'type' => '',
			'bg_colour' => '#eaeaea',
			'linked_page' => 'home',
			'button_label' => 'Download our strategy'
		],
		'join-us' => [
			'post_title' => 'Join us',
			'post_content' => '<p>Can your government, company or organisation join them, by making a commitment to end the sexual exploitation of children online? Contact us to learn more.</p>',
			'title' => 'Join us',
			'type' => '',
			'linked_page' => 'membership',
			'button_label' => 'Why join WePROTECT?'
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
		'who-is-a-member' => [
			'post_title' => 'Who\'s a member?',
			'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
			'title' => 'Our members',
			'type' => '',
			'linked_page' => 'our-members',
			'button_label' => 'Who\'s a member?'
		],
		'our-members-list' => [
			'post_title' => 'Our members list',
			'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>[wep-members-list group="country"]',
			'title' => 'Our members',
			'type' => ''//,
			//'shortcode' => ''
		],
		'who-we-are' => [
			'post_title' => 'Who we are',
			'post_content' => '<p>The WePROTECT Global Alliance to End Child Sexual Exploitation Online is an international movement dedicated to national and global action to end the sexual exploitation of children online.</p>',
			'title' => 'Who we are',
			'type' => 'cta1'
		],
		'our-commitments' => [
			'post_title' => 'Our commitments',
			'post_content' => '',
			'title' => 'Our commitments and statements',
			'type' => 'cta3',
			'section_1' => '<p>Identify victims, and ensure they receive necessary support</p>',
			'section_2' => '<p>Investigate cases of exploitation and prosecute offenders</p>',
			'section_3' => '<p>Increase public awareness of the risks posed by children’s activities online</p>',
			//'section_4' => '<p>Reduce the availability of child sexual abuse material online</p>',
			'linked_page' => 'our-commitments',
			'button_label' => 'Our commitments and statements'
		],
		'our-leadership' => [
			'post_title' => 'Our leadership',
			'post_content' => '<p>The WePROTECT Global Alliance is led by a multi-stakeholder Board, comprised of representatives from key countries, international and civil society organisations, and the technology industry.</p>',
			'title' => 'Our leadership',
			'type' => 'cta1',
			'linked_page' => 'home',
			'button_label' => 'WePROTECT Board'
		],
		'our-history' => [
			'post_title' => 'Our history',
			'post_content' => '<p>Can your government, company or organisation join them, by making a commitment to end the sexual exploitation of children online? Contact us to learn more.</p>',
			'title' => 'Our history',
			'type' => '',
			'bg_colour' => '#eaeaea',
			'linked_page' => 'home',
			'button_label' => 'Why join WePROTECT?'
		],


		'what-we-do' => [
			'post_title' => 'What we do',
			'post_content' => '<p>WePROTECT Global Alliance will support the landmark commitment by world leaders to end abuse, exploitation, trafficking and all forms of violence and abuse of children by 2030 as part of the UN Sustainable Development Goals.</p>',
			'title' => 'What we do',
			'type' => 'cta1'
		],

		'what-is-cso' => [
			'post_title' => 'What is CSEO?',
			'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',
			'title' => 'What is CSEO?',
			'type' => 'cta1',
			'image' => 'stock-3',
			'linked_page' => 'home',
			'button_label' => 'Find out more about CSEO'
		],


		'funded-projects' => [
			'post_title' => 'Funded projects',
			'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>[wep-latest max="3" categories="projects"]',
			'title' => 'Funded projects',
			'type' => '',
			'bg_colour' => '#eaeaea',
			'linked_page' => 'funded-projects'
		],


		'header-funding' => [
			'post_title' => 'Header - funding',
			'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
			'title' => 'Fund to end violence against children',
			'type' => 'cta1',
			'linked_page' => 'about-the-fund'
		],

		'how-the-fund-is-spent' => [
			'post_title' => 'How the fund is spent',
			'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
			'title' => 'How the fund is spent',
			'linked_page' => 'how-the-fund-is-spent',
            'button_label' => 'How the money is spent',
			'type' => 'cta3',
			'section_1' => '<p>Supporting statement copy to go here</p>',
			'section_2' => '<p>Supporting statement copy to go here</p>',
			'section_3' => '<p>Supporting statement copy to go here</p>'
		],


		'applying-for-funding' => [
			'post_title' => 'Header - funding',
			'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
			'title' => 'Apply for funding',
			'type' => '',
			'bg_colour' => '#eaeaea',
			'linked_page' => 'apply-for-funding'
		],

		'other-funding-methods' => [
			'post_title' => 'Other funding methods',
			'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
			'title' => 'Other funding methods',
			'type' => '',
			'linked_page' => 'other-funding-methods',
			'button_label' => 'Alternative funding'
		],



		'get-involved' => [
			'post_title' => 'Get involved',
			'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
			'title' => 'Get involved',
			'type' => 'cta1'
		],

		'resources' => [
			'post_title' => 'Resources',
			'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
			'title' => 'Resources',
			'type' => 'cta1'
		],

		'policy-and-legislation' => [
			'post_title' => 'Policy and legislation',
			'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',
			'title' => 'Policy and legislation',
			'type' => '',
			'bg_colour' => '#eaeaea',
			'linked_page' => 'policy-and-legislation'
		],

		'case-studies' => [
			'post_title' => 'Case studies',
			'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',
			'title' => 'Case studies',
			'type' => '',
			'linked_page' => 'home',
			'button_label' => 'Case studies'
		],

		'educators-and-parents' => [
			'post_title' => 'Educators and parents',
			'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',
			'title' => 'Educators and parents',
			'type' => 'cta1',
			'linked_page' => 'home',
			'button_label' => 'Keeping children safe online',
			'image' => 'stock-1'
		],

		'do-you-have-resources-to-share' => [
			'post_title' => 'Do you have resources to share?',
			'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',
			'title' => 'Do you have resources to share?',
			'type' => '',
			'bg_colour' => '#eaeaea',
			'linked_page' => 'submit-resources'
		],

		'the-model-national-response' => [
			'post_title' => 'The Model National Response',
			'post_content' => '<p>Preventing and Tackling Child Sexual Exploitation and Abuse (CESA)</p>',
			'title' => 'The Model National Response',
			'type' => 'image',
			'image' => 'stock-1.jpg',
			'linked_page' => 'home',
            'button_label' => 'Download PDF',
            'page_template' => 'mnr.php'
		],


        //Preventing and Tackling Child Sexual Exploitation and Abuse (CESA)
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
			'menu_order' => 200,
            'blocks' => [
                'who-we-are',
	            'our-commitments',
	            'our-mission',
	            'our-members',
	            'our-leadership',
	            'our-history'
            ]
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
                'who-is-a-member',
                'global-alliance-strategy',
                'join-us'
            ]
		),
		'our-commitments' => array(
			'post_type' => 'page',
			'post_title' => 'Our commitments',
			'post_content' => '<p>Since the beginning of 2016, the Board has established a clear and ambitious strategy for this initiative.  It seeks to create a global movement that will transform how the crime of online child sexual exploitation is dealt with, resulting in more victims identified and safeguarded, more perpetrators apprehended and an end to online child sexual exploitation.</p><p>Supporting comprehensive national action to tackle online child sexual exploitation is key to our mission.  Our geographical reach is unprecedented: some 70 countries are members of WePROTECT or the Global Alliance, and all have been asked to join the new initiative.  They are joined by 20 global technology companies and 17 leading NGOs.</p>',
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
			'menu_order' => 300,
			'blocks' => [
				'what-we-do',
				'why-we-must-act',
				'what-is-cso',
				'funded-projects'//,
				//'other'
			]
		),
		'why-we-must-act' => array(
			'post_type' => 'page',
			'post_title' => 'Why we must act',
			'post_content' => '',
			'menu_order' => 301,
            'blocks' => [
	            'why-we-must-act-header'
            ]
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
			'menu_order' => 400,
			'blocks' => [
				'header-funding',
				'how-the-fund-is-spent',
				'applying-for-funding',
				'un-sustainable-development-goals',
                'other-funding-methods'
			]
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
			'menu_order' => 500,
			'blocks' => [
				'get-involved',
				'membership',
				'un-sustainable-development-goals'
			]
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
				'who-is-a-member'
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
			'menu_order' => 600,
            'blocks' => [
	            'resources',
	            'policy-and-legislation',
	            'model-national-response',
	            'case-studies',
	            'educators-and-parents',
	            'do-you-have-resources-to-share'
            ]
		),
		'model-national-response' => array(
			'post_type' => 'page',
			'post_title' => 'Model National Response',
			'post_content' => '',
			'menu_order' => 601,
            'blocks' => [
                'the-model-national-response'
            ]
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
	 * Create country taxonomies
	 */
	/*public static function create_countries() {
		require_once '../themes/wep/inc/countries.php';

		if( $countries ) {
		    foreach( $countires as $iso => $name ) {
		        $id = wp_insert_term( sanitize_title( $name ), $name );
		        if( !$id ) {
		            var_dump( 'FAILED COUNTRY TAX:', $name );
		            return false;
                }
            }

            return true;
        }

        return false;
    }*/

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
	 * Create memebers
     *
     * @return bool
	 */
	public static function create_members() {
		require ABSPATH . '../vendor/phpoffice/phpexcel/Classes/PHPExcel.php';
		require ABSPATH . 'wp-content/themes/wep/inc/countries.php';

		$objReader = PHPExcel_IOFactory::createReader('Excel5');
		$objReader->setReadDataOnly(true);

		$objPHPExcel = $objReader->load(ABSPATH . "../data/WPGAmembership.xls");
		//var_dump($objPHPExcel);


		/**
		 * Pull country entries from XLS
		 */
		$objWorksheet = $objPHPExcel->getSheet(0);

		$highestRow = $objWorksheet->getHighestRow();
		$highestColumn = $objWorksheet->getHighestColumn();
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

		$columns = $results = [];
		for ($row = 1; $row <= $highestRow; ++$row) {
			for ($col = 0; $col <= $highestColumnIndex; ++$col) {
				if( $row == 1 ) {
					$columns[$col] = trim( $objWorksheet->getCellByColumnAndRow($col, $row)->getValue() );
				} else {
					$results[$row][$columns[$col]] = trim( $objWorksheet->getCellByColumnAndRow($col, $row)->getValue() );
				}
			}
		}

		$fields = [
			'Country' => [
				'country',
				'597069491a1af'
			],
			'Sign up' => [
				'sign_up',
				'59706f6101217'
			],
			'Engagement update' => [
				'engagement',
				'597070b8f57f1'
			],
			'Actions' => [
				'actions',
				'597070cd13e15'
			],
			'Criticality' => [
				'criticality',
				'597070892d24e'
			],
			'Official contact' => [
				'official_contact',
				'5970700ba285d'
			],
			'Email' => [
				'official_contact_email',
				'597070273ed0c'
			],
			'Minister' => [
				'minister',
				'59706fb813519'
			],
			'Minister Email' => [
				'minister_email',
				'59706ffc5d1c4'
			]
        ];

		$criticality_fields = [
			'Low' => 0,
			'Medium' => 1,
			'High' => 2
        ];

		$signup_fields = [
			'Global Alliance' => 'ga',
			'WePROTECT' => 'wp',
			'None' => 'none',
			'WPGA' => 'wpga'
        ];

		foreach( $results as $row ) {
		    if( empty( $row['Country'] ) )
		        continue;
			$content = [];
			$content['post_name'] = sanitize_title( $row['Country'] );
			$content['post_title'] = $row['Country'];
			$content['post_content'] = '';
			$content['post_type'] = 'member';
			$content['post_status'] = 'publish';
			$id = wp_insert_post($content);
			if( !$id ) {
				return false;
			} else {
			    if( empty( $row['Criticality'] ) ) {
				    $row['Criticality'] = 'High';
                }
				$row['Criticality'] = $criticality_fields[ $row['Criticality'] ];

				$row['Sign up'] = $signup_fields[ $row['Sign up'] ];
				$row['Country'] = array_search( $row['Country'], $countries );
				//var_dump($content,$row);

				update_post_meta( $id, 'group', 'country' );
				update_post_meta( $id, '_group', 'field_597068f8afb36' );

				foreach( $fields as $key => $values ) {
					update_post_meta( $id, $values[0], $row[ $key ] );
					update_post_meta( $id, '_' . $values[0], 'field_' . $values[1] );
                }
            }
        }

        return true;
    }

	/**
	 * Create all media for the site
	 *
	 * @return bool
	 */
	public static function create_media() {

		// Create pages
		if( count( self::$media ) ) {
			$wp_upload_dir = wp_upload_dir();

			// Make sure that this file is included, as wp_generate_attachment_metadata() depends on it.
			require_once( ABSPATH . 'wp-admin/includes/image.php' );

			foreach( self::$media as $filename => $id ) {
				$filename = $wp_upload_dir['baseurl'] . '/' . self::$media_path . '/' . $filename;
				$filetype = wp_check_filetype( basename( $filename ), null );

                // Prepare an array of post data for the attachment.
				$attachment = array(
					'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ),
					'post_mime_type' => $filetype['type'],
					'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
					'post_content'   => '',
					'post_status'    => 'inherit'
				);

                // Insert the attachment.
				$id = wp_insert_attachment( $attachment, $filename );
				if( !$id ) {
				    var_dump( 'MEDIA FAIL:', $attachment );
				    return false;
                } else {
					self::$media[ $filename ] = $id;
                }

                // Generate the metadata for the attachment, and update the database record.
				$attach_data = wp_generate_attachment_metadata( $id, $filename );
				wp_update_attachment_metadata( $id, $attach_data );

				// Set logo
				if( pathinfo( $filename, PATHINFO_FILENAME ) == 'wep-logo' ) {
					set_theme_mod( 'custom_logo', $id );
                }
			}
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
				if( array_key_exists( 'blocks', $content ) ) {
					$blocks = $content['blocks'];
					unset( $content['blocks'] );
				}

				$content['post_name'] = $name;
				if( array_key_exists('post_parent', $content ) ) {
					if( array_key_exists($content['post_parent'], self::$slugs) ) {
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
			                $data = [
				                'name'        => $block,
				                'post_type'   => 'content_block',
				                'post_status' => 'publish',
				                'numberposts' => 1
			                ];
			                $post = get_posts($data);
			                if( $post ) {
				                $meta[] = $post[0]->ID;
			                } else {
			                    var_dump( 'BLOCK NOT FOUND:', $block );
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
				    var_dump('BLOCK NOT CREATED', $data);
					return false;
				}

				//var_dump($id, $content);

				foreach( $data as $key => $val ) {
				    if( array_key_exists( $key, self::$fields ) ) {
					    if( $key == 'linked_page' ) {
						    $data = [
							    'name'        => $val,
							    'post_type'   => 'page',
							    'post_status' => 'publish',
							    'numberposts' => 1
						    ];
					        $post = get_posts($data);
						    if( $post ) {
							    $val = array( $post[0]->ID );
						    } else {
						        var_dump( 'PAGE LINK FAIL (block: ' . $name . '): ', $data );
						        //return false;
                            }
					    } elseif( $key == 'image' ) {
						    $data = [
							    'name'        => pathinfo( $val, PATHINFO_FILENAME ),
							    'post_type'   => 'attachment',
							    'post_status' => 'inherit',
							    'numberposts' => 1
						    ];
					        $post = get_posts($data);
						    if( $post ) {
							    $val = (int)$post[0]->ID;
						    } else {
							    var_dump( 'IMAGE LINK FAIL (block: ' . $name . '): ', $data );
							    //return false;
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
		self::create_members();
		self::create_forms();
		self::create_media();
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