<?php
/*
Plugin Name: Directory Plugin Dumpster
Description: Directory Plugin New USA Plugin
Version: 1.0
Author: Abhishek Sood
Author URI: https://automateandchill.net/
*/
//error_reporting(0);
if (!defined('ABSPATH')) {
    exit;
}

define('AUTODIRECTORY_DOMAIN', 'automate-n-chill-content-automater');
define('AUTODIRECTORY_DIR', plugin_dir_path(__FILE__));
define('AUTODIRECTORY_URL', plugins_url('/', __FILE__));

//include 'crons.php';

add_action('init', function() {

if (is_admin()) {

include('dashboard.php');


    }
});



function import_single_listings(){
global $wpdb;

$listings = $wpdb->get_results( "SELECT *, MIN(CID) AS CID FROM ".get_option('table')." Where `done` LIKE '%imported%' AND Phone <> '' AND Address <>'' GROUP BY CID HAVING COUNT(DISTINCT CID) = 1  ORDER BY `ID` ASC limit 1000;");

if(sizeof($listings)>0){

for ($ls=0; $ls <sizeof($listings) ; $ls++) { 


$post_id=explode(':', $listings[$ls]->done)[1];

// $state=get_the_category($post_id)[0]->term_id;

// $city=explode(',', $listings[0]->location)[0];

// //$state_page=get_page_title_for_slug(.''.$city);

// if($state_page){
//   $state_page_ID=$state_page;
// }


$c=$ls;
echo $name=$listings[$c]->Name;


  $phone=$listings[$c]->Phone;
  $Address=$listings[$c]->Address;
  $Rating=$listings[$c]->Rating;
  $ReviewsCount=$listings[$c]->ReviewsCount;
  $ReviewsCount=str_replace(array('(',')'), array('',''), $ReviewsCount); 

  $Category=$listings[$c]->Category;
  $about=$listings[$c]->description;
  $weekdays=$listings[$c]->weekdaysTable;

$Address=explode('Address:', $Address);
$Address=$Address[1];
$Address=str_replace(', United States', '', $Address);
$zip=explode(' ', $Address);
$zip=$zip[sizeof($zip)-1];

$local=explode(',', $Address);
$local=$local[0].' '.$local[1];
$local=explode(' ', $local);
unset($local[0]);
$local=implode(' ', $local).', '.$zip;


$cid=$listings[$c]->CID;


if($about==''){
  $about=$name.', '.$listings[$c]->location.'. Find phone number, address, reviews and ratings of   '.$name.'<br/>';
}
$authors = get_users([
    'fields'  => ['ID'],
    'role'    => 'author',
    'orderby' => 'display_name',
]);


$authorID=$authors[rand(0,sizeof($authors)-1)]->ID;
$my_post = array(
    'post_title'    =>($name),
    'post_type'    => 'dumpsters',
    'post_content'  => $about,
    'post_status'   => 'publish',
    'post_name'   => $name,
    'post_parent'=>$post_id,
    'post_author'   => $authorID,
    'post_category' => array(wp_create_category($listings[$c]->Category)),
);
// Insert the post into the database.
$pid=wp_insert_post( $my_post );

//wp_set_post_categories(  $pid, $state_categoryID );



add_post_meta( $pid,'total_views' ,sanitize_text_field(rand(100,1000)) );

add_post_meta( $pid,'location' ,$location );
add_post_meta( $pid,'cid' ,$cid );
add_post_meta( $pid,'linked' ,$post_id);

update_field( 'address', $Address, $pid );
update_field( 'phone', $phone, $pid );
if($Rating)
{update_field( 'rating', explode(' ', $Rating)[1], $pid );}
if($ReviewsCount){
update_field( 'reviews_count', explode(' ', $ReviewsCount)[0], $pid );
}
update_field( 'category', $Category, $pid );
update_field( 'local', $local, $pid );
update_field( 'about', $about, $pid );
update_field( 'weekdays', $weekdays, $pid );

$img=substr(urldecode(str_replace('background-image:url(','',$listings[$c]->images)),0,-1);
if(mb_substr($img,0,1)=='/'){
   $imageurl=str_replace('w=520&h=175','w=397&h=267',$img);
}
else{
   $imageurl=str_replace('w260-h175','w397-h267',$img);
}
update_field( 'imageurl', $imageurl, $pid );

$reviews = $wpdb->get_results( "SELECT *, MIN(Name) AS Name FROM ".get_option('table_reviews')." Where CID ='".$cid."' GROUP BY Name HAVING COUNT(DISTINCT Name) = 1  ORDER BY `ID` ASC ;" );
//print_r($reviews);

add_post_meta( $pid,'reviews' ,serialize($reviews));



$wpdb->update(get_option('table'), array(
    'done' => 'Added Single:'.$pid,
),
array('CID'=>$listings[$ls]->CID)
);
}
}
else{
  echo "No listings ";
}

}


function single_listing_import() {
if(isset($_POST['singleimport'])){

echo import_single_listings();


}
die();

}

add_action('wp_ajax_single_listing_import', 'single_listing_import');
add_action('wp_ajax_nopriv_single_listing_import', 'single_listing_import');


function import_dir_listings(){  

  
//ini_set('max_execution_time', 0); 
date_default_timezone_set('Asia/Kolkata');
global $wpdb;

$listings2 = $wpdb->get_results( "SELECT DISTINCT location from ".get_option('table')." Where done ='' ORDER BY `ID` ASC limit 100;" );

for ($ls2=0; $ls2 <sizeof($listings2) ; $ls2++) { 


  
echo $listings2[$ls2]->location;

$listings = $wpdb->get_results( "SELECT *, MIN(CID) AS CID FROM ".get_option('table')." Where location ='".$listings2[$ls2]->location."' AND Address <>'' AND Rating <>'' GROUP BY CID HAVING COUNT(DISTINCT CID) = 1  ORDER BY `ID` ASC;" );

echo "<br/>".sizeof($listings)." listings found <br/>";

if(sizeof($listings)>3){

$authors = get_users([
    'fields'  => ['ID'],
    'role'    => 'author',
    'orderby' => 'display_name',
]);

$authorID=$authors[rand(0,sizeof($authors)-1)]->ID;  

  global $wpdb;
  $stateName = $wpdb->get_results( "SELECT State FROM `USCities` WHERE done='".str_replace(' ', '', explode(',', $listings2[$ls2]->location)[1])."' LIMIT 1 ;" );
//echo $stateName[0]->State;
  $content=$listings2[$ls2]->location.' - '.$stateName[0]->State.' listings';

//$state_page_ID='';
$state_page=get_page_title_for_slug($stateName[0]->State);
if($state_page){
  $state_page_ID=$state_page;
}
else{
    $my_post = array(
      'post_title'    =>get_option('kw').' '.$stateName[0]->State,
      'post_type'    => 'page',
      'post_content'  => $content,
      'post_status'   => 'publish',
      //'post_date'   => $timeStamp,
      'post_author'   => $authorID,
      'post_name'   => $stateName[0]->State,
      //'post_category' => array(wp_create_category($stateName[0]->State)),
  );
  // Insert the post into the database.
  echo $state_page_ID=wp_insert_post( $my_post );
  add_post_meta( $state_page_ID,'total_views' ,sanitize_text_field(rand(100,1000)) );
  add_post_meta( $state_page_ID,'count' ,sizeof($listings) );
  add_post_meta( $state_page_ID,'location' ,$listings2[$ls2]->location );
  add_post_meta( $state_page_ID,'state' ,$stateName[0]->State );
   
   dir_create_intro($state_page_ID);
   dir_create_conclusion($state_page_ID);
}

  


  $my_post2 = array(
    'post_title'    =>get_option('kw').' '.$listings2[$ls2]->location,
    'post_type'    => 'page',
    'post_content'  => $content,
    'post_status'   => 'publish',
    'post_parent'=>$state_page_ID,
    //'post_date'   => $timeStamp,
    'post_author'   => $authorID,
    'post_name'   => explode(',', $listings2[$ls2]->location)[0]
    //'post_category' => array(wp_create_category($stateName[0]->State)),
);
// Insert the post into the database.
$pid=wp_insert_post( $my_post2 );


add_post_meta( $pid,'total_views' ,sanitize_text_field(rand(100,1000)) );
add_post_meta( $pid,'count' ,sizeof($listings) );
add_post_meta( $pid,'location' ,$listings2[$ls2]->location );
add_post_meta( $pid,'state' ,$stateName[0]->State );
add_post_meta( $pid,'city' ,$listings2[$ls2]->location );

  dir_create_intro($pid);
   dir_create_conclusion($pid);
   dir_create_faqs($pid);

}


$wpdb->update(get_option('table'), array(
    'done' => 'Imported PID:'.$pid,
),
array('location'=>$listings2[$ls2]->location)
);

}
echo "Imported ";


}



function directory_automater_config() {
if(isset($_POST['table'])){



if ( current_user_can( 'manage_options' ) ) {
    update_option( 'table', $_POST['table'] );
    update_option( 'table_reviews', $_POST['table_reviews'] );
    update_option( 'kw', $_POST['kw'] );
    update_option( 'wpgpt_api', $_POST['wpgpt_api'] );

echo "Saved";
}
else {
    echo "Only admins can save";
}


}
die();

}

add_action('wp_ajax_directory_automater_config', 'directory_automater_config');
add_action('wp_ajax_nopriv_directory_automater_config', 'directory_automater_config');



function directory_automater_import() {
if(isset($_POST['importmanual'])){

echo import_dir_listings();


}
die();

}

add_action('wp_ajax_directory_automater_import', 'directory_automater_import');
add_action('wp_ajax_nopriv_directory_automater_import', 'directory_automater_import');


function get_previous_post_id( $post_id ) {
    // Get a global post reference since get_adjacent_post() references it
    global $post;

    // Store the existing post object for later so we don't lose it
    $oldGlobal = $post;

    // Get the post object for the specified post and place it in the global variable
    $post = get_post( $post_id );

    // Get the post object for the previous post
    $previous_post = get_previous_post();

    // Reset our global object
    $post = $oldGlobal;

    if ( '' == $previous_post ) {
        return 0;
    }

    return $previous_post->ID;
}


function directory_automater_update(){
$args = array( 'post_type' => 'page', 'meta_key'=>'city','post_status' => 'draft', 'posts_per_page' => -1);
$loop = new WP_Query( $args ); 
while ( $loop->have_posts() ) : $loop->the_post();
    wp_update_post(array(
         'ID'    =>  get_the_ID(),
         'post_status' => 'publish'
         ));
     $pid=get_the_ID();

    endwhile;
  echo 'Updated '.$loop->post_count.' posts';
  
}

add_action('wp_ajax_directory_automater_update', 'directory_automater_update');
add_action('wp_ajax_nopriv_directory_automater_update', 'directory_automater_update');



function get_page_title_for_slug($page_slug) {

     $page = get_page_by_path( $page_slug , OBJECT );

     if ( isset($page) )
        return $page->ID;
     else
        return 0;
}


function directory_automater_addauthors(){
  $url = "https://randomuser.me/api/?nat=us&results=1";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
$users=json_decode($resp);
$users=$users->results;
for ($i=0; $i <sizeof($users) ; $i++) { 

$name= $users[$i]->name->first.' '.$users[$i]->name->last;
$title= $users[$i]->name->title;
$email= $users[$i]->email;
$email=str_replace('example.com', 'garagedoorrepairpros.org', $email);
$picture=$users[$i]->picture->large;
$city=$users[$i]->location->city;


  $OPENAI_API_KEY=get_option('wpgpt_api');
  $ch = curl_init();

  curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  $payload='{
  "model": "text-davinci-002",
  "prompt": "garagedoorrepairpros.org is a directory that lists Garage door repair pros in the USA.  Write an author bio for the blog posts that lists Garage door repair pros. Tone excited.\nName: '.$name.'\nWorks at: garagedoorrepairpros.org\nTitle: '.$title.'\nAuthor Description:\n",
  "temperature": 0.7,
  "max_tokens": 100,
  "top_p": 1,
  "frequency_penalty": 0,
  "presence_penalty": 0
}';
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

  $headers = array();
  $headers[] = 'Content-Type: application/json';
  $headers[] = "Authorization: Bearer ".$OPENAI_API_KEY;

  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


  $result = curl_exec($ch);
  if (curl_errno($ch)) {
      echo 'Error:' . curl_error($ch);
  }
  curl_close($ch);

  $outline=json_decode($result);
  $outlines=($outline->choices[0]->text);



  $image_url        =  $picture; // Define the image URL here
  $image_name       = str_replace(' ', '-', $name).'.jpg';
  $upload_dir       = wp_upload_dir(); // Set upload folder
  $image_data       = file_get_contents($image_url); // Get image data
  $unique_file_name = wp_unique_filename( $upload_dir['path'], $image_name ); // Generate unique name
  $filename         = basename( $unique_file_name ); // Create image file name

  // Check folder permission and define file location
  if( wp_mkdir_p( $upload_dir['path'] ) ) {
      $file = $upload_dir['path'] . '/' . $filename;
  } else {
      $file = $upload_dir['basedir'] . '/' . $filename;
  }

  // Create the image  file on the server
  file_put_contents( $file, $image_data );

  // Check image file type
  $wp_filetype = wp_check_filetype( $filename, null );

  // Set attachment data
  $attachment = array(
      'post_mime_type' => $wp_filetype['type'],
      'post_title'     => sanitize_file_name( $filename ),
      'post_content'   => '',
      'post_status'    => 'inherit'
  );

  // Create the attachment
  $attach_id = wp_insert_attachment( $attachment, $file, $post_id );

  $userdata = array(
    'user_login' =>  $name,
    'user_url'   =>  'https://garagedoorrepairpros.org/',
    'first_name'   =>  $users[$i]->name->first,
    'last_name'   =>  $users[$i]->name->last,
    'display_name'   =>  $name,
    'role'   =>  'author',
    'user_email'   =>  $email,
    'description'   =>  $outlines,
);

$user_id = wp_insert_user( $userdata ) ;
add_user_meta( $user_id, 'author_image',$attach_id );
add_user_meta( $user_id, 'city',$city );

}



}

add_action('wp_ajax_directory_automater_addauthors', 'directory_automater_addauthors');
add_action('wp_ajax_nopriv_directory_automater_addauthors', 'directory_automater_addauthors');


add_action( 'generate_dir_intro_action', 'generate_dir_intro', 10, 1 );

function dir_create_intro($post_id){
wp_schedule_single_event( time()+1, 'generate_dir_intro_action', array( $post_id ) );
}

function generate_dir_intro($post_id){

    $OPENAI_API_KEY=get_option('wpgpt_api');
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    $payload='{
  "model": "text-davinci-002",
  "prompt": "Write an introduction paragraph for an article titled: list of best Garage Door Repair '.get_the_title($post_id).'\nThe paragraph should consist of 15 sentences. Tone: Informative\nAlso include some information about what should you check before hiring a Garage Door Repair company and how we have done all that, saving the readers time in searching and inspecting. End with a CTA like in this blog post.\n\n",
  "temperature": 0.7,
  "max_tokens": 300,
  "top_p": 1,
  "frequency_penalty": 0,
  "presence_penalty": 0
}';
  curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

    $headers = array();
    $headers[] = 'Content-Type: application/json';
    $headers[] = "Authorization: Bearer ".$OPENAI_API_KEY;

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);

    $outline=json_decode($result);
    $outlines=($outline->choices[0]->text);
    update_field( 'the_intro', $outlines, $post_id );
}

add_action( 'generate_dir_conclusion_action', 'generate_dir_conclusion', 10, 1 );

function dir_create_conclusion($post_id){
wp_schedule_single_event( time()+2, 'generate_dir_conclusion_action', array( $post_id ) );

}

function generate_dir_conclusion($post_id){

      $OPENAI_API_KEY=get_option('wpgpt_api');
      $ch = curl_init();

      curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
      $payload='{
  "model": "text-davinci-002",
  "prompt": "Write a conclusion paragraph for an blog post titled: list of best '.get_the_title($post_id).'\nThe paragraph should consist of 15 sentences. Tone: Energetic\nEnd with CTA to make readers share the post, comment on a post, give suggestions, etc.\n\nIn Conclusion, \n\n",
  "temperature": 0.7,
  "max_tokens": 300,
  "top_p": 1,
  "frequency_penalty": 0,
  "presence_penalty": 0
}';
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

      $headers = array();
      $headers[] = 'Content-Type: application/json';
      $headers[] = "Authorization: Bearer ".$OPENAI_API_KEY;

      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


      $result = curl_exec($ch);
      if (curl_errno($ch)) {
          echo 'Error:' . curl_error($ch);
      }
      curl_close($ch);

      $outline=json_decode($result);
      $outlines=($outline->choices[0]->text);
      update_field( 'the_conclusion', $outlines, $post_id );  
}
add_action( 'generate_dir_faq_action', 'generate_dir_faq', 10, 1 );

function dir_create_faqs($post_id){
wp_schedule_single_event( time()+3, 'generate_dir_faq_action', array( $post_id ) );
}
function generate_dir_faq($post_id){
        $OPENAI_API_KEY=get_option('wpgpt_api');
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        $payload='{
  "model": "text-davinci-002",
  "prompt": "Write 5 frequently asked questions for a website that list of best '.get_the_title($post_id).'.\n\n1. \n",
  "temperature": 0.7,
  "max_tokens": 256,
  "top_p": 1,
  "frequency_penalty": 0,
  "presence_penalty": 0
}';
      curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = "Authorization: Bearer ".$OPENAI_API_KEY;

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        $outline=json_decode($result);
        $outlines=($outline->choices[0]->text);
        update_field( 'the_faqs', $outlines, $post_id );  
        dir_create_faqs_answers($post_id);
}

add_action( 'generate_dir_faq_answer_action', 'generate_dir_faq_answers', 10, 2 );

function dir_create_faqs_answers($post_id){
  $faqs=get_field('the_faqs',$post_id);
  $faqs=preg_split("/[1-9]./", $faqs);
  
  for ($f=0; $f <sizeof($faqs) ; $f++) { 
    wp_schedule_single_event( time()+1+$f, 'generate_dir_faq_answer_action', array( $post_id,'faq_'.$f ) );
  }

}

function generate_dir_faq_answers($post_id,$faq){
  $key=str_replace('faq_', '', $faq);
  $faqs=get_field('the_faqs',$post_id);
  $faqs=preg_split("/[1-9]./", $faqs);

  $ques=$faqs[$key];
  $ques=preg_replace('/[^A-Za-z0-9\-]/', ' ', $ques);


          $OPENAI_API_KEY=get_option('wpgpt_api');
          $ch = curl_init();

          curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/completions');
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_POST, 1);
          $payload='{
  "model": "text-davinci-002",
  "prompt": "Write an answer to this Quora question. Tone: informative. Try to include the details of '.get_field('city',$post_id).' in the answer.\n\nQuestion: '.$ques.'\nAnswer:\n",
  "temperature": 0.7,
  "max_tokens": 256,
  "top_p": 1,
  "frequency_penalty": 0,
  "presence_penalty": 0
}';
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

          $headers = array();
          $headers[] = 'Content-Type: application/json';
          $headers[] = "Authorization: Bearer ".$OPENAI_API_KEY;

          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


          echo $result = curl_exec($ch);
          if (curl_errno($ch)) {
              echo 'Error:' . curl_error($ch);
          }
          curl_close($ch);

          $outline=json_decode($result);
          $outlines=($outline->choices[0]->text);
          update_field( $faq, $outlines, $post_id ); 
if($key==sizeof($faqs)-1){
  wp_update_post(array(
         'ID'    =>  $post_id,
         'post_status'=>'publish'
         ));
}
}

