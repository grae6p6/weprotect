<?php

/**
 * Content block template - Image banner or colour with title
 */

global $heading, $button, $title, $shortcode;

// Block image
$css = [];
$style = null;
$image = get_field( 'image' );
if( $image ) {
	$css[] = 'background-image:url(' . $image['sizes']['large'] . ')';
}

// Block colours
$bg_colour = get_field( 'bg_colour' );
if( $bg_colour ) {
	$css[] = 'background-color:' . $bg_colour;
}
$colour = get_field( 'colour' );
if( $colour ) {
	$css[] = 'color:' . $colour;
}

// Block style
if( count( $css ) ) {
	$style = ' style="' . implode( ';', $css ) . '"';
}

?>
<div class="block block-image"<?php echo $style ?>>
	<?php wep_edit_link( get_the_ID() ); ?>
	<?php if( $title || $button || ( get_the_content() != '' ) ) : ?>
    <div class="container p-0">
		<header class="article">
			<?php if( $title ) :
				printf( '<%s>%s</%s>', $heading, $title, $heading );
			endif; ?>
            <?php the_content() ?>
			<?php echo $button ?>
		</header>
	</div>
	<?php endif;
	if( $shortcode ) :
		echo do_shortcode( $shortcode );
	endif; ?>
</div>