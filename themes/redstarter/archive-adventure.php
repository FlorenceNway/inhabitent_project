<?php /* Template Name: Adventures Template */ 
		get_header(); 
?>
 
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
    <div id="grid-container">
    	
   	<section class="archive-adventure container-for-all">
	
	<?php
		   $args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'posts_per_page' => '4' );
		   $adventure_posts = get_posts( $args ); // returns an array of posts
	?>

		<h2 class="frontpage-title">Latest Adventures</h2>

		<ul>		
		<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
		    	
    	<li>

   		<div class="story-wrapper">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
               	<div class="story-info">
	                <h3 class="entry-title">
	                	<a href="<?php echo get_permalink(); ?>" rel="bookmark"><?php echo get_the_title(); ?> </a>
	                </h3>       
	                <a class="post-btn" href="<?php echo get_permalink(); ?>">Read More</a>
            	</div>
         	</div>
     	</li>
		
		<?php endforeach;  ?>
		</ul>
	

	</section>
	</main>
 </div>
 </div>	


 <?php get_footer(); ?>