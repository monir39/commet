<?php 

	
	function comet_audio_video($one, $two){
		ob_start();

		$comet_media = shortcode_atts([

			'comet_media_type'		=>'',
			'comet_video_audio_url'	=>''

		], $one);


?>

	
	<?php if( $comet_media['comet_media_type'] == 'audio' ): ?>
 		<div class="media-audio">
 			<?php echo wp_oembed_get( $comet_media['comet_video_audio_url'] ); ?>
 		</div>

	<?php else: ?>
        <div class="media-video">
        	<?php echo wp_oembed_get( $comet_media['comet_video_audio_url'] ); ?>
        </div>

	<?php endif; ?>



<?php

	return ob_get_clean();

}add_shortcode('comet_audio_video','comet_audio_video');

	if (function_exists(vc_map)) {

		vc_map([

			'name'			=>'Comet Audio & Video',
			'base'			=>'comet_audio_video',
			'category'		=>'Comet Elements',
			'description'	=>'Add Audio, Video, Youtube links',
			'icon'			=>get_template_directory_uri().'/images/comet.png',
			'params'		=>[

				[
					
					'param_name'	=>'comet_media_type',
					'type'			=>'dropdown',
					'heading'		=>'Select Media Type',
					'value'			=>[

						'Audio'			=>'audio',
						'video'			=>'video'
					]

				],

				[

					'param_name'	=>'comet_video_audio_url',
					'type'			=>'textfield',
					'heading'		=>'Insert Audio/video URL',
					'value'			=>'https://youtube.com/8gfjgfv=8jhgh'
				]

			]
			
		]);
	}