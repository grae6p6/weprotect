<?php

global $heading, $button;

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
<div class="block"<?php echo $style ?>>
	<div class="container">
		<?php wep_edit_link( get_the_ID() ); ?>
		<div class="row align-items-center">
			<div class="col-12">
				<<?php echo $heading ?>><?php the_title() ?></<?php echo $heading ?>>
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
</div>