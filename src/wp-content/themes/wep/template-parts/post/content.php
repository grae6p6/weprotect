<?php
/**
 * Template part for displaying posts
 */

global $post;

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php

	$categories = $post->post_category;
	$back_url = '';
	if( count( $categories ) ) {
		$back_url = esc_url( get_category_link( $categories[0] ) );
		$cat = get_category( $categories[0] );
	}
	
	if( empty( $back_url ) ) {
		$back_url = esc_url( home_url() );
	}

	?>
        <div class="container">
			<?php if( is_single() and has_post_thumbnail() ) : ?>
			<div class="row">
				<div class="col">
					<div style="height:35vh;background-image:url(<?php echo get_the_post_thumbnail_url() ?>);background-size:cover;"></div>
				</div>
			</div>
			<?php endif; ?>
			<?php if( is_single() ) : ?>
			<div class="row my-4">
			<?php else : ?>
			<div class="row mb-4">
			<?php endif; ?>
				<div class="col">
					<?php

					if ( is_single() ) {
						the_title( '<h1>', '</h1>' );
					} elseif ( is_front_page() && is_home() ) {
						the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
					} else {
						wep_edit_link();
						the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
					}

					if ( 'post' === get_post_type() ) : ?>
						<?php if ( is_single() ) : ?>
						<div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start">
							<div class="p-2"><?php echo get_avatar( $post->post_author ) ?></div>
							<div class="p-2"><?php echo wep_posted_by() . wep_posted_on() ?></div>
						</div>
						<?php else :
							echo wep_posted_on();
						endif;
					endif; ?>
					<?php if ( is_single() ) :
						the_content( sprintf(
							__( 'Continue reading<span class="sr-only"> "%s"</span>', 'wep' ),
							get_the_title()
						) );
					else :
						the_excerpt();
						if( $cat->slug == 'events' ) : ?>
						<button class="btn btn-primary"><?php _e( 'Register', 'wep' ) ?></button>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<?php if ( is_single() ) : ?>
				<div class="col-12 col-md-1 text-right">
					<div class="d-flex flex-row flex-md-column justify-content-center">
						<div class="p-sm-4 px-md-0 py-md-2">
							<a href="<?php echo $back_url ?>" alt="<?php _e( 'Go back', 'wep' ) ?>"><i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i></a>
						</div>
						<div class="p-sm-4 px-md-0 py-md-2">
							<a href="#" alt="<?php _e( 'Print this page', 'wep' ) ?>"><i class="fa fa-print fa-3x" aria-hidden="true"></i></a>
						</div>
						<div class="p-sm-4 px-md-0 py-md-2">
							<a href="#" alt="<?php _e( 'E-mail this page', 'wep' ) ?>"><i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i></a>
						</div>
						<div class="p-sm-4 px-md-0 py-md-2">
							<a href="#" alt="<?php _e( 'Share this page', 'wep' ) ?>"><i class="fa fa-share fa-3x" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
        </div>
	<?php

	// Content blocks
	if( is_single() ) {
		get_template_part( 'template-parts/block' );
	}

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
