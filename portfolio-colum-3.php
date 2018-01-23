<?php 
	
	/*
		template name: Portfolio 3 Column
	*/

 ?>

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


    <section>
      <div class="container">
        <ul id="filters">
          <?php $portfolio_category_in_menu = get_terms('portfolio-catagory'); ?>

			<?php if( !empty($portfolio_category_in_menu) && ! is_wp_error($portfolio_category_in_menu) ): ?>

				  <li data-filter="*" class="active">All</li>

				<?php $portfolio_category_in_menu = get_terms('portfolio-catagory');foreach ($portfolio_category_in_menu as $single_portfolio_category_in_menu): ?>
				  <li data-filter=".<?php echo $single_portfolio_category_in_menu-> slug; ?>"><?php echo $single_portfolio_category_in_menu -> name ?></li>
					
				<?php endforeach; ?>
				
			<?php endif; ?>
        </ul>
        <!-- end of portfolio filters-->
        <div id="works" class="three-col">
        	
		<?php 

				$porfolio_post = new WP_Query([
					'post_type'		=>'comet-portfolio'
				]);

				while( $porfolio_post -> have_posts() ) : $porfolio_post -> the_post();

				$portfolio_category_in_content = get_the_terms( get_the_ID(),'portfolio-catagory' );

			if (!empty ($portfolio_category_in_content) && ! is_wp_error($portfolio_category_in_content) ):

				$slug_in_category = [];
				$name_in_category = [];

				foreach( $portfolio_category_in_content as $_single_portfolio_category_in_content ){

					$slug_in_category[] = $_single_portfolio_category_in_content -> slug;
				}

				foreach( $portfolio_category_in_content as $_single_portfolio_category_in_content ){

					$name_in_category[] = $_single_portfolio_category_in_content -> name;

				}

				$seleted_category_slug = implode(" ", $slug_in_category);
				$selected_category_name = implode(" ", $name_in_category );

			endif;

			?>


	        <div class="work-item <?php echo $seleted_category_slug; ?>">
				<div class="work-detail">
				  <a href="<?php the_permalink(); ?>">
				    <?php the_post_thumbnail(); ?>
				    <div class="work-info">
				      <div class="centrize">
				        <div class="v-center">
				          <h3><?php the_title(); ?></h3>
					        <p><?php echo $selected_category_name; ?></p>
						</div>
				      </div>
				    </div>
				  </a>
				</div>
			</div>

		<?php endwhile; ?>




        </div>
        <!-- end of portfolio grid-->
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php echo get_template_directory_uri(); ?>/images/promo-image-1.png" alt="" class="mt-50">
          </div>
          <div class="col-md-5 col-md-offset-1">
            <div class="title txt-xs-center txt-sm-center">
              <h3>Let's Work Together<span class="red-dot"></span></h3>
              <p>Ratione animi iusto perspiciatis asperiores cum iste sequi earum beatae suscipit, dolor magnam est. Ipsum dignissimos.</p><a href="#" class="btn btn-dark-out">Apply Now</a>
            </div>
          </div>
        </div>
        <!-- end of row-->
      </div>
    </section>
    
    <?php get_footer(); ?>