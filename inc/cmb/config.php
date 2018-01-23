
<?php 

	function cmb_box_for_video_audio_post(){

		$cmb_box = new_cmb2_box([

			'title'			=>'Video Box Section',
			'id'			=>'video-box',
			'object_types'	=>['post']

		]);

			$cmb_box -> add_field([

				'name'			=>'Video Link',
				'id'			=>'video-link',
				'type'			=>'oembed'
			]);


		// Audio Box

		$cmb_box = new_cmb2_box([

			'title'			=>'Audio Box',
			'id'			=>'audio-box',
			'object_types'	=>['post']
		]);

			$cmb_box -> add_field([

				'name'			=>'Audio Link',
				'id'			=>'audio-lik',
				'type'			=>'oembed'

			]);

		$cmb_box = new_cmb2_box([

			'title'			=>'Gallery Box',
			'id'			=>'gallery-box',
			'object_types'	=>['post']
		]);

			$cmb_box -> add_field([

				'name'		=>'Upload gallery images',
				'id'		=>'gallery-images',
				'type'		=>'file_list'
			]);


		$cmb_box = new_cmb2_box([

			'title'			=>'Revolution Slider',
			'id'			=>'revolution-slider-id',
			'object_types'	=>['page']

		]);

			$cmb_box->add_field([

				'name'		=>'Insert Revolution Slider Alias',
				'id'		=>'rev-field-id',
				'type'		=>'text'

			]);


	// Portfolio Custom field
		$cmb_box = new_cmb2_box([

			'title'			=>'Portfolio Details',
			'id'			=>'port-folio',
			'object_types'	=>['comet-portfolio']

		]);

			$cmb_box -> add_field([

				'name'			=>'Portfolio Images',
				'id'			=>'portfolio-image',
				'description'	=>'Upload Portfolio images',
				'type'			=>'file_list'
			]);

			$cmb_box -> add_field([

				'name'			=>'Client Name',
				'id'			=>'client-name',
				'description'	=>'Company Name',
				'type'			=>'text',
				'default'		=>'Company Inc.'
			]);

			$cmb_box -> add_field([

				'name'			=>'Project Date',
				'id'			=>'project-date',
				'type'			=>'text_date',
				'description'	=>'Completed Date',
				'default'		=>'01/12/2018'
			]);

			$cmb_box -> add_field([

				'name'			=>'Project Link',
				'id'			=>'project-link',
				'type'			=>'text_url',
				'description'	=>'URL of the project',
				'default'		=>'http://project.com'
			]);
			
	}add_action('cmb2_init', 'cmb_box_for_video_audio_post' );









