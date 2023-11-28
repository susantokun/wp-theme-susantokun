<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : content.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Monday, 28th December 2020 12:37:25 pm
 * | Last Modified   : Monday, 28th December 2020 12:39:49 pm
 * |==============================================================|
 */

?>

<?php if (!(is_search() || is_category() || is_tag())) : ?>

  <article id="post-<?php the_ID(); ?>" class="flex flex-col overflow-hidden transition-transform transform bg-white rounded-lg shadow-md opacity-95 hover:opacity-100 dark:bg-gray-900 place-content-between hover:-translate-y-1 hover:shadow-lg ring-1 ring-inset ring-gray-300 dark:ring-gray-700">
    <?php if (has_post_thumbnail()) { ?>
      <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>" aria-label="thumbnail">
        <?php the_post_thumbnail('thumbnail-homepage', ['class' => 'object-cover object-center w-full shadow-md', 'title' => get_the_title()]); ?>
      </a>
    <?php } else { ?>
      <a href="<?php the_permalink(); ?>" aria-label="thumbnail">
        <img src="/wp-content/themes/wp-theme-susantokun/assets/images/d1RjJMu.png" class="object-cover object-center w-full shadow-md" alt="<?php the_title_attribute(); ?>">
      </a>
    <?php } ?>
    <div class="p-4">
      <a href="<?php the_permalink() ?>">
        <h2 class="mb-2 text-lg font-bold leading-normal text-gray-800 hover:text-primary dark:text-gray-200 dark:hover:text-primary-light"><?php the_title() ?></h2>
      </a>
      <div class="text-xs leading-normal text-gray-700 dark:text-gray-300">
        <?php echo get_excerpt(156) ?>
      </div>
    </div>
    <div class="flex flex-wrap px-4 pb-4 mt-auto -mx-0.5">
      <?php get_template_part('template-parts/entry', 'categories'); ?>
    </div>
  </article>

<?php else : ?>
  <article class="relative flex flex-col overflow-hidden bg-white rounded-lg shadow-md opacity-95 hover:opacity-100 dark:bg-gray-900 hover:shadow-lg snake-border-animation ring-1 ring-inset ring-gray-300 dark:ring-gray-700">
    <span class="bg-gradient-to-r from-white dark:from-gray-800 dark:to-primary to-primary-light"></span>
    <span class="bg-gradient-to-b from-white dark:from-gray-800 dark:to-primary to-primary-light"></span>
    <span class="bg-gradient-to-l from-white dark:from-gray-800 dark:to-primary to-primary-light"></span>
    <span class="bg-gradient-to-t from-white dark:from-gray-800 dark:to-primary to-primary-light"></span>
    <a class="p-4 text-gray-900 hover:text-primary dark:text-gray-200 dark:hover:text-primary" href="<?php the_permalink() ?>">
      <h2 class="mb-2 text-lg font-bold leading-normal"><?php the_title() ?></h2>
      <div class="text-xs leading-normal text-gray-700 dark:text-gray-300"><?php echo get_excerpt(156) ?></div>
    </a>
  </article>
<?php endif; ?>