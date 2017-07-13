<?php

/**
 * Content block template - CTA with optional right side image
 */

global $heading;

// Block image
$css = $style = null;
$image = get_field( 'image' );

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
<div class="block block-cta1"<?php echo $style ?>>
	<div class="container">
		<?php wep_edit_link( get_the_ID() ); ?>
		<div class="row align-items-center">
			<div class="col">
				<<?php echo $heading ?>><?php the_title() ?></<?php echo $heading ?>>
				<?php the_content() ?>
			    <?php echo $button ?>
			</div>
			<?php if( $image ) : ?>
            <div class="col-12 col-md-6 col-lg-4">
                <img src="<?php echo $image['sizes']['large'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
            </div>
            <?php endif; ?>
		</div>
	</div>
</div>