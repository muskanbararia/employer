<?php
	session_start();
	include("./database/dbcon.php");
   if( $_POST["ide"]  ) {
      $id=$_POST["ide"];
      
      $email=$_SESSION['candidate'];
      $check_if_package="select * from resume WHERE email='$email'";
      $run_query=$dbcon->query($check_if_package);  

      if($run_query->num_rows==0){
      	echo "<script>alert('First submit resume to continue')</script>";
      	echo"<script>window.open('./submit-your-resume.php','_self')</script>";  
      }
      else{
       $check_if_package="select * from apply WHERE user='$email' AND job='$id'";
                        $run_query=$dbcon->query($check_if_package);  

                        if($run_query->num_rows>0)  
                        {  
                           echo "<script>alert('Already Applied')</script>";  
                            echo"<script>window.open('./job-details.php','_self')</script>";
                        }

                        else{
                         $insert_package="insert into apply (job, user) VALUE ('$id','$email')";  


                        if($dbcon->query($insert_package))  
                        {  
                            echo "<script>alert('Applied successfully')</script>";
                            echo"<script>window.open('./job-details.php','_self')</script>";
                        }    
                        }
                        }  
                         
      }
                    
     
                          
