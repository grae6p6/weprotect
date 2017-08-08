<?php

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
<div class="block"<?php echo $style ?>>
	<?php wep_edit_link( get_the_ID() ); ?>
	<?php if( $title || $button || ( get_the_content() != '' ) ) : ?>
    <div class="container px-5">
		<div class="row align-items-center">
			<div class="col-12">
				<?php if( $title ) :
                printf( '<%s>%s</%s>', $heading, $title, $heading );
                endif; ?>
                <?php the_content() ?>
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
	    echo do_shortcode( $shortcode );
    endif; ?>
</div>