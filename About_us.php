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
  </ol>
<div class="carousel-inner" role="listbox">
  
  <div class="carousel-item active" style="background-image: url('images/about-us.jpg') " >
    <div class="carousel-caption text-monospace d-none d-md-block">
     <!--  <h1 class="text-avatar text-capitalize text-left text-monospace u-lightbox " style="inset-inline-start: initial color:red;font-size:60px;">transforming the world of work
</h1>
    <h1 class="text-right text-dark u-lightbox text-monospace " style="revert: right color:red;font-size:60px;">since 1960......</h1> -->
      
    </div>
  </div>
  </div>




</section>
<section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-left u-text-1"> About us.....<span style="font-weight: 700;"></span></p>
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
                <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-3" href="#in news" target="">in news</a></p>
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
      </div>
    </section>
    <section class="u-clearfix u-section-1" id="sec-8459">
      <div class="u-clearfix u-sheet u-sheet-1"><br>
        <!-- <div class="u-border-2 u-border-grey-5 u-container-style u-expanded-width-xs u-group u-radius-8 u-shape-round u-group-8"> -->
        <div class="u-container-layout u-container-layout-8">
       <div class="u-layout-row">
        <div class="col-sm-6 col-md-6">
        <h6 class="u-text u-text-20 u-align-left" style="padding-left: 3px;">
          <table>
      <tr>
       <!--  <td>
        <img src="images/SAM 1.jpg" alt="" style="height:100px; margin:20px; margin-left:20px;" >
  </td> -->
<td>
          <h2 class="u-align-left u-text  u-text-center u-text-black u-text-2">welcome to cognate global..</h2>
        <p class="u-align-left u-text  u-text-center u-text-black u-text-6">Cognate Global is a IT Staffing <br>
                  And Managed resourcing provider <br>
                  With offices in Bangalore & USA <br>
                  Have strong capabilities to support<br>
                  European locations. We also do Onsite<br>
                  Staffing and Remote Staffing<br>
                  Solutions, Contract Staffing,<br>
                  Placement Solutions across multiple geographies.</p>
                  <a href="" class="btn head-btn2 " style="align-center text-color-white">learn more
              </a>
            </td>
  </tr>
  </table>
  <table>
    <tr>
 
      <td>
        <h2 class="u-align-left u-text u-text-left u-text-black u-text-2" >COGNATE BENEFITS</h2>
        <p class="u-align-left u-text u-text-left u-text-black u-text-6">Cognate offers range of Technology<br>
          Staffing and Consulting Services.<br>
          Consultative approach backed with<br>
          expertise across multiple technologies.<br>
          Flat Management Structure, prompt decision making<br>
          with flexible approach to help changing dynamics of the projects.</p>
        </td>
        <!-- <td>
        <img src="images/SAM 1.jpg" alt="" style="height:200px; margin:30px; margin-left:30px;" >
  </td> -->
    </tr>
  </table>
  </h6>
          </div>
          <div class="col-sm-6 col-md-6">

            <h6 class="u-align-right" style="padding-left: 40px;">

            
  
                <table>
    <tr>
       <!-- <td>
        <img src="images/SAM 1.jpg" alt="" style="height:200px; margin:30px; margin-left:30px;" >
  </td> -->

 
      <td>
        <h2 class="u-align-left u-text u-text-right u-text-black u-text-2">come join our team</h2>
       
<div class="support-caption">
                                <p class="u-align-left u-text u-text-right u-text-black u-text-6">are you someone who trives on a<br>
    challenge and loves to learn and envolve<br>
at work? we are always looking for <br>
aspiring talent who are passionate about <br>
our mission of tranforming lives one<br>
person at a home</p>
                                </div>
<a href="" class="btn head-btn2 " style="align-center text-color-white">join us
              </a>
        </td>
        
    </tr>
  </table>
  <br>

                
 </h6>
</div>
</div>
</div>
<!-- </div> -->
</div></section>

&nbsp;
<div class="support-company-area support-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="assets/img/service/support-img.jpg" alt="">
                            <div class="support-img-cap text-center">
                                <p>Since</p>
                                <span>2017</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                       <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2" ><br>
                               
                                <h2 id="Our History" style="color:Crimson;font-size:40px;">Cognate Global Business Solution</h2>
                                 <span>Our History</span>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">Business history and international business are cognate subjects. There are few, ifany, studies of international business that do not require a proper study of context.
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
                                <p>The very foundation of a startup company is innovation and creativity. It doesn’t mean the process stops after the establishment of the company. Instead, it’s the beginning of the innovative approaches. If you compare the old interface of Facebook with a new current app, then you’d see the huge difference. But it didn’t happen overnight. They have been experimenting and adding one option after another. If they haven’t adopted the innovative approaches, then some other company would have their place.

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
                                <p class="pera-top"></p>
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
                                <p>Tech startup companies usually have limited resources in the beginning. Therefore, they either partner up with other skilled personals to get things done or they hire some third party. For instance, the reason for alliances and partnerships is building a website or an online platform, software creation, or development of an android application.</p>
                                


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
                                <p class="pera-top"></p>
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
        <div class=""></div>
        <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <p id="our story"class="u-text u-text-left u-text-1"> our story.....<span style="font-weight: 700;"></span></p>

        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
               <div class="support-caption">
                                <p>If you know nothing about company branding through storytelling or think that writing your company’s history is enough to win your customers’ hearts and minds, you need to reconsider your content strategy.</p>
                                </div>
                <p> Brand storytelling involves using a narrative to connect your or your client's brand to prospective customers. Great brand storytelling fosters a connection between a brand and its audience, communicating the truth, purpose, vision and values of the brand through content.</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
               <div class="support-caption">
                                <p>A well-written brand story encompasses both the facts and feelings that you want associated with your company. You want it to inspire an emotional reaction in your customers. It should only barely refer to history while speaking more about your business’s goals, objectives and motivations.</p>
                                </div>
                <p> Tech startup companies usually have limited resources in the beginning. Therefore, they either partner up with other skilled personals to get things done or they hire some third party. For instance, the reason for alliances and partnerships is building a website or an online platform, software creation, or development of an android application.</p>
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
  </ol>
<div class="carousel-inner" role="listbox">
  
  <div class="carousel-item active" style="background-image: url('images/global business news.jpg') " >
    <div class="carousel-caption text-monospace d-none d-md-block">
    
      
    </div>
  </div>
  </div>




</section>
       <div class="support-company-area support-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2"><br>
                                
                                <h2 id="in news" style="color:Crimson;font-size:40px;">In News</h2>
                            </div>
                            <span>Innovation</span>
                            <div class="support-caption">
                                <p>The very foundation of a startup company is innovation and creativity. It doesn’t mean the process stops after the establishment of the company. Instead, it’s the beginning of the innovative approaches. If you compare the old interface of Facebook with a new current app, then you’d see the huge difference. But it didn’t happen overnight. They have been experimenting and adding one option after another. If they haven’t adopted the innovative approaches, then some other company would have their place.

</p>


                             

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <span>Team</span>
                            <div class="support-caption">
                                <p>One of the main differences between entrepreneurship and startup is a team. Entrepreneurship is all about the work of one person. Startup, on the other hand, requires highly skilled, talented and speedy individuals who have an understanding with one another. They’re willing to work together collectively as a team by sharing responsibilities.
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
                               
                            </div>
                            <span>Business</span>
                               
                            <div class="support-caption">
                                <p >Business is a very broad term that can cover any sort of activity that helps an organisation, big or small, to stay profitable and generate money. Most jobs involve some aspects of business whether you work as a lawyer, an engineer, a scientist or an accountant.
                           

</p>


                             

                            </div>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>


     <!--  </div>
    </section> -->
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