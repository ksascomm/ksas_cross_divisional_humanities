<?php get_header(); ?>
	
	<div id="content">
	
		<div id="inner-content" class="row">

		    <main id="main" class="small-12 large-8 large-push-3 columns">

				<?php the_breadcrumb(); ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>