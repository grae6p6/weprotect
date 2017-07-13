<?php
/**
 * test wp-content/plugins/wep/wep.php
 *
 * @group wep
 */

class Tests_Wep_Content extends WP_UnitTestCase {
	function setUp() {
		parent::setUp();
		activate_plugin('wep/wep.php');
	}

	public function test_navigation_created() {
		$this->assertTrue(Wep_Plugin::create_menus());
	}

	public function test_pages_created() {
		$this->assertTrue(Wep_Plugin::create_pages());
		$posts = get_posts([
			'name'        => 'home',
			'post_type'   => 'page',
			'post_status' => 'publish'
		]);
		$this->assertCount(1, $posts);
	}

	public function test_post_categories_created() {
		$this->assertTrue(Wep_Plugin::create_categories());
		//$id = wp_create_category('Case studies');
		//$this->assertGreaterThan(0, $id);
		//$id = wp_create_category('Events');
		//$this->assertGreaterThan(0, $id);
		//$id = wp_create_category('News');
		//$this->assertGreaterThan(0, $id);
	}

	//public function test_case_study() {
		//get_field_objects
	//}
}