<?php

/**
 * Content block template - Three sections of text
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
<div class="block block-cta3"<?php echo $style ?>>
	<?php wep_edit_link( get_the_ID() ); ?>
	<?php if( $title || $button || ( get_the_content() != '' ) ) : ?>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12">
				<?php if( $title ) :
					printf( '<%s>%s</%s>', $heading, $title, $heading );
				endif; ?>
				<?php the_content() ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-4">
				<div class="block light">
					<?php the_field('section_1' ) ?>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="block light">
					<?php the_field('section_2' ) ?>
				</div>
			</div>
			<div class="col-12 col-lg-4">
				<div class="block light">
					<?php the_field('section_3' ) ?>
				</div>
			</div>
		</div>
        <?php if( $button ) : ?>
        <div class="row">
            <div class="col-12">
                <?php echo $button ?>
            </div>
        </div>
        <?php endif; ?>
	</div>
	<?php endif;
	if( $shortcode ) :
		do_shortcode( $shortcode );
	endif; ?>
</div>