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
		'News' => 0,
		'Model National Response' => 0
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
	/*public static $menus = [

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
	];*/
	public static $menus = [

		// Top menu
		'Top' => [
			'contact-us' => ''
		],

		// Main menu
		'Main' => [
			'who-we-are' => [
				'who-we-are' => '',
				'our-mission' => '',
				//'our-commitments' => '',
				'our-board' => '',
				'our-members' => '',
				'statements-of-action' => '',
				'who-we-work-with' => '',
				'our-history' => '',
				'contact-us' => ''
			],
			'what-we-do' => [
				'what-we-do' => '',
                'why-we-must-act' => '',
				//'funded-projects' => '',
				//'faqs' => '',
				//'how-you-can-help' => '',
                'case-studies' => '',
				'how-to-report-cseo' => ''
			],
			/*'get-involved' => [
				'membership' => '',
				'donating' => ''
			],*/
			'the-model-national-response' => [
				'the-model-national-response'
            ],/*[
				'model-national-response' => '',
				'policy-legislation' => '',
				'case-studies' => '',
				'educators-and-parents' => '',
				'useful-links' => '',
				'submit-resources' => ''
			],*/
			'funding' => [
				'funding' => '',
				'about-the-fund' => '',
				'how-the-fund-is-spent' => '',
				'apply-for-funding' => '',
				'donors' => '',
				'other-funding-methods' => ''
			],
			'join-us' => [
				'join-us' => '',
				'apply-for-membership' => '',
				'our-members' => ''
			],
			'news-and-events' => [
				'news-and-events' => '',
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
        'shortcode' => '5964ec11ed4db',
        'group' => '5975c5f60af7e'
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
			//'bg_colour' => '#eaeaea',
			'linked_page' => 'who-we-work-with',
			'section_1' => '<p>The National Centre for Missing and Exploited Children, which handles reports of child sexual exploitation from major tech companies in the US, has received more than 7.5 million reports since 1998.  4.4 million of these were received in 2015 alone.</p>',
			'section_2' => '<p>In 2014, INHOPE, the association of INTERNET hotlines, assessed 83,644 URLS as containing child sexual abuse material worldwide – a 64% increase from 2013.</p>',
			'section_3' => '<p>The exact extent of sexual exploitation on peer-to-peer networks, cloud services and the encrypted or dark web is less certain, but it is likely to be significant. For instance, the NGO Thorn assesses that some 30% of searches on the eDonkey P2P platform are for child sexual abuse material.</p>'//,
			//'section_4' => '<p>A recent study concluded that only 2% of hidden web services on TOR host child abuse material, yet these sites accounted for 80% of traffic.</p>'
		],
		'why-we-must-act-statistics' => [
			'post_title' => 'Why we must act - statistics',
			'post_content' => '<p>The images and videos being shared are of the worst kind, with an apparent trend towards younger children and greater violence. Of the 68,000 reports handled by the Internet Watch Foundation in 2015:</p>',
			'title' => '',
			'type' => 'cta3',
			'bg_colour' => '#eaeaea',
			'section_1' => '<p>69% were of children assessed to be under 10 years of age</p>',
			'section_2' => '<p>1,788 victims were assessed to be under 2 years of age</p>',
			'section_3' => '<p>34% of images involved the rape or sexual torture of children</p>'//,
		],
		'why-we-must-act-join-us' => [
			'post_title' => 'Why we must act - join us',
			'post_content' => '<p>This issue is a global problem and cannot be dealt with by countries working in isolation. It demands a coordinated global response by governments, technology companies and civil society.</p>',
			'title' => 'Join us',
			'linked_page' => 'join-us',
			'type' => '',
		],
		'model-national-response' => [
			'post_title' => 'Model National Response',
			'post_content' => '<p>Leo suspendisse imperdiet augue etiam ac in a ullamcorper tortor suspendisse ad ullamcorper maecenas class at a.</p>',
			'title' => 'Model National Response',
			'type' => 'cta1',
			'linked_page' => 'the-model-national-response',
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
			'linked_page' => 'join-us',
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
			'post_content' => '<p>By signing up to the Statement of Action, countries will be making a high profile statement of their intent to tackle this heinous crime;</p><p>They will have access to a growing global network of expertise and support to help countries build their capacity and capability against online child sexual exploitation;</p><p>They will benefit from global technology development and awareness raising of this issue, and</p>',
			'title' => 'Why join?',
			'type' => 'cta3',
			'linked_page' => 'who-we-are',
			'section_1' => '<p>The UNICEF hosted Fund to End Violence Against Children will support projects and programmes of developing countries and organisations from these countries that aim to prevent online CSE.</p>',
			'section_2' => '<p>Our civil society organisation members gain access to a worldwide network of actors from varying backgrounds, all committed to ending online child sexual exploitation.</p>',
			'section_3' => '<p>Companies who sign up to the WePROTECT Global Alliance have a unique opportunity to play a part in ending this heinous crime, working together with Government, Law enforcement and civil society to have a real voice in the solutions to this problem.</p>'
		],
		'how-to-join' => [
			'post_title' => 'How to join',
			'post_content' => '<p>Leo suspendisse imperdiet augue etiam ac in a ullamcorper tortor suspendisse ad ullamcorper maecenas class at a.</p>',
			'title' => 'How to join',
			'type' => 'points',
			'bg_colour' => '#eaeaea',
			'linked_page' => 'apply-for-membership',
			'button_label' => 'Apply for membership',
			'section_1' => '<p>Online child sexual exploitation is a global crime that requires a global response.  This issue cannot be dealt with by countries working in isolation. It demands a coordinated global response by governments, technology companies and civil society.</p>',
			'section_2' => '<p><strong>Children are being exploited on an industrial scale and we have to act now.</strong> The National Centre for Missing and Exploited Children, which handles reports from major tech companies in the US of images of child sexual abuse being viewed by people all around the world, has received more than 7.5 million reports since 1998.  4.4 million of these were received in 2015 alone.</p>',
			'section_3' => '<p>&nbsp;</p>'
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
		'statements-of-action' => [
			'post_title' => 'Statement of action',
			'post_content' => '',
			'title' => 'Statements of action',
			'type' => 'cta3',
			'section_1' => '<p>Identify victims, and ensure they receive necessary support</p>',
			'section_2' => '<p>Investigate cases of exploitation and prosecute offenders</p>',
			'section_3' => '<p>Increase public awareness of the risks posed by children’s activities online</p>',
			//'section_4' => '<p>Reduce the availability of child sexual abuse material online</p>',
			'linked_page' => 'statements-of-action',
			'button_label' => 'Statements of action'
		],
		'our-board' => [
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

		/*'resources' => [
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
		],*/

		'case-studies' => [
			'post_title' => 'Case studies',
			'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',
			'title' => 'Case studies',
			'type' => '',
			'linked_page' => 'home',
			'button_label' => 'Case studies'
		],

		/*'educators-and-parents' => [
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
		],*/

		'model-national-response-header' => [
			'post_title' => 'The Model National Response',
			'post_content' => '<p>Preventing and Tackling Child Sexual Exploitation and Abuse (CESA)</p>',
			'title' => 'The Model National Response',
			'type' => 'image',
			'image' => 'stock-1.jpg',
			'linked_page' => 'home',
            'button_label' => 'Download PDF'
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
		'apply-for-membership' => array(
			'post_type' => 'page',
			'post_title' => 'Apply for membership',
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
	            'statements-of-action',
	            'our-mission',
	            'our-members',
	            'our-board',
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
		'our-board' => array(
			'post_type' => 'page',
			'post_title' => 'Our board',
			'post_content' => '',
			'menu_order' => 202
		),
		'statements-of-action' => array(
			'post_type' => 'page',
			'post_title' => 'Statements of action',
			'post_content' => '<strong>STATEMENT OF ACTION BY GOVERNMENTS TO TACKLE ONLINE CSE: ABU DHABI WEPROTECT SUMMIT 16-17 NOVEMBER 2015</strong>

<p>We, the leaders of countries and international organisations gathered in the United Arab Emirates, believe that online child sexual exploitation is a heinous crime that demands a coordinated global response.</p>

<p>We reaffirm and endorse the Statement of Action of the London WePROTECT Summit in December 2014, which sets out our commitment to take action to identify and protect victims, remove child sexual abuse material from the internet and strengthen cooperation to track down the perpetrators of this abuse. But we now want to go further.</p>

<p>To this end, we support the recommendations of the WePROTECT International Advisory Board, and agree to establish and develop, in our own countries, a coordinated national response to online child sexual exploitation, guided by the WePROTECT Model National Response, that will ensure:</p>
<ul>
 	<li>The highest level of national response to online child sexual exploitation, including preventing wider child sexual exploitation and abuse;</li>
 	<li>Effective prevention programmes, investigations and prosecutions, safeguarding of victims and offender management;</li>
 	<li>Appropriate support services for children and young people;</li>
 	<li>Legislation or policies that will support technology companies’ efforts to remove child sexual abuse material from the internet, including through the development of technological solutions;</li>
 	<li>Greater awareness and understanding amongst the public and professionals working with children.</li>
</ul>
<p>In support of this, we commit to:</p>
<ul>
 	<li>Drive our national responses by establishing multi-stakeholder bodies that bring together all of those with a responsibility to protect children online;</li>
 	<li>Publish an analysis of our own national response, including our implementation of the WePROTECT commitments, and use this to develop our capabilities;</li>
 	<li>Make use of the shared knowledge and resources of the WePROTECT community to develop our national response, requesting support from the Global Fund to End Violence Against Children and coordinating our support for such capacity building as appropriate.</li>
</ul>
<p>We recognise the need to sustain WePROTECT as a major international initiative to improve the global capacity to tackle the sexual exploitation of children online, and have agreed to:</p>
<ul>
 	<li>Support the establishment, by March 2016, of an Advisory Board, supported by a
secretariat, responsible to all those who have signed up to WePROTECT, and which will support the implementation of commitments made at the London and Abu Dhabi Summits and oversee future development of this initiative;</li>
 	<li>Meet biennially at Ministerial level to review our progress and agree action to tackle emerging threats to children from sexual exploitation online;</li>
 	<li>Represent the importance of tackling online child sexual exploitation and WePROTECT within all relevant global forums.</li>
</ul>',
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
			'post_content' => '<p>In 2012, the then US Attorney General Eric Holder and EU Commissioner Celia Malmstrom launched the Global Alliance Against Child Sexual Abuse Online, which united 54 countries through their high-level ministers’ commitments to pursue shared policy targets in the fight against online child sexual exploitation.</p>
<p>In 2013, the then Prime Minister of the UK, David Cameron, launched a major push against online child sexual exploitation at the Internet Safety and Security Summit.</p>
<p>In 2014, he then brought together the WePROTECT Children Online initiative, with a landmark summit of ministers and leaders of technology companies and civil society in London.</p>
<p>With the second WePROTECT Summit in the UAE in 2015, 63 countries and international organisations, plus some of the biggest technology firms and leading NGOs, have made commitments to comprehensive national and international action against this crime.</p>
<p>At the 2015 Abu Dhabi Summit, the UK, US and EU Commission also announced their intention to merge WePROTECT and the Global Alliance, to create – for the first time – a single initiative with the influence, resources and expertise to transform how this crime is dealt with worldwide.  It merges the best elements of both of these major initiatives: their dynamism, the scope and ambition of their membership and vision, and the commitment to concrete action and report on progress.  And crucially, at its heart are the commitment to multistakeholder action needed to tackle this crime.</p>',
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
	            'why-we-must-act',
                'why-we-must-act-statistics',
                'why-we-must-act-join-us'
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
		'join-us' => array(
			'post_type' => 'page',
			'post_title' => 'Join us',
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
		/*'resources' => array(
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
		),*/
		'the-model-national-response' => array(
			'post_type' => 'page',
			'post_title' => 'Model National Response',
			'post_content' => '',
			'page_template' => 'mnr.php',
			'menu_order' => 601,
            'blocks' => [
                'model-national-response-header'
            ]
		),
		/*'policy-and-legislation' => array(
			'post_type' => 'page',
			'post_title' => 'Policy and legislation',
			'post_content' => '',
			'menu_order' => 602
		),*/
		'case-studies' => array(
			'post_type' => 'page',
			'post_title' => 'Case studies',
			'post_content' => '',
			'menu_order' => 603
		),
		/*'educators-and-parents' => array(
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
		),*/

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
		),

        /**
         * MNR groups
         */
		/*'introduction' => array(
			'post_type' => 'page',
			'post_title' => 'Introduction',
			'post_content' => '<h4>Leadership</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_parent' => 'the-model-national-response',
			'post_category' => array( 'model-national-response' ),
			'page_template' => 'mnr.php',
			'menu_order' => 800,
			'blocks' => [
				'model-national-response-header'
			]
		),*/

		'enablers' => array(
			'post_type' => 'page',
			'post_title' => 'Enablers',
			'post_content' => '<h4>Leadership</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_parent' => 'the-model-national-response',
			'post_category' => array( 'model-national-response' ),
			'page_template' => 'mnr.php',
			'menu_order' => 801,
			'blocks' => [
				'model-national-response-header'
			]
		),

		'policy-and-governance' => array(
			'post_type' => 'page',
			'post_title' => 'Policy and Governance',
			'post_content' => '<h4>Highest level national commitment to CSEA prevention and response</h4><p>Comprehensive understanding of CSEA within highest levels of government and law enforcement. WIllingness to work with, and co-ordinate to efforts of, multiple stakeholders to ensure the enhanced protection of victims and an enhanced response to CSEA offending.</p>',
			'post_parent' => 'the-model-national-response',
			'post_category' => array( 'model-national-response' ),
			'page_template' => 'mnr.php',
			'menu_order' => 802,
			'blocks' => [
				'model-national-response-header'
			]
		),

		'criminal-justice' => array(
			'post_type' => 'page',
			'post_title' => 'Criminal Justice',
			'post_content' => '<h4>Effective and successful CSEA investigations, convictions and offender management</h4><p>Law Enforcement and judiciary have the knowledge, skills, systems and tools required to enable them to perform victim-focused investigations and secure positive judicial outcomes. CSEA offenders are managed and reoffending prevented.</p>',
			'post_parent' => 'the-model-national-response',
			'post_category' => array( 'model-national-response' ),
			'page_template' => 'mnr.php',
			'menu_order' => 803,
			'blocks' => [
				'model-national-response-header'
			]
		),

		'victim' => array(
			'post_type' => 'page',
			'post_title' => 'Victim',
			'post_content' => '<h4>Appropriate suppor ervices for children and young people</h4><p>Children and yound people have access to services that support them thorugh the investigation and prosecution of crimes against them. They have access to shelter; specialised medical and psychological services; and rehabilitation, repatriation and resocialization services.</p>',
			'post_parent' => 'the-model-national-response',
			'post_category' => array( 'model-national-response' ),
			'page_template' => 'mnr.php',
			'menu_order' => 804,
			'blocks' => [
				'model-national-response-header'
			]
		),

		'societal' => array(
			'post_type' => 'page',
			'post_title' => 'Societal',
			'post_content' => '<h4>CSEA prevented</h4><p>Children and young people are informed and empwered to protect themselves from CSEA. Parents, carers, teachers, and childcare professionals are better prepared to keep children safe from CSEA, including addressing taboos surrounding sexual violence.</p>',
			'post_parent' => 'the-model-national-response',
			'post_category' => array( 'model-national-response' ),
			'page_template' => 'mnr.php',
			'menu_order' => 805,
			'blocks' => [
				'model-national-response-header'
			]
		),

		'industry' => array(
			'post_type' => 'page',
			'post_title' => 'Industry',
			'post_content' => '<h4>Industry engagement in developing solutions to prevent and tackle CSEA</h4><p>Industry has the power and willingness to block and remove online CSEA content and proactively adress local CSEA issues. Industry proactively reports online CSEA.</p>',
			'post_parent' => 'the-model-national-response',
			'post_category' => array( 'model-national-response' ),
			'page_template' => 'mnr.php',
			'menu_order' => 806,
			'blocks' => [
				'model-national-response-header'
			]
		),

		'media-and-communications' => array(
			'post_type' => 'page',
			'post_title' => 'Media and Communications',
			'post_content' => '<h4>Awareness raised among the public, professionals and policy makers</h4><p>Potential future offenders are deterred. CSEA offending and reoffending is reduced.</p>',
			'post_parent' => 'the-model-national-response',
			'post_category' => array( 'model-national-response' ),
			'page_template' => 'mnr.php',
			'menu_order' => 807,
			'blocks' => [
				'model-national-response-header'
			]
		),
        
        /**
         * MNR sections
         */

		'leadership' => array(
			'post_type' => 'mnr',
			'post_title' => 'Leadership',
			'post_content' => '<h2>Capability 1 – Leadership</h2>
<h4>Definition</h4>
<ul>
 	<li>Good governance brings together those with a responsibility to protect children from online sexual exploitation and is a multi-stakeholder, cross-sector national body or bodies (herewith referred to as body)</li>
 	<li>There is no one model that the multi-stakeholder body should adopt: it might be responsible for the overall governance and oversight of a country’s capability and capacity to prevent and respond to online CSEA, or simply act as a body for coordinating work across government, industry and civil society. Where countries already have an overall child protection group or a body that covers wider digital citizenship, cybersecurity, violence against children or child rights, this function might be assumed within that existing mechanism.</li>
 	<li>Ideally this is a government-led body. For an effective response, civil society and industry should be fully involved.</li>
 	<li>The national body could comprise senior level representation from: relevant government departments (such as Ministries of Interior, Justice, Social Welfare/Children’s Services, Education, Health, Telecommunications); Law enforcement; Judiciary, Non-governmental organisations; Technology/ICT industry and other relevant industry sectors (such as tourism); Faith-based organisations; and other specialist agencies working on CSEA and violence against children.</li>
 	<li>The body could be responsible for mobilising and coordinating the national response to CSEA, and for identifying and promoting action to address gaps identified through the Model National Response.</li>
 	<li>The body could also assist with the dissemination of knowledge and expertise on CSEA to national and local service providers and encourage a multi-stakeholder approach to working at both national and local levels.</li>
 	<li>The body might identify, secure and coordinate any support required from international organisations and be the national point of contact with international initiatives and networks relating to CSEA. At the domestic level; it will also need to ensure coherence with other national policies, platforms and action plans on violence against children more generally, child rights, cybersecurity and digital citizenship.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>To enable a national programme of activity to prevent and tackle CSEA to be collectively agreed and progress to be monitored and reported.</li>
 	<li>The greater sharing of expertise and information will inform and enhance each stakeholder’s existing practice, leading to the improvement of services and capability nationally and restricting the ability of offenders to operate internationally.</li>
 	<li>A national body will ensure active and coordinated participation in global initiatives to tackle CSEA such as WePROTECT which will enhance international cooperation and enable the sharing of good practice internationally.</li>
 	<li>Using the national body to coordinate any support from the international community will ensure that the support is focussed on priority areas for development based on the country’s needs.</li>
</ul>
<h4>More guidance and support</h4>
<ul>
 	<li>Guidance for Governments on national strategies to address ICT-related violence, exploitation and abuse in collaboration with partners is being developed by UNICEF and will be made available in 2017.</li>
</ul>',
			'post_excerpt' => 'An accountable national governance and Oversight Committee',
			'group' => 'policy-and-governance',
			'menu_order' => 1
		),

		'research-analysis-and-monitoring' => array(
			'post_type' => 'mnr',
			'post_title' => 'Research, analysis and monitoring',
			'post_content' => '<h2>Capability 2 – Research, Analysis and Monitoring</h2>
<h4>Definition</h4>
<ul>
 	<li>The nature and scale of the country’s current CSEA threat, vulnerability, risk and response – and the intelligence and evidence supporting these assessments – is clearly articulated. The assessment is collectively endorsed by members of the national body (see Capability 1 – Leadership) as being credibly and comprehensively informed.</li>
 	<li>Action to prevent and tackle CSEA is intelligence and evidence-led. The nationally-agreed assessment is used to inform the development, prioritisation and implementation of the country’s CSEA response and related policy and practice.</li>
 	<li>Nationally agreed responses include measurable outcomes and indicators, and progress is regularly monitored and outcomes evaluated. CSEA actions can be included within any existing policies/ plans/strategies on related issues such as child protection, violence against children or child rights.</li>
 	<li>Ongoing research into local CSEA-related issues is undertaken to ensure action remains current and relevant, and the quality and nature of research used to support decision making is actively monitored.</li>
 	<li>Compliance with international and regional CSEA-related standards is monitored and evaluated.</li>
</ul>
<h4>Why it is needed?</h4>
<ul>
 	<li>Nationally coordinated research and analysis can produce an authoritative view of the CSEA threat, vulnerability, risk and response due to the range and number of organisations involved.</li>
 	<li>Continuous development and improvement in the quality of the national response to CSEA can be achieved through robust research, regular monitoring and evaluation.</li>
 	<li>Research and analysis will identify new or emerging trends and patterns of CSEA which will enable the development of effective policies, intervention opportunities to safeguard children, and disruption opportunities to prevent offending.</li>
 	<li>Intelligence and evidence-led policy and practice will ensure that activity is clearly prioritised against areas where the worst harm is being caused to children and the most significant capability gaps have been identified.</li>
 	<li>Consistent and regular monitoring and progress-reporting of activities, and rigorous evaluations that measure the achievements of previously agreed indicators, will help a government to report progress against relevant international and regional standards and targets. This includes the UN Convention on the Rights of the Child (UNCRC) and its Optional Protocol on the sale of children, child prostitution and child pornography, and Agenda 2030, particularly Sustainable Development Goal 16.2 – End abuse, exploitation, trafficking and all forms of violence against and torture of children</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>At a minimum, an analysis should: assess the current CSEA threat, how it is manifested and who is most at risk; assess the country’s vulnerability to this threat; assess the current institutional response; review and evaluate the implementation of applicable legislation and policies to assess compliance with international standards and good practice; review the current ICT ecosystem response – including Hotline reporting mechanisms and industry engagement; and map the activity of other stakeholders engaged in this issue.</li>
 	<li>To inform an analysis, access needs to be provided to a wide range of CSEA relevant data and information from organisations represented on the national body and any other relevant stakeholders. In addition, primary data needs to be collected from a variety of sources such as children, parents, educators, law enforcers, service providers.</li>
</ul>
<h4>More guidance and support</h4>
There are a number of intergovernmental and international non-governmental organisations that have undertaken research, analysis and monitoring of efforts in partnership with governments and civil society across the world and have developed best practice to help countries. These include UNICEF and its Office of Research (www.unicef.org/protection and www.unicef-irc.org), ECPAT (www.ecpat.net) and the Family Online Safety Institute’s Global Resource and Information Directory (www.fosigrid.org). More information can be found on their websites.

The Special Representative of the UN Secretary-General on Violence against Children has published a study entitled Releasing Children’s Potential and Minimizing Risks – ICTs, the Internet and Violence against Children – www.srsg.violenceagainstchildren.org

Global Kids Online is an international research project which aims to advance understanding of whether and how the internet amplifies the risks of harm to children. It does this by stimulating and guiding investigations of how children around the globe use new digital, networked and mobile technologies. More information can be found at www.unicef-irc.org/article/1194/',
			'post_excerpt' => 'National situational analysis of CSEA risk and response; measurements/indicators',
			'group' => 'policy-and-governance',
			'menu_order' => 2
		),

		'legislation' => array(
			'post_type' => 'mnr',
			'post_title' => 'Legislation',
			'post_content' => '<h2>Capability 3 – Legislation</h2>
<h4>Definition</h4>
<ul>
 	<li>Comprehensive and effective domestic legislation to protect children from all forms of sexual exploitation and abuse – both online and offline.</li>
 	<li>This must extend beyond criminalising the actions of sex offenders; it should ensure that law enforcement bodies can identify the perpetrators of such actions, protect their victims and ensure that victims’ rights are protected, and that online service providers are equiped with a clear safe harbour for reviewing and reporting online content.</li>
 	<li>The legislation can draw on or model existing international law, incorporating international standards and good child protection practices, and is based on the protection measures of the UN Convention on the Rights of the Child (UNCRC) and its Optional Protocol on the sale of children, child prostitution and child pornography.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>Comprehensive and effective legislation will enable law enforcement to proactively investigate and prosecute child sex offenders and identify and protect more victims. This is particularly important for online offences where there is no evidence that contact sexual abuse has taken place to ensure all sexual offences against children can be prosecuted.</li>
 	<li>Crimes involving CSEA can cross geographical borders, with the offender resident in one country and the victim in another. In cases of online child sexual exploitation, the service provider is often resident in another jurisdiction. Legal approaches to preventing and tackling CSEA therefore need to be coordinated and aligned where possible, to prevent child sex offenders from concentrating their efforts in those countries where they know children may be more vulnerable.</li>
 	<li>The role of the internet in the viewing or sharing of child sexual abuse material means that sometimes communications data (which is the ‘who’, ‘where’, ‘when’, ‘how’ and ‘with whom’ of a communication but not what was written or said) is the only way to identify online child sexual exploitation offenders. Safeguards are important including independent oversight of communications data powers given to designated authorities. Authorisations will have to set out why accessing the communications data in question is necessary in a specific investigation for a particular statutory purpose, and how it is proportionate to what is sought to be achieved.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>For countries that do not currently have comprehensive legislation in place, complying with international legal standards is an initial step in addressing these issues and can then support the development of comprehensive and effective national legislation.</li>
 	<li>The Council of Europe’s Convention on Cybercrime (also called the ‘Budapest Convention’) and Convention on the Protection of Children against Sexual Exploitation and Sexual Abuse (also called the ‘Lanzarote Convention’) serve as benchmarks for criminal law reform and wider reform of services for victims. They are effective tools for combating the sexual exploitation and abuse of children, and useful resources for informing the creation of an effective legislative framework because they contain specific definitions of offences as well as provisions requiring punishment for criminalised behaviour, allowing for more effective prosecution of offenders and services for victims. The Lanzarote Convention also provides guidance and preventive measures such as screening, recruitment and training of people working in contact with children, as well as monitoring measures for offenders and potential offenders. Please note that countries outside of the Council of Europe can accede to these Conventions.</li>
 	<li>Agreed metrics will enable the effectiveness of the use of legislation to be monitored and reported. Effectiveness measures should include at a minimum: conviction rates and the number of victims identified.</li>
 	<li>The Luxembourg Guidelines (see Capability 21) offer practical guidance on navigating the complex lexicon of CSEA terms to be used in legislation.</li>
</ul>
<h4>More guidance and support</h4>
<ul>
 	<li>More information on the relevant international treaties can be found at www.ohchr.org/en/ professionalinterest/pages/crc.aspx and www.ohchr.org/en/professionalinterest/pages/oPSCCRC.aspx</li>
 	<li>More information about the Council of Europe’s Budapest and Lanzarote Conventions can be found at www.coe.int/en/web/conventions/full-list</li>
 	<li>More information about the Luxembourg Guidelines can be found at www.luxembourgguidelines.org</li>
 	<li>The International Centre for Missing &amp; Exploited Children (ICMEC) researches and analyses national legislation from around the world to identify good practice and useful models that may benefit other countries. ICMEC’s ‘Child Pornography: Model Legislation &amp; Global Review’ provides a legal framework for countries to consider when implementing/enhancing legislation. Please see ICMEC’s website for further details – www.icmec.org</li>
 	<li>Other international organisations such as ECPAT and UNICEF are undertaking research and analysis of legislation and policies for the prevention and response to CSEA and more information can be found at their websites – www.unicef.org/protection and www.ecpat.net</li>
</ul>',
			'post_excerpt' => 'Comprehensive and effective legal framework to investigate offenders and ensure protection for victims',
			'group' => 'policy-and-governance',
			'menu_order' => 3
		),


        ############

		'dedicated-law-enforcement' => array(
			'post_type' => 'mnr',
			'post_title' => 'Dedicated Law Enforcement',
			'post_content' => '<h2>Capability 4 – Dedicated Law Enforcement</h2>
<h4>Definition</h4>
<ul>
 	<li>Law enforcement capability with an explicit remit to lead, support and coordinate investigations into child sexual exploitation and abuse (CSEA) – both online and offline.</li>
 	<li>Its principle aim is to protect the public and it:
<ul>
 	<li><strong>Receives information</strong> – acts as a dedicated place where reports of CSEA can be received from international law enforcement, the public, industry (including via the US National Center for Missing and Exploited Children), and non-governmental organisations (including Hotlines).</li>
 	<li><strong>Develops information</strong> – turns the reported information into actionable intelligence to enable an investigation to be undertaken.</li>
 	<li><strong>Acts on intelligence</strong> – conducts investigations to safeguard and protect CSEA victims and apprehend offenders.</li>
</ul>
</li>
 	<li>Law enforcement officers within this capability have the knowledge, skills, systems, tools and resources required to enable them to deliver the functions detailed above, leading to positive judicial outcomes.</li>
 	<li>Working through a multi-stakeholder approach, the law enforcement officers understand the role of the child protection workforce and non-governmental organisations in enhancing the support provided to victims during and after CSEA investigations. They involve child protection professionals in investigations to ensure that their work always remains victim-focussed and their investigations are undertaken using leading practice child protection principles</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>A dedicated capability will ensure that a country’s law enforcement is able to respond effectively to reports of CSEA, securing an increased number of successful prosecutions, an increase in the number of victims protected and greater disruption of offending.</li>
 	<li>It will provide the public and third parties with the confidence to report CSEA, knowing that the information they provide will be acted upon effectively and that the victim will be treated appropriately and supported both during and after the investigation.</li>
 	<li>With dedicated law enforcement officers who have the required knowledge, skills, systems and tools, a country will be able to lead and coordinate complex CSEA investigations and liaise effectively with international law enforcement to progress investigations that cross borders.</li>
 	<li>A single point of contact within a national law enforcement agency will ensure that all reports of CSEA from the public and third parties are recorded, risk assessed and triaged in a consistent, coordinated, efficient and effective manner.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>For countries that do not currently have a dedicated CSEA law enforcement capability in place, the national law enforcement agency should identify and commit to building this capability: this includes the identification of dedicated officers who will remain in post for a minimum period (suggested minimum of two years); the allocation of an appropriate venue to accommodate such resources; the acquisition of essential equipment; the provision of specialist CSEA training and techniques; psychological health and wellness support for officers; and the development and delivery of CSEA awareness-raising training for local law enforcement across the country. For countries that already have a dedicated CSEA law enforcement capability but still need to develop a multi-stakeholder approach, the inclusion of dedicated child protection professionals to work alongside investigators is a significant first step. Leading practice child protection principles for law enforcement should be followed at all times when planning and conducting a CSEA investigation; this will ensure the needs and rights of the child are always paramount. The multi-stakeholder approach will provide an enhanced level of protection and support for the victim and help achieve best evidence from the victim – increasing the likelihood of a successful prosecution. Sharing best practice across the region is also desirable.</li>
</ul>
<h4>More guidance and support</h4>
<ul>
 	<li>There are a number of national law enforcement agencies around the world that have experience in establishing and delivering a dedicated CSEA capability, using the multi-stakeholder approach detailed above. Requests for advice and support from these agencies can be made through Interpol (www.interpol.int) which will connect a country with a mutually agreeable partner law enforcement agency.</li>
</ul>',
			'post_excerpt' => 'National remit; trained officers; proactive and reactive investigations; victim-focused; international cooperation',
			'group' => 'criminal-justice',
			'menu_order' => 4
		),

		'judiciary-and-prosecutors' => array(
			'post_type' => 'mnr',
			'post_title' => 'Judiciary and Prosecutors',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Trained; victim-focused',
			'group' => 'criminal-justice',
			'menu_order' => 5
		),

		'offender-management-process' => array(
			'post_type' => 'mnr',
			'post_title' => 'Offender Management Process',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Prevent re-offending of those in the criminal justice system nationally and internationally.',
			'group' => 'criminal-justice',
			'menu_order' => 6
		),

		'access-to-image-databases' => array(
			'post_type' => 'mnr',
			'post_title' => 'Access to Image Databases',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'National database; link to Interpol database (ICSE)',
			'group' => 'criminal-justice',
			'menu_order' => 7
		),

		############

		'end-to-end-support' => array(
			'post_type' => 'mnr',
			'post_title' => 'End to End Support',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Integrated services provided during investigation, prosecution and after-care',
			'group' => 'victim',
			'menu_order' => 8
		),

		'child-protection-workforce' => array(
			'post_type' => 'mnr',
			'post_title' => 'Child Protection Workforce',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Trained, coordinated and available to provide victim support',
			'group' => 'victim',
			'menu_order' => 9
		),

		'compensation-remedies-and-complaints-arrangements' => array(
			'post_type' => 'mnr',
			'post_title' => 'Compensation, remedies, and complaints arrangments',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Accessible procedures',
			'group' => 'victim',
			'menu_order' => 10
		),

		'child-helpline' => array(
			'post_type' => 'mnr',
			'post_title' => 'Child Helpline',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Victim reporting and support; referrals to services for ongoing assistance',
			'group' => 'victim',
			'menu_order' => 11
		),

		############

		'csea-hotline' => array(
			'post_type' => 'mnr',
			'post_title' => 'CSEA Hotline',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Mechanism for reporting online CSEA content; link to law enforcement and Internet service providers',
			'group' => 'societal',
			'menu_order' => 12
		),

		'education-programme' => array(
			'post_type' => 'mnr',
			'post_title' => 'Education Programme',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'For children/young people; parents/carers; teachers; practitioners; faith representatives',
			'group' => 'societal',
			'menu_order' => 13
		),

		'child-participation' => array(
			'post_type' => 'mnr',
			'post_title' => 'Child Participation',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'For children/young people; parents/carers; teachers; practitioners; faith representatives',
			'group' => 'societal',
			'menu_order' => 14
		),

		'offender-support-systems' => array(
			'post_type' => 'mnr',
			'post_title' => 'Offender Support Systems',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Medical, psychological, self-help, awareness',
			'group' => 'societal',
			'menu_order' => 15
		),

		############

		'takedown-proceedures' => array(
			'post_type' => 'mnr',
			'post_title' => 'Takedown Proceedures',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Local removal and blocking of online CSEA content',
			'group' => 'industry',
			'menu_order' => 16
		),

		'csea-reporting' => array(
			'post_type' => 'mnr',
			'post_title' => 'CSEA Reporting',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Statutory protections that would allow industry to fully and effectively report CSEA, including the transmission of content, to law enforcement or another designated agency',
			'group' => 'industry',
			'menu_order' => 17
		),

		'innovative-solution-development' => array(
			'post_type' => 'mnr',
			'post_title' => 'Innovative Solution Development',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Industry engagement to help address local CSEA issues',
			'group' => 'industry',
			'menu_order' => 18
		),

		'corporate-social-responsibility' => array(
			'post_type' => 'mnr',
			'post_title' => 'Corporate Social Responsibility',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Effective child-focused programme',
			'group' => 'industry',
			'menu_order' => 19
		),

		############

		'ethical-and-informed-media-reporting' => array(
			'post_type' => 'mnr',
			'post_title' => 'Ethical and Informed Media Reporting',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Enable awareness and accurate understanding of problem',
			'group' => 'media-and-communications',
			'menu_order' => 20
		),

		'universal-technology' => array(
			'post_type' => 'mnr',
			'post_title' => 'Universal Technology',
			'post_content' => '<h4>Legislation</h4><p>Lorem ipsum dolor sit amet</p>',
			'post_excerpt' => 'Guidelines and application',
			'group' => 'media-and-communications',
			'menu_order' => 21
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
					//$blocks = $content['blocks'];
					unset( $content['blocks'] );
				}

				$content['post_name'] = $name;
				if( array_key_exists('post_parent', $content ) ) {
					if( array_key_exists($content['post_parent'], self::$slugs) ) {
						$content['post_parent'] = self::$slugs[$content['post_parent']];
					}
				}

				$group = null;
				if( array_key_exists( 'group', $content ) ) {
					$group = $content['group'];
					unset( $content['group'] );
				}

				//var_dump($content);
				$content['post_status'] = 'publish';
				$id = wp_insert_post($content);
				if( !$id ) {
				    return false;
                }
				self::$slugs[$name] = $id;

				if( $group ) {
					update_post_meta( $id, 'group', array( (string)self::$slugs[$group] ) );
					update_post_meta( $id, '_group', 'field_' . self::$fields['group'] );
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
							    // TODO: Tests failing only in test env??
						        //var_dump( 'PAGE LINK FAIL (block: ' . $name . '): ', $data );
						        return false;
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
						        // TODO: Tests failing only in test env??
							    //var_dump( 'IMAGE LINK FAIL (block: ' . $name . '): ', $data );
							    return false;
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