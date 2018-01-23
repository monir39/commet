<?php  

	function comet_features_box($one, $two){

		ob_start();

		$comet_features_box_atts = shortcode_atts([

			'feature_title'				=>'',
			'feature_icon'				=>'',
			'feature_content'			=>'',
			'fetaure_item_no_label'		=>'',
			'fetaure_item_number'		=>'',
			'feature_style'				=>''


		], $one);

?>

	<?php if($comet_features_box_atts['feature_style'] == 'style1' ): ?>	
		<!--Style one -->
	<div class="icon-box-small mb-25"><i class="<?php echo $comet_features_box_atts['feature_icon'] ?>"></i><span class="back-icon"><i class="<?php echo $comet_features_box_atts['feature_icon'] ?>"></i></span>
    	<hr>
    	<h4><?php echo $comet_features_box_atts['feature_title'] ?></h4>
    	<p><?php echo $comet_features_box_atts['feature_content'] ?></p>
  	</div>


	<?php elseif( $comet_features_box_atts['feature_style'] == 'style2' ): ?>	
	<!--Style two -->
	<div class="icon-box-circular">
      <div class="ib-icon"><i class="fa fa-facebook"></i>
      </div>
      <div class="ib-content">
        <p><?php echo $comet_features_box_atts['feature_content'] ?></p>
      </div>
    </div>


	<?php elseif($comet_features_box_atts['feature_style'] == 'style3'): ?>	
		<!--Style three -->
	<div class="number-box"><span><?php echo $comet_features_box_atts['fetaure_item_no_label'] ?></span>
	    <h2><?php echo $comet_features_box_atts['fetaure_item_number'] ?><span class="red-dot"></span></h2>
	    <h4><?php echo $comet_features_box_atts['feature_title'] ?></h4>
	    <p><?php echo $comet_features_box_atts['feature_content'] ?></p>
  	</div>


	<?php elseif($comet_features_box_atts['feature_style'] == 'style4'): ?>	
	<!--Style four -->
	<div class="icon-box-simple"><i class="<?php echo $comet_features_box_atts['feature_icon'] ?>"></i><span><?php echo $comet_features_box_atts['feature_title'] ?></span></div>


	<?php else: ?>		
	<!--Style five -->
	<div class="icon-box-basic"><i class="<?php echo $comet_features_box_atts['feature_icon'] ?>"></i>
        <h4><?php echo $comet_features_box_atts['feature_title'] ?></h4>
        <p><?php echo $comet_features_box_atts['feature_content'] ?></p>
    </div>

	<?php endif; ?>




<?php
		return ob_get_clean();

	}add_shortcode('comet_features_box','comet_features_box');

	if(function_exists(vc_map)){

		vc_map([

			'name'		=>'Comet Features Box',
			'base'		=>'comet_features_box',
			'category'	=>'Comet Elements',
			'description'	=>'Add Features Box',
			'icon'			=>get_template_directory_uri().'/images/comet.png',
			'params'		=>[

				[

					'param_name'		=>'feature_style',
					'heading'			=>'Select Features Box Style',
					'type'				=>'dropdown',
					'value'				=>[

						'Select Style'		=>' ',
						'Style 1'			=>'style1',
						'Style 2'			=>'style2',
						'Style 3'			=>'style3',
						'Style 4'			=>'style4',
						'Style 5'			=>'style5'
					]

				],

				[
					'param_name'	=>'feature_title',
					'type'			=>'textfield',
					'heading'		=>'Add Feature Titie',
					'value'			=>'Title here',
					'dependency'	=>[
						'element'		=>'feature_style',
						'value'			=>['style1','style3','style4','style5']
					]
				],

				[

					'param_name'	=>'feature_icon',
					'type'			=>'iconpicker',
					'heading'		=>'Add Feature icon',
					'dependency'	=>[
						'element'		=>'feature_style',
						'value'			=>['style1','style2','style4','style5']
					]
				],

				[

					'param_name'	=>'feature_content',
					'type'			=>'textarea',
					'heading'		=>'Add Feature content',
					'value'			=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, repellendus!',
					'dependency'	=>[
						'element'		=>'feature_style',
						'value'			=>['style1','style2','style3','style5']

					]
				],

				[
					'param_name'	=>'fetaure_item_no_label',
					'type'			=>'textfield',
					'heading'		=>'Add Feature Item label',
					'value'			=>'Item No.',
					'dependency'	=>[
						'element'		=>'feature_style',
						'value'			=>['style3']
					]
				],

				[
					'param_name'	=>'fetaure_item_number',
					'type'			=>'textfield',
					'heading'		=>'Add Feature Item Number',
					'value'			=>'01',
					'dependency'	=>[

						'element'		=>'feature_style',
						'value'			=>['style3']
					]
				]
			]
		]);

	}











