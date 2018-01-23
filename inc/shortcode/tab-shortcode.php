<?php  

	function tab_shortcode($first, $second){

		ob_start();

		$comet_tab_attributes = shortcode_atts(
			[
				'all_tabs'		=>' ',
				'tab_menu'		=>' ',
				'tab_content'	=>' ',
				'tab_style'		=>'outline',
			],

			$first);
?>


             <ul role="tablist" class="nav nav-tabs <?php echo $comet_tab_attributes['tab_style'] ?>">
				<?php 

				$tab_menu_loop = vc_param_group_parse_atts($comet_tab_attributes['all_tabs']);

					$i=1;

					$unique_id = rand();
					foreach ($tab_menu_loop as $single_tab_value):

					if ($i == 1) {

						$class = "active";

					}else{

						$class = " ";

					}

				?>
				
  <li role="presentation" class="<?php echo $class; ?>"><a href="#comet<?php echo $unique_id.$i; $i++; ?>" role="tab" data-toggle="tab"><?php if($single_tab_value['tab_menu']){ echo $single_tab_value['tab_menu']; } ?></a>
                </li>
				
				<?php endforeach; ?>

              </ul>



              <div class="tab-content">

				<?php 

					$tab_content_loop = vc_param_group_parse_atts($comet_tab_attributes['all_tabs']);

					$i=1;

					foreach ($tab_content_loop as $tab_content_value) :

						

					if ($i == 1) {

						$class = "active";

					}else{

						$class = " ";

					}
				 ?>

       			<div id="comet<?php echo $unique_id.$i; $i++; ?>" role="tabpanel" class="tab-pane <?php echo $class; ?>">
					<p class="text-<?php echo $comet_tab_attributes['tab_style'] ?>"> 
						<?php echo $tab_content_value["tab_content"]; ?>
							

						</p>
                </div>
					<?php endforeach; ?>
              </div>


<?php
		return ob_get_clean();

	}add_shortcode('comet_tab','tab_shortcode');

	if (function_exists(vc_map)) {

		vc_map([

			'name'			=>'Comet Tab',
			'base'			=>'comet_tab',
			'description'	=>'Add tab on your page',
			'icon'			=>get_template_directory_uri().'/images/comet.png',
			'category'		=>'Comet Elements',
			'params'		=>[

				[

					'param_name'	=>'tab_style',
					'type'			=>'dropdown',
					'value'			=>[

						'Minimul'	=>'outline',
						'Boxed'		=>'center'
					]

				],

				[

					'param_name'	=>'all_tabs',
					'type'			=>'param_group',
					'params'		=>[


						[
							'param_name'	=>'tab_menu',
							'type'			=>'textfield',
							'heading'		=>'Add Tab title',
							'value'			=> 'insert your tab title',

						],

						[
							'param_name'	=>'tab_content',
							'type'			=>'textarea',
							'heading'		=>'Add tab content',
							'value'			=> 'Insert your tab content',
						],

					],

				],

			]	

		]);
	}








