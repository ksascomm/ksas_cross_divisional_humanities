<?php
/*
Template Name: Page with Sidebar
*/
?>	

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="small-12 large-8 large-push-3 columns">
	
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'page' ); ?>
						
					<?php endwhile; endif; ?>							
				
			</main> <!-- end #main -->
		    
		    <aside class="small-12 large-3 large-pull-9 columns" id="sidebar"> 
				
				<?php get_template_part( 'parts/nav', 'sidebar' ); ?>
					
					<?php get_sidebar(); ?>

					<!-- Page Specific Sidebar -->
					<?php if ( have_posts()) : while ( have_posts() ) : the_post(); 
						$sidebar = get_post_meta($post->ID, 'ecpt_page_sidebar', true);
						dynamic_sidebar($sidebar);
					endwhile; endif; wp_reset_query();
					?>
					<!-- END Page Specific Sidebar -->

			</aside>
		
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
