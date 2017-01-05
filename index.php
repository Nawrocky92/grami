        <?php get_header(); ?>

        <section class="intro text-center section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow">Grami Italia</h1>
                <?php if ( have_posts() ) while ( have_posts() ) : the_post();
                the_content();
            endwhile; ?>
              </div>
            </div>
          </div>
        </section>

        <section class="features text-center section-padding" id="features">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow"><?php the_field("title_1", 7); ?></h1>
                <div class="features-wrapper">
                  <div class="col-md-4 wp2">
                    <h2><?php the_field("title_2_1", 7); ?></h2>
                    <p><?php the_field("p_1_1", 7); ?></p>
                  </div>
                  <div class="col-md-4 wp2 delay-05s">
                    <h2><?php the_field("title_2_2", 7); ?></h2>
                    <p><?php the_field("p_1_2", 7); ?></p>
                  </div>
                  <div class="col-md-4 wp2 delay-1s">
                    <h2><?php the_field("title_2_3", 7); ?></h2>
                    <p><?php the_field("p_1_3", 7); ?></p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="text-center" id="responsive">
          <div class="container-fluid nopadding responsive-services">
            <div class="wrapper">
              <div class="iphone">
                <div class="wp3" style="background: url('<?php the_field("second_image", 7); ?>'); no-repeat center center"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      <li>
                        <h1 class="arrow"><?php the_field("title_3", 7); ?></h1>
                        <p><?php the_field("p_2", 7); ?></p>   
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="swag text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h1>Naturalne <span>piękno <em>z całego</em> świata</span></h1>
                <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>

        <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
              <div id="portfolioSlider">
                <h1 class="arrow">Nasze produkty</h1>
                <p><?php the_field("gallery", 7); ?></p>
              </div>
            </div>
          </div>
        </section>

        <section class="subscribe text-center">
          <div class="container">
            <h1><i class="fa fa-paper-plane"></i><span>Newsletter</span></h1>
            <form action="#">
              <input type="text" name="" value="" placeholder="" required>
              <input type="submit" name="" value="Zapisz się">
            </form>
          </div>
        </section>

        <section class="dark-bg text-center section-padding contact-wrap" id="contact">
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/logo.png">
                <h1 class="arrow">Kontakt</h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Adres</span></h2>
                  <p><?php the_field("adress", 7); ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Telefon</span></h2>
                  <p><?php the_field("phone", 7); ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>E-mail</span></h2>
                  <p><?php the_field("email", 7); ?></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Polska</h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Przedstawiciel</span></h2>
                  <p><?php the_field("adress_pl", 7); ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Telefon</span></h2>
                  <p><?php the_field("phone_pl", 7); ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>E-mail</span></h2>
                  <p><?php the_field("email_pl", 7); ?></p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="https://www.facebook.com/gramiitalia/?fref=ts" class="social-btn"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="mailto:info@grami-italia.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2866.300097618317!2d10.099798015658704!3d44.07715927910894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d50f9636bd4445%3A0xa97727de4308a8f9!2sGrami+Italia!5e0!3m2!1spl!2suk!4v1459692474683" width="100%" height="400" frameborder="0" style="border:0; -webkit-filter: grayscale(1);" allowfullscreen></iframe>

        <?php get_footer(); ?>

