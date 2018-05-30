<?php
/**
 * The template for displaying adventures single posts.
 *
 * @package RED_Starter_Theme
 */

get_header('new'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'single' );  ?>
			
			
			<footer class="jsfooter">
      			<div class="social-buttons">
				   <a class="post-btn"><i class="fab fa-facebook"></i> Like</a>
				   <a class="post-btn"><i class="fab fa-twitter"></i> Tweet</a>
				   <a class="post-btn"><i class="fab fa-pinterest"></i> Pin</a>
				</div>
         	</footer><!-- .entry-footer -->

		

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<br><br>
<?php get_footer(); ?>
