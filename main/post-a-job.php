<?php include "head.php" ?>

<body class="page-template page-template-page-templates page-template-single-column page-template-page-templatessingle-column-php page page-id-99991378 single-listing-style-top single-resume-style-top wp-job-manager-categories-enabled wp-resume-manager-categories-enabled wp-job-manager wp-job-manager-resumes wp-job-manager-wc-paid-listings wp-job-manager-bookmarks wp-job-manager-tags ninjaforms-contact-resume-form wp-job-manager-contact-listing ninjaforms-contact-job-form woocommerce testimonials jetpack custom-font fixed-header jobify-child-premium">

	<div id="page" class="hfeed site">

		<?php include "header-main.php" ?><!-- #masthead -->

		<div id="main" class="site-main">

	    <header class="page-header">
        <h2 class="page-title">Post A Job</h2>
    </header>
	
    <div id="primary" class="content-area container" role="main">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                                                    
                                    
<article id="post-99991378" class="post-99991378 page type-page status-publish hentry">
    <div class="entry-content">
        <form action="postJob.php" method="post" id="submit-resume-form" class="job-manager-form" enctype="multipart/form-data">
	<fieldset>
		<label>Have an account?</label>
		<div class="field account-sign-in">
			<a class="button" href="">Sign in</a>			
				If you don&rsquo;t have an account you can create one below by entering your email address. Your account details will be confirmed via email.
					</div>
	</fieldset>
						
		<!-- Resume Fields -->
			<fieldset class="fieldset-candidate_name">
				<label for="candidate_name">Your Name</label>
				<div class="field">
					<input type="text" class="input-text" name="name" id="candidate_name" placeholder="Your full name" required />
				</div>
			</fieldset>
					<fieldset class="fieldset-candidate_email">
				<label for="candidate_email">Your email</label>
				<div class="field">
					<input type="text" class="input-text" name="email" id="candidate_email" placeholder="you@yourdomain.com" required />
				</div>
			</fieldset>
					<fieldset class="fieldset-resume_region">
				<label for="resume_region">Region</label>
				<div class="field">
					<select  name='resume_region' id='region' class='postform' >
          	<option class="level-0" value="East">East</option>
          	<option class="level-0" value="West">West</option>
          	<option class="level-0" value="North">North</option>
          	<option class="level-0" value="South">South</option>
          </select>
				</div>
			</fieldset>
					<fieldset class="fieldset-candidate_title">
				<label for="candidate_title">Job title</label>
				<div class="field">
					<input type="text" class="input-text" name="title" id="candidate_title" placeholder="e.g. &quot;Web Developer&quot;" required />
				</div>
			</fieldset>
					<fieldset class="fieldset-candidate_location">
				<label for="candidate_location">Location</label>
				<div class="field">
					<input type="text" class="input-text" name="location" id="candidate_location" placeholder="e.g. &quot;London, UK&quot;, &quot;New York&quot;, &quot;Houston, TX&quot;" required />
				</div>
			</fieldset>
					<fieldset class="fieldset-candidate_photo">
				<label for="candidate_photo">Logo <small>(optional)</small></label>
				<div class="field">
					<label for="candidate_photo" class="file-field-label">
	         <div class="job-manager-uploaded-files">
		        </div>
            <input type="file" class="input-text wp-job-manager-file-upload" data-file_types="jpg|jpeg|gif|png"  name="logo"  id="candidate_photo" placeholder="" />
            <span class="button button--size-medium">
            Choose File			
            </span>
          </label>
          <small class="description file-field-description">
			Maximum file size: 2 MB.	</small>
				</div>
			</fieldset>
					<fieldset class="fieldset-resume_category">
				<label for="resume_category">Job category</label>
				<div class="field">
					<select name='category' id='category' class='job-manager-category-dropdown ' multiple='multiple' data-placeholder='Choose a category&hellip;' data-no_results_text='No results match' data-multiple_text='Select Some Options'>
          	<option class="level-0" value="49">Designer</option>
          	<option class="level-0" value="51">Management &amp; Finance</option>
          	<option class="level-0" value="52">Marketing</option>
          	<option class="level-0" value="79">Quality Assurance</option>
          	<option class="level-0" value="77">Software Development</option>
          	<option class="level-0" value="50">Web Design/Development</option>
          </select>
				</div>
			</fieldset>
					<fieldset class="fieldset-resume_content">
				<label for="resume_content">Job Details</label>
				<div class="field">
					<div id="wp-resume_content-wrap" class="wp-core-ui wp-editor-wrap html-active"><link rel='stylesheet' id='dashicons-css'  href='../../../17314-presscdn-0-16-pagely.netdna-ssl.com/extended/wp-includes/css/dashicons.min66f2.css?ver=4.7.5' type='text/css' media='all' />
<link rel='stylesheet' id='editor-buttons-css'  href='../../../17314-presscdn-0-16-pagely.netdna-ssl.com/extended/wp-includes/css/editor.min66f2.css?ver=4.7.5' type='text/css' media='all' />
<div id="wp-resume_content-editor-container" class="wp-editor-container">
<textarea class="wp-editor-area" rows="8" cols="40" name="details" id="resume_content"></textarea>
</div>
</div>

				</div>
			</fieldset>
					<fieldset class="fieldset-resume_skills">
				<label for="resume_skills">Skills <small>(optional)</small></label>
				<div class="field">
					<input type="text" class="input-text" name="skills" id="resume_skills" placeholder="Comma separate a list of relevant skills" value="" maxlength=""  />
				</div>
			</fieldset>

			<fieldset class="fieldset-candidate_experience">
				<label for="candidate_experience">Experience <small>(optional)</small></label>
				<div class="field">
				  <input type="text" class="input-text" name="exp" id="resume_skills" placeholder="Required Experience in Months"/>
				</div>
			</fieldset>
		<p>
			<input type="submit" name="submitJob" class="button" value="Submit &rarr;" />
		</p>

	</form>

    </div>
</article><!-- #post -->
                            </div>
        </div>

            </div><!-- #primary -->


		</div><!-- #main -->

				<?php include "footer.php" ?>
