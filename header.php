<?php global $commet_redux; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-46276885-13', 'auto');
      ga('send', 'pageview');
    </script>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- Preloader-->
    <div id="loader">
      <div class="centrize">
        <div class="v-center">
          <div id="mask">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Preloader-->
    <!-- Navigation Bar-->
    <header id="topnav">
      <div class="container">
        <!-- Logo container-->
        <div class="logo">
          <a href="<?php bloginfo('home'); ?>">
            <img src="<?php echo $commet_redux['log-upload']['url']; ?>" alt="" class="logo-light">
            <img src="<?php echo $commet_redux['log-upload']['url']; ?>" alt="" class="logo-dark">
          </a>
        </div>
        <!-- End Logo container-->
        <div class="menu-extras">
          <div class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
            <!-- End mobile menu toggle-->
          </div>
        </div>
        <div id="navigation">
          <!-- Navigation Menu-->

           <?php wp_nav_menu([

              'theme_location'    =>'main-menu',
              'menu_class'        =>'navigation-menu',
              'fallback_cb'       =>'header_menu',
              'walker'            => new MainMenu()


            ]); ?>

        </div>
      </div>
    </header>