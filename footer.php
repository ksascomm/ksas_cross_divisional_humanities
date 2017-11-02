					<footer class="footer hide-for-print">
						<div id="inner-footer" class="row">

							<!-- Footer Links -->
							<div class="small-12 medium-9 columns" role="navigation" aria-label="Footer Menu Links">
								<ul id="menu-footer-links" class="menu hide-for-small-only" role="menu">
									<li role="menuitem"><a href="<?php echo get_site_url(); ?>/sitemap/">Sitemap</a></li>
								<?php if(get_page_by_title('Jobs') || get_page_by_title('Employment Opportunities') || get_page_by_title('Employment') ) : ?>
									<li role="menuitem"><a href="<?php echo get_site_url(); ?>/about/jobs/">Employment</a></li>
								<?php else : ?>
									<li role="menuitem"><a href="http://krieger.jhu.edu/faculty-jobs/">Employment</a></li>	
								<?php endif;?>
									<li role="menuitem"><a href="https://www.jhu.edu/alert/">Emergency Alerts & Info</a></li>
								</ul>
							</div>
							<!-- Social Media -->
							<div class="small-12 medium-3 large-2 columns end" role="navigation" aria-label="Social Media Links">
								<div class="small-6 columns">
									<a href="http://facebook.com/jhuksas" title="Facebook"><span class="fa fa-facebook-official fa-3x"></span><span class="screen-reader-text">Facebook</span></a>
								</div>
								<div class="small-6 columns">
									<a href="https://www.youtube.com/user/jhuksas" title="YouTube"><span class="fa fa-youtube-square fa-3x"></span><span class="screen-reader-text">YouTube</span></a>
								</div>
							</div>




						<!-- Copyright and Address -->
								<div class="row" id="copyright" role="contentinfo">
									<div class="small-12 columns">
						  				<p>&copy; <?php print date('Y'); ?> Johns Hopkins University<br>
						  				<?php $theme_option = flagship_sub_get_global_options();
						  				 echo $theme_option['flagship_sub_copyright'];?></p>
						  			</div>
						  		</div>
						  		<div class="row">
							  		<div class="small-12 small-centered medium-4 columns">
						  				<br><a href="http://www.jhu.edu" title="Johns Hopkins University"><img src="<?php echo get_template_directory_uri() ?>/assets/images/university.jpg" / alt="Johns Hopkins University logo"></a>
						  			</div>
						  		</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->