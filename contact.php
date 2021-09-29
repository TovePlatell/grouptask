<?php /* Template Name: Contact */ ?>

<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8" />
    <title>Labb 1</title>
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.js"></script>
</head>

<body>

    <div id="wrap">

        <?php get_header(); ?>

    <div class = "hero"><h1>Kontakta oss</h1></div>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
    <?php
        endwhile;
    endif;
    ?>


    <div class="location">
    <h2>Här finns vi</h2>

  <?php


$args = array(  
    'post_type' => 'stores',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    'orderby' => 'title', 
    'order' => 'ASC',
    'cat' => 'home',
);
$loop = new WP_Query( $args ); 
    
while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
    <a href="<?php the_permalink(); ?>"> <?php echo the_title()?> </a>
   
   
<?php
endwhile;
wp_reset_postdata();

?>
   
   


        

        <?php get_footer(); ?>