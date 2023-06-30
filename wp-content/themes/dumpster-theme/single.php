<?php
get_header();
   global $post;
   $author_id = $post->post_author;
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
                        <li><?php echo get_the_category()[0]->name;?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--News Sidebar Start-->
          <section class="news-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="news-details__left">
                            <div class="news-details__img">
                                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>">
                                <div class="news-details__date">
                                    <p><?php echo get_the_date();?></p>
                                </div>
                            </div>
                            <div class="news-details__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><i class="far fa-clock"></i> by <?php the_author();?>
                                    </li>
                                    
                                </ul>
                                <h1 class="news-details__title"><?php the_title();?></h1>
                                <div class="news-details__text-1"><?php the_content();?></div>
                                
                            </div>
                           
                          
                           
                         
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="search" placeholder="Search">
                                    <button type="submit"><i class="icon-magnifying-glass"></i></button>
                                </form>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Posts</h3>
                                <ul class="sidebar__post-list list-unstyled">
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
                                   while ( $child->have_posts() ) : $child->the_post(); ?>
                                    <li>
                                       
                                        <div class="sidebar__post-content">
                                            <h3>
                                                <span class="sidebar__post-content-meta"><i
                                                        class="far fa-folder"></i><?php echo get_the_category()[0]->name; ?></span>
                                                <a href="news-details.html"><?php the_title();?></a>
                                            </h3>
                                        </div>
                                    </li>
 <?php endwhile; wp_reset_postdata();?>
                                    
                                </ul>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--News Sidebar End-->
  <?php get_footer();?>