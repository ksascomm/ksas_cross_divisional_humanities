					<footer class="footer hide-for-print">
						<div id="inner-footer" class="row">

							<!-- Footer Links -->
							<div class="small-12 medium-4 columns">
								<ul id="menu-footer-links" class="menu simple hide-for-small-only" role="menu">
									<li role="menuitem"><a href="http://krieger.jhu.edu/faculty-jobs/">Employment</a></li>	
									<li role="menuitem"><a href="https://www.jhu.edu/alert/">Emergency Alerts</a></li>
								</ul>
							</div>
							<!-- Social Media -->
							<div class="small-12 medium-3 large-push-5 columns social-media hide-for-small-only">
								<a href="http://facebook.com/JHUArtsSciences"><span class="fa fa-facebook-official fa-2x"></span><span class="screen-reader-text">Facebook</span></a>
								<a href="https://www.instagram.com/JHUArtsSciences/"><span class=" fa fa-instagram fa-2x"></span><span class="screen-reader-text">Instagram</span></a>
								<a href="https://twitter.com/JHUArtsSciences"><span class="fa fa-twitter fa-2x"></span><span class="screen-reader-text">Twitter</span></a>
								<a href="https://www.youtube.com/user/jhuksas"><span class="fa fa-youtube-square fa-2x"></span><span class="screen-reader-text">YouTube</span></a>
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
						  				<a href="http://www.jhu.edu" title="Johns Hopkins University"><img src="<?php echo get_template_directory_uri() ?>/assets/images/jhu-horizontal.png" / alt="Johns Hopkins University logo"></a>
						  			</div>
						  		</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->