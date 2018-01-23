<?php 

	function comet_counter($one, $two){
		

			$comet_counter_shortcode_attributes = shortcode_atts([

				'counter_title'	=>'',
				'icon'			=>'',
				'counter_color'	=>'',
				'counter_value'	=>'',
				'all_counter'	=>'',
				'counter_date'	=>'',
				'counter_style'	=>''

			],$one);

			ob_start();
		?>
		


	<?php if($comet_counter_shortcode_attributes['counter_style'] == 'classic' ): ?>
         <!--Counter classic =========================-->
		<div class="section-content">
          <ul data-date="<?php echo $comet_counter_shortcode_attributes['counter_date'] ?>" class="nav countdown text-center">
            <li><span class="days">00</span>days</li>
            <li><span class="hours">00</span>hours</li>
            <li><span class="minutes">00</span>minutes</li>
            <li><span class="seconds">00</span>seconds</li>
          </ul>
        </div>

	<?php else: ?>
		<!--Counters============================= -->
		<div class="counter" style="color:<?php echo $comet_counter_shortcode_attributes['counter_color'] ?>">
            <div class="counter-icon"><i class="<?php echo $comet_counter_shortcode_attributes['icon'];?>"></i>
            </div>
            <div class="counter-content">
              <h5><span data-count="<?php echo $comet_counter_shortcode_attributes['counter_value'] ?>" class="number-count"><?php echo $comet_counter_shortcode_attributes['counter_value'] ?></span><span class="red-dot"></span></h5><span><?php echo $comet_counter_shortcode_attributes['counter_title'] ?></span>
            </div>
        </div>

	<?php endif; ?>



<?php
		return ob_get_clean();

	}add_shortcode('comet_counter_shortcode','comet_counter');


	if (function_exists(vc_map)) {

		vc_map([
			'name'			=>'Comet Counter',
			'base'			=>'comet_counter_shortcode',
			'icon'			=> get_template_directory_uri().'/images/comet.png',
			'description'	=>'Add counter to your website',
			'category'		=>'Comet Elements',
			'params'		=>[

				[
					'param_name'	=>'counter_style',
					'heading'		=>'Select Counter Style',
					'type'			=>'dropdown',
					'value'			=>[

						'Select Style'	=>' ',
						'Classic'		=>'classic',
						'Counters'		=>'cunters'
					]
				],

				[
					'param_name'	=>'counter_title',
					'type'			=>'textfield',
					'heading'		=>'Add counter title',
					'value'			=>'Counter title here',
					'dependency'	=>[

						'element'		=>'counter_style',
						'value'			=>['cunters']
					]

				],

				[
					'param_name'	=>'icon',
					'type'			=>'iconpicker',
					'heading'		=>'Select Icon',
					'dependency'	=>[
						'element'		=>'counter_style',
						'value'			=>['cunters']
					]
				],

				[
					'param_name'	=>'counter_color',
					'type'			=>'colorpicker',
					'heading'		=>'Choose counter color',
					'value'			=>'#191B1D',
					'dependency'	=>[

						'element'		=>'counter_style',
						'value'			=>['cunters']
					]
				],

				[
					'param_name'	=>'counter_value',
					'type'			=>'textfield',
					'heading'		=>'Add counter value',
					'value'			=>'Counter value here',
					'dependency'	=>[
						'element'		=>'counter_style',
						'value'			=>['cunters']
					]

				],

				[
					'param_name'	=>'counter_date',
					'type'			=>'textfield',
					'heading'		=>'Add Data & Time',
					'value'			=>'02/14/2018 15:00:00',
					'dependency'	=>[

						'element'	=>'counter_style',
						'value'		=>['classic']
					]
				]	
			]
		]);
	}







