<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if( get_the_content() != '' ) : ?>
    <div class="block block-cta">
        <div class="container px-5">
            <div class="row align-items-center">
                <div class="col">
                    <h1><?php the_title() ?></h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
			        <?php the_content() ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php

    // Content blocks
    get_template_part( 'template-parts/block' );

    wp_link_pages( array(
        'before' => '<div class="page-links"><div class="row"><div class="col">' . __( 'Pages:', 'wep' ),
        'after'  => '</div></div></div>',
        'link_before' => '<span class="page-number">',
        'link_after'  => '</span>',
    ) );
    
    ?>
</article>