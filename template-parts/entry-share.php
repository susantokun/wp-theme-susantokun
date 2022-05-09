<?php if (is_page() || is_page_template('templates/template-full-width.php')) : ?>
  <div class="grid grid-cols-3 gap-2 text-white select-none lg:grid-cols-2">
  <?php else : ?>
    <div class="grid grid-cols-3 gap-2 p-4 text-white select-none md:grid-cols-6 sm:px-6">
<?php endif; ?>
  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" target="_blank" rel="noopener">
    <button class="inline-flex items-center justify-center w-full px-4 py-2 font-bold text-white rounded-sm shadow bg-facebook hover:opacity-80 focus:outline-none" title="Bagikan di Facebook">
      <span class="mr-2 text-xs icon-facebook"></span>
      <span class="text-xs">Facebook</span>
    </button>
  </a>
  <a href="https://twitter.com/intent/tweet?text=<?php echo $title; ?>&amp;url=<?php echo $url; ?>&amp;via=susantokun" target="_blank" rel="noopener">
    <button class="inline-flex items-center justify-center w-full px-4 py-2 font-bold text-white rounded-sm shadow bg-twitter hover:opacity-80 focus:outline-none" title="Bagikan di Twitter">
      <span class="mr-2 text-xs icon-twitter"></span>
      <span class="text-xs">Twitter</span>
    </button>
  </a>
  <a href="https://www.linkedin.com/shareArticle/?title=<?php echo $title; ?>&url=<?php echo $url; ?>" target="_blank" rel="noopener">
    <button class="inline-flex items-center justify-center w-full px-4 py-2 font-bold text-white rounded-sm shadow bg-linkedin hover:opacity-80 focus:outline-none" title="Bagikan di LinkedIn">
      <span class="mr-2 text-xs icon-linkedin"></span>
      <span class="text-xs">LinkedIn</span>
    </button>
  </a>
  <a href="https://web.whatsapp.com/send?text=<?php echo $url; ?> – SUSANTOKUN" target="_blank" rel="noopener">
    <button class="inline-flex items-center justify-center w-full px-4 py-2 font-bold text-white rounded-sm shadow bg-whatsapp hover:opacity-80 focus:outline-none" title="Bagikan di WhatsApp">
      <span class="mr-2 text-xs icon-whatsapp"></span>
      <span class="text-xs">WhatsApp</span>
    </button>
  </a>
  <a href="https://lineit.line.me/share/ui?url=<?php echo $url; ?>&text=<?php echo $title; ?> – SUSANTOKUN" target="_blank" rel="noopener">
    <button class="inline-flex items-center justify-center w-full px-4 py-2 font-bold text-white rounded-sm shadow bg-line hover:opacity-80 focus:outline-none" title="Bagikan di LINE">
      <span class="mr-2 text-xs icon-line"></span>
      <span class="text-xs">LINE</span>
    </button>
  </a>
  <a href="https://t.me/share/url?url=<?php echo $url; ?>&text=<?php echo $title; ?> – SUSANTOKUN&to=" target="_blank" rel="noopener">
    <button class="inline-flex items-center justify-center w-full px-4 py-2 font-bold text-white rounded-sm shadow bg-telegram hover:opacity-80 focus:outline-none" title="Bagikan di Telegram">
      <span class="mr-2 text-xs icon-telegram-plane"></span>
      <span class="text-xs">Telegram</span>
    </button>
  </a>
</div>