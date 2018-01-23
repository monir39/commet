<?php 

add_filter( 'vc_iconpicker-type-fontawesome', 'comet_themes_icon' );

function comet_themes_icon( $icons ) {

	$fontawesome_icons = array(
		'Comet Themes Icon' => array(

			array( 'icon-mobile' 		=> 'Mobile' ),
			array( 'ti-volume' 			=> 'Volum' ),
			array( 'ti-paint-roller' 	=> 'Paint Roller' ),
			array( 'ti-medall' 			=> 'Medall' ),
			array( 'ti-layout' 			=> 'Layout' ),
			array( 'icon-focus' 		=> 'Icon Focus' ),

		),
	
	);

	return array_merge( $icons, $fontawesome_icons );
}











