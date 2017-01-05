<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  <?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title("",true); ?> | <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/flexslider.css" rel="stylesheet" >
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/styles.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/queries.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    
  </head>
    <body id="top">
      <header id="home">
        <nav>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                <nav class="pull">
                  <ul class="top-nav">
                    <li><a href="#intro">O nas <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                    <li><a href="#features">Jakość <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                    <li><a href="#responsive">Oferta <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                    <li><a href="#portfolio">Kamienie <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                    <li><a href="#contact">Kontakt <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                  </ul>
                  <?php 
                      if ( class_exists( 'WPGlobus' ) ) {
                      if ( WPGlobus::Config()->language == 'en' ) {
                        echo '<img src="logo-en.png" />';
                      } else {
                        echo '<img src="logo-pl.png" />';
                      }
                    }
                  ?>
                </nav>
              </div>
            </div>
          </div>
        </nav>
        <section class="hero" id="hero">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-right navicon">
                <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 col-md-offset-2 text-center inner">
                <h1 class="animated fadeInDown">GRAMI<span>ITALIA</span></h1>
                <p class="animated fadeInUp delay-05s">Kamienie naturalne z całego świata</p>
              </div>
            </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="#intro" class="learn-more-btn">Dowiedz się więcej</a>
                </div>
              </div>
            </div>
          </section>
        </header>