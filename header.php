<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />

	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<script src="js/bootstrap.js"></script>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
    <div class="container">


	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href=<?php site_url();?>>Happyheads</a>
					</div>
					<div class="col-sm-6 hidden-xs">
					<?php get_search_form(); ?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
		<?php get_search_form(); ?>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

					<?php  
					wp_nav_menu(
						array(
						'container' => 'ul',
						'menu_class' => 'menu',
						'theme_location' => 'primary'
						));
					?>

					</div>
				</div>
			</div>
		</nav>