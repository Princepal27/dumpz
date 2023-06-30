<?php //get_header(); 
get_header();
$count=get_post_meta( get_the_ID(), 'total_views',1 );
if(get_field('total_views')){
update_post_meta( get_the_ID(), 'total_views', $count+1 );
}
else{
add_post_meta( get_the_ID(), 'total_views', 2 );
}

global $post;     // if outside the loop

if(get_field('location')){

if ( is_page() && $post->post_parent ) {
   get_template_part('city');
} else {
   get_template_part('state');
}
}
elseif(get_field('linked')){
  get_template_part('listing_page');
}
else{
  get_template_part('normal_page');
}
?>
 
<?php get_footer();?>