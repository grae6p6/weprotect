<?php

/**
 * Class Wep_Plugin
 *
 * WePROTECT
 * Version: 1.0
 * Author: Alex Gailey-White @ Panlogic Ltd
 */

define( 'WEP_VENDOR', realpath( ABSPATH . '../vendor' ) );

class Wep_Plugin {
  public static $message = [
    'error' => [],
    'alert' => []
  ];

  public static $categories = [
    'Case studies'            => 0,
    'Events'                  => 0,
    'News'                    => 0
  ];
  public static $forms = [
    'Apply for membership - Company'      => 'apply-for-membership-company',
    'Apply for membership - Government'   => 'apply-for-membership-government',
    'Apply for membership - Organisation' => 'apply-for-membership-organisation'
  ];
  public static $media = [];
  public static $menus = [

    // Top menu
    'Top'     => [
      'contact-us' => ''
    ],

    // Main menu
    'Main'    => [
      'who-we-are'                  => [
        'who-we-are'           => '',
        'our-mission'          => '',
        'our-board'            => '',
        'our-members'          => '',
        'statements-of-action' => '',
        'who-we-work-with'     => '',
        'our-history'          => '',
        'contact-us'           => ''
      ],
      'what-we-do'                  => [
        'what-we-do'            => '',
        'why-we-must-act'       => '',
        'category_case-studies' => '',
        'how-to-report-cseo'    => ''
      ],
      'model-national-response' => [
        'model-national-response'
      ],
      'funding'                     => [
        'funding'               => '',
        'about-the-fund'        => '',
        'how-the-fund-is-spent' => '',
        'apply-for-funding'     => '',
        'donors'                => '',
        'other-funding-methods' => ''
      ],
      'join-us'                     => [
        'join-us'              => '',
        'apply-for-membership' => '',
        'our-members'          => ''
      ],
      'news-and-events'             => [
        'news-and-events' => '',
        'news'            => '',
        'newsletter'      => '',
        'category_events' => ''
      ]
    ],

    // Support menu
    'Support' => [
      'contact-us'               => '',
      'useful-contacts'          => '',
      'helplines-in-your-region' => '',
      'feedback'                 => ''
    ]
  ];
  public static $slugs = [];
  public static $fields = [
    'title'        => '5964ec11ce4cb',
    'type'         => '595e465405629',
    'bg_colour'    => '595e57673b050',
    'colour'       => '595e57673b049',
    'image'        => '595e56cb3b048',
    'linked_page'  => '5964b1b8127f0',
    'button_label' => '5964ec11ee4db',
    'section_1'    => '5964e987a10bb',
    'section_2'    => '5964e9a8a10bc',
    'section_3'    => '5964e9b2a10bd',
    'section_4'    => '5964e9b2a10be',
    'shortcode'    => '5964ec11ed4db',
    'group'        => '5975c5f60af7e'
  ];
  public static $blocks = [
    'landing-banner'                        => [
      'post_title'   => 'Landing banner',
      'post_content' => '',
      'title'        => 'Worldwide cooperation to end child sexual exploitation online',
      'type'         => 'image',
      'bg_colour'    => '#eaeaea',
      'linked_page'  => 'our-mission',
      'image'        => 'GettyImages-88583888_super.jpg'
    ],
    'contact-us-form'                       => [
      'post_title'   => 'Contact us form',
      'post_content' => '<p>[form]</p>',
      'title'        => '',
      'bg_colour'    => '#eaeaea',
      'type'         => ''
    ],
    'why-we-must-act'                       => [
      'post_title'   => 'Why we must act',
      'post_content' => '<p>The Internet is an extraordinary catalyst of innovation, education, and expanding global economic growth. Technology offers endless benefits and possibilities to our children that we never experienced as they have unlimited access to information with the ability to communicate and connect with people they have never met from all over the planet. But with this comes a range of ever more sophisticated threats.</p><p>Included in that range of threats is online child sexual exploitation — a heinous crime that, through the reach of the internet, has become a major international crime of our age. Never before has it been easier for perpetrators to make contact with children, share images of abuse and inspire each other to commit further crimes.</p><p>It is a huge problem, with children being exploited on an industrial scale:</p>',
      'type'         => 'sections',
      'linked_page'  => 'who-we-work-with',
      'title'        => 'Why we must act',
      'section_1'    => '<p>The National Centre for Missing and Exploited Children, which handles reports of child sexual exploitation from major tech companies in the US, has received more than 7.5 million reports since 1998.  4.4 million of these were received in 2015 alone.</p>',
      'section_2'    => '<p>In 2014, INHOPE, the association of INTERNET hotlines, assessed 83,644 URLS as containing child sexual abuse material worldwide – a 64% increase from 2013.</p>',
      'section_3'    => '<p>The exact extent of sexual exploitation on peer-to-peer networks, cloud services and the encrypted or dark web is less certain, but it is likely to be significant. For instance, the NGO Thorn assesses that some 30% of searches on the eDonkey P2P platform are for child sexual abuse material.</p>',
      'section_4'    => '<p>A recent study concluded that only 2% of hidden web services on TOR host child abuse material, yet these sites accounted for 80% of traffic.</p>'
    ],
    'why-we-must-act-header'                => [
      'post_title'   => 'Header - Why we must act',
      'post_content' => '<p>The Internet is an extraordinary catalyst of innovation, education, and expanding global economic growth. Technology offers endless benefits and possibilities to our children that we never experienced as they have unlimited access to information with the ability to communicate and connect with people they have never met from all over the planet. But with this comes a range of ever more sophisticated threats.</p>',
      'title'        => 'Why we must act',
      'type'         => 'cta'
    ],
    'why-we-must-act-threats'                       => [
      'post_title'   => 'Why we must act - threats',
      'post_content' => '<p>Included in that range of threats is online child sexual exploitation — a heinous crime that, through the reach of the internet, has become a major international crime of our age. Never before has it been easier for perpetrators to make contact with children, share images of abuse and inspire each other to commit further crimes.</p><p>It is a huge problem, with children being exploited on an industrial scale:</p>',
      'type'         => 'sections',
      //'bg_colour' => '#eaeaea',
      'linked_page'  => 'who-we-work-with',
      'section_1'    => '<p>The National Centre for Missing and Exploited Children, which handles reports of child sexual exploitation from major tech companies in the US, has received more than 7.5 million reports since 1998.  4.4 million of these were received in 2015 alone.</p>',
      'section_2'    => '<p>In 2014, INHOPE, the association of INTERNET hotlines, assessed 83,644 URLS as containing child sexual abuse material worldwide – a 64% increase from 2013.</p>',
      'section_3'    => '<p>The exact extent of sexual exploitation on peer-to-peer networks, cloud services and the encrypted or dark web is less certain, but it is likely to be significant. For instance, the NGO Thorn assesses that some 30% of searches on the eDonkey P2P platform are for child sexual abuse material.</p>',
      'section_4'    => '<p>A recent study concluded that only 2% of hidden web services on TOR host child abuse material, yet these sites accounted for 80% of traffic.</p>'
    ],
    'why-we-must-act-statistics'            => [
      'post_title'   => 'Why we must act - statistics',
      'post_content' => '<p>The images and videos being shared are of the worst kind, with an apparent trend towards younger children and greater violence. Of the 68,000 reports handled by the Internet Watch Foundation in 2015:</p>',
      'title'        => '',
      'type'         => 'sections',
      'bg_colour'    => '#eaeaea',
      'section_1'    => '<p>69% were of children assessed to be under 10 years of age</p>',
      'section_2'    => '<p>1,788 victims were assessed to be under 2 years of age</p>',
      'section_3'    => '<p>34% of images involved the rape or sexual torture of children</p>'
    ],
    'why-we-must-act-join-us'               => [
      'post_title'   => 'Why we must act - join us',
      'post_content' => '<p>This issue is a global problem and cannot be dealt with by countries working in isolation. It demands a coordinated global response by governments, technology companies and civil society.</p>',
      'title'        => 'Join us',
      'linked_page'  => 'join-us',
      'type'         => '',
    ],
    'the-model-national-response'               => [
      'post_title'   => 'Model National Response',
      'post_content' => '<p>At the Abu-Dhabi Summit in 2015, governments and organisations agreed to establish and deliver, in their own countries, a coordinated national response to online child sexual exploitation, guided by the WePROTECT Global Alliance Model National response (MNR).</p>',
      'title'        => 'Model National Response',
      'type'         => 'cta',
      'linked_page'  => 'model-national-response',
      'button_label' => 'View full guidance',
      'image'        => 'GettyImages-537460890_super.jpg'
    ],
    'fund-to-end-violence-against-children' => [
      'post_title'   => 'Fund to end violence against children',
      'post_content' => '<p>The WePROTECT Global Alliance’s mission is to transform how the crime of online child sexual exploitation is dealt with, resulting in more victims identified and safeguarded, more perpetrators apprehended and an internet free from child sexual exploitation.</p><h4>Case studies</h4>[wep-latest max="4" categories="case-studies"]',
      'title'        => 'Fund to end violence against children',
      'type'         => '',
      'bg_colour'    => '#eaeaea',
      'linked_page'  => 'funding',
      'button_label' => 'Find out about funding'
    ],
    'latest-news-and-events'                => [
      'post_title'   => 'Latest news and events',
      'post_content' => '[wep-news-links max="4"][wep-latest max="4" categories="events"]',
      'title'        => 'Latest news and events',
      'linked_page'  => 'news-and-events',
      'button_label' => 'More news and events',
      'type'         => ''
    ],
    'latest-news'                           => [
      'post_title'   => 'Latest news',
      'post_content' => '[wep-news-links max="4"]',
      'title'        => 'Latest news',
      'linked_page'  => 'news',
      'button_label' => 'More news',
      'type'         => ''
    ],
    'latest-events'                         => [
      'post_title'   => 'Latest events',
      'post_content' => '[wep-latest max="4" categories="events"]',
      'title'        => 'Latest events',
      'linked_page'  => 'news-and-events',
      'button_label' => 'More events',
      'type'         => '',
      'bg_colour'    => '#eaeaea'
    ],
    'related-case-studies'                  => [
      'post_title'   => 'Related case studies',
      'post_content' => '[wep-latest max="3" categories="case-studies"]',
      'title'        => 'Related case studies',
      'type'         => '',
      'bg_colour'    => '#eaeaea'
    ],
    'news-list'                             => [
      'post_title'   => 'News list',
      'post_content' => '[wep-news-links max="12"]',
      'title'        => '',
      'type'         => '',
      'bg_colour'    => '#eaeaea'
    ],
    'weprotect-on-twitter'                  => [
      'post_title'   => 'WePROTECT on twitter',
      'post_content' => '[twitter_profile screen_name="WeProtect" height="550"]',
      'title'        => 'WePROTECT on twitter',
      'type'         => ''
    ],

    // Our mission
    'our-mission'                           => [
      'post_title'   => 'Our mission',
      'post_content' => '<p>The Internet is an extraordinary catalyst of innovation, education, and expanding global economic growth. Technology offers endless benefits and possibilities to our children that we never experienced as they have unlimited access to information with the ability to communicate and connect with people from all over the planet. But with this comes a range of ever more sophisticated threats.</p>',
      'title'        => 'Our mission',
      'type'         => 'cta',
      'image'        => 'GettyImages-813540356_high.jpg',
      'linked_page'  => 'our-mission',
      'button_label' => 'Our mission and strategy'
    ],
    'achieving-our-goals'                   => [
      'post_title'   => 'Achieving our goals',
      'post_content' => '<p>The WePROTECT Global Alliance Board are focused on four key areas to help deliver our mission</p>',
      'title'        => 'Achieving our goals',
      'type'         => 'sections',
      'linked_page'  => 'what-we-do',
      'section_1'    => '<p>Securing high-level commitment by governments, the technology industry and international and civil society organisations to tackling this crime</p>',
      'section_2'    => '<p>Support comprehensive national action, through the WePROTECT Model National Response and the Fund to End Violence Against Children</p>',
      'section_3'    => '<p>Galvanising global action by catalysing and driving critical interventions needed to end online child sexual exploitation</p>'
    ],
    'un-sustainable-development-goals'      => [
      'post_title'   => 'U.N. Sustainable development goals',
      'post_content' => '<h4>WePROTECT Global Alliance will support the landmark commitment by world leaders to end abuse, exploitation, trafficking and all forms of violence and abuse of children by 2030 as part of the UN Sustainable Development Goals.</h4>',
      'type'         => 'cta',
      'linked_page'  => 'donating',
      'button_label' => 'Donate to the Fund'
    ],
    'our-members'                           => [
      'post_title'   => 'Our members',
      'post_content' => '<p>WePROTECT Global Alliance to End Child Sexual Exploitation Online combines two major initiatives: the Global Alliance, led by the U.S. Department of Justice and the EU Commission and WePROTECT, which was convened by the UK.</p><p>This new, merged initiative has unprecedented reach, with 70 countries already members of WePROTECT or the Global Alliance, along with major international organisations, 20 of the biggest names in the global technology industry, and 17 leading civil society organisations.</p>',
      'title'        => 'Our members',
      'type'         => '',
      'linked_page'  => 'our-members'
    ],
    'global-alliance-strategy'              => [
      'post_title'   => 'WePROTECT Global Alliance Strategy',
      'post_content' => '<p>Read more about our vision and objectives in the <u>WePROTECT Global Alliance Strategy.</u></p>',
      'title'        => 'WePROTECT Global Alliance Strategy',
      'type'         => '',
      'bg_colour'    => '#eaeaea',
      'linked_page'  => 'home',
      'button_label' => 'Download our strategy'
    ],
    'join-us'                               => [
      'post_title'   => 'Join us',
      'post_content' => '<p>Can your government, company or organisation join them, by making a commitment to end the sexual exploitation of children online? Contact us to learn more.</p>',
      'title'        => 'Join us',
      'type'         => '',
      'linked_page'  => 'join-us',
      'button_label' => 'Why join WePROTECT?'
    ],

    'membership'              => [
      'post_title'   => 'Membership',
      'post_content' => '<p>The WePROTECT Global Alliance is a movement of unprecedented reach, with 70 countries already members of WePROTECT or the Global Alliance, along with major international organisations, 20 of the biggest names in the global technology industry, and 17 leading civil society organisations.</p>',
      'title'        => 'Membership',
      'image'        => 'GettyImages-730132775_super.jpg',
      'type'         => 'image'
    ],
    'membership-type'         => [
      'post_title'   => 'Membership type',
      'post_content' => '',
      'title'        => '',
      'type'         => 'sections',
      'section_1'    => '<h5 style="text-align: center;"><a href="/apply-for-membership/ngo-form/"><i class="fa fa-users fa-4x"></i><br> NGO</a></h5>',
      'section_2'    => '<h5 style="text-align: center;"><a href="/apply-for-membership/country-form/"><i class="fa fa-globe fa-4x"></i><br> Country</a></h5>',
      'section_3'    => '<h5 style="text-align: center;"><a href="/apply-for-membership/company-form/"><i class="fa fa-building fa-4x"></i><br> Company</a></h5>'
    ],
    'membership-form-country' => [
      'post_title'   => 'Membership form - Country',
      'title'        => 'Apply for membership as a country',
      'post_content' => '<p>Can your government, company or organisation join them, by making a commitment to end the sexual exploitation of children online? Contact us  using the form below to learn more.</p><p>[contact-form-7 id="0" title="Apply for membership - Government"]</p>'
    ],
    'membership-form-company' => [
      'post_title'   => 'Membership form - Company',
      'title'        => 'Apply for membership as a company',
      'post_content' => '<p>Can your company join them, by making a commitment to end the sexual exploitation of children online? If so, contact us using the form below and we will reply to you shortly.</p><p>[contact-form-7 id="0" title="Apply for membership - Company"]</p>'
    ],
    'membership-form-ngo'     => [
      'post_title'   => 'Membership form - NGO',
      'title'        => 'Apply for membership as an NGO or civil society organisation',
      'post_content' => '<p>Are you an NGO or civil society organisation that can join them, by making a commitment to end the sexual exploitation of children online? If so, contact us using the form below and we will reply to you shortly.</p><p>[contact-form-7 id="0" title="Apply for membership - Organisation"]</p>'
    ],


    'why-join'             => [
      'post_title'   => 'Membership - Why join',
      'post_content' => '<p>By signing up to the Statement of Action, countries will be making a high profile statement of their intent to tackle this heinous crime;</p><p>They will have access to a growing global network of expertise and support to help countries build their capacity and capability against online child sexual exploitation;</p><p>They will benefit from global technology development and awareness raising of this issue, and</p>',
      'title'        => 'Why join?',
      'type'         => 'sections',
      'linked_page'  => 'who-we-are',
      'section_1'    => '<p>The UNICEF hosted Fund to End Violence Against Children will support projects and programmes of developing countries and organisations from these countries that aim to prevent online CSE.</p>',
      'section_2'    => '<p>Our civil society organisation members gain access to a worldwide network of actors from varying backgrounds, all committed to ending online child sexual exploitation.</p>',
      'section_3'    => '<p>Companies who sign up to the WePROTECT Global Alliance have a unique opportunity to play a part in ending this heinous crime, working together with Government, Law enforcement and civil society to have a real voice in the solutions to this problem.</p>'
    ],
    'how-to-join'          => [
      'post_title'   => 'How to join',
      'post_content' => '<p>Leo suspendisse imperdiet augue etiam ac in a ullamcorper tortor suspendisse ad ullamcorper maecenas class at a.</p>',
      'title'        => 'How to join',
      'type'         => 'points',
      'bg_colour'    => '#eaeaea',
      'linked_page'  => 'apply-for-membership',
      'button_label' => 'Apply for membership',
      'section_1'    => '<p>Online child sexual exploitation is a global crime that requires a global response.  This issue cannot be dealt with by countries working in isolation. It demands a coordinated global response by governments, technology companies and civil society.</p>',
      'section_2'    => '<p><strong>Children are being exploited on an industrial scale and we have to act now.</strong> The National Centre for Missing and Exploited Children, which handles reports from major tech companies in the US of images of child sexual abuse being viewed by people all around the world, has received more than 7.5 million reports since 1998.  4.4 million of these were received in 2015 alone.</p>',
      'section_3'    => '<p>&nbsp;</p>'
    ],
    'who-is-a-member'      => [
      'post_title'   => 'Who\'s a member?',
      'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
      'title'        => 'Our members',
      'type'         => '',
      'linked_page'  => 'our-members',
      'button_label' => 'Who\'s a member?'
    ],
    'our-members-list'     => [
      'post_title'   => 'Our members list',
      'post_content' => '[wep-members-list group="country"]',
      'title'        => 'Our members',
      'type'         => ''//,
      //'shortcode' => ''
    ],
    'our-board-list'       => [
      'post_title'   => 'Our board list',
      'post_content' => '[wep-board-list]',
      'type'         => ''
    ],
    'who-we-are'           => [
      'post_title'   => 'Who we are',
      'post_content' => '<p>The WePROTECT Global Alliance to End Child Sexual Exploitation Online is an international movement dedicated to national and global action to end the sexual exploitation of children online.</p>',
      'title'        => 'Who we are',
      'image'        => 'GettyImages-155298725_super.jpg',
      'type'         => 'image'
    ],
    'statements-of-action' => [
      'post_title'   => 'Statement of action',
      'post_content' => '',
      'title'        => 'Statements of action',
      'type'         => 'sections',
      'section_1'    => '<p>Identify victims, and ensure they receive necessary support</p>',
      'section_2'    => '<p>Investigate cases of exploitation and prosecute offenders</p>',
      'section_3'    => '<p>Increase public awareness of the risks posed by children’s activities online</p>',
      'section_4'    => '<p>Reduce the availability of child sexual abuse material online</p>',
      'linked_page'  => 'statements-of-action',
      'button_label' => 'Statements of action'
    ],
    'our-board'            => [
      'post_title'   => 'Our leadership',
      'post_content' => '<p>The WePROTECT Global Alliance is led by a multi-stakeholder Board, comprised of representatives from key countries, international and civil society organisations, and the technology industry.</p>',
      'title'        => 'Our leadership',
      'type'         => 'cta',
      'linked_page'  => 'our-board',
      'button_label' => 'WePROTECT Board'
    ],
    'our-history'          => [
      'post_title'   => 'Our history',
      'post_content' => '<p>Can your government, company or organisation join them, by making a commitment to end the sexual exploitation of children online? Contact us to learn more.</p>',
      'title'        => 'Our history',
      'type'         => '',
      'bg_colour'    => '#eaeaea',
      'linked_page'  => 'our-history',
      'button_label' => 'Why join WePROTECT?'
    ],


    'what-we-do'  => [
      'post_title'   => 'What we do',
      'post_content' => '<p>WePROTECT Global Alliance will support the landmark commitment by world leaders to end abuse, exploitation, trafficking and all forms of violence and abuse of children by 2030 as part of the UN Sustainable Development Goals.</p>',
      'title'        => 'What we do',
      'type'         => 'image',
      'image'        => 'GettyImages-827679250_super.jpg'
    ],


    // Used?
    'what-is-cso' => [
      'post_title'   => 'What is CSEO?',
      'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',
      'title'        => 'What is CSEO?',
      'type'         => 'cta',
      //'image'        => 'stock-3',
      'linked_page'  => 'model-national-response',
      'button_label' => 'Find out more about CSEO'
    ],


    'funded-projects' => [
      'post_title'   => 'Funded projects',
      'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>[wep-latest max="3" categories="case-studies"]',
      'title'        => 'Funded projects',
      'type'         => '',
      'bg_colour'    => '#eaeaea'
    ],


    'header-funding' => [
      'post_title'   => 'Header - funding',
      'post_content' => '<p>The Fund to End Violence Against children is the linked Fund to End Violence Against Children, hosted by UNICEF, which sits alongside the Global Partnership to End Violence Against Children – an initiative comprised of civil society, governments and other stakeholders working to deliver SDG 16.2, the commitment to end all forms of violence against children by 2030.</p>',
      'title'        => 'Fund to end violence against children',
      'type'         => 'cta',
      'image'        => 'GettyImages-88583888_super.jpg',
      'linked_page'  => 'about-the-fund'
    ],

    'how-the-fund-is-spent' => [
      'post_title'   => 'How the fund is spent',
      'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
      'title'        => 'How the fund is spent',
      'linked_page'  => 'how-the-fund-is-spent',
      'button_label' => 'How the money is spent',
      'type'         => 'sections',
      'section_1'    => '<p>Supporting statement copy to go here</p>',
      'section_2'    => '<p>Supporting statement copy to go here</p>',
      'section_3'    => '<p>Supporting statement copy to go here</p>'
    ],


    'applying-for-funding' => [
      'post_title'   => 'Header - funding',
      'post_content' => '<p>For more information about the fund and how to apply, please visit <a href="http://fund.end-violence.org/">The Fund to End Violence Against Children</a></p>',
      'title'        => 'Apply for funding',
      'type'         => '',
      'bg_colour'    => '#eaeaea'
    ],

    'other-funding-methods' => [
      'post_title'   => 'Other funding methods',
      'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
      'title'        => 'Other funding methods',
      'type'         => '',
      'linked_page'  => 'other-funding-methods',
      'button_label' => 'Alternative funding'
    ],


    'get-involved' => [
      'post_title'   => 'Get involved',
      'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
      'title'        => 'Get involved',
      'type'         => 'cta'
    ],

    'case-studies' => [
      'post_title'   => 'Case studies',
      'post_content' => '<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>',
      'title'        => 'Case studies',
      'type'         => '',
      'linked_page'  => 'home',
      'button_label' => 'Case studies'
    ],

    'model-national-response-header' => [
      'post_title'   => 'The Model National Response',
      'post_content' => '<p>Preventing and Tackling Child Sexual Exploitation and Abuse (CESA)</p>',
      'title'        => 'The Model National Response',
      'type'         => 'image',
      'image'        => 'GettyImages-640610458_super.jpg',
      'linked_page'  => 'home',
      'button_label' => 'Download PDF'
    ],


    //Preventing and Tackling Child Sexual Exploitation and Abuse (CESA)
  ];
  public static $posts = [
    'home'                        => array(
      'post_type'    => 'page',
      'post_title'   => 'Worldwide cooperation to end child sexual exploitation online',
      'post_content' => '',
      'blocks'       => [
        'landing-banner',
        'why-we-must-act',
        'the-model-national-response',
        'fund-to-end-violence-against-children',
        'latest-news-and-events'
      ]
    ),
    'apply-for-membership'        => array(
      'post_type'    => 'page',
      'post_title'   => 'Apply for membership',
      'post_content' => '<p>Please select the suitable application type using the buttons below.</p>',
      'blocks'       => [
        'membership-type',
      ]
    ),
    'country-form'                => array(
      'post_type'    => 'page',
      'post_title'   => 'Apply for membership - Country',
      'post_content' => '',
      'post_parent'  => 'apply-for-membership',
      'blocks'       => [
        'membership',
        'membership-form-country'
      ]
    ),
    'company-form'                => array(
      'post_type'    => 'page',
      'post_title'   => 'Apply for membership - Company',
      'post_content' => '',
      'post_parent'  => 'apply-for-membership',
      'blocks'       => [
        'membership',
        'membership-form-company'
      ]
    ),
    'ngo-form'                    => array(
      'post_type'    => 'page',
      'post_title'   => 'Apply for membership - NGO',
      'post_content' => '',
      'post_parent'  => 'apply-for-membership',
      'blocks'       => [
        'membership',
        'membership-form-ngo'
      ]
    ),
    'useful-contacts'             => array(
      'post_type'    => 'page',
      'post_title'   => 'Useful contacts',
      'post_content' => '',
      'menu_order'   => 100
    ),
    'i-need-help'                 => array(
      'post_type'    => 'page',
      'post_title'   => 'I need help',
      'post_content' => '',
      'menu_order'   => 101
    ),
    'helplines-in-your-region'    => array(
      'post_type'    => 'page',
      'post_title'   => 'Helplines in your region',
      'post_content' => '',
      'menu_order'   => 102
    ),
    'feedback'                    => array(
      'post_type'    => 'page',
      'post_title'   => 'Feedback',
      'post_content' => '',
      'menu_order'   => 103
    ),

    /**
     * Who we are
     */
    'who-we-are'                  => array(
      'post_type'    => 'page',
      'post_title'   => 'Who we are',
      'post_content' => '',
      'menu_order'   => 200,
      'blocks'       => [
        'who-we-are',
        'statements-of-action',
        'our-mission',
        'our-members',
        'our-board',
        'our-history'
      ]
    ),
    'our-mission'                 => array(
      'post_type'    => 'page',
      'post_title'   => 'Our mission',
      'post_content' => '',
      'menu_order'   => 201,
      'blocks'       => [
        'our-mission',
        'achieving-our-goals',
        'un-sustainable-development-goals',
        'who-is-a-member',
        'global-alliance-strategy',
        'join-us'
      ]
    ),
    'our-board'                   => array(
      'post_type'    => 'page',
      'post_title'   => 'Our board',
      'post_content' => '<p>The WePROTECT Global Alliance is led by an executive Board and supported by the UK, which is providing a secretariat to support the Board’s leadership for an initial period. Our board members are:</p>',
      'menu_order'   => 202,
      'blocks'       => [
        'our-board-list'
      ]
    ),
    'statements-of-action'        => array(
      'post_type'    => 'page',
      'post_title'   => 'Statements of action',
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
      'menu_order'   => 203
    ),
    'our-members'                 => array(
      'post_type'    => 'page',
      'post_title'   => 'Our members',
      'post_content' => '',
      'menu_order'   => 204,
      'blocks'       => [
        'membership',
        'our-members-list',
        'join-us'
      ]
    ),
    'who-we-work-with'            => array(
      'post_type'    => 'page',
      'post_title'   => 'Who we work with',
      'post_content' => '<p>One of our greatest strengths lies in the breadth and richness of our partnerships. The WePROTECT Global Alliance truly harnesses the power of multistakeholder working, and we are proud of our relationships with our partners which include members of industry, civil society, law enforcement, international organisations and Governments around the world.</p>',
      'menu_order'   => 205
    ),
    'our-history'                 => array(
      'post_type'    => 'page',
      'post_title'   => 'Our history',
      'post_content' => '<p>In 2012, the then US Attorney General Eric Holder and EU Commissioner Celia Malmstrom launched the Global Alliance Against Child Sexual Abuse Online, which united 54 countries through their high-level ministers’ commitments to pursue shared policy targets in the fight against online child sexual exploitation.</p>
<p>In 2013, the then Prime Minister of the UK, David Cameron, launched a major push against online child sexual exploitation at the Internet Safety and Security Summit.</p>
<p>In 2014, he then brought together the WePROTECT Children Online initiative, with a landmark summit of ministers and leaders of technology companies and civil society in London.</p>
<p>With the second WePROTECT Summit in the UAE in 2015, 63 countries and international organisations, plus some of the biggest technology firms and leading NGOs, have made commitments to comprehensive national and international action against this crime.</p>
<p>At the 2015 Abu Dhabi Summit, the UK, US and EU Commission also announced their intention to merge WePROTECT and the Global Alliance, to create – for the first time – a single initiative with the influence, resources and expertise to transform how this crime is dealt with worldwide.  It merges the best elements of both of these major initiatives: their dynamism, the scope and ambition of their membership and vision, and the commitment to concrete action and report on progress.  And crucially, at its heart are the commitment to multistakeholder action needed to tackle this crime.</p>',
      'menu_order'   => 206
    ),
    'contact-us'                  => array(
      'post_type'    => 'page',
      'post_title'   => 'Contact us',
      'post_content' => '<p>Contact WePROTECT Global Alliance using the form below. If you wish to become a member, please follow the \'Join us\' link below.</p>',
      'menu_order'   => 207,
      'blocks'       => [
        'contact-us-form',
        'join-us'
      ]
    ),

    /**
     * What we do
     */
    'what-we-do'                  => array(
      'post_type'    => 'page',
      'post_title'   => 'What we do',
      'post_content' => '',
      'menu_order'   => 300,
      'blocks'       => [
        'what-we-do',
        'why-we-must-act',
        'what-is-cso',
        'funded-projects'//,
        //'other'
      ]
    ),
    'why-we-must-act'             => array(
      'post_type'    => 'page',
      'post_title'   => 'Why we must act',
      'post_content' => '',
      'menu_order'   => 301,
      'blocks'       => [
        'why-we-must-act-header',
        'why-we-must-act-threats',
        'why-we-must-act-statistics',
        'why-we-must-act-join-us'
      ]
    ),
    'funded-projects'             => array(
      'post_type'    => 'page',
      'post_title'   => 'Funded projects',
      'post_content' => '<p>Content to be completed.</p>',
      'menu_order'   => 302
    ),
    'faqs'                        => array(
      'post_type'    => 'page',
      'post_title'   => 'FAQs',
      'post_content' => '<p>Content to be completed.</p>',
      'menu_order'   => 303
    ),
    'how-you-can-help'            => array(
      'post_type'    => 'page',
      'post_title'   => 'How you can help',
      'post_content' => '<p>Content to be completed.</p>',
      'menu_order'   => 304
    ),
    'how-to-report-cseo'          => array(
      'post_type'    => 'page',
      'post_title'   => 'How to report CSEO',
      'post_content' => 'If you think you may know someone who is involved in viewing online child sexual abuse material or has been affected by child sexual exploitation online, please speak to your local law enforcement in the first instance.
			
			You can also visit the following websites for more help and guidance on reporting child sexual exploitation online.
			<ul>
				 <li><a href="https://www.interpol.int/">Interpol</a></span></li>
				 <li><a href="http://www.nationalcrimeagency.gov.uk/">National Crime Agency</a></span></li>
			</ul>',
      'menu_order'   => 305
    ),

    /**
     * Funding
     */
    'funding'                     => array(
      'post_type'    => 'page',
      'post_title'   => 'Funding',
      'post_content' => '',
      'menu_order'   => 400,
      'blocks'       => [
        'header-funding',
        'how-the-fund-is-spent',
        'applying-for-funding',
        'un-sustainable-development-goals',
        'other-funding-methods'
      ]
    ),
    'about-the-fund'              => array(
      'post_type'    => 'page',
      'post_title'   => 'About the fund',
      'post_content' => 'The Fund to End Violence Against children is the linked Fund to End Violence Against Children, hosted by UNICEF, which sits alongside the Global Partnership to End Violence Against Children - an initiative comprised of civil society, governments and other stakeholders working to deliver SDG 16.2, the commitment to end all forms of violence against children by 2030. The Partnership and its linked Fund aim to accelerate action in three priority areas:
				<ul>
					 <li>Preventing "online" violence with a particular focus on sexual exploitation</li>
					 <li>Addressing violence in the every-day lives of children with an initial focus on investments in Pathfinder countries and sub-national actors to implement evidence based programming</li>
					 <li>Addressing the prevention of violence children facing conflict and crisis.</li>
				</ul>
				The UK has committed £40 million over four years from 2016 onwards to the Fund to support efforts intending to tackle online child sexual exploitation, and as Partner of the Fund, the WePROTECT Global Alliance has a key role in providing strategic advice to the Fund in relation to its core objectives and funding priorities for supporting activities to tackle online CSE.
				
				The Fund launched in 2016 for the first time inviting applications from across government, civil society and industry to deliver activities to build national and international capacity to tackle online CSE. As a result, 15 successful applications are now being implemented in various countries around the world.
				
				This July the Fund launched its second call for proposals, seeking:
				<ul>
					 <li>Applications from ODA-eligible countries or third party organisations applying on behalf of their governments to develop a coordinated multi-stakeholder national action plan to respond to online CSE, in line with the WePROTECT Global Alliance\'s Model National Response</li>
					 <li>Applications from regional and international organisations seeking to generate awareness of the threat of online CSE within regions to mobilise their membership towards national action</li>
					 <li>Applications from organisations that seek to enhance the quality of MNR capabilities and the consistency with which they are delivered at a global level</li>
				</ul>
				For more information about the Fund and how to apply, please visit <a href="http://fund.end-violence.org/">The Fund to End Violence Against Children </a>',
      'menu_order'   => 401
    ),
    'how-the-fund-is-spent'       => array(
      'post_type'    => 'page',
      'post_title'   => 'How the fund is spent',
      'post_content' => '',
      'menu_order'   => 402
    ),
    'apply-for-funding'           => array(
      'post_type'    => 'page',
      'post_title'   => 'Apply for funding',
      'post_content' => '',
      'menu_order'   => 403
    ),
    'donors'                      => array(
      'post_type'    => 'page',
      'post_title'   => 'Donors',
      'post_content' => '<p>Content to be completed.</p>',
      'menu_order'   => 404
    ),
    'other-funding-methods'       => array(
      'post_type'    => 'page',
      'post_title'   => 'Other funding methods',
      'post_content' => '<p>Content to be completed.</p>',
      'menu_order'   => 405
    ),

    /**
     * Get involved
     */
    'get-involved'                => array(
      'post_type'    => 'page',
      'post_title'   => 'Get involved',
      'post_content' => '',
      'menu_order'   => 500,
      'blocks'       => [
        'get-involved',
        'membership',
        'un-sustainable-development-goals'
      ]
    ),
    'join-us'                     => array(
      'post_type'    => 'page',
      'post_title'   => 'Join us',
      'post_content' => '',
      'menu_order'   => 501,
      'blocks'       => [
        'membership',
        'why-join',
        'how-to-join',
        'who-is-a-member'
      ]
    ),
    'donating'                    => array(
      'post_type'    => 'page',
      'post_title'   => 'Donating',
      'post_content' => '',
      'menu_order'   => 502
    ),

    /**
     * Resources
     */
    'model-national-response' => array(
      'post_type'     => 'page',
      'post_title'    => 'Model National Response',
      'post_content'  => '<h2>A Model National Response</h2>
At the Abu-Dhabi Summit in 2015, governments and organisations agreed to establish and deliver, in their own countries, a coordinated national response to online child sexual exploitation, guided by the WePROTECT Global Alliance Model National response (MNR). This document provides guidance and support on the MNR to countries and organisations to help them deliver on this commitment. Whilst the Model is focused on helping countries to build their response to online child sexual exploitation, it acknowledges that this cannot be addressed in isolation and a wider set of capabilities to prevent and tackle child sexual exploitation and abuse are required to be in place to ensure a complete national response.

This Model will:
<ul>
 	<li>Enable a country to assess its current response and identify gaps</li>
 	<li>Prioritise national efforts to fill gaps</li>
 	<li>Enhance international understanding and cooperation.</li>
</ul>
The Model builds on many years of work by experts and practitioners and it builds on the existing international framework; for action to prevent and tackle CSEA. This includes the United Nations Convention on the Rights of the Child (UNCRC) and its Optional Protocol on the sale of children, child prostitution and child pornography. As well as the Agendas for Action produced as a result of the three World Congresses against the Sexual Exploitation of Children and Adolescents which took place in Sweden in 1996, Japan in 2001 and Brazil in 2008.

The Model does not seek to prescribe activities or set out a single approach. Its purpose is to describe the capabilities needed for effective child protection, highlight good practice from countries that are already delivering these capabilities, and signpost organisations that can provide further guidance and support to countries seeking to develop or enhance their existing capability.

Importantly, the Model will enable a country – regardless of its starting point – to identify any gaps in capabilities and commence planning to fill those gaps. Using the Model can assist countries in identifying actions that contribute to the delivery of the United Nations Sustainable Development Goal targets, primarily 16.2 - End all forms of violence against and torture of children. It could also assist with delivery against targets 8.7 and 5.2.

Whilst countries will develop their own individual approaches, by doing so within the context of a commonly agreed framework and understanding of capabilities, it is hoped that communication and cooperation amongst stakeholders at both national and international levels can be enhanced further.

Implementing the capabilities will lead to significant outcomes for protecting children from online CSE. These are clearly detailed in the Model along with a number of enablers which, if in place and effective, will accelerate and improve the outcomes.

We hope you find this Model a useful tool to aid capacity building in online CSE, leading to the highest level of response to victims and offenders. We look forward to hearing how this Model has contributed towards the development and coordination of national, regional and international responses to CSE at the next WePROTECT Summit. We also welcome feedback which can be sent via the <a href="/feedback/">feedback form</a>.',
      'page_template' => 'mnr.php',
      'menu_order'    => 601,
      'blocks'        => [
        'model-national-response-header'
      ]
    ),

    /**
     * News and events
     */
    'news-and-events'             => array(
      'post_type'    => 'page',
      'post_title'   => 'News and events',
      'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
      'menu_order'   => 700,
      'blocks'       => [
        'latest-news',
        'latest-events',
        'weprotect-on-twitter'
      ]
    ),
    'news'                        => array(
      'post_type'    => 'page',
      'post_title'   => 'News',
      'post_content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>',
      'menu_order'   => 701,
      'blocks'       => [
        'news-list',
        'weprotect-on-twitter'
      ]
    ),
    'newsletter'                  => array(
      'post_type'    => 'page',
      'post_title'   => 'Newsletter',
      'post_content' => '',
      'menu_order'   => 702
    ),

    /**
     * Test posts
     */
    'case-study-andrea'           => array(
      'post_type'     => 'post',
      'post_category' => array( 'case-studies' ),
      'post_title'    => 'Andrea',
      'post_content'  => '<p>“Andrea” from El Salvador, pictured here, was 13 when she created a social media profile. A man began flirting with her and said he wanted to meet her. For two weeks he harassed her and demanded sexually explicit pictures. When she refused, his messages became increasingly menacing, so she shared the messages with her parents who took her to the police. Following an investigation, the police located the man, arrested him and charged him with sexual harassment. He received a long prison sentence for multiple instances of sexual harassment. Andrea now works with a gender violence prevention team with the NGO OXFAM as part of a UNICEFsupported programme for the prevention of sexual violence, abuse and exploitation of children online.</p>',
      'thumbnail'     => 'cs-1.jpg',
      'menu_order'    => 0
    ),

    'case-study-charlotte' => array(
      'post_type'     => 'post',
      'post_category' => array( 'case-studies' ),
      'post_title'    => 'Charlotte',
      'post_content'  => '<p>“Charlotte” from Nottingham, England was groomed online by a person posing as a young girl. After a diagnosis of Asperger Syndrome, Charlotte turned to social media for friendship. The "girl", later identified by police as a man who had exploited other young people in this way, befriended Charlotte but then began demanding naked photos, using them to blackmail her in exchange for more. The abuser leaked the photos on a social media site. These were eventually circulated to Charlotte’s mother who instantly reported this to the police. After moving away to escape bullying at school, Charlotte was contacted again by the same man under another name. Her case was investigated by a specialist police unit, and the man was successfully prosecuted and placed on the UK’s sexual offences register for five years. The police also referred Charlotte to the National Society for the Prevention of Cruelty to Children (NSPCC), which provides support for the victims of online child sexual exploitation in the UK, as well as the UK’s child helpline. Charlotte says, “I used to think that what happened to me was all my fault but they helped me to realise that it wasn\'t”. The NSPCC also taught her mother about online safety, who says she now feels “a lot more confident” in helping Charlotte stay safe online.</p>',
      'thumbnail'     => 'cs-2.jpg',
      'menu_order'    => 0
    ),

    'case-study-elisa-and-gina' => array(
      'post_type'     => 'post',
      'post_category' => array( 'case-studies' ),
      'post_title'    => 'Elisa and Gina',
      'post_content'  => '<p>These girls, known to us as “Elisa” (12) and “Gina” (13), were sexually exploited in Madagascar by a 59- year-old European man, whom police believe is part of a larger network of criminals involved in the production and online distribution of child sexual abuse material. The mother of one of the girls, who was employed by the man as a domestic worker, introduced him to the girls, and they began to spend evenings with him at his home. Elisa testified that the man, who took nude photographs of both girls for online distribution, sexually assaulted her. He is now in prison, awaiting extradition to France.</p>',
      'thumbnail'     => 'cs-3.jpg',
      'menu_order'    => 0
    ),

    'case-study-rosalyn' => array(
      'post_type'     => 'post',
      'post_category' => array( 'case-studies' ),
      'post_title'    => 'Rosalyn',
      'post_content'  => '<p>This teenager, known to us as “Rosalyn”, is at a shelter in the Philippines. She and her six siblings were rescued during a cybercrime police raid six years ago when their parents were caught forcing the two oldest girls to perform in live streaming of child sexual abuse in their home. Estey Rosalyn was drawn into online sexual abuse by a neighbour, and her parents were paid for Rosalyn’s acts. Her younger sister began to perform online as well, financing the parents’ ability to purchase their own computer system. Using this, they continued to force their two older daughters to participate in live-streaming of child sexual abuse in front of a webcam in their home. Rosalyn is now an advocate for online safety and agreed to share her story to help raise awareness of child sexual exploitation online.</p>',
      'thumbnail'     => 'cs-4.jpg',
      'menu_order'    => 0
    ),

    'case-study-proteja-brazil' => array(
      'post_type'     => 'post',
      'post_category' => array( 'case-studies' ),
      'post_title'    => 'Proteja Brazil',
      'post_content'  => '<p>A woman in Fortaleza, Brazil, shows the app “Proteja Brasil” (Protect Brazil) on her smartphone. The app was developed by UNICEF Brasil and its partners, with support from the UK and the WePROTECT Global Alliance. The app facilitates reporting to authorities violence against children and adolescents, including online violence and sexual exploitation. It provides guidance on where to report incidents, and displays contact details and locations of police stations, protection councils and organisations in major Brazilian cities.</p>',
      'thumbnail'     => 'cs-5.jpg',
      'menu_order'    => 0
    ),

    'case-study-winny' => array(
      'post_type'     => 'post',
      'post_category' => array( 'case-studies' ),
      'post_title'    => 'Winny',
      'post_content'  => '<p>Young people’s participation in tackling online sexual exploitation and all forms of abuse and violence is central to the WePROTECT Model National Response and the UN Convention on the Rights of the Child. Winny Moreira (17), centre, is a Brazilian advocate against online child sexual exploitation and cyberbullying. Winny was herself bullied online at school. However, she became a passionate advocate for young people when her friend Jessica was bullied and harassed after inappropriate images from her phone were stolen and shared with her peers in school. Winny supported her friend and participated in a UNICEF-sponsored girls’ empowerment programme in Brazil. In 2015, she was a finalist of UNICEF Brazil’s Safe Surf Campaign for her YouTube video, “Internet sem Vacilo” (Internet without Hesitation). The stories of the two friends have been highlighted in an online video for the UNICEF/WePROTECT Global Alliance #ReplyForAll campaign. Just three weeks into this campaign, this and other true life stories had received some two million views and helped to generate a positive online discussion amongst young people.</p>',
      'thumbnail'     => 'cs-6.jpg',
      'menu_order'    => 0
    ),


    'news-article' => array(
      'post_type'     => 'post',
      'post_category' => array( 'news' ),
      'post_title'    => 'Lorem ipsum dolor sit amet, sed amit a dorem.',
      'post_content'  => '<p>Lorem ipsum dolor sit amet.</p>',
      'menu_order'    => 0
    ),

    'event-one' => array(
      'post_type'     => 'post',
      'post_category' => array( 'events' ),
      'post_title'    => 'CHILD DIGNITY IN THE DIGITAL WORLD WORLD CONGRESS ROME, 2017',
      'post_content'  => '<p>Children and adolescents make up over a quarter of the more than 3.2 billion Internet users worldwide. This generation of over 800 million young users is in danger of becoming victims of sextortion, sexting, cyberbullying and harassment.</p>
			This global problem calls for a global solution. We need an open and thorough discussion to build awareness, and to mobilize action for a better protection of minors online.
			
			‘Child Dignity in the Digital World’ is the first world congress of its kind that brings together key stakeholders and international leaders from all relevant areas.
			
			This pioneering congress hosted by the Centre for Child Protection at the Pontifical Gregorian University in Rome sets a milestone in the international fight against digital sexual child abuse.
			
			The invitation-only congress brings together distinguished academic experts, business leaders, leaders of civil society, high-level politicians and religious representatives from across the globe. This provides a historic opportunity to set the global agenda for the fight against online sexual child abuse and for child protection in the digital world.',
      'thumbnail'     => 'cddw.jpg',
      'menu_order'    => 0
    ),

    'event-two' => array(
      'post_type'     => 'post',
      'post_category' => array( 'events' ),
      'post_title'    => 'CHILD DIGNITY IN THE DIGITAL WORLD WORLD CONGRESS ROME, 2017',
      'post_content'  => '<p>The WePROTECT Global Alliance brings together, for the first time, both the political will and the resources to end the sexual exploitation of children online.  It is working in partnership with the new Fund to End Violence Against Children to deliver a global program of capacity and capability, with an initial donation of £40m from the UK government.  The Fund will be hosted by UNICEF and the WePROTECT Global Alliance Board will be responsible for advising how to prioritize its activities for maximum impact.</p>
			The Board and the UK government are working with the Fund to seek further donors to support this critical work and identify interventions that can make a real difference to the lives of children worldwide.  For further information, and to find out how to make a bid to the Fund, visit <a href="http://www.end-violence.org/">www.end-violence.org</a>.
			
			To find out more about how the Fund to End Violence Against Children will work with WePROTECT Global Alliance, and the difference the UK and UNICEF have already made on this issue, see our strategy <a href="https://cj-lewis-nsh8.squarespace.com/s/WePROTECT-Global-Alliance-Strategy.pdf">here</a>.',
      'thumbnail'     => 'GettyImages-748490893_high.jpg',
      'menu_order'    => 0
    ),

    /**
     * MNR groups
     */

    'policy-and-governance' => array(
      'post_type'     => 'page',
      'post_title'    => 'Policy and Governance',
      'post_content'  => '<h4>Highest level national commitment to CSEA prevention and response</h4><p>Comprehensive understanding of CSEA within highest levels of government and law enforcement. WIllingness to work with, and co-ordinate to efforts of, multiple stakeholders to ensure the enhanced protection of victims and an enhanced response to CSEA offending.</p>',
      'post_parent'   => 'model-national-response',
      //'post_category' => array( 'model-national-response' ),
      'page_template' => 'mnr.php',
      'menu_order'    => 802,
      'blocks'        => [
        'model-national-response-header'
      ]
    ),

    'criminal-justice' => array(
      'post_type'     => 'page',
      'post_title'    => 'Criminal Justice',
      'post_content'  => '<h4>Effective and successful CSEA investigations, convictions and offender management</h4><p>Law Enforcement and judiciary have the knowledge, skills, systems and tools required to enable them to perform victim-focused investigations and secure positive judicial outcomes. CSEA offenders are managed and reoffending prevented.</p>',
      'post_parent'   => 'model-national-response',
      //'post_category' => array( 'model-national-response' ),
      'page_template' => 'mnr.php',
      'menu_order'    => 803,
      'blocks'        => [
        'model-national-response-header'
      ]
    ),

    'victim' => array(
      'post_type'     => 'page',
      'post_title'    => 'Victim',
      'post_content'  => '<h4>Appropriate suppor ervices for children and young people</h4><p>Children and yound people have access to services that support them thorugh the investigation and prosecution of crimes against them. They have access to shelter; specialised medical and psychological services; and rehabilitation, repatriation and resocialization services.</p>',
      'post_parent'   => 'model-national-response',
      //'post_category' => array( 'model-national-response' ),
      'page_template' => 'mnr.php',
      'menu_order'    => 804,
      'blocks'        => [
        'model-national-response-header'
      ]
    ),

    'societal' => array(
      'post_type'     => 'page',
      'post_title'    => 'Societal',
      'post_content'  => '<h4>CSEA prevented</h4><p>Children and young people are informed and empwered to protect themselves from CSEA. Parents, carers, teachers, and childcare professionals are better prepared to keep children safe from CSEA, including addressing taboos surrounding sexual violence.</p>',
      'post_parent'   => 'model-national-response',
      //'post_category' => array( 'model-national-response' ),
      'page_template' => 'mnr.php',
      'menu_order'    => 805,
      'blocks'        => [
        'model-national-response-header'
      ]
    ),

    'industry' => array(
      'post_type'     => 'page',
      'post_title'    => 'Industry',
      'post_content'  => '<h4>Industry engagement in developing solutions to prevent and tackle CSEA</h4><p>Industry has the power and willingness to block and remove online CSEA content and proactively adress local CSEA issues. Industry proactively reports online CSEA.</p>',
      'post_parent'   => 'model-national-response',
      //'post_category' => array( 'model-national-response' ),
      'page_template' => 'mnr.php',
      'menu_order'    => 806,
      'blocks'        => [
        'model-national-response-header'
      ]
    ),

    'media-and-communications' => array(
      'post_type'     => 'page',
      'post_title'    => 'Media and Communications',
      'post_content'  => '<h4>Awareness raised among the public, professionals and policy makers</h4><p>Potential future offenders are deterred. CSEA offending and reoffending is reduced.</p>',
      'post_parent'   => 'model-national-response',
      //'post_category' => array( 'model-national-response' ),
      'page_template' => 'mnr.php',
      'menu_order'    => 807,
      'blocks'        => [
        'model-national-response-header'
      ]
    ),

    /**
     * MNR sections
     */

    'leadership' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Leadership',
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
      'group'        => 'policy-and-governance',
      'menu_order'   => 1
    ),

    'research-analysis-and-monitoring' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Research, analysis and monitoring',
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
<ul>
 	<li>There are a number of intergovernmental and international non-governmental organisations that have undertaken research, analysis and monitoring of efforts in partnership with governments and civil society across the world and have developed best practice to help countries. These include UNICEF and its Office of Research (<a href="http://www.unicef.org/protection">www.unicef.org/protection</a> and <a href="http://www.unicef-irc.org">www.unicef-irc.org</a>), ECPAT (<a href="http://www.ecpat.net">www.ecpat.net</a>) and the Family Online Safety Institute’s Global Resource and Information Directory (<a href="http://www.fosigrid.org">www.fosigrid.org</a>). More information can be found on their websites.</li>
 	<li>The Special Representative of the UN Secretary-General on Violence against Children has published a study entitled Releasing Children’s Potential and Minimizing Risks – ICTs, the Internet and Violence against Children – <a href="http://www.srsg.violenceagainstchildren.org">www.srsg.violenceagainstchildren.org</a></li>
 	<li>Global Kids Online is an international research project which aims to advance understanding of whether and how the internet amplifies the risks of harm to children. It does this by stimulating and guiding investigations of how children around the globe use new digital, networked and mobile technologies. More information can be found at <a href="http://www.unicef-irc.org/article/1194/">www.unicef-irc.org/article/1194/</a></li>
</ul>',
      'post_excerpt' => 'National situational analysis of CSEA risk and response; measurements/indicators',
      'group'        => 'policy-and-governance',
      'menu_order'   => 2
    ),

    'legislation' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Legislation',
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
 	<li>More information on the relevant international treaties can be found at <a href="http://www.ohchr.org/en/professionalinterest/pages/crc.aspx">www.ohchr.org/en/professionalinterest/pages/crc.aspx</a> and <a href="http://www.ohchr.org/en/professionalinterest/pages/oPSCCRC.aspx">www.ohchr.org/en/professionalinterest/pages/oPSCCRC.aspx</a></li>
 	<li>More information about the Council of Europe’s Budapest and Lanzarote Conventions can be found at <a href="http://www.coe.int/en/web/conventions/full-list">www.coe.int/en/web/conventions/full-list</a></li>
 	<li>More information about the Luxembourg Guidelines can be found at <a href="http://www.luxembourgguidelines.org">www.luxembourgguidelines.org</a></li>
 	<li>The International Centre for Missing &amp; Exploited Children (ICMEC) researches and analyses national legislation from around the world to identify good practice and useful models that may benefit other countries. ICMEC’s ‘Child Pornography: Model Legislation &amp; Global Review’ provides a legal framework for countries to consider when implementing/enhancing legislation. Please see ICMEC’s website for further details – <a href="http://www.icmec.org">www.icmec.org</a></li>
 	<li>Other international organisations such as ECPAT and UNICEF are undertaking research and analysis of legislation and policies for the prevention and response to CSEA and more information can be found at their websites – <a href="http://www.unicef.org/protection">www.unicef.org/protection</a> and <a href="http://www.ecpat.net">www.ecpat.net</a></li>
</ul>',
      'post_excerpt' => 'Comprehensive and effective legal framework to investigate offenders and ensure protection for victims',
      'group'        => 'policy-and-governance',
      'menu_order'   => 3
    ),


    ############

    'dedicated-law-enforcement' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Dedicated Law Enforcement',
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
 	<li>There are a number of national law enforcement agencies around the world that have experience in establishing and delivering a dedicated CSEA capability, using the multi-stakeholder approach detailed above. Requests for advice and support from these agencies can be made through Interpol (<a href="http://www.interpol.int">www.interpol.int</a>) which will connect a country with a mutually agreeable partner law enforcement agency.</li>
</ul>',
      'post_excerpt' => 'National remit; trained officers; proactive and reactive investigations; victim-focused; international cooperation',
      'group'        => 'criminal-justice',
      'menu_order'   => 4
    ),

    'judiciary-and-prosecutors' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Judiciary and Prosecutors',
      'post_content' => '<h2>Capability 5 – Judiciary and Prosecutors</h2>
<h4>Definition</h4>
<ul>
 	<li>Judiciary and prosecutors have the specialist knowledge and skills required to enable positive judicial outcomes for CSEA victims.</li>
 	<li>The needs of the victim are paramount during the judicial process and appropriate support is provided throughout.</li>
 	<li>Judiciary and prosecutors dealing with CSEA cases have a clear awareness and understanding of the context and circumstances in which CSEA cases can take place, the potential vulnerability of victims/witnesses, and the methodologies and profiles of offenders.</li>
 	<li>Victims and witnesses are given access to emotional and psychological support.</li>
 	<li>Judiciary understand the risk posed by child sexual offenders and the gravity of the crime and sentence accordingly within the parameters established by relevant national legislation.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>Children and young people who have been the subject of sexual abuse and/or exploitation require a very high level of support to be able to participate effectively in the judicial process and maintain their engagement throughout.</li>
 	<li>Victims need to be protected from any negative or long-term emotional or psychological damage from the judicial process.</li>
 	<li>Judges and Prosecutors armed with the appropriate skills and knowledge can ensure that everyone engaged in the judicial process fully understands the factors that could negatively affect CSEA cases and mitigate against these whilst ensuring due legal process is followed.</li>
 	<li>Successful prosecutions will increase public and victim confidence in the judicial process which will encourage more people to report CSEA to law enforcement and this will act as a deterrent to offenders.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>Effective victim support – that does not hamper a country’s due legal process – should be developed and provided by people with specialist knowledge and skills. This can come from a wide range of statutory and non-statutory organisations.</li>
 	<li>Factors that could affect the credibility or reliability of a child or young person need to be understood and taken into consideration by the judiciary and prosecutors to ensure they are balanced and do not negatively impact proceedings. Examples include inconsistent accounts by victims and reluctance to participate in the criminal justice process.</li>
 	<li>Specific measures need to be in place before, during and after the trial to ensure victims are supported throughout the process. Examples include:
<ul>
 	<li>Explaining proceedings to victims in age-appropriate language</li>
 	<li>Involving parents or guardians, where possible and appropriate</li>
 	<li>Allowing the use of non-standard methods of giving evidence such as a live video link.</li>
</ul>
</li>
 	<li>Prosecutors should be aware of the type and range of support available and, where required, signpost this support to the child or young person (or their parent/guardian/caregiver).</li>
 	<li>Psychological and wellness support should be provided for judiciary staff involved in CSEA cases</li>
</ul>
<h4>More guidance and support</h4>
<ul>
 	<li>Guidelines on the treatment of young victims and witnesses should be followed closely. The United Nations has produced Guidelines on Justice in Matters involving Child Victims and Witnesses of Crime (<a href="http://www.unodc.org">www.unodc.org</a>). An example of national guidelines from the United Kingdom can be found at – <a href="http://www.cps.gov.uk/publications/docs/best_evidence_in_criminal_proceedings.pdf">www.cps.gov.uk/publications/docs/best_evidence_in_criminal_proceedings.pdf</a></li>
</ul>',
      'post_excerpt' => 'Trained; victim-focused',
      'group'        => 'criminal-justice',
      'menu_order'   => 5
    ),

    'offender-management-process' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Offender Management Process',
      'post_content' => '<h2>Capability 6 – Offender Management Process</h2>
<h4>Definition</h4>
<ul>
 	<li>A multi-agency system to manage and rehabilitate child sex offenders to prevent their reoffending. This includes all types of child sex offences – both online and offline. The system covers:
<ul>
 	<li>Direct supervision when in custody or prison</li>
 	<li>Management of offenders in the community after their release from custody or prison</li>
 	<li>The ongoing collection, analysis and sharing of intelligence relating to offenders, nationally and internationally.</li>
</ul>
</li>
 	<li>A national sex offender register (as defined by national legislation) to record an individual’s offences. This can be shared with appropriate agencies and assist the assessment of risk they may pose within the community.</li>
 	<li>The provision of statutory tools (for example court orders) to help manage offenders in the community. These should allow tailored conditions or prohibitions to be imposed on an offender depending on the nature of the case</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>A system to manage and rehabilitate child sex offenders will limit their ability to cause further harm to children.</li>
 	<li>It gives authorities a transparent and consistent framework through which they can manage the risk posed by child sex offenders in the community.</li>
 	<li>It provides a mechanism for protecting children overseas from the risk posed by transnational child sex offenders.</li>
 	<li>A national sex offender register ensures that relevant, accurate and up-to-date information is easily available to all authorised personnel. This enhances the ability of law enforcement and other appropriate organisations to monitor offenders’ activities effectively and share information efficiently and securely.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>Direct supervision when in custody or prison:
<ul>
 	<li>Offences are recorded and uploaded to a national central database</li>
 	<li>Intelligence is shared with relevant authorities</li>
 	<li>Offenders attend rehabilitation and education programmes whilst in custody.</li>
 	<li>Management of offenders after their release:</li>
 	<li>A dedicated, multi-agency approach is taken to manage offenders within the community, giving priority to those who pose the greatest level of risk of reoffending.</li>
 	<li>Dedicated intelligence databases should be available that hold all data relating to an offender and the risk they pose. Records should be regularly updated and accessible to all appropriate agencies to monitor, risk assess and ensure compliance with release conditions for any offender.</li>
 	<li>Agencies work together and share intelligence to manage offenders, in particular law enforcement and social services. This includes sharing information with international law enforcement partners when the offender attempts to travel outside their jurisdiction.</li>
 	<li>Imposing conditions of release can be considered to manage any specific risks an offender poses to children, such as not allowing them to work with children or restricting their access to and contact with children, or imposing travel restrictions on offenders.</li>
 	<li>A system of notification requirements and court orders that provide law enforcement agencies with the information and powers needed to protect children from the risk posed by child sex offenders in the community</li>
</ul>
</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>The United Kingdom’s National Offender Management Service has published an evaluation of the latest approaches to managing sex offenders in the community and assessing the risk they pose: <a href="https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/308159/sex-offender-management-and-dynamic-risk.pdf">https://www.gov.uk/government/uploads/system/uploads/attachment_data/file/308159/sex-offender-management-and-dynamic-risk.pdf</a></li>
 	<li>The United States’ Center for Sex Offender Management website has a variety of information relating to Sex Offender management: <a href="http://www.csom.org/">http://www.csom.org/</a></li>
</ul>',
      'post_excerpt' => 'Prevent re-offending of those in the criminal justice system nationally and internationally.',
      'group'        => 'criminal-justice',
      'menu_order'   => 6
    ),

    'access-to-image-databases' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Access to Image Databases',
      'post_content' => '<h2>Capability 7 – Access to Image Databases</h2>
<h4>Definition</h4>
<ul>
 	<li>Law enforcement use Interpol’s International Child Sexual Exploitation database (ICSE DB) to improve the efficiency and effectiveness of their efforts to identify victims and offenders.</li>
 	<li>Where appropriate a national child sexual abuse image database is in place and law enforcement use it to improve the efficiency and effectiveness of their efforts to identify victims and offenders.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>The exchange of child sexual abuse material online is multi-jurisdictional. This has resulted in a requirement for law enforcement to cooperate at both national and international levels to share information and intelligence.</li>
 	<li>Accessing image databases at a national and international level reduces the risk for duplicate and repeated investigation of child sexual abuse material by law enforcement where the victim has already been identified or the material is already under investigation by another law enforcement agency.</li>
 	<li>A national child abuse image database enhances operational capability for law enforcement within a country, as it allows officers to use the data contained within an image to aid victim and offender identification.</li>
 	<li>The content within the ICSE DB and a national database can evolve over time to include such things as video footage, ICSE series numbers and Interpol identifiers, which further law enforcement operational capability and cooperation nationally and internationally.</li>
 	<li>Users of the ICSE DB provide unique local knowledge to assist in identifying the country and location of the crime, which can further enhance victim and offender identification opportunities</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>The ICSE DB is an intelligence and investigative tool that enables instant global access to data and tools for the uploading and analysis of child sexual exploitation material seized by law enforcement. ICSE DB is accessed via Interpol’s global secure network (I-24/7), which links Interpol’s national central bureaus in its 190 member countries.</li>
 	<li>To be considered for connection to the ICSE DB a number of conditions must be met; specifically the existence of a dedicated CSEA law enforcement unit/team (see Capability 4) and evidence of existing legislation that penalizes the production, possession and/or distribution of child sexual abuse material and identifies the sanctions (see Capability 3).</li>
 	<li>A key requirement for the existence of a national database with the ability to share and retain child sexual abuse material is to ensure that the appropriate governing legislation is in place.</li>
 	<li>Training in the use of both ICSE DB and a national database must be provided to all officers who have access. This includes the classification of images, the functionality of the databases and victim identification training.</li>
</ul>
<h4>More guidance and support</h4>
<ul>
 	<li>More information about connection to the ICSE DB can be found at <a href="http://www.interpol.int">www.interpol.int</a>. Good practice in the establishment of a national database can be provided by a number of countries that have developed and implemented their own version. Advice and guidance from these countries can be accessed through Interpol.</li>
</ul>
&nbsp;',
      'post_excerpt' => 'National database; link to Interpol database (ICSE)',
      'group'        => 'criminal-justice',
      'menu_order'   => 7
    ),

    ############

    'end-to-end-support' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'End to End Support',
      'post_content' => '<h2>Capability 8 – End-to-end Support</h2>
<h4>Definition</h4>
<ul>
 	<li>CSEA victims are provided with planned and integrated end-to-end support to help them cope with the immediate impact of their abuse and recover from the harm experienced.</li>
 	<li>Risk assessments inform the immediate support plan as soon as a victim is identified.</li>
 	<li>A fully integrated and personal end-to-end plan is in place to support the victim through the investigation, legal proceedings and beyond.</li>
 	<li>By the end of provision, victims are able to support themselves independently.</li>
 	<li>Support is provided by professionals who are trained and experienced in supporting CSEA victims</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>CSEA victims may not recognise themselves as victims and may remain in a state of denial. They are vulnerable to coercion, persuasion, peer pressures or abuse of positions of trust by those who offend against them and therefore need to be provided with support throughout the investigation and legal proceedings to keep them engaged and cooperative.</li>
 	<li>Often victims feel isolated by those closest to them and require prolonged and professional support to recognise that the offending behaviour they have been subjected to is not ‘normal’ and amounts to severe criminal offending which will support the gathering of evidence.</li>
 	<li>Often victims can become more vulnerable and susceptible to depression, self-harm or suicide from such feelings of isolation and need access to specialist support services.</li>
 	<li>Longer-term support is essential as mental health issues can often follow, with the effects of abuse remaining with victims for many years beyond offending.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>International child protection standards should inform and facilitate working with victims during the investigation and judicial proceedings in ways that:
<ul>
 	<li>Enable the gathering of best evidence from vulnerable children</li>
 	<li>Enhance, rather than detract from, their wellbeing and welfare</li>
 	<li>Manage and reduce risk to victims</li>
 	<li>Ensure that victims are supported and safeguarded regardless of their willingness to participate in the investigation or judicial proceedings.</li>
</ul>
</li>
 	<li>The wider welfare of children should be considered and wider support provided where required such as relocation and ongoing services to support their recovery and rehabilitation.</li>
 	<li>An appropriate response by the health sector is critical for victims as this can be the first sector which detects CSEA and refers cases to law enforcement and other support services.</li>
 	<li>Any cultural barriers to the disclosure of abuse should be challenged and professionals should seek to communicate an attitude that is protective, non-blaming and non-judgemental.</li>
 	<li>Planning for individual victim care should be informed by the individual needs of the child and provided by those with specific relevant training.</li>
 	<li>End-to-end support starts from the point of first contact with the victim and should include communication and safety planning throughout.</li>
 	<li>Close collaboration between law enforcement and those statutory agencies or NGOs whose primary remit is the care and welfare of children is fundamental to ensuring a comprehensive response for victims that is respectful of the full range of children’s rights. This collaboration will assist with information-sharing, as well as access to specialist alternative care and the development of an end-to-end support plan. The type of specialist support services required could include medical support, emergency accommodation, financial assistance, education, therapeutic care and potentially longer-term assistance in moving to a different location. A support plan should consider and research the availability of these services from the outset.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>UNICEF works with organisations across the world to build capacity and capability and share good practice in the provision of victim support services. For more information, contact UNCIEF through www.unicef.org/protection</li>
</ul>',
      'post_excerpt' => 'Integrated services provided during investigation, prosecution and after-care',
      'group'        => 'victim',
      'menu_order'   => 8
    ),

    'child-protection-workforce' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Child Protection Workforce',
      'post_content' => '<h2>Capability 9 – Child Protection Workforce</h2>
<h4>Definition</h4>
<ul>
 	<li>A skilled, specialist statutory workforce that is trained, coordinated and available to provide support to CSEA victims.</li>
 	<li>The social service workforce is trained to support children during a law enforcement investigation and to assess their needs and any risk to them over and above the investigation.</li>
 	<li>Formal working procedures for CSEA investigations exist between all relevant stakeholders such as law enforcement, social services/children’s services and health services, and there is a clear understanding of roles and responsibilities.</li>
 	<li>Social workers work closely with, and provide safeguarding advice to, a range of organisations where the abuse of children may be identified or where children may disclose abuse – for example schools, hospitals, and youth centres.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>Specialist training for social workers ensures that CSEA victims are given appropriate and timely support to minimise harm, support them through any law enforcement investigation and legal proceedings, and aid recovery.</li>
 	<li>Effective joint working between social services/children’s services and law enforcement means that the needs and rights of the victim are prioritised during any investigation which ultimately benefits their recovery.</li>
 	<li>A workforce that is trained to a prescribed level of professional standards (international standards if no national standards exist) ensures the provision of a consistent and high-quality service to victims regardless of their location within a country.</li>
 	<li>An accountable and transparent statutory child protection workforce ensures the highest of standards are maintained and the public is aware of the level of service that should be delivered.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>Embedding social workers within a law enforcement unit to work alongside officers working on CSEA investigations will ensure that a child protection strategy is built in to every investigation to prioritise the needs and rights of the victim.</li>
 	<li>The provision of specialist CSEA training for all social workers during their qualification training will ensure that the crime is understood by all social workers.</li>
 	<li>Social workers/children’s services should have primary responsibility for ensuring that the provision of support across different providers is coordinated.</li>
 	<li>Staff working with CSEA victims and on CSEA investigations are given access to support and welfare services to ensure their wellbeing.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>The International Federation of Social Workers is a global organisation that shares best practice models and facilitates international cooperation. It has 116 member countries and more information and guidance can be found on its website at <a href="http://www.ifsw.org">www.ifsw.org</a>. More information can also be found at the Global Social Service Workforce Alliance (<a href="http://www.socialserviceworkforce.org">www.socialserviceworkforce.org</a>) which has a number of resources, including a competency framework for para-professional services, and the Marie Collins Foundation (<a href="http://www.mariecollinsfoundation.org.uk">www.mariecollinsfoundation.org.uk</a>)</li>
</ul>',
      'post_excerpt' => 'Trained, coordinated and available to provide victim support',
      'group'        => 'victim',
      'menu_order'   => 9
    ),

    'compensation-remedies-and-complaints-arrangements' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Compensation, remedies, and complaints arrangments',
      'post_content' => '<h2>Capability 10 – Compensation, Remedies and Complaints Arrangements</h2>
<h4>Definition</h4>
<ul>
 	<li>The provision of effective remedy and reparations for CSEA victims and their guardians/ caregivers. This includes:
<ul>
 	<li>Services to aid the recovery of CSEA victims including medical, psychological, social care, legal, housing, education/training services</li>
 	<li>Accessible, fair and transparent compensation arrangements</li>
 	<li>Accessible advocacy services, including support for self-advocacy</li>
 	<li>Independent complaints procedure</li>
</ul>
</li>
 	<li>Procedures are in place to ensure CSEA victims have the best possible opportunity to access the services available. This includes the provision of child-sensitive information and advice about the services.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>Social stigma, personal or family shame and fear often make it unacceptable or unthinkable for CSEA victims to recognize themselves as victims and publicly seek redress or speak about their trauma.</li>
 	<li>Often those responsible for offending against CSEA victims do so through exertion of power or control over their victims; suitable legal remedy and public reparation would help victims redress such imbalance.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>The provision of services and procedures is a well-established obligation under international law, enshrined in the core international human rights treaties, international standards and regional human rights mechanisms.</li>
 	<li>Both short and long-term services should be made available. In particular, psychological and therapeutic support should be provided both during and beyond childhood, as the consequences of CSEA can last into adulthood.</li>
 	<li>Services should take into account gender, age, level of maturity and the rights and needs of the child, avoiding unnecessary procedures and interviews, in order to prevent further trauma and to promote the physical and psychological recovery and social reintegration of victims.</li>
 	<li>Children who have been subjected to sexual abuse and/or exploitation and, especially girls who have become pregnant or children living with HIV/AIDS or other sexually transmitted infections as a result of the abuse, should receive age-appropriate medical advice and counselling and be provided with the requisite physical and mental health care and support.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>Information can be found within the United Nations’ Guidelines on Justice in Matters involving Child Victims and Witnesses of Crime. In addition, further information can be found within the United Nations’ Model Strategies and Practical Measures on the Elimination of Violence against Children in the Field of Crime Prevention and Criminal Justice, A/C.3/69/L.5, Part V – Offering effective protection to child victims of violence and the UN’s Safe and Child-Sensitive Counselling, Complaint and Reporting Mechanisms to Address Violence Against Children – <a href="http://www.srsg.violenceagainstchildren.org/page/849">www.srsg.violenceagainstchildren.org/page/849</a></li>
 	<li>The Third Optional Protocol to the UNCRC on a Communications Procedure sets out an international complaints procedure for child rights violations – <a href="http://www.ohchr.org/EN/ProfessionalInterest/Pages/OPICCRC.aspx">www.ohchr.org/EN/ProfessionalInterest/Pages/OPICCRC.aspx</a></li>
</ul>',
      'post_excerpt' => 'Accessible procedures',
      'group'        => 'victim',
      'menu_order'   => 10
    ),

    'child-helpline' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Child Helpline',
      'post_content' => '<h2>Capability 11 – Child Helpline</h2>
<h4>Definition</h4>
<ul>
 	<li>A support and intervention service for children and young people run by civil society organisations or government.</li>
 	<li>The services provided may range from supporting a child or young person who is unsure whether to report abuse, to providing direct assistance in removing a child from a dangerous situation.</li>
 	<li>Ideally, the service is confidential, anonymous and accessible free of charge, 24 hours per day, seven days a week and may be operated via telephone but also other means/technologies such as: text messaging, internet chat services/internet messaging, discussion forums, email and face-to-face meetings.</li>
 	<li>Child helplines operate in partnership with key referral services, working closely with educational facilities, hospitals, law enforcement, judicial services, shelters, and other child-related services.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>Children need to know that they are not alone. If they do not feel comfortable speaking with a family member, a friend or statutory services, children are reassured that they have direct access to an anonymous, confidential support service they can turn to.</li>
 	<li>Contacting a child helpline is often a child’s first engagement and entry point with child protection services and a positive experience can help them feel confident and empowered to access more services.</li>
 	<li>Children may wish to remain anonymous but still report abuse against themselves or others; such an approach will help countries gather intelligence and information on potential offences and act upon this where possible.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>In countries where a helpline does not currently exist, the first step is to identify the funding source and ownership of a helpline to ensure sustainability and direction.</li>
 	<li>Establish the type of service the helpline will provide, taking into account available resources and existing services – for example, listening, advice and support or referral point to relevant agency.</li>
 	<li>A formalised network of key referral agencies to work in partnership with each other needs to be established – obtaining single points of contact within key child protection bodies and law enforcement provides direct and easy access to specialist help and support.</li>
 	<li>All employees must be subject to pre-employment and on-going checks that assess their suitability to work with children and they should receive the necessary training and guidance to enable them to fulfil their role to a high and consistent standard. Employees should also receive the necessary welfare support when exposed to distressing cases.</li>
 	<li>Robust decision-making processes, based on risk, need to be developed and followed when prioritising and actioning cases reported to the helpline, in accordance with the law and any existing data-protection rules.</li>
 	<li>The helpline should be promoted to children and young people by signposting within schools and youth settings, including relevant online platforms.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>Child Helpline International aims to strengthen child protection systems across the globe, including working with local, regional and national stakeholders and partners to support the creation and consolidation of national free-of-charge child helplines worldwide. Members and partners are provided with vital opportunities to enhance their service through workshops, training and information-sharing. Further information can be found at <a href="http://www.childhelplineinternational.org">www.childhelplineinternational.org</a></li>
</ul>',
      'post_excerpt' => 'Victim reporting and support; referrals to services for ongoing assistance',
      'group'        => 'victim',
      'menu_order'   => 11
    ),

    ############

    'csea-hotline' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'CSEA Hotline',
      'post_content' => '<h2>Capability 12 – CSEA Hotline</h2>
<h4>Definition</h4>
<ul>
 	<li>A dedicated hotline to report internet material suspected to be illegal, including child sexual abuse material.</li>
 	<li>Once confirmed as child sexual abuse material, the hotline works in partnership with industry to ensure the content is removed from view from industry services as swiftly and effectively as possible, and that the case is referred by the hotline to the national law enforcement agency responsible for investigating CSEA cases for further investigation and victim identification.</li>
 	<li>The hotline can operate as part of the INHOPE international network of hotlines that work together to share information to eradicate child sexual abuse material from the internet wherever it may be found across the globe.</li>
 	<li>INHOPE’s common procedures for receiving and processing reports are followed and there is compliance with INHOPE’s set of best practices.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>A hotline or a reporting portal provides an accessible and secure platform for the reporting of suspected child sexual abuse material found on the Internet.</li>
 	<li>An effective hotline facilitates the efficient removal of child sexual abuse material from the Internet by the hosting service which reduces the availability of this material.</li>
 	<li>An effective hotline will reassure the public and industry that reported material, if found to be illegal, will be passed to the relevant law enforcement agency and/or Internet Service Provider (ISP) for further action.</li>
</ul>
<h4>Good Practice</h4>
<ul>
 	<li>To effectively combat child sexual abuse material, a country needs to introduce protocols according to its national situation. If starting from a zero baseline, a legislative review and any necessary amendments to existing legislation (or the drafting of new legislation) are essential prior to the implementation of a hotline.</li>
 	<li>Robust and standardised processes for receiving, prioritising, actioning and referring reports received via the hotline should be implemented. These should be formally agreed between the hotline and the law enforcement body and the hotline and ISPs where practical and points of contact should be established.</li>
 	<li>Any reports of child sexual abuse material hosted overseas should be referred to law enforcement in that country via Interpol if there is no hotline to liaise with.</li>
 	<li>The hotline or reporting mechanism should be promoted publicly.</li>
</ul>
<h4>More guidance and support</h4>
<ul>
 	<li>The INHOPE Foundation supports the development of new internet hotlines worldwide. This ensures that swift action can be taken in responding to reports of child sexual abuse material on the internet wherever the illegal material is found to be hosted. An online guide is available at GSMA/INHOPE. For those countries that already have a hotline, INHOPE also supports a hotline’s long-term development and education on the issue. Further information can be found on their website at <a href="http://www.inhope.org">www.inhope.org</a></li>
</ul>',
      'post_excerpt' => 'Mechanism for reporting online CSEA content; link to law enforcement and Internet service providers',
      'group'        => 'societal',
      'menu_order'   => 12
    ),

    'education-programme' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Education Programme',
      'post_content' => '<h2>Capability 13 – Education Programme</h2>
<h4>Definition</h4>
<ul>
 	<li>A national education programme to raise awareness of CSEA (both offline and online) – empowering children, young people, parents, guardians, caregivers and practitioners with information about CSEA; their rights to protection; where to find help and support, and report sexual exploitation and abuse.</li>
 	<li>The programme’s messages should incorporate the latest trends and developments and be consistently delivered across the country. They should be designed sensitively, considering the potential impact of the subject matter on the audience.</li>
 	<li>A range of engaging, age-appropriate resources should be provided including films, lesson plans and online learning resources.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>An education programme provides an opportunity to discuss CSEA in schools, other formal settings and community settings to help raise awareness of and to prevent the crime; it also provides children, young people, parents, guardians, caregivers and practitioners with information about places to go for advice and support, and knowledge of where to report abuse.</li>
 	<li>The programme will help children and young people to better understand the risks of CSEA and the factors that could make them vulnerable to becoming a victim, also providing them and their parents/guardians/caregivers with information that will empower them to protect themselves from offenders.</li>
 	<li>The programme will also help practitioners working with children to spot indicators of CSEA and enable them to better support victims and their families in accessing support and reporting cases.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>The programme should be developed at a national level to ensure consistency in messaging but delivered to all local areas. Ideally, the programme should be incorporated into the national curriculum to ensure full national rollout. It could be incorporated into related programmes such as sex and relationships.</li>
 	<li>National coordination of educational resources will enable them to be updated on an ongoing basis to keep the messaging contemporary and reflective of current risks.</li>
 	<li>Resources need to be put into context within a particular country or region to ensure they address local CSEA issues and can overcome any local barriers to discussion on the topic. Children should be engaged in the development of resources.</li>
 	<li>An online portal can be developed to provide easy access to advice, support and resources for practitioners working with children, the children themselves and the wider public. This can be categorised by age to ensure the messaging is appropriate and accessible.</li>
 	<li>Media opportunities, initiatives with industry and international initiatives such as Safer Internet Day should be maximised to enhance the dissemination of messages and resources.</li>
 	<li>Training should be provided for education professionals to ensure they can deliver messages sensitively.</li>
 	<li>Resources or programmes should signpost clear reporting processes for children to get help. Professionals delivering the programme should be aware of the possibility of disclosures of sexual abuse and/or exploitation following sessions and know how to respond.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>Existing best practice resources can be utilised from various international stakeholders, but these need to be contextualised to ensure they are relevant for each country.</li>
 	<li>Insafe is a European network of Awareness Centres promoting safer and better usage of the internet, empowering people – particularly children and young people – to use the internet, mobile phones and other online technologies positively, safely and effectively. More information about the education work undertaken by these Awareness Centres can be found at <a href="http://www.betterinternetforkids.eu">www.betterinternetforkids.eu</a></li>
 	<li>UNICEF supports governments and civil society organisations across the world in the provision of information and education to prevent child sexual abuse and exploitation. More information can be found at <a href="http://www.unicef.org/protection">www.unicef.org/protection</a></li>
</ul>',
      'post_excerpt' => 'For children/young people; parents/carers; teachers; practitioners; faith representatives',
      'group'        => 'societal',
      'menu_order'   => 13
    ),

    'child-participation' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Child Participation',
      'post_content' => '<h2>Capability 14 – Child Participation</h2>
<h4>Definition</h4>
<ul>
 	<li>Children and young people are encouraged and enabled to give their ideas and influence the development of CSEA-related policy and practices.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>The requirement to ensure the ethical and effective involvement of young people flows from a country’s international legal obligations under the UN Convention on the Rights of the Child (UNCRC). All parties to the Convention have committed to ensuring that children’s views will be sought and given due consideration in all matters affecting them, in accordance with the children’s age and maturity (see Article 12 of the UNCRC). This acknowledges and respects children’s dignity and agency.</li>
 	<li>Advantages of ensuring the ethical and effective participation of young people include: increased buy-in from children and young people which enhances the credibility of services and decisionmaking; new suggestions for innovation and reform based on the experience of services users; enhanced responsiveness of services as they become more user aware, and a built-in process of feedback that can contribute to service improvement on an ongoing basis.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>The UNCRC provides detailed guidance on the principles that should underpin children and young people’s participation in general. One of the most basic requirements is that a country must avoid making token approaches that limit children’s expression of views or allow children to be heard but fail to give their views due weight. For participation to be effective and meaningful, it needs to be understood as a process, not as an individual one-off event.</li>
 	<li>There are a number of main characteristics that all processes in which children and young people participate should exhibit, namely, they should be: transparent and informative; voluntary; respectful; relevant; child-friendly; inclusive; supported by training; safe and sensitive to risk, and accountable.</li>
 	<li>Often an informal approach to consulting and involving children and young people is more appropriate than a structured dialogue, at least in the first instance.</li>
 	<li>Be clear about how exactly young people’s views will be incorporated into the decision-making process to ensure that they have accurate expectations of their role and an understanding of the process.</li>
 	<li>The need for a careful and gradual approach is especially important with vulnerable children or children who are being asked to share their views on a difficult and personal set of issues. Victims of abuse can be harder to engage, therefore, it could be advantageous to collaborate with organisations that are already known to and are trusted by the victim as the groups can act as effective intermediaries or facilitators.</li>
 	<li>Providing feedback to children and young people is essential; it also represents good practice in terms of evaluation.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>The UNCRC has provided detailed guidance on the principles that should underpin children and young people’s participation in general, In particular the UN Committee’s General Comment No.12 (2009) on ‘The right of the child to be heard’ is a useful source of information – <a href="http://www2.ohchr.org/English/bodies/crc/docs/AdvanceVersions/CRC-C-GC-12.pdf">www2.ohchr.org/English/bodies/crc/docs/AdvanceVersions/CRC-C-GC-12.pdf</a></li>
 	<li>In addition, the Council of Europe has produced a Child Participation Assessment Tool which provides indicators for measuring progress in promoting the right of children and young people to participate in matters of concern to them: <a href="http://www.coe.int/t/dg3/children/participation/Child_participation_AssementTool_en.pdf">http://www.coe.int/t/dg3/children/participation/Child_participation_AssementTool_en.pdf</a></li>
 	<li>The Child Rights International Network (CRIN) is a global research, policy and advocacy organisation. It provides extensive information and guidance on child rights at its website – <a href="http://www.crin.org">www.crin.org</a></li>
</ul>',
      'post_excerpt' => 'For children/young people; parents/carers; teachers; practitioners; faith representatives',
      'group'        => 'societal',
      'menu_order'   => 14
    ),

    'offender-support-systems' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Offender Support Systems',
      'post_content' => '<h2>Capability 15 – Offender Support Systems</h2>
<h4>Definition</h4>
<ul>
 	<li>Support systems are in place for people with a sexual interest in children to prevent them from acting on their interest and sexually abusing children, and to prevent them from accessing child sexual abuse material on the Internet before they commit a crime.</li>
 	<li>Support systems are in place for convicted child sex offenders as part of their rehabilitation to prevent reoffending. This includes the provision of sex offender treatment focused on learning specialised strategies for stopping abusive behaviour, being accountable and taking responsibility for harm done. Treatment does not offer amnesty or excuse abusive acts, nor is it intended to punish or humiliate participants. A central focus of treatment is to help the offender develop strengths while managing risk.</li>
 	<li>Support systems are in place for young people displaying sexually harmful behaviour.</li>
 	<li>Support services are available to the family and friends of child sex offenders.</li>
 	<li>Support systems are provided by a range of organisations from both statutory agencies and non-governmental organisations.</li>
 	<li>Preventative communications are published to deter offenders and potential offenders.</li>
 	<li>Professionals providing support have the appropriate knowledge, skills and understanding to provide an effective service.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>Behaviour indicative of someone on the pathway to committing a sexual offence against a child must be addressed before it culminates in abuse.</li>
 	<li>For some individuals who have already committed a sexual offence against a child, treatment may significantly reduce the risk of further offending.</li>
 	<li>Law enforcement, prisons and the judicial system would be overstretched if work is solely focused on pursuing offenders and not preventing their offences in the first place.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>Treatment programmes should provide participants with practical measures to prevent their offending/reoffending.</li>
 	<li>A freely available, anonymous helpline or service should be established so that people who are concerned about their behaviour can contact specialist professionals for advice to address their concerns before they escalate into offending/reoffending.</li>
 	<li>A service should also be available to provide specialist advice and support to family and friends.</li>
 	<li>These services should be promoted to the public and should emphasise the primary prevention aspect as well as the confidentiality guaranteed to participants.</li>
 	<li>In addition to accessing a treatment programme, any relevant medical and psychological support required should also be made available.</li>
 	<li>Medical professionals should receive specialist awareness-training to enable them to appropriately deal with individuals who approach them with concerns around inappropriate sexual feelings and behaviours towards children.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>There are examples of best practice programmes across the world that can be used as a basis for the development of programmes in countries that do not already have anything in place. Examples include:
<ul>
 	<li><a href="http://www.dont-offend.org">www.dont-offend.org</a> – German based NGO that offers free and confidential treatment for people seeking therapeutic help with their sexual preference for children.</li>
 	<li><a href="http://www.lucyfaithful.org.uk">www.lucyfaithful.org.uk</a> – United Kingdom based NGO that provides specialist services to adult male and female sexual abusers, as well as young people with inappropriate sexual behaviours</li>
</ul>
</li>
</ul>',
      'post_excerpt' => 'Medical, psychological, self-help, awareness',
      'group'        => 'societal',
      'menu_order'   => 15
    ),

    ############

    'takedown-proceedures' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Takedown Proceedures',
      'post_content' => '<h2>Capability 16 – Takedown Procedures</h2>
<h4>Definition</h4>
<ul>
 	<li>Procedures to enable the timely decommissioning/removal of child sexual abuse material when a company confirms its presence on its service. Reports can be made by customers, members of the public, law enforcement agencies or hotline organisations.</li>
 	<li>When child sexual abuse material is hosted in another country but has not been removed at source, Internet Service Providers use available technical means such as blocking or filtering to prevent access to that material.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>Allowing child sexual abuse material to remain readily discoverable online will increase offending rates, as it will give others further opportunity to view the illegal material and each and every viewing is a violation of the law.</li>
 	<li>The child in the image is re-victimised every time the material is viewed.</li>
 	<li>Removing the material by the operators of online services reduces the volume of child sexual abuse material on the Internet.</li>
 	<li>Blocking access to child sexual abuse material hosted out of country will disrupt offenders’ access to it, but it is not a long-term solution for the eradication of the material from the Internet. It therefore must be combined with the removal at source. Such an approach ensures that every country is taking responsibility for the removal of this content when it is found to be hosted in-country.</li>
 	<li>Statutory regulation is one but not the only mechanism to tackle child sexual abuse material on the Internet. Self-regulation can achieve similar outcomes when ISPs and others in industry cooperate to remove child sexual abuse material from their services and prevent its further dissemination.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>A set of internationally agreed best practices from INHOPE should be followed to ensure robust processes are in place for the timely removal of content or to block access to child sexual abuse material.</li>
 	<li>A robust IT infrastructure must be in place to enable the secure receipt of information by industry providers. Where possible, the processes should be automated to reduce the number of individuals exposed to the material.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>The INHOPE international network of hotlines can offer guidance and support to companies to help them prevent access, or the facilitation of access, to child sexual abuse material (<a href="http://www.inhope.org">www.inhope.org</a>) – including a guide to Notice and Takedown procedures that was produced in partnership with the GSMA Mobile Alliance. In addition, the United Kingdom’s hotline – the Internet Watch Foundation – offers advice and guidance (<a href="http://www.iwf.org.uk">www.iwf.org.uk</a>).</li>
 	<li>The Technology Coalition encourages the development of technology solutions that disrupt the ability to use the Internet to sexually exploit children and to distribute child sexual abuse material. It also seeks and creates platforms for collaboration across sectors and to share best practice. (<a href="http://www.technologycoalition.org">www.technologycoalition.org</a>)</li>
</ul>',
      'post_excerpt' => 'Local removal and blocking of online CSEA content',
      'group'        => 'industry',
      'menu_order'   => 16
    ),

    'csea-reporting' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'CSEA Reporting',
      'post_content' => '<h2>Capability 17 – CSEA Reporting</h2>
<h4>Definition</h4>
Industry puts in place processes and allocates resources to enable the timely identification and reporting to authorities of online child sexual exploitation and abuse.

The companies’ staff are equipped with the knowledge and skills required to respond effectively to incidents of online child sexual exploitation and abuse.

A health and wellness programme is in place to help protect all staff who come into contact with child sexual exploitation material.

Statutory protections are in place to allow industry to fully and effectively report online child sexual exploitation and abuse, including the transmission of content, to law enforcement or another designated agency.
<h4>Why is it needed?</h4>
<ul>
 	<li>CSEA remains one of the most under-reported crimes with the vast majority taking place behind closed doors. The Internet offers a rare window into these crimes. In addition to protecting their own customers and services, actions by industry can support the identification of victims and offenders who otherwise could potentially never be identified.</li>
 	<li>Industry reporting enables companies to provide safe platforms and services for children and young people and helps to deter offenders.</li>
 	<li>Robust programs and procedures for the handling of illegal material help to protect staff from unnecessary exposure that could impact upon their health and wellness; and decrease the revictimization of the victim(s) depicted in the material.</li>
 	<li>Robust programs and procedures provide companies with the ability to prioritise and escalate cases as appropriate and securely handle illegal material.</li>
 	<li>Statutory protections provide companies with the authority and confidence to process this material.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>Sufficient resources should be allocated to ensure an efficient and effective response to cases of online child sexual exploitation and abuse.</li>
 	<li>All technology company staff that could be in a position to come into contact with incidents of child sexual exploitation and abuse should agree to participate in this work voluntarily; have the required knowledge and skills; and be appropriately vetted, trained and supported.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>There are a number of leading international organisations and initiatives that companies can participate in to access good practice, advice and guidance to support the development of their reporting processes and procedures. These include:
<ul>
 	<li>The United States National Center for Missing and Exploited Children (<a href="http://www.missingkids.org">www.missingkids.org</a>)</li>
 	<li>The Technology Coalition (<a href="http://www.technologycoalition.org">www.technologycoalition.org</a>)</li>
</ul>
</li>
</ul>',
      'post_excerpt' => 'Statutory protections that would allow industry to fully and effectively report CSEA, including the transmission of content, to law enforcement or another designated agency',
      'group'        => 'industry',
      'menu_order'   => 17
    ),

    'innovative-solution-development' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Innovative Solution Development',
      'post_content' => '<h2>Capability 18 – Innovative Solution Development</h2>
<h4>Definition</h4>
<ul>
 	<li>The development of innovative technological solutions that enhance existing approaches to preventing and tackling online CSEA or enable the development of new approaches.</li>
 	<li>The proactive sharing by industry of its unique knowledge and skillset with appropriate stakeholders to enhance collective efforts to reduce online CSEA.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>Technology companies have the expertise to predict technological developments and identify new and emerging online trends and patterns that could be exploited by child sex offenders. Considered with other stakeholders’ knowledge of offender and victim behaviours, such insights could enhance the development of new approaches and allow law enforcement to safeguard and protect more victims and potential victims.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>A number of the leading international technology companies have invested heavily in recent years in developing new and innovative tools and techniques to prevent and tackle online CSEA on their platforms. An example: companies have developed sophisticated tools and techniques to prevent offenders from accessing child sexual abuse material on the open Internet, leading to a global reduction in the number of people accessing this illegal material through search engines, webmail and social media platforms. Companies are encouraged to share this and other best practices as widely as possible.</li>
 	<li>Making tools available for free to other technology companies will enable more service providers to have efficient techniques in place to identify and remove child sexual abuse material from their services and prevent online sexual exploitation. An example is Microsoft’s free PhotoDNA technology that enables users to identify known images of child sexual abuse on their services through hash comparison and matching.</li>
 	<li>There are additional positive actions that individual companies can take to help keep their platform/ service as safe as possible for children, including: signposting support services; signposting local authorities to report inappropriate sexual contact or material online; specifying terms and conditions or codes of conduct that explicitly forbid child sexual abuse content; developing and implementing robust notice and takedown processes for child sexual abuse material, and blocking access to child sexual abuse material hosted that has not been removed at source.</li>
 	<li>Harmonizing policies between companies regarding online child sexual exploitation and abuse, and sharing good practices and lessons learnt, is a vital part of enabling more online services to prevent and disrupt child sexual offending on their services.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>There are a number of leading international organisations and initiatives that companies can participate in to access best practice advice and support and contribute to the development of innovative technical solutions. These include:
<ul>
 	<li>The Technology Coalition encourages the development of technology solutions that disrupt the ability to use the Internet to sexually exploit children or and distribute child sexual abuse material. It also seeks and creates platforms for collaboration across sectors. (<a href="http://www.technologycoalition.org">www.technologycoalition.org</a>)</li>
 	<li>Thorn partners across the technology industry, government and NGOs to leverage technology to combat predatory behaviour, rescue victims, and protect vulnerable children. (<a href="http://www.wearethorn.org">www.wearethorn.org</a>)</li>
 	<li>Other examples of mechanisms for international industry cooperation include the GSMA Mobile Alliance against Child Sexual Abuse Content, the ICT Coalition for Child Online Protection, and the Financial Coalition Against Child Pornography.</li>
 	<li>WePROTECT Global Alliance to End Child Sexual Exploitation Online – an international initiative to enhance cooperation in tackling online CSEA – has held a number of events for the technology industry to come together to explore the creation of new and innovative technological solutions and the sharing of best practice. Companies are encouraged to participate in future events.</li>
</ul>
</li>
</ul>',
      'post_excerpt' => 'Industry engagement to help address local CSEA issues',
      'group'        => 'industry',
      'menu_order'   => 18
    ),

    'corporate-social-responsibility' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Corporate Social Responsibility',
      'post_content' => '<h2>Capability 19 – Corporate Social Responsibility</h2>
<h4>Definition</h4>
<ul>
 	<li>Companies (national and international) ensure child safety issues are paramount in the development and delivery of products and services, giving particular attention to putting systems in place to prevent violations of children’s safety – including sexual abuse and exploitation.</li>
 	<li>Child safety considerations are integrated into appropriate corporate policies, procedures and processes to ensure that companies take adequate measures to identify, prevent and mitigate against CSEA.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>Technology companies can help prevent the spread of online CSEA which, in turn, can help to reduce the number of victims.</li>
 	<li>Technology companies can help identify online CSEA, which can increase the number of victims safeguarded and protected and offenders located and apprehended.</li>
 	<li>Where national legislation is not yet at international standards, companies still have an opportunity and social responsibility to bring on a voluntary basis their business practices in line with those standards.</li>
 	<li>Other industry sectors such as the travel and tourism industry can assist in the identification of CSEA which can, in turn, help to increase the number of victims safeguarded and protected and offenders located.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>Companies whose services enable content to be shared and/or users to interact have in place a reporting mechanism to provide customers and the public with the ability to report potential incidences of CSEA. This should be promoted in prominent online and offline spaces.</li>
 	<li>A specific individual/team is designated with responsibility for processing CSEA reports and the company invests in raising the profile of these crimes across the company.</li>
 	<li>A child protection/safeguarding policy is in place that enables the integration of specific child safety risks – including sexual abuse and exploitation – into company-wide policy.</li>
 	<li>Terms of use and codes of conduct are established that explicitly forbid customers to use company services/platform for the purposes of CSEA or the production, distribution or viewing of child sexual abuse material.</li>
 	<li>Where relevant, a company puts in place robust processes for the decommissioning or takedown of online child sexual abuse material.</li>
 	<li>Relevant technical measures are provided to users such as parental control tools, block/allow lists, and content filtering.</li>
 	<li>Age-appropriate and relevant educational and awareness-raising information is developed to enable child users and their parents to make informed decisions as empowered and responsible digital citizens about their online interactions. Companies have a role to play in helping to develop, promote and disseminate responsible messages which will also act as a deterrent to offenders.</li>
 	<li>Companies might also provide capacity building support to countries and other companies. To maximise its effectiveness, the provision of this support could be coordinated with other organisations already offering support and/or through the Global Partnership and its associated Fund to End Violence Against Children that supports capacity building programmes across the world.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>The International Telecommunication Union (ITU), UNICEF and partners of the Child Online Protection Initiative, provide guidelines for the ICT industry to strengthen online child protection: <a href="http://www.itu.int/en/cop/Pages/guidelines.aspx">http://www.itu.int/en/cop/Pages/guidelines.aspx</a></li>
 	<li>UNICEF has produced several tools for companies within the ICT sector, including a specific Child Online Safety Assessment tool: <a href="http://www.unicef.org/csr/toolsforcompanies.htm">http://www.unicef.org/csr/toolsforcompanies.htm</a></li>
 	<li>More information about the Global Partnership to End Violence Against Children can be found here – <a href="http://www.end-violence.org">www.end-violence.org</a></li>
</ul>',
      'post_excerpt' => 'Effective child-focused programme',
      'group'        => 'industry',
      'menu_order'   => 19
    ),

    ############

    'ethical-and-informed-media-reporting' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Ethical and Informed Media Reporting',
      'post_content' => '<h2>Capability 20 – Ethical and Informed Media Reporting</h2>
<h4>Definition</h4>
<ul>
 	<li>Media coverage of CSEA is ethical, informed and balanced, and reported in a sensitive manner with victims’ dignity and rights respected at all times. This is best approached by journalists and editors in partnership with all those involved in preventing and tackling CSEA.</li>
 	<li>When interviewing and reporting on CSEA victims, special attention is paid to their right to privacy and confidentiality. Media reporting should not stigmatise victims or undermine their safety or anonymity and avoids categorisations or descriptions that expose a victim to negative reprisals through unethical or unconsidered reporting.</li>
 	<li>The best interests of a victim, both ethically and within their rights, are protected over any other consideration, including over advocacy for children’s issues and the promotion of child rights.</li>
 	<li>The media has a key role in overcoming the myths and stereotypes that surround CSEA.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>The media is essential in placing the problem of CSEA in the minds of the public and on the political agenda. The best outcomes for victims and society as a whole will come from ethical, balanced and informed media reporting.</li>
 	<li>Reporting on CSEA must be handled sensitively and the welfare of the victim needs to be of paramount concern.</li>
 	<li>Investigations or legal proceedings could be prejudiced if sensitive information is revealed through unconsidered, inaccurate or unethical reporting.</li>
 	<li>This is not about influencing the media to report on CSEA in a way that supports any political or policy agenda. It is about ensuring that the best interests of the victim are considered and law enforcement investigations are not prejudiced in any reporting of cases, and that unhelpful myths about CSEA that prejudice against victims are not perpetuated.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>Reporting standards for CSEA can be regulated at four different levels: through Codes of Conduct which professional journalists adhere to, Guidelines which media organisations follow, Structures of Regulation where relevant responsible bodies oversee media organisations reporting standards and Legislation to underpin the rights of victims.</li>
 	<li>Details which could identify or undermine the safety of a child victim or cause the collapse of criminal proceedings should never be published.</li>
 	<li>When interviewing or photographing a child victim the consent of an appropriate adult and the child victim should be sought.</li>
 	<li>The anonymity of a child victim should be protected in law before, during and after legal proceedings.</li>
 	<li>Governments and NGOs should support efforts by the media to raise CSEA awareness and provide a directory of reliable sources on children’s rights to media channels for educated comment.</li>
 	<li>Productive and open lines of communication should exist between media editors, reporters and law enforcement to ensure accurate, timely and ethical reporting.</li>
 	<li>Information on the ethical and informed media reporting of CSEA should be included within the professional accreditation of journalists.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>UNICEF has produced guidelines – ‘The Media and Children’s Rights’ – designed to strengthen journalists’ understanding of children’s rights and to suggest how the issue can generate news stories and features for print and broadcast media. For more information visit: <a href="http://www.unicef.org">www.unicef.org</a></li>
 	<li>The International Federation of Journalists has launched a global ‘Ethical Journalism Initiative’ looking at reporting standards within professional bodies worldwide. For more information visit: <a href="http://www.ethicaljournalisminitiative.org">www.ethicaljournalisminitiative.org</a></li>
</ul>',
      'post_excerpt' => 'Enable awareness and accurate understanding of problem',
      'group'        => 'media-and-communications',
      'menu_order'   => 20
    ),

    'universal-technology' => array(
      'post_type'    => 'mnr',
      'post_title'   => 'Universal Technology',
      'post_content' => '<h2>Capability 21 – Universal Terminology</h2>
<h4>Definition</h4>
<ul>
 	<li>The use of universally-agreed terminology relating to CSEA to enable information and ideas to be communicated rapidly and legibly amongst all stakeholders.</li>
</ul>
<h4>Why is it needed?</h4>
<ul>
 	<li>The use of universally-agreed terminology will ensure consistency of understanding, context and response across all stakeholders.</li>
 	<li>Inconsistent use of terminology can lead to differing responses, legislation and understanding on the same issue.</li>
 	<li>The absence of international agreement on CSEA-related terminology definition has impacted the global fight to eradicate the crime: levels of protection afforded to children at the national level are inconsistent; data collection and identification of different methods of sexual exploitation and abuse suffer from inaccuracy and imprecision; communication of information between international stakeholders can be misunderstood and advocacy work is undermined by confusion in the use of language and terms.</li>
 	<li>The ongoing debate over the term ‘child pornography’ is a prime example, the term is rejected by many law enforcement agencies and the international child protection community on the basis that it is not victim-centred language and can inadvertently legitimise child sexual abuse material by using the term ‘pornography’.</li>
 	<li>In the context of international/cross-border CSEA, the difficulties of not having universally agreed terminology are magnified. This can impact upon investigations and prosecutions when the same terms are used to refer to different actions/crimes, creating misunderstanding about the situation.</li>
</ul>
<h4>Good practice</h4>
<ul>
 	<li>The ‘Interagency Terminology and Semantics Project’ began in September 2014 at the initiative of the non-governmental organisation ECPAT International. The project’s Working Group on Sexual Exploitation of Children had 18 major stakeholder participants in the field of child protection and conducted research and analysis to produce a set of global terminology guidelines. These were endorsed by the group of organisations and launched in June 2016. They are known as the ‘Luxembourg Guidelines’.</li>
 	<li>The Luxembourg Guidelines are available in English, French and Spanish. The multi-lingual approach is to ensure that the terminology accurately reflects the nuances of each language and are not mere literal translations of the English text.</li>
 	<li>The guidelines are available to all major child protection agencies and organisations around the world, as well as lawmakers and media to offer practical guidance on navigating the complex lexicon of CSEA terms commonly used.</li>
</ul>
<h4>More Guidance and Support</h4>
<ul>
 	<li>Further information can be found at <a href="http://www.luxembourgguidelines.org">www.luxembourgguidelines.org</a> and includes a list of the organisations that participated in the Working Group to produce the Guidelines.</li>
</ul>',
      'post_excerpt' => 'Guidelines and application',
      'group'        => 'media-and-communications',
      'menu_order'   => 21
    ),

    /**
     * Board members
     */

    'ernie-allen' => [
      'post_type'    => 'board',
      'post_title'   => 'Ernie Allen',
      'post_content' => '<p>Chair, Former President and CEO of the National Centre for Missing and Exploited Children (NCMEC) and the International Centre for Missing and Exploited Children (ICMEC)</p>',
      'menu_order'   => 0,
      'thumbnail'    => 'ernie-allen.png'
    ],

    'baroness-joanna-shields' => [
      'post_type'    => 'board',
      'post_title'   => 'Baroness Joana Shields OBE',
      'post_content' => '<p>UK Internet Safety and Security Minister<br>Founded WEPROTECT in 2014</p>',
      'menu_order'   => 1,
      'thumbnail'    => 'baroness-joanna-shields.png'
    ],

    'veronica-donoso' => [
      'post_type'    => 'board',
      'post_title'   => 'Verónica Donoso',
      'post_content' => '<p>EXECUTIVE DIRECTOR, INHOPE</p>',
      'menu_order'   => 2,
      'thumbnail'    => 'veronica-donoso.png'
    ],

    'maud-de-boer-buquicchio' => [
      'post_type'    => 'board',
      'post_title'   => 'Maud de Boer-Buquicchio',
      'post_content' => '<p>UN Special Rapporteur on the Sale of Children, Child Prostitution and Child Pornography</p>',
      'menu_order'   => 3,
      'thumbnail'    => 'maud-de-boer-buquicchio.jpg'
    ],

    'jacqueline-f-beauchere' => [
      'post_type'    => 'board',
      'post_title'   => 'Jacqueline F. Beauchere',
      'post_content' => '<p>Chief Online Safety Officer, Microsoft</p>',
      'menu_order'   => 4,
      'thumbnail'    => 'jacqueline-f-beauchere.jpg'
    ],

    'antigone-davis' => [
      'post_type'    => 'board',
      'post_title'   => 'Antigone Davis',
      'post_content' => '<p>Head of Global Safety, Facebook</p>',
      'menu_order'   => 5,
      'thumbnail'    => 'antigone-davis.jpg'
    ],

    'johnny-gwynne' => [
      'post_type'    => 'board',
      'post_title'   => 'Johnny Gwynne',
      'post_content' => '<p>Director, Child Exploitation and Online Protection (CEOP) Command, United Kingdom National Crime Agency</p>',
      'menu_order'   => 6,
      'thumbnail'    => 'johnny-gwynne.jpg'
    ],

    'susie-hargreaves' => [
      'post_type'    => 'board',
      'post_title'   => 'Susie Hargreaves OBE',
      'post_content' => '<p>CEO, Internet Watch Foundation</p>',
      'menu_order'   => 7,
      'thumbnail'    => 'susie-hargreaves.png'
    ],

    'susan-molinari' => [
      'post_type'    => 'board',
      'post_title'   => 'Susan Molinari',
      'post_content' => '<p>Vice President, Public Policy, Google</p>',
      'menu_order'   => 8,
      'thumbnail'    => 'susan-molinari.jpg'
    ],

    'mick-moran' => [
      'post_type'    => 'board',
      'post_title'   => 'Mick Moran',
      'post_content' => '<p>Assistant Director Vulnerable Communities, INTERPOL</p>',
      'menu_order'   => 9,
      'thumbnail'    => 'mick-moran.jpg'
    ],

    'cornelius-williams' => [
      'post_type'    => 'board',
      'post_title'   => 'Cornelius Williams',
      'post_content' => '<p>Associate Director, Child Protection, Programme Division, UNICEF</p>',
      'menu_order'   => 10,
      'thumbnail'    => 'cornelius-williams.png'
    ],

    'dorothy-rozga' => [
      'post_type'    => 'board',
      'post_title'   => 'Dorothy Rozga',
      'post_content' => '<p>Executive Director, ECPAT INTERNATIONAL</p>',
      'menu_order'   => 11,
      'thumbnail'    => 'dorothy-rozga.jpg'
    ],

    'major-general-dr-nasser-salem-lakhrebani-al-nuaimi' => [
      'post_type'    => 'board',
      'post_title'   => 'Major General/Dr. Nasser Salem Lakhrebani Al Nuaimi',
      'post_content' => '<p>CHAIR OF VIRTUAL GLOBAL TASKFORCE, SECRETARY GENERAL OF THE OFFICE OF HH THE MINISTER OF INTERIOR, UAE</p>',
      'menu_order'   => 12
    ],

    'steve-grocki' => [
      'post_type'    => 'board',
      'post_title'   => 'Steve Grocki',
      'post_content' => '<p>Chief, Child Exploitation and Obscenity Section, United States Department of Justice</p>',
      'menu_order'   => 13,
      'thumbnail'    => 'steve-grocki.png'
    ],
  ];

  public static function _create_menu( $items = [], $menu_id = 0, $parent_id = 0 ) {
    foreach ( $items as $key => $val ) {
      $array = [];
      if ( strpos( $key, 'category_' ) !== false ) {
        $category = get_category_by_slug( substr( $key, 9 ) );
        if ( $category ) {
          $array = [
            'menu-item-object'    => 'category',
            'menu-item-object-id' => $category->term_id,
            'menu-item-type'      => 'taxonomy',
            'menu-item-status'    => 'publish',
            'menu-item-parent-id' => $parent_id
          ];
        }
      } elseif ( strpos( $key, 'link_' ) !== false ) {
        $name  = substr( $key, 5 );
        $array = [
          'menu-item-type'      => 'custom',
          'menu-item-url'       => 'http://example.com/',
          'menu-item-class'     => 'fa fa-' . $name . '-offical',
          'menu-item-title'     => ucfirst( $name ),
          'menu-item-status'    => 'publish',
          'menu-item-parent-id' => $parent_id
        ];
      } else {
        $post = get_posts( [
          'name'        => $key,
          'post_type'   => 'page',
          'post_status' => 'publish',
          'numberposts' => 1
        ] );
        if ( count( $post ) ) {
          $array = [
            'menu-item-object'    => 'page',
            'menu-item-object-id' => $post[0]->ID,
            'menu-item-type'      => 'post_type',
            'menu-item-status'    => 'publish',
            'menu-item-parent-id' => $parent_id
          ];
        }
      }

      if ( count( $array ) ) {
        $item_id = wp_update_nav_menu_item( $menu_id, 0, $array );

        if ( is_array( $val ) ) {
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
    if ( count( self::$forms ) ) {
      $i = 1;
      foreach ( self::$forms as $title => $name ) {
        $path = realpath( ABSPATH . '../data/forms' ) . '/' . $name . '.php';
        if ( file_exists( $path ) ) {
          include $path;
          if ( isset( $array ) ) {

            // Post
            if ( $i == 1 ) {
              $post = get_posts( [
                'name'        => 'contact-form-1',
                'post_type'   => 'wpcf7_contact_form',
                'post_status' => 'publish',
                'numberposts' => 1
              ] );
              if ( $post ) {
                $id = wp_update_post( [
                  'ID'           => $post[0]->ID,
                  'post_title'   => $title,
                  'post_content' => '',//$contents
                ] );
              }
            } else {
              $id = wp_insert_post( [
                'post_name'    => 'contact-form-' . $i,
                'post_type'    => 'wpcf7_contact_form',
                'post_title'   => $title,
                'post_status'  => 'publish',
                'post_content' => '',//$contents
              ] );
            }

            if ( ! $id ) {
              return false;
            } // Meta
            else {
              //var_dump( "POST: " . $id );
              foreach ( $array as $key => $value ) {
                update_post_meta( $id, $key, $value );
              }
            }
          }
        }
        $i ++;
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
    if ( count( self::$categories ) ) {
      foreach ( self::$categories as $name => $id ) {
        $category_id = wp_create_category( $name );
        if ( ! $category_id ) {
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
    if ( count( self::$menus ) ) {
      $locations = [];
      foreach ( self::$menus as $name => $items ) {
        //wp_delete_nav_menu($name);
        $menu_id = wp_create_nav_menu( $name );
        if ( ! $menu_id ) {
          return false;
        }
        self::_create_menu( $items, $menu_id );

        $term                     = get_term_by( 'name', $name, 'nav_menu' );
        $locations[ $term->slug ] = $term->term_id;
      }
      set_theme_mod( 'nav_menu_locations', $locations );
    }

    return true;
  }

  /**
   * Create memebers
   *
   * @return bool
   */
  public static function create_members() {
    $path = ABSPATH . "../data/WPGAM.xls";
    if ( ! file_exists( $path ) ) {
      Wep_Plugin::$message['alert'][] = 'Missing asset: ' . basename( $path );

      // Don't fail just because assets are missing
      return true;
    }

    require WEP_VENDOR . '/phpoffice/phpexcel/Classes/PHPExcel.php';
    $countries = require WEP_VENDOR . '/umpirsky/country-list/data/en_GB/country.php';

    $objReader = PHPExcel_IOFactory::createReader( 'Excel5' );
    $objReader->setReadDataOnly( true );
    $objPHPExcel = $objReader->load( $path );

    /**
     * Pull country entries from XLS
     */
    $objWorksheet = $objPHPExcel->getSheet( 0 );

    $highestRow         = $objWorksheet->getHighestRow();
    $highestColumn      = $objWorksheet->getHighestColumn();
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString( $highestColumn );

    $columns = $results = [];
    for ( $row = 1; $row <= $highestRow; ++ $row ) {
      for ( $col = 0; $col <= $highestColumnIndex; ++ $col ) {
        if ( $row == 1 ) {
          $columns[ $col ] = trim( $objWorksheet->getCellByColumnAndRow( $col, $row )->getValue() );
        } else {
          $results[ $row ][ $columns[ $col ] ] = trim( $objWorksheet->getCellByColumnAndRow( $col, $row )->getValue() );
        }
      }
    }

    $fields = [
      'Country'           => [
        'country',
        '597069491a1af'
      ],
      'Sign up'           => [
        'sign_up',
        '59706f6101217'
      ],
      'Engagement update' => [
        'engagement',
        '597070b8f57f1'
      ],
      'Actions'           => [
        'actions',
        '597070cd13e15'
      ],
      'Criticality'       => [
        'criticality',
        '597070892d24e'
      ],
      'Official contact'  => [
        'official_contact',
        '5970700ba285d'
      ],
      'Email'             => [
        'official_contact_email',
        '597070273ed0c'
      ],
      'Minister'          => [
        'minister',
        '59706fb813519'
      ],
      'Minister Email'    => [
        'minister_email',
        '59706ffc5d1c4'
      ]
    ];

    $criticality_fields = [
      'Low'    => 0,
      'Medium' => 1,
      'High'   => 2
    ];

    $signup_fields = [
      ''                => 'ga',
      'Global Alliance' => 'ga',
      'WePROTECT'       => 'wp',
      'WP'              => 'wp',
      'None'            => 'none',
      'WPGA'            => 'wpga',
      'Confirmed'       => 'wpga' // TODO: Check what 'Confirmed' should be classed as.
    ];

    foreach ( $results as $row ) {
      if ( empty( $row['Country'] ) ) {
        continue;
      }
      $content                 = [];
      $content['post_name']    = sanitize_title( $row['Country'] );
      $content['post_title']   = $row['Country'];
      $content['post_content'] = '';
      $content['post_type']    = 'member';
      $content['post_status']  = 'publish';
      $id                      = wp_insert_post( $content );
      if ( ! $id ) {
        var_dump( $content );

        return false;
      } else {
        if ( empty( $row['Criticality'] ) ) {
          $row['Criticality'] = 'Medium';
        }
        $row['Criticality'] = $criticality_fields[ $row['Criticality'] ];

        $row['Sign up'] = $signup_fields[ $row['Sign up'] ];
        $row['Country'] = array_search( $row['Country'], $countries );

        update_post_meta( $id, 'group', 'country' );
        update_post_meta( $id, '_group', 'field_597068f8afb36' );

        foreach ( $fields as $key => $values ) {
          if ( array_key_exists( $key, $row ) ) {
            update_post_meta( $id, $values[0], $row[ $key ] );
            update_post_meta( $id, '_' . $values[0], 'field_' . $values[1] );
          }
        }
      }
    }

    /**
     * Organisations
     */
    $objWorksheet = $objPHPExcel->getSheet( 1 );

    $highestRow         = $objWorksheet->getHighestRow();
    $highestColumn      = $objWorksheet->getHighestColumn();
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString( $highestColumn );

    $columns = $results = [];
    for ( $row = 1; $row <= $highestRow; ++ $row ) {
      for ( $col = 0; $col <= $highestColumnIndex; ++ $col ) {
        if ( $row == 1 ) {
          $columns[ $col ] = trim( $objWorksheet->getCellByColumnAndRow( $col, $row )->getValue() );
        } else {
          $results[ $row ][ $columns[ $col ] ] = trim( $objWorksheet->getCellByColumnAndRow( $col, $row )->getValue() );
        }
      }
    }

    foreach ( $results as $row ) {
      if ( empty( $row['Organisation'] ) ) {
        continue;
      }

      $name = sanitize_title( $row['Organisation'] );

      $content                 = [];
      $content['post_name']    = $name;
      $content['post_title']   = $row['Organisation'];
      $content['post_content'] = '';
      $content['post_type']    = 'member';
      $content['post_status']  = 'publish';

      $id = wp_insert_post( $content );
      if ( ! $id ) {
        var_dump( 'FAIL', $content );

        return false;
      } else {
        if ( empty( $row['Criticality'] ) ) {
          $row['Criticality'] = 'High';
        }
        $row['Criticality'] = $criticality_fields[ $row['Criticality'] ];
        $row['Sign up']     = $signup_fields[ $row['Sign up'] ];
        $row['Country']     = 'US';

        update_post_meta( $id, 'group', 'organisation' );
        update_post_meta( $id, '_group', 'field_597068f8afb36' );

        foreach ( $fields as $key => $values ) {
          if ( array_key_exists( $key, $row ) ) {
            update_post_meta( $id, $values[0], $row[ $key ] );
            update_post_meta( $id, '_' . $values[0], 'field_' . $values[1] );
          }
        }

        $thumbnail = null;
        if ( array_key_exists( $name . '.jpg', self::$media ) ) {
          $thumbnail = $name . '.jpg';
        } elseif ( array_key_exists( $name . '.png', self::$media ) ) {
          $thumbnail = $name . '.png';
        }

        if ( $thumbnail ) {
          update_post_meta( $id, '_thumbnail_id', self::$media[ $thumbnail ] );
        }
      }
    }

    /**
     * Industry
     */
    $objWorksheet = $objPHPExcel->getSheet( 2 );

    $highestRow         = $objWorksheet->getHighestRow();
    $highestColumn      = $objWorksheet->getHighestColumn();
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString( $highestColumn );

    $columns = $results = [];
    for ( $row = 1; $row <= $highestRow; ++ $row ) {
      for ( $col = 0; $col <= $highestColumnIndex; ++ $col ) {
        if ( $row == 1 ) {
          $columns[ $col ] = trim( $objWorksheet->getCellByColumnAndRow( $col, $row )->getValue() );
        } else {
          $results[ $row ][ $columns[ $col ] ] = trim( $objWorksheet->getCellByColumnAndRow( $col, $row )->getValue() );
        }
      }
    }

    foreach ( $results as $row ) {
      if ( empty( $row['Company'] ) ) {
        continue;
      }

      $name = sanitize_title( $row['Company'] );

      $content                 = [];
      $content['post_name']    = $name;
      $content['post_title']   = $row['Company'];
      $content['post_content'] = '';
      $content['post_type']    = 'member';
      $content['post_status']  = 'publish';
      $id                      = wp_insert_post( $content );
      if ( ! $id ) {
        var_dump( 'FAIL', $content );
        exit;

        return false;
      } else {
        if ( empty( $row['Criticality'] ) ) {
          $row['Criticality'] = 'High';
        }
        $row['Criticality'] = $criticality_fields[ $row['Criticality'] ];

        $row['Sign up'] = $signup_fields[ $row['Sign up'] ];
        //var_dump($content,$row);

        update_post_meta( $id, 'group', 'industry' );
        update_post_meta( $id, '_group', 'field_597068f8afb36' );

        foreach ( $fields as $key => $values ) {
          if ( array_key_exists( $key, $row ) ) {
            update_post_meta( $id, $values[0], $row[ $key ] );
            update_post_meta( $id, '_' . $values[0], 'field_' . $values[1] );
          }
        }

        $thumbnail = null;
        if ( array_key_exists( $name . '.jpg', self::$media ) ) {
          $thumbnail = $name . '.jpg';
        } elseif ( array_key_exists( $name . '.png', self::$media ) ) {
          $thumbnail = $name . '.png';
        }

        if ( $thumbnail ) {
          update_post_meta( $id, '_thumbnail_id', self::$media[ $thumbnail ] );
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
    $path_src  = realpath( ABSPATH . '../data/assets' );

    // List media assets
    if( is_dir( $path_src ) ) {
      $handle = opendir( $path_src );
      while( ( $item = readdir( $handle ) ) !== false ) {
        self::$media[ $item ] = 0;
      }
      closedir( $handle );
    }

    // Process media
    if ( count( self::$media ) ) {
      $wp_upload_dir = wp_upload_dir();

      // Make sure that this file is included, as wp_generate_attachment_metadata() depends on it.
      require_once( ABSPATH . 'wp-admin/includes/image.php' );

      $directories = [
        'uploads',
        date( 'Y' ),
        date( 'm' )
      ];

      $path_dest = ABSPATH . 'wp-content';
      foreach ( $directories as $directory ) {
        if ( ! is_dir( $path_dest . '/' . $directory ) ) {
          mkdir( $path_dest . '/' . $directory );
        }
        $path_dest .= '/' . $directory;
      }

      foreach ( self::$media as $filename => $id ) {

        // Copy project assets "/data/assets" to WP uploads
        $src  = $path_src . '/' . $filename;
        $dest = $path_dest . '/' . $filename;
        if ( file_exists( $src ) ) {
          if( !file_exists( $dest ) ) {
            copy( $src, $dest );
          }
        } else {
          self::$message['alert'][] = 'Missing asset not copied: ' . basename( $src );
        }

        $filetype = wp_check_filetype( basename( $dest ), null );

        // Prepare an array of post data for the attachment.
        $attachment = array(
          'guid'           => $wp_upload_dir['url'] . '/' . basename( $dest ),
          'post_mime_type' => $filetype['type'],
          'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $dest ) ),
          'post_content'   => '',
          'post_status'    => 'inherit'
        );

        // Insert the attachment.
        $id = wp_insert_attachment( $attachment, $wp_upload_dir['url'] . '/' . basename( $dest ) );
        if ( ! $id ) {
          //var_dump( 'MEDIA FAIL:', $attachment );
          return false;
        } else {
          self::$media[ $filename ] = $id;
        }

        // Generate the metadata for the attachment, and update the database record.
        $attach_data = wp_generate_attachment_metadata( $id, $wp_upload_dir['path'] . '/' . basename( $dest ) );
        wp_update_attachment_metadata( $id, $attach_data );
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
    if ( count( self::$posts ) ) {
      remove_filter( 'content_save_pre', 'wp_filter_post_kses' );
      remove_filter( 'content_filtered_save_pre', 'wp_filter_post_kses' );

      foreach ( self::$posts as $name => $content ) {
        $blocks = null;
        if ( array_key_exists( 'blocks', $content ) ) {
          //$blocks = $content['blocks'];
          unset( $content['blocks'] );
        }

        $content['post_name'] = $name;
        if ( array_key_exists( 'post_parent', $content ) ) {
          if ( array_key_exists( $content['post_parent'], self::$slugs ) ) {
            $content['post_parent'] = self::$slugs[ $content['post_parent'] ];
          }
        }

        $group = null;
        if ( array_key_exists( 'group', $content ) ) {
          $group = $content['group'];
          unset( $content['group'] );
        }

        $thumbnail = null;
        if ( array_key_exists( 'thumbnail', $content ) ) {
          $thumbnail = $content['thumbnail'];
          unset( $content['thumbnail'] );
        }

        if ( array_key_exists( 'post_category', $content ) ) {
          foreach ( $content['post_category'] as $i => $slug ) {
            $category = get_category_by_slug( $slug );
            if ( $category ) {
              $content['post_category'][ $i ] = $category->term_id;
            }
          }
          //var_dump($content['post_category']);
        }

        //var_dump($content);
        $content['post_status'] = 'publish';
        $id                     = wp_insert_post( $content );
        if ( ! $id ) {
          return false;
        }
        self::$slugs[ $name ] = $id;

        if ( $group ) {
          update_post_meta( $id, 'group', array( (string) self::$slugs[ $group ] ) );
          update_post_meta( $id, '_group', 'field_' . self::$fields['group'] );
        }

        if ( $thumbnail ) {
          update_post_meta( $id, '_thumbnail_id', self::$media[ $thumbnail ] );
        }
      }

      add_filter( 'content_save_pre', 'wp_filter_post_kses' );
      add_filter( 'content_filtered_save_pre', 'wp_filter_post_kses' );
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
    if ( count( self::$posts ) ) {
      foreach ( self::$posts as $name => $content ) {
        if ( $content['blocks'] ) {
          $post = get_posts( [
            'name'        => $name,
            'post_type'   => 'page',
            'post_status' => 'publish',
            'numberposts' => 1
          ] );
          if ( $post ) {
            $id   = $post[0]->ID;
            $meta = [];
            foreach ( $content['blocks'] as $block ) {
              $data = [
                'name'        => $block,
                'post_type'   => 'content_block',
                'post_status' => 'publish',
                'numberposts' => 1
              ];
              $post = get_posts( $data );
              if ( $post ) {
                $meta[] = $post[0]->ID;
              } else {
                var_dump( 'BLOCK NOT FOUND:', $block );
              }
            }
            if ( $meta ) {
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
    if ( count( self::$blocks ) ) {
      foreach ( self::$blocks as $name => $data ) {
        $content                 = [];
        $content['post_name']    = $name;
        $content['post_type']    = 'content_block';
        $content['post_title']   = $data['post_title'];
        $content['post_content'] = $data['post_content'];
        $content['post_status']  = 'publish';
        $id                      = wp_insert_post( $content );
        if ( ! $id ) {
          var_dump( 'BLOCK NOT CREATED', $data );

          return false;
        }

        foreach ( $data as $key => $val ) {
          if ( array_key_exists( $key, self::$fields ) ) {
            if ( $key == 'linked_page' ) {
              $data = [
                'name'        => $val,
                'post_type'   => 'page',
                'post_status' => 'publish',
                'numberposts' => 1
              ];
              $post = get_posts( $data );
              if ( $post ) {
                $val = array( $post[0]->ID );
              } else {
                // TODO: Tests failing only in test env??
                var_dump( 'PAGE LINK FAIL (block: ' . $name . '): ', $data );

                return false;
              }
            } elseif ( $key == 'image' ) {
              $data = [
                'name'        => pathinfo( $val, PATHINFO_FILENAME ),
                'post_type'   => 'attachment',
                'post_status' => 'inherit',
                'numberposts' => 1
              ];
              if ( !file_exists( $data['path'] ) ) {
              	continue;
              }
              $post = get_posts( $data );
              if ( $post ) {
                $val = (int) $post[0]->ID;
              } else {
                // TODO: Tests failing only in test env??
                var_dump( 'IMAGE LINK FAIL (block: ' . $name . '): ', $data );

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

    // Check for composer
    if ( ! is_dir( WEP_VENDOR ) ) {
      self::$message['error'][] = 'Composer has not been installed.';

      return false;
    }

    // Plugins!
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    activate_plugin( 'advanced-custom-fields/acf.php' );
    activate_plugin( 'contact-form-7/wp-contact-form-7.php' );
    activate_plugin( 'bootstrap-for-contact-form-7/bootstrap-for-contact-form-7.php' );
    activate_plugin( 'wordpress-seo/wp-seo.php' );
    activate_plugin( 'twitter/twitter.php' );
    activate_plugin( 'wp-mail-smtp/wp_mail_smtp.php' );

    // Do we have default content? Install core data
    $posts = get_posts( [
      'post_status' => 'publish',
      'post_type'   => 'post'
    ] );
    if ( count( $posts ) === 1 ) {
      wp_delete_comment( 1 );
      wp_delete_post( 1, true );
      wp_delete_post( 2, true );

      // Add core content
      include_once( ABSPATH . 'wp-admin/includes/taxonomy.php' );

      self::create_media();
      self::create_categories();
      self::create_members();
      self::create_forms();
      self::create_pages();
      self::create_menus();
      self::create_blocks();
      self::create_page_block_relations();

      // Site labels
      update_option( 'blogname', 'WePROTECT Global Alliance' );
      update_option( 'blogdescription', '' );

      // Set homepage as index
      $post = get_posts( [
        'name'        => 'home',
        'post_type'   => 'page',
        'post_status' => 'publish',
        'numberposts' => 1
      ] );
      if ( $post ) {
        update_option( 'page_on_front', $post[0]->ID );
        update_option( 'show_on_front', 'page' );
      }

      // Social media links
      update_option( 'weprotect_theme', [
        'facebook' => 'http://facebook.com/',
        'twitter'  => 'http://twitter.com/'
      ] );

      // Permalinks
      update_option( 'permalink_structure', '/%category%/%postname%/' );
    }
  }
}