<?php /* Template Name: mitt-konto */ ?>

<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    
</head>

<body>

    <div id="wrap">

        <?php get_header(); ?>

        <div class="hero">
            <h1>Mitt konto</h1>
        </div>

        <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php
        endwhile;
    endif;
    ?>