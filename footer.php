					<footer class="footer hide-for-print">
						<div id="inner-footer" class="row">
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