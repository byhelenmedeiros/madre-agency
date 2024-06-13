<?php
/**
 * Theme setup.
 */

function madre_agency_setup() {
    // Add support for various theme features.
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    
    // Register navigation menus.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'madre-agency'),
        'footer' => __('Footer Menu', 'madre-agency'),
    ));
}
add_action('after_setup_theme', 'madre_agency_setup');


function theme_post_formats_setup() {
    add_theme_support('post-formats', array(
        'aside',
        'gallery',
        'link',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat',
    ));
}
add_action('after_setup_theme', 'theme_post_formats_setup');

function theme_pagination() {
    global $wp_query;
    $big = 999999999; 

    echo paginate_links(array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'total'     => $wp_query->max_num_pages,
        'prev_text' => __('« Anterior'),
        'next_text' => __('Próximo »'),
    ));
}

function mytheme_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mytheme_setup');
