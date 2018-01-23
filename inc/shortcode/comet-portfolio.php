<?php 
	function comet_portfolio($one, $two){

		ob_start();

		$comet_portfolio_title 	= shortcode_atts([

			'comet_portfolio_title' 	=>''

		], $one);

?>
			
   <section id="portfolio" class="pb-0">
	    <div class="container">
	        <div class="row">
				<div class="col-md-6">
				<div class="title m-0 txt-xs-center txt-sm-center">
				  <h2 class="upper"><?php echo $comet_portfolio_title['comet_portfolio_title'] ?><span class="red-dot"></span></h2>
				  <hr>
				</div>
				</div>

				<div class="col-md-6">
				<ul id="filters" class="no-fix mt-25">
					
			<?php $portfolio_category_in_menu = get_terms('portfolio-catagory'); ?>

			<?php if( !empty($portfolio_category_in_menu) && ! is_wp_error($portfolio_category_in_menu) ): ?>

				  <li data-filter="*" class="active">All</li>

				<?php $portfolio_category_in_menu = get_terms('portfolio-catagory');foreach ($portfolio_category_in_menu as $single_portfolio_category_in_menu): ?>
				  <li data-filter=".<?php echo $single_portfolio_category_in_menu-> slug; ?>"><?php echo $single_portfolio_category_in_menu -> name ?></li>
					
				<?php endforeach; ?>
				
			<?php endif; ?>
				</ul>
				</div>
	        </div>
	    </div>



		<div class="section-content pb-0">
			<div id="works" class="four-col wide mt-50">
			<?php 

				$porfolio_post = new WP_Query([
					'post_type'		=>'comet-portfolio'
				]);

				while( $porfolio_post -> have_posts() ) : $porfolio_post -> the_post();

				$portfolio_category_in_content = get_the_terms( get_the_ID(),'portfolio-catagory' );

			if (!empty ($portfolio_category_in_content) && ! is_wp_error($portfolio_category_in_content) ):

				$slug_in_category = [];
				$name_in_category = [];

				foreach( $portfolio_category_in_content as $_single_portfolio_category_in_content ){

					$slug_in_category[] = $_single_portfolio_category_in_content -> slug;
				}

				foreach( $portfolio_category_in_content as $_single_portfolio_category_in_content ){

					$name_in_category[] = $_single_portfolio_category_in_content -> name;

				}

				$seleted_category_slug = implode(" ", $slug_in_category);
				$selected_category_name = implode(" ", $name_in_category );

			endif;

			?>
			
				<div class="work-item <?php echo $seleted_category_slug; ?>">
					<div class="work-detail">
					  <a href="<?php the_permalink(); ?>">
					    <?php the_post_thumbnail(); ?>
					    <div class="work-info">
					      <div class="centrize">
					        <div class="v-center">
					          <h3><?php the_title(); ?></h3>
						        <p><?php echo $selected_category_name; ?></p>
							</div>
					      </div>
					    </div>
					  </a>
					</div>
				</div>

				<?php endwhile; ?>
			</div>
			
		</div>
    </section>



<?php 

return ob_get_clean();

	}add_shortcode('comet_portfolio', 'comet_portfolio');


	if(function_exists(vc_map)){

		vc_map([

			'name'		=>'Comet Portfolio',
			'base'		=>'comet_portfolio',
			'icon'		=>get_template_directory_uri().'/images/comet.png',
			'category'	=>'Comet Elements',
			'description'	=>'Add Portfolio',
			'params'		=>[

				[

					'param_name'		=>'comet_portfolio_title',
					'type'				=>'textfield',
					'heading'			=>'Add Portfolio Title',
					'value'				=>'Insert Title here'

				]

			]

		]);

	}
