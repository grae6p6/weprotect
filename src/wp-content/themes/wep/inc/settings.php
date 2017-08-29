<?php

class MySettingsPage {
	/**
	 * Holds the values to be used in the fields callbacks
	 */
	private $options;

	/**
	 * Start up
	 */
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
		add_action( 'admin_init', array( $this, 'page_init' ) );
	}

	/**
	 * Add options page
	 */
	public function add_plugin_page() {
		// This page will be under "Settings"
		add_options_page(
			'Settings Admin',
			'WePROTECT Options',
			'manage_options',
			'weprotect-admin',
			array( $this, 'create_admin_page' )
		);
	}

	/**
	 * Options page callback
	 */
	public function create_admin_page() {
		// Set class property
		$this->options = get_option( 'weprotect_theme' );
		?>
		<div class="wrap">
			<h1>WePROTECT Theme Options</h1>
			<form method="post" action="options.php">
				<?php
				// This prints out all hidden setting fields
				settings_fields( 'weprotect_group_social' );
				do_settings_sections( 'weprotect-admin' );
				submit_button();
				?>
			</form>
		</div>
		<?php
	}

	/**
	 * Register and add settings
	 */
	public function page_init() {
		register_setting(
			'weprotect_group_social', // Option group
			'weprotect_theme', // Option name
			array( $this, 'sanitize' ) // Sanitize
		);

		add_settings_section(
			'weprotect_social', // ID
			'Social Media', // Title
			array( $this, 'print_section_info' ), // Callback
			'weprotect-admin' // Page
		);

		add_settings_field(
			'facebook', // ID
			'Facebook URL', // Title
			array( $this, 'facebook_callback' ), // Callback
			'weprotect-admin', // Page
			'weprotect_social' // Section
		);

		add_settings_field(
			'twitter',
			'Twitter URL',
			array( $this, 'twitter_callback' ),
			'weprotect-admin',
			'weprotect_social'
		);
	}

	/**
	 * Sanitize each setting field as needed
	 *
	 * @param array $input Contains all settings fields as array keys
	 */
	public function sanitize( $input ) {
		$new_input = array();
		if ( isset( $input[ 'facebook' ] ) ) {
			$new_input[ 'facebook' ] = sanitize_text_field( $input[ 'facebook' ] );
		}

		if ( isset( $input[ 'twitter' ] ) ) {
			$new_input[ 'twitter' ] = sanitize_text_field( $input[ 'twitter' ] );
		}

		return $new_input;
	}

	/**
	 * Print the Section text
	 */
	public function print_section_info() {
		print 'Enter your settings below:';
	}

	/**
	 * Get the settings option array and print one of its values
	 */
	public function facebook_callback() {
		printf(
			'<input type="text" id="facebook" name="weprotect_theme[facebook]" value="%s" />',
			isset( $this->options[ 'facebook' ] ) ? esc_attr( $this->options[ 'facebook' ] ) : ''
		);
	}

	/**
	 * Get the settings option array and print one of its values
	 */
	public function twitter_callback() {
		printf(
			'<input type="text" id="twitter" name="weprotect_theme[twitter]" value="%s" />',
			isset( $this->options[ 'twitter' ] ) ? esc_attr( $this->options[ 'twitter' ] ) : ''
		);
	}
}

if ( is_admin() ) {
	$my_settings_page = new MySettingsPage();
}