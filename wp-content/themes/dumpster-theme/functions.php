<?php
//error_reporting(0);
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus(
      array(
        'primary' => __( 'Primary Menu', 'shd' ),
        'social'  => __( 'Social Links Menu', 'shd' ),
      )
    );


add_action('wp_head', 'custom_schema');

function custom_schema(){ ?>
<?php if(get_field('linked')){ 
  ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "<?php the_title();?>",
  "image": "<?php echo (get_field('imageurl'));?>",
  "@id": "https://maps.google.com/?cid=<?php the_field('cid');?>",
  "url": "<?php the_permalink();?>",
  "telephone": "<?php the_field('phone'); ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "<?php the_field('address'); ?>",
    "addressLocality": "<?php echo explode(',', get_field('local'))[0];?>",
    "postalCode": "<?php echo str_replace(' ', '', explode(',', get_field('local'))[1]);?>",
    "addressCountry": "USA"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?php if(get_field('rating')) the_field('rating'); else echo '4.1'; ?>",
    "reviewCount": "<?php the_field('reviews_count'); ?>"
  }
}
</script>


<?php } 

if(get_field('location')){

 ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Dumpster Rentals <?php if(get_field('city')) the_field('city'); else the_field('state'); ?>",
  "image": "<?php echo get_template_directory_uri();?>/assets/images/resources/logo-2.png",
  "@id": "<?php the_ID();?>",
  "url": "<?php the_permalink();?>",
  "telephone": "",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Dumpster Rentalsz <?php if(get_field('state')) the_field('state'); else the_field('location');?>",
    "addressLocality": "<?php the_field('state');?>",
    "postalCode": "",
    "addressCountry": "USA"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?php echo 4.9;?>",
    "reviewCount": "<?php echo round(get_the_ID()+date('y')+date('m')/2);?>"
  }
}
</script>


<?php
}


 };

// function third_person($about){
// $phrase  = $about;
// $fist = array(" We ", " our ", " We are ", " ytheir "," Our "," are are "," us "," us "," we "," I ");
// $third   = array(" They are ", " their ", " They ", " your "," Their "," are "," them "," they "," they "," They ");

// $newphrase = str_replace($fist, $third, $phrase);
// return $newphrase;
// }

function business_name($name){  
if (strpos(get_the_title(), '|') !== false) {
$name=explode('|', get_the_title())[0];
}
return $name;

}

function get_author_img($author_id){
  return wp_get_attachment_url(get_user_meta($author_id,'author_image',1));
}

function getquotes() {
 echo $message='Thanks '.$_POST['NAME'].', your message has been received. I will send you quotes soon.';
die(); 
}

// add_action('wp_ajax_getquotes', 'getquotes');
// add_action('wp_ajax_nopriv_getquotes', 'getquotes');

// // function subscribe() {
// // 	global $wpdb;
// //   $count = $wpdb->get_results("SELECT email FROM subscriptions WHERE email = '".$_POST['email']."'");
// //   if(sizeof($count)==0){
// //   	  $wpdb->insert('subscriptions', array('Email' => $_POST['email'], 'Source' => $_POST['source'],'Date'=>date('d-F-Y')) ); 
// //   	  echo "Welcome to decor99. You will soon recieve quotes at your email!!";
// //   }
// //   else {
// //   	echo 'Welcome back buddy!! We already have you in subscribers list with email '.$_POST['email'];
// //   }
// //   $message="Hello Dear,\n\nWelcome to Decor99.in. We are glad you have choosed decor99 to connect with ".$_POST['source'].".\n\nWe will shortly send you quotes. This email is for confirmation that we have recieved your quote request.\n\nThanks and regards\nTeam Decor99";
// //   wp_mail($_POST['email'],'Welcome to Decor99.in',$message,'From: Decor99.in <info@decor99.in> ');


// // die(); 
// // }

// // add_action('wp_ajax_subscribe', 'subscribe');
// // add_action('wp_ajax_nopriv_subscribe', 'subscribe');


// function get_listing_image_URL($cid){
//   global $wpdb;
// $listings = $wpdb->get_results( "SELECT images FROM ".get_option('table')." Where CID=".$cid.";" );
// $c=0;

   
//     if($listings[$c]->images!==''){

//     $img=substr(urldecode(str_replace('background-image:url(','',$listings[$c]->images)),0,-1);
//     if(mb_substr($img,0,1)=='/'){
//        $imageurl=str_replace('w=520&h=175','w=397&h=267',$img);
//     }
//     else{
//        $imageurl=str_replace('w260-h175','w397-h267',$img);
//     }
//     }
//  return $imageurl;
// }




// add_filter('rank_math/frontend/title', 'meta_desc_rmth');
// function meta_desc_rmth($title) {

// if(get_field('linked')){  
//   $title=get_the_title().' - Garage Door Repair Near '.get_field('local');
// }
// elseif(get_field('city')&&get_field('state')){
//   $pages = get_pages( array( 'child_of' => get_the_ID(), 'post_type' => 'page'));
//   $count = count($pages);	
//   $title='#'.$count.' Best Garage Door Repair '.get_field('location').' - Find best garage door repair pros near '.get_field('location');
// }
// elseif(get_field('state')){
//   $title='Garage Door Repair '.get_field('state').' - Find best garage door repair pros near '.get_field('state');
// }
//     return $title;
// }

// //add_filter('rank_math/frontend/description', 'meta_desc_title');
// function meta_desc_title($title) {
//   if(get_field('linked')){
//   $title=get_the_title().' reviews, phone number, address & everything about garage door repair companies near '.get_field('local');
// }
// elseif(get_field('city')&&get_field('state')){
//   $title='Garage Door Repair '.get_field('location').'. Find best Garage Door Repair companies Near Me in '.get_field('city');
// }
// elseif(get_field('state')){
//   $title='Garage Door Repair '.get_field('state').'. Find best Garage Door Repair companies Near Me in '.get_field('state');
// }

//     return $title;
// }