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
       <div style="background-image: url('images/jobs1.jpg');">
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
                                <span>2017</span>
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

    <section class="u-clearfix u-custom-color-3 u-lightbox u-section-1" id="sec-de5a">
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


   <!--   <footer class="u-clearfix u-footer" id="sec-ff43"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-12fb"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-12fb"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a27c"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a27c"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7849"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7849"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fb82"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-fb82"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
      </div></footer>
    <section class="u-backlink u-clearfix">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>
    
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>

  </body>
</html> -->


<?php include "footer.php"; ?>

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
