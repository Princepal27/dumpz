<?php
//generate_dir_faq(get_the_ID());
// dir_create_intro(get_the_ID());
// dir_create_conclusion(get_the_ID());
get_header();
global $post;
$author_id = $post->post_author;
$reviews=unserialize(get_field('reviews'));
?>
<!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h1><?php the_title();?></h1>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo home_url();?>">Home</a></li>
                        <li><a href="<?php echo get_the_permalink(wp_get_post_parent_id(get_field('linked'))); ?>"><?php echo get_field('state',wp_get_post_parent_id(get_the_ID()));?></a></li>
                        <li><a href="<?php echo get_the_permalink(wp_get_post_parent_id(get_the_ID())); ?>"><?php echo get_field('city',wp_get_post_parent_id(get_the_ID()));?></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Team Details Start-->
        <section class="team-details">
            <div class="container">
                <div class="team-details__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__top-left">
                                <div class="team-details__top-img">
                                    <img src="<?php echo get_field('imageurl');?>" alt="<?php the_title();?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__top-right">
                                <div class="team-details__top-content">
                                    <p class="team-details__top-title"><?php the_field('category');?></p>
                                    <h3 class="team-details__top-name"><?php the_title();?></h3>
                                    <?php if(get_field('rating')&&get_field('rating')!=='undefined'): ?>
                                    <p class="team-details__top-text-1"><?php the_field('rating');?>/5 ratings based on <?php the_field('reviews_count');?> user reviews</p>
                                  <?php endif;?>
                                   <p class="team-details__top-text-2">
                                     <b>Phone: </b><a href="tel:<?php the_field('phone');?>"><?php the_field('phone');?></a><br/>
                                     <b>Address: </b><?php the_field('address');?><br/>
                                     <b>Category: </b><?php the_field('category');?><br/>
                                   </p>
                                    <p class="team-details__top-text-2"><?php the_field('about');?></p>
                                    <p class="team-details__top-text-3">Check ratings, reviews, contact details and everything you need to know about <?php the_title();?> - <?php the_field('category');?>. They are listed here as one of the <a href="<?php the_permalink(get_field('linked'));?>">dumpster rentals in <?php the_field('city',get_field('linked'));?></a> by our users.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <section class="testimonials-page">
            <div class="container">
                <div class="row">
                  <div class="team-details__top-right">
                                <div class="team-details__top-content">
                                    <h3 class="team-details__top-name"><?php the_title();?> reviews</h3>
                                </div>
                            </div>
                            <?php 
                                                         for ($i=1; $i <sizeof($reviews) ; $i++) {
                                                          $Rating=explode(' ', $reviews[$i]->Rating)[1];
                                                          ?>
                                                          

                    <div class="col-xl-4 col-lg-6 col-md-12">

                        <!--Testimonial One Single-->
                        <div class="testimonial-two__single">
                            <div class="testimonial-two__feedback-box">
                                <div class="testimonial-two__feedback">

                                    
                                    <?php 
                                        for ($r=0; $r <$Rating ; $r++) { 
                                        echo '<i class="fa fa-star"></i>';
                                        }
                                        ?>
                                </div>
                               
                            </div>
                            <p class="testimonial-two__text"><?php echo $reviews[$i]->ReviewText;?></p>
                            <div class="testimonial-two__client-info-box">
                                <div class="testimonial-two__client-info">
                                    <h4 class="testimonial-two__client-name"><?php echo ucfirst($reviews[$i]->Name);?></h4>
                                    <p class="testimonial-two__client-title">Customer</p>
                                </div>
                                <div class="testimonial-two__quote">
                                    <span class="icon-quote"></span>
                                </div>
                            </div>
                            <div class="testimonial-two__client-img">
                                <img src="<?php echo $reviews[$i]->Photo;?>" alt="<?php echo ucfirst($reviews[$i]->Name);?>">
                            </div>
                        </div>
                    </div>
                  <?php }
                                                         ?>
                  
                </div>
            </div>
        </section>

                <section class="team-details">
            <div class="container">
                <div class="team-details__top">
                    <div class="row">
                        
                        <div class="col-xl-12 col-lg-12">
                            <div class="team-details__top-right">
                                <div class="team-details__top-content">
                                    <h3 class="team-details__top-name"><?php the_title();?> working hours</h3>
                                    <table>
                                      <?php the_field('weekdays');?>
                                    </table>
                                     <h3 class="team-details__top-name">Nearby Dumpster rentals in <?php the_field('city',get_field('linked'));?></h3>
                                     <ul class="list clearfix">
                                            <?php
                                                           $args = array(
                                                            'post_type'      => 'dumpsters',
                                                            'posts_per_page' => 100,
                                                            'post_parent'    => get_field('linked'),
                                                            'meta_key'=> 'total_views','orderby'=> 'meta_value',
                                                         );
                                                           $parent = new WP_Query( $args );
                                                           
                                                        while ( $parent->have_posts() ) : $parent->the_post();
                                                        global $post;
                                                      
                                                         ?>
                                                         <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                                             <?php endwhile; wp_reset_postdata();?>
                                             </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
<?php get_footer();?>