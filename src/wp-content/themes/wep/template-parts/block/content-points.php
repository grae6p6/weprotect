<?php

/**
 * Content block template - Three points
 */

global $heading, $button, $title, $shortcode;

// Block image
$css   = [];
$attributes = null;
$image = get_field( 'image' );
if ( $image ) {
	$css[] = 'background-image:url(' . $image[ 'sizes' ][ 'block-image' ] . ')';
}

// Block colours
$bg_colour = get_field( 'bg_colour' );
if ( $bg_colour ) {
	$css[] = 'background-color:' . $bg_colour;
}
$colour = get_field( 'colour' );
if ( $colour ) {
	$css[] = 'color:' . $colour;
}

// Block style
if ( count( $css ) ) {
  $attributes = ' style="' . implode( ';', $css ) . '"';
}

// Add retina image src
if( $image ) {
  $attributes .= ' data-2x="' . $image[ 'sizes' ][ 'block-image-2x' ] . '"';
}

?>
<div class="block block-point"<?php echo $attributes ?>>
	<?php wep_edit_link( get_the_ID() ); ?>
	<?php if ( $title || $button || ( get_the_content() != '' ) ) : ?>
		<div class="container px-5">
			<div class="row align-items-center">
				<div class="col-12">
					<?php if ( get_field( 'title' ) ) :
						printf( '<%s>%s</%s>', $heading, $title, $heading );
					endif; ?>
					<?php the_content() ?>
				</div>
			</div>
			<div class="row">
				<?php

                $count = 1;
				if ( ! empty( get_field( 'section_4' ) ) ) {
					$count = 4;
				} elseif ( ! empty( get_field( 'section_3' ) ) ) {
					$count = 3;
				} elseif ( ! empty( get_field( 'section_2' ) ) ) {
					$count = 2;
				}

				$col_md = ( $count == 4 ? 24 : 12 ) / $count;
				$col_xl = 12 / $count;

				for ( $i = 1; $i <= $count; $i ++ ) : ?>
					<div class="col-12 col-md-<?php echo $col_md ?> col-lg-<?php echo $col_xl ?>">
						<div class="block">
							<div class="point text-center text-xl-left"><?php echo $i ?></div>
							<?php the_field( 'section_' . $i ) ?>
						</div>
					</div>
				<?php endfor; ?>
			</div>
			<?php if ( $button ) : ?>
				<div class="row">
					<div class="col-12">
						<?php echo $button ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	<?php endif;
	if ( $shortcode ) :
		echo do_shortcode( $shortcode );
	endif; ?>
</div>