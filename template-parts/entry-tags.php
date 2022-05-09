<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : entry-tags.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Friday, 1st January 2021 2:13:08 pm
 * | Last Modified   : Friday, 1st January 2021 2:15:17 pm
 * |==============================================================|
 */

$post_tags      = get_the_tags();
$separator_tags = ' ';
if (!empty($post_tags)) {
    $fisrt_div = '<div class="p-4 text-sm font-medium text-gray-800 break-all sm:px-6 dark:text-gray-200"><span>Tags : </span>';
    foreach ($post_tags as $tag) {
        $link_tags .= '<a class="underline lowercase text-primary hover:text-primary-dark dark:text-primary-lightest dark:hover:text-primary-light hover:no-underline" title="#' . $tag->name . '" href="' . get_tag_link($tag->term_id) . '">#' . $tag->name . '</a>' . $separator_tags;
    }
    $tags        = trim($link_tags, $separator_tags);
    $last_div .= '</div>';
    $output_tags = $fisrt_div . $tags . $last_div;
    echo $output_tags;
}
