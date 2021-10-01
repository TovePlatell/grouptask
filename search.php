
<?php


get_header();

?>
    <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
        <div class="row">
     
        </div>

        <ul class="products">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 12
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) {
                while ($loop->have_posts()) : $loop->the_post();
                    wc_get_template_part('content', 'product');
                endwhile;
            } else {
                echo __('No products found');
            }
            wp_reset_postdata();
            ?>
        </ul>
              

        </div>

       