<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		     <main id="main" class="small-12 large-8 large-push-3 columns">
		     	<?php the_breadcrumb(); ?>
		    		<h1 class="page-title">News & Announcements <?php the_archive_title();?></h1>

					<?php $paged = (get_query_var('paged')) ? (int) get_query_var('paged') : 1;
						if ( false === ( $news_archive_query = get_transient( 'news_archive_query_' . $paged ) ) ) {
								$news_archive_query = new WP_Query(array(
									'post_type' => 'post',
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field' => 'slug',
											'terms' => array( 'news' ),
										)
									),
									'posts_per_page' => 7,
									'paged' => $paged)); 
								set_transient( 'news_archive_query_' . $paged, $news_archive_query, 2592000 );
							} 	

							while ($news_archive_query->have_posts()) : $news_archive_query->the_post(); ?>

							<!-- To see additional archive styles, visit the /parts directory -->
								<?php get_template_part( 'parts/loop', 'archive' ); ?>
			
							<?php endwhile; ?>	

						<?php joints_page_navi(); ?>		
																									
		    </main> <!-- end #main -->
		    
			<div class="small-12 large-3 large-pull-9 columns hide-for-print archive"> 
				<?php get_template_part( 'parts/nav', 'sidebar' ); ?>
			</div>


		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>