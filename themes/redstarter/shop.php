<?php /* Template Name: Shop Template */ 
		get_header();
?>


<h2 class="shopstuff-title">SHOP STUFF</h2>
 
<div id"primary" class="content-area">
       <main id="main" class="site-main" role="main">

		<nav id="site-navigation" class="main-navigation" role="navigation">
					
					
					<?php wp_nav_menu( array( 'theme_location' => 'shop', 'menu_id' => 'shop-menu' ) ); 
					?>
			
		</nav><!-- .site-navigation -->


	   <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 20)?>
	   <?php $posts = new WP_Query( $args );  ?>

		<div class="product-blocks container-for-all">
		<?php if ( $posts->have_posts() ) : ?>
		  <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
		     
		     <div class="products-wrapper">
		     	<div class="thumbnail-wrapper">
		     		<a href="<?php echo get_permalink();?>"><img src='<?php the_post_thumbnail_url(); ?>'></a>
		     	</div>
			     
			     <div class="product-info">
				     <p><?php echo the_title()." ............. "; ?>

			 	     <span class="price">
				        <?php echo CFS()->get( 'price' ); ?></p>		
		    		</span>
			     </div>
		     </div>
		     	
		    
		  <?php endwhile; ?>
		
		  
		  <?php wp_reset_postdata(); ?>

		<?php else : ?>
		     <h2>Nothing found!</h2>
		<?php endif; ?>
		</div>
	</main>
</div>



<?php get_footer(); ?>