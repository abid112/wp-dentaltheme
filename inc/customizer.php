<?php
/**
 * Theme Customizer
 *
 * @package rootstrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function rootstrap_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'rootstrap_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function rootstrap_customize_preview_js() {
	wp_enqueue_script( 'rootstrap_customizer', get_template_directory_uri() . '/inc/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'rootstrap_customize_preview_js' );

function breadcrumbs() {
    if (!is_home()) {
        echo '<div id="breadcrumbs"><a href="';
        echo get_option('home');
        echo '">Home';
        //bloginfo('name');
        echo "</a>  > ";
        if (is_category() || is_single()) {
            the_category('title_li=');echo " > ";
            if (is_single()) {
                echo "  ";
                the_title();

            }
        } elseif (is_page()) {
            echo the_title();
        }
        echo '</div>';
    }
}
