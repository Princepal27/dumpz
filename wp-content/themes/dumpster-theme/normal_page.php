
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h1><?php the_title();?></h1>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo home_url();?>">Home</a></li>
                        
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News Sidebar Start-->
          <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="news-details__left">
                           
                            <div class="news-details__content">
                                
                                <h1 class="news-details__title"><?php the_title();?></h1>
                                <div class="news-details__text-1"><?php the_content();?></div>
                                
                            </div>
                           
                          
                           
                         
                        </div>
                    </div>
              
                </div>
            </div>
        </section>
        <!--News Sidebar End-->
  