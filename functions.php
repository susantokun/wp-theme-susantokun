<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : function.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Monday, 28th December 2020 6:22:35 am
 * | Last Modified   : Monday, 28th December 2020 8:41:08 am
 * |==============================================================|
 */

function susantokun_theme_support()
{
    add_theme_support('automatic-feed-links');
    add_theme_support(
        'custom-logo',
        [
            'flex-height' => true,
            'flex-width'  => true,
        ]
    );
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ]
    );

    load_theme_textdomain('susantokun');
    if (is_customize_preview()) {
        require get_template_directory() . '/inc/starter-content.php';
        add_theme_support('starter-content', susantokun_get_starter_content());
    }
}
add_action('after_setup_theme', 'susantokun_theme_support');

require get_template_directory() . '/inc/template-tags.php';
// Handle SVG icons.
require get_template_directory() . '/classes/class-susantokun-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';
// Handle Customizer settings.
require get_template_directory() . '/classes/class-susantokun-customize.php';
// Custom Nav Menu Walker.
require get_template_directory() . '/classes/class-susantokun-walker-nav-menu.php';
require get_template_directory() . '/classes/class-susantokun-walker-nav-menu-mobile.php';

// function susantokun_deregister_styles_and_scripts()
// {
//     wp_dequeue_style('wp-block-library');
//     wp_dequeue_style('wp-block-library-theme');
//     wp_dequeue_style('wc-block-style');
// }
// add_action('wp_print_styles', 'susantokun_deregister_styles_and_scripts', 100);

function susantokun_register_styles()
{
    $theme_version = wp_get_theme()->get('Version');

    // wp_enqueue_style('susantokun-css', get_stylesheet_uri(), [], $theme_version);
    wp_enqueue_style('susantokun-css', get_template_directory_uri() . '/app.min.css', [], $theme_version);

    // wp_enqueue_style('susantokun-custom', get_template_directory_uri() . '/assets/css/testing.css', [], $theme_version);

    // $located_css   = locate_template('app.min.css');
    // if ($located_css != '') {
    //     wp_enqueue_style('susantokun-css', get_template_directory_uri() . '/app.min.css', [], $theme_version);
    // } else {
    //     wp_enqueue_style('susantokun-css', get_stylesheet_uri(), [], $theme_version);
    // }
}
add_action('wp_enqueue_scripts', 'susantokun_register_styles');

function susantokun_register_scripts()
{
    $theme_version = wp_get_theme()->get('Version');

    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, '3.5.0');
        wp_enqueue_script('jquery');
    }

    wp_enqueue_script('susantokun-alpinejs', get_template_directory_uri() . '/assets/js/alpine.min.js', [], $theme_version, false);
    wp_script_add_data('susantokun-alpinejs', 'async', false);

    wp_enqueue_script('susantokun-js', get_template_directory_uri() . '/app.min.js', [], $theme_version, false);
    wp_script_add_data('susantokun-js', 'async', true);

    if (!(is_search() || is_home() || is_category() || is_tag())) {
        wp_enqueue_script('susantokun-syntax-highlight', get_template_directory_uri() . '/assets/js/syntax-highlight.min.js', [], $theme_version, false);
        wp_script_add_data('susantokun-syntax-highlight', 'async', true);
    }
}
add_action('wp_enqueue_scripts', 'susantokun_register_scripts');

function get_excerpt($count)
{
    $excerpt = get_the_excerpt();
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = $excerpt . '...';
    return $excerpt;
}

function remove_default_image_sizes($sizes)
{
    unset($sizes['thumbnail'], $sizes['medium'], $sizes['medium_large'], $sizes['large'], $sizes['shop_thumbnail'], $sizes['shop_catalog'], $sizes['shop_single']);

    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');

add_image_size('thumbnail-homepage', 300, '', false);
add_image_size('thumbnail-post', 830, '', false);
add_theme_support('post-thumbnails');
// add_filter('jpeg_quality', create_function('', 'return 90;'));
add_filter('jpeg_quality', function () {return 90;});

function custom_pagination($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1;

    global $paged;
    if (empty($paged)) {
        $paged = 1;
    }

    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }

    if (1 != $pages) {
        echo "<div class='flex items-center justify-center w-auto px-4 mt-10 text-sm'>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) {
            echo "<a class='block px-3 py-1 text-black dark:text-gray-200 border rounded-sm shadow bg-white dark:bg-gray-800 inactive border-gray-300 dark:border-gray-700 hover:text-white hover:bg-primary dark:hover:bg-primary hover:border-transparent dark:hover:border-transparent mx-0.5' href='" . get_pagenum_link(1) . "'>&laquo;</a>";
        }
        if ($paged > 1 && $showitems < $pages) {
            echo "<a class='block px-3 py-1 text-black dark:text-gray-200 border rounded-sm shadow bg-white dark:bg-gray-800 inactive border-gray-300 dark:border-gray-700 hover:text-white hover:bg-primary dark:hover:bg-primary hover:border-transparent dark:hover:border-transparent mx-0.5' href='" . get_pagenum_link($paged - 1) . "'>&lsaquo;</a>";
        }

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<span class='block px-3 py-1 text-white border rounded-sm shadow cursor-not-allowed current border-primary bg-primary mx-0.5'>" . $i . '</span>' : "<a href='" . get_pagenum_link($i) . "' class='block px-3 py-1 text-black dark:text-gray-200 border rounded-sm shadow bg-white dark:bg-gray-800 inactive border-gray-300 dark:border-gray-700 hover:text-white hover:bg-primary dark:hover:bg-primary hover:border-transparent dark:hover:border-transparent mx-0.5' >" . $i . '</a>';
            }
        }

        if ($paged < $pages && $showitems < $pages) {
            echo "<a class='block px-3 py-1 text-black dark:text-gray-200 border rounded-sm shadow bg-white dark:bg-gray-800 inactive border-gray-300 dark:border-gray-700 hover:text-white hover:bg-primary dark:hover:bg-primary hover:border-transparent dark:hover:border-transparent mx-0.5' href='" . get_pagenum_link($paged + 1) . "'>&rsaquo;</a>";
        }
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) {
            echo "<a class='block px-3 py-1 text-black dark:text-gray-200 border rounded-sm shadow bg-white dark:bg-gray-800 inactive border-gray-300 dark:border-gray-700 hover:text-white hover:bg-primary dark:hover:bg-primary hover:border-transparent dark:hover:border-transparent mx-0.5' href='" . get_pagenum_link($pages) . "'>&raquo;</a>";
        }
        echo "</div>\n";
    }
}

function susantokun_menus()
{
    $locations = [
        'header' => __('Header Menu', 'susantokun'),
        'footer' => __('Footer Menu', 'susantokun'),
        'social' => __('Social Menu', 'susantokun'),
    ];

    register_nav_menus($locations);
}
add_action('init', 'susantokun_menus');

function susantokun_sidebar_registration()
{
    $shared_args_footer = [
        'before_title'  => '<h2 class="mb-2 text-xl font-semibold uppercase widget-title dark:text-gray-200">',
        'after_title'   => '</h2>',
        'before_widget' => '<div class="flex flex-col px-4 pt-4 pb-2 overflow-hidden text-gray-900 bg-white border border-gray-300 rounded-lg shadow-md widget widget-footer sm:bg-gray-100 dark:text-gray-300 dark:bg-gray-800 dark:border-gray-700 %2$s">',
        'after_widget'  => '</div>',
    ];
    $shared_args_sidebar = [
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
        'before_widget' => '<div class="flex flex-col px-4 pt-4 pb-2 overflow-hidden text-gray-900 bg-white sm:bg-gray-100 lg:bg-white border border-gray-300 rounded-lg shadow-md widget dark:text-gray-300 dark:bg-gray-800 lg:dark:bg-gray-900 dark:border-gray-700 %2$s">',
        'after_widget'  => '</div>',
    ];
    $shared_args_sidebar_sticky = [
        'before_title'  => '<h2 class="mb-2 text-xl font-semibold uppercase widget-title dark:text-gray-200">',
        'after_title'   => '</h2>',
        'before_widget' => '<div class="flex flex-col px-4 pt-4 pb-2 overflow-hidden text-gray-900 bg-white border border-gray-300 rounded-lg shadow-md widget dark:text-gray-300 dark:bg-gray-900 dark:border-gray-700 %2$s">',
        'after_widget'  => '</div>',
    ];

    // Footer.
    register_sidebar(
        array_merge(
            $shared_args_footer,
            [
                'name'        => __('Footer', 'susantokun'),
                'id'          => 'sidebar-1',
                'description' => __('Widgets in this area will be displayed in the footer.', 'susantokun'),
            ]
        )
    );

    // Sidebar.
    register_sidebar(
        array_merge(
            $shared_args_sidebar,
            [
                'name'        => __('Sidebar', 'susantokun'),
                'id'          => 'sidebar-2',
                'description' => __('Widgets in this area will be displayed in the sidebar and mobile device in the footer.', 'susantokun'),
            ]
        )
    );
    // Sidebar Sticky.
    register_sidebar(
        array_merge(
            $shared_args_sidebar_sticky,
            [
                'name'        => __('Sidebar Sticky', 'susantokun'),
                'id'          => 'sidebar-3',
                'description' => __('Widgets in this area will be displayed in the sidebar (sticky).', 'susantokun'),
            ]
        )
    );
}
add_action('widgets_init', 'susantokun_sidebar_registration');

// add custom shortcode
function custom_button_shortcode($atts, $content = null)
{
    extract(shortcode_atts([
        'url'     => '',
        'title'   => '',
        'target'  => '',
        'text'    => '',
        'color'   => '',
        'icon'    => '',
    ], $atts));
    $content = $text ? $text : $content;
    $icon    = '' ? '' : '<span class="text-xs icon-' . $icon . ' mr-1.5"></span>';
    if ($url) {
        $link_attr = [
            'href'   => esc_url($url),
            'title'  => esc_attr($title),
            'target' => ('blank' == $target) ? '_blank' : '',
        ];
        $button_attr = [
            'class'  => 'button border border-transparent bg-' . esc_attr($color) . '-500 hover:bg-' . esc_attr($color) . '-400 focus:border-' . esc_attr($color) . '-600 focus:ring-2 focus:ring-' . esc_attr($color) . '-400 focus:ring-opacity-50 dark:focus:ring-' . esc_attr($color) . '-400 dark:hover:bg-' . esc_attr($color) . '-400 dark:border-' . esc_attr($color) . '-400 dark:border-' . esc_attr($color) . '-400 dark:focus:ring-opacity-50',
        ];
        $link_attrs_str = '';
        foreach ($link_attr as $key => $val) {
            if ($val) {
                $link_attrs_str .= ' ' . $key . '="' . $val . '"';
            }
        }
        $button_attrs_str = '';
        foreach ($button_attr as $key => $val) {
            if ($val) {
                $button_attrs_str .= ' ' . $key . '="' . $val . '"';
            }
        }
        return '<a ' . $button_attrs_str . $link_attrs_str . '>' . $icon . do_shortcode($content) . '</a>';
    } else {
        return '<button class="disable-button"><span class="mr-1.5 text-xs icon-dizzy"></span>' . do_shortcode($content) . '</button>';
    }
}
add_shortcode('susantokun-button', 'custom_button_shortcode');

// clean p br
function susantokun_clean_shortcodes($content)
{
    $array = [
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']',
    ];

    $content = strtr($content, $array);
    return $content;
}
add_filter('the_content', 'susantokun_clean_shortcodes');

// add space ads to content paragraph
function prefix_insert_post_ads($content)
{
    $enable_ads_content_paragraph = get_theme_mod('enable_ads_content_paragraph', false);
    if (true === $enable_ads_content_paragraph) {
        $ad_code =  '<div class="w-full h-auto">' . get_theme_mod('ads_content_paragraph', 'Ads Content Pragraph Here!') . '</div>';
    } else {
        $ad_code       =  '<div class="flex items-center justify-center w-full text-gray-800 border border-gray-300 h-60 dark:text-gray-200 dark:border-gray-700">Space Ads Content Paragraph</div>';
    }

    if (is_single() || is_page_template('templates/template-full-width.php')) {
        return prefix_insert_after_paragraph($ad_code, 5, $content);
    }
    return $content;
}
// function prefix_insert_post_ads_2($content)
// {
//     $enable_ads_content_paragraph = get_theme_mod('enable_ads_content_paragraph', false);
//     if (true === $enable_ads_content_paragraph) {
//         $ad_code_right =  '<div class="float-none w-full h-auto sm:ml-4 sm:float-right sm:w-64 sm:h-64">' . get_theme_mod('ads_content_paragraph', 'Ads Content Pragraph Here!') . '</div>';
//     } else {
//         $ad_code_right =  '<div class="flex items-center justify-center float-none w-full text-gray-800 border border-gray-300 sm:ml-4 sm:float-right sm:w-64 h-60 dark:text-gray-200 dark:border-gray-700">Space Ads Content Paragraph</div>';
//     }

//     if (is_single() || is_page_template('templates/template-full-width.php')) {
//         return prefix_insert_after_paragraph($ad_code_right, 9, $content);
//     }
//     return $content;
// }
add_filter('the_content', 'prefix_insert_post_ads');
// add_filter('the_content', 'prefix_insert_post_ads_2');

function prefix_insert_after_paragraph($insertion, $paragraph_id, $content)
{
    $closing_p  = '</p>';
    $paragraphs = explode($closing_p, $content);
    foreach ($paragraphs as $index => $paragraph) {
        if (trim($paragraph)) {
            $paragraphs[$index] .= $closing_p;
        }
        if ($paragraph_id == $index + 1) {
            $paragraphs[$index] .= $insertion;
        }
    }
    return implode('', $paragraphs);
}
