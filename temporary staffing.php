<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>temporary staffing</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
 <!-- Profile Icon -->
 <link rel="stylesheet" href="assets/css/shared/style.css">

 <!-- Dropdown text header -->
      <style>
      .dropdown {
        position: relative;
        display: inline-block;
        cursor: pointer;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        border-radius: 3%;
        padding: 12px 16px;
        z-index: 1;
      }

      .dropdown:hover .dropdown-content {
        display: block;

      }
      </style>  
  
<!-- Autocomplete -->
<script type='text/javascript' src='js/autocomplete.js'></script>
<link rel="stylesheet" type='text/css' href="css/autocomplete.css"> 


    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/default-logo.png",
    "sameAs": []
}</script>

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class=" u-clearfix u-header u-section-row-container" id="sec-6baa"><div class="u-section-rows">
        <div class="u-clearfix u-custom-color-2 u-section-row u-section-row-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-a8af">
          <div class="u-clearfix u-sheet u-valign-middle-xl u-valign-middle-xs u-sheet-1">
            <a href="Job_seeker.php" class="u-image u-logo u-image-1">
              <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
              <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" href="#">
                  <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
                </a>
              </div>
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
<li class="u-nav-item dropdown"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 6px 0px;">Job Seeker</a>
  <div class="dropdown-content">
      <a class="u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-nav-link" href="Job_seeker.php" style="color: grey;">Find your job</a>
      <a class="u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-nav-link" href="Jobseeker_profile.php" style="color: grey;">Job seekers profile</a>
  </div>
</li>
<li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90 active" href="employer.php" style="padding: 6px 0px;">Employers</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="About_us.php" style="padding: 6px 0px;">About us</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Contact_us.php" style="padding: 6px 0px;">Contact us</a></li>

  <?php

    if(isset($_SESSION['Email']) == $db_Email){

  ?> 


<li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Member-Login.php" style="padding: 6px 0px;">Login</a></li>

  <?php 
              
      }else{
              
    ?> 



        <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="u-nav-link fa fa-sort-down" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="" style="width:40px; border-radius: 100%;" src ='images/<?php echo $_SESSION['Image'] ?>' alt=""></a>
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
                <a class="dropdown-item" href="profile.php">My Profile <span class="badge badge-pill badge-danger"></span><i class="dropdown-item-icon ti-dashboard"></i></a>
                 
                <a class="dropdown-item"href="Logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              
              </div>
          </li>

<?php 
              
      }

?> 

<!-- <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Profile.html" style="padding: 6px 0px;">Profile</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Page-1.php" style="padding: 6px 0px;">Page 1</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Page-2.html" style="padding: 6px 0px;">Page 2</a>
</li> -->


</ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
<li class="u-nav-item dropdown"><a class="u-button-style u-nav-link" style="padding: 6px 0px;">Job Seeker</a>
      <div class="dropdown-content">
         <a class="u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-nav-link" href="Job_seeker.php" style="color: grey;">Find your job</a>
         <a class="u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-nav-link" href="Jobseeker_profile.php" style="color: grey;">Job seekers profile</a>
      </div>
</li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="employer.php" style="padding: 6px 0px;">Employers</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="About_us.php" style="padding: 6px 0px;">About us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact_us.php" style="padding: 6px 0px;">Contact us</a></li>

<?php

    if(isset($_SESSION['Email']) == $db_Email){

  ?> 

<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.php" style="padding: 6px 0px;">Login</a></li>

<?php 
              
    }
              
  ?> 

<!-- <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Profile.html" style="padding: 6px 0px;">Profile</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.html" style="padding: 6px 0px;">Page 1</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-2.html" style="padding: 6px 0px;">Page 2</a></li> -->


</ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
          </div> 
        </div>

        <div class="u-custom-color-2 u-section-row u-section-row-2" id="sec-56e4">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-2">
            <div class="u-list u-list-1">
              <div class="u-repeater u-repeater-1"> 
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                    <p class="u-text u-text-default u-text-2">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-2" href="submit_job.php">submit a job</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <p class="u-text u-text-default u-text-1">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-1" href="request_callback.php">request a call back</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-4">
                    <p class="u-text u-text-default u-text-4">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-body-color u-text-hover-black u-btn-4 active" href="areas_of_expertise.php">areas of expertise</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-3">
                    <p class="u-text u-text-default u-text-3">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-3" href="ourSolution.php">our solutions</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-5">
                    <p class="u-text u-text-default u-text-5">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-5" href="Contact.php">contact</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div></header>
    
    <section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-de5a">

      <div class="u-clearfix u-sheet u-sheet-1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <h1 class="u-align-left u-text u-text-default u-text-white u-text-2">Temporary </h1>
          <h1 class="u-align-center text-dark u-text-white u-text u-text-right u-text-2">staffing.</h1>
          </div>
    
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
    <img src="images/Cognate1.gif" alt="" width="700" height="500" >
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
       <p class="u-text u-text-left u-text-1" style="color:dark;font-size:60px;">Introduction..<span style="font-weight: 700;"></span></p>
        <div class="u-text u-text-left u-text-1">
        Companies worldwide are transforming their staffing practices to meet<br>
        the evolving challenges of today’s global economy. HR leaders and hiring<br>
         managers are optimizing talent acquisition using temporary staffing solutions.<br>

<br>
In 2020, 76% of human capital leaders used temporary staffing solutions to build a more resilient workforce.<br>
 Business leaders are discovering that the ideal staffing strategy includes<br>
  a balance of permanent hires and temporary hires. Working with an HR services <br>
  firm to optimize use of internal resources can help.<br>
        </p>
</div>
           
<h3 class="u-align-left u-text u-text-left u-text-black u-text-1">Connecting you to the<br> right talent.</h3><br>
<a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-black u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: black; border-radius: 15px; color: black;" href="">learn more</a>
             </div>
    </section>
    <img src="images/temporary-staffing.jpg" alt="" width="1500" height="500" >

     <section class="u-clearfix  u-lightbox u-section-1" id="sec-de5a">
      
      <div class="u-clearfix u-sheet u-sheet-1">

    

        <h3 class="u-align-center u-text u-text-left u-text-dark u-text-1">your search ends, a career begins<br> </h3>
        <img src="images/hr004.gif" alt="" width="700" height="" >
       
        <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 30px; background-color: dark; border-color: white; border-radius: 5px; color: white;" href="Contact_us.php" target="_blank">Contact us
              </a>

      </div>
    </div>
    </section>
    <!-- <img src="images/hr3.jpg" alt="" width="1500" height="450" > -->
   
   <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:60px;"> what is the temporary staffing</h3>
        <div class="u-text u-text-left u-text-1"> Temporary staffing or flexible staffing is a strategy
         by which companies employ contingent workers.<br> 
         HR teams and other departments use a contingent 
         workforce to meet evolving business and operational challenges,and as an alternative to hiring permanent employees.
              <br>
              <img src="images/temporary staffing 1.jpg" alt="" class="center" width='700' >

<br>              One of the biggest prejudices about this job is that you have to just submit 
 a position to online job boards and waiting for the applications 
  to roll in. Not every A-level candidate is actively looking for a job,
   so recruiter should also approach people who already have a job.<br>
    Further, they have to identify, recruit, interview, hire, 
     and retain the best candidates available in the marketplace.<br>
     <br>
      </p>
        
      <!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="">learn more</a>
  -->        <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
     
    </section>
    
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
      <img src="images/hr3.png" alt="" class="center" width='700' >
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:60px;"> recruitment process importants..</h3>
        <div class="u-text u-text-left u-text-1"> When you look at the growth of any company, then most of us look at the numbers that the company produces, but we forget the most important factor behind those numbers and that is the company’s staff.<br>
        <br>
The employees work hard in order to achieve those numbers and how successful your company will depend on how you look at recruitment.<br>

The companies which want to grow fast but steady knows that it can only be achieved when they have the perfect combination of employees and for that recruitment is of utmost importance.<br>

Whether your candidate will turn out to be an asset for the company or a liability, all depends on how you recruit people.<br>
<br>
It is a costly affair, so when you are delving with recruitment you must be very careful about it because one wrong move will create a big hole in your pocket. If the candidates whom you have selected starts performing well, then there will be no issue at all, instead, it will come out as a good investment overall.<br>
<br>
In order to carry out the different processes that are involved in business, you will require people who will be managing different responsibilities.<br>
<br>
In operations, HR and marketing you need people who have the skill set to perform the job efficiently and for that, it becomes a necessity on how recruitment is done in a perfect manner so that the right kind of candidates get selected for the job positions.<br>
     <br>
      So, let’s dig deeper into the recruitment process.<br>
       This steps will help you understand why you have to go through
        all these interview and tests when applying for a job.</p>
        
      <!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="">learn more</a>
  -->        <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
      
    </section>
    

    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:40px;"> Step 1: Clear job description</h3>
        <div class="u-text u-text-left u-text-1">Whether somebody just left a job and a company needs a replacement,
           or they want to open a new job position, a recruiter has 
           to know what the company really needs from a candidate.
            That means that a recruiter has to prepare the complete job description 
            that includes both hard skills and soft skills. Nevertheless, they can’t 
            just copy the description that was made before the last employee left.
             IT recruitment agency has to update it and put all responsibilities needed for the job.
           A clear job description will enable candidates to understand
            what is required of them and motivate them to apply.</p>
        
       <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="">learn more</a>
  -->     <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
      <img src="images/hr03.jpg" alt="" class="center" width='700' >
    </section>
    
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:40px;"> Step 2: Planning the process</h3>
        <div class="u-text u-text-left u-text-1">Once a recruiter is done with identifying the hiring needs,
           they plan the process – how many people will they call, which communication channels will be used,
            how will they approach to people, etc. Preparation is the key to success and it will make recruitment much easier.
           The plan will save both IT recruitment agencies and candidates time.</p>
        
        
      </div>
      <img src="images/hr2.jpg" alt="" class="center" width='700' >
    </section>
    
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:40px;"> Step 3: Hunting for potential candidates</h3>
        <div class="u-text u-text-left u-text-1">Companies usually post job ads to all social
           media platforms they have and advertise it, but they shouldn’t 
           wait for candidates to approach them. Sure, maybe the perfect 
           candidate will apply, but the recruiter has to “hunt” for high-level 
           A-players by using other channels. Perfect candidates aren’t going to rain
            down from the sky, so companies should try to find them on LinkedIn, social
             media groups, or even ask someone for a recommendation.
           As you can see, there is a reason why people call recruiters “headhunters”.</p>
        
   <!--     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="">learn more</a>
  -->        <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
      <img src="images/hr04.jpg" alt="" class="center" width='700' >
    </section>
    
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:40px;"> Step 4: Recruiting the best candidates</h3>
        <div class="u-text u-text-left u-text-1">It’s time to identify and recruit candidates
           that match a company’s needs the best! Good candidates should 
           quickly and clearly highlight if a recruiter follows the job description.
            However, companies should sell the story about the company and convince
             candidates that this job is a great opportunity for them. Top IT professionals
              are not interested only in the job, but the company itself. The company culture
               could be the turning point for them. However, recruiters should inform all
                applicants about the status of the application,
           whether they got to the next step or not.  </p>
        
            <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
      <img src="images/hr05.jpg" alt="" class="center" width='700' >
    </section>
    
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:40px;"> Step 5: Testing</h3>
        <div class="u-text u-text-left u-text-1">For some companies, the next stage is to send
           a test to top candidates and see if they were telling a truth in a resume.
            For others, the next step is an interview. A test can help companies
             find A-level candidates and see if they are able to get the job done 
             well and fast. Usually, you have a limited time to finish the test,
              but this is the opportunity for you to see what you know, and what
               skills you should develop. After testing, companies will have a much shorter list of candidates
           that will get to the next stage of the recruitment process – the interview.  </p>
        
             <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
      <img src="images/hr06.png" alt="" class="center" width='700' >
    </section>
    
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:40px;"> Step 6: Face-to-face interview</h3>
        <div class="u-text u-text-left u-text-1"> When it comes to the interview, it’s important for both recruiter and candidate to be prepared. This is a moment when companies should find out more about the applicant’s background, skills, and even personality to see if they fit with your company’s culture. Recruiters should make a list of information they need in order to make the interview session much more structured. However, this is not a one-way conversation because A-level candidates want more than just a job. They want to find out more about the company, so the recruiter job is to sell a story, tell them about benefits they’ll get if they start working for them. Nevertheless, if the interview last too long, top candidates can lose interest in the company. A candidate may be interviewing with more than one organization, so the recruiter has to inform them where they are in the process and what to expect in the near term.</p>
        
     
      </div>
      <img src="images/hr07.jpg" alt="" class="center" width='700' >
    </section>
    
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:40px;"> Step 7: Offering employment to the best candidate</h3>
        <div class="u-text u-text-left u-text-1"> Hiring the wrong person can be extremely costly, so recruiters have to double check all references and other information they have about the chosen candidate. The offer stage is one of the most delicate stages of the recruiting process and IT recruitment companies should never take for granted that a candidate is going to accept an offer. However, if they’ve done all of the proper work beforehand, everything should go well. Sometimes, they will have to extend the offer, so if they are sure that they’ve found the right person for the job, the company should satisfy the candidate’s expectations.</p>
        
              <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
      <img src="images/hr08.jpg" alt="" class="center" width='700' >
    </section>
    
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:40px;">Step 8: Hiring proposal</h3>
        <div class="u-text u-text-left u-text-1">In the best case, the candidate will accept an offer and take a job. However, they may reject it so IT staffing agency will have to offer a job to the next candidate on the list. Once they find the candidate that is satisfied with the salary, start date, and other terms and conditions of employment that are based on the agreement between the company and the candidate, they can sign the papers.</p>
        
            <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
      <img src="images/hr09.jpg" alt="" class="center" width='700' >
    </section>
    
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:40px;">Step 9: Onboarding of the candidate</h3>
        <div class="u-text u-text-left u-text-1">Once a candidate does accept the offer of employment, and the official hiring is done, HR department should prepare the onboarding process that includes a welcome session, shadowing for a period of time, and a follow-up. The chosen candidate should feel wanted before they officially join the organization, and HR should also check them from time to time in order to see if they are satisfied with the job, company and team members. Remember, the goal of every company is to retain this employee.</p>
        
             <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
      <img src="images/hr10.png" alt="" class="center" width='700' >
    </section>
    
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:50px;">join with cognate</h3>
        <div class="u-text u-text-left u-text-1">Because we not only source the candidate we make sure that they are successful in their contracts, through a unique upskilling program.
      <br>
      An experienced recruitment agency provides the tools you need to recruit the right talent. The agency serves as an HR partner, helping you develop winning best practices for hiring and workforce flexibility as well. That’s because the right partner will develop an in-depth understanding of your company and your goals associated with talent acquisition.
      <br>
      leading HR firms already have established networks of vetted talent. This makes it easier for you to fill vacancies immediately, then build your reputation and relationship with a pool of talented workers.
        
      
      
      </p>
        
            <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
      <img src="images/hr001.gif" alt="" class="center" width='700' >
    </section>
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:30px;">recruitment options that cognate offers</h3>
        <div class="u-text u-text-left u-text-1"  style="color:dark;font-size:20px;"> When working with cognate,
           your recruitment leaders can be as involved as they like
            — whether you want to take a back seat and let our team 
            look after your staffing needs or you want to be more
             closely involved at every step of the journey.<br> Companies can fully 
          or partially outsource their recruitment functions to cognate:
          <br><br>
          <li> TECHNOLOGY CONSULTING </li> 
          they are broadly comprised of:<br>
Infrastructure Management Consulting , Business Change Consulting and Aligning Technology and Business Strategies .
      
      <li> INFRASTRUCTURE SUPPORT SOLUTIONS </li> 
      End User Computing Support (L1,L2 &L3) , UX Design 
      and Development , Application Support, DevOps,
       Data, Security and Compliance Management .
       <li> STARTUP ENGINEERING SERVICES </li> 
       Let us help you get 10x more value for
        money in software engineering work.
        <li> Tecruitment Of Termanent Talent:</li> 
        We work closely with you to source, interview, and vet a candidate to join your team on a permanent basis.<br>
        <li>  Recruitment Of Temporary Talent: </li>
        Cognate hires, manages, and pays the candidate on your behalf.
         You pay Cognate a rate to access the candidate’s services. 
         <li>  Inhouse Services: </li>
         We handle your HR processes from your location, managing
          everything from recruitment to onboarding and the daily workforce management. 
         This solution is best suited for companies with a large number of flex workers.
<li> As part of our Staffing business, we also offer payrolling  services, taking over your administrative payroll burden. 
       </p>

        
            <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
     <!-- <img src="images/hr11.jpg" alt="" class="center" width='700' >-->
    </section>
    
    <section class=" u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text  text-capitalize u-text-black u-text-1" style="color:dark;font-size:60px;"> Ready, steady, go!</h3>
        <div class="u-text u-text-left u-text-1">The recruitment process is an opportunity for you to see what you know and what skills you have to improve, so don’t be disappointed if something goes wrong. It’s important to look at every job opportunity like it’s the only one – you have to adapt a resume and motivation letter to the particular company. You can see what they need from a job application and their website so you can underline the skills and experience they need in your resume. These steps will help you understand how IT staffing agencies work and prepare you for the next step, but remember that every company is different. Going through a recruitment process over and over again can be stressful and exhausting, so make sure that you’ve done all of the proper work beforehand. Maybe the next job offer is perfect for you, so good luck!</p>
        
            <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
       
      </div>
      <img src="images/hr11.jpg" alt="" class="center" width='700' >
    </section>



    <section class="u-align-center text-capitalize u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <p class="u-text  u-text-default u-text-1"><h3>table of contents..</h3><span style="font-weight: 700;"></span>
        </p>
         <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <p class="u-text u-text-default u-text-palette-1-base u-text-2">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-1" href="Contact_us.php" target="_blank">contact us</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <p class="u-text u-text-default u-text-palette-1-base u-text-3">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-2" href="hr.php" target="_blank">what is the recurirement process?</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <p class="u-text u-text-default u-text-palette-1-base u-text-4">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-3" href="hr.php" target="_blank">requirement process important</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="hr.php" target="_blank"> Clear Job Description</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="hr.php" target="_blank">Planning The Process</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="hr.php" target="_blank">Hunting For Potential Candidates</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="hr.php" target="_blank">Recruiting The Best Candidates</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="hr.php" target="_blank">Testing</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="hr.php" target="_blank">Face-To-Face Interview</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="hr.php" target="_blank">Offering Employment To The Best Candidate</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="hr.php" target="_blank">Hiring Proposal</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="hr.php" target="_blank"> Onboarding Of The Candidate</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="hr.php" target="_blank">Join With Cognate</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="hr.php" target="_blank"> Recruitment Options That Cognate Offers</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
   <!--  <section class="u-clearfix u-custom-color-1 u-lightbox u-section-1" id="sec-de5a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text u-text-left u-text-black u-text-1" >Civil & architecture.</h3>
        <p class="u-align-left u-text u-text-left u-text-black u-text-6">Our sectoral focus on real estate and infrastructure has made us <br>
        the trusted talent partner<br> 
        for leading property developers.</p>
         <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="">learn more</a> -->
        
        <!-- <img src="images/civil architectural.jpg" class="" alt="" width="404" height="336"> -->

     <!--  </div>
    </section> -->
    <!-- <section class="u-clearfix u-custom-color-3 u-lightbox u-section-1" id="sec-de5a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-right u-text u-text-right u-text-white u-text-1">Banking & financial services.</h3>
        <p class="u-align-right u-text u-text-right u-text-white u-text-6">From global banks to niche fintech companies,<br> we help organizations hire the right talent.</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="">learn more</a> -->
              <!-- <img src="images/banking & financial.jpg" class="" alt="" width="404" height="336"> -->
     <!--  </div>
    </section> -->
   <!-- <section class="u-clearfix u-custom-color-3 u-lightbox u-section-1" id="sec-de5a">
      <div style="background-image: url('images/WEB Support.jpg');">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-left u-text u-text-left u-text-black u-text-1">Support functions.</h3>
        <p class="u-align-left u-text u-text-left u-text-black u-text-6">With function specific practices for HR,<br> 
        Marketing & Legal, our network & experience<br> 
        will find you exceptional talent that operates <br>
        effectively from the get go.</p>
     -->  <!--  <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="">learn more</a>-->
        
       <!--  <img src="images/support funcion.jpg" class="" alt="" width="404" height="336">  -->
      <!-- </div>
    </div>
    </section>-->
    <!-- <section class="u-clearfix u-custom-color-3 u-lightbox u-section-1" id="sec-de5a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-right u-text u-text-right u-text-white u-text-1">Pharma, life sciences & healthcare.</h3>
        <p class="u-align-right u-text u-text-right u-text-white u-text-6">With our breadth of experience in the pharmaceutical<br>
        and life sciences space,we give you access<br> 
        to the best talent for your niche requirements.</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="">learn more</a> -->
        <!--  <img src="images/pharma,life science.jpg" class="" alt="" width="404" height="336"> -->

     <!--  </div>
    </section> -->
    <!-- <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-right u-text u-text-right u-text-black u-text-1">Analytics & data sciences.</h3>
        <p class="u-align-right u-text u-text-right u-text-black u-text-6">Whether you're a traditional<br> business looking to leverage analytics or a startup on <br> the cutting edge of data sciences, we have the right candidates for your needs.</p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: white; border-radius: 10px; color: white;" href="">learn more</a>
  -->
        <!-- <img src="images/data-analytics.jpg" class="" alt="" width="404" height="336">  -->
      <!-- </div>
    </section>
    <section class="u-clearfix u-custom-color-3 u-lightbox u-section-1" id="sec-de5a">
      <div style="background-image: url('images/account-management-development.jpg');">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-right u-text u-text-right u-text-white u-text-1">Sales & account management.</h3>
        <p class="u-align-right u-text u-text-right u-text-white u-text-6">With a clientele that includes companies from diverse industries,<br> we have the right candidates for you across direct sales,<br> client servicing, channel sales and key account management.</p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 20px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="">learn more</a>
  -->  <!-- <img src="images/sales account management.jpg" class="" alt="" width="404" height="336"> -->
      <!-- </div>
</div>
    </section>-->
    
    
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
        target: "demoB",
        data: "search.php",
        post: { type: "Name" },
        // OPTIONAL
        delay : 50,
        min : 1
      });
    });
</script>