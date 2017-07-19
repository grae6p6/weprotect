<?php

/**
 * Latest news, events, case studies feed
 */
class Wep_Widget_Latest extends WP_Widget {

	function __construct() {
		parent::__construct(
			'Wep_Widget_Latest',
			__('WEP Latest', 'wep'),
			array(
				'description' => __( 'Latest news, events, or case studies list.', 'wep' ),
			)
		);
	}

	/**
	 * Widget front-end
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		//var_dump($instance);

        ?>
        <div class="flex-container">
            <div class="row">
                <div class="col">
                    <?php _e( 'Widget functionality to be implemented.', 'wep' ); ?>
                </div>
            </div>
        </div>
        <?php

		echo $args['after_widget'];
	}

	/**
	 * Widget back-end
	 *
	 * @param array $instance
	 */
	public function form( $instance ) {
		if( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = __( 'New title', 'wep' );
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

	/**
	 * Updating widget replacing old instances with new
	 *
	 * @param array $new_instance
	 * @param array $old_instance
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}

/**
 * Latest news, events, case studies feed
 */
class Wep_Widget_Members_List extends WP_Widget {

	function __construct() {
		parent::__construct(
			'Wep_Widget_Members_List',
			__('WEP Members list', 'wep'),
			array(
				'description' => __( 'Latest news, events, or case studies list.', 'wep' ),
			)
		);
	}

	/**
	 * Widget front-end
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		//echo __( 'Widget functionality to be implemented.', 'wep' );
		//var_dump($instance);

		$type = $instance['default'];

		// TODO: Content to be based on member records in the database
		require 'countries.php';

		?>
        <div class="flex-container">
            <div class="row">
                <div class="col buttons">
                    <button data-group="country"><?php _e( 'Countries', 'wep' ) ?></button>
                    <button data-group="organisation"><?php _e( 'Organisations', 'wep' ) ?></button>
                    <button data-group="industry"><?php _e( 'Industries', 'wep' ) ?></button>
                    <div class="sr-only"></div>
                </div>
            </div>
            <div class="row members">
                <?php foreach( $countries as $key => $val ) : ?>
                    <div class="col-6 col-sm-4 col-md-3 entry country">
                        <div>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#memberModal" data-name="<?php echo $val ?>">
                                <img src="<?php echo get_template_directory_uri() . '/flags/' . strtolower( $key ) . '.svg' ?>" alt="<?php echo $val ?>">
                                <strong><?php echo $val ?></strong>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="memberModalLabel"><?php _e( 'Member details' , 'wep' ) ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?php _e( 'Close' , 'wep' ) ?>">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span data-name>&nbsp;</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php _e( 'Close' , 'wep' ) ?></button>
                </div>
            </div>
        </div>
        </div>
        <?php

		echo $args['after_widget'];
	}

	/**
	 * Widget back-end
	 *
	 * @param array $instance
	 */
	public function form( $instance ) {
		if( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = __( 'New title', 'wep' );
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

	/**
	 * Updating widget replacing old instances with new
	 *
	 * @param array $new_instance
	 * @param array $old_instance
	 *
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}