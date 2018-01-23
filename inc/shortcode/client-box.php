<?php 

	function comet_client_box($one, $two){


		$comet_client_shortcode_atts = shortcode_atts([

			'client_box_image'		=>''


		], $one);
		



		ob_start();

?>

	
	<div class="section-content">
          <div class="boxes clients">
            <div class="row">


			<?php 

				$all_id_img = $comet_client_shortcode_atts['client_box_image'];

				$exploded_id_img = explode(',', $all_id_img);

				foreach ($exploded_id_img as  $single_id_value):

					$url_img = wp_get_attachment_image_url($single_id_value);
				 
			 ?>

              <div class="col-sm-4 col-xs-6 border-right border-bottom">
                <img src="<?php echo $url_img; ?>" alt="" data-animated="true" class="client-image">
              </div>

				<?php endforeach; ?>
            </div>
            <!-- end of row-->
          </div>
        </div>



<?php

	return ob_get_clean();

	}add_shortcode('client_box','comet_client_box');

	if( function_exists(vc_map) ){

		vc_map([

			'name'		=>'Clinet Box',
			'base'		=>'client_box',
			'icon'		=>get_template_directory_uri().'/images/comet.png',
			'category'	=>'Comet Elements',
			'params'	=>[

				[

					'param_name'	=>'client_box_image',
					'type'			=>'attach_images',
					'heading'		=>'Upload Client Images'
				]
			]

		]);

	}






