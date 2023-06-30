<?php
get_header();
   global $post;
   $author_id = $post->post_author;

?>
  <section class="page-title-two">
            <div class="title-box centred bg-color-2">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shape/shape-70.png);"></div>
                    <div class="pattern-2" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/shape/shape-71.png);"></div>
                </div>
                <div class="auto-container">
                    <div class="title">
                        <h1><?php the_title();?></h1>
                    </div>
                </div>
            </div>
            <div class="lower-content">
                <div class="auto-container">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?php echo home_url();?>">Homeee</a></li>
                         <li><?php the_title();?></li>
                    </ul>
                </div>
            </div>
        </section>
 <section class="clinic-section doctors-page-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                        <div class="item-shorting clearfix">
                            <div class="left-column pull-left">

            <?php 
               $args = array( 'post_type' => 'page', 'post_parent'    => 0,'meta_query'     => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'state',
                           // 'compare' => 'EXISTS',
                        ),
                    ), 'meta_key'=> 'state','orderby'=> 'date','posts_per_page' => 100, 'order'=> 'desc');
                
                $parent = new WP_Query( $args );
                while ( $parent->have_posts() ) : $parent->the_post();
              ?>
              <div class="col-md-3">
              <h2><a title="<?php the_title();?>" href="<?php the_permalink();?>"><?php the_field('state');?></a></h2>

              <?php
              $args2 = array( 'post_type' => 'page', 'post_parent'    => get_the_ID(),'meta_query'     => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'city',
                           // 'compare' => 'EXISTS',
                        ),
                    ), 'meta_key'=> 'city','orderby'=> 'date','posts_per_page' => 100, 'order'=> 'desc');
                
                $parent2 = new WP_Query( $args2 );
                echo "<ul>";
                while ( $parent2->have_posts() ) : $parent2->the_post();
              ?>
              <li><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_field('city');?></a></li>
                <?php endwhile; wp_reset_postdata();?>
              </ul>

                </div> <!-- //state -->
                <?php endwhile; wp_reset_postdata();?>
          </div>
                           
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>

<?php get_footer();?>