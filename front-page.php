<?php get_header(); ?>


<section class="row">

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h1 class="display-1 text-center"><?php the_title(); ?></h1>
            <?php the_content(); ?>

    <?php
        endwhile;
    endif;
    ?>

</section>

</div>

<?php get_footer() ?>