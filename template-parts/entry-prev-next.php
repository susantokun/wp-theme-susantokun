<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : entry-prev-next.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Friday, 1st January 2021 2:45:15 pm
 * | Last Modified   : Sunday, 3rd January 2021 6:31:16 am
 * |==============================================================|
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ($next_post || $prev_post) : ?>
  <div class="flex items-center justify-between p-4 text-sm text-gray-800 select-none sm:px-6 dark:text-gray-200">
    <div class="text-right">
      <?php if ($prev_post) : ?>
        <a href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>" title="<?php echo $prev_post->post_title ?>" class="flex items-center text-left hover:text-primary dark:hover:text-primary">
          <span class="mr-2 text-xs icon-chevron-left" aria-hidden="true"></span>
          <span><?php echo wp_trim_words($prev_post->post_title, '5'); ?></span>
        </a>
      <?php endif; ?>
    </div>
    <div class="text-right">
      <?php if ($next_post) : ?>
        <a href="<?php echo esc_url(get_permalink($next_post->ID)); ?>" title="<?php echo $next_post->post_title ?>" class="flex items-center text-right hover:text-primary dark:hover:text-primary">
          <span><?php echo wp_trim_words($next_post->post_title, '5') ?></span>
          <span class="ml-2 text-xs icon-chevron-right" aria-hidden="true"></span>
        </a>
      <?php endif; ?>
    </div>
  </div>
  <div class="h-px bg-gray-300 dark:bg-gray-700"></div>
<?php endif; ?>