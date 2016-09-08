<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

	<div id="sidebar1" class="sidebar" role="complementary">

		<?php dynamic_sidebar( 'sidebar1' ); ?>
	
	</div>

<?php endif; ?>

<!-- Page Specific Sidebar -->
<?php if ( have_posts() && get_post_meta($post->ID, 'ecpt_page_sidebar', true) ) : while ( have_posts() ) : the_post();?> 
	<div class="ecpt-page-sidebar">
		<?php echo apply_filters('the_content', get_post_meta($post->ID, 'ecpt_page_sidebar', true)); ?>
	</div>
<?php endwhile; endif; ?>
<!-- END Page Specific Sidebar -->