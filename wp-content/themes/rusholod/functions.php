<?php
/**
 * Created by PhpStorm.
 * User: Ilya
 * Date: 23.05.2016
 * Time: 19:24
 */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
add_action( 'wp_default_scripts', function( $scripts ) {
    if ( ! empty( $scripts->registered['jquery'] ) ) {
        $jquery_dependencies = $scripts->registered['jquery']->deps;
        $scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, array( 'jquery-migrate' ) );
    }
} );

function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    /*wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), null, false );*/

    /*wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'bootstrap-css' );*/
}