<?php get_header(); ?>
<?php
   $args = array(
    'post_type'      => 'dumpsters',
    'posts_per_page' => 100,
    //'post_parent'    => $post->ID,
    'meta_key'=> 'linked','meta_value'=> get_the_ID()
 );
   $parent = new WP_Query( $args );
   global $post;
   $author_id = $post->post_author;

?>  <!--Main Slider Start-->
        <section class="main-slider main-slider-three">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": false,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="main-slider-three-bg"
                            style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/main-slider-3-bg.jpg);">
                        </div>
                        <div class="main-slider-three-bg-two"></div>
                        <div class="main-slider-three-building"><img
                                src="<?php echo get_template_directory_uri();?>/assets/images/resources/main-slider-three-building.png" alt="Dumpster rentals near me"></div>
                        <div class="main-slider-three-car"><img src="<?php echo get_template_directory_uri();?>/assets/images/resources/main-slider-three-car.png"
                                alt="Dumpster rentals in US" class="float-bob-y"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7">
                                    <div class="main-slider__content text-white">
                                        <h1>Dumpster Rentals <?php the_field('city');?></h1>
										<p>
											Looking for a reliable, affordable, and hassle-free dumpster rental service in <?php the_field('city');?>? You've come to the right place. At Dumpster Rentalsz, we're more than just a dumpster rental service - we're your trusted partner for all your waste management needs.

										</p>
                                        <a href="tel:+13216033812" class="thm-btn">Request a Pickup</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->

            </div>
        </section>
        <!--Main Slider End-->

        <!--Services Two Start-->
        <section class="services-two">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">The Fast, Affordable, and Easy Way to Rent a Dumpster in <?php the_field('city');?></span>
                    <h2 class="section-title__title"><?php the_field('city');?> Dumpster Rental Services</h2>
                </div>
              <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__content-box">
                                <div class="services-two__content-bg-box">
                                    <div class="services-two__content-bg"
                                        style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/services-two-content-bg.jpg);">
                                    </div>
                                </div>
                                <div class="services-two__icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/services-2-icon-1.png" alt="Residential Dumpster Rentals">
                                </div>
                                <div class="services-two__content">
                                    <h3 class="services-two__title"><a href="#">Residential Dumpster Rentals</a></h3>
                                    <p class="services-two__text">Perfect for homeowners looking to declutter their homes.</p>
                                </div>
                            </div>
                            <div class="services-two__read-more">
                                <a href="#">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <!--Services Two Single-->
                        <div class="services-two__single mart-30">
                            <div class="services-two__content-box">
                                <div class="services-two__content-bg-box">
                                    <div class="services-two__content-bg"
                                        style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/services-two-content-bg.jpg);">
                                    </div>
                                </div>
                                <div class="services-two__icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/services-2-icon-2.png" alt="Construction Dumpster Rentals">
                                </div>
                                <div class="services-two__content">
                                    <h3 class="services-two__title"><a href="#">Construction Dumpster Rentals
                                        </a></h3>
                                    <p class="services-two__text"> Ideal for construction sites and contractors.</p>
                                </div>
                            </div>
                            <div class="services-two__read-more">
                                <a href="#">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <!--Services Two Single-->
                        <div class="services-two__single">
                            <div class="services-two__content-box">
                                <div class="services-two__content-bg-box">
                                    <div class="services-two__content-bg"
                                        style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/services-two-content-bg.jpg);">
                                    </div>
                                </div>
                                <div class="services-two__icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/services-2-icon-2.png" alt="Commercial Dumpster Rentals ">
                                </div>
                                <div class="services-two__content">
                                    <h3 class="services-two__title"><a href="#">Commercial Dumpster Rentals </a>
                                    </h3>
                                    <p class="services-two__text">Tailored to businesses of all sizes.</p>
                                </div>
                            </div>
                            <div class="services-two__read-more">
                                <a href="#">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <!--Services Two Single-->
                        <div class="services-two__single mart-30">
                            <div class="services-two__content-box">
                                <div class="services-two__content-bg-box">
                                    <div class="services-two__content-bg"
                                        style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/services-two-content-bg.jpg);">
                                    </div>
                                </div>
                                <div class="services-two__icon">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/icon/services-2-icon-2.png" alt="Roll-Off Dumpster Rentals ">
                                </div>
                                <div class="services-two__content">
                                    <h3 class="services-two__title"><a href="#">Roll-Off Dumpster Rentals </a></h3>
                                    <p class="services-two__text">Ideal for larger projects.</p>
                                </div>
                            </div>
                            <div class="services-two__read-more">
                                <a href="#">
                                    <span>Read More</span>
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Two End-->

        <!--Welcome Start-->
        <section class="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome__left">
                            <div class="welcome__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="welcome__img">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/resources/welcome-img-1.jpg" alt="Dumpster Rentalsz US">
                                </div>
                                <div class="welcome__icon">
                                    <span class="icon-garbage"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="welcome__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Welcome to Dumpster Rentalsz <?php the_field('city');?></span>
                                <h2 class="section-title__title">Your Trusted Source for <?php the_field('city');?> Dumpster Rentals</h2>
                            </div>
                            <p class="welcome__text-1">Contact Us Today to Get Started</p>
                            <p class="welcome__text-2">With years of experience in the industry, we have built a reputation for excellence and reliability. We work with a network of trusted partners across the country to ensure that we can offer the best selection of dumpster rentals in <?php the_field('city');?> at competitive prices.
                            </p>
                            <ul class="list-unstyled welcome__bottom">
                                <li>
                                    <div class="welcome__count"></div>
                                    <div class="welcome__content">
                                        <h3>Going Above <br> and Beyond</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="welcome__count"></div>
                                    <div class="welcome__content">
                                        <h3>Committed to <br> People First</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Welcome End-->

        <!--Why Choose Two Start-->
        <section class="why-choose-two">
            <div class="why-choose-two-bg"
                style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/why-choose-two-bg.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-two__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Why Choose Us?</span>
                                <h2 class="section-title__title">Dumpster Rentals Made Easy: Choose Us for Hassle-Free Waste Management in <?php the_field('city');?>!</h2>
                            </div>
                            <p class="why-choose-two__text">With years of experience in the industry, we've built a reputation for excellence, reliability, and outstanding customer service. We work with a network of trusted partners across the country to offer a wide selection of dumpster sizes at competitive prices in <?php the_field('city');?>. Whether you're tackling a home renovation project, cleaning out your garage, or managing a construction site, we have the perfect dumpster for you.
                            </p>
                           
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="why-choose-two__right">
                            <ul class="list-unstyled why-choose-two__counter">
                                <li class="why-choose-two__counter-single wow fadeInUp" data-wow-delay="100ms">
                                    <div class="why-choose-two__counter-icon">
                                        <span class="icon-waste"></span>
                                    </div>
                                    <div class="why-choose-two__counter-content">
                                        <b class="odometer" data-count="4850">00</b><span
                                            class="counter-two__plus">+</span>
                                        <p class="why-choose-two__counter-text">Waste Picked & Dispose </p>
                                    </div>
                                </li>
                                <li class="why-choose-two__counter-single wow fadeInUp" data-wow-delay="200ms">
                                    <div class="why-choose-two__counter-icon">
                                        <span class="icon-success"></span>
                                    </div>
                                    <div class="why-choose-two__counter-content">
                                        <b class="odometer" data-count="99.9">00</b><span
                                            class="counter-two__plus">%</span>
                                        <p class="why-choose-two__counter-text">Our Company is Successful</p>
                                    </div>
                                </li>
                                <li class="why-choose-two__counter-single wow fadeInUp" data-wow-delay="300ms">
                                    <div class="why-choose-two__counter-icon">
                                        <span class="icon-affection"></span>
                                    </div>
                                    <div class="why-choose-two__counter-content">
                                        <b class="odometer" data-count="20660">00</b><span
                                            class="counter-two__plus">+</span>
                                        <p class="why-choose-two__counter-text">Satisfied & Happy People</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section class="pricing">
            <div class="container">
                <div class="section-title text-center">

                    <h2 class="section-title__title">Our Dumpster Rental Services in <?php the_field('city');?> Include</h2>
                </div>
                <div class="pricing__tab-box tabs-box">
                    <ul class="tab-buttons clearfix list-unstyled">
                        <li data-tab="#dumpster" class="tab-btn"><span>Dumpster Rentals by Size in <?php the_field('city');?> </span></li>
                    </ul>
                    <div class="tabs-content">
                       
                        <div class="tab tab active-tab animated fadeInUp " id="dumpster">
                            <div class="tabs-content__inner">
                                <div class="pricing__tab-content-box">
                                   
									<div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">10-Yard Dumpster
                                                </h3>
												<p>
													This is the smallest size we offer and is perfect for minor cleanouts or small remodeling projects. It's compact and easy to place, making it ideal for locations with limited space.
												</p>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <a href="tel:+13216033812" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">20-Yard Dumpster
                                                </h3>
												<p>
A 20-yard dumpster is great for medium-sized projects. This could include larger home cleanouts, moderate remodeling projects, or smaller construction sites.												</p>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <a href="tel:+13216033812" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">30-Yard Dumpster
                                                </h3>
												<p>
This dumpster size is suitable for larger projects such as major home renovations, new construction, or large-scale cleanouts. It offers a great balance between size and capacity.												</p>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <a href="tel:+13216033812" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
									
										<div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">40-Yard Dumpster
                                                </h3>
												<p>Our largest offering, a 40-yard dumpster, is designed for the biggest projects. This could include major construction or renovation projects, large-scale demolitions, or whole-house cleanouts.										</p>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <a href="tel:+13216033812" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">10-Yard Dumpster
                                                </h3>
												<p>
													This is the smallest size we offer and is perfect for minor cleanouts or small remodeling projects. It's compact and easy to place, making it ideal for locations with limited space.
												</p>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <a href="tel:+13216033812" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">10-Yard Dumpster
                                                </h3>
												<p>
													This is the smallest size we offer and is perfect for minor cleanouts or small remodeling projects. It's compact and easy to place, making it ideal for locations with limited space.
												</p>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <a href="tel:+13216033812" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="pricing__tab-content-single">
                                        <div class="pricing__tab-content-left">
                                            
                                            <div class="pricing__tab-content">
                                                <h3 class="pricing__tab-content-title">10-Yard Dumpster
                                                </h3>
												<p>
													This is the smallest size we offer and is perfect for minor cleanouts or small remodeling projects. It's compact and easy to place, making it ideal for locations with limited space.
												</p>
                                            </div>
                                        </div>
                                        <div class="pricing__tab-content-right">
                                            <div class="pricing__tab-content-order">
                                                <a href="tel:+13216033812" class="thm-btn pricing__order-btn">Order Now</a>
                                            </div>
                                        </div>
                                    </div>
									
									
                                  
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<p>
					Each dumpster size can handle a variety of materials, including household junk, construction debris, yard waste, and more. However, there are certain items that cannot be disposed of in our dumpsters due to safety and environmental regulations. These include hazardous materials, certain electronics, and specific types of appliances. If you're unsure about what can go in your dumpster, our team is always here to help.

				</p>
				<p>
					Note: Remember, choosing the right dumpster size for your project is crucial. A dumpster that's too small might require additional hauls, while a dumpster that's too large could be an unnecessary expense. Our knowledgeable team can help you select the perfect dumpster size based on your specific needs and the scope of your project.

				</p>
				<h2>
					Cost of Dumpster rentals in <?php the_field('city');?>
				</h2>
				<table>
    <thead>
        <tr>
            <th>Size (Cubic Yards)</th>
            <th>Typical Usage</th>
            <th>Cost ($ approx)</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>10</td>
            <td>Small remodeling projects</td>
            <td>300</td>
            <td>10 yard dumpsters are great for small remodeling projects or medium sized clean outs.</td>
        </tr>
        <tr>
            <td>20</td>
            <td>Medium construction jobs</td>
            <td>400</td>
            <td>20 yard dumpsters are perfect for larger remodeling jobs and medium sized clean out projects.</td>
        </tr>
        <tr>
            <td>30</td>
            <td>Major construction projects</td>
            <td>500</td>
            <td>30 yard dumpsters are suited for larger construction or renovation projects or complete home clean outs.</td>
        </tr>
        <tr>
            <td>40</td>
            <td>Commercial clean outs</td>
            <td>600</td>
            <td>40 yard dumpsters are the largest size typically available and are ideal for commercial clean outs and large construction or renovation projects.</td>
        </tr>
        <tr>
            <td>50</td>
            <td>Large commercial projects</td>
            <td>700</td>
            <td>50 yard dumpsters are the choice for incredibly large projects and major estate clean outs.</td>
        </tr>
    </tbody>
</table>

            </div>
        </section>
        <!--Manage Waste Two Start-->
        <section class="manage-waste">
            <div class="manage-waste-bg-box">
                <div class="manage-waste-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/manage-waste-bg.jpg);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="manage-waste__inner">
                            <h3 class="manage-waste__title">Dump the junk and save some bucks!<br/> Book your Dumpster Rentals in <?php the_field('city');?> today!</h3>
                            <div class="manage-waste__btn-box">
                                <a href="tel:+13216033812" class="thm-btn manage-waste__btn-1">Request a Pickup</a>
                                <a href="<?php echo home_url('contact-us');?>" class="thm-btn manage-waste__btn-2">Contact With us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Manage Waste Two End-->

     
     
        <!--Testimonial Three Start-->
        <section class="testimonial-three">
            <div class="testimonial-three-bg"
                style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/testimonial-three-bg.jpg);"></div>
            <div class="testimonial-three-bg-2"
                style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/testimonial-three-bg-2.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8">
                        <div class="testimonial-three__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Our Customers Feedbacks</span>
                                <h2 class="section-title__title">What Our Customers Are Talking</h2>
                            </div>
                            <div class="testimonial-three__carousel owl-theme owl-carousel thm-owl__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "1200": {
                                        "items": 1
                                    }
                                }
                            }'>
                                <!--Testimonial One Single-->
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__feedback-box">
                                        <div class="testimonial-three__feedback">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <h3 class="testimonial-three__title">Dumpster Rentalsz - The Perfect Solution for My Home Renovation Project!</h3>
                                    </div>
                                    <p class="testimonial-three__text">Dumpster Rentalsz is the perfect choice for anyone looking for an affordable and hassle-free dumpster rental service. I recently used their service for my home renovation project and I was impressed with their competitive pricing and easy-to-use website. Their customer service team was also very helpful and responsive to my needs. I highly recommend Dumpster Rentalsz to anyone looking for a stress-free solution for managing their waste.</p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-info">
                                            <div class="testimonial-three__client-img">
                                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial/testimonial-3-1.jpg" alt="Jessica Brown">
                                            </div>
                                            <div class="testimonial-three__client-content">
                                                <h4 class="testimonial-three__client-name">Jessica Brown</h4>
                                                <p class="testimonial-three__client-title">Customer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__feedback-box">
                                        <div class="testimonial-three__feedback">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <h3 class="testimonial-three__title">Simplify Your Construction Site Cleanup with Dumpster Rentalsz!</h3>
                                    </div>
                                    <p class="testimonial-three__text">As a contractor, I always trust Dumpster Rentalsz for my construction site cleanup needs. Their selection of dumpsters is impressive, and their prices are unbeatable. Their website is easy to use and their customer service team is always available to answer my questions. I highly recommend Dumpster Rentalsz to any contractor looking for a reliable and affordable dumpster rental service.</p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-info">
                                            <div class="testimonial-three__client-img">
                                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial/testimonial-3-2.jpg" alt="Kevin Martin">
                                            </div>
                                            <div class="testimonial-three__client-content">
                                                <h4 class="testimonial-three__client-name">Kevin Martin</h4>
                                                <p class="testimonial-three__client-title">Customer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single-->
                                <div class="testimonial-three__single">
                                    <div class="testimonial-three__feedback-box">
                                        <div class="testimonial-three__feedback">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <h3 class="testimonial-three__title">Dumpster Rentalsz - The Perfect Solution for Spring Cleaning!"</h3>
                                    </div>
                                    <p class="testimonial-three__text">Spring cleaning is always a hassle, but Dumpster Rentalsz made it so much easier! Their selection of dumpsters and sizes made it easy to choose the perfect one for my needs, and their affordable pricing meant I didn't have to break the bank. Their customer service team was also very helpful and provided expert advice on how to make the most of my rental. I highly recommend Dumpster Rentalsz to anyone looking for an easy and stress-free solution for their spring cleaning needs.</p>
                                    <div class="testimonial-three__client-info-box">
                                        <div class="testimonial-three__client-info">
                                            <div class="testimonial-three__client-img">
                                                <img src="<?php echo get_template_directory_uri();?>/assets/images/testimonial/testimonial-3-3.jpg" alt="Mike Hardson">
                                            </div>
                                            <div class="testimonial-three__client-content">
                                                <h4 class="testimonial-three__client-name">Mike Hardson</h4>
                                                <p class="testimonial-three__client-title">Customer</p>
                                            </div>
                                        </div>
                                        <div class="testimonial-three__quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial Three End-->

       <section class="project-two">
            <div class="project-two-bg-box">
                <div class="project-two-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/project-two-bg.jpg);"></div>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Find best Dumpster Rentals near you?></span>
                    <h2 class="section-title__title">Dumpster Rentals in <?php the_field('city');?></h2>
                    <p><b>Nearby cities where we provide <a href="<?php echo get_the_permalink(wp_get_post_parent_id(get_field('linked'))); ?>">Dumpster rentals in <?php echo get_field('state',wp_get_post_parent_id(get_the_ID()));?></a>: </b> <?php
   $args = array(
    'post_type'      => 'page',
    'posts_per_page' => 100,
    'post_parent'    => wp_get_post_parent_id(get_field('linked')),
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );
   $child = new WP_Query( $args );
   global $post;
   $author_id = $post->post_author;
  while ( $child->have_posts() ) : $child->the_post(); ?>
    <a href="<?php the_permalink();?>"><?php the_field('city');?></a> /
 <?php endwhile; wp_reset_postdata();?> </p>
                </div>
              <div class="row">
                    <div class="col-xl-12">
                        <div class="project-two__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "margin": 30,
                            "nav": false,
                            "dots": true,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive": {
                                "0": {
                                    "items": 1
                                },
                                "768": {
                                    "items": 2
                                },
                                "992": {
                                    "items": 4
                                },
                                "1200": {
                                    "items": 4
                                }
                            }
                        }'>
                            <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
                            <div class="project-two__single">
                                <div class="project-two__img">
                                    <img src="<?php echo get_field('imageurl');?>" alt="<?php the_title();?>">
                                    <div class="project-two__content">
                                        <p class="project-two__subtitle"><?php the_field('address');?></p>
                                        <h3 class="project-two__title"><a href="<?php the_permalink();?>"><?php the_title();?></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
 <?php endwhile; wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Working Process Start-->
        <section class="working-process">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">4 Simple Steps</span>
                    <h2 class="section-title__title">Our Working Process</h2>
                </div>
                <ul class="list-unstyled working-process__box">
                    <li class="working-process__single">
                        <div class="working-process__icon">
                            <span class="icon-garbage-truck"></span>
                            <div class="working-process__count"></div>
                            <div class="working-process__shape">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/working-process-shape.png" alt="Pickup">
                            </div>
                            <div class="working-process__-hover-shape">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/working-process-hover-shape.png" alt="Pickup">
                            </div>
                            <div class="working-process__bg-box">
                                <div class="working-process__bg"
                                    style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/working-process-bg.jpg);">
                                </div>
                            </div>
                        </div>
                        <h3 class="working-process__title"><a href="<?php echo home_url('contact-us');?>">Pickup</a></h3>
                        <p class="working-process__text">Our simple process begins with prompt pickup of your dumpster rental, ensuring a hassle-free experience from start to finish. Our team will work with you to schedule a convenient pickup time that works best for your needs.
                        </p>
                    </li>
                    <li class="working-process__single">
                        <div class="working-process__icon">
                            <span class="icon-garbage"></span>
                            <div class="working-process__count"></div>
                            <div class="working-process__shape">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/working-process-shape.png" alt="Collection">
                            </div>
                            <div class="working-process__-hover-shape">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/working-process-hover-shape.png" alt="Collection">
                            </div>
                            <div class="working-process__bg-box">
                                <div class="working-process__bg"
                                    style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/working-process-bg.jpg);">
                                </div>
                            </div>
                        </div>
                        <h3 class="working-process__title"><a href="#">Collection</a></h3>
                        <p class="working-process__text">Once your dumpster rental is picked up, we'll carefully transport it to our collection center. Our team will ensure that your waste is collected in a safe and efficient manner, giving you peace of mind throughout the process.
                        </p>
                    </li>
                    <li class="working-process__single">
                        <div class="working-process__icon">
                            <span class="icon-processing"></span>
                            <div class="working-process__count"></div>
                            <div class="working-process__shape">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/working-process-shape.png" alt="Proccessing">
                            </div>
                            <div class="working-process__-hover-shape">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/working-process-hover-shape.png" alt="Proccessing">
                            </div>
                            <div class="working-process__bg-box">
                                <div class="working-process__bg"
                                    style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/working-process-bg.jpg);">
                                </div>
                            </div>
                        </div>
                        <h3 class="working-process__title"><a href="#">Proccessing</a></h3>
                        <p class="working-process__text">At our processing center, we take great care in sorting and processing your waste materials. Our state-of-the-art facility ensures that all recyclable materials are separated and sent for recycling, minimizing the environmental impact of your waste.
                        </p>
                    </li>
                    <li class="working-process__single">
                        <div class="working-process__icon">
                            <span class="icon-garbage-truck"></span>
                            <div class="working-process__count"></div>
                            <div class="working-process__shape">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/working-process-shape.png" alt="Disposed">
                            </div>
                            <div class="working-process__-hover-shape">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/shapes/working-process-hover-shape.png" alt="Disposed">
                            </div>
                            <div class="working-process__bg-box">
                                <div class="working-process__bg"
                                    style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/working-process-bg.jpg);">
                                </div>
                            </div>
                        </div>
                        <h3 class="working-process__title"><a href="#">Disposed</a></h3>
                        <p class="working-process__text">Finally, we dispose of your waste materials in a responsible and ethical manner, ensuring that your waste doesn't harm the environment or create any hazards. Our team is committed to providing a safe and reliable waste management solution that you can trust.
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <!--Working Process End-->
    <!--News Three Start-->
        <section class="news-three">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="news-three__left">
                            <div class="news-three__bg-box">
                                <div class="news-three__bg"
                                    style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/news-three-bg.jpg);"></div>
                            </div>
                            <div class="section-title text-left">
                                <span class="section-title__tagline">What’s Happening</span>
                                <h2 class="section-title__title">Our Latest News & Articles</h2>
                            </div>
                            <p class="news-three__text">From tips on how to choose the right dumpster size to best practices for recycling and waste reduction.</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="news-three__right">
                            <div class="news-three__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": true,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-right-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 2.01
                                    }
                                }
                            }'>
                              <?php
                                 $args = array(
                                  'post_type'      => 'post',
                                  'posts_per_page' => 9,
                                  'order'          => 'ASC',
                                  'orderby'        => 'menu_order'
                               );
                                 $child = new WP_Query( $args );
                                 global $post;
                                 $author_id = $post->post_author; 
                                   while ( $child->have_posts() ) : $child->the_post(); ?>?>
                                <div class="news-one__single">
                                    <div class="news-one__img">
                                        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                        <div class="news-one__date">
                                            <p><?php echo get_the_date();?></p>
                                        </div>
                                        <a href="<?php the_permalink();?>">
                                            <span class="news-one__plus"></span>
                                        </a>
                                    </div>
                                    <div class="news-one__content">
                                        <ul class="list-unstyled news-one__meta">
                                            <li><i class="far fa-user"></i> <?php the_author();?>
                                            </li>
                                            <li><span>/</span></li>
                                            <li><i class="far fa-folder"></i> <?php echo get_the_category()[0]->name;?>
                                            </li>
                                        </ul>
                                        <h3 class="news-one__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <div class="news-one__read-more">
                                            <a href="<?php the_permalink();?>"><i class="fa fa-arrow-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
 <?php endwhile; wp_reset_postdata();?>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Three End-->
<section class="map">
	<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBAM2o7PiQqwk15LC1XRH2e_KJ-jUa7KYk&zoom=11&maptype=roadmap&q=<?php the_field('city');?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
        <!--Brand One Start-->
        <section class="brand-one brand-three">
            <div class="container">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/brand/brand-1-1.png" alt="Brand 1">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/brand/brand-1-2.png" alt="Brand 2">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/brand/brand-1-3.png" alt="Brand 3">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/brand/brand-1-4.png" alt="Brand 4">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/brand/brand-1-5.png" alt="Brand 5">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/brand/brand-1-1.png" alt="Brand 6">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/brand/brand-1-2.png" alt="Brand 7">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/brand/brand-1-3.png" alt="Brand 8">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/brand/brand-1-4.png" alt="Brand 9">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/brand/brand-1-5.png" alt="Brand 10">
                        </div><!-- /.swiper-slide -->
                    </div>
                </div>
            </div>
        </section>
        <!--Brand One End-->
<?php get_footer(); ?>
