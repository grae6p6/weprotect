<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

	<main id="main" class="body" role="main">
		<div class="container error404">
			<div class="row">
				<div class="col-12 text-center">
					<h1 class="page-title"><?php _e( 'Page not found.', 'wep' ); ?></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'wep' ); ?></p>

					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</main>

<?php get_footer();
