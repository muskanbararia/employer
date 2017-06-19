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
     </div>

  
  <div class="col-md-5 col-sm-6 col-xs-12">
    


</aside><aside id="jobify_widget_job_apply-2" class="widget widget--job_listing widget--job_listing-top jobify_widget_job_apply"> <div class="job_application application">
        
    <input type="button" class="application_button button popup-trigger" value="Apply for job" href="#apply-overlay">
    
    <div class="application_details modal" id="apply-overlay" style="display: none;">
        <div id="ninja_forms_form_1_cont" class="ninja-forms-cont">
    <div id="ninja_forms_form_1_wrap" class="ninja-forms-form-wrap">
  <h2 class="ninja-forms-form-title">Apply For Job</h2><div id="ninja_forms_form_1_response_msg" style="" class="ninja-forms-response-msg "></div>  
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