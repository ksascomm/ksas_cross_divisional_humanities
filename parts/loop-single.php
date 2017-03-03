<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> itemscope itemtype="http://schema.org/BlogPosting">

	<div class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
    </div> <!-- end article header -->

    <div class="entry-content" itemprop="articleBody">
		<?php if (!is_singular('ai1ec_event')) : ?>
			<?php the_post_thumbnail('full'); ?>
		<?php endif;?>
		<?php the_content(); ?>

	</div> <!-- end article section -->



</article> <!-- end article -->
