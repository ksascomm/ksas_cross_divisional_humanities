<section class="news" role="article">
		<div class="row">		
			<article class="small-12 columns">
				<h5><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
					<?php if ( has_post_thumbnail()) { ?> 
						<?php the_post_thumbnail('thumbnail', array('class'	=> "floatleft")); ?>
					<?php } ?>
					<?php the_excerpt(); ?>
					<hr>
			</article>
		</div>
 </section>	 <!-- end #news -->	