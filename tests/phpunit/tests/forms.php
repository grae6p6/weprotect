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
		//$this->assertTrue(Wep_Plugin::create_form('apply-for-membership'));
	}
}