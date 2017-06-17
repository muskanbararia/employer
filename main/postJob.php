<?php
  require "database/dbcon.php";

  if(isset($_POST['submitJob'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $region = $_POST['region'];
    $title = $_POST['title'];
    $location = $_POST['location'];
    $img = $_FILES['logo']['name'];
    $imgTmp = $_FILES['logo']['tmp_name'];
    $cat = $_POST['category'];
    $det = $_POST['details'];
    $skill = $_POST['skill'];
    $exp = $_POST['exp'];
    $logo = 'dummy';
    $addJob = "insert into job (name, email, region, title, location, logo, category, details, skills, experience, approval) VALUE ('$name','$email','$region','$title','$location','$logo','$cat','$det','$skill','$exp','0')";

    if($dbcon->query($addJob))  
    {  
        echo "<script>alert('$img Added Job Succesfully')</script>";
        echo"<script>window.open('./post-a-job.php','_self')</script>";
    }  
    else{
        echo "<script>alert('$img Failed !')</script>";
        echo"<script>window.open('./post-a-job.php','_self')</script>";
    }

  }