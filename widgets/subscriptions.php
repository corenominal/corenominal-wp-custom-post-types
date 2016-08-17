<?php
if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }
/**
 * Create widget to produce links to RSS feeds
 */
class corenominal_rss_widget extends WP_Widget{

	function __construct()
	{
		parent::__construct(
			'corenominal_rss_widget', // Base ID
			'corenominal - RSS Links', // Name
			array('description' => __( 'Displays links to your RSS feeds.' ))
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
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'corenominal_rss_widget'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
			</p>
		<?php
	}

	function widget( $args, $instance )
	{
		extract( $args );
		$title = apply_filters('widget_title', $instance['title']);

		if ( $title )
		{
			$title =  $before_title . $title . $after_title;
		}

		$count_posts = wp_count_posts( 'post' );
		$published_posts = $count_posts->publish;
		$count_posts = wp_count_posts( 'link' );
		$published_links = $count_posts->publish;
		$count_posts = wp_count_posts( 'snippet' );
		$published_snippets = $count_posts->publish;
		$feeds = '';

		$feeds .= '<li><i class="fa fa-rss"></i> <a href="' . site_url() . '/feed/">Subscribe to All</a></li>';

		if( $published_posts )
		{
			$feeds .= '<li><i class="fa fa-rss"></i> <a href="' . site_url() . '/feed/?post_type=post">Subscribe to Posts</a></li>';
		}

		if( $published_links )
		{
			$feeds .= '<li><i class="fa fa-rss"></i> <a href="' . site_url() . '/feed/?post_type=link">Subscribe to Links</a></li>';
		}

		if( $published_snippets )
		{
			$feeds .= '<li><i class="fa fa-rss"></i> <a href="' . site_url() . '/feed/?post_type=snippet">Subscribe to Snippets</a></li>';
		}

		if($feeds != '')
		{
			echo $before_widget;
			echo $title;
			echo '<ul class="subscriptions">';
			echo $feeds;
			echo '</ul>';
			echo $after_widget;
		}
	}

}

function register_corenominal_rss_widget()
{
    register_widget('corenominal_rss_widget');
}
add_action('widgets_init', 'register_corenominal_rss_widget');
