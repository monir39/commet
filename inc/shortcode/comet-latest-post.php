<?php 
	
	function comet_latest_post($one, $two){

		$comet_latest_post_atts = shortcode_atts([

			'posts_per_page_show'		=>'',
			'button_text'			=>'',
			'button_target_page'	=>''


		], $one);


		ob_start();

?>
	
	
       
        <div class="section-content">
          
              <div class="blog-post">


		<?php 

			$posts_per_page_show = $comet_latest_post_atts['posts_per_page_show'];

			$comet_blog_lates_post = new WP_Query([

				'post_type'			=>'post',
				'posts_per_page'	=> $posts_per_page_show,

			]);


			while( $comet_blog_lates_post -> have_posts()) :  $comet_blog_lates_post  -> the_post();
		 ?>
                <div class="post-body">
                  <h3 class="serif"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                  <hr>
                  <p class="serif"><?php echo wp_trim_words(get_the_content(), 30, false); ?></p>

                  <?php //var_dump($number) ?>
                  <div class="post-info upper"><a href="<?php the_permalink(); ?>">Read More</a><span class="pull-right black-text"><?php the_time('F, d, Y') ?></span>
                  </div>
                </div>

            <?php endwhile; ?>

              
          </div>
          <!-- end of row-->
          <div class="clearfix"></div>
          <div class="mt-25">
     		<p class="text-center"><a href="<?php echo home_url('/blog') ?>" class="btn btn-color-out"><?php echo $comet_latest_post_atts['button_text'] ?></a>
            </p>
          </div>
        </div>
     
<?php 

	return ob_get_clean();

	}add_shortcode('comet_latest_post','comet_latest_post');


	if(function_exists(vc_map)){

		vc_map([

			'name'		=>'Latest Posts',
			'base'		=>'comet_latest_post',
			'icon'		=>get_template_directory_uri().'/images/comet.png',
			'category'	=>'Comet Elements',
			'description'	=>'Add latest blog posts',
			'params'		=>[


				[

					'param_name'	=>'posts_per_page_show',
					'type'			=>'textfield',
					'heading'		=>'Add per page posts number'
				],

				[

					'param_name'	=>'button_target_page',
					'type'			=>'textfield',
					'heading'		=>'Blog page name Here',
					'value'			=>'blog'
				],

				[

					'param_name'	=>'button_text',
					'type'			=>'textfield',
					'heading'		=>'View Button text',
					'value'			=>'View All Posts'
				]
			]

		]);

	}










