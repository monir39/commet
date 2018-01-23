
<?php get_header(); ?>

		<!-- End Navigation Bar-->
		<section class="page-title parallax">
			<div data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/images/bg/18.jpg" class="parallax-bg"></div>
			<div class="parallax-overlay">
				<div class="centrize">
					<div class="v-center">
						<div class="container">
							<div class="title center">
								<h1 class="upper"><?php wp_title() ?><span class="red-dot"></span></h1>
								<h4>We have a few tips for you.</h4>
								<hr>
							</div>
						</div>
						<!-- end of container-->
					</div>
				</div>
			</div>
		</section>
		
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="blog-posts">
							<?php while(have_posts()): the_post() ?>
								<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
							<?php endwhile; ?> 	
						</div>



						<ul class="pagination">
							
							<?php the_posts_pagination([

								'screen_reader_text' =>' ',
								'prev_text'			=>'<i class="ti-arrow-left"></i>',
								'next_text'			=>'<i class="ti-arrow-right"></i>',
								'type'				=>'list'

							]); ?>

						</ul>
						<!-- end of pagination-->

					</div>

				
          		<div class="col-md-3 col-md-offset-1">  
					<?php get_sidebar(); ?>
				</div>

				</div>
				<!-- end of row-->
			</div>
			<!-- end of container-->
		</section>
		<!-- Footer-->
<?php get_footer(); ?>