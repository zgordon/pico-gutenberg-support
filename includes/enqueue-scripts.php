<?php

add_action( 'wp_enqueue_scripts', 'wpfastcomments_frontend_scripts', 100 );
function wpfastcomments_frontend_scripts() {  

  wp_enqueue_script(
    'wpfastcomments-custom-js',
    WPPLUGIN_URL . 'js/pico-fix.js',    
    [],
    '',
    true    
  );
  
}

?>