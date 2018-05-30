<?php
/**
 * The template for displaying post single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="grid-container">			
			<div class="blog-wrapper">
				<?php while ( have_posts() ) : the_post(); ?>

					<div class="single-blog-wrapper">
						    <h2 class="blog-name"><?php echo the_title(); ?></h2>
						    <div class="blog-img">
						    	<img src='<?php the_post_thumbnail_url(); ?>'>
						    </div>
						 	<div class="sub-detail">
						     	<span class="date">
				        		<?php echo the_date()." /"; ?></span>
				    			<span class="comment">
				        		<?php echo comments_number( 'no comment','one comment','% comments'); ?></span>
			    	 		</div>
			    	 		<div class="blog-content">
			    	 			<?php the_content(); ?>
			    	 		</div>	
			    	</div>

				
				<?php endwhile; // End of the loop. ?>
				</div>

					<div class="journal-page-sidebar">
						<?php dynamic_sidebar( 'sidebar-1'); ?>
					
					</div>
			 
		</div><!-- #grid-container -->
		<footer class="jsfooter">
      			<div class="social-buttons">
				   <a class="post-btn"><i class="fab fa-facebook"></i> Like</a>
				   <a class="post-btn"><i class="fab fa-twitter"></i> Tweet</a>
				   <a class="post-btn"><i class="fab fa-pinterest"></i> Pin</a>
				</div>
         </footer>

		<div class="container-for-all">
		
		<?php
				if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
		?>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
	

<?php get_footer(); ?>
