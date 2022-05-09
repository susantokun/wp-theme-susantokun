<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : svg-icons.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Monday, 28th December 2020 10:02:23 am
 * | Last Modified   : Monday, 28th December 2020 11:24:13 am
 * |==============================================================|
 */

if (!function_exists('susantokun_the_theme_svg')) {
    function susantokun_the_theme_svg($svg_name, $class='', $group = 'custom')
    {
        echo susantokun_get_theme_svg($svg_name, $class, $group);
    }
}

if (!function_exists('susantokun_get_theme_svg')) {
    function susantokun_get_theme_svg($svg_name, $class='', $group = 'custom')
    {
        $svg = Susantokun_SVG_Icons::get_svg($svg_name, $class, $group);

        if (!$svg) {
            return true;
        }
        return $svg;
    }
}
