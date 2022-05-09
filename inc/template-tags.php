<?php

/*
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : template-tags.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Tuesday, 29th December 2020 3:23:20 am
 * | Last Modified   : Tuesday, 29th December 2020 3:23:47 am
 * |==============================================================|
 */

// change link to svg social icons
function susantokun_nav_menu_social_icons($item_output, $item, $depth, $args)
{
    if ('social' === $args->theme_location) {
        $svg = Susantokun_SVG_Icons::get_social_link_svg($item->url);
        if (empty($svg)) {
            $svg = susantokun_get_theme_svg('link', 'mx-1 fill-current w-5 h-5 hover:text-primary-light');
        }
        $item_output = str_replace($args->link_after, '</span>' . $svg, $item_output);
    }

    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'susantokun_nav_menu_social_icons', 10, 4);

// add share button
function susantokun_share_buttons()
{
    $url   = urlencode(get_the_permalink());
    $title = urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));
    $media = urlencode(get_the_post_thumbnail_url(get_the_ID(), 'full'));

    include locate_template('template-parts/entry-share.php', false, false);
}

function susantokun_site_logo($args = [], $echo = true)
{
    $logo       = get_custom_logo();
    $site_title = get_bloginfo('name');
    $contents   = '';
    $classname  = '';

    $defaults = [
        'logo'        => '%1$s',
        'logo_class'  => 'site-logo',
        'title'       => '<a href="%1$s">%2$s</a>',
        'title_class' => 'flex items-center text-white leading-none text-2xl font-semibold tracking-tight',
        'home_wrap'   => '<h1 class="%1$s">%2$s</h1>',
        'single_wrap' => '<div class="%1$s">%2$s</div>',
        'condition'   => (is_front_page() || is_home()) && !is_page(),
    ];

    $args = wp_parse_args($args, $defaults);
    $args = apply_filters('susantokun_site_logo_args', $args, $defaults);

    if (has_custom_logo()) {
        $contents  = sprintf($args['logo'], $logo, esc_html($site_title));
        $contents .= sprintf($args['title'], esc_url(get_home_url(null, '/')), esc_html($site_title));
        // $contents  = sprintf($args['title'], esc_url(get_home_url(null, '/')), esc_html($site_title));
        $classname = $args['title_class'];
    } else {
        $contents  = sprintf($args['title'], esc_url(get_home_url(null, '/')), esc_html($site_title));
        $classname = $args['title_class'];
    }

    $wrap = $args['condition'] ? 'home_wrap' : 'single_wrap';

    $html = sprintf($args[$wrap], $classname, $contents);
    $html = apply_filters('susantokun_site_logo', $html, $args, $classname, $contents);

    if (!$echo) {
        return $html;
    }

    echo $html;
}

function susantokun_site_description($echo = true)
{
    $description = get_bloginfo('description');

    if (!$description) {
        return;
    }

    $wrapper = '<div class="hidden mt-1 ml-2 text-base text-white xl:block">%s</div>';
    $html    = sprintf($wrapper, esc_html($description));
    $html    = apply_filters('susantokun_site_description', $html, $description, $wrapper);

    if (!$echo) {
        return $html;
    }

    echo $html;
}

function susantokun_unique_id($prefix = '')
{
    static $id_counter = 0;
    if (function_exists('wp_unique_id')) {
        return wp_unique_id($prefix);
    }
    return $prefix . (string) ++$id_counter;
}

// add field color on categories
function category_fields_add_color($taxonomy)
{
    wp_nonce_field('category_meta_add_color', 'category_meta_add_color_nonce'); ?>
    <div class="form-field">
        <label for="category_color">Color Category</label>
        <input name="category_color" id="category_color" type="text" value="" placeholder="Ex: codeigniter, laravel, reactjs, etc." />
    </div>
<?php
}
add_action('category_add_form_fields', 'category_fields_add_color', 10);
// edit category color
function category_fields_edit_color($term, $taxonomy)
{
    wp_nonce_field('category_meta_edit_color', 'category_meta_edit_color_nonce');
    $category_color = get_option("{$taxonomy}_{$term->term_id}_color"); ?>
    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="category_color">Color Category</label>
        </th>
        <td>
            <input name="category_color" id="category_color" type="text" value="<?php echo (!empty($category_color)) ? $category_color : ''; ?>" />
        </td>
    </tr>
<?php
}
add_action('category_edit_form_fields', 'category_fields_edit_color', 10, 2);
// save category color
function save_category_fields_color($term_id)
{
    if (
        isset($_POST['taxonomy']) && isset($_POST['category_color']) && (isset($_POST['category_meta_add_color_nonce']) && wp_verify_nonce($_POST['category_meta_add_color_nonce'], 'category_meta_add_color') ||
            isset($_POST['category_meta_edit_color_nonce']) && wp_verify_nonce($_POST['category_meta_edit_color_nonce'], 'category_meta_edit_color'))
    ) {
        $taxonomy       = $_POST['taxonomy'];
        $category_color = get_option("{$taxonomy}_{$term_id}_color");

        if (!empty($_POST['category_color'])) {
            update_option("{$taxonomy}_{$term_id}_color", htmlspecialchars(sanitize_text_field($_POST['category_color'])));
        } elseif (!empty($category_color)) {
            delete_option("{$taxonomy}_{$term_id}_color");
        }
    }
}
add_action('created_category', 'save_category_fields_color');
add_action('edited_category', 'save_category_fields_color');
// remove caegory color
function remove_term_options_color($term_id, $taxonomy)
{
    delete_option("{$taxonomy}_{$term_id}_color");
}
add_action('pre_delete_term', 'remove_term_options_color', 10, 2);

function susantokun_set_post_views($postID)
{
    $count_key = 'susantokun_post_views_count';
    $count     = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function susantokun_track_post_views($post_id)
{
    if (!is_single()) {
        return;
    }
    if (empty($post_id)) {
        global $post;
        $post_id = $post->ID;
    }
    susantokun_set_post_views($post_id);
}
add_action('wp_head', 'susantokun_track_post_views');

function susantokun_get_post_views($postID)
{
    $count_key = 'susantokun_post_views_count';
    $count     = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return '0';
    }
    return $count;
}
