<?php 

	function comet_accordion_shortcode($one, $two){

		$comet_accordion_atts = shortcode_atts([

			'accordion_title'	=>' ',
			'accordion_content'	=>' ',
			'all_accordion'		=>' '

		],$one);

		ob_start();

?>
	
             <ul class="accordion nav">
			<?php 

				$comet_accordion_loop = vc_param_group_parse_atts($comet_accordion_atts['all_accordion']);
				foreach ($comet_accordion_loop as $comet_accordion_content_single_loop):
			 ?>
                <li>
                  <div class="accordion-title">
                    <h4><?php if ($comet_accordion_content_single_loop['accordion_title']) {
                    	echo $comet_accordion_content_single_loop['accordion_title'];
                    } ?></h4>
                  </div>
                  <div class="accordion-content">
                    <p><?php

                     if ($comet_accordion_content_single_loop['accordion_content']) {

                    	echo $comet_accordion_content_single_loop['accordion_content'];
                    } 

                    ?></p>
                  </div>
                </li>

				<?php endforeach; ?>
              </ul>



<?php	return ob_get_clean();

	}add_shortcode('comet_accordion','comet_accordion_shortcode');


	if (function_exists(vc_map)) {

		vc_map([

			'name'			=>'Comet Accordion',
			'base'			=>'comet_accordion',
			'category'		=>'Comet Elements',
			'description'	=>'Add accordion to your page',
			'icon'			=>get_template_directory_uri().'/images/comet.png',
			'params'		=>[

				[
					'param_name'	=>'all_accordion',
					'type'			=>'param_group',
					'heading'		=>'Add New Item',
					'params'		=>[

						[

							'param_name'	=>'accordion_title',
							'type'			=>'textfield',
							'heading'		=>'Add Accordion Title',
							'value'			=>'Insert your Accordion Title here'
						],
						[
							'param_name'	=>'accordion_content',
							'type'			=>'textarea',
							'heading'		=>'Insert your accodion content',
							'value'			=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error incidunt debitis ex ad dolorum quidem qui officiis odit. Reprehenderit sequi neque impedit itaque unde, dolores ut odio? Fugiat, iste, ipsam.10'

						],
					],
				],

			]
		]);
	}












