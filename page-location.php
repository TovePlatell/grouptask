<?php get_header(); ?>
<div class="container">
 <div class="acf-map">
 <h2 class="text-center">
 <?php the_title();?>
 </h2>
 <?php 
 $locations = new WP_Query([
 'post_type' => 'location'
 ]);
 
 while($locations->have_posts()):
 $locations->the_post(); 
 $mapLocation = get_field('store_location');
 ?>
 <div class="marker" data-lat="<?php echo $mapLocation['lat']; ?>" data-lng="<?php echo $mapLocation['lng']; ?>">
 <h4><?php the_title(); ?></h4>
 <?php 
 echo $mapLocation['address']; ?>
 <p><?php the_content(); ?></p>
 </div>
 <?php endwhile; ?>
 </div>
</div>
<?php get_footer(); ?>

