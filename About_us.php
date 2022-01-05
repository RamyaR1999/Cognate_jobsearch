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
<div class="carousel-inner" role="listbox">
  <div class="carousel-item active" style="background-image: url('images/about-us.jpg') " >
  </div>
  </div>
</section>
<section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
  <h2  style="color:Crimson;font-size:40px;">About us..</h2>
  <div class="u-list u-list-1">
    <div class="u-repeater u-repeater-1">
      <div class="u-container-style u-list-item u-repeater-item">
        <div class="u-container-layout u-similar-container u-container-layout-1">
          <p class="u-text u-text-default u-text-palette-1-base u-text-2">
            <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-1" href="#Our History" target="">our history</a>
          </p>
        </div>
      </div>
      <div class="u-container-style u-list-item u-repeater-item">
        <div class="u-container-layout u-similar-container u-container-layout-1">
          <p class="u-text u-text-default u-text-palette-1-base u-text-2">
            <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="#our story" target="">our brand story</a>
          </p>
        </div>
      </div>
      <div class="u-container-style u-list-item u-repeater-item">
        <div class="u-container-layout u-similar-container u-container-layout-1">
          <p class="u-text u-text-default u-text-palette-1-base u-text-2">
            <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-3" href="" target="">in news</a></p>
          </div>
        </div>
        <div class="u-container-style u-list-item u-repeater-item">
          <div class="u-container-layout u-similar-container u-container-layout-1">
            <p class="u-text u-text-default u-text-palette-1-base u-text-2">
              <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Contact_us.php" target="_blank">talk to us</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-fa03">
    <div class="section-tittle section-tittle2" ><br>
      <h2 style="color:Crimson;font-size:40px;">Welcome to Cognate Global Business Solution</h2>
      <strong>Let’s Start your Business</strong>
      <p class="u-align-center ">Cognate Global is a IT Staffing and Managed resourcing provider<br> with offices in Bangalore and USA and have strong capabilities <br>to support European locations. We also do Onsite Staffing and <br>Remote Staffing solutions,Contract Staffing, Placement Solutions <br>across multiple geographies.</p>
    </div>
  </section>
  <div class="support-company-area support-padding fix">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6">
          <div class="support-location-img">
            <img src="assets/img/service/global-img.jpg" alt=""width="500" height="550">
            <div class="support-img-cap text-center">
              <p>Since</p>
              <span>2018</span>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6">
          <div class="right-caption">
            <!-- Section Tittle -->
            <div class="section-tittle section-tittle2" >
              <h2 id="Our History" style="color:Crimson;font-size:40px;">Our History</h2>
            </div>
            <div class="support-caption">
              <p class="pera-top">Business history and international business are cognate subjects. There are few, ifany, studies of international business that do not require a proper study of context.<p>
                <p>International business decision making must be made relevant by a consideredevaluation of the circumstances surrounding that decision. This often meansputting it into its historical context. The contributions that the study ofinternational business can make to business history are the input of appropriatetheory and appropriate research methods. The best international business theorycan illuminate the seemingly disparate strategies of ﬁrms in given historicalcircumstances and can provide an integrated, overarching conceptual structure ofthe study of business history.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  &nsbp; -->
    <div class="support-company-area support-padding fix">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="right-caption">
              <div class="section-tittle section-tittle2">
                <h2 style="color:Crimson;font-size:40px;">Growth</h2>
              </div>
              <div class="support-caption">
                <p>Their growth can be expanded into the different markets and go beyond borders, and acquisition of other small companies. It could also be an affiliation with other brands for more exposure; the purpose is never-ending growth.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="right-caption">
              <!-- Section Tittle -->
              <div class="section-tittle section-tittle2"><br>
                <!-- <span>Our History</span> -->
                <h2 style="color:Crimson;font-size:40px;">Innovation</h2>
              </div>
              <div class="support-caption">
                <p>The very foundation of a startup company is innovation and creativity. It doesn’t mean the process stops after the establishment of the company. Instead, it’s the beginning of the innovative approaches. If you compare the old interface of Facebook with a new current app, then you’d see the huge difference.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="support-company-area support-padding fix">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="right-caption">
              <!-- Section Tittle -->
              <div class="section-tittle section-tittle2"><br>
                <h2 style="color:Crimson;font-size:40px;">Team</h2>
              </div>
              <div class="support-caption">
                <p>One of the main differences between entrepreneurship and startup is a team. Entrepreneurship is all about the work of one person. Startup, on the other hand, requires highly skilled, talented and speedy individuals who have an understanding with one another. They’re willing to work together collectively as a team by sharing responsibilities.
                Working as a team also means that everyone would consider the startup company as one’s own, rather than being an employee of the company and only care about the pay.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="right-caption">
              <!-- Section Tittle -->
              <div class="section-tittle section-tittle2"><br>
                <h2 style="color:Crimson;font-size:40px;">Tech-Oriented</h2>
              </div>
              <div class="support-caption">
                <p >Startup companies are usually tech-oriented, and their founders are also highly technically skilled people. The question is why tech. It’s because tech is the only industry that doesn’t care about manner, behavior, dressing codes, or wealthy background. It only requires extraordinary skill and unique ideas. If you have both qualities, test and launch it. If it’s good, then you’ll acquire the market share very quickly whether it’s paid or ads. Bigger market share would attract new investors, and the expansion process continues.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="support-company-area support-padding fix">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="right-caption">
              <!-- Section Tittle -->
              <div class="section-tittle section-tittle2"><br>
                <h2 style="color:Crimson;font-size:40px;">Resources</h2>
              </div>
              <div class="support-caption">
                <p>Having discussed earlier the tech nature of startup companies, therefore, they don’t require the conventional and traditional economic and physical resources. All they require is the investor and financial resources to carry out different operations.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="right-caption">
              <!-- Section Tittle -->
              <div class="section-tittle section-tittle2"><br>
                <!-- <span>Our History</span> -->
                <h2 style="color:Crimson;font-size:40px;">Partnerships</h2>
              </div>
              <div class="support-caption">
                <p>Tech startup companies usually have limited resources in the beginning. Therefore, they either partner up with other skilled personals to get things done or they hire some third party. For instance, the reason for alliances and partnerships is building a website or an online platform of an android application.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="support-company-area support-padding fix">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="right-caption">
              <!-- Section Tittle -->
              <div class="section-tittle section-tittle2"><br>
                <h2 style="color:Crimson;font-size:40px;">Risk</h2>
              </div>
              <div class="support-caption">
                <p>Investment in the startup companies is usually very risky because they have a very high failure rate. The reason for having a failure rate is because they rely heavily on the external factors.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="right-caption">
              <!-- Section Tittle -->
              <div class="section-tittle section-tittle2"><br>
                <!-- <span>Our History</span> -->
                <h2 style="color:Crimson;font-size:40px;">Adaptability</h2>
              </div>
              <div class="support-caption">
                <p>Having the tech nature of startup companies, they’re very susceptible to environmental changes. Therefore, they have to be highly adaptive to the changing market trends. If they ignore it, then they’d lose the market share gradually.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="support-company-area support-padding fix">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="right-caption">
              <div class="section-tittle section-tittle2">
                <h2 id="our story"class="u-align-left"style="color:Crimson;font-size:40px;">Our story.....</h2>
              </div>
              <p >One of the early stage challenges is to get more engineering resources at quicker turnaround time and reasonable prices. Early stage start-ups need to feel confident about the hire and get more done at reasonable cost.</p>
              <p> We can get you started by providing you highly skilled Individual contributors or you can take advantage of handpicked Dev teams, QE teams, DevOps teams, High specialized engineering resources. These are the best engineers that India has to offer.</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="right-caption">
              <p><br> DevOps (AWS, Linux, python), Big Data Admins and Developers, C/C++ engineers, Java Developers, Full stack React, Angular, Nodejs developers, System administrators, QE automation and functional test engineers.</p>
              <p>Most US startup companies that have invested in a highly specialized Indian engineering team has reaped good benefits. Very often the productivity and contribution has been 10x in comparison of the cost one spends in the US. Also, more work gets done in every 24-hour period.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    &nbsp;
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