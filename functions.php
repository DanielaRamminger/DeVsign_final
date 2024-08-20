<?php

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', ['post', 'project']);
    add_image_size('project', 730, 487, ['center', 'top']);
    add_theme_support('html5', [
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
        'comment-list',
        'comment-form'
    ]);
    load_theme_textdomain('interhair', get_template_directory() . '/assets/languages');


    add_theme_support('custom-logo', [
        'height' => 60,
        'width' => 100,
        'flex-height' => true,
        'flex-width' => true
    ]);

    register_nav_menus([
        'primary' => __('Hauptmenü', 'interhair'),
        'footer' => __('Footermenü', 'interhair'),
    ]);

    add_theme_support('editor-styles');
    add_editor_style('assets/css/icons.css');
    add_editor_style('assets/css/fonts.css');
    add_editor_style('assets/css/editor-style.css');


    add_theme_support('wp-block-styles');


    add_theme_support('responsive-embeds');
});


add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('fonts-style', get_template_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('icons-style', get_template_directory_uri() . '/assets/css/icons.css');
    wp_enqueue_style('webdev-style', get_template_directory_uri() . '/style.css');


    wp_register_style('splide-style', get_template_directory_uri() . '/assets/css/splide.min.css');


    wp_enqueue_script('webdev-script', get_template_directory_uri() . '/assets/js/scripts.js', [], '1.0.0', true);


    wp_register_script('splide-script', get_template_directory_uri() . '/assets/js/splide.min.js', [], '1.0.0', true);
    wp_register_script('slider-script', get_template_directory_uri() . '/assets/js/slider.js', ['splide-script'], '1.0.0', true);
});
add_action('enqueue_block_editor_assets', function () {
    wp_enqueue_script('editor-script', get_template_directory_uri() . '/assets/js/editor.js', ['wp-blocks', 'wp-dom'], '1.0.0', true);
});


add_filter('upload_mimes', function ($mimes = []) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';

    return $mimes;
});



function theme_customizer_social_links($wp_customize)
{

    $wp_customize->add_section('social_links_section', [
        'title' => __('Social Links', 'interhair'),
        'priority' => 100
    ]);


    $wp_customize->add_setting('linkedin_link', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ]);

    $wp_customize->add_control('linkedin_link', [
        'label'  => __('LinkedIn Link', 'interhair'),
        'section' => 'social_links_section',
        'type' => 'text'
    ]);


    $wp_customize->add_setting('instagram_link', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ]);

    $wp_customize->add_control('instagram_link', [
        'label'  => __('Instagram Link', 'interhair'),
        'section' => 'social_links_section',
        'type' => 'text'
    ]);


    $wp_customize->add_setting('facebook_link', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ]);

    $wp_customize->add_control('facebook_link', [
        'label'  => __('Facebook Link', 'interhair'),
        'section' => 'social_links_section',
        'type' => 'text'
    ]);


    $wp_customize->add_setting('github_link', [
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ]);

    $wp_customize->add_control('github_link', [
        'label'  => __('Github Link', 'interhair'),
        'section' => 'social_links_section',
        'type' => 'text'
    ]);
}


add_action('customize_register', 'theme_customizer_social_links');

function project()
{

    $labels = [
        'name'                  => _x('Brands', 'Post Type General Name', 'interhair'),
        'singular_name'         => _x('Brand', 'Post Type Singular Name', 'interhair'),
        'menu_name'             => __('Brands', 'interhair'),
        'name_admin_bar'        => __('Brands', 'interhair'),
        'archives'              => __('Projekt Archiv', 'interhair'),
        'attributes'            => __('Projekte Attribute', 'interhair'),
        'parent_item_colon'     => __('Übergeordnetes Projekt:', 'interhair'),
        'all_items'             => __('Alle Projekte', 'interhair'),
        'add_new_item'          => __('Neues Projekt hinzufügen', 'interhair'),
        'add_new'               => __('Projekt hinzufügen', 'interhair'),
        'new_item'              => __('Neues Projekt', 'interhair'),
        'edit_item'             => __('Projekt bearbeiten', 'interhair'),
        'update_item'           => __('Projekt aktualisieren', 'interhair'),
        'view_item'             => __('Zeige Projekt', 'interhair'),
        'view_items'            => __('Zeige Projekte', 'interhair'),
        'search_items'          => __('Projekt suchen', 'interhair'),
        'not_found'             => __('Kein Projekt gefunden', 'interhair'),
        'not_found_in_trash'    => __('Kein Projekt im Papierkorb', 'interhair'),
        'featured_image'        => __('Vorschaubild', 'interhair'),
        'set_featured_image'    => __('Als Vorschaubild', 'interhair'),
        'remove_featured_image' => __('Vorschaubild entfernen', 'interhair'),
        'use_featured_image'    => __('Als Vorschaubild verwenden', 'interhair'),
        'insert_into_item'      => __('In Projekt einfügen', 'interhair'),
        'uploaded_to_this_item' => __('Zu Projekt hochgeladen', 'interhair'),
        'items_list'            => __('Projekt Liste', 'interhair'),
        'items_list_navigation' => __('Projekt-Liste Navigation', 'interhair'),
        'filter_items_list'     => __('Filter Projekt-Liste', 'interhair'),
    ];
    $args = [
        'label'                 => __('Brands', 'interhair'),
        'labels'                => $labels,
        'supports'              => ['title', 'editor', 'thumbnail', 'revisions'],
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 10,
        'menu_icon'             => 'dashicons-format-gallery',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    ];
    register_post_type('project', $args);
}
add_action('init', 'project', 0);



function pagination($paged = '', $max_page = '')
{
    $big = 999999999;
    if (!$paged) {
        $paged = get_query_var('paged');
    }

    if (!$max_page) {
        global $wp_query;
        $max_page = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
    }

    $html = '<nav class="pagination">';
    $html .= paginate_links([
        'base'       => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'     => '?paged=%#%',
        'current'    => max(1, $paged),
        'total'      => $max_page,
        'mid_size'   => 1,
        'prev_text'  => '<span class="icon-arrow-left" aria-label="' . __('Vorherige Seite', 'dani') . '"></span>',
        'next_text'  => '<span class="icon-arrow-right" aria-label="' . __('Nächste Seite', 'dani') . '"></span>'
    ]);
    $html .= '</nav>';
    echo $html;
}
function mein_theme_farben_hinzufugen() {
add_theme_support('editor-color-palette', array(
    array(
        'name' => __('Base BG'),
        'slug' => 'base-bg',
        'color' => '#070707',
    ),
    array(
        'name' => __('Base Color'),
        'slug' => 'base-color',
        'color' => '#b9aeae',
    ),
   
));
}
add_action('after_setup_theme', 'mein_theme_farben_hinzufugen');



function custom_menu_item_links($items, $args) {
    if ($args->theme_location == 'primary') {
        foreach ($items as $item) {
            switch ($item->title) {
                case 'Look up':
                    $item->url = home_url('/project/look-up/');
                    break;
                case 'InterHair':
                    $item->url = home_url('/project/interhair/');
                    break;
                case 'GoldFever':
                    $item->url = home_url('/project/goldfever/');
                    break;
                case 'Hinshitsu':
                    $item->url = home_url('/project/hinshitsu/');
                    break;
                default:
                    
                    break;
            }
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'custom_menu_item_links', 10, 2);

