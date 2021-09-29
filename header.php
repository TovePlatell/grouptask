<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />

	


    <?php wp_head(); ?>

</head>
<body class= 'woocommerce'>
 <!-- Navigation-->
<nav class="shadow p-3 mb-5 bg-body rounded navbar navbar-expand-lg navbar-light" style="background-color: #adb5bd;">

<div class="container-fluid">
    <a class="navbar-brand" href="<?php site_url('/')?>">Happyheads</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
	<div class="navbar-nav ms-auto me-4 my-3 my-lg-0">
	<?php  
					wp_nav_menu(
						array(
						'menu_class' => 'menu',
						'theme_location' => 'primary',
						'container' => 'ul',
						));
					?>
                    </div>
    
       
					
				</div>
				
				
				<ul class="nav navbar-nav navbar-right navbar-search-button">	
</ul>
			<form class="d-flex">
			<?php get_search_form(); ?>
			</form>
			
</nav>

