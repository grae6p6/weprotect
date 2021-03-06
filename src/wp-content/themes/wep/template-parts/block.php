<?php

/**
 * Content block template
 *
 * Displays all blocks assigned to the current post/page.
 */

global $heading, $button, $title, $shortcode;

if ( function_exists( 'get_field' ) ) :
	$blocks = get_field( 'assigned_blocks' );
	if ( $blocks ) :
		$is_mnr = is_page( 'the-model-national-response' );

		// Loop blocks...
		foreach ( $blocks as $block_count => $post ) :
			setup_postdata( $post );

			// Assign heading based on block count index - Shift if MNR
			$heading = ( ( ! $block_count && ! $is_mnr ) ? 'h1' : ( $block_count < 3 ? 'h2' : 'h3' ) );

			// Linked page button
			$linked = get_field( 'linked_page' );
			$button = null;
			if ( $linked ) {
				$linked = array_pop( $linked );
				$button = '<a class="btn btn-primary" href="' . esc_url( get_the_permalink( $linked->ID ) ) . '">' .
				          ( get_field( 'button_label' ) ? : get_the_title( $linked->ID ) ) . '</a>';
			}

			// Block title
			$title = get_field( 'title' );

			// Block shortcode
			$shortcode = get_field( 'shortcode' );

			// Content block template
			$type = get_field( 'type' );
			get_template_part(
				'template-parts/block/content',
				$type
			);
		endforeach;
		wp_reset_postdata();
	else : ?>
		<?php if ( get_the_content() == '' ) : ?>
			<div class="container">
				<div class="col text-center">
					<h2><?php _e( 'Currently no content available for this page', 'wep' ) ?></h2>
					<p><?php _e( 'Content for this area has not yet been added. To be completed soon.', 'wep' ) ?></p>
				</div>
			</div>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>