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
<div class="block block-related"<?php echo $style ?>>
	<?php wep_edit_link( get_the_ID() ); ?>
	<?php if( $title || $button || ( get_the_content() != '' ) ) : ?>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php if( $title ) :
					printf( '<%s>%s</%s>', $heading, $title, $heading );
				endif; ?>
				<?php the_content() ?>
			</div>
		</div>
		<?php

		$related = get_field( 'related_news' );
		if( $related ) : ?>
			<div class="row">
				<?php

				$current = get_post();
				foreach( $related as $post ) :
					setup_postdata( $post );
					get_template_part( 'template-parts/block/related' );
				endforeach;
				setup_postdata( $current );

				?>
			</div>
			<?php if( $button ) : ?>
				<div class="row">
					<div class="col-12">
						<?php echo $button ?>
					</div>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
	<?php endif;
	if( $shortcode ) :
		echo do_shortcode( $shortcode );
	endif; ?>
</div>