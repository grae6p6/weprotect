<?php

/**
 * Update classes for bootstrap CF7 plugin HTML output
 */
function wep_wpcf7_form_elements($res) {
	return str_replace(
		[
            'has-error',
            'wpcf7-not-valid form-control',
            'alert alert-warning',
            'class="wpcf7-response-output wpcf7-validation-errors alert alert-warning"',

            //'wpcf7-validates-as-required form-control'
        ],
        [
	        'has-error has-warning',
            'wpcf7-not-valid form-control form-control-warning',
            'form-control-feedback',
            'class="wpcf7-response-output wpcf7-validation-errors alert alert-warning" role="alert"',

            //'wpcf7-validates-as-required form-control form-control-success'
        ],
        $res
    );
}

add_filter( 'wpcf7_form_elements', 'wep_wpcf7_form_elements', 10, 2 );

function wep_member_group_post_link( $post_link, $id = 0 ){
	$post = get_post($id);
	if ( is_object( $post ) && $post->post_type == 'mnr' ){
		$terms = wp_get_object_terms( $post->ID, 'mnr_category' );
		var_dump($terms);
		if( $terms && !( $terms instanceof WP_Error ) ) {
			return str_replace( '%mnr_category%', $terms[0]->slug, $post_link );
		}
	}
	return $post_link;
}
//add_filter( 'post_type_link', 'wep_member_group_post_link', 1, 3 );




function add_taxonomies_to_pages() {
	register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', 'add_taxonomies_to_pages' );




class Wep_Theme {
	public function after_switch_theme() {
	    Wep_Plugin::setup();
    }

    public static function after_theme_setup() {
		add_theme_support( 'html5' );
		add_theme_support( 'post-thumbnails' );

		load_theme_textdomain('wep');

	    $defaults = array(
		    'height'      => 60,
		    'width'       => 233,
		    //'flex-height' => true,
		    //'flex-width'  => true,
		    'header-text' => array( 'site-title' ),
	    );
	    add_theme_support( 'custom-logo', $defaults );

		register_nav_menus( array(
			'top' => __( 'Top Menu', 'wep' ),
			'main' => __( 'Main Menu', 'wep' ),
			'connect' => __( 'Connect', 'wep' ),
			'support' => __( 'Contact and Support', 'wep' ),
		) );
	}

	// TODO: To be refactored
	public static function enqueue_scripts() {

		// jQuery is vendor compiled using webpack
		//wp_deregister_script( 'jquery' );
		//wp_deregister_script( 'jquery-migrate' );

		//wp_enqueue_script( 'jquery', 'http://code.jquery.com/jquery-1.11.3.min.js' );

		// Theme stylesheet.
		wp_enqueue_style( 'wep-style', get_stylesheet_uri() );

		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700' );

		// Load the html5 shiv.
		wp_enqueue_script( 'html5', get_theme_file_uri( '/js/html5.js' ), array(), '3.7.3' );
		wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

		// Theme script.
		wp_enqueue_script( 'wep-scripts', get_theme_file_uri( '/js/scripts.min.js' ), array(), '1.0' );

		// Font awesome
		wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );

		// TODO: Target widget rather than page?
		if( is_page( 'our-members' ) ) {//if ( is_active_widget( 'Wep_Widget_Members_List' ) ) {
			wp_enqueue_script( 'jqvmap', get_theme_file_uri( '/js/jquery.vmap.min.js' ), array( 'jquery' ), '1.5.1' );
			wp_enqueue_script( 'jqvmap-world', get_theme_file_uri( '/js/maps/jquery.vmap.world.js' ), array() );
			wp_enqueue_script( 'jqvmap-init', get_theme_file_uri( 'js/widget_wep_members.js' ) );
		}
	}

	public static function create_post_type() {
		add_editor_style([
			'https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:300,400,600,700',
			'css/editor.css'
		]);

		register_post_type( 'content_block',
			array(
				'labels' => array(
					'name' => __( 'Content Blocks' ),
					'singular_name' => __( 'Content Block' )
				),
				'public' => true,
				'publicly_queryable' => false,
				'has_archive' => false,
			)
		);

		register_post_type( 'member',
			array(
				'labels' => array(
					'name' => __( 'Members' ),
					'singular_name' => __( 'Member' )
				),
				'public' => true,
				'publicly_queryable' => false,
				//'rewrite' => array( 'slug' => 'our-members/%member%' ),
				'has_archive' => false,
			)
		);

		register_post_type( 'mnr',
			array(
				'labels' => array(
					'name' => __( 'Model National Response' ),
					'singular_name' => __( 'Model National Response' )
				),
				'public' => true,
				'publicly_queryable' => false,
				//'rewrite' => array( 'slug' => 'model-national-response' ),
				'has_archive' => false,
				'capability_type' => 'page',
				'supports' => array('title','editor','excerpt','revisions')
			)
		);
	}

	public static function register_field_groups() {
        $case_studies = get_term_by('name', 'Case studies', 'category');
        $events = get_term_by('name', 'Events', 'category');
		$news = get_term_by('name', 'News', 'category');
		$mnr = get_term_by('name', 'Model National Response', 'category');

        if( !$case_studies || !$events || !$news || !$mnr ) {
            return false;
        }

		require get_parent_theme_file_path( 'inc/custom-fields.php' );

		return true;
	}

	public static function widgets_init() {
		register_widget( 'Wep_Widget_Latest' );
		register_widget( 'Wep_Widget_Members_List' );
	}

	public static function widget_latest( $atts ) {
		extract( shortcode_atts(
			array(
				'max'   => 3,
				'categories'  => ''
			),
			$atts
		));

		/*$args = array(
			'before_widget' => '<div class="box widget scheme-' . $scheme . ' ">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title">',
			'after_title'   => '</div>',
		);*/

		ob_start();
		the_widget( 'Wep_Widget_Latest', $atts/*, $args*/ );
		$output = ob_get_clean();

		return $output;
	}

	public static function widget_members_list( $atts ) {
		extract( shortcode_atts(
			array(
				'default'   => 'country'
			),
			$atts
		));

		/*$args = array(
			'before_widget' => '<div class="box widget scheme-' . $scheme . ' ">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget-title">',
			'after_title'   => '</div>',
		);*/

		ob_start();
		the_widget( 'Wep_Widget_Members_List', $atts/*, $args*/ );
		$output = ob_get_clean();

		return $output;
	}
}

/**
 * Actions
 */
add_action( 'after_switch_theme', ['Wep_Theme', 'after_switch_theme'] );
add_action( 'widgets_init', ['Wep_Theme', 'widgets_init'] );
add_action( 'init', ['Wep_Theme', 'create_post_type'] );
add_action( 'init', ['Wep_Theme', 'register_field_groups'] );
add_action( 'wp_enqueue_scripts', ['Wep_Theme', 'enqueue_scripts'] );
add_action( 'after_setup_theme', ['Wep_Theme', 'after_theme_setup'] );

/**
 * Shortcodes
 */
add_shortcode( 'wep-latest', [ 'Wep_Theme', 'widget_latest' ] );
add_shortcode( 'wep-members-list', [ 'Wep_Theme', 'widget_members_list' ] );

/**
 * Theme template functions
 */
require get_parent_theme_file_path( 'inc/template-functions.php' );

/**
 * Widgets
 */
require get_parent_theme_file_path( 'inc/widgets.php' );

/**
 * Walkers
 */
require get_parent_theme_file_path( 'inc/walkers.php' );