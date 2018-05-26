			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="container">
					<div class="row">
						<div class="col-12 col-xl-4">
							<ul class="footer__logo-list list-inline">
								<li>
									<a href="<?php echo home_url(); ?>" class="logo-link">
										<img src="<?php echo get_template_directory_uri(); ?>/img/logos/lmri-logo.svg" alt="Logo" class="logo-img">
									</a>
								</li>
								<li>
									LOWY MEDICAL <br> RESEARCH INSTITUTE
								</li>
							</ul>
							<div class="footer__desc">
								<?php
								// footer content
									get_template_part('partials/home/main-footer', 'page'); 
								?>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-4">
							<h3 class="footer__heading">Hello there</h3>
							<div class="footer__desc">
								<?php
								// footer content
									get_template_part('partials/home/main-footer', 'page'); 
								?>
							</div>
						</div>
						<div class="col-12  col-md-6 col-xl-4">
						<h3 class="footer__heading">Hello there</h3>
							<!-- copyright -->
							<p class="copyright">
								&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
								<?php _e('Powered by', 'html5blank'); ?>
								<a href="//www.seamgen.com" target="_blank" title="seamgen">seamgen.com</a>.
							</p>
							<!-- /copyright -->
						</div>
					</div>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /main-contaniner -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		// (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		// (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		// l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		// ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		// ga('send', 'pageview');
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	</body>
</html>
