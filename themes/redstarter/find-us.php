<?php /* Template Name: Find Us Template */ 
		get_header(); 
?>

<div id"primary" class="content-area">
       <main id="main" class="site-main" role="main">
		<div class="container-for-all findus-grid-container  ">

	   <?php while ( have_posts() ) : the_post(); ?>
			<div class="map-side">
				<h1><?php echo the_title(); ?></h1>
			
				<iframe
				  width="600"
				  height="450"
				  frameborder="0" style="border:0"
				  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDjA4Eebws3UHnF5fo_UqhRqflkFuxEMGQ&q=1490+W+Broadway,+Vancouver,+BC,+Canada
				" allowfullscreen>
				</iframe>

			
				<div>
					<?php echo the_content(); ?> 
				</div>

			</div>

		  <?php wp_reset_postdata(); ?>

		<?php endwhile; ?>

		<div class="find-us-sidebar">
			<?php dynamic_sidebar( 'sidebar-1'); ?>
	
		</div>
	</div>
	</main>
	
</div>



<?php get_footer(); ?>