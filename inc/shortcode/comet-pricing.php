<?php 

	
	function comet_pricing($one, $two){

		$comnet_pricing_atts = shortcode_atts([

			'pricing_tabel_type'	=> ' ',
			'pricing_icon'			=> ' ',
			'pricing_package_title'	=> ' ',
			'pricing_currency'		=> ' ',
			'pricing_package_rate'	=> ' ',
			'pricing_package_time'	=> ' ',

			'pricing_package_memory'		=> ' ',
			'pricing_package_processor'		=> ' ',	
			'pricing_package_hard_disk'		=> ' ',	
			'pricing_package_data_transfer'	=> ' ',
			'pricing_order_button_text'		=> ' ',
			'pricing_order_button_link'		=> ' '		

		], $one);



		ob_start();

?>

	        <div class="pricing-table <?php if($comnet_pricing_atts['pricing_tabel_type']) {echo  $comnet_pricing_atts['pricing_tabel_type']; } ?>">
                <div class="pricing-head"><i class="<?php if($comnet_pricing_atts['pricing_icon']) {echo  $comnet_pricing_atts['pricing_icon']; } ?>"></i>
                  <h4 class="upper"><?php if($comnet_pricing_atts['pricing_package_title']) {echo  $comnet_pricing_atts['pricing_package_title']; } ?></h4>
                </div>
                <div class="price">
                  <h2><span><?php if($comnet_pricing_atts['pricing_currency']) {echo  $comnet_pricing_atts['pricing_currency']; } ?></span><?php if($comnet_pricing_atts['pricing_package_rate']) {echo  $comnet_pricing_atts['pricing_package_rate']; } ?><span>/<?php if($comnet_pricing_atts['pricing_package_time']) {echo  $comnet_pricing_atts['pricing_package_time']; } ?></span></h2>
                </div>
                <ul class="features nav">
                  <li><span><?php if($comnet_pricing_atts['pricing_package_memory']) {echo  $comnet_pricing_atts['pricing_package_memory']; } ?></span> Memory</li>
                  <li><span><?php if($comnet_pricing_atts['pricing_package_processor']) {echo  $comnet_pricing_atts['pricing_package_processor']; } ?></span> Processor</li>
                  <li><span><?php if($comnet_pricing_atts['pricing_package_hard_disk']) {echo  $comnet_pricing_atts['pricing_package_hard_disk']; } ?></span> SSD Disk</li>
                  <li><span><?php if($comnet_pricing_atts['pricing_package_data_transfer']) {echo  $comnet_pricing_atts['pricing_package_data_transfer']; } ?></span> Transfer</li>
                </ul>
                <div class="pricing-footer"><a href="<?php if($comnet_pricing_atts['pricing_order_button_link']) {echo  $comnet_pricing_atts['pricing_order_button_link']; } ?>" class="btn btn-color"><?php if($comnet_pricing_atts['pricing_order_button_text']) {echo  $comnet_pricing_atts['pricing_order_button_text']; } ?></a>
                </div>
            </div>
	

<?php
	
	return ob_get_clean();

	}add_shortcode('comet_pricing','comet_pricing');


	if( function_exists(vc_map) ){

		vc_map([

			'name'		=>'Comet Pricing Table',
			'base'		=>'comet_pricing',
			'icon'		=> get_template_directory_uri().'/images/comet.png',
			'description'	=>'',
			'category'		=>'Comet Elements',
			'params'		=>[


				[
					'param_name'		=>'pricing_tabel_type',
					'type'				=>'dropdown',
					'value'				=>[

						'Select Type'	=>' ',
						'Default'		=>' ',
						'Fetaured'		=>'featured'
					]
				],

				[
					'param_name'	=>'pricing_icon',
					'type'			=>'iconpicker',
					'heading'		=>'Select Icon'

				],

				[
					'param_name'	=>'pricing_package_title',
					'type'			=>'textfield',
					'heading'		=>'Add Package Titlte',
					'value'			=>'Silver'

				],

				[
					'param_name'	=>'pricing_currency',
					'type'			=>'textfield',
					'heading'		=>'Add Pricing Currency',
					'value'			=>'$'

				],

				[
					'param_name'	=>'pricing_package_rate',
					'type'			=>'textfield',
					'heading'		=>'Add Package Price',
					'value'			=>'30'

				],

				[
					'param_name'	=>'pricing_package_time',
					'type'			=>'textfield',
					'heading'		=>'Add Package Time',
					'value'			=>'m/y'

				],

				[
					'param_name'	=>'pricing_package_memory',
					'type'			=>'textfield',
					'heading'		=>'Add Package Memory',
					'value'			=>'2GB'

				],

				[
					'param_name'	=>'pricing_package_processor',
					'type'			=>'textfield',
					'heading'		=>'Add Package Processor',
					'value'			=>'3 Core'

				],

				[
					'param_name'	=>'pricing_package_hard_disk',
					'type'			=>'textfield',
					'heading'		=>'Add Package hard Disk',
					'value'			=>'30GB'

				],

				[
					'param_name'	=>'pricing_package_data_transfer',
					'type'			=>'textfield',
					'heading'		=>'Add Data Transfer',
					'value'			=>'12TB'

				],

				[
					'param_name'	=>'pricing_order_button_text',
					'type'			=>'textfield',
					'heading'		=>'Order €Button text',
					'value'			=>'Order Now!'

				],

				[
					'param_name'	=>'pricing_order_button_link',
					'type'			=>'textfield',
					'heading'		=>'Inset Button Taeget Link',
					'value'			=>'#'

				],
			]
		]);

	}


