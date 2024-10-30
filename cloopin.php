<?php
/*
Plugin Name: Cloopin!!!
Description: New tagging on Image and Share it
Author: cloopin.com
Author URI: http://www.cloopin.com
*/
  
function hook_cloopinAPI()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('cloopinForeGround', 'https://cloopin.com/static/serverapi/cloopForeground.min.js'); 
    wp_enqueue_script('cloopinBackGround', 'https://cloopin.com/static/js/apiCloop.js');     
    wp_enqueue_style('cloopusForeGroundStyle', 'https://cloopin.com/static/serverapi/cloopui.css');
}
add_action('wp_enqueue_scripts','hook_cloopinAPI');

?>