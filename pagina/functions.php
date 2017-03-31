<?php

//include bootstrap CSS
wp_register_style('sty_bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.css');
wp_enqueue_style('sty_bootstrap');

//include JQUERY
//wp_register_script( 'javaS_bootstrap', get_template_directory_uri().  '/bootstrap/js/jquery-3.2.0.min.js');
wp_enqueue_script('jquery');
wp_enqueue_script('jquery-migrate');

//include bootstrap js
wp_register_script('javaSb_bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.js');
wp_enqueue_script('javaSb_bootstrap');

//include boostrap nav
require_once('wp-bootstrap-navwalker.php');
register_nav_menus(array('primary' => __('Primary Menu')));

