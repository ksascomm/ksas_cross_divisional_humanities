<?php get_header(); 
	$theme_option = flagship_sub_get_global_options(); 
	$collection_name = $theme_option['flagship_sub_search_collection'];
?>			
	<div id="content">

		<div id="inner-content" class="row">
	
			<main id="main" class="large-9 large-push-1 small-12 columns">

				<article id="content-not-found">
				
					<header class="article-header">
						<h1><?php _e("Page Not Found", "jointswp"); ?></h1>
					</header> <!-- end article header -->
			
					<section class="entry-content">
						<p><?php _e("The page you were looking for was not found, but maybe try looking again!", "jointswp"); ?></p>
					</section> <!-- end article section -->

					       <div class="callout secondary">
						       <form class="search-form" action="<?php echo site_url('/search'); ?>" method="get">
						                    <fieldset>
						                        <input type="text" class="input-text" name="q" />
						                        <label class="inline bold">Search:</label>
						                        <input type="radio" name="site" value="<?php echo $collection_name; ?>" checked>This site only
						                        <input type="radio" name="site" value="krieger_collection">All JHU websites
						                        <input type="submit" class="button blue_bg" value="Search Again" />
						                    </fieldset>
						       </form>  
					       </div>     
			
				</article> <!-- end article -->
	
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>