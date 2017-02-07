<?php
   /*
   Template Name: People Directory
   */
   ?>
<?php get_header(); 
	$theme_option = flagship_sub_get_global_options();
	$roles = get_terms('role', array(
						'orderby' 		=> 'ID',
						'order'			=> 'ASC',
						'hide_empty'    => true,
						)); 
	$filters = get_terms('filter', array(
						'orderby'       => 'name', 
						'order'         => 'ASC',
						'hide_empty'    => true, 
						));
	$role_slugs = array();
	$filter_slugs = array();
	foreach($roles as $role) {
		$role_slugs[] = $role->slug;
	}
	$role_classes = implode(' ', $role_slugs);
	foreach($filters as $filter) {
		$filter_slugs[] = $filter->slug;
	}
	$filter_classes = implode(' ', $filter_slugs);
	?>

<div id="content">
	<div id="inner-content" class="row">
	   <main id="main" class="small-12 large-8 large-push-3 columns">
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
				<?php foreach($roles as $role) {
					$role_slug = $role->slug;
					$role_name = $role->name;
						$people_query = new WP_Query(array(
								'post_type' => 'people',
								'role' => $role_slug,
								'meta_key' => 'ecpt_people_alpha',
								'orderby' => 'meta_value',
								'order' => 'ASC',
								'posts_per_page' => '-1'));        	
					
					if ($people_query->have_posts()) : ?>
						<li class="person sub-head quicksearch-match <?php echo $role->slug; ?>"><h2 class="black capitalize"><?php echo $role_name; ?></h2></li>
					<?php while ($people_query->have_posts()) : $people_query->the_post(); ?>
						<li class="person">
							<div class="row">
								<div class="small-12 columns">
								
									<?php if ( has_post_thumbnail()) { ?> 
										<?php the_post_thumbnail('directory'); ?>
									<?php } ?>			    
									<h3 class="no-margin">
										<?php if ( get_post_meta($post->ID, 'ecpt_website', true) ) : ?>
											<a href="<?php echo get_post_meta($post->ID, 'ecpt_website', true); ?>" title="<?php the_title(); ?>">
												<?php the_title(); ?>
											</a>
										<?php else : ?>
											<?php the_title(); ?>
										<?php endif; ?>	
									</h3>
									<?php if ( get_post_meta($post->ID, 'ecpt_position', true) ) : ?>
										<h4 class="no-margin"><?php echo get_post_meta($post->ID, 'ecpt_position', true); ?></h4>
									<?php endif; ?>
								<p class="contact black">
									<?php if ( get_post_meta($post->ID, 'ecpt_phone', true) ) : ?><span class="fa fa-phone-square" aria-hidden="true"></span> <?php echo get_post_meta($post->ID, 'ecpt_phone', true); ?><br><?php endif; ?>
									<?php if ( get_post_meta($post->ID, 'ecpt_email', true) ) : ?><span class="fa fa-envelope" aria-hidden="true"></span> <a href="mailto:<?php echo get_post_meta($post->ID, 'ecpt_email', true); ?>"> <?php echo get_post_meta($post->ID, 'ecpt_email', true); ?></a><br><?php endif; ?>
									<?php if ( get_post_meta($post->ID, 'ecpt_office', true) ) : ?><span class="fa fa-map-marker" aria-hidden="true"></span> <?php echo get_post_meta($post->ID, 'ecpt_office', true); ?><?php endif; ?>
								</p>
								</div>	
							</div>
						</li>			
				<?php endwhile; endif; } wp_reset_postdata(); ?>
				<!-- Page Content -->
			</div>
	   </main>
	   <!-- end #main -->
	</div> <!-- end #inner-content -->
</div>
<!-- end #content -->
<?php get_footer(); ?>