<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : starter-content.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Tuesday, 29th December 2020 3:13:24 am
 * | Last Modified   : Tuesday, 29th December 2020 3:14:05 am
 * |==============================================================|
 */

function susantokun_get_starter_content()
{
    $starter_content = [
        'posts' => [
            'about',
            'contact',
        ],

        'nav_menus'   => [
            'header'   => [
                'name'  => __('Header Menu', 'susantokun'),
                'items' => [
                    'link_home',
                    'page_about',
                    'page_contact',
                ],
            ],
            'footer'   => [
                'name'  => __('Footer Menu', 'susantokun'),
                'items' => [
                    'page_about',
                    'page_contact',
                ],
            ],
            'social'   => [
                'name'  => __('Social Menu', 'susantokun'),
                'items' => [
                    'link_github',
                    'link_youtube',
                    'link_facebook',
                    'link_twitter',
                    'link_instagram',
                    'link_email',
                ],
            ],
        ],
    ];

    return apply_filters('susantokun_starter_content', $starter_content);
}
