<header id="masthead" class="site-header" role="banner">
      <div class="container">
        <a href="index.php" title="Extended" rel="home" class="site-branding">
                    <h1 class="site-title">
                          <img src="img/logo.png" width="" height="" alt="" />
            
            <span>Extended</span>
          </h1>
          <h2 class="site-description">Jobify Extended</h2>
        </a>

        <nav id="site-navigation" class="site-primary-navigation">
          <a href="#site-navigation" class="js-primary-menu-toggle primary-menu-toggle primary-menu-toggle--close">Close</a>

          <form role="search" method="get" id="searchform" class="searchform searchform--header" action="https://jobify-demos.astoundify.com/extended/">
  
  <label class="screen-reader-text" for="s">Search for:</label>
  <input type="text" value="" name="s" id="s" class="searchform__input searchform--header__input" placeholder="Keywords..." />
  <button type="submit" id="searchsubmit" class="searchform__submit searchform--header__submit"><span class="screen-reader-text">Search</button>
</form>

<div class="nav-menu nav-menu--primary"><ul id="menu-main-menu" class="nav-menu nav-menu--primary"><li id="menu-item-99991397" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991397"><a href="how-it-works.php">How It Works</a></li>
<li id="menu-item-99991393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991393"><a href="faq.php">FAQ</a></li>
<?php

             if (isset($_SESSION['candidate'])): ?>
<li id="menu-item-99991382" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-99991382"><a href="#">Candidates</a>
<ul class="sub-menu">
  <li id="menu-item-99991392" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991392"><a href="find-a-job.php">Find A Job</a></li>
  <!--<li id="menu-item-99991212" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991212"><a href="companies.php">Companies</a></li>-->
  <?php
  
  include("./database/dbcon.php");
   
      
      $email=$_SESSION['candidate'];
      $check_if_package="select * from resume WHERE email='$email'";
      $run_query=$dbcon->query($check_if_package);  

      if($run_query->num_rows==0){
         
      ?>
  <li id="menu-item-99991384" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991384"><a href="submit-your-resume.php">Submit Your Resume</a></li>
  <?php } 
  else {?>
  <li id="menu-item-99991384" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991384"><a href="edit-your-resume.php">Edit Your Resume</a></li>
  <?php } ?>
    <li id="menu-item-99991384" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991384"><a href="applied-job.php">View Applications</a></li>
  
</ul>
</li>

<li id="menu-item-99991419" class="login menu-item menu-item-type-post_type menu-item-object-page menu-item-99991419"><a href="logout.php">Logout</a></li>
<?php elseif (isset($_SESSION['employer'])): ?>

<li id="menu-item-99991386" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-99991386"><a href="#">Employers</a>
<ul class="sub-menu">
  <li id="menu-item-99991391" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991391"><a href="post-a-job.php">Post A Job</a></li>
  <li id="menu-item-99991391" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991391"><a href="emp-index.php">Posted Jobs</a></li>
  
  
</ul>
</li>
<li id="menu-item-99991419" class="login menu-item menu-item-type-post_type menu-item-object-page menu-item-99991419"><a href="logout.php">Logout</a></li>
<?php else : ?>
<li id="menu-item-99991382" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-99991382"><a href="#">Candidates</a>
<ul class="sub-menu">
  <li id="menu-item-99991392" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991392"><a href="find-a-job.php">Find A Job</a></li>
  <li id="menu-item-99991212" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991212"><a href="companies.php">Companies</a></li>
  <li id="menu-item-99991384" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991384"><a href="submit-your-resume.php">Submit Your Resume</a></li>

  
</ul>
</li>  
<li id="menu-item-99991386" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-99991386"><a href="#">Employers</a>
<ul class="sub-menu">
  <li id="menu-item-99991391" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-99991391"><a href="post-a-job.php">Post A Job</a></li>
  
  
</ul>
</li>
<li id="menu-item-99991219" class="popup menu-item menu-item-type-post_type menu-item-object-page menu-item-99991219"><a href="signup.php">Sign Up</a></li>
<li id="menu-item-99991419" class="login menu-item menu-item-type-post_type menu-item-object-page menu-item-99991419"><a href="my-account.php">Login</a></li>
<?php endif; ?>
</ul></div>       </nav>

        <a href="#site-navigation" class="js-primary-menu-toggle primary-menu-toggle primary-menu-toggle--open"><span class="screen-reader-text">Menu</span></a>
      </div>
    </header><!-- #masthead -->
    