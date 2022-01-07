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
<li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
    <a class="u-nav-link dropdown-toggle" id="UserDropdown" href="" data-toggle="dropdown" aria-expanded="false">
        <img class="" style="width:40px; border-radius: 100%;" src ='images/<?php echo $_SESSION['Image'] ?>' alt="">
    </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
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
    /*display: flex;*/
    width: 421px;
     flex-grow: 1;
    flex-shrink: 1;
    /*vertical-align: middle;
    min-width: 0px;*/
}

.u-custom-color-2, .u-body.u-custom-color-2, .u-container-style.u-custom-color-2:before, .u-container-layout.u-custom-color-2:before, .u-table-alt-custom-color-2 tr:nth-child(even) {
    color: #ff6258;
}
</style>


<section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-de5a">
       <div style="background-color:  #71797E;">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-center u-text u-text-default u-text-white u-text-1" data-animation-name="zoomIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Find Your Job</h3>
        <div class="u-expanded-width-xs u-form u-form-1">
          <form action="" autocomplete="off" method="POST" class="u-clearfix u-form-custom-backend u-form-horizontal u-form-spacing-2 u-inner-form" style="padding: 15px;" source="custom" redirect="true">
           <div class="u-form-group u-form-name">
              <label for="name-ef64" class="u-form-control-hidden u-label"></label>
              <input type="text" placeholder="Enter job title" id="jobtitle" name="Job_title" class="u-input u-input-rectangle u-radius-3 u-white u-input-1">
              <!-- <input type="text" name="Name" id="demoB" placeholder="Enter job title" class="u-form-control"> -->
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-ef64" class="u-form-control-hidden u-label"></label>
              <input type="text" placeholder="Pincode" id="email-ef64" name="pincode" class="u-input u-input-rectangle u-radius-3 u-white u-input-2">
            </div>
            <div class="u-form-group u-form-submit">
              <a href="Available_jobs.php" class="btn head-btn1 " style="padding: 12px"><span class="u-icon u-text-palette-1-base u-icon-1"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path d="M496.128,220.361l-160-144.032c-19.712-17.728-50.08-16.192-67.808,3.584c-17.728,19.68-16.128,50.048,3.584,67.776    l66.976,60.32H48c-26.528,0-48,21.472-48,48s21.472,48,48,48h290.944l-67.072,60.32c-19.712,17.76-21.312,48.096-3.584,67.776    c9.504,10.528,22.592,15.904,35.712,15.904c11.456,0,22.944-4.064,32.096-12.32l160-143.968    c10.112-9.088,15.904-22.08,15.904-35.68C512,242.441,506.208,229.449,496.128,220.361z"></path>
<!-- </g> -->
</g></svg><img></span>&nbsp;<br>
              </a>
              <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">#FormSendSuccess</div>
            <div class="u-form-send-error u-form-send-message">#FormSendError</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </div>

    




    </section>




<section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-de5a">

<style>
.carousel-item {
height: 100vh;
min-height: 450px;
background: no-repeat center center scroll;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
}
  </style>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner" role="listbox">
  <!-- Slide One - Set the background image for this slide in the line below -->
  <div class="carousel-item active" style="background-image: url('images/jobseekernew1.jpg') " >
    <div class="carousel-caption text-monospace d-none d-md-block">
      <h2 class="display-4  ">WELCOME!</h2>
      <p class="lead text-white">Find The Best Solutions<br>For Your Business</p>
    </div>
  </div>
  <!-- Slide Two - Set the background image for this slide in the line below -->
  <div class="carousel-item" style="background-image: url('images/jobseekernew2.jpg')">
    <div class="carousel-caption d-none d-md-block">
      <h2 class="display-4 text-black">Make Your Dream</h2>
      <p class="lead">We Make IT Happen<br>A Better Life, A Better World </p>
    </div>
  </div>
  <!-- Slide Three - Set the background image for this slide in the line below -->
  <div class="carousel-item" style="background-image: url('images/jobseekernew3.jpg')">
    <div class="carousel-caption d-none d-md-block">
      <h2 class="display-4 text-black">Start Your Career</h2>
      <p class="lead">Success Doesn't Come And Find You<br>
      You Can Go Out and Get In .</p>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
<a class="carousel-control-next" href="" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>




</section>







    
    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1">Job Categories<span style="font-weight: 700;"></span>
        </p>
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <p class="u-text u-text-default u-text-palette-1-base u-text-2">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-1" href="Available_jobs.php" target="_blank">Information technology</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <p class="u-text u-text-default u-text-palette-1-base u-text-3">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-2" href="Available_jobs.php" target="_blank">banking &amp; finance</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <p class="u-text u-text-default u-text-palette-1-base u-text-4">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-3" href="Available_jobs.php" target="_blank">Manufacturing</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">See all jobs</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>




    </section>
  
  
    <section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-de5a">

<style>
.carousel-item {
height: 100vh;
min-height: 350px;
background: center center scroll;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
transition: 0.6s ease-in-out left;
}

  </style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner" role="listbox">
  <!-- Slide One - Set the background image for this slide in the line below -->
  <div class="carousel-item active" style="background-image: url('images/jobseekernew11.jpg') ; ">
    <div class="carousel-caption text-monospace d-none d-md-block">
      <h2 class="display-4 text-capitalize  ">find right talent.</h2>
      <p class="lead text-white">Hiring candidates for a company is a great responsibility.
         The future of the company depends entirely on its employees. 
         This is why the greatest challenge a recruiter faces is how to identify the right talent. 
         It is vital to select the perfect candidate for the required position for various reasons.
          When an employer fails to recognize the right talent, they are implicating a major loss to themselves. 
          Missing out on the perfect candidate with the right desired talent is an irreversible loss.
         To help the recruiters in identifying the right talent, here are a few theories by experts.</p>
    </div>
  </div>
  <!-- Slide Two - Set the background image for this slide in the line below -->
  <div class="carousel-item " style="background-image: url('images/jobseekerA.jpg')">
    <div class="carousel-caption d-none d-md-block">
      <h2 class="display-4 ">who we are..</h2>
      <p class="lead text-white">We are one of the largest global HR services firms.
We combine our passion for people with intelligent technology to
help organizations and talent convert potential into performance.
Moving them forward. human forward. </p>
    </div>
  </div>
  <!-- Slide Three - Set the background image for this slide in the line below -->
  <div class="carousel-item" style="background-image: url('images/jobSeeker01.jpg')">
    <div class="carousel-caption d-none d-md-block">
      <h2 class="display-4 text-black" > Get your job</h2>
      <p class="lead">We are still masters of our fate. We are still captains of our souls.</p>
    </div>
  </div>
</div>
<a class="carousel-control-prev" href="" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
<a class="carousel-control-next" href="" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>




</section>






  
  
  
    
<br></br>

   
    <div class="support-company-area support-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>what we doing..</span>
                                <h2 style="color:Crimson;font-size:40px;">Cognate Global Business Solution</h2>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">We are one of the largest global HR services firms.<br> We combine our passion for people with intelligent technology to<br> help organizations and talent convert potential into performance.<br> Moving them forward. human forward.</p>
                                <p>Hiring candidates for a company is a great responsibility. The future of the company depends entirely on its employees. This is why the greatest challenge a recruiter faces is how to identify the right talent. It is vital to select the perfect candidate for the required position for various reasons.

When an employer fails to recognize the right talent, they are implicating a major loss to themselves. Missing out on the perfect candidate with the right desired talent is an irreversible loss. To help the recruiters in identifying the right talent, here are a few theories by experts.</p>


                                <a href="Register_Member.php" class="btn post-btn">Post a job</a>


                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="assets/img/service/support-img.jpg" alt="">
                            <div class="support-img-cap text-center">
                                <p>Since</p>
                                <span>2018</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<br></br>




   <!-- <section class="u-clearfix u-custom-color-1 u-lightbox u-section-1" id="sec-de5a">
      <div style="background-image: url('images/workforce-v2.png');">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text u-text-left u-text-white u-text-1">Join Cognate..</h3>
        <p class="u-align-left u-text u-text-left u-text-white u-text-6">Here's a secret – we love working here!<br> Now that you know, find out for yourself.</p>
       <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="">learn more</a>
-->
       <!--  <img src="images/support funcion.jpg" class="" alt="" width="404" height="336">  -->
     
   <!-- <ul class="pager">-->

<!--<li><a class="active_link" href="Job_seeker.php?page=1">1</a></li><li><a href="Job_seeker.php?page=2">2</a></li>
<li><a href="Job_seeker.php?page=2">3</a></li></ul> -->
 <!--</div>
    
    </section>-->

    <section class="u-clearfix u-custom-color-3 u-lightbox u-section-1" id="sec-de5a" style="background-color: #71797E">
      <!-- <div style="background-image: url('images/imges.jpg');"> -->
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text u-text-left u-text-white u-text-1" data-animation-name="zoomIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Find a location.</h3>
        <p class="u-align-left u-text u-text-left u-text-white u-text-2">Drop in and say "hi" at one of our branch locations.</p><br>
        <div class="u-expanded-width-xs u-form u-form-1">
          <form action="" autocomplete="off" method="POST" class="u-clearfix u-form-custom-backend u-form-horizontal u-form-spacing-2 u-inner-form" style="padding: 15px;" source="custom" redirect="true">
           <div class="u-form-group u-form-name">
              <label for="name-ef64" class="u-form-control-hidden u-label"></label>
             
                         
              <input type="text" placeholder="postcode /city" style="width: 2em; height: 5em;"id=""  minlength="100" maxlength="250" name="Job_title" class="u-input u-input-rectangle u-radius-3 u-white u-input-2">
             <!--  <input name="Name" id="demoB" type="text" placeholder="Enter job title" class="form-control"> -->
            </div>
            <br>
            <div class="u-form-group u-form-submit">
              <a href="" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"><span class="u-icon u-text-palette-1-base u-icon-1"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 2em; height: 3.5em;"><g><path d="M496.128,220.361l-160-144.032c-19.712-17.728-50.08-16.192-67.808,3.584c-17.728,19.68-16.128,50.048,3.584,67.776    l66.976,60.32H48c-26.528,0-48,21.472-48,48s21.472,48,48,48h290.944l-67.072,60.32c-19.712,17.76-21.312,48.096-3.584,67.776    c9.504,10.528,22.592,15.904,35.712,15.904c11.456,0,22.944-4.064,32.096-12.32l160-143.968    c10.112-9.088,15.904-22.08,15.904-35.68C512,242.441,506.208,229.449,496.128,220.361z"></path>
<!-- </g> -->
</g></svg><img></span>&nbsp;<br>
              </a>
              <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">#FormSendSuccess</div>
            <div class="u-form-send-error u-form-send-message">#FormSendError</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    <!-- </div> -->
    </section>

<!-- Autocomplete Script -->
<script>
    // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
    window.addEventListener("DOMContentLoaded", function(){
      ac.attach({
        target: "jobtitle",
        data: "search.php",
        post: { type: "Name" },
        // OPTIONAL
        delay : 50,
        min : 1
      });
    });
</script>

<?php include "footer.php"; ?>