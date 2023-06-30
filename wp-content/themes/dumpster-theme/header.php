<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">

    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap" rel="stylesheet">



    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/wostin-icons/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/wostin.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/wostin-responsive.css" />
	<meta name="ahrefs-site-verification" content="fadc50e6fa9846cb5fb5ba3c7e21566d3d2c3c8a02f99eaea06060846833ad14">

    <?php wp_head();?>
</head>

<body>
    <!-- <div class="preloader">
        <img class="preloader__image" width="60" src="<?php echo get_template_directory_uri();?>/assets/images/loader.png" alt="" />
    </div> -->
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header-three">
            <nav class="main-menu main-menu-three">
                <div class="main-menu-three__wrapper">
                    <div class="main-menu-wrapper__logo">
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/resources/logo-2.png" alt="Dumpster Rentalsz"></a>
                    </div>
                    <div class="main-menu-three__main-menu">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li> <a href="<?php echo home_url();?>">Home</a> </li>
                            <li class="dropdown">
                                <a href="<?php echo home_url();?>">Locations</a>
                                <ul>
                                    
                                    <?php 
                                                               $args = array( 'post_type' => 'page', 'post_parent'    => 0,'meta_query'     => array(
                                                                        'relation' => 'AND',
                                                                        array(
                                                                            'key'     => 'state',
                                                                           // 'compare' => 'EXISTS',
                                                                        ),
                                                                    ), 'meta_key'=> 'state','orderby'=> 'meta_value','posts_per_page' => 100, 'order'=> 'ASC');
                                                                
                                                                $parent = new WP_Query( $args );
                                                                while ( $parent->have_posts() ) : $parent->the_post();
                                                              ?>
                                  <li> <a title="<?php the_title();?>" href="<?php the_permalink();?>"><?php the_field('state');?></a> </li>
                                                <?php endwhile; wp_reset_postdata();?>
                                </ul>
                            </li>
                            <li class="dropdown"> <a href="<?php echo home_url('about-us');?>">About us</a> 
                                <ul>
                                     <li> <a href="<?php echo home_url('meet-our-team');?>">Our Team</a> </li>
                                     <li> <a href="<?php echo home_url('privacy-policy');?>">Privacy Policy</a> </li>
                                     <li> <a href="<?php echo home_url('terms-and-conditions');?>">Terms & Conditions</a> </li>
                                </ul>
                            </li>

                            <li> <a href="<?php echo home_url('contact-us');?>">Contact us</a> </li>
                            <li> <a href="<?php echo home_url('get-listed');?>">Get Listed</a> </li>
                            <li> <a href="<?php echo home_url('write-for-us');?>">Write for us</a> </li>
                            
                        </ul>
                    </div>
                    <div class="main-menu-three__right">
                        <div class="main-menu-three__search-box">
                            <a href="#" class="main-menu-three__search search-toggler icon-magnifying-glass"></a>
                        </div>
                        <div class="main-menu-three__call">
                            <div class="main-menu-three__call-icon">
                                <span class="icon-phone-ringing"></span>
                            </div>
                            <div class="main-menu-three__call-number">
                                <p>Have Waste/Pickup?</p>
                                <b><a href="tel:+13216033812">(321) 603-3812</a></b>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
