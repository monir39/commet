<?php 

	function comet_fency_title($one, $two){

		ob_start();

		$cometfency_title_atts = shortcode_atts([

			'short_title'		=>'',
			'main_title'		=>''


		],$one);



?>


	<div class="title center">
        <h4 class="upper"><?php echo $cometfency_title_atts['short_title'] ?></h4>
        <h2><?php echo $cometfency_title_atts['main_title'] ?><span class="red-dot"></span></h2>
        <hr>
    </div>



	
<?php	return ob_get_clean();

	}add_shortcode('comet_title_fency','comet_fency_title');


		if(function_exists(vc_map)){

			vc_map([

				'name'			=>'Comet Fency Title',
				'base'			=>'comet_title_fency',
				'icon'			=>get_template_directory_uri().'/images/comet.png',
				'description'	=>'Add Fency Title',
				'category'		=>'Comet Elements',
				'params'		=>[

					[
						'param_name'		=>'short_title',
						'type'				=>'textfield',
						'heading'			=>'Add short title Here',
						'value'				=>'Insert your short title here'

					],

					[

						'param_name'		=>'main_title',
						'type'				=>'textfield',
						'heading'			=>'Add main Title Here',
						'value'				=>'Insert your main title here'
					]
				]

			]);


	}







