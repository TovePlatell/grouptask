<?php /* Template Name: mitt-konto */ ?>

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