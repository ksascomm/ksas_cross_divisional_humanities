<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->
<?php get_template_part( 'parts/explore', 'ksas' ); ?>

<?php if(is_mobile()) :  ?>
<div class="top-bar hide-for-print" id="top-bar-menu">
<?php else : ?>
	<?php if (is_front_page()) : ?>
		<div class="top-bar backstretch-banner-home" id="top-bar-menu">
	<?php else : ?>
		<div class="top-bar backstretch-banner" id="top-bar-menu">
	<?php endif; ?>
<?php endif;?>

	<div class="show-for-print">
		<img src="<?php echo get_template_directory_uri() ?>/assets/images/krieger.small.horizontal.blue.jpg" alt="krieger logo">
		<h1><?php echo get_bloginfo ( 'description' ); ?> <?php echo get_bloginfo( 'title' ); ?></h1>
	</div>

	<div id="mobile-nav" class="hide-for-print">
  		<div class="row">
	        <div class="small-12 columns">
	  			<div class="mobile-logo">
	  				<a href="<?php echo network_site_url(); ?>">
	  					<img src="<?php echo get_template_directory_uri() ?>/assets/images/ksas-logo-horizontal.png" alt="ksas logo">
	  				</a>
	  			</div>
	  		</div>
	  	</div>
  		<div class="row">
  			<div class="small-12 columns">	
  				<br><h1 class="center"><a href="<?php echo site_url(); ?>"><small><?php echo get_bloginfo ( 'description' ); ?></small><?php echo get_bloginfo( 'title' ); ?></a></h1>
  			</div>
  		</div>
	</div>

	<div id="desktop-nav" class="hide-for-print">
		<div class="small-12 columns" id="logo_nav">
			<div class="row">
				<div class="small-12 medium-4 large-3 columns">
					<div class="logo">
						<a href="<?php echo network_home_url(); ?>" title="Krieger School of Arts & Sciences">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/ksas-logo.png" alt="ksas logo">
						</a>
					</div>
				</div>
				<div class="small-12 medium-8 large-9 columns">
					<h1><a href="<?php echo site_url(); ?>"><small><?php echo get_bloginfo ( 'description' ); ?></small><?php echo get_bloginfo( 'title' ); ?></a></h1>
				</div>
			</div>
		</div>
	</div>
	
	<div class="top-bar-right show-for-medium hide-for-print">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only hide-for-print">
		<ul class="menu">
			 <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
			<li><a data-toggle="off-canvas">Menu</a></li>
		</ul>
	</div>
</div>