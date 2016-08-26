<section class="news" role="article">
	<h4><?php echo $theme_option['flagship_sub_feed_name']; ?></h4>
		<div class="row">		
			<article class="small-12 columns">
				<h6><?php the_date(); ?></h6>
				<h5><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
				<?php if ( has_post_thumbnail()) { ?> 
					<?php the_post_thumbnail('thumbnail', array('class'	=> "floatleft")); ?>
				<?php } ?>
				<?php the_excerpt(); ?>
				<hr>
			</article>
		</div>
 </section>	 <!-- end #news -->	