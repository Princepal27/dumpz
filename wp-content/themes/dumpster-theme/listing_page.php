<?php
//generate_dir_faq(get_the_ID());
// dir_create_intro(get_the_ID());
// dir_create_conclusion(get_the_ID());

              global $post;
          	   $author_id = $post->post_author;
?>
<section class="bg-body">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-9 col-lg-10">
        <div class="section">
         
          <h1 class="mb-3"><?php the_title();?></h1>
          <div class="post-author d-flex">
            <div class="flex-shrink-0">
              <a href="<?php echo get_author_posts_url($author_id);?>" class="is-hoverable" title="Read all posts of - <?php echo get_the_author(); ?>">
                <img loading="lazy" class="rounded-circle w-auto" src="<?php echo get_author_img($author_id); ?>" alt="<?php echo get_the_author(); ?>" width="50" height="50">
              </a>
            </div>
            <div class="flex-grow-1 ms-3"> by <a class="text-link" href="<?php echo get_author_posts_url($author_id);?>" title="Read all posts by - <?php echo get_the_author(); ?>"><?php echo get_the_author(); ?></a>
              <p class="mb-0 lh-base"><a href="<?php echo home_url();?>">Home</a> / <a href="<?php echo get_the_permalink(wp_get_post_parent_id(get_field('linked'))); ?>"><?php echo get_field('state',wp_get_post_parent_id(get_the_ID()));?></a> / <a href="<?php echo get_the_permalink(wp_get_post_parent_id(get_the_ID())); ?>"><?php echo get_field('city',wp_get_post_parent_id(get_the_ID()));?></a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-9 col-lg-10">
        <div class="section pt-0">
          <div class="content">
          <div class="bg-white p-4">
          <div class="d-sm-flex">
            <div class="flex-shrink-0">
              <img loading="lazy" class="img-fluid me-4 me-md-5" src="<?php the_field('imageurl');?>" alt="<?php the_title();?>" width="300" height="124">
            </div>
            <div class="flex-grow-1 mt-3 mt-sm-0">
              <p class="text-dark mb-1"><b><?php the_title();?> Contact Details</b></p>
              <p class="mb-2"><i class="ti ti-star me-1"></i> <?php the_field('rating');?> based on <a href="<?php the_permalink();?>#reviews"><?php echo get_field('reviews_count')+5;?> reviews</a></p>
              <p class="mb-2"><i class="ti ti-phone me-1"></i> <a href="tel:<?php the_field('phone');?>"><?php the_field('phone');?></a></p>
              <span><p class="mb-2"><i class="ti ti-map me-1"></i> <?php the_field('address');?></span>
              <span><p class="mb-2"><i class="ti ti-eye me-1"></i> <?php the_field('total_views');?></span>
            </div>
          </div>
        </div>
        <div id="singleListingform">
        	<b id="response"></b>
              <form action="" method="post" id="singleListing" name="mc-embedded-subscribe-form" >
                <div id="mc_embed_signup_scroll" class="input-group">
                  <input type="text" value="" name="NAME" class="form-control w-100" id="mce-NAME" placeholder="Full Name" required="">
                  <input type="email" value="" name="EMAIL" class="form-control w-100 required email"  placeholder="Your email address *" required>
                  <textarea name="query" class="form-control w-100 required" placeholder="Query.."></textarea>
                  <input type="hidden" name="from" value="<?php the_title();?> - <?php echo get_field('city',get_field('linked')); ?>">
                  <div class="input-group-append w-100">
                    <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="input-group-text w-100 mb-0" aria-label="Subscription Button"> Get Quotes <i class="ti ti-arrow-up-right ms-auto"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <?php the_content();?>
        <?php if(get_field('weekdays')): ?>
           <h2><?php echo business_name(get_the_title());?> Opening Hours</h2>
           <table>
           	<?php the_field('weekdays');?>
           </table>
       <?php endif;?>
           <h2 id="reviews"><?php echo business_name(get_the_title());?> Reviews</h2>
          
           <?php $reviews=unserialize(get_field('reviews'));
          //print_r($reviews);
           for ($i=1; $i <sizeof($reviews) ; $i++) {
           	$Rating=explode(' ', $reviews[$i]->Rating)[1];
            ?>
           	<h3><?php echo ucfirst($reviews[$i]->Name);?></h3>
           	<?php 
           	for ($r=0; $r <$Rating ; $r++) { 
           	echo '<i class="ti ti-star"></i>';
           	}
           	?>
			<p><?php echo $reviews[$i]->ReviewText;?></p>
           <?php }
           ?>
       		

           <div itemscope itemtype="https://schema.org/FAQPage">
            <h2>FAQs</h2>
            	<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            	<h3 itemprop='name'>What are garage door services do <?php the_title();?> provide?</h3>
            	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            	<div itemprop="text">
            	<p>Some popular services for garage door services include:</p>
            	<ul>
            		<li>Opener Installation</li>
            		<li>Opener Repair</li>
            		<li>Cable Installation</li>
            		<li>Remote Repair</li>
            		<li>Roller Installation</li>
            	</ul>
            	</div>
            	</div>
            	</div>

            	<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            	<h3 itemprop='name'>How to contact <?php the_title();?>?</h3>
            	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            	<div itemprop="text">
            	<p>You can contact and book appointment with <?php the_title();?> either by calling at <?php the_field('phone');?> or by directly visiting their address at <?php the_field('address');?>.</p>
            	</div>
            	</div>
            	</div>

            	<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            	<h3 itemprop='name'>How are <?php the_title();?> rated for <a href="<?php echo get_the_permalink(get_field('linked'));?>"><?php echo get_the_title(get_field('linked'));?></a>?</h3>
            	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            	<div itemprop="text">
            	<p>They are rated <?php echo get_field('rating')*2;?> out of 10 based on <a href="<?php the_permalink();?>#reviews"><?php echo get_field('reviews_count')+5;?> user reviews</a>. They have been viewed <?php the_field('total_views');?> so far on our <a href="<?php echo home_url();?>">garage door service pros directory</a>.</p>
            	</div>
            	</div>
            	</div>
            	<?php if(isset($reviews[0])): ?>
            	<div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
            	<h3 itemprop='name'>What are peoples saying about <?php the_title();?>?</h3>
            	<div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
            	<div itemprop="text">
            	<p>This is one of <a title="<?php the_title();?> reviews" href="<?php the_permalink();?>#reviews">review</a> from <?php echo $reviews[0]->Name;?> about them. <?php echo $reviews[0]->ReviewText;?></p>
            	</div>
            	</div>
            	</div>
                <?php endif;?>
            </div>
            <h2>Other Posts by <?php the_author();?></h2>
           <ul>
           <?php
            $args = array(
          	    'post_type'      => 'page',
          	    'posts_per_page' => 6,
          	    'meta_key'=> 'total_views',
          	    'post__not_in'=>array(get_the_ID()),
          	    'orderby'=> 'meta_value_num',
          	    'order'=>'asc',
          	    'author'=>$author_id
          	 );
          	   $author = new WP_Query( $args );
          	   
    		   while ( $author->have_posts() ) : $author->the_post();
              echo "<li><a href='".get_the_permalink()."'>".get_the_title()."</a></li>";
               endwhile; wp_reset_postdata();?>
           </ul>
           

          </div>
       <div class="bg-white p-4 mt-3" >
          <div class="d-sm-flex" itemprop="author" itemscope itemtype="https://schema.org/Person">
            <div class="flex-shrink-0">
              <img loading="lazy" class="img-fluid me-4 me-md-5" src="<?php echo get_author_img($author_id); ?>" alt="<?php echo get_the_author();?>" width="124" height="124">
            </div>
            <div class="flex-grow-1 mt-3 mt-sm-0">
              <a itemprop="url" href="<?php echo get_author_posts_url($author_id);?>"><h4 class="text-dark mb-1" itemprop="name"><?php echo get_the_author();?></h4></a>
              <p class="mb-2"><?php if(isset(get_user_meta($author_id,'nice_name')[0])) echo get_user_meta($author_id,'nice_name')[0];?></p>
              <span><?php echo get_the_author_meta('description');?></span>
              <p class="mt-2"><i class="ti ti-mail"></i> <a href="mailto:<?php echo strtolower(str_replace(' ', '.', get_the_author())); ?>@garagedoorrepairpros.org"><?php echo strtolower(str_replace(' ', '.', get_the_author())); ?>@garagedoorrepairpros.org</a></p>
            </div>
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
    
    <div class="section">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section-title text-center">
            <h2 class="h3 mb-0 title">Nearby Garage Door Repair Pros in <?php echo get_field('city',get_field('linked')); ?></h2>
          </div>
          <div class="row gy-5 gx-4 g-xl-5">
          	<?php
          	   $args = array(
          	    'post_type'      => 'page',
          	    'posts_per_page' => 100,
          	    'post_parent'    => wp_get_post_parent_id(get_the_ID()),
          	    'meta_key'=> 'total_views','orderby'=> 'meta_value',
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
                    <img loading="lazy" class="w-auto rounded-circle me-2" src="<?php echo get_author_img($author_id); ?>" alt="<?php echo get_the_author();?>" width="26" height="26">
                  by <a class="text-link" href="<?php echo get_author_posts_url($author_id);?>" ><?php echo get_the_author();?></a>
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