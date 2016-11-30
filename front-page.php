<?php get_header(); ?>
	<div id="content">
		<?php $theme_option = flagship_sub_get_global_options(); ?>
			
	
		<div id="inner-content" class="row">

		    <div id="main" class="small-12 large-8 large-push-2 intro columns" role="main">
				 
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>
			     <hr>
			</div> <!-- end #main -->

			<div class="small-12 large-8 columns">
				
			<?php //Events Query	 
				 $events_query = new WP_Query(array(
					'post_type' => 'post',
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
				)); 
				if ( $events_query->have_posts() ) : ?>
				<section class="events-feed">
				   <h1>Events</h1>
				   	 <?php while ($events_query->have_posts()) : $events_query->the_post(); ?>
							
					<?php get_template_part( 'parts/loop', 'events' ); ?>
					<?php endwhile; ?>
			
					<div class="row padding-10">
						<h2>
							<a href="<?php echo site_url();?>/category/events/">View All Events</a>
						</h2>
					</div>
				</section>

				<br>

				<?php endif; ?>
				
				<section class="news-feed">
				   <h1>News & Announcements</h1>
				   		<?php  //News Query		
								$news_query = new WP_Query(array(
									'post_type' => 'post',
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field' => 'slug',
											'terms' => array( 'events' ),
											'operator' => 'NOT IN'
										)
									) 
								)); 
	
	
							if ( $news_query->have_posts() ) : while ($news_query->have_posts()) : $news_query->the_post(); ?>
							
								<?php get_template_part( 'parts/loop', 'news' ); ?>
								
							<?php endwhile; endif; ?>
					<div class="row padding-10">
						<h2>
							<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">News & Announcements Archive
							</a>
						</h2>
					</div>			
				</section>
			</div>

		 	<aside class="small-12 large-4 columns hide-for-print"> 

				<?php if ( is_active_sidebar( 'sidebar1' ) ) { ?>
					<?php get_sidebar(); ?>
				<?php } ?>
				<?php get_sidebar('homepage'); ?>

			</aside>		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>