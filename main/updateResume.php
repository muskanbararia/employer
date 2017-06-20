<?php
  require "database/dbcon.php";
  session_start();
  if(isset($_POST['submit_resume'])){
    $name = $_POST['name'];
    $email = $_SESSION['candidate'];
    $region = $_POST['region'];
    $title = $_POST['title'];
    $location = $_POST['location'];
    
    $cat = $_POST['category'];
    $det = $_POST['description'];
    $skill = $_POST['skill'];
    $exp = $_POST['exp'];
    $logo = 'dummy';
    $doc = 'dummy';
    $addResume="UPDATE resume SET name='$name', region='$region', title='$title', location='$location', description='$det', category='$cat', experience='$exp' WHERE email='$email'";
   

    if($dbcon->query($addResume))  
    {  
        echo "<script>alert('Added Resume Succesfully')</script>";
        echo"<script>window.open('./submit-your-resume.php','_self')</script>";
    }  
    else{
        echo "<script>alert('Failed !')</script>";
        echo"<script>window.open('./submit-your-resume.php','_self')</script>";
    }

  }