<?php 
	// Template Name: About Us Template
	get_header('new');
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?php while (have_posts()) : the_post(); ?>
		
		<div class="about-us-banner">
			<div class="about-title">
				<h1><?php echo get_the_title(); ?></h1>
			</div>
			<img src="<?php echo get_the_post_thumbnail_url(); ?>">
		</div>

		<div class="container-for-all content-info">
			<h2>Our Story</h2>
			<?php echo CFS()->get('our_story'); ?><br> <!-- it must be the same name as custom field appear in wp -->
			<h2>Our Team</h2>
			<?php echo CFS()->get('our_team'); ?>
		</div><br><br>
	<?php endwhile; //end of the loop. ?>	

	</main>
</div>


<?php get_footer(); ?>