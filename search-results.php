<?php 


/* Template Name: Search Results
*/
get_header();
?>


<main>

    <section>
        <div class="container">

            <h1>sökresultat </h1>

        </div>
    </section>

    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>


    <img src="<?php echo get_the_post_thumbnail_url();?> " />
    <h2 class="title"></h2>
    <?php the_title();?>



    <?php the_content();?>

    <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>