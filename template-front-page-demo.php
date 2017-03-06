<?php
/*
Template Name: Front Page Demo
*/
?>

<?php get_header(); ?>
	<div id="content">

		<div id="inner-content" class="row">
			
		    <div id="main" class="small-12 large-8 large-push-2 intro columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> itemscope itemtype="http://schema.org/WebPage">
										
					    <div class="entry-content" itemprop="articleBody">
						    <?php the_content(); ?>
						    <?php wp_link_pages(); ?>
						</div> <!-- end article section -->
										
					</article> <!-- end article -->

			    <?php endwhile; endif; ?>

			     <hr>

			</div> <!-- end #main -->
		
		</div>

		<div class="brown-bg">
			<div class="row">
				<div class="small-12 large-10 large-push-1 columns events-feed" role="region" aria-label="Events & News">
					<div class="events">
					   <h1>Upcoming AGHI-sponsored Events</h1>
						<div class="row padding-10">
							<div class="small-12 columns">
								<p>A complete calendar of all humanities-related events, including all AGHI-sponsored events, happening at Johns Hopkins are available on our <a href="<?php echo site_url();?>/events/">events page</a>.</p>	
							</div>
						</div>
						 	<?php echo do_shortcode('[ai1ec view="agenda" cat_name="AGHI" events_limit="4"]');	?>
					</div>
				</div>
			</div>
		</div>

		<div id="inner-content-2">

			<div class="row">
				<div class="small-12 columns" role="region" aria-label="Events & News">
					
						<div class="news-feed highlights">
						<h1>Humanities Highlights <br>
							<small>Humanities Stories from Across Hopkins</small>
						</h1>
						<?php $highlights_query = new WP_Query(array(
									'post_type' => 'post',
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field' => 'slug',
											'terms' => array( 'highlights' ),
										)
									),
									'posts_per_page' => 1
								)); 

						if ( $highlights_query->have_posts() ) : while ($highlights_query->have_posts()) : $highlights_query->the_post(); ?>

							
							<?php get_template_part( 'parts/loop', 'highlights' ); ?>
						

							<?php endwhile; endif; ?>

					<div class="row padding-10">
						<div class="small-12 columns">
							<h2>
								<a href="<?php echo site_url();?>/category/highlights/">See all Humanities Highlights
									</a>
								</h2>
							</div>
						</div>	

					</div>
				</div>
			</div>
				<hr>
			<div class="row">
				<div class="small-12 large-8 columns" role="region" aria-label="Events & News">
					<div class="news-feed">

					   <h1>Announcements from the Institute</h1>
					   		<?php  if ( false === ( $news_query = get_transient( 'news_mainpage_query' ) ) ) {	
								$news_query = new WP_Query(array(
									'post_type' => 'post',
									'tax_query' => array(
										array(
											'taxonomy' => 'category',
											'field' => 'slug',
											'terms' => array( 'news' ),
										)
									),
									'posts_per_page' => 4
								));
							set_transient( 'news_mainpage_query', $news_query, 2592000 );
							} 	
							if ( $news_query->have_posts() ) : while ($news_query->have_posts()) : $news_query->the_post(); ?>

								<div class="small-12 columns">
									<?php get_template_part( 'parts/loop', 'news' ); ?>
								</div>

							<?php endwhile; endif; ?>

						<div class="row padding-10">
							<div class="small-12 columns">
								<h2>
									<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">See all Announcements
									</a>
								</h2>
							</div>
						</div>
					</div>
				</div>


				<?php if ( is_active_sidebar( 'sidebar1' ) || is_active_sidebar('homepage0')  ) : ?>

					<aside class="small-12 large-4 columns hide-for-print" id="sidebar"> 

						<?php dynamic_sidebar( 'sidebar1' ); ?>
						
							<?php if ( is_active_sidebar( 'sidebar1' ) && is_active_sidebar('homepage0')  ) : ?>
								<hr>
							<?php endif; ?>

						<?php dynamic_sidebar( 'homepage0' ); ?>

					</aside>
				<?php endif; ?>
			</div>
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>
