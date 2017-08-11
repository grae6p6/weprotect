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
<div class="block block-sections"<?php echo $style ?>>
	<?php wep_edit_link( get_the_ID() ); ?>
	<div class="container px-5">
		<?php if( $title || ( get_the_content() != '' ) ) : ?>
		<div class="row align-items-center">
			<div class="col-12">
				<?php if( $title ) :
					printf( '<%s>%s</%s>', $heading, $title, $heading );
				endif; ?>
				<?php the_content() ?>
			</div>
		</div>
		<?php endif; ?>
		<div class="row has-blocks">
			<?php
            
            if( !empty( get_field( 'section_4' ) ) )
                $count = 4;
            elseif( !empty( get_field( 'section_3' ) ) )
                $count = 3;
            elseif( !empty( get_field( 'section_2' ) ) )
                $count = 2;

            $col_md = ( $count == 4 ? 24 : 12 ) / $count;
            $col_xl = 12 / $count;
            
            for( $i = 1; $i <= $count; $i++ ) : ?>
            <div class="col-12 col-md-<?php echo $col_md ?> col-xl-<?php echo $col_xl ?>">
				<div class="block light">
					<?php the_field( 'section_' . $i ) ?>
				</div>
			</div>
            <?php endfor; ?>
		</div>
        <?php if( $button ) : ?>
        <div class="row">
            <div class="col-12">
                <?php echo $button ?>
            </div>
        </div>
        <?php endif; ?>
	</div>
	<?php if( $shortcode ) :
		do_shortcode( $shortcode );
	endif; ?>
</div>