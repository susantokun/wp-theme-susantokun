<?php
$susantokun_unique_id  = susantokun_unique_id('search-form-');
$susantokun_aria_label = !empty($args['label']) ? 'aria-label="' . esc_attr($args['label']) . '"' : '';
?>
<form role="search" <?php echo $susantokun_aria_label; ?> method="get" class="flex flex-col items sm:flex-row" action="<?php echo esc_url(home_url('/')); ?>">
	<label for="<?php echo esc_attr($susantokun_unique_id); ?>" class="">
		<span class="screen-reader-text"><?php _e('Search for:', 'susantokun'); ?></span>
		<input type="search" id="<?php echo esc_attr($susantokun_unique_id); ?>" class="h-10 pl-5 pr-4 text-gray-700 bg-white border border-gray-300 rounded-full shadow dark:text-gray-300 dark:border-gray-800 dark:focus:border-primary-light dark:bg-gray-900 focus:border-primary-light focus:ring focus:ring-primary-light focus:ring-opacity-50 focus:outline-none" placeholder="<?php _e('Search &hellip;', 'susantokun'); ?>" value="<?php echo get_search_query(); ?>" name="s">
	</label>
	<input type="submit" class="h-10 px-4 mt-2 ml-0 text-base font-medium text-white border border-transparent rounded-full shadow cursor-pointer focus:border-primary-dark dark:focus:border-primary-light dark:text-gray-100 sm:mt-0 sm:ml-2 bg-primary focus:outline-none hover:bg-primary-dark focus:ring focus:ring-primary-light focus:ring-opacity-50" value="<?php _e('Search', 'susantokun'); ?>">
</form>