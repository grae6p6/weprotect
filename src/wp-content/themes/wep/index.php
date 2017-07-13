<?php

/**
 * Template index
 */

get_header();

?>
<!--<div class="container">
    <div class="row">
        <div class="col">
	        <?php if ( is_home() && !is_front_page() ) : ?>
                <h1><?php single_post_title(); ?></h1>
	        <?php else : ?>
                <h2><?php _e( 'Posts', 'wep' ); ?></h2>
	        <?php endif; ?>
        </div>
    </div>
</div>-->
<main id="main" class="body" role="main">
<?php

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/post/content', get_post_format() );
    endwhile;

    the_posts_pagination( array(
        'prev_text' => '<span class="sr-only">' . __( 'Previous page', 'wep' ) . '</span>',
        'next_text' => '<span class="sr-only">' . __( 'Next page', 'wep' ) . '</span>',
        'before_page_number' => '<span class="meta-nav sr-only">' . __( 'Page', 'wep' ) . ' </span>',
    ) );
else :
    get_template_part( 'template-parts/post/content', 'none' );
endif;

?>
</main>

<?php get_footer();
