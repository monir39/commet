              


              <article class="post-single">
               <div class="post-info">
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <h6 class="upper"><span>By</span><a href="#"><?php the_author(); ?></a><span class="dot"></span><span><?php the_time('F, d, Y') ?></span><span class="dot"></span><a href="#" class="post-tag"><?php the_tags(); ?></a></h6>
                </div>

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


                 <div class="post-body">
                    <p><?php echo wp_trim_words(get_the_content(), 40, false) ?></p>
                   <p><a href="<?php the_permalink() ?>" class="btn btn-color btn-sm">Read More</a>
                  </p>
                </div>
              </article> 