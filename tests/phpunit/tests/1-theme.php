<?php
/**
 * test wp-content/themes/wep/functions.php
 *
 * @group wep
 */

define('THEME_NAME', 'wep');
define('THEME_CLASS', 'Wep_Theme');

class Tests_Wep_Theme extends WP_UnitTestCase {
	public $theme = null;
	public $path = null;

	function setUp() {
		parent::setUp();
		wp_clean_themes_cache();
		//switch_theme(THEME_NAME);
		$this->theme = wp_get_theme();
		$this->path = get_template_directory() . DIRECTORY_SEPARATOR;
	}

	function tearDown() {
		wp_clean_themes_cache();
		parent::tearDown();
	}

	public function test_theme_exists() {
		$this->assertInstanceOf('WP_Theme', $this->theme);
		$this->assertTrue($this->theme->exists());
		$this->assertEquals('WePROTECT', $this->theme->get('Name'));
	}

	public function test_theme_templates_exist() {
		$this->assertFileExists($this->path . '404.php');
    $this->assertFileExists($this->path . 'category.php');
		$this->assertFileExists($this->path . 'index.php');
		$this->assertFileExists($this->path . 'page.php');
		$this->assertFileExists($this->path . 'search.php');
    $this->assertFileExists($this->path . 'single.php');
		$this->assertFileExists($this->path . 'attachment.php');
	}

	/**
	 * Check theme classes and functions
	 */
	public function test_theme_functions_and_menus() {
		$this->assertTrue(class_exists('Wep_Theme'));
	}

	/**
	 * Check menus exist
	 */
	public function test_navigation_menus_exist() {
		$menus = get_registered_nav_menus();
		$this->assertTrue(array_key_exists('top', $menus));
		$this->assertTrue(array_key_exists('main', $menus));
		$this->assertTrue(array_key_exists('support', $menus));
	}

	/**
	 * Check CSS & SCSS compile times are within 5 seconds
	 * NOTE: Done this way to counter sequential syncing behaviour of rsync env
	 */
	public function test_theme_css_is_newer_than_sass() {
		$this->assertGreaterThanOrEqual((filemtime($this->path . 'style.css')-5), filemtime($this->path . 'sass' . DIRECTORY_SEPARATOR . 'style.scss'));
	}

	public function test_theme_has_core_functions() {
		$this->assertTrue(method_exists(THEME_CLASS, 'enqueue_scripts'));
	}

	public function test_theme_has_content_block_post_type() {
		Wep_Theme::create_post_type();
		$this->assertTrue(post_type_exists( 'content_block' ));
	}

	public function test_theme_has_member_post_type() {
		Wep_Theme::create_post_type();
		$this->assertTrue(post_type_exists( 'member' ));
	}

	public function test_theme_has_board_post_type() {
		Wep_Theme::create_post_type();
		$this->assertTrue(post_type_exists( 'board' ));
	}

	public function test_theme_has_mnr_post_type() {
		Wep_Theme::create_post_type();
		$this->assertTrue(post_type_exists( 'mnr' ));
	}

	/*public function test_theme_has_registered_field_groups_for_content_blocks() {
		//$this->assertTrue(Wep_Theme::register_field_groups());
	}

	// TODO: create custom blocks through plugin and test for field assoc
	public function test_theme_content_block_has_custom_fields() {

		//get_field_objects();
	}*/

	public function test_theme_widgets_registered() {
		//Wep_Theme::widgets_init();
		$this->assertTrue( class_exists('Wep_Widget_Latest') );
		$this->assertTrue( class_exists('Wep_Widget_Members_List') );
		$this->assertTrue( class_exists('Wep_Widget_Board_List') );
		$this->assertTrue( class_exists('Wep_Widget_News_Links') );
		//is_active_widget();
	}
}