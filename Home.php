<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>


<?php

if (isset($_POST['submit'])){

            $search=$_POST['Job_title'];
            $skills=$_POST['Skills'];
            $location=$_POST['Location'];

       if($search !="" && $location !=""){

        $jobs="SELECT * FROM jobs WHERE Job_title = '{$search}' AND Location = '{$location}' ";

              $search_jobs=mysqli_query($connection, $jobs); 

                 if(!$search_jobs){
                    die("QUERY FAILED" . mysqli_error($connection));
                }
                $count=mysqli_num_rows($search_jobs);
                if($count == 0){

               header ("Location: Available_jobs.php?jobs=$search");
                       
            }else{
              while($row=mysqli_fetch_assoc($search_jobs)){

                    $id=$row['id'];
                    $Job_title=$row['Job_title'];
                    $Location=$row['Location'];
                    $Skills=$row['Skills'];

                    // $_SESSION['Job_title']=$Job_title;
                    // $_SESSION['Location']=$Location;
            
            header ("Location: Available_jobs.php?jobs=$Job_title & $Location");

            }

        }
       }elseif($skills !="" || $location !=""){

      $jobs="SELECT * FROM jobs WHERE Job_title = '$search' || Skills='$skills' || Location='$location' ";

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
                    $Location=$row['Location'];
                    $Skills=$row['Skills'];

                    $_SESSION['Location']=$Location;
                    $_SESSION['Job_title']=$Job_title;
            
            header ("Location: Available_jobs.php?jobs=$Location ");

            }

        }
      }elseif($search !=""){
        $jobs="SELECT * FROM jobs WHERE Job_title = '$search'";

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
                    $Location=$row['Location'];
                    $Skills=$row['Skills'];

                    $_SESSION['Job_title']=$Job_title;
            
            header ("Location: Available_jobs.php?jobs=$Job_title ");

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
    /*display: flex;*/
    /*width: auto;*/
     flex-grow: 1;
    flex-shrink: 1;
    /*vertical-align: middle;
    min-width: 0px;*/
}

.u-custom-color-2, .u-body.u-custom-color-2, .u-container-style.u-custom-color-2:before, .u-container-layout.u-custom-color-2:before, .u-table-alt-custom-color-2 tr:nth-child(even) {
    color: #ff6258;
}
</style>


<section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-de5a" style="height: 600px; padding: 0px;">
       <div style="background: linear-gradient(to right, #b83dba 0%, #00a8f3 100%);">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-align-center u-text u-text-default u-text-white u-text-1" data-animation-name="zoomIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Find Your Job</h3>
        <div class="u-expanded-width-xs u-form u-form-1">
          <form action="" autocomplete="off" method="POST" class="u-clearfix u-form-custom-backend u-form-horizontal u-form-spacing-2 u-inner-form" style="padding: 11px; background-color: white; border-radius: 34px;" source="custom" redirect="true">
            <div class="u-form-group u-form-name">
              <label for="name-ef64" class="u-form-control-hidden u-label"></label>
              <input type="text"style="min-width: 321px; display: flex;" placeholder="Enter job title" id="jobtitle" name="Job_title" class="u-input u-input-rectangle u-radius-3 u-white u-input-1">
              <!-- <input type="text" name="Name" id="demoB" placeholder="Enter job title" class="u-form-control"> -->
            </div>
            <div class="u-form-group u-form-name">
              <label for="name-ef64" class="u-form-control-hidden u-label"></label>
              <input type="text" style="min-width: 321px; display: flex;" placeholder="Enter Location" id="Location" name="Location" class="u-input u-input-rectangle u-radius-3 u-white u-input-1">
            </div>
            <!-- <div class="u-form-email u-form-group">
              <label for="email-ef64" class="u-form-control-hidden u-label"></label>
              <input type="text" style="min-width: 321px; display: flex;" placeholder="Skills" id="Skills" name="Skills" class="u-input u-input-rectangle u-radius-3 u-white u-input-2">
            </div> -->
            <div class="u-form-group u-form-submit">
               <a href="Available_jobs.php" class="btn head-btn1 " style="padding: 18px; border-radius: 16px;"><!-- <span class="u-icon u-text-palette-1-base u-icon-1"><svg class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><g><path d="M496.128,220.361l-160-144.032c-19.712-17.728-50.08-16.192-67.808,3.584c-17.728,19.68-16.128,50.048,3.584,67.776    l66.976,60.32H48c-26.528,0-48,21.472-48,48s21.472,48,48,48h290.944l-67.072,60.32c-19.712,17.76-21.312,48.096-3.584,67.776    c9.504,10.528,22.592,15.904,35.712,15.904c11.456,0,22.944-4.064,32.096-12.32l160-143.968    c10.112-9.088,15.904-22.08,15.904-35.68C512,242.441,506.208,229.449,496.128,220.361z"></path>

</g></svg><img></span>&nbsp;<br> -->
               Search
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

<style>
    .u-section-1 {
  background-image: linear-gradient(to right, #b83dba 0%, #00a8f3 100%);
}

.u-section-1 .u-sheet-1 {
  min-height: 1512px;
}

.u-section-1 .u-text-1 {
  font-size: 1.5rem;
  line-height: 1.4;
  font-style: normal;
  font-weight: 700;
  margin: 219px -17px 0 500px;
}

.u-section-1 .u-icon-1 {
  width: 60px;
  height: 60px;
  margin: -194px 430px 0 auto;
}

.u-section-1 .u-icon-2 {
  width: 60px;
  height: 60px;
  background-image: none;
  margin: 703px auto 0 140px;
}

.u-section-1 .u-shape-1 {
  height: 759px;
  width: 1002px;
  margin: -1008px auto 0 -691px;
}

.u-section-1 .u-shape-2 {
  height: 759px;
  width: 1002px;
  margin: 21px -660px 0 auto;
}

.u-section-1 .u-text-2 {
  font-size: 1.5rem;
  line-height: 1.4;
  font-style: normal;
  font-weight: 700;
  margin: -530px 501px 60px -18px;
}

@media (max-width: 1199px) {
  .u-section-1 .u-text-1 {
    margin-top: 220px;
    margin-left: 400px;
  }

  .u-section-1 .u-icon-1 {
    margin-top: -193px;
    margin-right: 355px;
  }

  .u-section-1 .u-shape-1 {
    margin-top: -1009px;
  }

  .u-section-1 .u-shape-2 {
    margin-top: 1px;
  }

  .u-section-1 .u-text-2 {
    margin-top: -510px;
    margin-right: 401px;
  }
}

@media (max-width: 991px) {
  .u-section-1 .u-text-1 {
    margin-left: 290px;
  }

  .u-section-1 .u-icon-1 {
    margin-right: 272px;
  }

  .u-section-1 .u-shape-1 {
    margin-top: -1042px;
  }

  .u-section-1 .u-shape-2 {
    margin-top: 34px;
  }

  .u-section-1 .u-text-2 {
    margin-right: 291px;
  }
}

@media (max-width: 767px) {
  .u-section-1 .u-text-1 {
    margin-left: 200px;
  }

  .u-section-1 .u-icon-1 {
    margin-right: 204px;
  }

  .u-section-1 .u-icon-2 {
    margin-top: 736px;
  }

  .u-section-1 .u-shape-1 {
    margin-top: -1076px;
  }

  .u-section-1 .u-text-2 {
    margin-right: 201px;
  }
}

@media (max-width: 575px) {
  .u-section-1 .u-text-1 {
    margin-left: 0;
    margin-right: 0;
  }

  .u-section-1 .u-icon-1 {
    margin-right: 128px;
  }

  .u-section-1 .u-icon-2 {
    margin-left: 88px;
  }

  .u-section-1 .u-shape-1 {
    margin-top: -1109px;
  }

  .u-section-1 .u-shape-2 {
    width: 340px;
    margin-top: 67px;
    margin-right: 0;
  }

  .u-section-1 .u-text-2 {
    margin-left: 0;
    margin-right: 0;
  }
}
</style>


    <section class="u-align-center u-clearfix u-gradient u-section-1" id="carousel_f87e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h6 class="u-custom-font u-font-montserrat u-text u-text-white u-text-1"> Start Your Career<br>
          <br>Success Doesn't Come And Find You<br>You Can Go Out and Get In .
        </h6><span class="u-icon u-icon-circle u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 409.294 409.294" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-2920"></use></svg><svg class="u-svg-content" viewBox="0 0 409.294 409.294" id="svg-2920"><path d="m0 204.647v175.412h175.412v-175.412h-116.941c0-64.48 52.461-116.941 116.941-116.941v-58.471c-96.728 0-175.412 78.684-175.412 175.412z"></path><path d="m409.294 87.706v-58.471c-96.728 0-175.412 78.684-175.412 175.412v175.412h175.412v-175.412h-116.941c0-64.48 52.461-116.941 116.941-116.941z"></path></svg></span><span class="u-icon u-icon-circle u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 409.294 409.294" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3870"></use></svg><svg class="u-svg-content" viewBox="0 0 409.294 409.294" id="svg-3870"><path d="m0 204.647v175.412h175.412v-175.412h-116.941c0-64.48 52.461-116.941 116.941-116.941v-58.471c-96.728 0-175.412 78.684-175.412 175.412z"></path><path d="m409.294 87.706v-58.471c-96.728 0-175.412 78.684-175.412 175.412v175.412h175.412v-175.412h-116.941c0-64.48 52.461-116.941 116.941-116.941z"></path></svg></span>
        <div class="u-opacity u-opacity-80 u-shape u-shape-svg u-text-palette-1-light-2 u-shape-1">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 150" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0197"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 150" x="0px" y="0px" id="svg-0197" style="fill:#b83dba"><path d="M43.2,126.9c14.2,1.3,27.6,7,39.1,15.6c8.3,6.1,19.4,10.3,32.7,5.3c11.7-4.4,18.6-17.4,21-30.2c2.6-13.3,8.1-25.9,15.7-37.1
    c8.3-12.1,10.8-27.9,5.3-42.7C150.5,20.3,134.6,9,117,7.6C107.9,6.9,98.8,5,90.1,1.9C83-0.6,75-0.7,67.4,2.1
    c-9.9,3.7-17,11.6-20.1,21c-3.3,10.1-10.9,18-20.6,22.2c-0.1,0-0.1,0.1-0.2,0.1c-20.3,8.9-31,32-24.6,53.2
    C6.9,115.6,25.2,125.2,43.2,126.9z"></path></svg>
        </div>
        <div class="u-flip-horizontal u-opacity u-opacity-80 u-shape u-shape-svg u-text-palette-1-light-2 u-shape-2">
          <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 150" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8d05"></use></svg>
          <svg class="u-svg-content" viewBox="0 0 160 150" x="0px" y="0px" id="svg-8d05" style="fill: #00a8f3"><path d="M43.2,126.9c14.2,1.3,27.6,7,39.1,15.6c8.3,6.1,19.4,10.3,32.7,5.3c11.7-4.4,18.6-17.4,21-30.2c2.6-13.3,8.1-25.9,15.7-37.1
    c8.3-12.1,10.8-27.9,5.3-42.7C150.5,20.3,134.6,9,117,7.6C107.9,6.9,98.8,5,90.1,1.9C83-0.6,75-0.7,67.4,2.1
    c-9.9,3.7-17,11.6-20.1,21c-3.3,10.1-10.9,18-20.6,22.2c-0.1,0-0.1,0.1-0.2,0.1c-20.3,8.9-31,32-24.6,53.2
    C6.9,115.6,25.2,125.2,43.2,126.9z"></path></svg>
        </div>
        <h6 class="u-custom-font u-font-montserrat u-text u-text-white u-text-2"> Make Your Dream<br>
          <br>We Make IT Happen<br>A Better Life, A Better World
        </h6>
      </div>
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

    window.addEventListener("DOMContentLoaded", function(){
      ac.attach({
        target: "Skills",
        data: "search.php",
        post: { type: "Skills" },
        // OPTIONAL
        delay : 50,
        min : 1
      });
    });

     window.addEventListener("DOMContentLoaded", function(){
      ac.attach({
        target: "Location",
        data: "search.php",
        post: { type: "Location_india" },
        // OPTIONAL
        delay : 50,
        min : 1
      });
    });
</script>

<?php include "footer.php"; ?>