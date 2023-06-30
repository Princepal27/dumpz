<?php
get_header();
// dir_create_intro(get_the_ID());
// dir_create_conclusion(get_the_ID());
   $args = array(
    'post_type'      => 'page',
    'posts_per_page' => 100,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );
   $parent = new WP_Query( $args );
   global $post;
   $author_id = $post->post_author;

?>
<section class="bg-body">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-9 col-lg-10">
        <div class="section">
          <h1 class="mb-3"><?php the_title();?></h1>
        </div>
      </div>

      <div class="col-xl-9 col-lg-10">
        <div class="section pt-0">
          <div class="content">
            <?php the_content();?>
              <div class="row">
                <h2>10 Popular States</h2>
                   <ul>
                     <?php 
               $args = array( 'post_type' => 'page', 'post_parent'    => 0,'meta_query'     => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'state',
                           // 'compare' => 'EXISTS',
                        ),
                    ), 'meta_key'=> 'total_views','orderby'=> 'meta_value','posts_per_page' => 10, 'order'=> 'ASC');
                
                $parent = new WP_Query( $args );
                while ( $parent->have_posts() ) : $parent->the_post();
              ?>
              <li><a href="<?php the_permalink();?>"><?php the_field('state');?></a> </li>
                <?php endwhile; wp_reset_postdata();?>
              </ul>

              <h2>10 Popular Cities</h2>
                   <ul>
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
            

              <h2>10 Popular Listings</h2>
                   <ul>
                     <?php 
               $args = array( 'post_type' => 'page', 'meta_query'     => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'linked',
                           // 'compare' => 'EXISTS',
                        ),
                    ), 'meta_key'=> 'total_views','orderby'=> 'meta_value','posts_per_page' => 10, 'order'=> 'ASC');
                
                $parent = new WP_Query( $args );
                while ( $parent->have_posts() ) : $parent->the_post();
              ?>
              <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
                <?php endwhile; wp_reset_postdata();?>
              </ul>

          </div>

        </div>
           
    
  

          <div class="d-block d-sm-flex justify-content-between align-items-center mt-5 pt-3">
            <ul class="list-inline social-share text-start text-sm-end mt-4 mt-sm-0">
              <li class="list-inline-item d-block mb-2 text-start">Share: </li>
              <li class="list-inline-item lead text-center is-hoverable">
                <i class="ti ti-brand-twitter"></i>
              </li>
              <li class="list-inline-item lead text-center is-hoverable ms-3">
                <i class="ti ti-brand-facebook"></i>
              </li>
              <li class="list-inline-item lead text-center is-hoverable ms-3">
                <i class="ti ti-brand-linkedin"></i>
              </li>
              <li class="list-inline-item lead text-center is-hoverable ms-3">
                <i class="ti ti-brand-reddit"></i>
              </li>
              <li class="list-inline-item lead text-center is-hoverable ms-3">
                <i class="ti ti-brand-pinterest"></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
  </div>
</section>

<?php get_footer();?>