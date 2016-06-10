<?php
/**
 * Created by PhpStorm.
 * User: Ilya
 * Date: 23.05.2016
 * Time: 19:24
 */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}