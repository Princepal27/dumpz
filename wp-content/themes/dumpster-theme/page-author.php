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

?><section class="bg-body">
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
          </div>
           
    <div id="author-list" class="row gy-5 gx-md-5">
        <?php
        $authors = get_users([
    'fields'  => ['ID','display_name'],
    'role'    => 'author',
    'orderby' => 'post_count',
]);

for ($i=0; $i < sizeof($authors); $i++) { 

$authorID=$authors[$i]->ID;
$authorName=$authors[$i]->display_name;
        ?>
      <div class="col-lg-4 col-md-6">
        <a class="bg-body text-dark p-3 d-flex is-hoverable" href="<?php echo get_author_posts_url($authorID);?>">
          <div class="flex-shrink-0 me-3">
            <img loading="lazy" class="shadow img-fluid" src="<?php echo get_author_img($authorID); ?>" alt="<?php echo $authorName;?>" width="90" height="90">
          </div>
          <div class="flex-grow-1">
            <div class="d-flex flex-column h-100">
              <div>
                <h3 class="h4 text-dark mb-1 line-clamp clamp-1"><?php echo $authorName;?></h3>
                <p class="mb-2 lh-1 line-clamp clamp-1"><?php if(isset(get_user_meta($authorID,'city')[0])) echo get_user_meta($authorID,'city')[0];?></p>
              </div>
              <p class="fw-medium mt-auto mb-0 small">
                <i class="ti ti-edit-circle me-2"></i>
                <span class="text-black"><?php echo count_user_posts($authorID,array('page','post')); ?></span> Published reviews
              </p>
            </div>
          </div>
        </a>
      </div>
    <?php }?>
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