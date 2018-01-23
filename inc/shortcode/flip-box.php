<?php 

	function comet_flip_box($one, $two){

		ob_start();

		$comet_flip_box_atts = shortcode_atts([

			'branding_title'		=>'',
			'branding_icon'			=>'',
			'branding_content'		=>''

		], $one);

?>
	
	<div class="services">
        <div class="col-sm-12 border-bottom border-right">
          <div class="service"><i class="<?php echo $comet_flip_box_atts['branding_icon']; ?>"></i><span class="back-icon"><i class="<?php echo $comet_flip_box_atts['branding_icon']; ?>"></i></span>
            <h4><?php echo $comet_flip_box_atts['branding_title']; ?></h4>
            <hr>
            <p class="alt-paragraph"><?php echo $comet_flip_box_atts['branding_content']; ?></p>
          </div>
        </div>
    </div>
	

<?php

	return ob_get_clean();

	}add_shortcode('comet_flip_box_shortcode','comet_flip_box');


	if(function_exists(vc_map)){

		vc_map([

			'name'			=>'Comet Flip Box',
			'base'			=>'comet_flip_box_shortcode',
			'category'		=>'Comet Elements',
			'icon'			=>get_template_directory_uri().'/images/comet.png',
			'description'	=>'Add filp box',
			'params'		=>[

				[

					'param_name'	=>'branding_icon',
					'type'			=>'iconpicker',
					'heading'		=>'Add FlipBox icon'

				],

				[
					'param_name'	=>'branding_title',
					'type'			=>'textfield',
					'heading'		=>'Add FlipBox Title',
					'value'			=>'Title here'

				],

				[
					'param_name'	=>'branding_content',
					'type'			=>'textarea',
					'heading'		=>'Add FlipBox content',
					'value'			=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero, sunt.'

				]
			]

		]);

	}















