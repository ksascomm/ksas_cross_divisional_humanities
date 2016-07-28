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
				<div class="news-feed">
				   <h3><?php echo $theme_option['flagship_sub_feed_name']; ?></h3>
				   		<?php  //News Query		
							$news_query_cond = $theme_option['flagship_sub_news_query_cond'];
							$news_quantity = $theme_option['flagship_sub_news_quantity']; 
								if ($news_query_cond === 1) {
									$news_query = new WP_Query(array(
										'post_type' => 'post',
										'tax_query' => array(
											array(
												'taxonomy' => 'category',
												'field' => 'slug',
												'terms' => array( 'books' ),
												'operator' => 'NOT IN'
											)
										),
										'posts_per_page' => $news_quantity)); 
								} else {
									$news_query = new WP_Query(array(
										'post_type' => 'post',
										'posts_per_page' => $news_quantity)); 
								}
	
							if ( $news_query->have_posts() ) : while ($news_query->have_posts()) : $news_query->the_post(); ?>
							
								<?php get_template_part( 'parts/loop', 'news' ); ?>
								
							<?php endwhile; endif; ?>
				</div>
				<div class="row padding-10">
					
						<h5 class="black"><a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">View <?php echo $theme_option['flagship_sub_feed_name']; ?> Archive</a></h5>
					
				</div>
					
			</div>
		 	<aside class="small-12 large-4 columns hide-for-print" role="complementary"> 
				<?php if ( is_active_sidebar( 'sidebar1' ) ) { ?>
					<?php get_sidebar(); ?>
				<?php } ?>
				<?php get_sidebar('homepage'); ?>
			</aside>		
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>