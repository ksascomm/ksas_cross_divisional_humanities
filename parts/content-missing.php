<div id="post-not-found" class="hentry">
	
	<?php if ( is_search() ) : ?>
		
		<header class="article-header">
			<h1><?php _e("Sorry, No Results.", "jointswp");?></h1>
		</header>
		
		<div class="entry-content">
			<p><?php _e("Try your search again.", "jointswp");?></p>
		</div>
		
		<div class="search">
		    <p><?php get_search_form(); ?></p>
		</div> <!-- end search section -->
		
	<?php else: ?>
	
		<header class="article-header">
			<h1><?php _e("Oops, Post Not Found!", "jointstheme"); ?></h1>
		</header>
		
		<div class="entry-content">
			<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "jointstheme"); ?></p>
		</div>
		
		<div class="search">
		    <p><?php get_search_form(); ?></p>
		</div> <!-- end search section -->
			
	<?php endif; ?>
	
</div>
