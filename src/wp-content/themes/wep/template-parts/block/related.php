<?php

/**
 * Template used by the "content-related" template for individual relations
 */

$has_image = has_post_thumbnail();

?>

<div class="col-12 col-lg-4 excerpt">
	<?php wep_edit_link( get_the_ID() ); ?>
	<?php if ( $has_image ) : ?>
		<?php the_post_thumbnail( 'medium' ) ?>
		<h5>
			<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
		</h5>
		<?php the_content() ?>
	<?php else : ?>
		<div class="block grey">
			<h5>
				<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
			</h5>
			<?php the_content() ?>
			<?php

			$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

			$time_string = sprintf( $time_string,
				get_the_date( DATE_W3C ),
				get_the_date(),
				get_the_modified_date( DATE_W3C ),
				get_the_modified_date()
			);

			// Wrap the time string in a link, and preface it with 'Posted on'.
			printf(
			/* translators: %s: post date */
				__( '<span class="sr-only">Posted on</span> %s', 'wep' ),
				'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
			);
			?>
		</div>
	<?php endif; ?>
</div>