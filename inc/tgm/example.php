<?php

require_once 'class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );

function my_theme_register_required_plugins() {

	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
	
		[

			'name'		=>'Visual Composer',
			'slug'		=>'js_composer',
			'source'	=> get_template_directory().'/inc/tgm/plugins/js_composer.zip',
			'required'	=> true
		],

		[
			'name'		=>'Revolution Slider',
			'slug'		=>'revslider.zip',
			'source'	=> get_template_directory().'/inc/tgm/plugins/revslider.zip',
			'required'	=>true

		]
	);

	tgmpa( $plugins, $config );
}
