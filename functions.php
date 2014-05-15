<?php

function theme_styles() {
  
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . 'bootstrap.min.css' );
  
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

?>
