<?php 

	/*

	Template Name: Comming Soon

	*/
?>

<?php get_header(); ?>


    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4 img-side img-left">
            <div class="img-holder">
              <img src="<?php echo get_template_directory_uri(); ?>/images/bg/9.jpg" alt="" class="bg-img">
            </div>
          </div>
          <!-- end of side background image-->
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-md-offset-5 col-sm-8 col-sm-offset-4">
            <div class="title txt-xs-center">
              <h4 class="upper">Don't panic.</h4>
              <h2>We'll Be Here<span class="red-dot"></span></h2>
              <hr>
            </div>
            <div class="countdown-wrap">
              <ul data-date="04/20/2016 15:00:00" class="nav countdown txt-xs-center">
                <li><span class="days">00</span>days</li>
                <li><span class="hours">00</span>hours</li>
                <li><span class="minutes">00</span>minutes</li>
                <li><span class="seconds">00</span>seconds</li>
              </ul>
            </div>
            <!-- end of countdown-->
            <div class="title">
              <p>Iure quas hic numquam expedita, nam, delectus provident facilis ratione illo cum magni possimus ut tempora error, similique optio cupiditate vero id.</p>
            </div>
            <form data-mailchimp="true" class="inline-form">
              <div class="input-group">
                <input type="email" name="email" placeholder="Your Email Address" class="form-control"><span class="input-group-btn"><button type="submit" class="btn btn-color">Subscribe</button></span>
              </div>
            </form>
            <!-- end of inline form-->
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </section>
    
   
    <?php get_footer(); ?>



