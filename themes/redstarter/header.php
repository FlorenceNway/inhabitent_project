<?php
/**
 * The header for our other page.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
		

			<div class="menu-container container-for-all 
				<?php  
				if(is_front_page() || is_page('about') || is_singular('adventure')){

					echo 'white-header';
				}else{
					echo 'green-header';
				}

			?>">

				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); 

					$url = "index.php";?>" rel="home">

						<div class="logo">
							<h1 class="site-title  screen-reader-text">
							</h1>
						</div>
					</a>	
				</div><!-- .site-branding -->
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); 

						?>
						<div class="header-search">
							<?php get_search_form(); ?>
						</div>

						
				</nav><!-- .site-navigation -->
			</div>	
		</header><!-- #masthead -->		
		<hr>

		
			

	<div id="content" class="site-content">
