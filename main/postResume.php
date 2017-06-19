<?php
  require "database/dbcon.php";
  session_start();
  if(isset($_POST['submit_resume'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $region = $_POST['region'];
    $title = $_POST['title'];
    $location = $_POST['location'];
    $img = $_FILES['photo']['name'];
    $imgTmp = $_FILES['logo']['tmp_name'];
    $resume = $_FILES['pdf']['name'];
    $resumeTmp = $_FILES['pdf']['tmp_name'];
    $cat = $_POST['category'];
    $det = $_POST['description'];
    $skill = $_POST['skill'];
    $exp = $_POST['exp'];
    $logo = 'dummy';
    $doc = 'dummy';
    $addResume = "INSERT INTO resume(name, email, region, title, location, image, doc, description, category, experience) VALUES ('$name', '$email', '$region', '$title', '$location','$image','$doc','$det','$cat', '$exp')";

    if($dbcon->query($addResume))  
    {  
        echo "<script>alert('$img $resume Added Resume Succesfully')</script>";
        echo"<script>window.open('./submit-your-resume.php','_self')</script>";
    }  
    else{
        echo "<script>alert('$img $resume Failed !')</script>";
        echo"<script>window.open('./submit-your-resume.php','_self')</script>";
    }

  }