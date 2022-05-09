<?php
$categories = get_the_category();
$output     = '';
if ($categories) {
    foreach ($categories as $category) {
        $output .= '<a class="button-category" title="' . $category->cat_name . '" href="' . get_category_link($category->term_id) . '"><span class="mt-px">' . $category->cat_name . '</span></a>';
    }
    echo $output;
}
