<?php global $commet_redux; ?>

 <footer id="footer-widgets">
      <div class="container">
        <div class="go-top">
          <a href="#top">
            <i class="ti-arrow-up"></i>
          </a>
        </div>
        <div class="row">
          <div class="col-md-6 ov-h">
            <div class="row">


              <div class="col-sm-4">

            <?php dynamic_sidebar('footer-one'); ?>
        
              </div>

              <div class="col-sm-4">
                <?php dynamic_sidebar('footer-two'); ?>
               
              </div>
              <div class="col-sm-4">

                <?php dynamic_sidebar('footer-three'); ?>

              </div>

            </div>
          </div>
          <div class="col-md-4 col-md-offset-2">
            <div class="row">
              <div class="col-md-12">

                <?php dynamic_sidebar('footer-four'); ?>

              </div>
            </div>
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </footer>
    <footer id="footer">
      <div class="container">
        <div class="footer-wrap">
          <div class="row">
            <div class="col-md-4">
              <div class="copy-text">

                <p><i class="icon-heart red mr-15"></i> <?php echo $commet_redux['ft'] ?></p>

              </div>
            </div>
            <div class="col-md-4">

                <?php wp_nav_menu([

                  'theme_location'    =>'footer-menu',
                  'menu_class'        =>'list-inline',
                  'fallback_cb'       =>'footer_menu'

                ])  

                ?>
        
            </div>
            <div class="col-md-4">
              <div class="footer-social">
                <ul>
                  <li>
                    <a target="_blank" href="<?php echo $commet_redux['fb']; ?>"><i class="ti-facebook"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="<?php echo $commet_redux['tw']; ?>"><i class="ti-twitter-alt"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="<?php echo $commet_redux['ld']; ?>"><i class="ti-linkedin"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="<?php echo $commet_redux['inst']; ?>"><i class="ti-instagram"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="<?php echo $commet_redux['vim']; ?>"><i class="ti-dribbble"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
      </div>
      <!-- end of container-->
    </footer>
    <!-- end of footer-->

   <?php wp_footer() ?> 
   
  </body>
</html>