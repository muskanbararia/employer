<?php
  if(isset($_GET['tag'])){
    $id = $_GET['tag'];
  }
  else
    echo"<script>window.open('./find-a-job.php','_self')</script>";

  require "database/dbcon.php";
  $getJob = "SELECT * FROM job WHERE id = '$id'";
  $job = $dbcon->query($getJob);
  while($row = $job->fetch_array()){
    $id = $row[0];
    $title = $row[4];
    $reg = $row[3];
    $loc = $row[5];
    $desc = $row[8];
    $cat = $row[7];
    $exp = $row[10];
    $skills = $row[10];
  }
  ?>
<?php include "head.php" ?>
<body class="page-template page-template-page-templates page-template-map-jobs page-template-page-templatesmap-jobs-php page page-id-3940 single-listing-style-top single-resume-style-top wp-job-manager-categories-enabled wp-resume-manager-categories-enabled wp-job-manager wp-job-manager-resumes wp-job-manager-wc-paid-listings wp-job-manager-bookmarks wp-job-manager-tags ninjaforms-contact-resume-form wp-job-manager-contact-listing ninjaforms-contact-job-form woocommerce testimonials jetpack custom-font fixed-header jobify-child-premium">

  <div id="page" class="hfeed site">

    <?php include "header-main.php" ?>
<div id="main" class="site-main">   
<div class="single_job_listing" itemscope="" itemtype="http://schema.org/JobPosting">

    <div class="page-header">
        <h2 class="page-title">
            <?=$title?>        
        <meta itemprop="title" content="Design Technologist">
        </h2>
        <h3 class="page-subtitle">
            
<ul class="job-listing-meta meta">
  
  <li class="job-type part-time" itemprop="employmentType">Part Time</li>

  <li class="location" itemprop="jobLocation">
  <a href="https://jobify-demos.astoundify.com/extended/job-region/san-francisco/" rel="tag"><?=$loc?></a></li>

  <li class="date-posted" itemprop="datePosted"><date>Posted 4 years ago</date></li>

  
  <li class="job-company">
            <a href="https://jobify-demos.astoundify.com/extended/company/Dolby%20Laboratories/" target="_blank">Dolby Laboratories</a>
    </li>
</ul>

        </h3>
    </div>

    <div id="content" class="container content-area" role="main">

        
            
<div class="job-meta-top row">

  
  <div class="col-md-3 col-sm-6 col-xs-12">
    <aside id="jobify_widget_job_company_logo-2" class="widget widget--job_listing widget--job_listing-top jobify_widget_job_company_logo"><a href="https://jobify-demos.astoundify.com/extended/company/Dolby%20Laboratories/" target="_blank"><img class="company_logo" src="https://17314-presscdn-0-16-pagely.netdna-ssl.com/extended/wp-content/uploads/sites/3/2016/04/company-logo-dolby.jpg" alt="Dolby Laboratories"></a></aside>  </div>

  
  <div class="col-md-4 col-sm-6 col-xs-12">
    <aside id="jobify_widget_job_categories-2" class="widget widget--job_listing widget--job_listing-top jobify_widget_job_categories"><h3 class="widget-title widget-title--job_listing widget-title--job_listing-top">Job Categories</h3><div class="job_listing-categories"><a href="https://jobify-demos.astoundify.com/extended/job-category/design/" class="job-category">Design</a><a href="https://jobify-demos.astoundify.com/extended/job-category/developement/" class="job-category">Developement</a></div></aside><aside id="jobify_widget_job_share-2" class="widget widget--job_listing widget--job_listing-top jobify_widget_job_share"><h3 class="widget-title widget-title--job_listing widget-title--job_listing-top">Share Job Posting</h3><div class="sharedaddy sd-sharing-enabled"><div class="robots-nocontent sd-block sd-social sd-social-icon sd-sharing"><h3 class="sd-title">Share this:</h3><div class="sd-content"><ul><li class="share-email share-service-visible"><a rel="nofollow" data-shared="" class="share-email sd-button share-icon no-text" href="https://jobify-demos.astoundify.com/extended/job/design-technologist-shopping-innovation/?share=email&amp;nb=1" target="_blank" title="Click to email this to a friend"><span></span><span class="sharing-screen-reader-text">Click to email this to a friend (Opens in new window)</span></a></li><li class="share-linkedin"><a rel="nofollow" data-shared="sharing-linkedin-99991231" class="share-linkedin sd-button share-icon no-text" href="https://jobify-demos.astoundify.com/extended/job/design-technologist-shopping-innovation/?share=linkedin&amp;nb=1" target="_blank" title="Click to share on LinkedIn"><span></span><span class="sharing-screen-reader-text">Click to share on LinkedIn (Opens in new window)</span></a></li><li class="share-google-plus-1"><a rel="nofollow" data-shared="sharing-google-99991231" class="share-google-plus-1 sd-button share-icon no-text" href="https://jobify-demos.astoundify.com/extended/job/design-technologist-shopping-innovation/?share=google-plus-1&amp;nb=1" target="_blank" title="Click to share on Google+"><span></span><span class="sharing-screen-reader-text">Click to share on Google+ (Opens in new window)</span></a></li><li class="share-facebook"><a rel="nofollow" data-shared="sharing-facebook-99991231" class="share-facebook sd-button share-icon no-text" href="https://jobify-demos.astoundify.com/extended/job/design-technologist-shopping-innovation/?share=facebook&amp;nb=1" target="_blank" title="Click to share on Facebook"><span></span><span class="sharing-screen-reader-text">Click to share on Facebook (Opens in new window)</span></a></li><li class="share-twitter"><a rel="nofollow" data-shared="sharing-twitter-99991231" class="share-twitter sd-button share-icon no-text" href="https://jobify-demos.astoundify.com/extended/job/design-technologist-shopping-innovation/?share=twitter&amp;nb=1" target="_blank" title="Click to share on Twitter"><span></span><span class="sharing-screen-reader-text">Click to share on Twitter (Opens in new window)</span></a></li><li class="share-end"></li></ul></div></div></div></aside>  </div>

  
  <div class="col-md-5 col-sm-6 col-xs-12">
    <aside id="jobify_widget_job_company_social-2" class="widget widget--job_listing widget--job_listing-top jobify_widget_job_company_social"><h3 class="widget-title widget-title--job_listing widget-title--job_listing-top">Company Social Profiles</h3>
<ul class="job_listing-company-social company-social">
  
    <li><a href="http://www.dolby.com/" target="_blank" itemprop="url" class="job_listing-website">
    Website </a></li>
  
    <li><a href="http://twitter.com/@Dolby" target="_blank" class="job_listing-twitter">
    Twitter </a></li>
  
    <li><a href="https://www.facebook.com/dolby" target="_blank" class="job_listing-facebook">
    Facebook  </a></li>
  
  
    <li><a href="http://linkedin.com/company/www.linkedin.com/company/dolby-laboratories" target="_blank" class="job_listing-linkedin">
    LinkedIn  </a></li>
  
  </ul>

</aside><aside id="jobify_widget_job_apply-2" class="widget widget--job_listing widget--job_listing-top jobify_widget_job_apply"> <div class="job_application application">
        
    <input type="button" class="application_button button popup-trigger" value="Apply for job" href="#apply-overlay">
    
    <div class="application_details modal" id="apply-overlay" style="display: none;">
        <div id="ninja_forms_form_1_cont" class="ninja-forms-cont">
    <div id="ninja_forms_form_1_wrap" class="ninja-forms-form-wrap">
  <h2 class="ninja-forms-form-title">Apply For Job</h2><div id="ninja_forms_form_1_response_msg" style="" class="ninja-forms-response-msg "></div>  <form id="ninja_forms_form_1" enctype="multipart/form-data" method="post" name="" action="https://jobify-demos.astoundify.com/extended/wp-admin/admin-ajax.php?action=ninja_forms_ajax_submit" class="ninja-forms-form">

  <input type="hidden" id="_wpnonce" name="_wpnonce" value="f6f434edef"><input type="hidden" name="_wp_http_referer" value="/extended/job/design-technologist-shopping-innovation/">  <input type="hidden" name="_ninja_forms_display_submit" value="1">
  <input type="hidden" name="_form_id" id="_form_id" value="1">
    <div class="hp-wrap">
    <label>If you are a human and are seeing this field, please leave it blank.     <input type="text" value="" name="_2wR3T">
      <input type="hidden" value="_2wR3T" name="_hp_name">
    </label>
  </div>
    <div id="ninja_forms_form_1_all_fields_wrap" class="ninja-forms-all-fields-wrap">
      <div class="ninja-forms-required-items">Fields marked with an <span class="ninja-forms-req-symbol">*</span> are required</div>
                <div class="field-wrap text-wrap label-above" id="ninja_forms_field_5_div_wrap" data-visible="1">
              <input type="hidden" id="ninja_forms_field_5_type" value="text">
    <label for="ninja_forms_field_5" id="ninja_forms_field_5_label" class="">Name         </label>
      <input id="ninja_forms_field_5" data-mask="" data-input-limit="" data-input-limit-type="char" data-input-limit-msg="" name="ninja_forms_field_5" type="text" placeholder="" class="ninja-forms-field  " value="" rel="5">
    <div id="ninja_forms_field_5_error" style="display:none;" class="ninja-forms-field-error">
    </div>
              </div>
                        <div class="field-wrap text-wrap label-above" id="ninja_forms_field_2_div_wrap" data-visible="1">
              <input type="hidden" id="ninja_forms_field_2_type" value="text">
    <label for="ninja_forms_field_2" id="ninja_forms_field_2_label" class="">Email <span class="ninja-forms-req-symbol"><strong>*</strong></span>       </label>
      <input id="ninja_forms_field_2" data-mask="" data-input-limit="" data-input-limit-type="" data-input-limit-msg="" name="ninja_forms_field_2" type="text" placeholder="" class="ninja-forms-field  ninja-forms-req email " value="" rel="2">
    <div id="ninja_forms_field_2_error" style="display:none;" class="ninja-forms-field-error">
    </div>
              </div>
                        <div class="field-wrap textarea-wrap label-above" id="ninja_forms_field_3_div_wrap" data-visible="1">
              <input type="hidden" id="ninja_forms_field_3_type" value="textarea">
    <label for="ninja_forms_field_3" id="ninja_forms_field_3_label" class="">Message <span class="ninja-forms-req-symbol"><strong>*</strong></span>       <img class="ninja-forms-help-text" src="https://17314-presscdn-0-16-pagely.netdna-ssl.com/extended/wp-content/plugins/ninja-forms/deprecated/images/question-ico.gif" alt="Help Text" oldtitle="Your cover letter/message that will be sent to the employer." title="" data-hasqtip="true">
      </label>
        <textarea name="ninja_forms_field_3" id="ninja_forms_field_3" class="ninja-forms-field  ninja-forms-req" rel="3" data-input-limit="" data-input-limit-type="char" data-input-limit-msg=""></textarea>
      <div id="ninja_forms_field_3_error" style="display:none;" class="ninja-forms-field-error">
    </div>
              </div>
                        <div class="field-wrap submit-wrap label-above" id="ninja_forms_field_4_div_wrap" data-visible="1">
              <input type="hidden" id="ninja_forms_field_4_type" value="submit">
  <div id="nf_submit_1">
    <input type="submit" name="_ninja_forms_field_4" class="ninja-forms-field " id="ninja_forms_field_4" value="Submit Application" rel="4">
  </div>
  <div id="nf_processing_1" style="display:none;">
    <input type="submit" name="_ninja_forms_field_4" class="ninja-forms-field " id="ninja_forms_field_4" value="Processing" rel="4" disabled="">
  </div>
    <div id="ninja_forms_field_4_error" style="display:none;" class="ninja-forms-field-error">
    </div>
              </div>
              </div>
    </form>
    </div>
    </div>
      </div>
      </div>
<div class="job-manager-form wp-job-manager-bookmarks-form">
  <div><a class="bookmark-notice" href="https://jobify-demos.astoundify.com/extended/wp-login.php?redirect_to=https%3A%2F%2Fjobify-demos.astoundify.com%2Fextended%2Fjob%2Fdesign-technologist-shopping-innovation%2F">Login to bookmark this Job</a></div>
</div></aside>  </div>

  
  
</div>

            <div class="job-overview-content row">
                <div itemprop="description" class="job_listing-description job-overview col-md-12 col-sm-12">
                    <h2 class="widget-title widget-title--job_listing-top job-overview-title">Overview</h2>
<h4>Job Description</h4>
<?=$desc?>
                </div>

                
                            </div>

            
            </div>

    
</div>

    

    </div>
    <?php include "footer.php" ?>