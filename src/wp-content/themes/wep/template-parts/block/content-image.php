<?php

/**
 * Content block template - Image banner or colour with title
 */

global $heading, $button;

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
    <div class="container">
	    <?php wep_edit_link( get_the_ID() ); ?>
		<header class="article">
			<?php if( get_field( 'title' ) ) :
				printf( '<%s>%s</%s>', $heading, get_field( 'title' ), $heading );
			endif; ?>
			<?php echo $button ?>
		</header>
	</div>
</div>