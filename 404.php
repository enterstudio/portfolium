<?php get_header(); ?>

<div class="page_meta clear">
	<div class="rss">
		<a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Subscribe to RSS feed'); ?></a>
	</div>
	<div class="heading">
		<h3><?php _e('404 Page not found'); ?></h3>
	</div>
	<?php if (function_exists('catlist')) catlist(); ?>
	<?php get_search_form(); ?>
</div>

<?php get_footer(); ?>
