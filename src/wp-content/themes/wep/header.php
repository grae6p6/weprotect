<?php

/**
 * The template for displaying the site header
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class( 'debugd no-js' ); ?>>
<div id="page">
	<header class="body" role="banner">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
	                    <?php if ( has_nav_menu( 'top' ) ) : ?>
                            <nav role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'wep' ); ?>">
			                    <?php
			                    wp_nav_menu( array(
				                    'theme_location' => 'top',
				                    'depth'          => 1,
				                    'container'      => false,
				                    'menu_class'     => 'nav justify-content-end',
				                    'fallback_cb'    => '__return_false',
				                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				                    'walker'         => new Boostrap_Nav_Menu,
			                    ) );
			                    ?>
                            </nav>
	                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="primary">
            <div class="container">
	            <?php wep_edit_link( get_the_ID() ); ?>
                <div class="row justify-content-end align-items-center">
                    <div class="col-12 col-lg-3 text-center">
                        <a href="<?php echo esc_url( home_url( '/' ) ) ?>" class="custom-logo-link" rel="home" itemprop="url"><img width="233" height="60" src="<?php echo get_template_directory_uri() ?>/image/wep-logo.gif" class="custom-logo" alt="WePROTECT Global Alliance" itemprop="logo" pagespeed_url_hash="3051156799" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                    </div>
                    <div class="col-12 col-lg-9">
	                    <?php if ( has_nav_menu( 'main' ) ) : ?>
                            <nav role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'wep' ); ?>">
			                    <?php
			                    wp_nav_menu( array(
				                    'theme_location' => 'main',
				                    'depth'          => 2,
				                    'container'      => false,
				                    'menu_class'     => 'nav nav-pills justify-content-end',// nav-fill
				                    'fallback_cb'    => '__return_false',
				                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'walker'         => new Boostrap_Nav_Menu,
			                    ) );
			                    ?>
                            </nav>
	                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
	</header>