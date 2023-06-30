<!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/site-footer-bg.jpg);">
            </div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="site-footer__top-inner">
                        <div class="site-footer__top-logo">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/resources/logo-2.png" alt="Dumpster Rentalsz"></a>
                        </div>
                        <div class="site-footer__top-right">
                            <p class="site-footer__top-right-text">Dumpster rental services near you in <?php the_field('city');?> USA.</p>
                            <div class="site-footer__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__middle">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <h3 class="footer-widget__title">About</h3>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">With Dumpster Rentalsz, you can count on timely delivery and pickup, flexible rental periods, and transparent pricing with no hidden fees. Our customer service team is always available to answer your questions and help you find the best dumpster rental for your project.</p>
                                </div>
                                <form class="footer-widget__newsletter-form">
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="Email Address" name="email">
                                        <button type="submit" class="footer-widget__newsletter-btn"><i
                                                class="far fa-paper-plane"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Popular Cities</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <?php 
                                                  $args = array( 'post_type' => 'page', 'meta_query'     => array(
                                                            'relation' => 'AND',
                                                            array(
                                                                'key'     => 'city',
                                                               // 'compare' => 'EXISTS',
                                                            ),
                                                        ), 'meta_key'=> 'total_views','orderby'=> 'meta_value','posts_per_page' => 10, 'order'=> 'ASC');


                                                    $parent = new WP_Query( $args );
                                                    while ( $parent->have_posts() ) : $parent->the_post();
                                                  ?>
                                                                                <li><a href="<?php the_permalink();?>"><?php the_field('city');?></a></li>
                                    <?php endwhile; wp_reset_postdata();?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__services clearfix">
                                <h3 class="footer-widget__title">Popular States</h3>
                                <ul class="footer-widget__services-list list-unstyled clearfix">
                                    <?php 
              $args = array( 'post_type' => 'page', 'meta_query'     => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'city',
                           // 'compare' => 'EXISTS',
                        ),
                    ), 'meta_key'=> 'total_views','orderby'=> 'meta_value','posts_per_page' => 6, 'order'=> 'DESC');


                $parent = new WP_Query( $args );
                while ( $parent->have_posts() ) : $parent->the_post();
              ?>
                                            <li><a href="<?php the_permalink();?>"><?php the_field('city');?></a></li>
<?php endwhile; wp_reset_postdata();?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <h3 class="footer-widget__title">Contact</h3>
                                <p class="footer-widget__contact-text">Dumpster Rentalsz, USA</p>
                                <div class="footer-widget__contact-info">
                                    <div class="footer-widget__contact-icon">
                                        <span class="icon-contact"></span>
                                    </div>
                                    <div class="footer-widget__contact-content">
                                        <p class="footer-widget__contact-mail-phone">
                                            <a href="mailto:contact@dumpsterrentalsz.com"
                                                class="footer-widget__contact-mail">contact@dumpsterrentalsz.com</a>
                                        </p>
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="site-footer-bottom-shape"
                    style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shapes/site-footer-bottom-shape.png);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© Copyright <?php echo date('F, Y');?> by <a href="<?php echo home_url();?>">dumpsterrentalsz.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?php echo home_url();?>" aria-label="logo image"><img src="<?php echo get_template_directory_uri();?>/assets/images/resources/logo-2.png"
                        width="155" alt="Dumpster Rentalsz" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:contact@dumpsterrentalsz.com">contact@dumpsterrentalsz.com</a>
                </li>
				<li>
                    <i class="fa fa-phone"></i>
                    <a href="tel:+13216033812">(321) 603-3812</a>
                </li>
<!--                 <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li> -->
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="<?php echo home_url();?>">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" name='s' id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/odometer/odometer.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/swiper/swiper.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/wow/wow.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/isotope/isotope.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/countdown/countdown.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/vegas/vegas.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/vendors/timepicker/timePicker.js"></script>




    <!-- template js -->
    <script src="<?php echo get_template_directory_uri();?>/assets/js/wostin.js"></script>
    <?php wp_footer();?>
</body>


</html>