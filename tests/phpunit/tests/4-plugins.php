<?php

/**
 * test wp-content/plugins/...
 *
 * @group wep
 */

class Tests_Wep_Plugin extends WP_UnitTestCase {

	/**
	 * Check plugins
	 */
	public function test_required_plugins_installed() {

		// "Blocks" relationship ordering on posts etcs
		$this->assertNull(activate_plugin('advanced-custom-fields/acf.php'));
		$this->assertTrue(is_plugin_active('advanced-custom-fields/acf.php'));

		// Forms
		$this->assertNull(activate_plugin('contact-form-7/wp-contact-form-7.php'));
		$this->assertTrue(is_plugin_active('contact-form-7/wp-contact-form-7.php'));

		// Bootstrap support for forms
		$this->assertNull(activate_plugin('bootstrap-for-contact-form-7/bootstrap-for-contact-form-7.php'));
		$this->assertTrue(is_plugin_active('bootstrap-for-contact-form-7/bootstrap-for-contact-form-7.php'));

		// SEO
		$this->assertNull(activate_plugin('wordpress-seo/wp-seo.php'));
		$this->assertTrue(is_plugin_active('wordpress-seo/wp-seo.php'));

		// Newsletter
		//$this->assertNull(activate_plugin('mailpoet/mailpoet.php'));
		//$this->assertTrue(is_plugin_active('mailpoet/mailpoet.php'));

		// Caching and CDN - Throws Risky result
		//$this->assertNull(activate_plugin('w3-total-cache/w3-total-cache.php'));
		//$this->assertTrue(is_plugin_active('w3-total-cache/w3-total-cache.php'));

		// Twitter
		$this->assertNull(activate_plugin('twitter/twitter.php'));
		$this->assertTrue(is_plugin_active('twitter/twitter.php'));

		// Multilingual support
		$this->assertNull(activate_plugin('polylang/polylang.php'));
		$this->assertTrue(is_plugin_active('polylang/polylang.php'));

		// SMTP
		$this->assertNull(activate_plugin('wp-mail-smtp/wp_mail_smtp.php'));
		$this->assertTrue(is_plugin_active('wp-mail-smtp/wp_mail_smtp.php'));

		// Form extension for Polylang - Cannot be unit tested
	}

	/**
	 * MU plugin, usual functions don't work so check for class on WEP plugin
	 */
  public function test_wep_plugin_class_exists() {
    $this->assertTrue(class_exists('Wep_Plugin'));
  }

  public function test_wep_plugin_methods_exist() {
    $this->assertTrue(method_exists('Wep_Plugin', 'create_forms'));
    $this->assertTrue(method_exists('Wep_Plugin', 'create_categories'));
    $this->assertTrue(method_exists('Wep_Plugin', 'create_menus'));
    $this->assertTrue(method_exists('Wep_Plugin', 'create_members'));
    $this->assertTrue(method_exists('Wep_Plugin', 'create_media'));
    $this->assertTrue(method_exists('Wep_Plugin', 'create_pages'));
    $this->assertTrue(method_exists('Wep_Plugin', 'create_page_block_relations'));
    $this->assertTrue(method_exists('Wep_Plugin', 'create_blocks'));
    $this->assertTrue(method_exists('Wep_Plugin', 'setup'));
  }
}