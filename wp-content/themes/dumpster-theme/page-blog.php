<?php
/* Template Name:Blog */
get_header();
$args = array( 'post_type' => 'post', 'posts_per_page' => -1);
$loop = new WP_Query( $args ); 
?>
<section class="section">
  <div class="container">
    <div class="row gy-2 align-items-center section-title mb-0 section pt-0">
      <div class="col-12">
        <h1 class="h3 mb-0 title">Latest posts</h1>
      </div>
      <div class="col-12">
        <ul class="list-inline breadcrumb-menu">
          <li class="list-inline-item">
            <a class="text-link" href="<?php echo home_url();?>">Home</a>
          </li>
          <li class="list-inline-item">• &nbsp; Blog
          </li>
        </ul>
      </div>
    </div>
    <div class="row gy-5 gx-md-5">
    	<?php while ( $loop->have_posts() ) : $loop->the_post();?>
      <div class="col-lg-4 col-md-6">
        <article class="bg-white d-flex flex-column h-100">
          <div class="post-image">
            <a class="d-block" href="<?php the_permalink();?>" >
              <img loading="lazy" class="w-100 h-auto" src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>" width="400" height="264">
            </a>
          </div>
          <div class="p-4 pb-0">
            <ul class="post-meta list-inline mb-3">
              <li class="list-inline-item">
                <i class="ti ti-calendar-event me-1"></i><?php echo get_the_date();?>
              </li>
            </ul>
            <div class="position-relative">
              <h3 class="h4 post-title mb-2 line-clamp clamp-2">
                <a class="text-link stretched-link" href="<?php the_permalink();?>" ><?php the_title();?></a>
              </h3>
              <p class="mb-0 line-clamp clamp-3"><?php the_excerpt(); ?></p>
            </div>
          </div>
 
        </article>
      </div>
  <?php endwhile; wp_reset_query();?>
     

    </div>
  </div>
</section>

<?php get_footer();?>