<?php 

	function comet_team_memeber($one, $two){

		$comet_team_atts = shortcode_atts([

			'team_member_name'			=> ' ',
			'team_memeber_designation'	=> ' ',
			'team_member_image'			=> ' ',

			'member_fb_link'			=> ' ',
			'member_twitter_link'		=> ' ',
			'member_linkeding_link'		=> ' ',
			'member_instagram_link'		=> ' ',
			'member_dribbble_link'		=> ' '

		], $one);

		ob_start();

?>

				

						
						<div class="team-member">
							<?php
								$member_image_id = $comet_team_atts['team_member_image'];

								$tem_img_url = wp_get_attachment_image_url($member_image_id);
							 ?>
							<div class="team-image">
								<img src="<?php if( $tem_img_url ) {echo $tem_img_url; } ?>" alt="">
							</div>
							<div class="team-info">
								<h3><?php if( $comet_team_atts['team_member_name'] ) {echo $comet_team_atts['team_member_name']; } ?></h3><span><?php if( $comet_team_atts['team_memeber_designation'] ) {echo $comet_team_atts['team_memeber_designation']; } ?></span>
							</div>
							<div class="team-social">
								<ul>
									<li><a href="<?php if($comet_team_atts['member_fb_link']){
										echo $comet_team_atts['member_fb_link'];
									} ?>" target="blank"><i class="ti-facebook"></i></a>
									</li>
									<li><a href="<?php if($comet_team_atts['member_twitter_link']){
										echo $comet_team_atts['member_twitter_link'];
									} ?>" target="blank"><i class="ti-twitter-alt"></i></a>
									</li>
									<li><a href="<?php if($comet_team_atts['member_linkeding_link']){
										echo $comet_team_atts['member_linkeding_link'];
									} ?>" target="blank"><i class="ti-linkedin"></i></a>
									</li>
									<li><a href="<?php if($comet_team_atts['member_instagram_link']){
										echo $comet_team_atts['member_instagram_link'];
									} ?>" target="blank"><i class="ti-instagram"></i></a>
									</li>
									<li><a href="<?php if($comet_team_atts['member_dribbble_link']){
										echo $comet_team_atts['member_dribbble_link'];
									} ?>" target="blank"><i class="ti-dribbble"></i></a>
									</li>
								</ul>
							</div>
						</div>



				


<?php
	
	return ob_get_clean();

	}add_shortcode('comet_team_memeber','comet_team_memeber');


	if(function_exists(vc_map)){

		vc_map([

			'name'			=>'Comet Team Member',
			'base'			=>'comet_team_memeber',
			'icon'			=>get_template_directory_uri().'/images/comet.png',
			'description'	=>'Add tem Member on the page',
			'category'		=>'Comet Elements',
			'params'		=>[

			

					[

						'param_name'	=>'team_member_name',
						'type'			=>'textfield',
						'heading'		=>'Add Memeber Name',
						'value'			=>'Ms. Jhon'
					],

					[

						'param_name'	=>'team_memeber_designation',
						'type'			=>'textfield',
						'heading'		=>'Add Memeber Designation',
						'value'			=>'Web Developer'
					],

					[

						'param_name'	=>'team_member_image',
						'type'			=>'attach_image',
						'heading'		=>'Upload Memeber Image'
					],



					// Social Links

					[

						'param_name'	=>'member_fb_link',
						'type'			=>'textfield',
						'heading'		=>'Memeber Facebook URL'
					],

					[

						'param_name'	=>'member_twitter_link',
						'type'			=>'textfield',
						'heading'		=>'Memeber Twitter URL'
					],

					[

						'param_name'	=>'member_linkeding_link',
						'type'			=>'textfield',
						'heading'		=>'Memeber Linkedin URL'
					],

					[

						'param_name'	=>'member_instagram_link',
						'type'			=>'textfield',
						'heading'		=>'Memeber Instagram URL'
					],

					[

						'param_name'	=>'member_dribbble_link',
						'type'			=>'textfield',
						'heading'		=>'Memeber Dribbble URL'
					]

			]

		]);


	}