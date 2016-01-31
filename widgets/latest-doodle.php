<?php
/**
 * Create widget to produce thumbnail link of latest doodle
 */
class corenominal_latest_doodle_widget extends WP_Widget{
	
	function __construct()
	{
		parent::__construct(
			'corenominal_latest_doodle_widget', // Base ID
			'corenominal - Latest Doodle', // Name
			array('description' => __( 'Displays a link and thumbail of the latest doodle post.' ))
		   );
	}

	function update( $new_instance, $old_instance )
	{
			$instance = $old_instance;
			$instance['title'] = strip_tags($new_instance['title']);
			return $instance;
	}

	function form( $instance )
	{
		if( $instance )
		{
			$title = esc_attr( $instance['title'] );
		}
		else
		{
			$title = '';
		}
		?>
			<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'corenominal_latest_doodle_widget'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
			</p>
		<?php
	}

	function widget( $args, $instance )
	{
		extract( $args );
		
		// if single doodle page
		// get the id of the post and store for test
		$test_ID = false;
		if ( is_singular( 'doodle' ) ) 
		{
			global $post;
			setup_postdata( $post );
			$test_ID = get_the_ID();
		}
		
		$title = apply_filters('widget_title', $instance['title']);
		if ( $title )
		{
			$title =  $before_title . $title . $after_title;
		}
		
		$numberOfPosts = 1;
		$doodles = new WP_Query();
		$doodles->query( 'post_type=doodle&posts_per_page=' . $numberOfPosts );
		if( $doodles->found_posts > 0)
		{
			while ($doodles->have_posts())
			{
				$doodles->the_post();
				$doodle = '<li>';
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium' );
				$thumb = $thumb[0];
				$doodle .= '<a href="' . get_permalink() . '"><img src="' . $thumb . '" alt="' . get_the_title() . '"></a>';
				$doodle .= '<br><span class="meta"><i class="fa fa-calendar"></i> <span class="sr-only">Added: </span> ' . get_the_date() . '</span></li>';
			}
		}
		if( $test_ID != get_the_ID() )
		{
			echo $before_widget;
			echo $title;
			echo '<ul class="recent_doodle_widget recent">';
			echo $doodle;
			echo '</ul>';
			echo '<p class="allposts"><a href="' . site_url( 'doodle' ) . '"><i class="fa fa-chevron-right"></i> Browse All Doodles</a></p>';
			echo $after_widget;
		}
		wp_reset_postdata();
	}

}

function register_corenominal_latest_doodle_widget()
{
    register_widget('corenominal_latest_doodle_widget');
}
add_action('widgets_init', 'register_corenominal_latest_doodle_widget');
