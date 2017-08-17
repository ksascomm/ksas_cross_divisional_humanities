<?php
   /*
   Template Name: Fellows Directory
   */
   ?>
<?php get_header();
// It wasn't there, so regenerate the data and save the transient
	$fellows_people_query = new WP_Query(array(
		'post_type' => 'people',
		'role' => 'fellows',
		'meta_key' => 'ecpt_people_alpha',
		'orderby' => 'meta_value',
		'order' => 'ASC',
		'posts_per_page' => '-1'));
?>

<div id="content">
	<div id="inner-content" class="row">
	   <main id="main" class="small-12 large-9 large-push-1 columns">
			<?php the_breadcrumb(); ?>	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="large-12 columns">
						<?php get_template_part( 'parts/loop', 'page' ); ?>
					</div>
				</div>
			<?php endwhile; endif; ?>
		    <div class="row" id="fields_container">
				<ul id="directory">
				<?php if ($fellows_people_query->have_posts()) : while ($fellows_people_query->have_posts()) : $fellows_people_query->the_post(); ?>
						<li class="person">
							<div class="row">
								<div class="small-12 columns">
									<?php if ( has_post_thumbnail()) { ?> 
										<?php the_post_thumbnail('directory', array('class' => 'padding-five floatleft hide-for-small-only')); ?>
									<?php } ?>			    
									<?php if ( get_post_meta($post->ID, 'ecpt_bio', true) || get_post_meta($post->ID, 'ecpt_thesis', true) ) { ?> 
										<h3 class="no-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<?php } else { ?>
										<h3 class="no-margin"><?php the_title(); ?></h3>
									<?php } ?>
									<?php if ( get_post_meta($post->ID, 'ecpt_degrees', true) ) : ?><h4><?php echo get_post_meta($post->ID, 'ecpt_degrees', true); ?></h4><?php endif; ?>
									<p class="contact no-margin">
										<?php if ( get_post_meta($post->ID, 'ecpt_email', true) ) : ?><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:<?php echo get_post_meta($post->ID, 'ecpt_email', true); ?>"> <?php echo get_post_meta($post->ID, 'ecpt_email', true); ?></a><br><?php endif; ?>
									</p>
								<?php if ( get_post_meta($post->ID, 'ecpt_expertise', true) ) : ?>
									<p><strong>Research Interests:&nbsp;</strong>
										<?php echo get_post_meta($post->ID, 'ecpt_expertise', true); ?></p>
								<?php endif; ?>

								</div>	
							</div>
						</li>			
				<?php endwhile; endif; wp_reset_postdata(); ?>
				<!-- Page Content -->
			</div>
	   </main>
	   <!-- end #main -->
	</div> <!-- end #inner-content -->
</div>
<!-- end #content -->
<?php get_footer(); ?>