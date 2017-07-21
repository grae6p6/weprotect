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

		// Default group
		$group = $instance['group'];

		// TODO: Content to be based on member records in the database
		//require_once 'countries.php';

        $members = get_posts([
            'post_type' => 'member',
            'post_status' => 'publish',
            'order' => 'ASC',
            'orderby' => 'title',
            'numberposts' => -1
        ]);
        if( $members ) : ?>
        <div class="flex-container">
            <div class="row">
                <div class="col-12 col-md-8 text-center text-md-left buttons">
                    <button data-group="country"<?php echo ( $group == 'country' ? ' class="active"' : '' ) ?>>
                        <?php _e( 'Countries', 'wep' ) ?>
                    </button>
                    <button data-group="organisation"<?php echo ( $group == 'organisation' ? ' class="active"' : '' ) ?>>
                        <?php _e( 'Organisations', 'wep' ) ?>
                    </button>
                    <button data-group="industry"<?php echo ( $group == 'industry' ? ' class="active"' : '' ) ?>>
                        <?php _e( 'Industries', 'wep' ) ?>
                    </button>
                </div>
                <div class="col-12 col-md-4 text-center text-md-right buttons">
                    <button data-display="map" class="active">
                        <?php _e( 'Map', 'wep' ) ?>
                    </button>
                    <button data-display="list">
                        <?php _e( 'List', 'wep' ) ?>
                    </button>
                </div>
            </div>
            <div class="row members list hide">
	            <?php foreach( $members as $member ) :
		            $criticality = get_field( 'criticality', $member->ID );
		            switch( $criticality ) {
			            case 2:
				            $criticality = __( 'High', 'wep' );
				            break;
			            case 1:
				            $criticality = __( 'Medium', 'wep' );
				            break;
			            default:
				            $criticality = __( 'Low', 'wep' );
				            break;
		            }
		            /*<div class="sr-only" data-type="engagement"><?php echo get_field( 'engagement', $member->ID ) ?></div>
					<div class="sr-only" data-type="action"><?php echo get_field( 'action', $member->ID ) ?></div>*/
		            ?>
                    <div class="col-6 col-sm-4 col-md-3 entry <?php echo get_field( 'group', $member->ID ) ?>">
                        <div>
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#memberModal">
					            <?php if( get_field( 'group', $member->ID ) == 'country' ) : ?>
                                    <img src="<?php echo get_template_directory_uri() . '/flags/' . strtolower( get_field( 'country', $member->ID ) ) . '.svg' ?>" alt="<?php echo get_the_title( $member->ID ) ?>">
					            <?php endif; ?>
                                <strong data-type="name"><?php echo get_the_title( $member->ID ) ?></strong>
                                <div class="sr-only" data-type="sign-up">
                                    <?php echo get_field( 'sign_up', $member->ID ) ?>
                                </div>
                                <div class="sr-only" data-type="criticality">
                                    <?php echo $criticality ?>
                                </div>
                                <div class="sr-only" data-type="minister">
                                    <?php echo get_field( 'minister', $member->ID ) ?>
                                </div>
                            </a>
                        </div>
                    </div>
	            <?php endforeach; ?>
            </div>
            <div class="row members map">
                <div class="col">
                    <div id="jqvmap"></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
            <div class="modal-dialog vertical-align-center" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="memberModalLabel"><?php _e( 'Member information', 'wep' ) ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div data-name>
                            <h6>Name</h6>
                            <p>&nbsp;</p>
                        </div>
                        <div data-minister>
                            <hr>
                            <h6>Minister</h6>
                            <p>&nbsp;</p>
                        </div>
                        <div data-criticality>
                            <hr>
                            <h6>Criticality</h6>
                            <p>&nbsp;</p>
                        </div>
                        <div data-sign-up>
                            <hr>
                            <h6>Sign-up</h6>
                            <p>&nbsp;</p>
                        </div>
                        <!--<div data-engagement>
                            <hr>
                            <h6>Engagement</h6>
                            <p>&nbsp;</p>
                        </div>
                        <div data-action>
                            <hr>
                            <h6>Action</h6>
                            <p>&nbsp;</p>
                        </div>-->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">
                            <?php _e( 'Close' , 'wep' ) ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;

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