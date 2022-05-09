<div class="p-4 sm:px-6">
  <?php get_template_part('template-parts/comment', 'policy') ?>
  <div id="disqus_thread" class="pt-8 pb-4 text-gray-800 dark:text-primary-light">
    <div id="disqus_trigger" class="text-sm text-center">
      <button onclick="load_disqus('susantokun')"
        class="relative button-primary">
        <span class="font-medium"><?php _e('View / Post Comments', 'susantokun'); ?></span>
        <span class="absolute top-0 right-0 flex w-3 h-3 -mt-1 -mr-1">
          <span class="absolute inline-flex w-full h-full bg-red-300 rounded-full opacity-75 animate-ping"></span>
          <span class="relative inline-flex w-3 h-3 bg-red-400 rounded-full"></span>
        </span>
      </button>
    </div>
  </div>
</div>