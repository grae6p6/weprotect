<?php

/**
 * Class Wep_Theme
 *
 * WePROTECT
 * Version: 1.0
 * Author: Alex Gailey-White @ Panlogic Ltd
 */

class Wep_Theme {
  public static $options = [];

  public static function add_taxonomies_to_pages() {
    register_taxonomy_for_object_type( 'category', 'page' );
  }

  public static function admin_notices() {
    foreach ( Wep_Plugin::$message['error'] as $error ) : ?>
        <div class="error notice">
            <p><?php _e( $error, 'wep' ); ?></p>
        </div>
    <?php endforeach;
  }

  public static function after_switch_theme( $oldtheme_name, $oldtheme ) {
    Wep_Plugin::setup();
    if ( count( Wep_Plugin::$message['error'] ) ) {
      switch_theme( $oldtheme->stylesheet );
    }

    Wep_Plugin::$message['error'] = Wep_Plugin::$message['error'] + Wep_Plugin::$message['alert'];
  }

  public static function after_theme_setup() {
    add_theme_support( 'html5' );
    add_theme_support( 'post-thumbnails' );

    load_theme_textdomain( 'wep' );

    register_nav_menus( array(
      'top'     => __( 'Top Menu', 'wep' ),
      'main'    => __( 'Main Menu', 'wep' ),
      'support' => __( 'Contact and Support', 'wep' ),
    ) );

    add_image_size( 'block-image', '1400', '800', false );
    add_image_size( 'block-image-2x', '2800', '1600', false );

    add_image_size( 'block-cta', '300', '300', false );
    add_image_size( 'block-cta-2x', '600', '600', false );

    self::$options = get_option( 'weprotect_theme' );
  }

  // TODO: To be refactored
  public static function enqueue_scripts() {

    // jQuery is vendor compiled using webpack
    wp_deregister_script( 'jquery' );
    //wp_deregister_script( 'jquery-migrate' );

    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js' );

    // Theme stylesheet.
    wp_enqueue_style( 'wep-style', get_stylesheet_uri() );

    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:400,700' );

    // Load the html5 shiv.
    wp_enqueue_script( 'html5', get_theme_file_uri( '/js/html5.js' ), array(), '3.7.3' );
    wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

    // Theme script.
    wp_enqueue_script( 'wep-scripts', get_theme_file_uri( '/js/scripts.min.js' ), array(), '1.0' );

    // Resize sensor for auto-sizing "block" items based on computed content
    wp_enqueue_script( 'resize-sensor', get_theme_file_uri( '/js/resizeSensor.min.js' ), array(), '1.0' );

    // Font awesome icons
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );

    // TODO: Target widget rather than page?
    if ( is_page( 'our-board' ) or is_page( 'our-members' ) ) {//if ( is_active_widget( 'Wep_Widget_Members_List' ) ) {
      if ( is_page( 'our-members' ) ) {
        wp_enqueue_script( 'jqvmap', get_theme_file_uri( '/js/jquery.vmap.min.js' ), array( 'jquery' ), '1.5.1' );
        wp_enqueue_script( 'jqvmap-world', get_theme_file_uri( '/js/maps/jquery.vmap.world.js' ), array() );
      }
      wp_enqueue_script( 'jqvmap-init', get_theme_file_uri( 'js/widget_wep_members.js' ) );
    }
  }

  public static function create_post_type() {
    add_editor_style( [
      'https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:300,400,600,700',
      'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',
      'css/editor.css'
    ] );

    register_post_type( 'content_block',
      array(
        'labels'             => array(
          'name'          => __( 'Content Blocks' ),
          'singular_name' => __( 'Content Block' )
        ),
        'menu_icon'          => 'dashicons-admin-users',
        'public'             => true,
        'publicly_queryable' => false,
        'has_archive'        => false,
      )
    );

    register_post_type( 'member',
      array(
        'labels'             => array(
          'name'          => __( 'Members' ),
          'singular_name' => __( 'Member' )
        ),
        'menu_icon'          => 'dashicons-admin-users',
        'public'             => true,
        'publicly_queryable' => false,
        'has_archive'        => false,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
      )
    );

    register_post_type( 'board',
      array(
        'labels'             => array(
          'name'          => __( 'Board' ),
          'singular_name' => __( 'Board' )
        ),
        'menu_icon'          => 'dashicons-admin-users',
        'public'             => true,
        'publicly_queryable' => false,
        'has_archive'        => false,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
      )
    );

    register_post_type( 'mnr',
      array(
        'labels'             => array(
          'name'          => __( 'Model National Response' ),
          'singular_name' => __( 'Model National Response' )
        ),
        'menu_icon'          => 'dashicons-admin-page',
        'public'             => true,
        'publicly_queryable' => false,
        'has_archive'        => false,
        'capability_type'    => 'page',
        'supports'           => array( 'title', 'editor', 'excerpt', 'revisions' )
      )
    );
  }

  /**
   * Catch search queries to run sub-queries on "content blocks" that match search phrase, resulting IDs are attached
   * to the main query in the form of a meta search on "assigned blocks"
   *
   * @param $query
   */
  public static function pre_get_posts( $query ) {
    if ( ! is_admin() && $query->is_main_query() ) {
      if ( $query->is_search ) {
        remove_action( 'pre_get_posts', 'filter_search_results' );
        $my_secondary_loop = new WP_Query([
          'post_type' => 'content_block',
          's' => wp_kses( $_GET['s'], [] ),
        ]);

        // Add posts, pages with blocks that contain search phrase
        if ( $my_secondary_loop->have_posts() ):
          $meta_query = array( 'relation' => 'OR' );
          foreach( $my_secondary_loop->posts as $result ) :
            array_push( $meta_query, array(
              'key'     => 'assigned_blocks',
              'value'   => ':' . $result->ID . ';',
              'compare' => 'LIKE'
            ) );
          endforeach;
          $query->set( 'meta_query', $meta_query );
        endif;

        // Limit to posts and pges only
        $query->set( 'post_type', ['post', 'page'] );

        // Remove search phrase, or meta conditionals won't work
        $query->set( 's', '' );

        //add_action( 'pre_get_posts', 'filter_search_results' );
      }
    }
  }

  /**
   * Setup all custom fields
   *
   * @return bool
   */
  public static function register_field_groups() {
    $case_studies = get_term_by( 'name', 'Case studies', 'category' );
    $events       = get_term_by( 'name', 'Events', 'category' );
    $news         = get_term_by( 'name', 'News', 'category' );

    if ( ! $case_studies || ! $events || ! $news ) {
      return false;
    }

    require get_parent_theme_file_path( 'inc/custom-fields.php' );

    return true;
  }

  public static function widgets_init() {
    register_widget( 'Wep_Widget_Latest' );
    register_widget( 'Wep_Widget_Members_List' );
    register_widget( 'Wep_Widget_Board_List' );
    register_widget( 'Wep_Widget_News_Links' );
  }

  /**
   * Widget - Display last N posts, with optional category filters
   *
   * @param $atts
   *
   * @return string
   */
  public static function widget_latest( $atts ) {
    extract( shortcode_atts(
      array(
        'max'        => 3,
        'categories' => ''
      ),
      $atts
    ) );

    ob_start();
    the_widget( 'Wep_Widget_Latest', $atts/*, $args*/ );
    $output = ob_get_clean();

    return $output;
  }

  /**
   * Widget - Display all members by type
   *
   * @param $atts
   *
   * @return string
   */
  public static function widget_members_list( $atts ) {
    extract( shortcode_atts(
      array(
        'default' => 'country'
      ),
      $atts
    ) );

    ob_start();
    the_widget( 'Wep_Widget_Members_List', $atts/*, $args*/ );
    $output = ob_get_clean();

    return $output;
  }

  /**
   * Widget - Display all board members
   *
   * @param $atts
   *
   * @return string
   */
  public static function widget_board_list() {
    ob_start();
    the_widget( 'Wep_Widget_Board_List' );
    $output = ob_get_clean();

    return $output;
  }

  /**
   * Widget - Display last N posts from the news category
   *
   * @param $atts
   *
   * @return string
   */
  public static function widget_news_links( $atts ) {
    extract( shortcode_atts(
      array(
        'max' => 4
      ),
      $atts
    ) );

    ob_start();
    the_widget( 'Wep_Widget_News_Links', $atts/*, $args*/ );
    $output = ob_get_clean();

    return $output;
  }

  /**
   * Update classes for bootstrap CF7 plugin HTML output
   */
  function wpcf7_form_elements( $res ) {

    // Add ARIA labels
    $res = preg_replace( '/<label class="" for="([a-z0-9\-_]+)"/', '<label class="" for="$1" id="$1-label"', $res );
    $res = preg_replace( '/id="([a-z0-9\-_]+)" name="([a-z0-9\-_]+)"/', 'id="$1" name="$1" aria-labelledby="$1-label"', $res );

    $res = str_replace(
        [
          'has-error',
          'wpcf7-not-valid form-control',
          'alert alert-warning',
          'class="wpcf7-response-output wpcf7-validation-errors alert alert-danger"',
          'class="radio"'
          //'wpcf7-validates-as-required form-control'
        ],
        [
          'has-error has-danger',
          'wpcf7-not-valid form-control form-control-danger',
          'form-control-feedback',
          'class="wpcf7-response-output wpcf7-validation-errors alert alert-danger" role="alert"',
          'class="form-check form-check-inline"',
          //'wpcf7-validates-as-required form-control form-control-success'
        ],
        $res
    );
    return $res;
  }
}

/**
 * Filters
 */

// Enable links manager for news
add_filter( 'pre_option_link_manager_enabled', '__return_true' );
add_filter( 'wpcf7_form_elements', [ 'Wep_Theme', 'wpcf7_form_elements' ], 10, 2 );

/**
 * Actions
 */
//add_action( 'init', [ 'Wep_Theme', 'add_taxonomies_to_pages' ] );
add_action( 'admin_notices', [ 'Wep_Theme', 'admin_notices' ] );
add_action( 'after_switch_theme', [ 'Wep_Theme', 'after_switch_theme' ], 10, 2 );
add_action( 'widgets_init', [ 'Wep_Theme', 'widgets_init' ] );
add_action( 'init', [ 'Wep_Theme', 'create_post_type' ] );
add_action( 'init', [ 'Wep_Theme', 'register_field_groups' ] );
add_action( 'pre_get_posts', [ 'Wep_Theme', 'pre_get_posts' ] );
add_action( 'wp_enqueue_scripts', [ 'Wep_Theme', 'enqueue_scripts' ] );
add_action( 'after_setup_theme', [ 'Wep_Theme', 'after_theme_setup' ] );

/**
 * Shortcodes
 */
add_shortcode( 'wep-latest', [ 'Wep_Theme', 'widget_latest' ] );
add_shortcode( 'wep-members-list', [ 'Wep_Theme', 'widget_members_list' ] );
add_shortcode( 'wep-board-list', [ 'Wep_Theme', 'widget_board_list' ] );
add_shortcode( 'wep-news-links', [ 'Wep_Theme', 'widget_news_links' ] );

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

/**
 * Settings
 */
require get_parent_theme_file_path( 'inc/settings.php' );