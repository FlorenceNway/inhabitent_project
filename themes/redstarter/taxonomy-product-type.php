<?php
/**
 * The template for displaying product-type archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container-for-all" role="main">
		<header class="product-type">
			<h1><?php echo the_archive_title(); ?></h1>
			<p><?php echo the_archive_description(); ?><p>
			<hr>	
	
		</header>	
		<div class="product-blocks">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

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

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
