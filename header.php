<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : header.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Monday, 28th December 2020 8:46:02 am
 * | Last Modified   : Monday, 28th December 2020 8:46:15 am
 * |==============================================================|
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body <?php body_class('font-sans antialiased flex min-h-screen'); ?>>

  <div class="flex flex-col w-full">

    <?php
    wp_body_open();
    ?>

    <!-- header-nav -->
    <nav id="navbar" x-data="{ open: false, atTop: true }" x-on:scroll.window="atTop = (window.pageYOffset > 0) ? false : true" x-bind:class="{ 'shadow-lg': !atTop, 'shadow-sm' : atTop }" class="sticky top-0 z-30 w-full h-full overflow-hidden text-white border-b-2 border-opacity-50 border-primary-darkest dark:text-gray-200 bg-gradient-to-r from-primary-dark to-primary dark:from-black dark:to-gray-900 dark:border-gray-800">
      <div class="container flex items-center justify-between h-16 px-4 xl:max-w-screen-xl">

        <div class="flex items-center justify-center w-10 overflow-hidden bg-transparent border rounded shadow lg:hidden border-primary-light dark:border-gray-700 h-9 switcher"></div>

        <div class="flex mt-px select-none">
          <?php
          susantokun_site_logo();
          susantokun_site_description();
          ?>
        </div>

        <div x-data="{openSearch: false}" class="items-center hidden space-x-2 lg:flex">

          <?php
          if (has_nav_menu('header')) { ?>
            <nav class="flex items-center justify-center px-1 bg-transparent border rounded shadow h-9 border-primary-light dark:border-gray-800">
              <ul class="flex items-center justify-center text-sm divide-x select-none divide-primary-light dark:divide-gray-700">
                <?php
                  if (has_nav_menu('header')) {
                      wp_nav_menu(
                          [
                              'container'       => '',
                              'items_wrap'      => '%3$s',
                              'theme_location'  => 'header',
                              'walker'          => new Susantokun_Walker_Nav_Menu(),
                          ]
                      );
                  } ?>
              </ul>
            </nav>
          <?php } ?>

          <div x-show="openSearch" @click.away="openSearch = false" class="flex items-center overflow-hidden origin-right border rounded shadow cursor-pointer border-primary-light dark:border-gray-800 h-9" x-transition:enter="transition-all ease-linear duration-300" x-transition:enter-start="opacity-0 transform scale-x-0" x-transition:enter-end="opacity-100 transform scale-x-100" x-transition:leave="transition-all ease-linear duration-300" x-transition:leave-start="opacity-100 transform scale-x-100" x-transition:leave-end="opacity-0 transform scale-x-0" x-cloak>
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
              <input class="pl-3 pr-2 text-sm text-gray-700 bg-white dark:text-gray-200 dark:bg-gray-900 h-9 focus:outline-none" type="search" placeholder="<?php _e('Search &hellip;', 'susantokun'); ?>" value="<?php echo get_search_query(); ?>" name="s">
            </form>
          </div>

          <div class="flex items-center justify-center bg-transparent border divide-x rounded shadow h-9 divide-primary-light dark:divide-gray-700 border-primary-light dark:border-gray-800">
            <button type="button" x-on:click="openSearch = !openSearch" class="inline-flex items-center justify-center h-6 px-3 bg-transparent hover:opacity-80 focus:outline-none" aria-label="Open Search">
              <span class="text-sm icon-search"></span>
            </button>
            <div class="h-6 px-3 switcher"></div>
          </div>

        </div>

        <!-- menu reponsive -->
        <div class="flex items-center justify-center w-10 overflow-hidden bg-transparent border rounded shadow lg:hidden border-primary-light dark:border-gray-700 h-9">
          <button type="button" @click="open = !open" class="inline-flex items-center justify-center w-full h-full text-white bg-transparent focus:outline-none hover:opacity-80" aria-label="Menu">
            <span x-show="!open" class="text-sm icon-menu"></span>
            <span x-show="open" class="text-sm transform rotate-360 icon-menu-open" x-cloak></span>
          </button>
        </div>

      </div>

      <div :class="{'block': open, 'hidden': ! open}" @click.away="open = false" class="block lg:hidden" x-cloak>
        <div class="overflow-hidden shadow-md">

          <div class="container px-4 pb-3 space-y-1">

            <div class="py-2 border-t border-primary-light dark:border-gray-700">
              <form role="search" class="flex items-center w-full overflow-hidden border rounded shadow border-primary-light dark:border-gray-700 h-9" action="<?php echo esc_url(home_url('/')); ?>" method="get">
                <span class="screen-reader-text"><?php _e('Search for:', 'susantokun'); ?></span>
                <input class="w-full h-full pl-4 pr-2 text-sm text-white placeholder-gray-100 bg-primary-light dark:text-gray-200 dark:bg-gray-800 focus:outline-none" type="search" placeholder="<?php _e('Search &hellip;', 'susantokun'); ?>" value="<?php echo get_search_query(); ?>" name="s" autofocus>
                <button type="submit" class="inline-flex items-center justify-center w-10 bg-transparent h-9 hover:opacity-80 focus:outline-none">
                  <span class="text-sm icon-search"></span>
                </button>
              </form>
            </div>

            <div class="bg-gray-100 rounded dark:bg-gray-800 dark:text-gray-300">
              <?php
              if (has_nav_menu('header')) { ?>
                <nav class="py-2 header-menu-wrapper" aria-label="header" role="navigation">
                  <ul class="space-y-1 text-sm font-medium">
                    <?php
                      if (has_nav_menu('header')) {
                          wp_nav_menu(
                              [
                                  'container'       => '',
                                  'items_wrap'      => '%3$s',
                                  'theme_location'  => 'header',
                                  'walker'          => new Susantokun_Walker_Nav_Menu_Mobile(),
                              ]
                          );
                      } ?>
                  </ul>
                </nav>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>

    </nav>

    <?php if (!(is_single() || is_404() || is_page() || is_search() || is_category() || is_tag())) : ?>
      <!-- header-brand -->
      <header class="border-b-4 border-primary-lightest dark:border-gray-800 bg-gradient-to-r from-primary-dark to-primary dark:from-black dark:to-gray-900">

        <div class="container flex flex-col items-center justify-center px-4 md:flex-row xl:max-w-screen-xl">

          <div class="flex flex-col items-center justify-center w-full h-auto py-8 pr-0 text-center select-none md:w-1/2 md:h-96 md:text-left md:items-start md:pr-4">

            <div class="block mb-2 border-2 rounded-full shadow-md md:hidden border-primary-dark bg-radial">
              <?php susantokun_the_theme_svg('avatar', 'px-1 rounded-full w-28 h-28 logo'); ?>
            </div>

            <div class="text-2xl font-bold leading-relaxed text-white dark:text-gray-50 text_typewriter">
              <?php echo get_theme_mod('header_brand_title', 'Hai ... Salam Kenal .....') ?>
            </div>

            <div class="mb-4 text-sm text-gray-50 sm:text-base dark:text-gray-100">
              <?php echo get_theme_mod('header_brand_description', '<p>Susantokun adalah situs edukasi dan tutorial pemrograman, <span class="inline md:block">banyak tutorial untuk pemula dan tentunya gratis.</span></p>') ?>
            </div>
            <div class="mb-4 -mx-1">
              <a href="<?php echo get_theme_mod('header_brand_link_1', 'https://www.youtube.com/susantokun?sub_confirmation=1') ?>" target="_blank" rel="noopener" class="inline-flex items-center px-4 mx-1 text-xs font-medium text-white transition border border-transparent rounded shadow-md hover:bg-opacity-80 bg-primary dark:bg-primary dark:hover:bg-primary-dark h-7 focus:outline-none focus:ring focus:border-primary-light focus:ring-opacity-50 focus:ring-primary-light"><?php echo get_theme_mod('header_brand_link_1_name', 'YOUTUBE') ?></a>
              <a href="<?php echo get_theme_mod('header_brand_link_2', 'https://github.com/susantokun') ?>" target="_blank" rel="noopener" class="inline-flex items-center px-4 mx-1 text-xs font-medium text-gray-800 transition bg-white border border-transparent rounded shadow-md focus:border-gray-300 focus:ring-opacity-50 hover:bg-opacity-80 h-7 focus:outline-none focus:ring focus:ring-primary-light"><?php echo get_theme_mod('header_brand_link_2_name', 'GITHUB') ?></a>
            </div>
            <div class="relative flex items-center justify-center px-4 py-3 border rounded shadow border-primary-light dark:border-primary">
              <div class="text-sm text-white select-text max-w-prose dark:text-gray-200">
                <?php echo get_theme_mod('header_brand_message', 'Terima kasih telah berkunjung') ?>
              </div>
              <span class="absolute top-0 right-0 flex w-3 h-3 -mt-1 -mr-1">
                <span class="absolute inline-flex w-full h-full bg-red-300 rounded-full opacity-75 animate-ping"></span>
                <span class="relative inline-flex w-3 h-3 bg-red-400 rounded-full"></span>
              </span>
            </div>

          </div>

          <div class="flex flex-col items-end justify-center w-full mb-8 md:w-1/2 md:mb-0">
            <?php
              $enable_ads_header = get_theme_mod('enable_ads_header', false);
              if (true === $enable_ads_header) : ?>
              <div class="w-full h-auto md:h-60">
                <?php echo get_theme_mod('ads_header', 'Ads Header Here!') ?>
              </div>
            <?php else : ?>
              <div class="flex items-center justify-center w-full h-32 text-sm text-white border md:h-60 sm:text-base dark:text-gray-200 border-primary-light">
                <?php _e('Space Ads Header', 'susantokun') ?>
              </div>
            <?php endif; ?>
            <div class="relative hidden md:block">
              <div class="absolute right-0 z-10 mt-5 border-2 rounded-full border-primary bg-radial">
                <?php susantokun_the_theme_svg('avatar', 'w-24 h-24 px-1 rounded-full logo'); ?>
              </div>
            </div>
          </div>

        </div>
      </header>
    <?php endif; ?>