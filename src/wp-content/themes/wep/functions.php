<?php

class Wep_Theme {
	public function after_switch_theme() {

    }

    public static function after_theme_setup() {
		add_theme_support( 'html5' );
		add_theme_support( 'post-thumbnails' );

		$defaults = array(
			'height'      => 60,
			'width'       => 233,
			//'flex-height' => true,
			//'flex-width'  => true,
			'header-text' => array( 'site-title' ),
		);
		add_theme_support( 'custom-logo', $defaults );

		load_theme_textdomain('wep');

		register_nav_menus( array(
			'top' => __( 'Top Menu', 'wep' ),
			'main' => __( 'Main Menu', 'wep' ),
			'connect' => __( 'Connect', 'wep' ),
			'support' => __( 'Contact and Support', 'wep' ),
		) );
	}

	public static function enqueue_scripts() {

		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );

		// Theme stylesheet.
		wp_enqueue_style( 'wep-style', get_stylesheet_uri() );

		wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700' );

		// Load the html5 shiv.
		wp_enqueue_script( 'html5', get_theme_file_uri( '/js/html5.js' ), array(), '3.7.3' );
		wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

		// Theme script.
		wp_enqueue_script( 'wep-scripts', get_theme_file_uri( '/js/scripts.min.js' ), array(), '1.0', true );
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
	}

	public static function register_field_groups() {
        $case_studies = get_term_by('name', 'Case studies', 'category');
        $events = get_term_by('name', 'Events', 'category');
        $news = get_term_by('name', 'News', 'category');

        if( !$case_studies && !$events && !$news ) {
            return true;
        }

		if(function_exists("register_field_group"))
		{
			register_field_group(array (
				'id' => 'acf_assigned-content-blocks',
				'title' => 'Assigned Content Blocks',
				'fields' => array (
					array (
						'key' => 'field_595e437018a98',
						'label' => 'Assigned Blocks',
						'name' => 'assigned_blocks',
						'type' => 'relationship',
						'return_format' => 'object',
						'post_type' => array (
							0 => 'content_block',
						),
						'taxonomy' => array (
							0 => 'all',
						),
						'filters' => array (
							0 => 'search',
						),
						'result_elements' => array (
							0 => 'post_type',
							1 => 'post_title',
						),
						'max' => '',
					),
				),
				'location' => array (
					array (
						array (
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'page',
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
			register_field_group(array (
				'id' => 'acf_content-block-type',
				'title' => 'Content Block Type',
				'fields' => array (
					array (
						'key' => 'field_595e465405629',
						'label' => 'Type',
						'name' => 'type',
						'type' => 'select',
						'instructions' => 'Content block layout format',
						'choices' => array (
							'' => 'Standard',
							'image' => 'Banner with title (optional image)',
							'cta1' => 'Call-to-action (right-side image)',
							'cta3' => 'Call-to-action (three paragraphs)',
							'casestudies' => 'Text block with related case studies',
							'events' => 'Text block with related events',
							'news' => 'Text block with related news',
							'any' => 'Text block with any related post',
						),
						'default_value' => '',
						'allow_null' => 0,
						'multiple' => 0,
					),
					array (
						'key' => 'field_595e56cb3b048',
						'label' => 'Image',
						'name' => 'image',
						'type' => 'image',
						'save_format' => 'object',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
					array (
						'key' => 'field_595e57673b049',
						'label' => 'Colour',
						'name' => 'colour',
						'type' => 'color_picker',
						'default_value' => '',
					),
					array (
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
					),
					array (
						'key' => 'field_5964b1b8127f0',
						'label' => 'Linked Page',
						'name' => 'linked_page',
						'type' => 'relationship',
						'instructions' => 'If selected, provides a button at the bottom of the block to the page',
						'return_format' => 'object',
						'post_type' => array (
							0 => 'page',
						),
						'taxonomy' => array (
							0 => 'all',
						),
						'filters' => array (
							0 => 'search',
						),
						'result_elements' => array (
							0 => 'post_title',
						),
						'max' => 1,
					),
					array (
						'key' => 'field_5964ec11ee4db',
						'label' => 'Button Label',
						'name' => 'button_label',
						'type' => 'text',
						'instructions' => 'Button label for the linked page (defaults to page title if blank)',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_5964e987a10bb',
						'label' => 'Section One',
						'name' => 'section_1',
						'type' => 'wysiwyg',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_595e465405629',
									'operator' => '==',
									'value' => 'cta3',
								),
							),
							'allorany' => 'all',
						),
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'yes',
					),
					array (
						'key' => 'field_5964e9a8a10bc',
						'label' => 'Section Two',
						'name' => 'section_2',
						'type' => 'wysiwyg',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_595e465405629',
									'operator' => '==',
									'value' => 'cta3',
								),
							),
							'allorany' => 'all',
						),
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'yes',
					),
					array (
						'key' => 'field_5964e9b2a10bd',
						'label' => 'Section Three',
						'name' => 'section_3',
						'type' => 'wysiwyg',
						'conditional_logic' => array (
							'status' => 1,
							'rules' => array (
								array (
									'field' => 'field_595e465405629',
									'operator' => '==',
									'value' => 'cta3',
								),
							),
							'allorany' => 'all',
						),
						'default_value' => '',
						'toolbar' => 'full',
						'media_upload' => 'yes',
					),
				),
				'location' => array (
					array (
						array (
							'param' => 'post_type',
							'operator' => '==',
							'value' => 'content_block',
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

		return true;
	}

	public static function widgets_init() {
		register_widget( 'Wep_Latest' );
	}
}

add_action( 'after_switch_theme', ['Wep_Theme', 'after_switch_theme'] );
add_action( 'widgets_init', ['Wep_Theme', 'widgets_init'] );
add_action( 'init', ['Wep_Theme', 'create_post_type'] );
add_action( 'init', ['Wep_Theme', 'register_field_groups'] );
add_action( 'wp_enqueue_scripts', ['Wep_Theme', 'enqueue_scripts'] );
add_action( 'after_setup_theme', ['Wep_Theme', 'after_theme_setup'] );

/**
 * Theme template functions
 */
require get_parent_theme_file_path( 'inc/template-functions.php' );

/**
 * Walker for the primary menu
 */
class Boostrap_Nav_Menu extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = array() ){ // ul
		$indent = str_repeat("\t",$depth); // indents the outputted HTML
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
	}

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ // li a span

		$indent = ( $depth ) ? str_repeat("\t",$depth) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = ($item->current || $item->current_item_anchestor) ? 'active' : '';
		$classes[] = 'nav-item';
		$classes[] = 'nav-item-' . $item->ID;
		if( $depth && $args->walker->has_children ){
			$classes[] = 'dropdown-menu';
		}

		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';

		$attributes .= ( $args->walker->has_children ) ? ' class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="nav-link"';

		$item_output = $args->before;
		$item_output .= ( $depth > 0 ) ? '<a class="dropdown-item"' . $attributes . '>' : '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}





















// Creating the widget
class Wep_Latest extends WP_Widget {

	function __construct() {
		parent::__construct(
			'Wep_Latest',
			__('WEP Latest', 'wep'),
			array(
				'description' => __( 'Latest news & events content box', 'wep' ),
			)
		);
	}

// Creating widget front-end

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];

// This is where you run the code and display the output
		echo __( 'Hello, World!', 'wep' );
		echo $args['after_widget'];
	}

// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = __( 'New title', 'wep' );
		}
// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}