<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-section container-for-all">
					<div class="footer-blocks-wrapper">
				
							<?php dynamic_sidebar( 'contact-info' ); ?>
								<span><i class="fab fa-facebook-square"></i></span>
								<span><i class="fab fa-twitter-square"></i></span>
								<span><i class="fab fa-google-plus-square"></i></i></span>
							</p>
						
					</div>

					<div>
						<div class="business-hours">
								<?php dynamic_sidebar( 'business-hours' ); ?>

						</div>
					</div>

					<div class="footer-logo-wrapper">
						<div class="text-logo">
							<a href="<?php echo get_home_url(); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent logo" />
							</a>
						</div>
					</div>
				</div>
				<div class="site-info container-for-all">
					<div>
						Copyright &copy; 2017 Inhabitent
					</div>
				</div><!-- .site-info -->
			</div>
				
			</footer><!-- #colophon -->
		

		<?php wp_footer(); ?>

	</body>
</html>
