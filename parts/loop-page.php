<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> itemscope itemtype="http://schema.org/WebPage">
						
	
	<?php if ( !is_front_page() ) : ?>
		<div class="article-header" itemprop="headline">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</div> <!-- end article header -->	
	<?php endif; ?>
					
    <div class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</div> <!-- end article section -->
					
</article> <!-- end article -->