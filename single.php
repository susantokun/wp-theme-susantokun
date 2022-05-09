<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : single.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Friday, 1st January 2021 11:11:53 am
 * | Last Modified   : Thursday, 7th January 2021 10:06:34 pm
 * |==============================================================|
 */

$has_sidebar_2 = is_active_sidebar('sidebar-2');
$has_sidebar_3 = is_active_sidebar('sidebar-3');
get_header() ?>
<main role="main" class="h-full bg-white sm:bg-gray-100 dark:bg-gray-800">
  <div class="container px-0 py-0 sm:px-4 sm:pt-6 sm:pb-10 xl:max-w-screen-xl">
    <div class="flex flex-col lg:flex-row">

      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post();
          get_template_part('template-parts/content-single');
        endwhile;
      endif; ?>

      <aside class="hidden w-4/12 pl-6 space-y-6 lg:block">
        <div class="space-y-6">
          <?php if ($has_sidebar_2) : ?>
            <?php dynamic_sidebar('sidebar-2'); ?>
          <?php endif; ?>
        </div>
        <div class="sticky space-y-6 top-20">
          <?php if ($has_sidebar_3) : ?>
            <?php dynamic_sidebar('sidebar-3'); ?>
          <?php endif; ?>
        </div>
      </aside>

    </div>
  </div>
</main>
<?php get_footer() ?>