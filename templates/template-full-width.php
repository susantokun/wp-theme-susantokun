<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : template-full-width.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Thursday, 7th January 2021 7:37:58 pm
 * | Last Modified   : Thursday, 7th January 2021 7:38:17 pm
 * |==============================================================|
 * Template Name: Full Width Template
 * Template Post Type: post, page
 */

get_header() ?>
<main role="main" class="h-full bg-white sm:bg-gray-100 dark:bg-gray-800">
  <div class="container px-0 py-0 sm:px-4 sm:pt-6 sm:pb-10 xl:max-w-screen-xl">

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();
        get_template_part('template-parts/content-full-width');
      endwhile;
    endif; ?>

  </div>
</main>
<?php get_footer() ?>