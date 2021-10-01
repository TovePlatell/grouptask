<?php /* Template Name: checkout/cart */ ?>



<div id="wrap">

<?php get_header(); ?>

<div class = "hero"><h1><?php echo the_title() ?></h1></div>

<?php
if (have_posts()) :
while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
<?php
endwhile;
endif;


get_footer(); ?>