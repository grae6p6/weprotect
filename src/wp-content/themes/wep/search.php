<?php
/**
 * The template for displaying search page
 * Template Name: Search Page
 */

global $query_string;

$query_args   = explode( "&", $query_string );
$search_query = array();

if ( strlen( $query_string ) > 0 ) {
	foreach ( $query_args as $key => $string ) {
		$query_split                       = explode( "=", $string );
		$search_query[ $query_split[ 0 ] ] = urldecode( $query_split[ 1 ] );
	} // foreach
} //if

$search = new WP_Query( $search_query );

get_header();

?>

	<main id="main" class="body" role="main">
		<div class="block block-cta">
			<div class="container px-5">
				<div class="row align-items-center">
					<div class="col">
						<?php if ( have_posts() ) : ?>
							<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wep' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
						<?php else : ?>
							<h1 class="page-title"><?php _e( 'Nothing Found', 'wep' ); ?></h1>
						<?php endif; ?>
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col col-md-3 pt-5 filter">
					<div>Filter results</div>
					<form class="form mt-5" method="post">
						<div class="form-group">
							<h5>Type</h5>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">
									Check me out
								</label>
							</div>
						</div>
						<div class="form-group">
							<h5>Country</h5>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">
									Check me out
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">
									Check me out
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">
									Check me out
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">
									Check me out
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">
									Check me out
								</label>
							</div>
							<div class="form-check">
								<label class="form-check-label">
									<input type="checkbox" class="form-check-input">
									Check me out
								</label>
							</div>
						</div>
						<div class="form-group">
							<h5>Date range</h5>
							<input name="text" class="form-control">
							<input name="text" class="form-control">
						</div>
					</form>
				</div>
				<div class="col col-md-9 pt-5 content">
					<div class="d-flex align-items-start mb-5">
						<div class="pl-2"><?php echo count( $posts ) ?> result(s)</div>
						<div class="ml-auto pr-2">
							<form class="form">
								<select>
									<option>Option</option>
								</select>
							</form>
						</div>
					</div>
					<?php
					if ( have_posts() ) :
						while( have_posts() ) : the_post();

							get_template_part( 'template-parts/post/content' );

							// If comments are open or we have at least one comment, load up the comment template.
							//if ( comments_open() || get_comments_number() ) :
							//    comments_template();
							//endif;

						endwhile; // End of the loop.

						the_posts_pagination( array(
							'prev_text'          => '<i class="fa fa-arrow-left" aria=hidden="true"></i> <span class="sr-only">' . __( 'Previous page', 'wep' ) . '</span>',
							'next_text'          => '<span class="sr-only">' . __( 'Next page', 'wep' ) . '</span> <i class="fa fa-arrow-right" aria=hidden="true"></i>',
							'before_page_number' => '<span class="sr-only">' . __( 'Page', 'wep' ) . ' </span>',
						) );
					else : ?>

						<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wep' ); ?></p>
						<?php
					endif;
					?>
				</div>
			</div>
		</div>
	</main>

<?php get_footer();
