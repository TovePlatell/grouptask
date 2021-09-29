<?php
/*
Template Name: Single-store
Template Post Type: Stores
*/
?>

<?php get_header(); ?>

<div class="hero">
<h1><?php echo the_title()?></h1>

</div>

<div class ="contact_store">
<h4><?php the_field('adress'); ?></h4>
<h4><?php the_field('telefon'); ?></h4>
<h4><?php the_field('email'); ?></h4>
</div>

<?php get_footer(); ?>