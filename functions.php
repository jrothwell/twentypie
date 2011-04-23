<?php
// FUNCTIONS.PHP (Twenty Pie child theme)
// (c) 2011 Jonathan Rothwell

// for the "welcomes your comments..." banner
define('CONTACT_AUTHOR','Jonathan');
define('CONTACT_URL','http://notroswell.com/about/contact-me/');

function extend_post_formats() {
	// Override Post Formats support
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link' ) );
}

add_action( 'after_setup_theme', 'extend_post_formats', 11); //execute after Twenty Ten adds its own post formats

// Get first link (code from wprecipes.com)
function initial_link() {
  global $post, $posts;
  $first_lnk = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<a.+href=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_lnk = $matches [1] [0];

  return $first_lnk;
}
?>
