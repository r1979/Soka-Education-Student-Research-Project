<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

add_theme_support( 'infinite-scroll', array(
    'container' => 'content',
    'footer' => 'page',
) );

function display_download_link($post_id){
  $issue = wp_get_post_terms( $post_id, 'published_issue');
  $issue = $issue[0];
  $download_link = '<a class="button secondary" href="' . bloginfo('url') . '/get_booklet/' . $issue . '">';
  return $download_link;
}

// function query_site(){
//   $curl_url = 'http://sesrp.atriangle.com/api/get_posts/?post_type=paper';
//   $curl_output = 'curl_file.json' 'w';

//   curl_setopt($curl_url, CURLOPT_FILE, $curl_output);
//   curl_setopt($curl_url, CURLOPT_HEADER, 0);

//   curl_exec($curl_url);
//   curl_close($curl_url);
//   fclose($curl_output);
// }

?>
