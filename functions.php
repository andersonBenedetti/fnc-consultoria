<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

add_theme_support('post-thumbnails');

register_nav_menus([
    'categorias' => 'Categorias'
]);

function fnc_loop_shop_per_page()
{
    return 9;
}

add_filter('loop_shop_per_page', 'fnc_loop_shop_per_page');


function custom_post_type($post_type, $singular_name, $plural_name)
{
    $labels = array(
        'name' => $plural_name,
        'singular_name' => $singular_name,
        'menu_name' => $plural_name,
        'add_new' => 'Adicionar Novo',
        'add_new_item' => 'Adicionar Novo',
        'edit' => 'Editar',
        'edit_item' => 'Editar',
        'new_item' => 'Novo',
        'view' => 'Ver',
        'view_item' => 'Ver',
        'search_items' => 'Procurar',
        'not_found' => 'Nenhum slide encontrado',
        'not_found_in_trash' => 'Nenhum slide encontrado no Lixo',
    );

    $args = array(
        'label' => $plural_name,
        'description' => $plural_name,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => $post_type, 'with_front' => true),
        'query_var' => true,
        'supports' => array('title', 'thumbnail'),
        'labels' => $labels,
    );

    register_post_type($post_type, $args);
}

add_action('init', function () {
    custom_post_type('carrossel', 'Carrossel', 'Carrossel');
});


// REDIRECIONAMENTOS
// 404 para a home
add_action('template_redirect', function () {
    if (is_404()) {
        wp_redirect(home_url(), 301);
        exit;
    }
});