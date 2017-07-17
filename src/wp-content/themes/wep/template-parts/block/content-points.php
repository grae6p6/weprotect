<?php

/**
 * Content block template - Three points
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
<div class="block block-point"<?php echo $style ?>>
	<div class="container">
		<?php wep_edit_link( get_the_ID() ); ?>
		<div class="row align-items-center">
			<div class="col-12">
				<?php if( get_field( 'title' ) ) :
					printf( '<%s>%s</%s>', $heading, get_field( 'title' ), $heading );
				endif; ?>
			    <?php the_content() ?>
		    </div>
	    </div>
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="block">
                    <div class="point text-center text-lg-left">1</div>
                    <?php the_field('section_1' ) ?>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="block">
                    <div class="point text-center text-lg-left">2</div>
                    <?php the_field('section_2' ) ?>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="block">
                    <div class="point text-center text-lg-left">3</div>
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
</div>