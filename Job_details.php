<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>



<!doctype html>
<html class="no-js" lang="zxx">

<!--tittle-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGBS-Home </title>
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
<link rel="stylesheet" href="Contact-us.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
 <!-- Profile Icon -->

 <link rel="stylesheet" href="assets/css/shared/style.css">
 <script src="assets/vendors/js/vendor.bundle.base.js"></script>

 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
<a href="job_seeker.php"><img src="image/cognate.png" alt="" width="150px"> </a>
</div>  
</div>  
<div class="col-lg-9 col-md-9">
<div class="menu-wrapper">
     <!-- Main-menu -->
     <div class="main-menu u-custom-menu u-nav-container">
  <nav class="d-none d-lg-block">
  <ul class="u-nav u-unstyled u-nav-1" id="navigation">
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Job_seeker.php">Job Seeker</a>
   <ul class="submenu">

    <li><a href="Register-member.php">Submit Your Resume</a></li>    
    <li><a href="Jobseeker_profile.php">Job Seeker Profile</a></li>
    <li><a href="Available_jobs.php">Find A Jobs</a></li>
   <!--  <li><a href="career_hub.php">Career Hub</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="security_advice.php">Security Advice</a></li> -->
     
  </ul>      
</li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="employer.php">employers</a>

  <ul class="submenu">
         
    <li><a href="submit_job.php">Submit A job</a></li>
   <!--  <li><a href="request_callback.php">Request A Call Back</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="ourSolution.php">Our Solutions</a></li> -->
    <li><a href="Contact.php">Contact</a></li>
     
  </ul>

</li>
      <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About_Us.php">About</a>


</li>
     <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact_Us.php">Contact</a>

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
<div class="main-menu">
  <nav class="d-none d-lg-block">   
    <ul id="navigation">
        <li>
          <a class="u-nav-link dropdown-toggle" id="UserDropdown" href="" data-toggle="dropdown" aria-expanded="false">
              <img class="" style="width:40px; border-radius: 100%;" src ='images/<?php echo $_SESSION['Image'] ?>' alt=""></a>
          <ul class="submenu">
                <div class="dropdown-header text-center">
  <img class="" style="width:60px; border-radius: 100%;" src ='images/<?php echo $_SESSION['Image'] ?>' alt="">

                  <p class="mb-1 mt-3 font-weight-semibold" style="color:darkblue;">
                      <?php
                      
                      if(isset($_SESSION['Firstname'])){
                          
                        echo $_SESSION['Firstname']; 
                         
                      }
                      
                      ?>
                      
                    </p>     
                </div>
            <li><a href="profile.php"><i class="dropdown-item-icon ti-dashboard"></i> My Profile</a></li>
            <li><a href="Logout.php"><i class="dropdown-item-icon ti-power-off"></i> Sign Out</a></li>
          </ul>
          </li>
    </ul>  
  </nav>
</div>

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


    <section class="u-clearfix u-custom-color-2 u-section-1" id="sec-419e">
      <div class="u-clearfix u-sheet u-sheet-1">

<?php

  if(isset($_GET['Job_details'])){

  $the_id = $_GET['Job_details'];

  $query="SELECT * FROM Jobs WHERE id='$the_id' ";
  $Jobs_list=mysqli_query($connection,$query);

  while($row=mysqli_fetch_array($Jobs_list)){

     $id = $row['id'];
     $Logo = $row['Logo'];
     $Job_title = $row['Job_title'];
     $Company_name = $row['Company_name'];
     $Branch = $row['Branch'];
     $Job_posted = $row['Job_posted'];
     $Job_time = $row['Job_time'];
     $Job_specification = $row['Job_specification'];
     $Service = $row['Service'];


   }
 }
?>

        <h1 class="u-text u-text-1"><?php echo $Job_title; ?></h1>
        <p class="u-text u-text-default u-text-palette-1-dark-1 u-text-2"><?php echo $Branch; ?></p>
        <a href="Apply_Job.php?Job_details=<?php echo $the_id ?>&<?php echo $Job_title ?>" class="u-border-2 u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-3 u-text-active-palette-1-base u-text-body-alt-color u-text-hover-palette-1-base u-btn-1">apply now</a>
        <p class="u-text u-text-3"><?php echo $Job_posted; ?></p>
        <p class="u-text u-text-4"><?php echo $Service; ?></p>

      </div>
    </section>
    
    <section class="u-clearfix u-section-2" id="sec-8459">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <p class="u-text u-text-1">posted :&nbsp; <?php echo $Job_posted; ?></p>
                <p class="u-text u-text-2">location : <?php echo $Branch; ?></p>
                <p class="u-text u-text-3">function :</p>
                <p class="u-text u-text-default-xs u-text-4">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-1" href="">Information Technology</a>
                </p>
                <p class="u-text u-text-5">position type :</p>
                <p class="u-text u-text-default-xs u-text-6">
                  <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href=""><?php echo $Service; ?></a>
                </p>
                <p class="u-text u-text-7">experience : 5-8</p>
                <a href="Apply_Job.php?Job_details=<?php echo $id ?>&<?php echo $Job_title ?>" class="u-active-palette-1-base u-border-2 u-border-active-palette-1-base u-border-hover-white u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-none u-radius-3 u-text-active-white u-text-hover-white u-text-palette-1-base u-btn-3">apply now</a>
              </div>
            </div>
          </div>
        </div>
        <div class="u-list u-list-2">
          <div class="u-repeater u-repeater-2">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h2 class="u-align-left u-text u-text-custom-color-1 u-text-8">Job description</h2>
                <h2 class="u-align-left u-text u-text-custom-color-1 u-text-9"><?php echo $Job_title; ?></h2>
                <p class="u-align-left u-text u-text-10"> <?php echo $Job_specification; ?></p>
                <h2 class="u-align-left u-text u-text-custom-color-1 u-text-11">skills</h2>
                <p class="u-align-left u-text u-text-12">Angular, Dot net, WCF, MVC</p>
                <h2 class="u-align-left u-text u-text-custom-color-1 u-text-13">qualification</h2>
                <p class="u-align-left u-text u-text-14">B.E/B.Tech</p>
              </div>
            </div>
          </div>
        </div>


      </div>
    </section>
    
    
 <?php include "footer.php"; ?>