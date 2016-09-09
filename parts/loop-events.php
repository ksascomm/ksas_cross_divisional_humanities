<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline">
			<a href="<?php the_permalink(); ?>">
				<?php the_title();?>
			</a>
		</h1>
    </header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
		<?php the_post_thumbnail('thumbnail', array('class'	=> "floatleft")); ?>
		<?php the_excerpt(); ?>
	</section> <!-- end article section -->
												
	<hr>

</article> <!-- end article -->