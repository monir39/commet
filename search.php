


  <?php get_header(); ?>

    <!-- End Navigation Bar-->
    <section class="page-title parallax">
      <div data-parallax="scroll" data-image-src="images/bg/15.jpg" class="parallax-bg"></div>
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





    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-8">

        <?php while(have_posts()) : the_post(); ?>
            <article class="post-single">
              <div class="post-info">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h6 class="upper"><span>By</span><a href="<?php the_permalink(); ?>"><?php the_author(); ?></a><span class="dot"></span><span><?php the_time('F','d','Y'); ?></span><span class="dot"></span><a href="<?php the_permalink(); ?>" class="post-tag"><?php the_tags(); ?></a></h6>
              </div>


              <?php if( get_post_meta(get_the_ID(), 'video-link', true) ): ?>

                    <div class="post-media">
                      <div class="media-video">
                        <?php echo wp_oembed_get( get_post_meta(get_the_ID(), 'video-link', true ) ); ?>
                      </div>
                    </div>

              <?php elseif( get_post_meta( get_the_ID(), 'audio-lik', true) ): ?>

                <div class="post-media">
                    <div class="media-audio">
                      <?php echo wp_oembed_get(get_post_meta(get_the_ID(), 'audio-lik', true)); ?>
                    </div>
                </div>

              <?php elseif( get_post_meta(get_the_ID(), 'gallery-images', true) ): ?>

                 <div class="post-media">
                  <div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true" class="flexslider nav-outside">
                    <ul class="slides">

                        <?php 

                            $gallery_images_all =  get_post_meta( get_the_ID(), 'gallery-images', true );

                            foreach ( $gallery_images_all as $single_img) :

                        ?>
                          <li>
                            <img src="<?php echo $single_img; ?>" alt="">
                          </li>
                
                        <?php endforeach; ?>

                    </ul>
                  </div>
                </div>

              <?php else: ?>

                    <div class="post-media"><?php the_post_thumbnail(); ?></div>

              <?php endif; ?>

            
              <div class="post-body">
                <?php the_content(); ?>
              </div>
            </article>

        <?php endwhile; ?>



            <!-- end of article-->
            <div id="comments">
              <h5 class="upper"><?php comments_popup_link('No comment','One comment','% comments'); ?></h5>
              <?php comments_template(); ?>
             
            </div>
            
            <!-- end of comment form-->
          </div>
         
            <div class="col-md-3 col-md-offset-1">  

           <?php get_sidebar(); ?>
            </div>
            <!-- end of sidebar-->
        </div>
        <!-- end of row-->
      </div>
    </section>

    <!-- Footer-->
   <?php get_footer(); ?>