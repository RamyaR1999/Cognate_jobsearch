<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>

<?php

if (isset($_POST['submit'])){

            $search=$_POST['Job_title'];
            // $role=$_POST['Roles'];
            // $offer=$_POST['Offerings'];
            // $locate=$_POST['Location'];


              $artist="SELECT * FROM jobs WHERE Job_title = '$search' "; 

              $search_artist=mysqli_query($connection, $artist); 

                 if(!$search_artist){
                    die("QUERY FAILED" . mysqli_error($connection));
                }
                $count=mysqli_num_rows($search_artist);
                if($count == 0){

               header ("Location: Available_jobs.php");
                       
            }else{
              while($row=mysqli_fetch_assoc($search_artist)){

                    $id=$row['id'];
                    $Job_title=$row['Job_title'];
            }

        }
        header ("Location: Available_jobs.php");
        } 

?>



<!doctype html>
<html class="no-js" lang="zxx">

<!--tittle-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGBS-About us </title>
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
<link rel="stylesheet" href="Page-1.css" media="screen">
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

    <section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-de5a">
     
  <div style="clear: both">
    <h1 class="text-avatar text-capitalize text-left text-monospace u-lightbox " style="inset-inline-start: initial color:red;font-size:60px;">transforming the world of work
</h1>
    <h1 class="text-right text-dark u-lightbox text-monospace " style="revert: right color:red;font-size:60px;">since 1960......</h1>
</div>

        <div class="u-expanded-width-xs u-form u-form-1">
          
    </section>
    
</div>
    
     
    <section class="u-align-center text-capitalize u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1"><h3>about us..</h3><span style="font-weight: 700;"></span>
        </p>
         <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <p class="u-text u-text-default u-text-palette-1-base u-text-2">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-1" href="Available_jobs.php" target="_blank">our history</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <p class="u-text u-text-default u-text-palette-1-base u-text-3">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-2" href="Available_jobs.php" target="_blank">our sponsorships</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <p class="u-text u-text-default u-text-palette-1-base u-text-4">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-3" href="Available_jobs.php" target="_blank">in news</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">our brand story</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">social responsibility</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">talk to us</a>
                </p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix text-capitalize u-custom-color-3 u-lightbox u-section-1" id="sec-de5a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-right u-text  u-text-right u-text-white u-text-1">welcome to cognate global..</h3>
        <p class="u-align-right u-text  u-text-right u-text-white u-text-6">Cognate Global is a IT Staffing <br>
                  And Managed resourcing provider <br>
                  With offices in Bangalore & USA <br>
                  Have strong capabilities to support<br>
                  European locations. We also do Onsite<br>
                  Staffing and Remote Staffing<br>
                  Solutions, Contract Staffing,<br>
                  Placement Solutions across multiple geographies.</p>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-pink e u-btn-1">learn more
              </a>
              <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
    </section>

    <section class="u-clearfix u-grey-5 u-lightbox text-capitalize u-section-1" id="sec-de5a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text u-text-left u-text-black u-text-1" >COGNATE BENEFITS</h3>
        <p class="u-align-left u-text u-text-left u-text-black u-text-6">Cognate offers range of Technology<br>
          Staffing and Consulting Services.<br>
          Consultative approach backed with<br>
          expertise across multiple technologies.<br>
          Flat Management Structure, prompt decision making<br>
          with flexible approach to help changing dynamics of the projects.</p>
      </div>
    </section>

    <section class="u-clearfix text-capitalize u-custom-color-3 u-lightbox u-section-1" id="sec-de5a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-right u-text u-text-right u-text-white u-text-1">come join our team</h3>
        <p class="u-align-right u-text u-text-right u-text-white u-text-6">are you someone who trives on a<br>
    challenge and loves to learn and envolve<br>
at work? we are always looking for <br>
aspiring talent who are passionate about <br>
our mission of tranforming lives one<br>
person at a home</p>
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-pink e u-btn-1">join us
              </a>
              <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
    </section>

    
    
    

    

    
    
 <?php include "footer.php"; ?>

<!-- Autocomplete Script -->
<script>
    // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
    window.addEventListener("DOMContentLoaded", function(){
      ac.attach({
        target: "demoB",
        data: "search.php",
        post: { type: "Name" },
        // OPTIONAL
        delay : 50,
        min : 1
      });
    });
</script>