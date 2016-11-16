<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
		
		    <main id="main" class="small-12 large-8 large-push-3 columns" role="main">
			    
		    	<header>
		    		<h1 class="page-title">Upcoming Events</h1>
		    	</header>

		    	<?php //Events Query	 
				 $events_archive_query = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => '-1',
					'orderby' => 'date',
					'order' => 'asc',
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field' => 'slug',
							'terms' => array( 'news' ),
							'operator' => 'NOT IN'
						)
					)
				)); ?>
			
		
		    	<?php if ($events_archive_query->have_posts()) : while ($events_archive_query->have_posts()) : $events_archive_query->the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	
			<div class="small-12 large-4 large-pull-8 columns hide-for-print" role="navigation"> 
				<?php get_template_part( 'parts/nav', 'breadcrumbs' ); ?>
				<?php get_sidebar(); ?>
			</div>
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>