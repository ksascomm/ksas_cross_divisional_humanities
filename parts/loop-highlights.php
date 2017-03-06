<article <?php post_class(''); ?> itemscope itemtype="http://schema.org/BlogPosting" aria-labelledby="post-<?php the_ID(); ?>">

	<div class="small-4 columns">
		<?php the_post_thumbnail('full', array('class'	=> "floatleft")); ?>
	</div>

	<div class="small-8 columns">
		<header class="article-header" aria-label="<?php the_title();?>">	
			<h1 class="entry-title single-title" itemprop="headline">
				<a id="post-<?php the_ID(); ?>" href="<?php if ( get_post_meta($post->ID, 'ecpt_highlight_location', true) ) : ?><?php echo get_post_meta($post->ID, 'ecpt_highlight_location', true); ?><?php else : ?><?php the_permalink();?><?php endif ;?>"><?php the_title();?></a>
			</h1>
	    </header> <!-- end article header -->
						
	    <div class="entry-content" itemprop="articleBody">
			<?php the_content(); ?>
		</div> <!-- end article section -->
	</div>
																		
</article> <!-- end article -->