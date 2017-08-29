<?php

/**
 * Latest events, case studies feed
 */
class Wep_Widget_Latest extends WP_Widget {

	function __construct() {
		parent::__construct(
			'Wep_Widget_Latest',
			__('WEP Latest', 'wep'),
			array(
				'description' => __( 'Latest posts by categories.', 'wep' ),
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
		global $post;

		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		// Get posts within the selected categories
		$posts = get_posts([
			'post_type' => 'post',
			'post_status' => 'publish',
			'category_name' => $instance['categories'],
			'order' => 'DESC',
			'orderby' => 'date',
            'numberposts' => (int)$instance['max']
		]);

		$the_ID = $post->ID;

		if( $posts ) :
			$col_md = ( ( count( $posts ) == 2 ? 12 : 24 ) / count( $posts ) ); ?>
		<div class="flex-container">
            <div class="row has-blocks">
			<?php foreach( $posts as $i => $post ) :
				setup_postdata( $post ); ?>
				<div class="col-12 col-md-<?php echo $col_md ?>">
					<?php if( has_post_thumbnail() ) : ?>
					<div class="block light" id="block-wl-<?php echo $the_ID ?>-<?php echo $i ?>"><div><img src="<?php echo get_the_post_thumbnail_url( null, 'large' ) ?>" alt="<?php the_title() ?>"></div><a href="<?php the_permalink() ?>"><h5><?php the_title() ?></h5></a><?php the_excerpt() ?></div>
					<?php else : ?>
					<div class="block light" id="block-wl-<?php echo $the_ID ?>-<?php echo $i ?>"><a href="<?php the_permalink() ?>"><h5><?php the_title() ?></h5></a><span><?php the_time( get_option( 'date_format' ) ) ?></span></div>
					<?php endif; ?>
				</div>
			<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
		<?php else: ?>
			<p><?php _e( 'No posts were found, please try later.' , 'wep' ); ?></p>
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

/**
 * Members list
 */
class Wep_Widget_Members_List extends WP_Widget {

	function __construct() {
		parent::__construct(
			'Wep_Widget_Members_List',
			__('WEP Members list', 'wep'),
			array(
				'description' => __( 'Lists all members with map and listings by group.', 'wep' ),
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
				<div class="col">
					<p><?php _e( 'Use the filters below to change which members are shown on screen.', 'wep' ); ?></p>
				</div>
			</div>
            <div class="row">
                <div class="col-12 col-lg-8 text-center text-lg-left buttons">
					<h5><?php _e( 'Display filter', 'wep' ); ?></h5>
                    <div class="btn-group" data-toggle="buttons">
						<label class="btn btn-primary active" data-group="country">
							<input type="radio" name="options" autocomplete="off"<?php echo ( $group == 'country' ? ' checked' : '' ) ?>><i class="fa fa-filter" aria-hidden="true"></i> <?php _e( 'Countries', 'wep' ) ?>
						</label>
						<label class="btn btn-primary" data-group="organisation">
							<input type="radio" name="options" autocomplete="off"<?php echo ( $group == 'organisation' ? ' checked' : '' ) ?>><i class="fa fa-filter" aria-hidden="true"></i>  <?php _e( 'Organisations', 'wep' ) ?>
						</label>
						<label class="btn btn-primary" data-group="industry">
							<input type="radio" name="options" autocomplete="off"<?php echo ( $group == 'industry' ? ' checked' : '' ) ?>><i class="fa fa-filter" aria-hidden="true"></i>  <?php _e( 'Companies', 'wep' ) ?>
						</label>
						<label class="btn btn-primary" data-group="">
							<input type="radio" name="options" autocomplete="off"<?php echo ( $group == '' ? ' checked' : '' ) ?>><i class="fa fa-globe" aria-hidden="true"></i>  <?php _e( 'All', 'wep' ) ?>
						</label>
					</div>
                </div>
                <div class="col-12 col-lg-4 text-center text-lg-right buttons">
					<h5><?php _e( 'Display type', 'wep' ); ?></h5>
                    <div class="btn-group" data-toggle="buttons">
						<label class="btn btn-primary" data-display="map">
							<input type="radio" name="options" autocomplete="off"><i class="fa fa-map" aria-hidden="true"></i> <?php _e( 'Map', 'wep' ) ?>
						</label>
						<label class="btn btn-primary active" data-display="list">
							<input type="radio" name="options" autocomplete="off" checked><i class="fa fa-th" aria-hidden="true"></i> <?php _e( 'List', 'wep' ) ?>
						</label>
					</div>
                </div>
            </div>
            <div class="row members list">
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

					$country = strtolower( get_field( 'country', $member->ID ) );

		            ?>
                    <div class="col-6 col-sm-4 col-md-3 entry <?php echo get_field( 'group', $member->ID ) ?>" data-code="<?php echo $country ?>">
						<a href="javascript:void(0)" data-toggle="modal" data-target="#memberModal">
							<div>
								<?php if( has_post_thumbnail( $member->ID ) ) : ?>
								<img src="<?php echo get_the_post_thumbnail_url( $member->ID ) ?>" alt="<?php echo get_the_title( $member->ID ) ?>">
								<?php elseif( $country ) : ?>
								<img src="<?php echo get_template_directory_uri() . '/flags/' . $country . '.svg' ?>" alt="<?php echo get_the_title( $member->ID ) ?>">
								<?php endif; ?>
								<i class="fa fa-info-circle"></i>
							</div>
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
	            <?php endforeach; ?>
            </div>
            <div class="row members map hide">
                <div class="col">
                    <div id="jqvmap"></div>
                </div>
            </div>
            <div class="row members all hide">
                <div class="col"></div>
            </div>
        </div>
        <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
            <div class="modal-dialog vertical-align-center" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="memberModalLabel"><?php _e( 'Member information', 'wep' ) ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="<?php _e( 'Close' , 'wep' ) ?>">
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
                            <h6>Office</h6>
                            <p>&nbsp;</p>
                        </div>
                        <!--<div data-criticality>
                            <hr>
                            <h6>Criticality</h6>
                            <p>&nbsp;</p>
                        </div>-->
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

/**
 * Board list
 */
class Wep_Widget_Board_List extends WP_Widget {

	function __construct() {
		parent::__construct(
			'Wep_Widget_Board_List',
			__('WEP Board list', 'wep'),
			array(
				'description' => __( 'Lists all board members.', 'wep' ),
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

        $members = get_posts([
            'post_type' => 'board',
            'post_status' => 'publish',
            'order' => 'ASC',
            'orderby' => 'menu_order',
            'numberposts' => -1
        ]);
        if( $members ) : ?>
        <div class="flex-container">
            <div class="row members list">
	            <?php foreach( $members as $member ) :
		            $criticality = get_field( 'criticality', $member->ID );

		            ?>
                    <div class="col-6 col-sm-4 col-md-3 entry <?php echo get_field( 'group', $member->ID ) ?>" data-code="board-<?php echo $member->ID ?>">
						<a href="javascript:void(0)" data-toggle="modal" data-target="#memberModal">
							<div>
								<?php if( has_post_thumbnail( $member->ID ) ) : ?>
								<img src="<?php echo get_the_post_thumbnail_url( $member->ID ) ?>" alt="<?php echo get_the_title( $member->ID ) ?>">
								<?php endif; ?>
								<i class="fa fa-info-circle"></i>
							</div>
							<strong data-type="name"><?php echo get_the_title( $member->ID ) ?></strong>
							<div class="sr-only" data-type="detail">
								<?php echo $member->post_content ?>
							</div>
						</a>
                    </div>
	            <?php endforeach; ?>
            </div>
        </div>
        <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
            <div class="modal-dialog vertical-align-center" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="memberModalLabel"><?php _e( 'Member information', 'wep' ) ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="<?php _e( 'Close' , 'wep' ) ?>">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div data-name>
                            <h6>Name</h6>
                            <p>&nbsp;</p>
                        </div>
                        <div data-detail>
                            <hr>
                            <h6>Detail</h6>
                            <p>&nbsp;</p>
                        </div>
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


/**
 * Latest news links
 */
class Wep_Widget_News_Links extends WP_Widget {

	function __construct() {
		parent::__construct(
			'Wep_Widget_News_Links',
			__('WEP News links', 'wep'),
			array(
				'description' => __( 'Latest news links.', 'wep' ),
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
		global $wpdb, $post;

		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		$max = (int)$instance['max'];

		// Get latest links
		$links = $wpdb->get_results(
			"SELECT link_url, link_name, link_description, link_updated
			FROM {$wpdb->links}
			WHERE link_visible = 'Y'
			ORDER BY link_updated DESC
			LIMIT " . $max
		);

		// Get latest posts
		$articles = get_posts([
			'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'news',
            'order' => 'DESC',
            'orderby' => 'date',
            'numberposts' => $max
        ]);

		if( $links or $articles ) :

			// Create a list of entries (links and posts) by date
			$entries = [];
			for( $i = 0; $i < max( count( $links ), count( $articles ) ); $i++ ) {
				if( count( $entries ) == $max )
					break;

				$entry = $stamp = 0;
				if( array_key_exists( $i, $links ) ) {
					$entry = 'L';
				}
				if( array_key_exists( $i, $articles ) ) {
					if( $entry == 'L' && $articles[ $i ]->post_date > $links[ $i ]->link_updated ) {
						$entry = 'P';
					}
				}

				if( $entry == 'L' ) {
					$entries[] = $links[ $i ];
				} elseif( $entry == 'P' ) {
					$entries[] = $articles[ $i ];
				}
			}

			$the_ID = $post->ID;
			
			$col_md = ( 12 / count( $entries ) );

			?>
			<div class="flex-container">
				<?php if( $max > 4 ) : /* Layout (listing) for more than 4 entries */ ?>
				<div class="row">
				<?php foreach( $entries as $link ) : ?>
					<?php if( $link->link_name ) : /* Link */ ?>
					<div class="col-4 col-md-3">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i>
					</div>
					<div class="col-8 col-md-9">
						<h5><a href="<?php echo $link->link_url ?>" target="_blank"><?php echo $link->link_name ?></a></h5>
						<p><span class="posted-on"><strong><?php echo parse_url( $link->link_url, PHP_URL_HOST ) ?></strong>&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i><br><?php echo date( get_option( 'date_format' ), strtotime( $link->link_updated ) ) ?></span></p>
						<?php if( !empty( $link->link_description ) ) : ?>
						<p><?php echo $link->link_description ?></p>
						<?php endif; ?>
					</div>
					<?php else : /* Post */ ?>
					<div class="col-4 col-md-3">
						<?php if( has_post_thumbnail( $link->ID ) ) : ?>
						<img src="<?php echo get_the_post_thumbnail_url( $link->ID, 'large' ) ?>" alt="<?php echo get_the_title( $link->ID ) ?>">
						<?php else : ?>
						<i class="fa fa-newspaper-o" aria-hidden="true"></i>
						<?php endif; ?>
					</div>
					<div class="col-8 col-md-9">
						<h5><a href="<?php echo get_the_permalink( $link->ID ) ?>"><?php echo get_the_title( $link->ID ) ?></a></h5>
						<span class="posted-on"><?php echo date( get_option( 'date_format' ), strtotime( $link->post_date ) ) ?></span>
						<?php if( $link->post_content != '' ) : ?>
						<p><?php echo get_the_excerpt( $link->ID ) ?></p>
						<?php endif; ?>
					</div>
					<?php endif; ?>
				<?php endforeach; ?>
				</div>
			<?php else : /* Default (blocks) layout */ ?>
				<div class="row has-blocks">
				<?php foreach( $entries as $i => $link ) : ?>
					<?php if( $link->link_name ) : /* Link */ ?>
					<div class="col-6 col-md-<?php echo $col_md ?>">
						<div class="block light" id="block-wnl-<?php echo $the_ID ?>-<?php echo $i ?>">
							<h5><a href="<?php echo $link->link_url ?>" target="_blank"><?php echo $link->link_name ?></a></h5>
							<?php if( !empty( $link->link_description ) ) : ?>
							<p><?php echo $link->link_description ?></p>
							<?php endif; ?>
							<p><span class="posted-on"><strong><?php echo parse_url( $link->link_url, PHP_URL_HOST ) ?></strong>&nbsp;<i class="fa fa-external-link" aria-hidden="true"></i><br><?php echo date( get_option( 'date_format' ), strtotime( $link->link_updated ) ) ?></span></p>
						</div>
					</div>
					<?php else : /* Post */ ?>
					<div class="col-6 col-md-<?php echo $col_md ?>">
						<div class="block light" id="block-wnl-<?php echo $the_ID ?>-<?php echo $i ?>">
							<h5><a href="<?php echo get_the_permalink( $link->ID ) ?>"><?php echo get_the_title( $link->ID ) ?></a></h5>
							<?php if( $link->post_content != '' ) : ?>
							<p><?php echo get_the_excerpt( $link->ID ) ?></p>
							<?php endif; ?>
							<p><span class="posted-on"><?php echo date( get_option( 'date_format' ), strtotime( $link->post_date ) ) ?></span></p>
						</div>
					</div>
					<?php endif; ?>
				<?php endforeach; ?>
				</div>
				<?php endif; ?>
			</div>
		<?php else: ?>
			<p><?php _e( 'No news links were found, please try later.' , 'wep' ); ?></p>
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