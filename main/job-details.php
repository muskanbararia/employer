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


  <li class="location" itemprop="jobLocation">
  <a href="" rel="tag"><?=$loc?></a></li>


  
 
</ul>

        </h3>
    </div>

    <div id="content" class="container content-area" role="main">

        
 

            <div class="job-overview-content row">
                <div itemprop="description" class="job_listing-description job-overview col-md-12 col-sm-12">
                    <h2 class="widget-title widget-title--job_listing-top job-overview-title">Job Overview</h2>
                    <br><br>
<h4>Job Description:</h4>
<?=$desc?>
<h4>Job Category:</h4>
<?=$cat?>
<h4>Experience:</h4>
<?=$exp?>
<h4>Skills:</h4>
<?=$skills?>
<br><br>
                </div>

                
                            </div>
<div class="col-md-5 col-sm-6 col-xs-12">
    


<aside id="jobify_widget_job_apply-2" class="widget widget--job_listing widget--job_listing-top jobify_widget_job_apply"> 
<?php 
 if (isset($_SESSION['candidate'])): ?>

    <form action="apply.php" method="POST">
                    <input type="hidden" name="ide" value="<?=$id?>">
  <!--<input type="submit"  style="background-color: #4CAF50;
    border: none;
    color: white;
    padding: 8px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;" name="edit" value="Edit" > -->

  <input type="submit" style="background-color: #f44336;;
    border: none;
    color: white;
    padding: 8px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;" name="del" value="Apply for job" >
</form>
    
      
      <?php else : ?>
<div class="job-manager-form wp-job-manager-bookmarks-form">
  <div><a class="bookmark-notice" href="my-account.php">Login to bookmark this Job</a></div>
</div>
<?php endif; ?></aside>  </div>
            
            </div>

    
</div>

    

    </div>
    <?php include "footer.php" ?>