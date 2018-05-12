<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Humane_Society
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(1, 66, 130);">
			<div class="container">
				<a href="#" class="navbar-brand">
					<img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/cat-and-dog.gif" height="100" width="100" />
					<img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/humane-society.gif" style="max-width: 300px" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php 
					wp_nav_menu(array(
						"theme_location" => "primary",
						"container" => "div",
						"container_id" => "navbarNavDropdown",
						"container_class" => "navbar-collapse collapse justify-content-end",
						"menu_class" => "navbar-nav",
						"depth" => 2,
						"walker" => new WP_Bootstrap_Navwalker()
					));
				?>
			</div>
		</nav>

		
	</header>	

	<div id="content" class="site-content">
