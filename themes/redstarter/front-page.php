<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 // Template Name: Home Page Template
 */

get_header('new'); ?>
	
	
	<div class="bgimg">
		
			<img class="center-logo" src="./wp-content/themes/redstarter/images/logos/inhabitent-logo-full.svg">
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<!-- <h1 class="page-title screen-reader-text"><?php //single_post_title(); ?> </h1> -->
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<!-- 	<?php //get_template_part( 'template-parts/content' ); ?>
 -->
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<section class="shop-stuff-product container-for-all ">
		<h2 class='frontpage-title'>Shop Stuff</h2>
		<div class="product-type-blocks">
		<?php $terms = get_terms('product-type',array() ); ?>

             <!-- <pre> <?php //print_r($terms);	?> </pre> -->

		<?php if ( $terms && ! is_wp_error( $terms ) ) : 
 
     	   		 foreach ( $terms as $term ) {
		        
		?>

			<div class="product-type-wrapper">
                        <img src="./wp-content/themes/redstarter/images/product-type-icons/<?php echo $term->slug ?>.svg" alt="<?php echo $term->slug ?>" />
                        
                        <p><?php echo $term->description ?></p>

                        <p><a href="<?php echo get_term_link($term) ?>" class="btn"><?php echo $term->slug ?> Stuff</a></p>
            </div>

		<?php
		    	}
    	
    	?>
    
	<?php endif; ?>
         
         	</div>
    </section> 

	<section class="container-for-all">
	<?php
		   $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => '3' );
		   $post_posts = get_posts( $args ); // returns an array of posts
	?>

		<h2 class="frontpage-title">Inhabitent Journal</h2>

		<div class="journal">
		
		<?php foreach ( $post_posts as $post ) : setup_postdata( $post ); ?>
		
			<div class="blog-post-thumnail">
				<div class="thumbnail-wrapper">
			  		<img src='<?php echo get_the_post_thumbnail_url(); ?>' >
			  	</div>
			
				<div class="descrpt-wrapper">
					<p> <?php echo get_the_date('d F Y'); ?>
					<span> / <?php echo comments_number( 'no comment', 'one comment', '% comments' ); ?> </span></p>
				  	
					<h2> <?php echo get_the_title(); ?> </h2>
				</div>
						<a href="<?php echo get_permalink(); ?>" class="post-btn" >READ ENTRY</a>
					
				
			</div>

		<?php endforeach; wp_reset_postdata(); ?>
		</div>
	</section>


<!-- ------------------Latest Adventures----------------- -->
<section class="adventure">
	
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
	<?php wp_reset_postdata(); ?>

	<div class='more-adv-btn'>
		<a href="<?php echo get_post_type_archive_link('adventure'); ?>" class="post-btn" >More Adventures</a>
	</div>

	</section>
	

 
<?php get_footer(); ?>
