<?php
/**
 * test wp-content/plugins/wep/wep.php
 *
 * @group wep
 */

class Tests_Wep_Forms extends WP_UnitTestCase {
	function setUp() {
		parent::setUp();
		activate_plugin('contact-form-7/wp-contact-form-7.php');
		activate_plugin('wysija-newsletters/index.php');
	}

	public function test_apply_for_membership_form() {
		$entry = array_flip( array_slice( Wep_Plugin::$forms, -1, 1 ) );
		$post = get_posts([
			'page_title'  => $entry,
			'post_type'   => 'wpcf7_contact_form',
			'post_status' => 'publish',
			'numberposts' => 1
		]);
		if( $post ) {
			$this->assertCount(1, $post);
		}

	}
}