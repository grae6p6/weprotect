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
	<?php wep_edit_link( get_the_ID() ); ?>
	<header class="body" role="banner">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-12 text-right">
						<?php if ( function_exists( 'pll_the_languages' ) ) : /* Language switcher for Polylang */ ?>
							<nav role="navigation" aria-label="<?php esc_attr_e( 'Language Menu', 'wep' ); ?>">
								<ul class="nav justify-content-end">
									<?php $languages = pll_the_languages( array( 'raw' => 1 ) );
									foreach ( $languages as $language ) : $locale = explode( '-', strtolower( $language[ 'locale' ] ) ); ?>
										<li class="nav-item">
											<a href="<?php echo esc_url( $language[ 'url' ] ) ?>" class="nav-link"><img
														src="<?php echo get_template_directory_uri() ?>/flags/<?php echo $locale[ 1 ] ?>.svg"
														alt="<?php echo $language[ 'name' ] ?>"> <?php echo $language[ 'name' ] ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</nav>
						<?php endif; ?>
						<nav role="navigation" aria-label="<?php esc_attr_e( 'Accessibility Menu', 'wep' ); ?>">
							<ul class="nav justify-content-end">
								<li class="nav-item">
									<a href="javascript:void(0)" class="nav-link text-size">
										<i class="fa fa-text-height" aria-label="hidden"></i>
										<span class="sr-only"><?php _e( 'Change text size', 'wep' ) ?></span>
									</a>
								</li>
							</ul>
						</nav>
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
				<div class="row align-items-center">
					<div class="logo col-12 col-xl-3 pr-0 pl-md-5 pl-4 text-lg-center text-xl-left">
						<a role="home" href="<?php echo esc_url( home_url( '/' ) ) ?>"><img
									src="<?php echo get_template_directory_uri() ?>/images/logo.svg" height="60"
									width="232" alt="WePROTECT Global Alliance" title="WePROTECT Global Alliance"></a>
					</div>
					<div class="navigation col-12 col-xl-9 pt-lg-4 pt-xl-0 pl-lg-4 pl-xl-0 text-lg-left">
						<?php if ( has_nav_menu( 'main' ) ) : ?>
							<nav role="navigation"
								 aria-label="<?php esc_attr_e( 'Main Menu', 'wep' ); ?>">
                                <ul class="icons nav justify-content-end">
                                    <li>
                                        <a href="#" class="menu hidden-lg-up" title="<?php _e( 'Toggle the main menu', 'wep' ) ?>">
                                            <i class="fa fa-bars" aria-hidden="true"></i><span class="sr-only"><?php _e( 'Toggle the main menu', 'wep' ) ?></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?s" class="search" title="<?php _e( 'Search the website', 'wep' ) ?>">
                                            <i class="fa fa-search" aria-hidden="true"></i><span class="sr-only"><?php _e( 'Search the website', 'wep' ) ?></span>
                                        </a>
                                    </li>
                                </ul>
								<?php
								wp_nav_menu( array(
									'theme_location' => 'main',
									'depth'          => 2,
									'container'      => false,
									'menu_class'     => 'nav nav-pills justify-content-xl-end',
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