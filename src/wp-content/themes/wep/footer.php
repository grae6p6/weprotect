<?php

/**
 * The template for displaying the site footer
 */

$locations = get_nav_menu_locations();

?>
<footer class="body" role="contentinfo">
	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center text-lg-right">
					<a href="#top" class="float-right">▲ <?php esc_attr_e( 'Top', 'wep' ) ?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="primary">
		<div class="container px-5">
			<div class="row">
				<div class="col-12 col-lg-4 text-center text-lg-left">
					<?php if ( has_nav_menu( 'support' ) ) :
						$menu = get_term( $locations[ 'support' ], 'nav_menu' ); ?>

						<nav class="support-navigation" role="navigation"
							 aria-label="<?php esc_attr_e( 'Contact and Support', 'wep' ); ?>">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'support',
								'depth'          => 1,
								'container'      => false,
								'menu_class'     => 'nav flex-column',
								'fallback_cb'    => '__return_false',
								'items_wrap'     => '<h5>' . esc_html( $menu->name ) . '</h5><ul id="%1$s" class="%2$s">%3$s</ul>',
								'walker'         => new Boostrap_Nav_Menu,
							) );
							?>
						</nav>
					<?php endif; ?>
				</div>
				<div class="col-12 col-lg-4 text-center text-lg-left">
					<h5><?php _e( 'Connect', 'wep' ) ?></h5>
					<div class="social">
						<?php if ( ! empty( Wep_Theme::$options[ 'facebook' ] ) ) : ?>
							<a href="<?php echo Wep_Theme::$options[ 'facebook' ] ?>"><i
										class="fa fa-facebook-official fa-2x"></i></a>
						<?php endif; ?>
						<?php if ( ! empty( Wep_Theme::$options[ 'twitter' ] ) ) : ?>
							<a href="<?php echo Wep_Theme::$options[ 'twitter' ] ?>"><i class="fa fa-twitter fa-2x"></i></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-12 col-lg-4 text-center text-lg-left">
					<h5><?php _e( 'Newsletter', 'wep' ) ?></h5>
					<?php

					if ( class_exists( '\MailPoet\Form\Widget' ) ) {
                      $form_widget = new \MailPoet\Form\Widget();
                      echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));
					}

					?>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center text-lg-left">
					Copyright &copy; <?php echo date( 'Y' ) ?> &ndash; WePROTECT
				</div>
			</div>
		</div>
	</div>
</footer>
</div>
<script><!--
	document.body.className = document.body.className.replace('no-js', 'js');
	//--></script>
<?php wp_footer(); ?>

</body>
</html>
