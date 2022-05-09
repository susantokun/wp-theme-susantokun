<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : index.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Monday, 28th December 2020 6:22:18 am
 * | Last Modified   : Monday, 28th December 2020 8:42:45 am
 * |==============================================================|
 */

get_header();
?>

<main role="main" class="h-full bg-white sm:bg-gray-100 dark:bg-black">

  <div class="container px-4 pt-4 pb-10 xl:max-w-screen-xl">

    <?php
    $archive_title    = '';
    $archive_subtitle = '';
    if (is_search()) : global $wp_query;
      $archive_title = sprintf(
          '%1$s %2$s',
          '<span class="text-primary">' . __('Search:', 'susantokun') . '</span>',
          '&ldquo;' . get_search_query() . '&rdquo;'
      );
      if ($wp_query->found_posts) :
        $archive_subtitle = sprintf(
            _n(
                'We found <b>%s</b> result for your search.',
                'We found <b>%s</b> results for your search.',
                $wp_query->found_posts,
                'susantokun'
            ),
            number_format_i18n($wp_query->found_posts)
        );
      else :
        $archive_subtitle = __('We could not find any results for your search.<br/>You can give it another try through the search form below.', 'susantokun');
      endif;
    elseif (!is_home()) :
      $archive_title    = get_the_archive_title();
      $archive_subtitle = get_the_archive_description();
    else : ?>

      <div class="hidden text-xl font-bold text-center text-gray-900 uppercase sm:block dark:text-gray-200 md:text-left"><?php _e('NEW ARTICLES', 'susantokun'); ?></div>
      <div class="hidden h-1 mt-2 mb-4 rounded-full sm:block bg-primary-lightest dark:bg-gray-800"></div>

    <?php endif; ?>

    <?php if ($archive_title || $archive_subtitle) : ?>
      <header class="mt-8">
        <?php if ($archive_title) { ?>
          <h1 class="text-2xl font-bold text-center text-gray-900 dark:text-gray-200"><?php echo wp_kses_post($archive_title); ?></h1>
        <?php } ?>

        <?php if ($archive_subtitle) { ?>
          <div class="my-1 text-base leading-normal text-center text-gray-800 dark:text-gray-300"><?php echo wp_kses_post(wpautop($archive_subtitle)); ?></div>
        <?php } ?>
      </header>
      <div class="h-1 mt-6 mb-8 rounded-full bg-primary-lightest dark:bg-gray-800"></div>
    <?php endif; ?>

    <?php if (have_posts()) : ?>
      <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
        <?php while (have_posts()) : the_post();  ?>
          <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endwhile; ?>
        <?php
          $enable_ads_content_home = get_theme_mod('enable_ads_content_home', false);
          if (true === $enable_ads_content_home) : ?>
          <div class="w-full h-auto col-span-1 row-start-6 overflow-hidden sm:col-span-2 sm:row-start-3 lg:col-start-2 lg:row-start-2">
            <?php echo get_theme_mod('ads_content_home', 'Ads Content Home Here!') ?>
          </div>
        <?php else : ?>
          <div class="flex items-center justify-center w-full h-auto col-span-1 row-start-6 overflow-hidden shadow-md sm:col-span-2 sm:row-start-3 lg:col-start-2 lg:row-start-2 ring-1 ring-inset ring-gray-300 dark:ring-gray-700">
            <?php _e('Space Ads Content Home', 'susantokun') ?>
          </div>
        <?php endif; ?>
      </div>
    <?php elseif (is_search()) : ?>
      <div class="flex items-center justify-center py-20">
        <?php get_search_form(['label' => __('search again', 'susantokun'), ]); ?>
      </div>
    <?php endif; ?>

    <?php custom_pagination(); ?>

  </div>

  <?php if (!is_search()) : ?>
    <div class="py-10 bg-white border-t border-gray-200 dark:border-gray-800 sm:bg-gray-50 dark:bg-black">
      <div class="container px-4 select-none xl:max-w-screen-xl">
        <?php get_template_part('template-parts/entry', 'tutorial') ?>
      </div>
    </div>
  <?php endif; ?>

</main>

<?php
get_footer();
