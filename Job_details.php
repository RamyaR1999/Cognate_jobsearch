<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>



<!doctype html>
<html class="no-js" lang="zxx">

<!--tittle-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGBS-Job details</title>
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
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Job_seeker.php">Search Candidates</a>
   <ul class="submenu">

    <li><a href="submit_cv.php">Submit CV</a></li><br>    
    <?php

       if($_SESSION['User_type'] == 'Admin'){     

    ?>

    <li><a href="Jobseeker_profile.php">Job Seeker Profile</a></li><br>
    
    <?php
        
       }

    ?>
    <li><a href="Available_jobs.php">Find Jobs</a></li>
   <!--  <li><a href="career_hub.php">Career Hub</a></li>
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
           $Fullname=  $row['Fullname'];
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
                          
                        echo $_SESSION['Fullname']; 
                         
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


<?php

  if(isset($_GET['Job_details'])){

  $the_id = $_GET['Job_details'];

  $query="SELECT * FROM jobs WHERE id='$the_id' ";
  $Jobs_list=mysqli_query($connection,$query);

  while($row=mysqli_fetch_array($Jobs_list)){

     $id = $row['id'];
     $Job_title = $row['Job_title'];
     $Job_posted = $row['Job_posted'];
     $Skills = $row['Skills'];
     $Location = $row['Location'];
     $Location_country = $row['Location_country'];
     $Job_type = $row['Job_type'];
     $Job_description = $row['Job_description'];
     $Service = $row['Service'];
     $Sector = $row['Sector'];
     $Company_name = $row['Company_name'];


   }
 }
?>

    
    <section class="u-clearfix u-section-2" id="sec-8459">
      <div class="u-clearfix u-sheet u-sheet-1">

                <h2 class="u-align-left u-text u-text-custom-color-1 u-text-9">Job description</h2>
                <h2 class="u-align-left u-text u-text-custom-color-1 u-text-11"><?php echo $Job_title; ?></h2>
                <!-- <p class="u-align-left u-text u-text-10"><?php echo $Job_description; ?></p> -->
                <p class="u-align-left u-text u-text-10"><textarea id="cryTextArea" class="textarea" rows="10" style="border: none; height: auto; width: 100%;"><?php echo $Job_description; ?></textarea></p>
                <h2 class="u-align-left u-text u-text-custom-color-1 u-text-11">Skills</h2>
                <p class="u-align-left u-text u-text-12"><?php echo $Skills; ?></p>
                <p class="u-align-left u-text u-text-10">posted :&nbsp; <?php echo $Job_posted; ?></p>
                <p class="u-align-left u-text u-text-10">location : <?php echo $Location_country; ?></p> <br>
                <a href="Apply_Job.php?Job_details=<?php echo $id ?>&<?php echo $Job_title ?>" class="btn head-btn1">apply now</a>
      </div>
    </section>


<script>

var observe;
if (window.attachEvent) {
  observe = function(element, event, handler) {
    element.attachEvent('on' + event, handler);
  };
} else {
  observe = function(element, event, handler) {
    element.addEventListener(event, handler, false);
  };
}
var firstHeight = 0;
var storeH = 0;
var storeH2 = 0;
function init() {
  var text = document.getElementById('cryTextArea');

  function resize() {
    //console.log(text.scrollHeight);
    text.style.height = 'auto';
    if (storeH != text.scrollHeight) {
      text.style.height = text.scrollHeight + 'px';
      storeH = text.scrollHeight;
      if (storeH2 != storeH) {
        console.log("SENT->" + storeH);
        storeH2 = storeH;
      }
    }
  }
  /* 0-timeout to get the already changed text */
  function delayedResize() {
    window.setTimeout(resize, 0);
  }
  observe(text, 'change', resize);
  observe(text, 'cut', delayedResize);
  observe(text, 'paste', delayedResize);
  observe(text, 'drop', delayedResize);
  observe(text, 'keydown', delayedResize);

  // text.focus();
  // text.select();
  resize();
}
init();

</script>
    
 <?php include "footer.php"; ?>