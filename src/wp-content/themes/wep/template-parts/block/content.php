<?php

global $heading;

?>
<div class="block">
	<div class="container">
		<?php wep_edit_link( get_the_ID() ); ?>
		<div class="row align-items-center">
			<div class="col-12">
				<<?php echo $heading ?>><?php the_title() ?></<?php echo $heading ?>>
                <?php the_content() ?>
			</div>
		</div>
	    <?php if( $button ) : ?>
        <div class="row">
            <div class="col-12">
                <?php echo $button ?>
            </div>
        </div>
        <?php endif; ?>
	</div>
</div>