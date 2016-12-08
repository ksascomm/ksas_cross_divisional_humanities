<?php get_header(); ?>
	<div id="content">

		<div id="inner-content" class="row">

		    <div id="main" class="small-12 large-8 large-push-2 intro columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    <?php endwhile; endif; ?>

			     <hr>

			</div> <!-- end #main -->

			<div class="small-12 large-8 columns">

				<section class="events-feed">
				   <h1>AGHI-sponsored Events</h1>

					 	<?php echo do_shortcode('[ai1ec view="agenda" cat_name="AGHI" events_limit="4"]');	?>
							
						<br>

					<div class="row padding-10">
						<div class="small-12 columns">
							<p>A complete calendar of all humanities-related events happening at Johns Hopkins is available on our <a href="<?php echo site_url();?>/events/">events page</a>.</p>	
						</div>
					</div>

				</section>
				
				<br>

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
								),
							));

						if ( $news_query->have_posts() ) : while ($news_query->have_posts()) : $news_query->the_post(); ?>
						<div class="small-12 columns">
							<?php get_template_part( 'parts/loop', 'news' ); ?>
						</div>
						<?php endwhile; endif; ?>
					<div class="row padding-10">
						<div class="small-12 columns">
							<h2>
								<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">News & Announcements Archive
								</a>
							</h2>
						</div>
					</div>
				</section>
			</div>

		 	<aside class="small-12 large-4 columns hide-for-print" id="sidebar">

				<?php if ( is_active_sidebar( 'sidebar1' ) ) { ?>
					<?php get_sidebar(); ?>
				<?php } ?>
				<?php get_sidebar('homepage'); ?>

			</aside>
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
