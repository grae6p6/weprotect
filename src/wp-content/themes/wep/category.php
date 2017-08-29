<?php
/**
 * The template for displaying categories
 */

get_header();

$cat = get_category( get_query_var( 'cat' ) );

?>

	<main id="main" class="body" role="main">
		<div class="block block-cta">
			<div class="container px-5">
				<div class="row align-items-center">
					<div class="col">
						<h1><?php single_cat_title() ?></h1>
						<?php echo category_description() ?>
					</div>
				</div>
				<!--<div class="row">
                <div class="col">
			        <form class="form" method="post">
                        <div class="form-group">
                            <div class="btn-group" role="group">
                                <input class="form-control" type="text" name="s" value="">
                                <button class="btn btn-primary"><?php _e( 'Search', 'wep' ) ?></button>
                            </div>
                        </div>

                        
                    </form>
                </div>
            </div>-->
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php if ( $cat->slug == 'case-studies' ) : ?>
					<div class="col col-md-3 pt-5 filter">
						<!--<div><?php _e( 'Filter results', 'wep' ) ?></div>-->
						<form class="form" method="post">
							<div class="form-group">
								<h5><?php _e( 'Type', 'wep' ) ?></h5>
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input">
										Option
									</label>
								</div>
							</div>
							<div class="form-group">
								<h5><?php _e( 'Country', 'wep' ) ?></h5>
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input">
										Option
									</label>
								</div>
								<div class="form-check">
									<label class="form-check-label">
										<input type="checkbox" class="form-check-input">
										Option
									</label>
								</div>
							</div>
							<div class="form-group">
								<h5><?php _e( 'Date range', 'wep' ) ?></h5>
								<input name="text" class="form-control">
								<input name="text" class="form-control">
							</div>
						</form>
					</div>
				<?php else : ?>
					<div class="col col-md-3 pt-5 pl-5 calendar">
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</div>
				<?php endif; ?>
				<div class="col col-md-9 pt-5 content">
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
						<p><?php _e( 'Sorry, there are currently no posts in this category.', 'wep' ); ?></p>
						<?php
					endif;
					?>
				</div>
			</div>
		</div>
	</main>

<?php get_footer();
