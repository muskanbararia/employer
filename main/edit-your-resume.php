<?php include "head.php" ?>

<body class="page-template page-template-page-templates page-template-single-column page-template-page-templatessingle-column-php page page-id-99991378 single-listing-style-top single-resume-style-top wp-job-manager-categories-enabled wp-resume-manager-categories-enabled wp-job-manager wp-job-manager-resumes wp-job-manager-wc-paid-listings wp-job-manager-bookmarks wp-job-manager-tags ninjaforms-contact-resume-form wp-job-manager-contact-listing ninjaforms-contact-job-form woocommerce testimonials jetpack custom-font fixed-header jobify-child-premium">

	<div id="page" class="hfeed site">

		<?php include "header-main.php" ?><!-- #masthead -->

		<div id="main" class="site-main">

	    <header class="page-header">
        <h2 class="page-title">Submit Your Resume</h2>
    </header>
	
    <div id="primary" class="content-area container" role="main">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                                                    
                                    
<article id="post-99991378" class="post-99991378 page type-page status-publish hentry">
    <div class="entry-content">
        <form action="updateResume.php" method="post" id="submit-resume-form" class="job-manager-form" enctype="multipart/form-data">

	
	
			
		
		<!-- Resume Fields -->
		
					<fieldset class="fieldset-candidate_name">
				<label for="candidate_name">Your name</label>
				<div class="field">
					<input type="text" class="input-text" name="name" id="candidate_name" placeholder="Your full name"  required />
				</div>
			</fieldset>
					
					<fieldset class="fieldset-resume_region">
				<label for="resume_region">Region</label>
				<div class="field">
					<select  name='region' id='region' class='postform' >
	<option class="level-0" value="North">North</option>
	<option class="level-0" value="East">East</option>
	<option class="level-0" value="South">South</option>
	<option class="level-0" value="West">West</option>
</select>
				</div>
			</fieldset>
					<fieldset class="fieldset-candidate_title">
				<label for="candidate_title">Professional title</label>
				<div class="field">
					<input type="text" class="input-text" name="title" id="candidate_title" placeholder="e.g. &quot;Web Developer&quot;" required />
				</div>
			</fieldset>
					<fieldset class="fieldset-candidate_location">
				<label for="candidate_location">Location</label>
				<div class="field">
					<input type="text" class="input-text" name="location" id="candidate_location" placeholder="e.g. &quot;London, UK&quot;, &quot;New York&quot;, &quot;Houston, TX&quot;" value="" maxlength="" required />
				</div>
			</fieldset>
					<fieldset class="fieldset-candidate_photo">
				<label for="candidate_photo">Photo <small>(optional)</small></label>
				<div class="field">
					
<label for="candidate_photo" class="file-field-label">
	<div class="job-manager-uploaded-files">
		</div>

	<input type="file" class="input-text wp-job-manager-file-upload" data-file_types="jpg|jpeg|gif|png"  name="photo"  id="candidate_photo" placeholder="" />

	<span class="button button--size-medium">
					Choose File			</span>
</label>

<small class="description file-field-description">
			Maximum file size: 2 MB.	</small>
				</div>
			</fieldset>
					<fieldset class="fieldset-resume_category">
				<label for="resume_category">Resume category</label>
				<div class="field">
				<select name='category' id='resume_category' class='job-manager-category-dropdown ' multiple='multiple' data-placeholder='Choose a category&hellip;' data-no_results_text='No results match' data-multiple_text='Select Some Options'>
					<option class="level-0" value="iti">ITI</option>
					<option class="level-0" value="diploma">Diploma</option>
				</select>
				</div>
			</fieldset>
					<fieldset class="fieldset-resume_content">
				<label for="resume_content">Resume Content</label>
				<div class="field">
					<div id="wp-resume_content-wrap" class="wp-core-ui wp-editor-wrap html-active"><link rel='stylesheet' id='dashicons-css'  href='../../../17314-presscdn-0-16-pagely.netdna-ssl.com/extended/wp-includes/css/dashicons.min66f2.css?ver=4.7.5' type='text/css' media='all' />
<link rel='stylesheet' id='editor-buttons-css'  href='../../../17314-presscdn-0-16-pagely.netdna-ssl.com/extended/wp-includes/css/editor.min66f2.css?ver=4.7.5' type='text/css' media='all' />
<div id="wp-resume_content-editor-container" class="wp-editor-container"><textarea class="wp-editor-area" rows="8" cols="40" name="description" id="resume_content"></textarea></div>
</div>

				</div>
			</fieldset>
			
			<fieldset class="fieldset-resume_skills">
				<label for="resume_skills">Skills <small>(optional)</small></label>
				<div class="field">
					<input type="text" class="input-text" name="skill" id="resume_skills" placeholder="Comma separate a list of relevant skills"/>
				</div>
			</fieldset>

			<fieldset class="fieldset-resume_skills">
				<label for="resume_skills">Experience <small>(optional)</small></label>
				<div class="field">
					<input type="text" class="input-text" name="exp" id="resume_skills" placeholder="Experience in field" />
				</div>
			</fieldset>
		
					<fieldset class="fieldset-resume_file">
				<label for="resume_file">Resume file <small>(optional)</small></label>
				<div class="field">
					
<label for="resume_file" class="file-field-label">
	<div class="job-manager-uploaded-files">
		</div>

	<input type="file" class="input-text wp-job-manager-file-upload" data-file_types="jpg|jpeg|jpe|png|gif|mov|qt|avi|mpeg|mpg|mpe|3gp|3gpp|3g2|3gp2|mid|midi|pdf|doc|docx|docm|pot|pps|ppt|pptx|pptm|odt|ppsx|ppsm|xla|xls|xlt|xlw|xlsx|xlsm|xlsb|key|mp3|m4a|m4b|ogg|oga|wma|wav|mp4|m4v|webm|ogv|wmv|flv|svg|svgz"  name="pdf"  id="resume_file" placeholder="" />

	<span class="button button--size-medium">
					Choose File			</span>
</label>

<small class="description file-field-description">
			Optionally upload your resume for employers to view. Max. file size: 2 MB.	</small>
				</div>
			</fieldset>
		
		
		<p>
			
			<input type="submit" name="submit_resume" class="button" value="Submit &rarr;" />
		</p>

	
	</form>

    </div>
</article><!-- #post -->
                            </div>
        </div>

            </div><!-- #primary -->


		</div><!-- #main -->

				<?php include "footer.php" ?>
