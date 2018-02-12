<?php
/**
 * Header del tema
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package base
 */

$url = get_template_directory_uri();

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Fuentes -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo $url; ?>/assets/libs/bootstrap/dist/css/bootstrap.min.css">
	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo $url; ?>/assets/css/main.css">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav>
			<!-- Llamada a menu de wordpress --> 
				<?php
				wp_nav_menu( array( 
					'container_class' => 'mainMenu', 
					'theme_location' => 'primary' ) );
				?>
		</nav>	
	</header><!-- #masthead -->
<div id="content" class="site-content">
