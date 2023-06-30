<?php
get_header();

?>

        <!--page-title-two-->
        <section class="page-title-two">
            <div class="title-box centred bg-color-2">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shape/shape-70.png);"></div>
                    <div class="pattern-2" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shape/shape-71.png);"></div>
                </div>
                <div class="auto-container">
                    <div class="title">
                        <h1>Search results for <?php echo $_GET['s'];?></h1>
                    </div>
                </div>
            </div>
            
        </section>
        <!--page-title-two end-->


      


        <!-- doctors-page-section -->
        <section class="clinic-section doctors-page-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                        <div class="item-shorting clearfix">
                           
                           
                        </div>
                        <div class="wrapper grid">
                     
                            <div class="clinic-grid-content grid-item">
                                <div class="row clearfix">
                                  <?php while ( have_posts() ) :the_post(); ?>
                                    <div class="col-lg-4 col-md-4 col-sm-12 team-block">
                                        <div class="team-block-three">
                                            <div class="inner-box">
                                                
                                                <div class="lower-content">
                                                    <ul class="name-box clearfix">
                                                        <li class="name"><h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3></li>
                                                    </ul>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
 <?php endwhile; wp_reset_postdata();?>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                  
                </div>
            </div>
        </section>
        <!-- doctors-page-section end -->


      
<?php get_footer();?>