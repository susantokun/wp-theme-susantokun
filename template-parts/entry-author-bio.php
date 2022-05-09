<?php if (is_page() || is_page_template('templates/template-full-width.php')) : ?>
  <div class="flex flex-col items-center mb-4 text-gray-800 select-none dark:text-gray-200">
    <!-- <div class="flex-shrink-0 w-24 h-24 rounded-full bg-primary"></div> -->
    <img width="96px" height="96px" class="flex-shrink-0 object-cover object-center rounded-full" src="https://i.imgur.com/IcgVXx1.png" alt="susantokun avatar">
    <div class="flex flex-col items-center mt-4">
      <div class="text-lg font-semibold leading-none uppercase"><?php echo get_the_author_meta('user_nicename') ?></div>
      <div class="mt-1.5 text-sm text-center leading-normal">
        <?php if (get_the_author_meta('description')) :
            echo get_the_author_meta('description'); ?>
        <?php else :
            echo 'Hanya seorang programmer yang fokus di bidang <i>web development</i>. Tidak nyaman dengan keramaian dan suka akan keindahan.'; ?>
        <?php endif; ?>
      </div>
      <div class="flex items-center mt-1.5 space-x-2">
        <a href="<?php echo 'https://youtube.com/' . get_theme_mod('social_information_youtube', 'susantokun') ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center text-gray-800 bg-gray-300 rounded-md shadow-sm w-7 h-7 dark:text-gray-200 dark:bg-gray-700 dark:hover:text-gray-300 dark:hover:bg-gray-600 hover:text-black hover:bg-gray-400 hover:shadow-none" aria-label="youtube">
          <span class="text-base icon-youtube"></span>
        </a>
        <div class="flex items-center overflow-hidden bg-gray-200 rounded-md shadow-sm hover:bg-gray-300 dark:bg-gray-600 dark:hover:bg-gray-500 group hover:shadow-none h-7">
          <a href="<?php echo 'https://instagram.com/' . get_theme_mod('social_information_instagram', 'susantokun') ?>" target="_blank" rel="noopener" class="inline-flex items-center" aria-label="instagram">
            <div class="inline-flex items-center justify-center text-gray-800 bg-gray-300 w-7 h-7 dark:bg-gray-700 dark:group-hover:bg-gray-600 group-hover:bg-gray-400 rounded-l-md dark:text-gray-200 dark:group-hover:text-gray-300 group-hover:text-black">
              <span class="text-base icon-instagram"></span>
            </div>
            <span class="lowercase tracking-wide ml-1.5 mr-2 text-sm text-gray-700 dark:text-gray-200"><?php echo get_theme_mod('social_information_instagram', '@susantokun') ?></span>
          </a>
        </div>
        <a href="<?php echo get_theme_mod('social_information_more', 'https://info.susantokun.com') ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center text-gray-800 bg-gray-300 rounded-md shadow-sm w-7 h-7 dark:text-gray-200 dark:bg-gray-700 dark:hover:text-gray-300 dark:hover:bg-gray-600 hover:text-black hover:bg-gray-400 hover:shadow-none" aria-label="information">
          <span class="text-base icon-link"></span>
        </a>
      </div>
    </div>
  </div>
<?php else : ?>
  <div class="flex flex-col items-center p-4 text-gray-800 select-none sm:px-6 md:flex-row md:items-start dark:text-gray-200">
    <!-- <div class="flex-shrink-0 w-24 h-24 rounded-full bg-primary md:rounded"></div> -->
    <img width="96px" height="96px" class="flex-shrink-0 object-cover object-center rounded-full lg:rounded" src="https://i.imgur.com/IcgVXx1.png" alt="susantokun avatar">
    <div class="flex flex-col items-center mt-4 md:items-start md:ml-3 ml:0 md:mt-0">
      <div class="text-lg font-semibold leading-none uppercase"><?php echo get_the_author_meta('user_nicename') ?></div>
      <div class="md:mt-1 mt-1.5 text-sm leading-normal text-center md:text-left">
        <?php if (get_the_author_meta('description')) :
            echo get_the_author_meta('description'); ?>
        <?php else :
            echo 'Hanya seorang programmer yang fokus di bidang <i>web development</i>. Tidak nyaman dengan keramaian dan suka akan keindahan.'; ?>
        <?php endif; ?>
      </div>
      <div class="flex items-center md:mt-1 mt-1.5 space-x-1.5">
        <a href="<?php echo 'https://youtube.com/' . get_theme_mod('social_information_youtube', 'susantokun') ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center text-gray-800 bg-gray-300 rounded-md shadow-sm w-7 h-7 dark:text-gray-200 dark:bg-gray-700 dark:hover:text-gray-300 dark:hover:bg-gray-600 hover:text-black hover:bg-gray-400 hover:shadow-none" aria-label="youtube">
          <span class="text-base icon-youtube"></span>
        </a>
        <div class="flex items-center overflow-hidden bg-gray-200 rounded-md shadow-sm hover:bg-gray-300 dark:bg-gray-600 dark:hover:bg-gray-500 group hover:shadow-none h-7">
          <a href="<?php echo 'https://instagram.com/' . get_theme_mod('social_information_instagram', 'susantokun') ?>" target="_blank" rel="noopener" class="inline-flex items-center">
            <div class="inline-flex items-center justify-center text-gray-800 bg-gray-300 w-7 h-7 dark:bg-gray-700 dark:group-hover:bg-gray-600 group-hover:bg-gray-400 rounded-l-md dark:text-gray-200 dark:group-hover:text-gray-300 group-hover:text-black" aria-label="instagram">
              <span class="text-base icon-instagram"></span>
            </div>
            <span class="lowercase ml-1.5 mr-2 text-sm tracking-wide text-gray-700 dark:text-gray-200">@<?php echo get_theme_mod('social_information_instagram', 'susantokun') ?></span>
          </a>
        </div>
        <a href="<?php echo get_theme_mod('social_information_more', 'https://info.susantokun.com') ?>" target="_blank" rel="noopener" class="inline-flex items-center justify-center text-gray-800 bg-gray-300 rounded-md shadow-sm w-7 h-7 dark:text-gray-200 dark:bg-gray-700 dark:hover:text-gray-300 dark:hover:bg-gray-600 hover:text-black hover:bg-gray-400 hover:shadow-none" aria-label="information">
          <span class="text-base icon-link"></span>
        </a>
      </div>
    </div>
  </div>
<?php endif; ?>