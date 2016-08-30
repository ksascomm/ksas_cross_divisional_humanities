<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		     <main id="main" class="small-12 large-8 large-push-2 columns" role="main">
		     	<?php the_breadcrumb(); ?>
		    	<header>
		    		<h1 class="page-title">News & Announcements <?php the_archive_title();?></h1>
		    	</header>


				<?php $news_archive_query = new WP_Query(array(
						'post_type' => 'post',
						'tax_query' => array(
							array(
								'taxonomy' => 'category',
								'field' => 'slug',
								'terms' => array( 'events' ),
								'operator' => 'NOT IN'
							)
						),
						'posts_per_page' => 10,));
			

			     if ($news_archive_query->have_posts()) : while ($news_archive_query->have_posts()) : $news_archive_query->the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
																								
		    </main> <!-- end #main -->
		    
			<div class="small-12 large-2 large-pull-8 columns hide-for-print" role="navigation"> 
				<?php get_sidebar(); ?>
			</div>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>