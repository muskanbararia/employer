<?php include "head.php" ?>

<body class="page-template page-template-page-templates page-template-map-jobs page-template-page-templatesmap-jobs-php page page-id-3940 single-listing-style-top single-resume-style-top wp-job-manager-categories-enabled wp-resume-manager-categories-enabled wp-job-manager wp-job-manager-resumes wp-job-manager-wc-paid-listings wp-job-manager-bookmarks wp-job-manager-tags ninjaforms-contact-resume-form wp-job-manager-contact-listing ninjaforms-contact-job-form woocommerce testimonials jetpack custom-font fixed-header jobify-child-premium">

	<div id="page" class="hfeed site">

		<?php include "header-main.php" ?><!-- #masthead -->

		<div id="main" class="site-main">

    <div id="primary" role="main">
        
<div class="job_listing-map-wrapper">
	
	<div class="job_listing-map">
		<div id="job_listing-map-canvas"></div>
	</div>

	</div>

        <div class="container content-area">
                                        
            
                <div class="entry-content">
                    <div class="job_listings" data-location="" data-keywords="" data-show_filters="true" data-show_pagination="false" data-per_page="15" data-orderby="featured" data-order="DESC" data-categories="" >

<form class="job_filters">
	
	<div class="search_jobs">
		
		<div class="search_keywords">
			<label for="search_keywords">Keywords</label>
			<input type="text" name="search_keywords" id="search_keywords" placeholder="Keywords" value="" />
		</div>

		<div class="search_location">
			<label for="search_location">Location</label>
			<input type="text" name="search_location" id="search_location" placeholder="Location" value="" />
		</div>

					<div class="search_categories">
				<label for="search_categories">Category</label>
									<select name='search_categories[]' id='search_categories' class='job-manager-category-dropdown '  data-placeholder='Choose a category&hellip;' data-no_results_text='No results match' data-multiple_text='Select Some Options'>
<option value="">Any category</option>	<option class="level-0" value="17">Design</option>
	<option class="level-0" value="18">Developement</option>
	<option class="level-0" value="35">Marketing</option>
</select>
							</div>
		
		        <div class="search_submit">
            <input type="submit" name="submit" value="Search" />
        </div>
    <div class="filter_wide filter_by_tag">Filter by tag: <span class="filter_by_tag_cloud"></span></div><input type="hidden" name="search_region" class="search_region" value="" />	</div>

		<ul class="job_types">
					<li><label for="job_type_freelance" class="freelance"><input type="checkbox" name="filter_job_type[]" value="freelance"  checked='checked' id="job_type_freelance" /> Freelance</label></li>
					<li><label for="job_type_full-time" class="full-time"><input type="checkbox" name="filter_job_type[]" value="full-time"  checked='checked' id="job_type_full-time" /> Full Time</label></li>
					<li><label for="job_type_internship" class="internship"><input type="checkbox" name="filter_job_type[]" value="internship"  checked='checked' id="job_type_internship" /> Internship</label></li>
					<li><label for="job_type_part-time" class="part-time"><input type="checkbox" name="filter_job_type[]" value="part-time"  checked='checked' id="job_type_part-time" /> Part Time</label></li>
					<li><label for="job_type_temporary" class="temporary"><input type="checkbox" name="filter_job_type[]" value="temporary"  checked='checked' id="job_type_temporary" /> Temporary</label></li>
			</ul>
	<input type="hidden" name="filter_job_type[]" value="" />
<div class="showing_jobs"></div></form>


<noscript>Your browser does not support JavaScript, or it is disabled. JavaScript must be enabled in order to view listings.</noscript><ul class="job_listings"></ul><a class="load_more_jobs" href="#" style="display:none;"><strong>Load more listings</strong></a></div>
                </div>

                    </div>

    </div><!-- #primary -->


		</div><!-- #main -->

<?php include "footer.php" ?>
