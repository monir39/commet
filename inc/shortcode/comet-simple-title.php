<?php 

	function comet_simple_title($one, $two){

		ob_start();

		$comet_simple_title_atts = shortcode_atts([

		'simple_title'		=>''


		],$one);

?>

	<div class="title m-0 txt-xs-center txt-sm-center">
	    <h2 class="upper"><?php echo $comet_simple_title_atts['simple_title'] ?><span class="red-dot"></span></h2>
	    <hr>
    </div>

	
<?php	return ob_get_clean();

	}add_shortcode('comet_simple_title','comet_simple_title');


		if(function_exists(vc_map)){

			vc_map([

				'name'			=>'Comet Simple Title',
				'base'			=>'comet_simple_title',
				'icon'			=>get_template_directory_uri().'/images/comet.png',
				'description'	=>'Add Simple Title',
				'category'		=>'Comet Elements',
				'params'		=>[

					[
						'param_name'		=>'simple_title',
						'type'				=>'textfield',
						'heading'			=>'Add Simple title Here',
						'value'				=>'Insert your  title'

					]
				]

			]);
	}







