<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>

<!doctype html>
<html class="no-js" lang="zxx">

<!--tittle-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGBS-Application_service</title>
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
     <div class="main-menu">
         <nav class="d-none d-lg-block">
     <ul id="navigation">
     <!-- <li><a href="home.php">Home</a></li> -->
     <li><a href="Job_seeker.php">Job Seeker </a>
     <ul class="submenu">
         
    <li><a href="Jobseeker_profile.php">Job Seeker Profile</a></li>
    <li><a href="Available_jobs.php">Find A Jobs</a></li>
    <li><a href="Register-member.php">Submit Your Resume</a></li>
    <li><a href="career_hub.php">Career Hub</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="security_advice.php">Security Advice</a></li>
     
</ul>      
</li>
<li><a href="employer.php">employers</a>

<ul class="submenu">
         
    <li><a href="submit_job.php">Submit A job</a></li>
    <li><a href="request_callback.php">Request A Call Back</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="ourSolution.php">Our Solutions</a></li>
    <li><a href="Contact.php">Contact</a></li>
     
</ul>

</li>
     <li><a href="About_Us.php">About</a>

</li>
     <li><a href="Contact_Us.php">Contact</a>
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

    </div><!--<section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="snp-txt-img-cta-txt">
<h4>Cognate&#39;s application services</h4>
<div><p>Our comprehensive portfolio of application and portal services can be customized to cater to specific business requirements, helping your business scale with agility and ease.</p></div>
<a class="btn btn-primary" href="">talk to us</a>
</div>
</div>
       <div class="u-expanded-width-xs u-form u-form-1">  
      
    </section>-->

    <section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-de5a">
     
  <div style="clear: both">
    <h1 class="text-avatar text-capitalize text-left text-monospace u-lightbox " style="inset-inline-start: initial color:red;font-size:60px;">Cognate&#39;s application services
</h1>
    <h3 class="text-right text-dark u-lightbox text-monospace " style="revert: right color:red;font-size:60px;"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our comprehensive portfolio of application and portal services can be customized to cater to specific &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;business requirements, helping your business scale with agility and ease.</h3></h3>
    <!--<class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">-->
    <!--<button style=background-color:blue;> 
    <a class="btn btn-primary" href="">talk to us</a>-->
    
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-pink e u-btn-1">talk to us
              </a>
              <!-- <img src="images/product management.jpg" class="" alt="" width="404" height="336"> -->
</div>

        <div class="u-expanded-width-xs u-form u-form-1">
          
    </section>
 </div>
 <br>
 <br>
  <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="snp-txt-img-cta-txt">
<h4>How we deliver application services</h4>
<div><p>We offer customized tech solutions designed to address diverse client requirements – whether it is near-term talent requirements or routine project support and execution.</p></div>
<!--<a class="btn btn-primary" href="/employers/talent-sourcing-methodology/">talk to us</a>
</div>-->
</div>
        
      </div>
    </section>
    <br>
    <br>
 
<div class="box-container">
<div class="box-title"><h3>Managed resource program</h3></div>
<div class="box-rt">
<div class="rt-info">ownership: cognate<br />duration: &lt; 1 year</div>
<div class="atitle">application project services</div>
<div class="a-des">Need support with shorter-term data, app or web projects? We'll source and manage the team — and deliver with minimal oversight.</div>
<div class="read-btn"><a href="#projects">learn more</a></div>
</div>
<div class="box-rt">
<div class="rt-info">ownership: cognate<br />duration: &gt; 1 year</div>
<div class="atitle">application outsourcing</div>
<div class="a-des">Leave the maintenance, upgrades and testing to us — so your inhouse teams can focus on more valuable work.</div>
<div class="read-btn"><a href="#projects">learn more</a></div>
</div>
<div style="clear:both"></div>
<div class="box-rt">
<div class="rt-info">ownership: cognate<br />duration: &lt; 1 year</div>
<div class="atitle">staff augmentation</div>
<div class="a-des">We have on-demand contractors with today's most valuable skill sets — development, UI/UX, testing, automation, data science and more.</div>
<div class="read-btn"><a href="#staffing">read more</a></div>
</div>
<div class="box-rt">
<div class="rt-info">ownership: cognate<br />duration: &gt; 1 year</div>
<div class="atitle">direct hire placement</div>
<div class="a-des">From development to data and UX, our tech leaders can help you build lasting inhouse expertise.</div>
<div class="read-btn"><a href="#staffing">read more</a></div>
</div>
<div style="clear:both"></div>
</div>
</div>
<style>
  .rt-container{max-width:1366px; padding:80px 60px; margin:0 auto;}
  .box-container{width:100%; margin:0 auto;}
 .atitle{font-size:25px; font-weight:bold; margin-bottom:5px; color: #0F1941;}
 .a-des{color:#FFF; margin:15px 0;}
 .box-rt{background:#6BA5B4; padding:30px; float:left; margin-left:2.564102564%; width:45.9%; margin-bottom:25px; border-radius:8px;min-height: 304px;}

 
 .box-title{text-align:center;}
.rt-info{color:#FFF; margin-bottom:15px}
@media (max-width:640px){
  .box-rt{margin-left:0; width:100%}
  .box-container{width:90%;}
  .rt-container{padding:80px 20px;}
 }
</style></div>
</div>
 <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="snp-txt-img-cta-txt">
<h2>Staffing and direct hire..</h2>
<div><p>Good talent is increasingly hard to come by and the competition for experienced technology skills is fierce in the age of Industry 4.0. Our staffing and direct-hire solutions help you find the skillsets and talent youneed on-demand, allowing you to focus on your core business goals. Click here  to learn more about our diverse range of technology staffing capabilities.</p></div>
<!--<a class="btn btn-primary" href="/employers/talent-sourcing-methodology/">talk to us</a>
</div>-->
</div>
        
      </div>
    </section>
<br>--><section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="snp-txt-img-cta-txt">
             <table>
      <tr>
        <td>
        <img src="images/th.jpg" alt="" style="height:300px; margin:70px; margin-left:70px;" >
  </td>

    <td>
        <h4 class="u-align-center u-text  text-capitalize u-text-black u-text-1" style="font-size:30px;">1) development</h4>
        <div class="u-text u-text-left u-text-1" style="color:light;font-size:12px;"><h5>Software developers and engineers are among the most in-demand professionals in any industry today — and you can’t afford to let talent bottlenecks hold you back. Fortunately, cognate global can help move your business forward.</h5>
          <h3>Popular job titles we recruit:</h3>
        <h5><li>AEM developers</li>
        <li>full-stack developers</li>
        <li>mobile developers</li>
        <li>software developers</li></h5>
  </div>
  </td>
  </tr>
  </table>
  <table>
      <tr>
 <td>
<h3 class="u-align-center u-text  text-capitalize u-text-black u-text-1" style="color:red;font-size:30px;">2) Big data</h3>
         <div class="u-text u-text-left u-text-1" style="color:dark;font-size:15px;"><h5>Ready to move your business forward? Big data opens up a world of opportunity, but you'll need the right talent — and access to the talent experts at cognate global — to take advantage of it.</h5>
          <h3>Popular job titles we recruit:</h3>
        <h5> <li>AI architects</li>
<li>AI developers</li>
<li>big data architects</li>
<li>big data developers</li>
<!--<li>business intelligence analysts</li>
<li>business intelligence architects</li>
<li>business intelligence developers</li>--></h5>
</div>
</td>
<td>
  <img src="images/bigdata (2).jpg" alt="" width=620 style="height:300px; margin:70px; margin-left:70px;" >
</td>
  </tr>
    </table>
    </div>  
  </section>

      
    <section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-de5a">
     
  <div style="clear: both">
    <h1 class="text-avatar text-capitalize text-left text-monospace u-lightbox " style="inset-inline-start: initial color:red;font-size:60px;">managed resource program..
</h1>
    <h3 class="text-right text-dark u-lightbox text-monospace " style="revert: right color:red;font-size:60px;"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We can completely manage your key projects from start to finish, right from streamlining the ;hiring and&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; onboarding process to ensuring regular talent management and continuity of operations, powering your organization’s growth</h3></h3>
    <!--<img src="images/managed resource.jpg" alt="">-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--<img src="<images/managed resource (2).jpg" alt="" width="600">-->
    <!--<img src="images/managed resource.jpg" alt="">-->
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <!--<img src="images/ts72.jpg" alt="" height="220" width="220">--><img src="images/mr 2.jpg" alt=""></div>
<br></section>
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