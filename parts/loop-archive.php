<article <?php post_class(''); ?> itemscope itemtype="http://schema.org/BlogPosting" aria-labelledby="post-<?php the_ID(); ?>">				
	<div class="article-header">
		<h1 class="entry-title single-title" itemprop="headline">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
				<?php the_title(); ?>
			</a>
		</h1 >
		<?php if (in_category( 'news')) : ?>
			<h4><?php get_template_part( 'parts/content', 'byline' ); ?></h4>
		<?php endif;?>
	</div> <!-- end article header -->
					
	<div class="entry-content" itemprop="articleBody">
		<?php the_excerpt('<button class="tiny">Read more...</button>'); ?>
	</div> <!-- end article section -->					
	<hr>				    						
</article> <!-- end article -->