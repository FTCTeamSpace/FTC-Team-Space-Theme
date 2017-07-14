<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>

	<div class="container">
	
	<!-- site-header -->
	<header class="site-header">
		<h1><?php bloginfo('name'); ?></h1>
		<h4><?php bloginfo('description'); ?></h4>
		
		<?php
		
		$args = array(
			'theme_location' => 'primary'
		);
		
		?>
		
		<nav class="site-nav">
			<?php wp_nav_menu($args); ?>
			<div id="handle">
				Menu
				<i style="float: right;" class="material-icons">menu</i>
			</div>
			<div class="nav-search">
				<?php get_search_form(); ?>
			</div>
		</nav>
	</header><!-- /site-header -->