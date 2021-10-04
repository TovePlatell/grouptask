<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />

	


    <?php wp_head(); ?>

</head>
<body class= 'woocommerce'>
 <!-- Navigation-->
<nav class="shadow p-3 mb-5 bg-body rounded navbar navbar-expand-lg navbar-light" style="background-color: secondary;">

<div class="container-fluid">
	<a><h1>HAPPYHEADS</h1></a>
	
    <!-- <a id= navbar-brand-id class="navbar-brand" href="< ?php echo site_url('/')?>">Happyheads</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
	<div class="navbar-nav ms-auto me-4 my-3 my-lg-0">
	<?php  
					wp_nav_menu(
						array(
						'menu_class' => 'primary-menu',
						'theme_location' => 'primary',
						'container' => 'ul',
						));
					?>
                    </div>
    
       
					
				</div>
				<!-- <form class="d-flex input-group w-auto">
      <input
        type="search"
        class="form-control rounded"
        placeholder="Search"
        aria-label="Search"
        aria-describedby="search-addon"
      />
      <span class="input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
      </span>
    </form> -->
				<!--
				<p class="nav navbar-nav navbar-right navbar-search-button">	
</p>
			<form class="d-flex">
			 < ?php get_search_form(); ?> 
			</form>-->
			
</nav>

