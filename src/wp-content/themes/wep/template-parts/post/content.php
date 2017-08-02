<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php

	if( get_the_content() != '' ) : ?>
        <div class="container">
            <div class="col">
				<?php if( is_single() and has_post_thumbnail() ) : ?>
				<div style="height:30vh;background-image:url(<?php echo get_the_post_thumbnail_url() ?>);background-size:cover;"></div>
				<?php endif; ?>
                <header class="entry-header" style="padding-top:1.5em;">
		            <?php
		            
		            if ( is_single() ) {
			            the_title( '<h1>', '</h1>' );
		            } elseif ( is_front_page() && is_home() ) {
			            the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		            } else {
			            the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		            }

					if ( 'post' === get_post_type() ) {
			            echo '<div class="entry-meta">';
			            if ( is_single() ) {
				            wep_posted_on();
			            } else {
				            echo wep_time_link();
				            wep_edit_link();
			            };
			            echo '</div>';
		            };
		            ?>
                </header>
				<?php the_content( sprintf(
					__( 'Continue reading<span class="sr-only"> "%s"</span>', 'wep' ),
					get_the_title()
				) ); ?>
            </div>
        </div>
	<?php endif;

	// Content blocks
	get_template_part( 'template-parts/block' );

    wp_link_pages( array(
        'before'      => '<div class="container"><div class="row"><div class="col">' . __( 'Pages:', 'wep' ),
        'after'       => '</div></div></div>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
    ) );

	if ( is_single() ) {
		wep_entry_footer();
	}
	?>
</article>
