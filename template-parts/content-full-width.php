<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : content-full-width.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Thursday, 7th January 2021 7:48:12 pm
 * | Last Modified   : Thursday, 7th January 2021 7:55:58 pm
 * |==============================================================|
 */

?>
<article class="w-full overflow-hidden bg-white border-gray-300 sm:border-b-4 border-b-none dark:border-gray-700 dark:bg-gray-900 sm:rounded-t-lg sm:border-t sm:border-l sm:border-r sm:shadow-md">

  <div class="px-4 pt-6 sm:px-6">
    <header class="flex flex-col items-center text-center">
      <h1 class="mb-2 text-3xl font-bold text-gray-900 md:text-4xl dark:text-gray-200"><?php the_title() ?></h1>
      <span class="text-xs text-gray-700 dark:text-gray-300"><?php _e('Updated', 'susantokun'); ?> <?php echo get_the_modified_time('j F Y g:i A') ?></span>
      <div class="flex flex-wrap -mx-0.5 items-center mt-2 select-none">
        <?php get_template_part('template-parts/entry', 'categories'); ?>
      </div>
    </header>

    <div class="h-px my-4 bg-gray-300 dark:bg-gray-700"></div>

    <?php
    $enable_ads_content_top = get_theme_mod('enable_ads_content_top', false);
    if (true === $enable_ads_content_top) : ?>
      <div class="w-full mb-4 text-sm text-gray-800 sm:text-base dark:text-gray-200">
        <?php echo get_theme_mod('ads_content_top', 'Ads Content Top Here!') ?>
      </div>
    <?php else : ?>
      <div class="flex items-center justify-center w-full mb-4 text-sm text-gray-800 border border-gray-300 dark:border-gray-700 sm:text-base h-60 dark:text-gray-200">
        <?php _e('Space Ads Content Top', 'susantokun') ?>
      </div>
    <?php endif; ?>

    <?php if (has_post_thumbnail()) : ?>
      <div class="justify-center flex-1 hidden float-left pr-4 my-2 md:flex">
        <?php the_post_thumbnail('thumbnail-homepage', ['class' => 'object-cover object-center w-full', 'title' => get_the_title()]); ?>
      </div>
    <?php endif; ?>
    <div class="pb-4 mx-auto prose-sm prose dark:prose-dark sm:prose max-w-none sm:max-w-none">
      <?php the_content(); ?>
    </div>

  </div>

  <?php get_template_part('template-parts/entry', 'tags') ?>
  <div class="h-px bg-gray-300 dark:bg-gray-700"></div>
  <?php get_template_part('template-parts/entry', 'prev-next') ?>
  <div class="flex flex-col-reverse p-4 sm:p-6 lg:flex-row">
    <div class="w-full lg:w-8/12">
      <?php
      $enable_ads_content_bottom = get_theme_mod('enable_ads_content_bottom', false);
      if (true === $enable_ads_content_bottom) : ?>
        <div class="w-full text-sm text-gray-800 sm:text-base dark:text-gray-200">
          <?php echo get_theme_mod('ads_content_bottom', 'Ads Content Bottom Here!') ?>
        </div>
      <?php else : ?>
        <div class="flex items-center justify-center w-full text-sm text-gray-800 border sm:text-base h-96 dark:text-gray-200 border-primary-lightest">
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
  <div class="h-px bg-gray-300 dark:bg-gray-700"></div>
  <?php get_template_part('template-parts/entry', 'comments') ?>
</article>