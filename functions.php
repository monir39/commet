<?php 

	// Basic theme support
	function basic_theme_support(){

		add_theme_support('title-tag');
		add_theme_support('custom-header');
		add_theme_support('custom-background');
		add_theme_support('widgets');
		add_theme_support('menus');
		add_theme_support('woocommerce');
		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', ['audio','video','gallery', 'quote']);


	// Menu fallback cb
	function header_menu(){

	}

	function footer_menu(){
		
	}


	// Menu register
	register_nav_menus([

		'main-menu'		=>'Main Menu',
		'footer-menu'	=>'Footer Menu'
	]);


	}add_action('after_setup_theme', 'basic_theme_support');

	// Menu Register

	

	

	// Sidebar Register

	function sidebar_add(){

		register_sidebar([
			'name'			=>'Right Sidebar',
			'id'			=>'right-sidebar',
			'description'	=>'Add widgets on right sidebar',
			'before_widget' =>'<div class="widget">',
			'after_widget'	=>'</div>',
			'before_title'	=>'<h6 class="upper">',
			'after_title'	=>'</h6>'

		]);


		register_sidebar([
			'name'			=>'Left sidebar',
			'id'			=>'left-sidebar',
			'description'	=>'Add widgets on left sidebar',
			'before_widget' =>'<div class="widget">',
			'after_widget'	=>'</div>',
			'before_title'	=>'<h6 class="upper">',
			'after_title'	=>'</h6>'

		]);

		register_sidebar([
			'name'			=>'Footer One',
			'id'			=>'footer-one',
			'description'	=>'Footer one from left',
			'before_widget' =>'<div class="widget">',
			'after_widget'	=>'</div>',
			'before_title'	=>'<h6 class="upper">',
			'after_title'	=>'</h6>'


		]);

		register_sidebar([
			'name'			=>'Footer two',
			'id'			=>'footer-two',
			'description'	=>'Footer two from left',
			'before_widget' =>'<div class="widget">',
			'after_widget'	=>'</div>',
			'before_title'	=>'<h6 class="upper">',
			'after_title'	=>'</h6>'

		]);

		register_sidebar([
			'name'			=>'Footer three',
			'id'			=>'footer-three',
			'description'	=>'Footer three from left',
			'before_widget' =>'<div class="widget">',
			'after_widget'	=>'</div>',
			'before_title'	=>'<h6 class="upper">',
			'after_title'	=>'</h6>'

		]);

		register_sidebar([
			'name'			=>'Footer four',
			'id'			=>'footer-four',
			'description'	=>'Footer four from left',
			'before_widget' =>'<div class="widget">',
			'after_widget'	=>'</div>',
			'before_title'	=>'<h6 class="upper">',
			'after_title'	=>'</h6>'

		]);


		register_widget('CommetSearch');
		register_widget('LatestPostWidget');
		register_widget('CommetAbout');
		register_widget('SubscribeNewsletter');

	}add_action('widgets_init','sidebar_add');




	// Widget Search
	class CommetSearch extends WP_Widget{

		public function __construct(){

			parent::__construct('CommetSearch','Commet Search', [
				
				'description'		=>'Add commet search form'
			]);

		}

		public function widget($one, $two){ 

			$title = $two['title'];

			?>
			
			<?php echo $one['before_widget']; ?>

                <?php echo $one['before_title']; ?> <?php echo $title; ?> <?php echo $one['after_title']; ?>

                <form method="GET">
                  <input type="text" name="s" placeholder="Search.." class="form-control">
                </form>

            <?php echo $one['after_widget']; ?>
				
		<?php }

		public function form($two){ 

			$title = $two['title'];

			?>
			
			<p>
				<label for="title">Title</label>
				<input id="title" type="text" name="<?php echo $this-> get_field_name('title'); ?>" value="<?php echo $title; ?>" class="widefat">
			</p>

		<?php }

	}
	//End widget search






	// Latest post widget on siebar;
	class LatestPostWidget extends WP_Widget{

		public function __construct(){

			parent::__construct('LatestPostWidget','Commet Latest post',[

				'description'	=>'Add latest widget'
			]);


		}
		public function widget($one, $two){ 

			$title = $two['title'];

			?>
			
			<?php echo $one['before_widget'] ?>
                <?php echo $one['before_title'] ?><?php echo $title; ?><?php echo $one['after_title']; ?>
                <ul class="nav">
					
				<?php 

					$commet_latest_post = new WP_Query([

						'post_type'		=> 'post',

						'posts_per_page' => 5

					]);


					while( $commet_latest_post -> have_posts()): $commet_latest_post -> the_post(); ?>

                  <li>
                  	<a href="<?php the_permalink(); ?>"><?php the_title(); ?><i class="ti-arrow-right"></i><span><?php the_time('F, d, Y, g:i A'); ?></span></a>
                  </li>
					
				<?php endwhile; ?>

                </ul>
            <?php echo $one['after_title']; ?>

		<?php }

		public function form($two){ 

			$title = $two['title'];

			?>

				<p>
					<label for="">Title</label>
					<input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" class="widefat">
				</p>

		<?php }

	}
	// end Latest post widget on siebar;



	//  About commet widget;
	class CommetAbout extends WP_Widget{

		public function __construct(){

			parent::__construct('CommetAbout','About Widget',['description'	=>'Add about on widget']);

		}
		public function widget($one, $two){	

			$title 		= $two['title'];
			$address 	= $two['address'];
			$button 	= $two['button'];

			?>
				
				<?php echo $one['before_widget']; ?>
                  <?php echo $one['before_title'] ?> <?php echo $title ?> <?php echo $one['after_title']; ?>
                  <p>
                    <?php echo $address; ?>
                  </p><a href="#" class="btn btn-color-out btn-sm"><?php echo $button; ?></a>
                <?php echo $one['after_widget']; ?>
				


		<?php }

		public function form($two){ 

			$title 		= $two['title'];
			$address 	= $two['address'];
			$button 	= $two['button'];

			?>
				
			<p>
				<label for="title">Title</label>
				<input type="text" id="Title" name="<?php echo $this-> get_field_name('title'); ?>" value="<?php echo $title ?>" class="widefat">
			</p>

			<p>
				<label for="address">Address</label>
				<textarea placeholder="Use <span> tag for a single line" name="<?php echo $this->get_field_name('address'); ?>" class="widefat" id="address"><?php echo $address; ?></textarea>
			</p>

			<p>
				<label for="button-text">Button Text</label>
				<input id="button-text" type="text" value="<?php echo $button; ?>" name="<?php echo $this-> get_field_name('button'); ?>" class="widefat">
			</p>

		<?php }

	}
	// End About commet widget;



	// News letter subscriber widget
	class SubscribeNewsletter extends WP_Widget{

		public function __construct(){

			parent::__construct('SubscribeNewsletter','Commet NewsLetter',['description' =>'Add subscribe form on widget']);


		}
		public function widget($one,  $two){ 

			$title 					= $two['title'];
			$short_description 		= $two['short-description'];
			$subscribe_button_text 	= $two['subscribe-text'];

			?>

				<?php echo $one['before_widget']; ?>
                <?php echo $one['before_title'] ?> <?php echo $title; ?> <?php echo $one['after_title']; ?>
                  <p><?php echo $short_description; ?></p>
                  <div class="footer-newsletter">
                    <form data-mailchimp="true" class="inline-form">
                      <div class="input-group">
                        <input type="email" name="email" placeholder="Your Email" class="form-control"><span class="input-group-btn"><button type="submit" data-loading-text="Loading..." class="btn btn-color"><?php echo $subscribe_button_text; ?></button></span>
                      </div>
                    </form>
                  </div>
               <?php echo $one['after_widget']; ?>

		<?php }
		public function form($two){ 

			$title 					= $two['title'];
			$short_description 		= $two['short-description'];
			$subscribe_button_text 	= $two['subscribe-text'];

			?>
				
				<p>
					<label for="title">Title</label>
					<input type="text" id="title" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" class="widefat">
				</p>

				<p>
					<label for="short-description">Short Description</label>
					<textarea name="<?php echo $this -> get_field_name('short-description'); ?>" id="short-description" class="widefat"><?php echo $short_description; ?></textarea>
				</p>

				<p>
					<label for="subscribe-text">Subscribe Button Text</label>
					<input type="text" id="subscribe-text" name="<?php echo $this-> get_field_name('subscribe-text'); ?>" value="<?php echo $subscribe_button_text; ?>" class="widefat">
				</p>
				

		<?php }

	}


	# Admin CSS Icon Of comet themes enqueu
	function admin_css_icon_themes(){

		wp_enqueue_style('admin-css', get_theme_file_uri('/css/admin-comet-icons.css') );
	}add_action('admin_enqueue_scripts','admin_css_icon_themes');


	// CSS & JS enqueue
	function css_js_enqueue(){

		//css
		wp_enqueue_style ('bundle', get_theme_file_uri('/css/bundle.css'));
		wp_enqueue_style ('font-awesome', get_theme_file_uri('/css/font-awesome.min.css'));
		wp_enqueue_style ('style-css', get_theme_file_uri('/css/style.css'));
		wp_enqueue_style ('monstar', 'https://fonts.googleapis.com/css?family=Montserrat:400,700');
		wp_enqueue_style ('ralway', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500');
		wp_enqueue_style ('halant', 'https://fonts.googleapis.com/css?family=Halant:300,400');
		wp_enqueue_style ('main-css', get_stylesheet_uri());

		// Js

		wp_enqueue_script( 'bundle', get_theme_file_uri('/js/bundle.js'), ['jquery'], true, true );
		wp_enqueue_script( 'custom' ,get_theme_file_uri('/js/custom.js'),['jquery'], true, true );
		wp_enqueue_script( 'main', get_theme_file_uri('/js/main.js'),['jquery'], true, true );
		wp_enqueue_script( 'customizer', get_theme_file_uri('/js/customizer.js'),['jquery'], true, true );
		wp_enqueue_script( 'navigation', get_theme_file_uri('/js/navigation.js'),['jquery'], true, true );
		wp_enqueue_script( 'skip-link', get_theme_file_uri('/js/skip-link-focus-fix.js'),['jquery'], true, true );
		wp_enqueue_script( 'maps-google','https://maps.googleapis.com/maps/api/js?v=3.exp',['jquery'],true, true );

	}add_action('wp_enqueue_scripts','css_js_enqueue');




	// Admin scripts for post format
	function admin_post_format_dynamic(){ 

			if (get_post_type() == 'post') :
		?>

		<script>
			(function($){

				$(document).ready(function (){

					$("#video-box").hide();
					$("#audio-box").hide();
					$("#gallery-box").hide();

					var pots_format_id = $("input[class='post-format']:checked").attr('id');

						if( pots_format_id == 'post-format-video' ){

							$("#video-box").show();

						}else{

							$("#video-box").hide();

						}


						if( pots_format_id  == 'post-format-audio'){

							$("#audio-box").show();

						}else{

							$("#audio-box").hide();
						}


						if( pots_format_id == 'post-format-gallery'){

							$("#gallery-box").show();

						}else{

							$("#gallery").hide();
						}



					$('input.post-format').change(function(){

					var pots_format_id = $("input[class='post-format']:checked").attr('id');

						if( pots_format_id == 'post-format-video' ){

							$("#video-box").show();

						}else{

							$("#video-box").hide();

						}

						if( pots_format_id  == 'post-format-audio'){

							$("#audio-box").show();

						}else{

							$("#audio-box").hide();
						}


						if( pots_format_id == 'post-format-gallery'){

							$("#gallery-box").show();

						}else{

							$("#gallery-box").hide();
							
						}

					});

				});

			})(jQuery);
			
		</script>

	<?php endif;

	}add_action('admin_print_scripts', 'admin_post_format_dynamic', 1000 );
	// Ended here Admin scripts for post format
		
	
	
	// Comment from deafault fileds replace here
	add_filter('comment_form_default_fields', function($comment_filed_replace){

		$comment_filed_replace['url'] ='';

		$comment_filed_replace['email'] = '<div class="form-group last">
                      <input name="email" type="text" placeholder="Email" class="form-control">
                    </div>
                  </div>';

		$comment_filed_replace['author'] = '<div class="form-double">
                    <div class="form-group">
                      <input name="author" type="text" placeholder="Name" class="form-control">
                    </div>';

        $comment_filed_replace['comment_message'] = '<div class="form-group">
                    <textarea placeholder="Comment" name="comment" class="form-control"></textarea>
                  </div>';

		return $comment_filed_replace;

	}); // Comment from deafault fileds replace here ended




	//comment form replace here
	add_filter('comment_form_defaults', function($form_design_replace){

		$form_design_replace['submit_button'] = '<button type="submit"  class="btn btn-color-out">Post Comment</button>';

        $form_design_replace['submit_field'] = '<div class="form-submit text-right">%1$s %2$s</div>';

        

        if (is_user_logged_in()) {
        	$form_design_replace['comment_field'] = '<div class="form-group">
                    <textarea placeholder="Comment" name="comment" class="form-control"></textarea>
                  </div>';
        	
        }else{

			$form_design_replace['comment_field'] = ' ';


        }

        $form_design_replace['comment_notes_before'] = ' ';

        $form_design_replace['title_reply'] = '<div id="respond">
        <h5 class="upper">Leave a comment</h5></div>';



		return $form_design_replace;


	}); // Comment form replace ended here



	// Comment reply here
	function comet_comment_reply($one , $two, $three){ ?>

		<li>
          <div class="comment">
            <div class="comment-pic">
               <!-- class="img-circle"> -->

               <?php echo get_avatar($one, '','','', [
						'class'				=> 'img-circle'
					]); ?>
            </div>
            <div class="comment-text">
              <h5 class="upper"><?php comment_author(); ?></h5><span class="comment-date">Posted on <?php comment_date('F, d, Y'); ?> <?php comment_time('g:i a'); ?></span>
              <p><?php comment_text(); ?></p>
              
              <?php 

              	comment_reply_link( array_merge( $two, [

              		'depth'		=> $three,
              		'max_depth'	=>$two['max_depth']
              	]));

               ?>

            </div>
          </div>
        </li>

	<?php } // Comment reply here end



	// redux
	include_once("inc/redux/ReduxCore/framework.php");
	include_once("inc/redux/sample/config.php");

	//TGM
	include_once("inc/tgm/example.php");

	// CMB2
	include_once("inc/cmb/init.php");
	include_once("inc/cmb/config.php");

	// Nav walker
	require_once('walker-nav-menu.php');

	// *
		#Shordcode ==============
	//*
	require_once('inc/shortcode/tab-shortcode.php');
	require_once("inc/shortcode/progress-bar-shortcode.php");
	require_once("inc/shortcode/accordion-shortcode.php");
	require_once("inc/shortcode/counter-shortcode.php");
	require_once("inc/shortcode/features-box.php");
	require_once("inc/shortcode/alert-shortcode.php");
	require_once("inc/shortcode/button-shortcode.php");
	require_once("inc/shortcode/video-audio-shortcode.php");
	require_once("inc/shortcode/slider-element-gallery.php");
	require_once("inc/shortcode/fancy-title.php");
	require_once("inc/shortcode/comet-simple-title.php");
	require_once("inc/shortcode/flip-box.php");
	require_once("inc/shortcode/comet-portfolio.php");
	require_once("inc/shortcode/client-box.php");
	require_once("inc/shortcode/comet-latest-post.php");
	require_once("inc/shortcode/team-member.php");
	require_once("inc/shortcode/team-member-slider.php");
	require_once("inc/shortcode/comet-pricing.php");
	
	#icon
	require_once("inc/shortcode/theme-icons.php");

	#custom post type portfolio
	require_once("inc/custom-post-type/custom-portfolio.php");

	


