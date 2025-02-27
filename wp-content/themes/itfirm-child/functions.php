<?php

/**
 * Add child styles.
 * 
 * @author CaseThemes
 */
function itfirm_enqueue_styles()
{
    $parent_style = 'itfirm-style';
    
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(
        $parent_style
    ));
}

add_action('wp_enqueue_scripts', 'itfirm_enqueue_styles');