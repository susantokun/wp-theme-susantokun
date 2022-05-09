<?php

/**
 * |==============================================================|
 * | Please DO NOT modify this information :                      |
 * |--------------------------------------------------------------|
 * | Author          : Susantokun
 * | Email           : admin@susantokun.com
 * | Filename        : footer.php
 * | Instagram       : @susantokun
 * | Blog            : http://www.susantokun.com
 * | Info            : http://info.susantokun.com
 * | Demo            : http://demo.susantokun.com
 * | Youtube         : http://youtube.com/susantokun
 * | File Created    : Monday, 28th December 2020 8:47:04 am
 * | Last Modified   : Monday, 28th December 2020 8:47:12 am
 * |==============================================================|
 */

?>
<footer>
  <?php get_template_part('template-parts/footer-menus-widgets'); ?>
  <div class="py-1.5 text-sm text-white bg-gray-700 border-t border-gray-800 select-none dark:text-gray-300 dark:bg-black">
    <div class="container flex items-center justify-center h-10 px-4 sm:justify-between xl:max-w-screen-xl">
      <div class="flex items-center">
        <div>&copy; <?php echo date_i18n(_x('Y', 'susantokun')); ?> <a class="font-bold hover:text-primary-light" title="<?php bloginfo('name') ?>" href="https://www.susantokun.com"><span class="uppercase"><?php bloginfo('name') ?></span></a> -
          <?php _e('Made with', 'susantokun'); ?>
        </div>
        <span class="ml-1 text-sm text-red-500 icon-heart"></span>
      </div>
      <div class="hidden text-sm sm:block"><?php _e('Theme Version', 'susantokun'); ?> 2.0</div>
    </div>
  </div>
</footer>

<div class="fixed inset-x-0 bottom-0 z-50" id="progressbarBottom"></div>

<div id="scrollOverlay">
  <div class="flex flex-col overflow-hidden bg-gray-700 rounded-full ring-1 ring-transparent dark:ring-gray-800 dark:bg-black">
    <button type="button" title="Up Gan" id="scrollToTop" class="px-3 pt-1.5 text-white transition-transform transform hover:-translate-y-0.5 hover:text-primary-light focus:outline-none" aria-label="Up">
      <span class="text-xs icon-chevron-up"></span>
    </button>
    <button type="button" title="<?php _e('Open Comments', 'susantokun') ?>" class="px-3 py-0.5 text-white focus:outline-none hover:text-primary-light notif-show" id="btnRecentComment" aria-label="Comments">
      <div class="relative">
        <span class="text-xs icon-bell"></span>
        <span class="absolute top-0 right-0 flex w-1.5 h-1.5 mt-1 -mr-0.5">
          <span class="absolute inline-flex w-full h-full bg-yellow-300 rounded-full opacity-75 animate-ping"></span>
          <span class="relative inline-flex w-1.5 h-1.5 bg-yellow-400 rounded-full"></span>
        </span>
      </div>
    </button>
    <button type="button" title="Down Gan" id="scrollToBottom" class="px-3 pb-1.5 transition-transform transform hover:translate-y-0.5 text-white hover:text-primary-light focus:outline-none" aria-label="Down">
      <span class="text-xs icon-chevron-down"></span>
    </button>
  </div>
</div>

<div id="overlay-1"></div>
<div id="disqus-notif">
  <div class="flex items-center justify-between h-16 px-4 pt-0.5 text-lg font-bold text-white border-b-2 bg-primary border-primary-dark dark:bg-gray-900 dark:border-gray-700">
    <span class="text-base icon-chat"></span>
    <span><?php _e('COMMENTS', 'susantokun') ?></span>
    <button title="<?php _e('Exit', 'susantokun') ?>" id="btnClose" class="focus:outline-none close-1">
      <span class="text-sm icon-close"></span>
    </button>
  </div>
  <div class="dsq-widget" id="RecentComments">
    <script type="text/javascript" src="https://susantokun.disqus.com/recent_comments_widget.js?num_items=10&hide_mods=0&hide_avatars=0&avatar_size=32&excerpt_length=100">
    </script>
  </div>
</div>

<?php if (get_theme_mod('enable_loader', false)) : ?>
  <div class="loader-wrapper">
    <div class="loader"></div>
  </div>
  <script>
    loaderTime = 600;
    function fadeLoader() {
      var loader = $(".loader-wrapper");
      loader.fadeOut(loaderTime);
    }
    fadeLoader();
  </script>
<?php endif; ?>
<?php if (get_theme_mod('enable_adblock', false)) : ?>
  <script>
    function downloadJSAtOnload() {
      var e = document.createElement("script");
      !(function() {
        var e = document.createElement("script");
        (e.type = "text/javascript"),
        (e.async = !0),
        (e.src =
          "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"),
        (e.onerror = function() {
          var e;
          ((e = document.createElement("div")).id = "antiadblock"),
          (e.innerHTML =
            '<div class="container absolute inset-0 flex items-center justify-center px-4 select-none"><div class="w-full text-white bg-red-600 rounded-md shadow-lg md:w-full lg:w-1/2 xl:w-1/2"><div class="px-2 py-10 text-center"><div class="mb-6 text-xl font-bold md:text-3xl">AD BLOCKER TERDETEKSI...!</div><div class="text-sm md:text-base">Harap pertimbangkan untuk mendukung kami!</br>Silakan nonaktifkan pemblokiran iklan!</div></div></div></div></div>'),
          document.body.append(e),
            (document.body.style.overflow = "hidden"),
            (window.adblock = !0);
        });
        var n = document.getElementsByTagName("script")[0];
        n.parentNode.insertBefore(e, n);
      })(),
      document.body.appendChild(e);
    }
    window.addEventListener ?
      window.addEventListener("load", downloadJSAtOnload, !1) :
      window.attachEvent ?
      window.attachEvent("onload", downloadJSAtOnload) :
      (window.onload = downloadJSAtOnload);
  </script>
<?php endif; ?>

<?php wp_footer(); ?>

</div>

</body>

</html>