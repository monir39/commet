<?php get_header(); ?>

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
                <h1 class="upper">This is our blog<span class="red-dot"></span></h1>
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


<?php while(have_posts()) :the_post() ?>

    <section class="b-0">
      <div class="container">
        <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true, &quot;directionNav&quot;: true}" class="flexslider nav-inside">
          <ul class="slides">

            <?php $all_portfolio_images = get_post_meta(get_the_ID(), 'portfolio-image', true );
            if (!empty($all_portfolio_images) && ! is_wp_error($all_portfolio_images)) :

                foreach($all_portfolio_images as $single_portfolio_img):
            ?>
            <li>
              <img src="<?php echo $single_portfolio_img; ?>" alt="">
            </li>
            <?php endforeach; 
            
                endif;

            ?>
          </ul>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="project-detail">
              <p><strong>Client:</strong><?php echo get_post_meta(get_the_ID(), 'client-name', true ); ?></p>
              <p><strong>Date:</strong><?php echo get_post_meta(get_the_ID(), 'project-date', true ); ?></p>
              <p><strong>Link:</strong><a href="<?php echo get_post_meta(get_the_ID(), 'project-link', true ); ?>" target="_blank"><?php echo get_post_meta(get_the_ID(), 'project-link', true ); ?></a>
              </p>

            <?php 

                $portfolio_category_in_content = get_the_terms( get_the_ID(),'portfolio-catagory' );

                if(!empty($portfolio_category_in_content) && ! is_wp_error($portfolio_category_in_content)):

                    $name_in_category = [];
                    foreach( $portfolio_category_in_content as $_single_portfolio_category_in_content ){

                        $name_in_category[] = $_single_portfolio_category_in_content -> name;
                    }

                    $selected_category_name = implode(", ", $name_in_category );

                endif;
             ?>
              <p><strong>Type:</strong><?php echo $selected_category_name; ?></p>
            </div>
          </div>
          <div class="col-sm-4">
            <p><?php the_content() ?></p>
          </div>
        </div>
      </div>
    </section>
    <section class="controllers p-0">
      <div class="container">
        <div class="projects-controller"><a href="#" class="prev"><span><i class="ti-arrow-left"></i>Previous</span></a><a href="#" class="all"><span><i class="ti-layout-grid2"></i></span></a><a href="#" class="next"><span>Next<i class="ti-arrow-right"></i></span></a>
        </div>
      </div>
    </section>
<?php endwhile; ?>

<?php get_footer(); ?>