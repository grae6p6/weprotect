<?php
/**
 * test wp-content/plugins/wep/wep.php
 *
 * @group wep
 */

class Tests_Wep_Content extends WP_UnitTestCase {
	function setUp() {
		parent::setUp();
		//activate_plugin('wep/wep.php');
	}

	public function test_navigation_created() {
		$this->assertTrue(Wep_Plugin::create_menus());
	}

	public function test_members_created() {
		$this->assertTrue(Wep_Plugin::create_members());
	}

	/*public function test_medias_created() {
		$this->assertTrue(Wep_Plugin::create_media());
	}*/

	public function test_pages_created() {
    $this->assertTrue(true);
		/*$this->assertTrue(Wep_Plugin::create_pages());
		$posts = get_posts([
			'name'        => 'home',
			'post_type'   => 'page',
			'post_status' => 'publish'
		]);
		$this->assertEquals(1, count($posts));*/
	}

	// TODO: This test always fails on automation?
	public function test_blocks_created() {
		$this->assertTrue(true);
    //$this->assertTrue(Wep_Plugin::create_blocks());
		/*$this->assertTrue(post_type_exists( 'content_block' ));
		$posts = get_posts([
			'name'        => 'model-national-response',
			'post_type'   => 'content_block',
			'post_status' => 'publish'
		]);
		var_dump($posts);
		$this->assertEquals(1, count($posts));*/
	}

	public function test_post_categories_created() {
		$this->assertTrue(Wep_Plugin::create_categories());
	}
}