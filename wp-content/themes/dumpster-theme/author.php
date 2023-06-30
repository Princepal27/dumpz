<?php get_header();
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));

$authorID=($curauth->data->ID);
?>

<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-9 col-lg-10 text-center">
        <div class="mb-5">
          <img loading="lazy" class="img-fluid" src="<?php echo get_author_img($authorID);?>" alt="<?php echo $curauth->data->display_name;?>" >
        </div>
        <h1 class="text-dark mb-1"><?php echo $curauth->data->display_name;?></h1>
        <p><a href="<?php echo home_url('/author/');?>">Author at <?php echo get_bloginfo('name'); ?></a> <?php if(isset(get_user_meta($authorID,'city')[0])) echo ' from '.get_user_meta($authorID,'city')[0];?></p>
        <p class="mb-3">
          <span class="fw-medium text-black">
            <i class="ti ti-edit-circle me-2"></i><?php echo count_user_posts($authorID,array('page','post')); ?> </span> Published Posts
        </p>
        <div class="content">
          <p><?php echo get_the_author_meta('description',$authorID);?></p>
        </div>
        <ul class="list-inline social-links mt-4">
          <li class="list-inline-item me-4 mt-1 text-center">
            <a class="lh-1" href="mailto:<?php echo str_replace('-', '.', $curauth->data->user_nicename); ?>@garagedoorrepairpros.org" title="Twitter">
              <i class="ti ti-mail"></i>
              <span class="text-link"><?php echo str_replace('-', '.', $curauth->data->user_nicename); ?>@garagedoorrepairpros.org</span>
            </a>
          </li>
         
        </ul>
    
      </div>
    </div>
   
      <div class="section">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h2 class="h3 mb-0 title">Reviews by <?php echo get_the_author();?></h2>
          </div>
          <div class="row gy-5 gx-4 g-xl-5">
            <?php
               $args = array(
                'post_type'      => 'page',
                'posts_per_page' => 1000,
                'author'=>$authorID,
                'meta_key'=> 'total_views','orderby'=> 'meta_value','order'=>'asc'
             );
               $parent = new WP_Query( $args );
               
           while ( $parent->have_posts() ) : $parent->the_post();
            global $post;
               $author_id = $post->post_author;
             ?>
            <div class="col-lg-4 col-md-6">
              <article class="bg-white d-flex flex-column h-100">
                <div class="p-4 pb-0">
                  <div class="position-relative">
                    <h3 class="h4 post-title mb-2 line-clamp clamp-2">
                      <a class="text-link stretched-link" href="<?php the_permalink();?>"><?php the_title();?></a>
                    </h3>
                    <p><?php the_field('address');?></p>
                  </div>
                </div>
                <div class="post-author mt-auto p-4 pt-3">
                  <?php
                  $parents=wp_get_post_parent_id(get_the_ID());
                  if($parents):
                  ?>
                    <a class="text-link" href="<?php echo get_the_permalink($parents);?>" ><?php echo get_the_title($parents);?></a>
                  <?php endif;?>
                </div>
              </article>
            </div>
          <?php endwhile; wp_reset_postdata();?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>