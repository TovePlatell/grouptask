



<!-- ======= Footer ======= -->
<footer id="footer" class="text-center text-lg-start bg-light text-muted">
 
   <!-- Section: Links  -->

  <section id="footer-wrapper-main">
  
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
 

  <!-- Content -->
  <h3 class="text-uppercase fw-bold mb-4">Happyheads
          </h3>
            <p><a>
              Ursula Printz Gata 2 <br>
              18900 Stockholm<br><br>
              <strong>Tel:</strong> +46 123 2344<br>
              <strong>Email:</strong> info@happyheads.com<br>
            </p></a>
            </div>
        <!-- Grid column -->

<!-- Grid column -->        
<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->


          <h6 class="text-uppercase fw-bold mb-4">
            Info
          </h6>  

          <p>
            <a class="text-reset" href="/kontakt">Kontakta oss</a>
          </p>  

          <p>
            <a href="/terms" class="text-reset">Allmänna Villkor</a>
          </p>  
          <p>
            <a href="/policy" class="text-reset">Retur & Återbetalning</a>
          </p>  
          <p>
            <a href="/location" class="text-reset">Våra butiker</a>
          </p>  
         
         
         
         
         
          <!-- < ?php          


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
    
    <a href="< ?php the_permalink(); ?>"> <?php echo the_title()?> </a>
   
   
< ?php    
endwhile;
wp_reset_postdata();

?> -->
         
        </div>  
        <!-- Grid column -->

<!-- Grid column -->        
<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Länkar
          </h6>  
          <p>
            <a href="/" class="text-reset">Startsida</a>
          </p>  
          <p>
            <a href="/mitt-konto" class="text-reset">Mitt konto</a>
          </p>  
          
          <p>
            <a href="/butik" class="text-reset">Shoppen</a>
          </p>  
         
        </div>  
        <!-- Grid column -->
        
         
         

      <!--     <div class="col-lg-4 col-md-6 footer-newsletter">
            <h6>Nyhetsbrev</h6>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Ja, tack!">
            </form>

          </div> -->

        </div>
      </div>
    </div>




    <!--     /*/==== -->
</section>
  
</div>
      <!-- Grid row -->
</div>
        <!-- Grid column -->
</div>
    <!--     /*/==== -->
    
    <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Happyheads</a>
  </div>
  
      </div>
    </div>
  </footer><!-- End Footer -->




<!-- #content

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        < ?php dynamic_sidebar('sidebar-1'); ? >
      </div>< !--  .col-md-4 -- >
      <div class="col-md-4">
        < ?php dynamic_sidebar('sidebar-2'); ?>
      </div>< !--  .col-md-4 -- >
      <div class="col-md-4">
        < ?php dynamic_sidebar('sidebar-3'); ?>
      </div>< !--  .col-md-4 -- >
    </div>< !--  .row -- >
    <div class="site-info">
      &copy; < ?php bloginfo( 'name' );
          echo ' - ';
          echo date("Y"); ?>
    </div>< !-- .site-info -- >
  </div>< !--  .container - -> 
</footer>< !-- #colophon -- >
</div>< !-- #page -->

<?php wp_footer(); ?>

</body>
</html>
