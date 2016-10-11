<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header">
	<?php if ( !is_front_page() ) : ?>
		<h1 class="page-title"><?php the_title(); ?></h1>
	<?php endif; ?>
	</header> <!-- end article header -->
					
    <div class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</div> <!-- end article section -->
					
</article> <!-- end article -->