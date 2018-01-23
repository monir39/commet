<?php 

	function comet_progress_bar($one, $two){

		ob_start();

		$comet_progress_attributes = shortcode_atts([

			'all_bars'	=>' ',
			'bar_title'	=>' ',
			'bar_value'	=>' ',
			'bar_style'	=>' '


		], $one);

		?>

				<?php 
					$comet_progress_loop = vc_param_group_parse_atts($comet_progress_attributes['all_bars']);

					foreach ($comet_progress_loop as  $progress_single_loop):
				 ?>

              <div class="skill"><span class="skill-name"><?php if ($progress_single_loop['bar_title']) {
              	echo $progress_single_loop['bar_title'];
              } ?></span><span class="skill-perc"><?php if ($progress_single_loop['bar_title']) {
              	echo $progress_single_loop['bar_value'];
              } ?>%</span>
                <div class="progress">
   					<div role="progressbar" data-progress="<?php if ($progress_single_loop['bar_title']) {
              	echo $progress_single_loop['bar_value'];
              } ?>" class="progress-bar <?php echo $comet_progress_attributes['bar_style']; ?>"></div>
                </div>
              </div>
				
				<?php endforeach; ?>


<?php return ob_get_clean();

	}add_shortcode('comet_prohress','comet_progress_bar');


	if (function_exists(vc_map)) {

		vc_map([

			'name'			=>'Comet ProgressBar',
			'base'			=>'comet_prohress',
			'description'	=>'Add Progress bar on your page',
			'icon'			=> get_template_directory_uri().'/images/comet.png',
			'category'		=>'Comet Elements',
			'params'		=>[

				[

					'param_name'		=>'bar_style',
					'type'				=>'dropdown',
					'value'				=>[


						'Classic'		=>' ',
						'Colored'		=>'colored'
					]


				],

				[

					'param_name'		=>'all_bars',
					'type'				=>'param_group',
					'heading'			=>'Add New Bar',
					'params'			=>[

						[

							'param_name'	=>'bar_title',
							'type'			=>'textfield',
							'heading'		=>'Add Bar Title',
							'value'			=>'Insert your bar title'
						],

						[
							'param_name'	=>'bar_value',
							'type'			=>'textfield',
							'heading'		=>'Insert bar value',
							'value'			=>'Progress bar value here'

						],

					],

				],


			]

		]);
		
	}




























