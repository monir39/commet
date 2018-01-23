<?php
/* 
	template name: 100% width
*/
 
 get_header(); 


?>


<?php if(get_post_meta(get_the_ID(),'rev-field-id', true )): ?>
    
     <section id="home">
      <!-- Home Slider-->
      <div id="home-slider" class="flexslider">
        
        <?php putRevSlider(get_post_meta(get_the_ID(),'rev-field-id', true )); ?>
        <?php while (have_posts()) : the_post(); ?>
              
        <?php endwhile; ?>

      </div>
      <!-- End Home Slider-->
    </section>

<?php else: ?>
        
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/bg/18.jpg" class="parallax-bg"></div>
      <div class="parallax-overlay">
        <div class="centrize">
          <div class="v-center">
            <div class="container">
              <div class="title center">
                <h1 class="upper"><?php wp_title() ?><span class="red-dot"></span></h1>
                <h4>We have a few tips for you.</h4>
                <hr>
              </div>
            </div>
            <!-- end of container-->
          </div>
        </div>
      </div>
    </section>

<?php endif; ?>

 



    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

        <?php while(have_posts()) : the_post(); ?>
            <article class="post-single">
      
              <div class="post-body">
                <?php the_content(); ?>
              </div>
            </article>

        <?php endwhile; ?>

            
          </div>
         
        </div>
        <!-- end of row-->
      </div>
    </section>


    <!-- Footer-->
   <?php get_footer(); ?>