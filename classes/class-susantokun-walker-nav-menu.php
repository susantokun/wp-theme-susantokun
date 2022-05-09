<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : class-susantokun-walker-nav-menu.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Tuesday, 29th December 2020 7:13:43 am
 * | Last Modified   : Tuesday, 29th December 2020 9:30:22 am
 * |==============================================================|
 */

if (!class_exists('Susantokun_Walker_Nav_Menu')) {
    class Susantokun_Walker_Nav_Menu extends Walker_Nav_Menu
    {
        public function start_lvl(&$output, $depth = 0, $args = null)
        {
            if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $indent = str_repeat($t, $depth);

            $classes = ['sub-menu'];

            $class_names = implode(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
            $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

            $output .= "{$n}{$indent}<ul$class_names>{$n}";
        }

        public function end_lvl(&$output, $depth = 0, $args = null)
        {
            if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $indent  = str_repeat($t, $depth);
            $output .= "$indent</ul>{$n}";
        }

        public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
        {
            if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $indent = ($depth) ? str_repeat($t, $depth) : '';

            $classes   = empty($item->classes) ? [] : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;

            $args = apply_filters('nav_menu_item_args', $args, $item, $depth);

            $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
            $class_names = $class_names ? ' class="inline-flex items-center justify-center h-6 px-2 ' . esc_attr($class_names) . '"' : '';

            $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
            $id = $id ? ' id="' . esc_attr($id) . '"' : '';

            $output .= $indent . '<li' . $id . $class_names . '>';

            $atts           = [];
            $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
            $atts['target'] = !empty($item->target) ? $item->target : '';
            if ('_blank' === $item->target && empty($item->xfn)) {
                $atts['rel'] = 'noopener';
            } else {
                $atts['rel'] = $item->xfn;
            }
            $atts['href']         = !empty($item->url) ? $item->url : '';
            $atts['aria-current'] = $item->current ? 'page' : '';

            $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

            $attributes = '';
            foreach ($atts as $attr => $value) {
                if (is_scalar($value) && '' !== $value && false !== $value) {
                    $value       = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            $title = apply_filters('the_title', $item->title, $item->ID);
            $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

            $item_output  = $args->before;
            $item_output .= '<a class="border-b border-transparent link-desktop hover:border-white dark:hover:border-white" ' . $attributes . '>';
            $item_output .= $args->link_before . $title . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }

        public function end_el(&$output, $item, $depth = 0, $args = null)
        {
            if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $output .= "</li>{$n}";
        }
    }
}
