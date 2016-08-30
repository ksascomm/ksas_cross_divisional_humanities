<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		     <main id="main" class="small-12 large-8 large-push-2 columns" role="main">
		     	<?php the_breadcrumb(); ?>
		    	<header>
		    		<h1 class="page-title">News & Announcements <?php the_archive_title();?></h1>
		    	</header>
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
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