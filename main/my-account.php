<?php include "head.php" ?>
<body class="page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-99991207 woocommerce-account woocommerce-page single-listing-style-top single-resume-style-top wp-job-manager-categories-enabled wp-resume-manager-categories-enabled wp-job-manager wp-job-manager-resumes wp-job-manager-wc-paid-listings wp-job-manager-bookmarks wp-job-manager-tags ninjaforms-contact-resume-form wp-job-manager-contact-listing ninjaforms-contact-job-form woocommerce testimonials jetpack custom-font fixed-header jobify-child-premium">

	<div id="page" class="hfeed site">

		<?php include "header-main.php" ?><!-- #masthead -->

		<div id="main" class="site-main">

    
	    <header class="page-header">
        <h2 class="page-title">My Account</h2>
    </header>
	
    <div id="primary" class="content-area container" role="main">
                            
        
<article id="post-99991207" class="post-99991207 page type-page status-publish hentry">
    <div class="entry-content">
        <div class="woocommerce">

<div class="woocommerce-customer-login">

		<h2>Login</h2>

		<form class="woocomerce-form woocommerce-form-login login" action="my-account.php" method="post">

			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Username or email address <span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" value="" />
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password">Password <span class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" />
			</p>

			
			<p class="form-row">
							<input type="submit" class="woocommerce-Button button" name="login" value="Login" />
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
				</label>
			</p>
			<p class="woocommerce-LostPassword lost_password">
				<a href="lost-password/index.html">Lost your password?</a>
			</p>

			

	


		</form>
		<?php
                    
                           
                    include("database/dbcon.php");  

                    if(isset($_POST['login']) ) 
                    {  
                        
                        $email=$_POST['username'];
                        
                        $pwd=$_POST['password'];
                        

                        $check_user="select count(*) AS pr from user WHERE email='$email' AND pass='$pwd'";


                            $run= $dbcon->query($check_user) or die($dbcon->error);;  
                            $data = $run->fetch_assoc();

                            if((int)$data['pr'])  
                            {  
                                $_SESSION['user']=$email;
                                echo "<script>window.open('./index.php','_self')</script> ";
                                
                            }  
                            else  
                            {  
                                echo "<script>alert('Enter correct password')</script>";      
                            }   
                    }
?>           


</div></div>
    </div>
</article><!-- #post -->

            </div><!-- #primary -->

    

		</div><!-- #main -->

				<?php include "footer.php" ?>
