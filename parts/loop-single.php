<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<h4><?php get_template_part( 'parts/content', 'byline' ); ?></h4>
    </header> <!-- end article header -->
					
    <div class="entry-content" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
	</div> <!-- end article section -->
						
								
													
</article> <!-- end article -->