<?php include "head.php" ?>
<body class="page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-1673 woocommerce-register woocommerce-account woocommerce-page single-listing-style-top single-resume-style-top wp-job-manager-categories-enabled wp-resume-manager-categories-enabled wp-job-manager wp-job-manager-resumes wp-job-manager-wc-paid-listings wp-job-manager-bookmarks wp-job-manager-tags ninjaforms-contact-resume-form wp-job-manager-contact-listing ninjaforms-contact-job-form woocommerce testimonials jetpack custom-font fixed-header jobify-child-premium">

	<div id="page" class="hfeed site">

		<?php include "header-main.php" ?><!-- #masthead -->

		<div id="main" class="site-main">

    
	    <header class="page-header">
        <h2 class="page-title">Sign Up</h2>
    </header>
	
    <div id="primary" class="content-area container" role="main">
                            
        
<article id="post-1673" class="post-1673 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="registration-form woocommerce">

	
	<h2>Register</h2>

	<form action="signup.php" method="post" class="register">

				<p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
			<label for="reg_sr_firstname">First Name</label>
			<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="sr_firstname" id="reg_sr_firstname" value="" />
		</p>

		<p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
			<label for="reg_sr_lastname">Last Name</label>
			<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="sr_lastname" id="reg_sr_lastname" value="" />
		</p>
		
		
		<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
			<label for="reg_email">Email address <span class="required">*</span></label>
			<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" value="" />
		</p>
		<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
			<label for="reg_email">Mobile <span class="required">*</span></label>
			<input type="number" class="woocommerce-Input woocommerce-Input--text input-text" name="mobile" id="reg_email" value="" />
		</p>

		
			<p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
				<label for="reg_password">Password <span class="required">*</span></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" />
			</p>

		
		<!-- Spam Trap -->
		<div style="left: -999em; position: absolute;"><label for="trap">Anti-spam</label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

		        <p class="form-row form-row-wide">
            <label for="reg_role">Register As</label>
            <select name="reg_role" class="jobify-registration-role"><option value="employer">Employer</option><option value="candidate">Candidate</option></select>
        </p>
    		
		<p class="woocomerce-FormRow form-row">
						<input type="submit" class="woocommerce-Button button" name="register" value="Register" />
		</p>

		
	</form>
	<?php
                    
                           
                    include("database/dbcon.php");  

                    if(isset($_POST['register']) ) 
                    {  
                        $fname=$_POST['sr_firstname'];
                        $lname=$_POST['sr_lastname'];
                        $email=$_POST['email'];
                        $phone=$_POST['mobile'];
                        $pwd=$_POST['password'];
                        $reg_role=$_POST['reg_role'];
                        

                        $check_if_package="select * from user WHERE email='$email'";
                        $run_query=$dbcon->query($check_if_package);  

                        if($run_query->num_rows>0)  
                        {  
                           echo "<script>alert('User Already exists')</script>";  
                        }

                        else{
                        $insert_package="insert into user (fname, lname, email, mobile,pass,type) VALUE ('$fname','$lname','$email','$phone','$pwd','$reg_role')";  


                        if($dbcon->query($insert_package))  
                        {  
                            echo "<script>alert('Registered successfully')</script>";
                        }  
                        }   
                    }
                ?>  

</div>

    </div>
</article><!-- #post -->

            </div><!-- #primary -->

    

		</div><!-- #main -->
<?php include "footer.php" ?>