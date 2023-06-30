<?php

function content_automater_options_pannel_dir(){
  add_menu_page('Automate Directory', 'Automate Directory', 'manage_options', 'automate-directory', 'dir_config_form',AUTODIRECTORY_URL.'/chillbot.png',3);
  
  // add_submenu_page( 'automate-n-chill-content-automater', 'Configuration', 'Configurations', 'manage_options', 'content-automater-configuration', 'content_config_form');
  // // add_submenu_page( 'theme-options', 'FAQ page title', 'FAQ menu label', 'manage_options', 'theme-op-faq', 'wps_theme_func_faq');
}
add_action('admin_menu', 'content_automater_options_pannel_dir');

// function automate_n_chill(){
//   echo 'string';
// }

function dir_config_form(){?>
  <link rel="stylesheet" href="<?php echo AUTODIRECTORY_URL;?>assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?php echo AUTODIRECTORY_URL;?>assets/css/animate.min.css">
 <link rel="stylesheet" href="<?php echo AUTODIRECTORY_URL;?>assets/css/fontawesome-all.css">
 <link rel="stylesheet" href="<?php echo AUTODIRECTORY_URL;?>assets/css/style.css">
 <div class="clearfix"></div>


    <div class="wrapper wizard d-flex clearfix multisteps-form position-relative">
        <div class="steps order-2 position-relative w-25">
            <div class="multisteps-form__progress">
                <span class="multisteps-form__progress-btn js-active" title="Keywords Setup"><i class="fab fa-korvue"></i><span>Keywords Setup</span></span>
            </div>
        </div>
        <form class="multisteps-form__form w-75 order-1" action="" id="content_automater_config" method="post">
            <div class="form-area position-relative">
                <!-- div 1 -->
                <div class="multisteps-form__panel js-active" data-animation="slideHorz">
                    <div class="wizard-forms">
                        <div class="inner pb-100 clearfix">
                            <div class="wizard-title text-center">
                                <h3>Configuration</h3>
                            </div>
                            <div class="wizard-form-field mb-85">
                            
                            
                            

                                <div class="wizard-form-input">

                                    <label>Keyword<br/></label>

                                   <input type="text" name="kw" required value="<?php echo get_option('kw');?>">

                                </div>


                                 <div class="wizard-form-input">

                                    <label>Table<br/></label>

                                   <input type="text" name="table" required="" value="<?php echo get_option('table');?>">

                                </div>


                                 <div class="wizard-form-input">

                                    <label>table_review<br/></label>

                                   <input type="text" name="table_reviews" required value="<?php echo get_option('table_reviews');?>">

                                </div>

                                  <div class="wizard-form-input">

                                    <label>GPT Key<br/></label>

                                   <input type="text" name="wpgpt_api"  value="<?php echo get_option('wpgpt_api');?>">

                                </div>

                               
                          
                              
                            </div>
                            
                        </div>
                       
                        <div class="actions">
                            <ul>
                                <li><button type="submit" id="importbtn" title="Save">Save <i class="fa fa-arrow-right"></i></button></li>
<!--                                 <li><button type="button" id="ImportListing" title="Save">Import 1 Listing <i class="fa fa-arrow-right"></i></button></li>
                                <li><button type="button" id="Importsingle" title="Save">Import Single <i class="fa fa-arrow-right"></i></button></li>
                <li><button type="button" id="UpdateListing" title="Save">UpdateListings <i class="fa fa-arrow-right"></i></button></li>
								<li><button type="button" id="addauthors" title="Save">AddAuthors <i class="fa fa-arrow-right"></i></button></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
      

               
               
            </div>
        </form>
    </div>
    <script src="<?php echo AUTODIRECTORY_URL;?>assets/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo AUTODIRECTORY_URL;?>assets/js/popper.min.js"></script>
    <script src="<?php echo AUTODIRECTORY_URL;?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo AUTODIRECTORY_URL;?>assets/js/slick.min.js"></script>
    <script src="<?php echo AUTODIRECTORY_URL;?>assets/js/main.js"></script>
     <script>
        jQuery(document).ready(function(){
            jQuery('form#content_automater_config').submit(function(e){
         e.preventDefault(); 
         //jQuery('#importbtn').attr('type','button');
         jQuery('#importbtn').html('Saving Please wait.. <i class="fas fa-spinner fa-pulse"></i>');
              
var data = jQuery('form#content_automater_config').serialize()+'&action=directory_automater_config';
var ajaxurl = '<?php echo home_url();?>/wp-admin/admin-ajax.php'; 
jQuery.post(ajaxurl, data, function(response) {
           alert(response);
           //jQuery('form#content_automater_config')[0].reset();
           jQuery('#importbtn').html('Save');
           jQuery('#importbtn').attr('type','submit');
});

     }); 

      $('#addauthors').click(function(){
              $('#addauthors').text('Importing...');
              var data = 'importmanual=1&action=directory_automater_addauthors';
              var ajaxurl = '<?php echo home_url();?>/wp-admin/admin-ajax.php'; 
              jQuery.post(ajaxurl, data, function(response) {
                         console.log(response);
              $('#addauthors').text('Add More.');
                        
              });
            })

            $('#ImportListing').click(function(){
              $('#ImportListing').text('Importing...');
              var data = 'importmanual=1&action=directory_automater_import';
              var ajaxurl = '<?php echo home_url();?>/wp-admin/admin-ajax.php'; 
              jQuery.post(ajaxurl, data, function(response) {
                         alert(response);
              $('#ImportListing').text('Import More.');
                        
              });
            })

                 $('#Importsingle').click(function(){
              $('#Importsingle').text('Importing...');
              var data = 'singleimport=1&action=single_listing_import';
              var ajaxurl = '<?php echo home_url();?>/wp-admin/admin-ajax.php'; 
              jQuery.post(ajaxurl, data, function(response) {
                         alert(response);
              $('#Importsingle').text('Import More.');
                        
              });
            })
              $('#UpdateListing').click(function(){
              $('#UpdateListing').text('Importing...');
              var data = 'updateall=1&action=directory_automater_update';
              var ajaxurl = '<?php echo home_url();?>/wp-admin/admin-ajax.php'; 
              jQuery.post(ajaxurl, data, function(response) {
                         alert(response);
              $('#UpdateListing').text('Update More.');
                        
              });
            })
        });
    </script>
 

<?php }