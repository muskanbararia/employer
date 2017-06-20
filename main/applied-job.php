 
<?php include "head.php" ?>
<?php if (!isset($_SESSION['candidate'])){
	echo"<script>window.open('./index.php','_self')</script>";
}
?>
<body class="home page-template page-template-page-templates page-template-jobify page-template-page-templatesjobify-php page page-id-25 single-listing-style-top single-resume-style-top wp-job-manager-categories-enabled wp-resume-manager-categories-enabled wp-job-manager wp-job-manager-resumes wp-job-manager-wc-paid-listings wp-job-manager-bookmarks wp-job-manager-tags ninjaforms-contact-resume-form wp-job-manager-contact-listing ninjaforms-contact-job-form woocommerce testimonials jetpack custom-font fixed-header jobify-child-premium">

	<div id="page" class="hfeed site">

		<?php include "header-main.php"  ?>

		<div id="main" class="site-main">

    <div id="primary" role="main">
<section id="jobify_widget_jobs_spotlight-2" class="widget widget--home jobify_widget_jobs_spotlight widget--home-job-spotlights">
			<div class="container">
                            
        
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<div style="background-color: white;">
    <table id="example" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Category</th>
                    <th>Detail</th>
                    <th>Skill Set</th>
                    
                    <th>Experience</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Category</th>
                    <th>Detail</th>
                    <th>Skill Set</th>
                    
                    <th>Experience</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
            <?php
            include("database/dbcon.php");
            $email=$_SESSION['employer'];
             $view_users_query="SELECT * from job WHERE email='$email'";
         
         
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  $id=$row[0];
            $title      =   $row[4];
            $loc        =   $row[5]; 
            $cat   =   $row[7];
            $det    =   $row[8];
            $skill    =   $row[9];
            $exp    =   $row[10];
            $app    =   $row[11];

      
       
            ?>
                <tr>
                    <td><?php echo $title; ?></td>
                    <td><?php echo $loc; ?></td>
                    <td><?php echo $cat; ?></td>
                    <td><?php echo $det; ?></td>
                    <td><?php echo $skill; ?></td>
                    <td><?php echo $exp; ?></td>
                    <td><?php echo $app; ?></td>
<td><form action="emp-index.php" method="POST">
                    <input type="hidden" name="ide" value="<?=$id?>">
  <!--<input type="submit"  style="background-color: #4CAF50;
    border: none;
    color: white;
    padding: 8px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;" name="edit" value="Edit" > -->

  <input type="submit" style="background-color: #f44336;;
    border: none;
    color: white;
    padding: 8px 12px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;" name="del" value="Delete" >
</form></td>
                </tr>
                <?php } ?>
                
            </tbody>
        </table>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
</div>
</div>
</section>
    </div><!-- #primary -->


		</div><!-- #main -->

<?php include "footer.php" ?>
<?php
 include("database/dbcon.php");
        if (isset($_POST['del']) ){
            $id=$_POST['ide'];
             $view_users_query="DELETE FROM job WHERE id=$id ";
        
         
       // $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.  
        if($dbcon->query($view_users_query))//while look to fetch the result and store in a array $row.  
        {  
            echo "<script>alert('Done')</script>";
            echo "<script>window.open('emp-index.php','_self')</script>";  
        }
        else{
            echo "<script>alert('Error')</script>"; 
        }
    }
    if (isset($_POST['edit']) ){
            $id=$_POST['ide'];
            $_SESSION['id']=$id;
            echo "<script>window.open('emp-edit.php','_self')</script>";
            
    }
?>