<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
		
		    <main id="main" class="small-12 large-10 large-push-1 columns">
			    
 				<h1 class="page-title">Humanities Highlights</h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>

		    	<?php //Events Query	 
				 $highlights_archive_query = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => '-1',
					'orderby' => 'date',
					'order' => 'desc',
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field' => 'slug',
							'terms' => array( 'highlights' ),
						)
					)
				)); ?>
			
		
		    	<?php if ($highlights_archive_query->have_posts()) : while ($highlights_archive_query->have_posts()) : $highlights_archive_query->the_post(); ?>
			 
					<?php get_template_part( 'parts/loop', 'highlights' ); ?>

				  <hr>  
				<?php endwhile; ?>	
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	
			<aside class="small-12 large-4 large-pull-8 columns hide-for-print"> 
				<?php get_template_part( 'parts/nav', 'breadcrumbs' ); ?>
				<?php get_sidebar(); ?>
			</aside>
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>