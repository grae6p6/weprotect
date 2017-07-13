<?php

if ( ! function_exists( 'wep_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function wep_posted_on() {

		// Get the author name; wrap it in a link.
		$byline = sprintf(
		/* translators: %s: post author */
			__( 'by %s', 'wep' ),
			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a></span>'
		);

		// Finally, let's write all of this to the page.
		echo '<span class="posted-on">' . wep_time_link() . '</span><span class="byline"> ' . $byline . '</span>';
	}
endif;


if ( ! function_exists( 'wep_time_link' ) ) :
	/**
	 * Gets a nicely formatted string for the published date.
	 */
	function wep_time_link() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
		}

		$time_string = sprintf( $time_string,
			get_the_date( DATE_W3C ),
			get_the_date(),
			get_the_modified_date( DATE_W3C ),
			get_the_modified_date()
		);

		// Wrap the time string in a link, and preface it with 'Posted on'.
		return sprintf(
		/* translators: %s: post date */
			__( '<span class="sr-only">Posted on</span> %s', 'wep' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
	}
endif;


if ( ! function_exists( 'wep_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function wep_entry_footer() {

		/* translators: used between list items, there is a space after the comma */
		$separate_meta = __( ', ', 'wep' );

		// Get Categories for posts.
		$categories_list = get_the_category_list( $separate_meta );

		// Get Tags for posts.
		$tags_list = get_the_tag_list( '', $separate_meta );

		// We don't want to output .entry-footer if it will be empty, so make sure its not.
		if ( ( /*( wep_categorized_blog() && $categories_list ) ||*/ $tags_list ) || get_edit_post_link() ) {

			echo '<footer class="article">';

			if ( 'post' === get_post_type() ) {
				if ( /*( $categories_list && wep_categorized_blog() ) ||*/ $tags_list ) {
					echo '<span class="cat-tags-links">';

					// Make sure there's more than one category before displaying.
					if ( $categories_list && wep_categorized_blog() ) {
						echo '<span class="cat-links">' . wep_get_svg( array( 'icon' => 'folder-open' ) ) . '<span class="sr-only">' . __( 'Categories', 'wep' ) . '</span>' . $categories_list . '</span>';
					}

					if ( $tags_list ) {
						echo '<span class="tags-links">' . wep_get_svg( array( 'icon' => 'hashtag' ) ) . '<span class="sr-only">' . __( 'Tags', 'wep' ) . '</span>' . $tags_list . '</span>';
					}

					echo '</span>';
				}
			}

			wep_edit_link();

			echo '</footer>';
		}
	}
endif;

if ( ! function_exists( 'wep_edit_link' ) ) :
	/**
	 * Returns an accessibility-friendly link to edit a post or page.
	 *
	 * This also gives us a little context about what exactly we're editing
	 * (post or page?) so that users understand a bit more where they are in terms
	 * of the template hierarchy and their content. Helpful when/if the single-page
	 * layout with multiple posts/pages shown gets confusing.
	 */
	function wep_edit_link() {
		edit_post_link(
			sprintf(
				__( 'Edit<span class="sr-only"> "%s"</span>', 'wep' ),
				get_the_title()
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;