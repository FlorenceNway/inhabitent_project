<?php /* Template Name: Journal Template */ 
		get_header(); 
?>
 
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
	<div id="grid-container">
	    	
	  	<div class="blog-wrapper">
			<?php $args = array( 'post_type' => 'post','order' =>'ASC')?>

			   <?php $posts = new WP_Query( $args );  ?>

				<?php if ( $posts->have_posts() ) : ?>
				  <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
				  	<div class="single-blog-wrapper">
					     <h2 class="blog-name"><?php echo the_title(); ?></h2>
					     <div class="blog-img">
					    <img src='<?php the_post_thumbnail_url(); ?>'></div>
					 	<div class="sub-detail">
					     <span class="date">
			        		<?php echo the_date()." /"; ?></span>
			    		<span class="comment">
			        		<?php echo comments_number( 'no comment','one comment','% comments'); ?></span>
		    	 		</div>
		    	 <div class="blog-content">
		    	 	<?php the_excerpt(); ?>
		    	 </div>
				   <a href="<?php echo get_permalink();?>" class="post-btn">READ MORE</a>

				</div>  
				  <?php endwhile; ?>

			
				  <?php wp_reset_postdata(); ?>

			<?php else : ?>
			     <h2>Nothing found!</h2>
			<?php endif; ?>
		</div>
		<div class="journal-page-sidebar">
			<?php dynamic_sidebar( 'sidebar-1'); ?>
			
		</div>
		</main>
	</div>
</div>	


 <?php get_footer(); ?>