<?php 

	function comet_image_content_slider($one, $two){

		ob_start();

		$comet_image_content_slider_atts = shortcode_atts([

			'upload_images'			=>'',
			'gallery_slider_style'	=>'',

			'content_slider_all'	=>'',
			'content_slider_text'	=>'',
			'content_author_name'	=>'',
			'company_name'			=>''

		], $one);

?>		
			
		<!-- Images Gallery -->
		<?php if( $comet_image_content_slider_atts['gallery_slider_style'] == 'image-gallery' ): ?>
			<div class="section-content">
				<ul class="photo-gallery">


				<?php

					$explode_img_id_gallery = explode(',', $comet_image_content_slider_atts['upload_images']);

					foreach ( $explode_img_id_gallery as $img_single_id_gallery ):

					$img_url_gallery = wp_get_attachment_image_url( $img_single_id_gallery, 'medium' );
				?>
					<li>
					  <div class="gallery-item">
					    <a href="<?php echo $img_url_gallery; ?>">
					      <img src="<?php echo $img_url_gallery; ?>" alt="">
					    </a>
					  </div>
					</li>

				<?php endforeach; ?>

				</ul>
		    </div>


		<!-- Image Slider -->
		<?php elseif( $comet_image_content_slider_atts['gallery_slider_style'] == 'image-slider' ): ?>	
			<div class="section-content">
				<div data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;controlNav&quot;: true, &quot;directionNav&quot;: true}" class="flexslider nav-inside">

				<ul class="slides">

				<?php

					$explode_img_id = explode(',', $comet_image_content_slider_atts['upload_images']);

					foreach ( $explode_img_id as $img_single_id ):

					$img_url = wp_get_attachment_image_url( $img_single_id, 'medium' );
				?>

				  <li>
				    <img src="<?php echo $img_url; ?>" alt="">
				  </li>

				<?php endforeach; ?>
				    
				</ul>

				</div>
			</div>


		<!-- Carousel================= -->
		<?php elseif( $comet_image_content_slider_atts['gallery_slider_style'] =='carousel' ): ?>
				<div data-options="{&quot;items&quot;: 6, &quot;autoplay&quot;: true, &quot;margin&quot;: 100, &quot;mdItems&quot;: 5, &quot;smItems&quot;: 4, &quot;xsItems&quot;: 3}" class="owl-carousel">

				<?php 

					$explode_img_id = explode(',', $comet_image_content_slider_atts['upload_images']);

					foreach ( $explode_img_id as $img_single_id ):

					$img_url = wp_get_attachment_image_url($img_single_id);
				?>
					<div class="client"><img src="<?php echo $img_url; ?>" alt=""></div>
						
					<?php endforeach; ?>

				</div>
				<!-- end of section content-->



		<!-- Content Slider  -->
		<?php else: ?>
			<div id="testimonials-slider" data-options="{&quot;animation&quot;: &quot;slide&quot;, &quot;directionNav&quot;: true}" class="flexslider nav-outside">
                <ul class="slides">

					
				<?php 

					$all_content_slider_loop = vc_param_group_parse_atts( $comet_image_content_slider_atts['content_slider_all'] );

					foreach ($all_content_slider_loop as  $ontent_slider_loop_single):
				 ?>

                  <li>
                    <blockquote>
                      <p>"<?php echo $ontent_slider_loop_single['content_slider_text'] ?>"</p>
                      <footer><?php echo $ontent_slider_loop_single['content_author_name'] ?> - <?php echo $ontent_slider_loop_single['company_name'] ?></footer>
                    </blockquote>
                  </li>

				<?php endforeach; ?>

                </ul>
              </div>
		<?php endif; ?>
			



<?php 
	
	return ob_get_clean();

	}add_shortcode('comet_slider','comet_image_content_slider');

	if(function_exists(vc_map)){

		vc_map([

			'name'			=>'Comet Gallery slider',
			'base'			=>'comet_slider',
			'description'	=>'Add gallery,Carusel, Slider, Content Slider',
			'icon'			=>get_template_directory_uri().'/images/comet.png',
			'category'		=>'Comet Elements',
			'params'		=>[

				[
					'param_name'	=>'gallery_slider_style',
					'type'			=>'dropdown',
					'heading'		=>'Select Slider or gallery Type',
					'value'			=>[

						'Select Slider Type'	=>'',
						'Image Gallery'			=>'image-gallery',
						'Images Slider'			=>'image-slider',
						'Carousel Slider'		=>'carousel',
						'Content Slider'		=>'content-slider'
						
					]
				],

				[
					'param_name'	=>'upload_images',
					'type'			=>'attach_images',
					'heading'		=>'Upload Images',
					'dependency'	=>[

						'element'		=>'gallery_slider_style',
						'value'			=>['image-gallery','image-slider','carousel']
					]
				],

				[

					'param_name'	=>'content_slider_all',
					'type'			=>'param_group',
					'heading'		=>'Add Slide Item',
					'dependency'	=>[
						'element'		=>'gallery_slider_style',
						'value'			=>['content-slider']
						],
					'params'		=>[

						[
							'param_name'	=>'content_slider_text',
							'type'			=>'textarea',
							'heading'		=>'Add Content Here',
							'value'			=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium neque soluta',
							'dependency'	=>[
								'element'		=>'gallery_slider_style',
								'value'			=>['content-slider']
							]

						],

						[

							'param_name'	=>'content_author_name',
							'type'			=>'textfield',
							'heading'		=>'Add Content Author Name',
							'value'			=>'Ms.Jon',
							'dependency'	=>[

								'element'		=>'gallery_slider_style',
								'value'			=>['content-slider']
							]

						],

						[

							'param_name'	=>'company_name',
							'type'			=>'textfield',
							'heading'		=>'Add Company Name',
							'value'			=>'Google Inc.',
							'dependency'	=>[

								'element'		=>'gallery_slider_style',
								'value'			=>['content-slider']
							]
						]

					]
				]
	
			]
		]);

	}




