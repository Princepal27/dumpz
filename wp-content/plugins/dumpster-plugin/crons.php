<?php

add_filter ( 'cron_schedules', 'dir_blog_once_a_minute' );

function dir_blog_once_a_minute($schedules) {
  
  // Adds once weekly to the existing schedules.
  $schedules ['once_a_minute2'] = array (
      'interval' => 60*10,
      'display' => __ ( 'DIR Blog Crons' ) 
  );
    $schedules ['once_a_minute3'] = array (
      'interval' => 60*12,
      'display' => __ ( 'DIR Single Blog Crons' ) 
  );
  return $schedules;
}

if (! wp_next_scheduled ( 'dir_blog_hook' )) {
  wp_schedule_event ( time (), 'once_a_minute2', 'dir_blog_hook' );
}


if (! wp_next_scheduled ( 'dir_singleblog_hook' )) {
  wp_schedule_event ( time (), 'once_a_minute3', 'dir_singleblog_hook' );
}



add_action ( 'dir_blog_hook', 'import_dir_listings' );


add_action ( 'dir_singleblog_hook', 'import_single_listings' );