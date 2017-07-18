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

		echo __( 'Widget functionality to be implemented.', 'wep' );
		var_dump($instance);

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

		$results = [
			'gb' => 'United Kingdom',
			'us' => 'United States',
			'ca' => 'Canada',
			'de' => 'Germany'
		];

		?>
        <div class="container members">
            <div class="row">
                <div class="col">
                    <button>Countries</button>
                    <button>Organisations</button>
                    <button>Industries</button>
                </div>
            </div>
            <div class="row">
                <?php foreach( $results as $key => $val ) : ?>
                    <div class="col-4 col-md-3 text-center entry">
                        <img src="<?php echo get_template_directory_uri() . '/flags/' . $key . '.svg' ?>" alt="<?php echo $val ?>">
                        <strong><?php echo $val ?></strong>
                    </div>
                <?php endforeach; ?>
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