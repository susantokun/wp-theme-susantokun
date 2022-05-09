<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : template-tutorial.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Sunday, 3rd January 2021 6:08:49 pm
 * | Last Modified   : Sunday, 3rd January 2021 6:10:09 pm
 * |==============================================================|
 * Template Name: Tutorial Template
 * Template Post Type: page
 */

get_header(); ?>

<main role="main" class="h-full bg-white sm:bg-gray-100 dark:bg-gray-900">
  <div class="container px-0 py-0 sm:px-4 sm:pt-6 sm:pb-10 xl:max-w-screen-xl">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="w-full bg-white border-gray-300 sm:border-b-4 border-b-none dark:border-gray-700 dark:bg-gray-900 sm:rounded-t-sm sm:border-t sm:border-l sm:border-r sm:shadow-xs">
          <div class="p-4 sm:p-6">
            <header class="text-center">
              <h1 class="mb-2 text-3xl font-bold text-gray-900 uppercase md:text-4xl dark:text-gray-200"><?php the_title() ?></h1>
              <div class="text-xs text-gray-700 dark:text-gray-300"><?php _e('Updated', 'susantokun'); ?> <?php echo get_the_modified_time('j F Y g:i A') ?></div>
            </header>
            <div class="h-px my-4 bg-gray-300 dark:bg-gray-700"></div>
            <div class="mx-auto mb-4 prose-sm prose dark:prose-dark sm:prose max-w-none sm:max-w-none">
              <?php the_content() ?>
            </div>
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
              <?php $categories = get_terms('category', [
                  'hide_empty' => false,
                  'orderby'    => 'name',
                  'order'      => 'ASC',
                  'include'    => '2,3,4,5,6,7,8,9,10,11,12,13',
              ]);
                  if (!empty($categories)) : foreach ($categories as $cat) :
                      $category_color = get_option("{$cat->taxonomy}_{$cat->term_id}_color");
                      $string_color   = $category_color;

                      $explode_color = explode('-', $string_color);

                      $get_color        = $explode_color[0];
                      $get_nilai        = 0;
                      $get_nilai_hover  = $get_nilai + 100;
                      $get_nilai_border = $get_nilai + 100;

                      $color        = $get_color;
                      $color_hover  = $get_color . '-' . $get_nilai_hover;
                      $color_border = $get_color . '-' . $get_nilai_border;
                      ?>
                  <a class="relative overflow-hidden rounded" href="<?php echo esc_url(get_category_link($cat->term_id)); ?>">
                    <div class="snake-border-animation group opacity-90 hover:opacity-95 transition bg-<?php echo $category_color ?>-dark h-full border-b-4 border-<?php echo $category_color ?>-light hover:border-transparent flex flex-col items-center shadow hover:bg-<?php echo $category_color ?>">
                      <span class="bg-gradient-to-r from-<?php echo $category_color ?> to-<?php echo $category_color ?>-dark"></span>
                      <span class="bg-gradient-to-b from-<?php echo $category_color ?> to-<?php echo $category_color ?>-dark"></span>
                      <span class="bg-gradient-to-l from-<?php echo $category_color ?> to-<?php echo $category_color ?>-dark"></span>
                      <span class="bg-gradient-to-t from-<?php echo $category_color ?> to-<?php echo $category_color ?>-dark"></span>
                      <div class="img-rotate bg-white border-8 border-<?php echo $category_color ?>-light group-hover:border-<?php echo $category_color ?>-dark w-26 p-2 rounded-full mt-6">
                        <?php if (z_taxonomy_image_url($cat->term_id)) : ?>
                          <img class="w-20 h-20 p-1" src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" alt="Tutorial <?php echo $cat->name ?>">
                        <?php else : ?>
                          <img class="w-20 h-20 p-1" src="https://i.imgur.com/I5oNbDC.png" alt="Tutorial <?php echo $cat->name ?>" title="Tutorial <?php echo $cat->name ?>">
                        <?php endif; ?>
                      </div>
                      <div class="mt-4 mb-2 text-sm font-medium leading-tight text-center text-white"><?php echo $cat->name ?> (<?php echo $cat->count ?>)</div>
                    </div>
                  </a>
              <?php endforeach; endif; ?>
            </div>
          </div>
          <div class="h-px bg-gray-300 dark:bg-gray-700"></div>
          <div class="flex flex-col p-4 sm:p-6 lg:flex-row">
            <div class="w-full lg:w-8/12">
              <?php
                  $enable_ads_content_bottom = get_theme_mod('enable_ads_content_bottom', false);
                  if (true === $enable_ads_content_bottom) : ?>
                <div class="w-full h-auto">
                  <?php echo get_theme_mod('ads_content_bottom', 'Ads Content Bottom Here!') ?>
                </div>
              <?php else : ?>
                <div class="flex items-center justify-center w-full text-gray-800 border h-96 dark:text-gray-200 border-primary-lightest">
                  <?php _e('Space Ads Content Bottom', 'susantokun') ?>
                </div>
              <?php endif; ?>
            </div>
            <div class="h-px my-4 bg-gray-300 dark:bg-gray-700"></div>
            <div class="flex flex-col justify-between w-full pl-0 lg:w-4/12 lg:pl-6">
              <?php get_template_part('template-parts/entry', 'author-bio') ?>
              <?php susantokun_share_buttons(); ?>
            </div>
          </div>
          <div class="h-px mx-4 bg-gray-300 sm:mb-2 sm:mx-6 dark:bg-gray-700"></div>
          <?php get_template_part('template-parts/entry', 'comments') ?>
        </article>
      <?php endwhile;
      else : ?>
      no content
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>