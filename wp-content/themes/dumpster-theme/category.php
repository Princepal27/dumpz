<?php
/* Template Name:Blog */
get_header();
$child = get_queried_object();
$args = array( 'post_type' => 'post','cat'=>$child->term_id, 'posts_per_page' => -1);
$loop = new WP_Query( $args ); 
?>

<main id="main" class="site-main">
	<div class="page-title page-title--small page-title--blog align-left" style="background-image: url(images/bg/bg-blog.png);">
		<div class="container">
			<div class="page-title__content">
				<h1 class="page-title__name"><?php echo $child->name;?></h1>
				<p class="page-title__slogan">Posts under <?php echo $child->name;?> category</p>
			</div>
		</div>	
	</div><!-- .page-title -->
	<div class="page-content page-content-sidebar">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="result-post"><?php echo $loop->post_count;?> articles</div>
					<div class="post-grid columns-2">
						<?php while ( $loop->have_posts() ) : $loop->the_post();?>
						<article class="hover__box post">
							<div class="post__thumb hover__box__thumb">
								<a  href="<?php the_permalink();?>"><img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title();?>"></a>
							</div>
							<div class="post__info">
								<ul class="post__category">
									<li><a href="<?php echo get_category_link(get_the_category()[0]->term_id); ?>"><?php echo get_the_category()[0]->name; ?></a></li>
								</ul>
								<h3 class="post__title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
							</div>
						</article>
  <?php endwhile; wp_reset_query();?>
					</div><!-- .post-grid -->
					
				</div>
				<div class="col-lg-4">
					<div class="sidebar">
						<aside class="widget widget-category">
							<h3 class="widget-title">Categories</h3>
							<div class="widget-content">
								<ul>
									    <?php
									$cat=get_categories(
									                
									);
									                    for ($i=0; $i <sizeof($cat); $i++) { 
									                     if(isset($cat[$i]->name)) {
									                     ?>
									     <li><a href="<?php echo get_category_link($cat[$i]->term_id);?>"><?php echo $cat[$i]->name;?></a></li>
									     <?php } } ?>
									
								</ul>
							</div>
						</aside><!-- .widget-category -->
						
					
					</div><!-- .sidebar -->
				</div>
			</div>
		</div>
	</div>
</main><!-- .site-main -->
    
<?php get_footer();?>