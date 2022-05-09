<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : entry-tutorial.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Tuesday, 29th December 2020 5:52:01 am
 * | Last Modified   : Tuesday, 29th December 2020 5:52:31 am
 * |==============================================================|
 */

?>

<div class="text-xl font-bold text-center text-gray-900 uppercase dark:text-gray-200 md:text-left">Tutorial</div>
<div class="h-1 mt-2 mb-4 rounded-full bg-primary-lightest dark:bg-gray-800"></div>
<div class="grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-6">
  <?php
  $categories = get_terms('category', [
      'hide_empty' => false,
      'orderby'    => 'count',
      'order'      => 'DESC',
      'include'    => '2,3,4,5,6,7',
  ]);
  if (!empty($categories)) {
      foreach ($categories as $cat) {
          $category_color = get_option("{$cat->taxonomy}_{$cat->term_id}_color");
          $string_color   = $category_color;

          $explode_color = explode('-', $string_color);

          $get_color        = $explode_color[0];
          $get_nilai        = 0;
          $get_nilai_hover  = $get_nilai + 100;
          $get_nilai_border = $get_nilai + 100;

          $color        = $get_color;
          $color_hover  = $get_color . '-' . $get_nilai_hover;
          $color_border = $get_color . '-' . $get_nilai_border; ?>

      <a class="relative overflow-hidden rounded" href="<?php echo esc_url(get_category_link($cat->term_id)); ?>">
        <div class="snake-border-animation group opacity-90 hover:opacity-95 transition bg-<?php echo $category_color ?>-dark h-full border-b-4 border-<?php echo $category_color ?>-light hover:border-transparent flex flex-col items-center shadow hover:bg-<?php echo $category_color ?>">
          <span class="bg-gradient-to-r from-<?php echo $category_color ?> to-<?php echo $category_color ?>-dark"></span>
          <span class="bg-gradient-to-b from-<?php echo $category_color ?> to-<?php echo $category_color ?>-dark"></span>
          <span class="bg-gradient-to-l from-<?php echo $category_color ?> to-<?php echo $category_color ?>-dark"></span>
          <span class="bg-gradient-to-t from-<?php echo $category_color ?> to-<?php echo $category_color ?>-dark"></span>
          <div class="img-rotate bg-white border-8 border-<?php echo $category_color ?>-light group-hover:border-<?php echo $category_color ?>-dark w-26 p-2 rounded-full mt-6">
            <?php if (z_taxonomy_image_url($cat->term_id)) : ?>
              <img class="p-1" width="80px" height="80px" src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" alt="Tutorial <?php echo $cat->name ?>" title="Tutorial <?php echo $cat->name ?>">
            <?php else : ?>
              <img class="p-1" width="80px" height="80px" src="https://i.imgur.com/I5oNbDC.png" alt="Tutorial <?php echo $cat->name ?>" title="Tutorial <?php echo $cat->name ?>">
            <?php endif; ?>
          </div>
          <div class="mt-4 mb-2 text-sm font-medium leading-tight text-center text-white"><?php echo $cat->name ?> (<?php echo $cat->count ?>)</div>
        </div>
      </a>

  <?php
      }
  } ?>

</div>

<div class="mt-10 text-center">
  <a href="<?php echo home_url() ?>/tutorial" class="button-primary"><?php _e('SEE ALL TUTORIAL', 'susantokun'); ?></a>
</div>