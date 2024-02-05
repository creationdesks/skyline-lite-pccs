<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
 }
 
function my_deregister_scripts(){
 wp_dequeue_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

function _remove_script_version( $src ){
  $parsed = parse_url($src);

  if (isset($parsed['query'])) {
    parse_str($parsed['query'], $qrystr);
    if (isset($qrystr['ver'])) {
      unset($qrystr['ver']); 
    }
    $parsed['query'] = http_build_query($qrystr);
  }
  // return http_build_url($parsed); // elegant but not always available

  $src = '';
  $src .= (!empty($parsed['scheme'])) ? $parsed['scheme'].'://' : '';
  $src .= (!empty($parsed['host'])) ? $parsed['host'] : '';
  $src .= (!empty($parsed['path'])) ? $parsed['path'] : '';
  $src .= (!empty($parsed['query'])) ? '?'.$parsed['query'] : '';

  return $src;
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );