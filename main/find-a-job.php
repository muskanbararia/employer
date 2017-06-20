<?php include "head.php" ?>

<body class="page-template page-template-page-templates page-template-map-jobs page-template-page-templatesmap-jobs-php page page-id-3940 single-listing-style-top single-resume-style-top wp-job-manager-categories-enabled wp-resume-manager-categories-enabled wp-job-manager wp-job-manager-resumes wp-job-manager-wc-paid-listings wp-job-manager-bookmarks wp-job-manager-tags ninjaforms-contact-resume-form wp-job-manager-contact-listing ninjaforms-contact-job-form woocommerce testimonials jetpack custom-font fixed-header jobify-child-premium">

	<div id="page" class="hfeed site">

		<?php include "header-main.php" ?>
    <!-- #masthead -->

		<div id="main" class="site-main">

    <div id="primary" role="main">
        


  <div class="container content-area">
    <div class="entry-content">
      <div class="job_listings" data-location="" data-keywords="" data-show_filters="true" data-show_pagination="false" data-per_page="15" data-orderby="featured" data-order="DESC" data-categories="" >

<form class="job_filters" >
	
	<div class="search_jobs">
    <div class="search_categories" style="width: 50%;">
      <label for="search_categories">Category</label>
        <select name='search_categories[]' id='search_categories' class='job-manager-category-dropdown '  data-placeholder='Choose a category&hellip;' data-no_results_text='No results match' data-multiple_text='Select Some Options'>
          <option value="">Any category</option>
          <option class="level-0" value="iti">ITI</option>
          <option class="level-0" value="diploma">Diploma</option>
        </select>
    </div>
		<div class="search_submit" style="float: right;">
      <input type="submit" name="submit" value="Search" />
        </div>
    <div class="filter_wide filter_by_tag"><span class="filter_by_tag_cloud"></span></div><input type="hidden" name="search_region" class="search_region" value="" />	</div>
<div class="showing_jobs"></div></form>
  
<noscript>Your browser does not support JavaScript, or it is disabled. JavaScript must be enabled in order to view listings.</noscript>
<ul class="job_listings">
<?php 
  require "database/dbcon.php";
  $getJob = "SELECT * FROM job WHERE approval='1'";
  $job = $dbcon->query($getJob);
  while($row = $job->fetch_array()){
    $id = $row[0];
  ?>
  <li id="job_listing-3340" class="job_listing job-type-full-time job_position_featured post-3340 type-job_listing status-publish has-post-thumbnail hentry job_listing_region-new-york job_listing_category-design job_listing_type-full-time" style="visibility: visible;">
    <a href="job-details.php?tag=<?=$id?>" class="job_listing-clickbox"></a>

    <div class="job_listing-about">

      <div class="job_listing-position job_listing__column">
        <h3 class="job_listing-title"><?=$row[4]?></h3>
        <div class="job_listing-company">
          <strong><?=$row[9]?></strong>               
        </div>
      </div>

      <div class="job_listing-location job_listing__column">
        <?=$row[5]?>    
      </div>

      <ul class="job_listing-meta job_listing__column">
        
        <li class="job_listing-type job-type full-time"><?=$row[7]?></li>
        <li class="job_listing-date"><date><?=$row[8]?></date></li>

      </ul>

    </div>
  </li>
  <?}?>
</ul><a class="load_more_jobs" href="#" style="display:none;"><strong>Load more listings</strong></a></div>
                </div>

                    </div>

    </div>
    <!-- #primary -->


		</div>
    <!-- #main -->

<?php include "footer.php" ?>
