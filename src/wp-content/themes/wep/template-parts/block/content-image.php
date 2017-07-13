<?php

/**
 * Content block template - Image banner or colour with title
 */

global $heading;

// Block image
$css = $style = null;
$image = get_field( 'image' );
if( $image ) {
	$css = 'background-image:url(' . $image['sizes']['large'] . ')';
}

// Block colour
$colour = get_field( 'colour' );
if( $colour ) {
	$css = 'background-color:' . $colour;
}

// Block style
if( $css ) {
	$style = ' style="' . $css . '"';
}

?>
<div class="block block-image"<?php echo $style ?>>
    <div class="container">
	    <?php wep_edit_link( get_the_ID() ); ?>
		<header class="article">
			<?php the_title( '<' . $heading . '>', '</' . $heading . '>' ); ?>
			<?php echo $button ?>
		</header>
	</div>
</div>