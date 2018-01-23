<?php 

	function comet_alert($one, $two){

		ob_start();

		$comet_alert_shortcode_atts = shortcode_atts([

			'alert_text'		=>'',
			'alert_style'		=>''

		], $one);
?>


	<!-- =================== Default Style 1 =================== -->
<?php if( $comet_alert_shortcode_atts['alert_style'] == 'default-style-1' ): ?>
	<div role="alert" class="alert alert-success alert-dismissible alert-outline">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><i class="ti-close"></i>
        </button><?php echo $comet_alert_shortcode_atts['alert_text'] ?></div>


	<!-- ================== Default Style 2 ================== -->	
<?php elseif( $comet_alert_shortcode_atts['alert_style'] == 'default-style-2' ): ?>
	<div role="alert" class="alert alert-info alert-dismissible alert-outline">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><i class="ti-close"></i>
        </button><?php echo $comet_alert_shortcode_atts['alert_text'] ?></div>


<!-- ================== Default Style 3 ================== -->
<?php elseif( $comet_alert_shortcode_atts['alert_style'] == 'default-style-3' ): ?>
	<div role="alert" class="alert alert-warning alert-dismissible alert-outline">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><i class="ti-close"></i>
        </button><?php echo $comet_alert_shortcode_atts['alert_text'] ?></div>


	<!-- ================= Default Style 4  ================= = -->
<?php elseif( $comet_alert_shortcode_atts['alert_style'] == 'default-style-4' ): ?>
	<div role="alert" class="alert alert-danger alert-dismissible alert-outline">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><i class="ti-close"></i>
        </button><?php echo $comet_alert_shortcode_atts['alert_text'] ?></div>



	<!-- ============ Color Style 1 ============ -->
<?php elseif( $comet_alert_shortcode_atts['alert_style'] == 'color-style-1' ): ?>
	<div role="alert" class="alert alert-success alert-dismissible alert-colored">
	 	<button type="button" data-dismiss="alert" aria-label="Close" class="close"><i class="ti-close"></i></button>
	<?php echo $comet_alert_shortcode_atts['alert_text'] ?>
	</div>


	<!-- ============== Color Style 2 ======================== -->
<?php elseif( $comet_alert_shortcode_atts['alert_style'] == 'color-style-2' ): ?>
	<div role="alert" class="alert alert-info alert-dismissible alert-colored">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><i class="ti-close"></i>
        </button><?php echo $comet_alert_shortcode_atts['alert_text'] ?></div>


	<!-- ====================Color Style 3==================== -->
<?php elseif( $comet_alert_shortcode_atts['alert_style'] == 'color-style-3' ): ?>
	<div role="alert" class="alert alert-warning alert-dismissible alert-colored">
    	<button type="button" data-dismiss="alert" aria-label="Close" class="close"><i class="ti-close"></i>
    	</button><?php echo $comet_alert_shortcode_atts['alert_text'] ?></div>


<!-- ==============Color Style 4========================== -->
<?php else: ?>
	<div role="alert" class="alert alert-danger alert-dismissible alert-colored">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><i class="ti-close"></i>
        </button><?php echo $comet_alert_shortcode_atts['alert_text'] ?></div>
	
<?php endif; ?>



<?php return ob_get_clean();

	}add_shortcode('comet_alert','comet_alert');

	if(function_exists(vc_map)){

		vc_map([

			'name'		=>'Comet Alert',
			'base'		=>'comet_alert',
			'icon'		=>get_template_directory_uri().'/images/comet.png',
			'description'	=>'Add alert Box',
			'category'		=>'Comet Elements',
			'params'		=>[

				[
					'param_name'		=>'alert_style',
					'type'				=>'dropdown',
					'value'				=>[

						'Select Alert Style'	=>' ',
						'Default Style 1'		=>'default-style-1',
						'Default Style 2'		=>'default-style-2',
						'Default Style 3'		=>'default-style-3',
						'Default Style 4'		=>'default-style-4',
						'Color Style 1'			=>'color-style-1',
						'Color Style 2'			=>'color-style-2',
						'Color Style 3'			=>'color-style-3',
						'Color Style 4'			=>'color-style-4'
					]
				],

				[

					'param_name'		=>'alert_text',
					'type'				=>'textfield',
					'heading'			=>'Add Alert text',
					'value'				=>'This is alert text'
				]
			]
		]);


	}













