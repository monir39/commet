<?php 

	register_post_type('comet-portfolio', [

		'public'		=>true,
		'labels'	=>[

				'name'					=>'Portfolios',
				'add_new'				=>'Add New',
				'all_items'				=>'All Portfolios',
				'add_new_item'			=>'Add New Porfolio',
				'not_found'				=>'No Portfolio Found',
				'featured_image'        => 'Portfolio Image',
				'set_featured_image'    => 'Set Portfolio image',
				'remove_featured_image' => 'Remove portfolio image', 
				'use_featured_image'    => 'Use as portfolio image',
				'insert_into_item'      => 'Insert into portfolio',
				'uploaded_to_this_item' => 'Uploaded to portfolio'


		],

		'supports'		=>['title','editor', 'thumbnail'],
		'menu_icon'		=>'dashicons-portfolio',
		'has_archive'	=>true
	]);


	register_taxonomy('portfolio-catagory','comet-portfolio',[

		'public'		=>true,
		'hierarchical'	=>true

	]);

	register_taxonomy('portfolio-tag','comet-portfolio',[ 'public' => true ]);




