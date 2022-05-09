<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : page.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Sunday, 3rd January 2021 1:27:04 pm
 * | Last Modified   : Sunday, 3rd January 2021 1:27:09 pm
 * |==============================================================|
 */

get_header(); ?>
<main role="main" class="h-full bg-white sm:bg-gray-100 dark:bg-gray-800">
  <div class="container px-0 py-0 sm:px-4 sm:pt-6 sm:pb-10 xl:max-w-screen-xl">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="w-full bg-white border-gray-300 sm:border-b-4 overflow-hiddenborder-b-none dark:border-gray-700 dark:bg-gray-900 sm:rounded-t-lg sm:border-t sm:border-l sm:border-r sm:shadow-md">
          <div class="p-4 sm:p-6">
            <header class="text-center">
              <h1 class="mb-2 text-3xl font-bold text-gray-900 uppercase md:text-4xl dark:text-gray-200"><?php the_title() ?></h1>
              <div class="text-xs text-gray-700 dark:text-gray-300"><?php _e('Updated', 'susantokun'); ?> <?php echo get_the_modified_time('j F Y g:i A') ?></div>
            </header>
            <div class="h-px my-4 bg-gray-300 dark:bg-gray-700"></div>
            <div class="mx-auto prose-sm prose dark:prose-dark sm:prose max-w-none sm:max-w-none">
              <?php the_content() ?>
            </div>
          </div>

          <div class="h-px bg-gray-300 dark:bg-gray-700"></div>

          <div class="flex flex-col-reverse p-4 pb-10 sm:p-6 lg:flex-row">
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

        </article>
      <?php endwhile;
      else : ?>
      no content
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>