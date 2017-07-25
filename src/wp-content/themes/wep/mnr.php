<?php

/*
Template name: Model National Response
 */

global $post;

$section_contents = null;

get_header(); ?>

	<main id="main" class="body" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php get_template_part( 'template-parts/block' ) ?>
			<div class="mnr">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-3 menu">
                            <?php

                            $page_introduction = get_page_by_path( 'the-model-national-response' );

                            // Get MNR groups
                            $groups = get_posts([
                                'post_type' => 'page',
                                'post_status' => 'publish',
                                'post_parent' => (int)$page_introduction->ID,
                                'numberposts' => -1,
                                'order' => 'ASC',
                                'orderby' => 'menu_order'
                            ]);

                            if( $groups ) :
                                
                                // Add default MNR as the introduction.
	                            array_unshift( $groups, $page_introduction );
                                foreach( $groups as $i => $group ) :

                                    // Get MNR group sections
		                            $sections = get_posts([
			                            'post_type' => 'mnr',
			                            'post_status' => 'publish',
			                            'numberposts' => -1,
			                            'order' => 'ASC',
			                            'orderby' => 'menu_order',
			                            'meta_key' => 'group',
			                            'meta_value' => serialize( array( (string)$group->ID ) ) // Thats a bit nuts??
		                            ]);

                                    // Is group current page
                                    $is_active = ( ( '/' . get_page_uri( $group->ID ) . '/' === $_SERVER['REQUEST_URI'] ) ? true : false );

                                    ?>
                                    <div class="entry<?php echo ( count( $sections ) ? ' expandable' : '' ) ?><?php echo ( $is_active ? ' active' : '' ) ?>">
                                        <div class="container-flex">
                                            <div class="row align-items-center">
                                                <div class="col-1 col-lg-3">
                                                    <img src="/wp-content/themes/wep/screenshot.png">
                                                </div>
                                                <div class="col">
                                                    <a href="<?php echo get_the_permalink( $group->ID ); ?>">
                                                        <span><?php echo ( !$i ? __( 'Introduction', 'wep' ) : get_the_title( $group->ID ) ); ?></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php

                                            // Group section links
                                            if( $sections ) :
	                                            $section_contents = '';
                                                foreach( $sections as $section ) : ?>
                                                    <div class="row align-items-center">
                                                        <div class="col-1 col-lg-3">
                                                            <?php echo $section->menu_order ?>
                                                        </div>
                                                        <div class="col">
                                                            <a href="<?php echo get_the_permalink( $group->ID ); ?>#<?php echo $section->post_name; ?>">
                                                                <span><?php echo get_the_title( $section->ID ); ?></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php endforeach;
                                            endif;
                                            ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
							<!--<div class="entry">Introduction</div>
							<div class="entry">Enablers</div>
							<div class="entry expandable active">
                                <div class="container-flex">
                                    <div class="row align-items-center">
                                        <div class="col-1 col-lg-3">
                                            <img src="/wp-content/themes/wep/screenshot.png">
                                        </div>
                                        <div class="col">
                                            <span>Policy and Governance</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="entry expandable">Criminal Justice</div>
							<div class="entry expandable">Societal</div>
							<div class="entry expandable">Industry</div>
							<div class="entry expandable">Media and communications</div>
							<div class="entry">Download full MNR document</div>-->
						</div>
						<div class="col-12 col-md-9 content">
                            <?php if( $post->ID === $page_introduction->ID ) : ?>
                                <h1><?php _e( 'Introduction', 'wep' ) ?></h1>
                            <?php else: ?>
                                <?php the_title( '<h1>', '</h1>') ?>
                            <?php endif;

                            $sections = get_posts([
	                            'post_type' => 'mnr',
	                            'post_status' => 'publish',
	                            'numberposts' => -1,
	                            'order' => 'ASC',
	                            'orderby' => 'menu_order',
	                            'meta_key' => 'group',
	                            'meta_value' => serialize( array( (string)$post->ID ) ) // Thats a bit nuts??
                            ]);

                            // Section links
                            if( $sections ) : ?>
                            <div class="links">
                            <?php foreach( $sections as $post ) : setup_postdata( $post ); ?>
                                <div class="entry">
                                    <div><?php echo $post->menu_order ?></div>
                                    <div>
                                        <h3><a href="#<?php echo $post->post_name ?>"><?php the_title() ?></a></h3>
                                        <?php the_excerpt() ?>
                                    </div>
                                </div>
                            <?php wp_reset_postdata(); endforeach; ?>
                            </div>
                            <?php endif; ?>
                            <div class="outcome"><h5><?php _e( 'Outcomes', 'wep' ) ?></h5><?php the_content() ?></div>
							<?php

                            // Section contents
							if( $sections ) :
								foreach( $sections as $post ) : setup_postdata( $post ); ?>
                                    <section id="<?php echo $post->post_name ?>"><?php the_content() ?></section>
                                <?php wp_reset_postdata(); endforeach;
							endif;

							?>
                        </div>
					</div>
				</div>
			</div>
			<?php wp_link_pages( array(
				'before' => '<div class="page-links"><div class="row"><div class="col">' . __( 'Pages:', 'wep' ),
				'after'  => '</div></div></div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</article>
		<?php endwhile; ?>
	</main>

<?php get_footer();