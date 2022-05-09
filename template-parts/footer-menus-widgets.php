<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : footer-menus-widgets.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Monday, 28th December 2020 9:12:02 am
 * | Last Modified   : Monday, 28th December 2020 9:12:21 am
 * |==============================================================|
 */

$has_social_menu   = has_nav_menu('social');
$has_footer_menu   = has_nav_menu('footer');
$has_sidebar_1     = is_active_sidebar('sidebar-1');
$has_sidebar_2     = is_active_sidebar('sidebar-2');
$enable_ads_footer = get_theme_mod('enable_ads_footer', false);
?>
<div class="h-px bg-gray-200 dark:bg-gray-800"></div>

<div class="bg-gray-100 sm:bg-white dark:bg-gray-900">

  <?php if (!(is_home() || is_single()) || is_page_template('templates/template-full-width.php')) : ?>
    <aside class="container grid grid-cols-1 gap-4 px-4 py-10 md:grid-cols-2 xl:max-w-screen-xl">
      <?php if ($has_sidebar_1) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
      <?php endif; ?>
    </aside>

    <div class="container px-4 xl:max-w-screen-xl">
      <div class="h-px bg-gray-200 dark:bg-gray-800"></div>
    </div>
  <?php endif; ?>

  <?php if ($has_sidebar_2 && (is_single() || is_page_template('templates/template-full-width.php'))) : ?>
    <aside class="container grid grid-cols-1 gap-4 px-4 py-10 lg:hidden md:grid-cols-2 xl:max-w-screen-xl">
      <?php dynamic_sidebar('sidebar-2'); ?>
    </aside>

    <div class="container px-4 xl:max-w-screen-xl">
      <div class="h-px bg-gray-200 dark:bg-gray-800"></div>
    </div>
  <?php endif; ?>

  <div class="container flex flex-col items-center justify-center px-4 py-10 xl:max-w-screen-xl">
    <?php if (true === $enable_ads_footer) : ?>
      <div class="w-full h-auto">
        <?php echo get_theme_mod('ads_footer', 'Ads Footer Here!') ?>
      </div>
    <?php else : ?>
      <div class="flex items-center justify-center w-full text-sm text-gray-800 border sm:text-base dark:text-gray-200 h-60 border-primary-lightest">
        <?php _e('Space Ads Footer', 'susantokun') ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="container px-4 xl:max-w-screen-xl">
    <div class="h-px bg-gray-200 dark:bg-gray-800"></div>
  </div>
  <?php if ($has_footer_menu || $has_social_menu) : ?>
    <?php if ($has_footer_menu || $has_social_menu) : ?>
      <div class="py-10 text-gray-700 md:py-20 dark:text-gray-300">
        <div class="container flex flex-col items-center justify-center px-4 space-y-4 xl:max-w-screen-xl">

          <?php if ($has_social_menu) : ?>
            <nav aria-label="social-link">
              <ul class="flex flex-row items-center -mx-1 select-none">
                <?php
                      wp_nav_menu([
                          'theme_location'  => 'social',
                          'container'       => '',
                          'container_class' => '',
                          'items_wrap'      => '%3$s',
                          'menu_id'         => '',
                          'menu_class'      => '',
                          'depth'           => 1,
                          'link_before'     => '<span class="screen-reader-text">',
                          'link_after'      => '</span>',
                          'fallback_cb'     => '',
                      ]); ?>
              </ul>
            </nav>
          <?php endif; ?>

          <?php if ($has_footer_menu) : ?>
            <nav aria-label="footer" role="navigation">
              <ul class="flex flex-row text-sm divide-x divide-gray-300 select-none dark:divide-gray-400">
                <?php
                      wp_nav_menu([
                          'container'       => '',
                          'link_before'     => '<span class="px-2 hover:text-primary dark:hover:text-primary-light">',
                          'link_after'      => '</span>',
                          'depth'           => 1,
                          'items_wrap'      => '%3$s',
                          'theme_location'  => 'footer',
                      ]); ?>
              </ul>
            </nav>
          <?php endif; ?>

        </div>
      </div>

  <?php endif;
  endif; ?>

</div>