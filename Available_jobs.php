<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>

<?php

if (isset($_POST['search'])){

    $search=$_POST['Job_title'];

    if($search !=""){

       $jobs="SELECT * FROM jobs WHERE Job_title = '$search' ";

       $search_jobs=mysqli_query($connection, $jobs); 

       if(!$search_jobs){
          die("QUERY FAILED" . mysqli_error($connection));
       }

       $count=mysqli_num_rows($search_jobs);
       if($count == 0){

       // header ("Location: Available_jobs.php");
                       
       }else{

          while($row=mysqli_fetch_assoc($search_jobs)){

            $id=$row['id'];
            $Job_title=$row['Job_title'];
            $Skills=$row['Skills'];
            $Location=$row['Location'];
            
            header ("Location: Available_jobs.php?jobs=$id ");

          }

        }
    }else{
        header ("Location: Available_jobs.php");
     }
} 

?>

<!doctype html>
<html class="no-js" lang="zxx">

<!--tittle-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGBS-find a job </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- image in title-->
    <link rel="shortcut icon" type="image/x-icon" href="image/cognate.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">


    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Page-2.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    <!-- Profile Icon -->
    <link rel="stylesheet" href="assets/css/shared/style.css">
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- pager -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <!-- Autocomplete -->
    <script type='text/javascript' src='js/autocomplete.js'></script>
    <link rel="stylesheet" type='text/css' href="css/autocomplete.css">

</head>

<body>
    <!--loading time image-->
    <div id="preloader-active">
       <div class="preloader d-flex align-items-center justify-content-center">
          <div class="preloader-inner position-relative">
             <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                  <img src="image/cognate.png" alt="">
                </div>
          </div>
       </div>
    </div>

<header>
   <div class="header-area header-transparrent">
      <div class="headder-top header-sticky">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-3 col-md-2">
                  <!--logoo-->
                  <div class="logo">
                    <a href="Home.php"><img src="image/cognate.png" alt="" width="150px"> </a>
                  </div>  
               </div>  
<div class="col-lg-9 col-md-9">
<div class="menu-wrapper">
  
     <!-- Main-menu -->
<div class="main-menu u-custom-menu u-nav-container">
   <nav class="d-none d-lg-block">
      <ul class="u-nav u-unstyled u-nav-1" id="navigation">
         <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php">Home</a>
         </li>
         <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Job_seeker.php">Job Seeker</a>

           <ul class="submenu">

             <li><a href="submit_cv.php">Submit CV</a></li><br>    
                <?php

                   if($_SESSION['User_type'] == 'Admin'){     

                ?>

             <li><a href="Jobseeker_profile.php">Search Candidates</a></li><br>
            
                <?php
                    
                   }

                ?>
            <li><a href="Available_jobs.php">Find Jobs</a></li>
            <!-- <li><a href="career_hub.php">Career Hub</a></li>
            <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
            <li><a href="security_advice.php">Security Advice</a></li> -->
             
           </ul>      
         </li>
         <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Services.php">Services</a>

           <ul class="submenu">
         
             <li><a href="submit_job.php">Create Job</a></li><br>
            <!--  <li><a href="request_callback.php">Request A Call Back</a></li>
             <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
             <li><a href="ourSolution.php">Our Solutions</a></li> -->
             <li><a href="Contact.php">Contact</a></li>
     
           </ul>

         </li>
         <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About_us.php">About</a>
         </li>
 
      </ul>
    </nav>
</div>        
<!--header button-->

<div class="header-btn d-none f-right d-lg-block">

  <?php

      if(isset($_SESSION['Email']) == $db_Email){

  ?> 
      <a href="Register-Member.php" class="btn head-btn1">Register</a>
  
      <a href="Member-Login.php" class="btn head-btn2">Login</a>


  <?php 
              
      }else{
              
  ?> 

    <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
      <a class="u-nav-link dropdown-toggle" id="UserDropdown" href="" data-toggle="dropdown" aria-expanded="false">

  <?php 

      if(isset($_SESSION['id'])){

        $db_id =  $_SESSION['id'];       
        
        $query="SELECT * FROM users WHERE id = '{$db_id}' ";
        $select_user_profile = mysqli_query($connection,$query);
      
        while($row=mysqli_fetch_array($select_user_profile)){

           $Image=  $row['Image'];
           $Login_Fullname=  $row['Fullname'];
        }

      }
   ?>


       <img class="" style="width:40px; border-radius: 100%;" src ='images/<?php echo $Image ?>' alt="">
       </a>
       <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <div class="dropdown-header text-center">
             <img class="" style="width:60px; border-radius: 100%;" src ='images/<?php echo $Image ?>' alt="">

                <p class="mb-1 mt-3 font-weight-semibold" style="color:darkblue;">
                   <?php
                      
                       if(isset($_SESSION['Fullname'])){
                          
                          echo $Login_Fullname; 
                         
                       }
                      
                   ?>
                      
                </p>     
          </div>
            <a class="dropdown-item" href="profile.php"><i class="dropdown-item-icon ti-dashboard"></i> My Profile</a>
            <a class="dropdown-item" href="Logout.php"><i class="dropdown-item-icon ti-power-off"></i> Sign Out</a>
       </div>
    </li>

<?php 
              
      }

?> 



</div>
</div>
</div>
               <!--mobile button--> 
               <div class="col-12">
                  <div class="mobile_menu d-block d-lg-none"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
<!-- Header End -->
</header>

<style>

  .head-btn1 {
    margin-right: 5px;
  }
  .btn {
    background: #fb246a;
    -moz-user-select: none;
    text-transform: capitalize;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    line-height: 0;
    margin-bottom: 0;
    padding: 27px 44px;
    border-radius: 0px;
    margin: 10px;
    cursor: pointer;
    transition: color 0.4s linear;
    position: relative;
    z-index: 1;
    border: 0;
    overflow: hidden;
    margin: 0;
  }

  .btn:not(:disabled):not(.disabled) {
    cursor: pointer;
  }
  .head-btn2 {
    background: none;
    border: 1px solid #fb246a;
    color: #fb246a;
  }

</style>

<style>    
  .u-form-horizontal .u-input {
    width: 300px;
    flex-grow: 1;
    flex-shrink: 1;

  }
</style>

<section class="u-clearfix u-section-2" id="sec-a8b6" style="height: 150px;">
   <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-form u-form-1">
         <form action="" autocomplete="off" method="POST" class="u-clearfix u-form-custom-backend u-form-horizontal u-form-spacing-2 u-inner-form" source="custom" name="form" style="padding: 10px;">
             <input type="hidden" id="siteId" name="siteId" value="170795794">
             <input type="hidden" id="pageId" name="pageId" value="206021425">
             <div class="u-form-group u-form-name">
                <label for="name-9c33" class="u-form-control-hidden u-label"></label>
                <input type="text" placeholder="Search Job title" id="Jobtitle" name="Job_title" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
             </div>
             <div class="u-align-left u-form-group u-form-submit">
                <a href="" class="btn head-btn2" style="align-left;padding: 20px;">Search</a>
                <input type="submit" name="search" value="submit" class="u-form-control-hidden">
             </div>
         </form>
      </div>
   </div>
</section>
<div class="card">
   <section class="u-clearfix u-section-3" id="sec-41fd" style="align-left">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">


<?php

  if(isset($_GET['jobs'])){

  $id = $_GET['jobs'];    
        
     $query="SELECT * FROM jobs WHERE id = '{$id}' ";
     $select_user_profile = mysqli_query($connection,$query);

      
     while($row=mysqli_fetch_array($select_user_profile)){

             $the_id = $row['id'];
             $Fullname=  $row['Fullname'];
             $Email    = $row['Email'];
             $Phone=  $row['Phone'];
             $Job_type=  $row['Job_type'];
             $Company_name=  $row['Company_name'];
             $Location =  $row['Location'];
             $Service = $row['Service'];
             $Job_title = $row['Job_title'];
             $Sector = $row['Sector'];
             $Skills = $row['Skills'];
             $Job_description = $row['Job_description'];
             $Job_time = $row['Job_time'];
             $Job_posted = $row['Job_posted'];
?>

    <div class="u-container-style u-list-item u-repeater-item" style="align-left">
              <div class="u-container-layout u-similar-container u-container-layout-1">
               <br><br>
                <p class="u-text u-text-default u-text-1">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="Job_details.php?Job_details=<?php echo $the_id ?>&<?php echo $Job_title ?>" target="_blank"><?php echo $Job_title; ?></a>
                </p>
                <p class="u-text u-text-default u-text-2"><?php echo $Job_posted ?></p>
                <p class="u-text u-text-default u-text-3"><?php echo $Location ?></p>
                <!-- <p class="u-text u-text-4"> <?php echo $Job_description; ?> ....</p> -->
                <p class="u-text u-text-4"><textarea class="textarea" rows="8" cols="120" style="border: none;"><?php echo $Job_description; ?></textarea></p><br>
                <h2 class="u-align-left u-text u-text-custom-color-1 u-text-11">skills</h2>
                <p class="u-align-left u-text u-text-11"><?php echo $Skills; ?></p>
                <br>
                <div class="container" style="padding-left: 101px;">
                    <a href="Apply_Job.php?Job_details=<?php echo $the_id ?>&<?php echo $Job_title ?>" class="btn head-btn1" style="align-right" target="_blank">Apply Now</a>
                </div>
              </div>
            </div>

  <?php          
     }
  }else{

   $per_page=5;  
                
    if(isset($_GET['page'])){
        
        $page = $_GET['page'];
        
    } else {
        
        $page ="";
        
    }
  
    if($page =="" || $page ==1){
        
        $page_1=0;
        
    } else {
        
        $page_1=($page*$per_page)-$per_page;
        
    }

  $post_query_count="SELECT * FROM jobs";
  $find_count=mysqli_query($connection,$post_query_count);
  $count=mysqli_num_rows($find_count);
  $count=ceil($count/$per_page);


  $query="SELECT * FROM jobs ORDER BY id DESC LIMIT $page_1, $per_page";
  $Jobs_list=mysqli_query($connection,$query);

  while($row=mysqli_fetch_array($Jobs_list)){

     $the_id = $row['id'];
     $Job_title = $row['Job_title'];
     $Company_name = $row['Company_name'];
     $Location = $row['Location'];
     $Job_posted = $row['Job_posted'];
     $Job_time = $row['Job_time'];
     $Job_description = $row['Job_description'];
     // $Job_description = substr($row['Job_description'],0,500);


?>

    
          <div class="u-container-style u-list-item u-repeater-item" style="align-left">
              <div class="u-container-layout u-similar-container u-container-layout-1" style="align-left">
                <div class="card" style="align-left">
                <br>
                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="Job_details.php?Job_details=<?php echo $the_id ?>&<?php echo $Job_title ?>" target="_blank"><?php echo $Job_title; ?></a>

                <p class="u-text u-text-default u-text-2"><?php echo $Job_posted ?></p>
                <p class="u-text u-text-default u-text-2"><?php echo $Location ?></p>
                <!-- <p class="u-text u-text-2"> <?php //echo str_replace ("\n", " ", stripslashes ($Job_description)); ?> ....</p> -->
                <p class="u-text u-text-2"><textarea class="textarea" rows="8" cols="120" style="border: none;"><?php echo $Job_description; ?></textarea></p>
              </div>
          </div>
        </div>
        <br>
        <div class="container" style="align-right">
        <a href="Apply_Job.php?Job_details=<?php echo $the_id ?>&<?php echo $Job_title ?>" class="btn head-btn1" target="_blank">Apply Now</a>
        <?php

        if($_SESSION['User_type'] == 'Admin'){

         echo "<a class='btn head-btn1' onClick=\"javascript:return confirm('Are you Sure you want to delete $Job_title Job');\"href='Available_jobs.php?delete={$the_id}'>Delete this job</a>";

         }

        ?>
       </div>

<?php

  }
  }
  
?>

<?php

     if(isset($_GET['delete'])){
         $the_id=$_GET['delete'];
         $query="DELETE FROM jobs WHERE id={$the_id}";
         $delete_query=mysqli_query($connection,$query);
         header("Location:Available_jobs.php");
     }
?>

          </div>
    </section>
</div>

<ul class="pager">

<?php
                 
              
              for($i=1; $i<=$count; $i++){
                  
                  if($i == $page){
                  
                    echo "<li><a class='active_link' href='Available_jobs.php?page={$i}'>{$i}</a></li>";
                     
                } else {
                      
                    echo "<li><a href='Available_jobs.php?page={$i}'>{$i}</a></li>";    
                      
                  }
                  
              }


          ?>
</ul>

 <?php include "footer.php"; ?>


<!-- Autocomplete Script -->
<script>
    // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
    window.addEventListener("DOMContentLoaded", function(){
      ac.attach({
        target: "Jobtitle",
        data: "search.php",
        post: { type: "Name" },
        // OPTIONAL
        delay : 50,
        min : 1
      });
    });
</script>