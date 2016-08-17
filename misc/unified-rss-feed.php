<?php
if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }
/**
 * Include all custom posts types in main feed
 */
function unified_feed( $qv )
{
    if ( isset($qv['feed'] ) && !isset ($qv['post_type']) )
    {
        $qv['post_type'] = array('post', 'link', 'snippet');
    }
    return $qv;
}
add_filter( 'request', 'unified_feed' );
