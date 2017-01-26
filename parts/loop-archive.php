<article <?php post_class(''); ?> itemscope itemtype="http://schema.org/BlogPosting" aria-labelledby="post-<?php the_ID(); ?>">				
	<div class="article-header">
		<h2 itemprop="headline">
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" id="post-<?php the_ID(); ?>">
				<?php the_title(); ?>
			</a>
		</h2 >
		<?php if (in_category( 'news')) : ?>
			<h4><?php get_template_part( 'parts/content', 'byline' ); ?></h4>
		<?php endif;?>
	</div> <!-- end article header -->
					
	<div class="entry-content" itemprop="articleBody">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		<?php the_content('<button class="tiny">Read more...</button>'); ?>
	</div> <!-- end article section -->					
	<hr>				    						
</article> <!-- end article -->