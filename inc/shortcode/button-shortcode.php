<?php 
	
	function comet_button_shortcode($one, $two){
		ob_start();

		$comet_button_shortcode_atts = shortcode_atts([

			'button_style'			=>'',
			'button_size'			=>'',
			'button_text'			=>'',
			'button_link'			=>'',
			'button_text_color'			=>'',
			'button_background_color'	=>'',
			'button_border_color'		=>''

		], $one);
?>   

		<!-- Normale -->	  <!--Small -->
		<?php if($comet_button_shortcode_atts['button_style'] == 'normal' && $comet_button_shortcode_atts['button_size'] == 'small' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color btn-sm" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>
							



							<!--Medium -->
		<?php elseif($comet_button_shortcode_atts['button_style'] == 'normal' && $comet_button_shortcode_atts['button_size'] == 'medium' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>
							<!--Large -->
		<?php elseif($comet_button_shortcode_atts['button_style'] == 'normal' && $comet_button_shortcode_atts['button_size'] == 'large' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color btn-lg" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>



		<!-- Outlined -->    <!--Small -->
		<?php elseif($comet_button_shortcode_atts['button_style'] == 'outlined' && $comet_button_shortcode_atts['button_size'] == 'small' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color-out btn-sm" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>
							<!--Medium -->
		<?php elseif($comet_button_shortcode_atts['button_style'] == 'outlined' && $comet_button_shortcode_atts['button_size'] == 'medium' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color-out" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>
							<!--Large -->
		<?php elseif($comet_button_shortcode_atts['button_style'] == 'outlined' && $comet_button_shortcode_atts['button_size'] == 'large' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color-out btn-lg" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>



		<!-- Normal Rounded -->  <!--Small -->
		<?php elseif($comet_button_shortcode_atts['button_style'] == 'normal-rounded' && $comet_button_shortcode_atts['button_size'] == 'small' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color btn-sm btn-round" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>
								<!--Medium -->
		<?php elseif($comet_button_shortcode_atts['button_style'] == 'normal-rounded' && $comet_button_shortcode_atts['button_size'] == 'medium' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color btn-round" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>
								<!--Large -->
		<?php elseif($comet_button_shortcode_atts['button_style'] == 'normal-rounded' && $comet_button_shortcode_atts['button_size'] == 'large' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color btn-lg btn-round" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>



		<!-- Outline Rounded -->   <!--Small -->
		<?php elseif($comet_button_shortcode_atts['button_style'] == 'outline-rounded' && $comet_button_shortcode_atts['button_size'] == 'small' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color-out btn-sm btn-round" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>
									<!--Medium -->
		<?php elseif($comet_button_shortcode_atts['button_style'] == 'outline-rounded' && $comet_button_shortcode_atts['button_size'] == 'medium' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color-out btn-round" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>
									<!--Large -->
		<?php elseif($comet_button_shortcode_atts['button_style'] == 'outline-rounded' && $comet_button_shortcode_atts['button_size'] == 'large' ): ?>
		<div class="mb-15"><a href="<?php echo $comet_button_shortcode_atts['button_link'] ?>" class="btn btn-color-out btn-lg btn-round" style="color: <?php echo $comet_button_shortcode_atts['button_text_color'] ?>; background-color:<?php echo $comet_button_shortcode_atts['button_background_color'] ?>; border-color: <?php echo $comet_button_shortcode_atts['button_border_color'] ?>"><?php echo $comet_button_shortcode_atts['button_text'] ?></a></div>
		
		<?php else: ?>

		<?php endif; ?>





<?php		return ob_get_clean();

	}add_shortcode('comet_button','comet_button_shortcode');

	if(function_exists(vc_map)){

		vc_map([

			'name'			=>'Comet Button',
			'base'			=>'comet_button',
			'description'	=>'Add Different styled Button',
			'icon'			=>get_template_directory_uri().'/images/comet.png',
			'category'		=>'Comet Elements',
			'params'		=>[

				[

					'param_name'	=>'button_style',
					'heading'		=>'Select Button Style',
					'type'			=>'dropdown',
					'value'			=>[

						'Select Style'		=>'',
						'Normal'			=>'normal',
						'Outlined'			=>'outlined',
						'Normal Rounded'	=>'normal-rounded',
						'Outlined Rounded'	=>'outline-rounded'

					]

				],

				[

					'param_name'	=>'button_size',
					'type'			=>'dropdown',
					'heading'		=>'Select Button Size',
					'value'			=>[

						'Select Size'	=>'',
						'Small'			=>'small',
						'Medium'		=>'medium',
						'Large'			=>'large'

					]

				],

				[

					'param_name'	=>'button_text',
					'type'			=>'textfield',
					'heading'		=>'Add Button Text',
					'value'			=>'Button Text'
					
				],

				[

					'param_name'	=>'button_link',
					'type'			=>'textfield',
					'heading'		=>'Add Button Target Link',
					'value'			=>'https://example.com'

				],

				[

					'param_name'	=>'button_text_color',
					'type'			=>'colorpicker',
					'heading'		=>'Button Text color'

				],

				[
					'param_name'	=>'button_background_color',
					'type'			=>'colorpicker',
					'heading'		=>'Button background color'

				],

				[

					'param_name'	=>'button_border_color',
					'type'			=>'colorpicker',
					'heading'		=>'Button Border color'

				]
			]

		]);

	}
	


















