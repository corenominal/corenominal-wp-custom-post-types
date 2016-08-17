<?php
if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }
/**
 * Fix pagination for custom loop showing all
 * custom post types.
 */
function fix_allcustomposts_pagination($qs)
{
    if( !isset( $qs['pagename'] ) )
    {
        if( !isset( $qs['post_type'] ) && isset( $qs['paged'] ) )
        {
            $qs['post_type'] = get_post_types($args = array(
                'public'   => true,
                '_builtin' => false
            ));
            array_push($qs['post_type'],'post');
        }
    }
    return $qs;
}
add_filter('request', 'fix_allcustomposts_pagination');
