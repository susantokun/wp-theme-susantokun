<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
</head>

<body <?php body_class('font-sans antialiased flex min-h-screen'); ?>>
  <div class="flex flex-col w-full">
    <?php wp_body_open(); ?>
    <main role="main" class="h-full bg-gray-700 dark:bg-black">
      <div class="container flex flex-col items-center justify-center h-full px-4 py-10 font-mono select-none xl:max-w-2xl">
        <h1 class="font-bold text-white text-8xl md:text-9xl">404</h1>
        <div class="px-4 py-1 mb-4 text-base font-medium text-gray-800 bg-white rounded sm:text-lg"><?php _e('Opps! Page Not Found', 'susantokun'); ?></div>
        <p class="mb-4 text-sm text-center text-white sm:text-base">
          <?php _e('The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'susantokun'); ?>
        </p>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center justify-center px-4 py-2 font-sans text-sm font-medium text-white rounded-full shadow hover:bg-primary-dark bg-primary">
          <span><?php _e('Back to Home', 'susantokun'); ?></span>
        </a>
      </div>
    </main>
  </div>
</body>