<?php session_start(); ?>
<?php include "db.php"; ?>
<?php 

     if(isset($_POST['submit'])){
         
         $Firstname=  $_POST['Firstname'];
         $Lastname=  $_POST['Lastname'];
         $Email    = $_POST['Email'];
         $Phone=  $_POST['Phone'];
         $Designation =  $_POST['Designation'];
         $Company=  $_POST['Company'];
         $Branch =  $_POST['Branch'];
         $Service = $_POST['Service'];
         $error = 0;

      if(!empty($Firstname) && !empty($Lastname) && !empty($Phone) && !empty($Email)){
                          
      if(preg_match('/^[\p{L} ]+$/u', $Firstname)) {
          
        if(preg_match('/^[\p{L} ]+$/u', $Lastname)) {      
        
        if(preg_match("/^[0-9]{10}$/", $Phone)) {   



        if(!$error){
        $check_query= "SELECT * FROM jobs WHERE Email = '{$Email}' ";
        $check_jobs_query = mysqli_query($connection,$check_query);

        if(mysqli_num_rows($check_jobs_query) > 0){

          $row = mysqli_fetch_assoc($check_jobs_query);

            if($Email==$row['Email'])
            {
                $message_Email= "Email already exists";
            }
        }else {

        
        $query = "INSERT INTO request_callback (Firstname,Lastname,Email,Phone,Designation,Company,Branch,Service) ";
        $query .= "VALUES ('{$Firstname}','{$Lastname}','{$Email}','{$Phone}','{$Designation}','{$Company}','{$Branch}','{$Service}')";
             
        $jobs_query = mysqli_query($connection,$query);

            
            // move_uploaded_file($_FILES['CV']['tmp_name'], $upload);
      
        if(!$jobs_query) {
            
            die("Query Failed" . mysqli_error($connection) .' '. mysqli_error($connection));
        }
       
 }

}
          }else{
              $message_phone = "Invalid Phone No";
            
        }
            
        
            
          }else{
              $message_Lastname ="Only Alphabets are allowed in lastname";
            
       }

          }else{
              $message_Firstname ="Only Alphabets are allowed in firstname";
          
       }
          
          }else{
        $message = "All fiels are required *";
       }  
         
          }else {         
              $message = ""; 
       }

  ?>

<!doctype html>
<html class="no-js" lang="zxx">

<!--tittle-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGBS-Technology requirement</title>
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
    <?php

       if($_SESSION['User_type'] == 'Admin'){     

    ?>

    <li><a href="Jobseeker_profile.php">Job Seeker Profile</a></li>
    
    <?php
        
       }

    ?>
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

<?php 

    if(isset($_SESSION['id'])){

     $db_id =  $_SESSION['id'];       
        
     $query="SELECT * FROM users WHERE id = '{$db_id}' ";
     $select_user_profile = mysqli_query($connection,$query);

      
     while($row=mysqli_fetch_array($select_user_profile)){

           $Image=  $row['Image'];
           $Firstname=  $row['Firstname'];
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
<section class="u-clearfix u-custom-color-2 u-section-2" id="sec-2d18">
 
<br>

<!--<div class="grid-col-1-1">
<div class="snippet snp-header-illus snp-header-article-highlight snp-bg-opt1">
<div class="box-inner snp-header-illus-inner">
<div class="snp-header-illus-txt snp-content-txt">-->
<span class="snp-content-title-intro"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All that you need to know about</h3></span>
<h3 class="snp-content-title-large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cognate global business solution..</h3>



     <!-- <div class="u-clearfix u-sheet u-sheet-1 u-align-left u-clearfix u-sheet u-sheet-1">
       <div class="grid-col-1-1">
        <span class="snp-content-title-intro">All that you need to know about </span>
<h1 class="snp-content-title-large "style="color:black; font-size:50px;">Cognate global</h1>-->
       <!-- <h1 class="u-align-left u-text u-text-default u-text-1" style="color:red; font-size:110px;"><h3>All that you need to know about</h3>
          <br><strong><h1>Cognate global solution..</h1></strong></h1>
           
           <div class="u-align-right u-clearfix u-sheet u-sheet-1">-->

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/tss1.gif" alt=""width=540>
       <!-- </div>
      </div></div></div>--> </section>
         <section class="u-clearfix u-grey-5 u-lightbox text-capitalize u-section-1" id="sec-de5a">
         <!-- <div class="u-align-left u-clearfix u-sheet u-sheet-1">-->
        <p class="u-text u-text-left u-text-1"><h2><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cognate Benefits :</strong></h2><span style="font-weight: 700;"></span>
        </p>
       <!--<div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                
              </div>
            </div>
          <h3>-->
          <h4>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Staffing and Consulting Services.Consultative approach backed with expertise across multiple technologies.Flat Management Structure,prompt decision  with flexible approach to help changing dynamics of the projects.</h4><!--</h3>-->
        <!-- </p> -->
      <!--</div>
    </div>-->
    </section>
      <section>


     <p class="u-text u-text-left u-text-1"><h2><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which one makes us different :</strong></h2><span style="font-weight: 50;"></span>
      <!--<a class="btn btn-primary u-align-right u-text u-text-right u-text-black u-text-1" href="/cognate global solution/why-should-you-work-with-cognate global solution/">see the difference</a>-->
      <img src="images/download.jpg" alt="" height=640 width=1600> </p>
<!--quick learning.<br>
positive approaches.<br>
confidentiality.<br>-->

        
       <!-- <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
             </div>
            </div>
           <h3> 
          <br>
          creative thinking .<br>
          <br>
          speed performance<br>
          <br>
          creative thinking.<br>
          <br>
          broad knowledge in development.<br>
          <br>
          quick accessor.</h3></p>
      </div>-->
     <!--<div class="box-inner snp-img-text">-->
     <!--<div class="snp-img-text-inner snp-img-text-align-right">-->
        
      <!--</div>
      </div>
      </div>
    </div>-->
  </section>
   
       <section class="u-clearfix u-grey-5 u-lightbox u-section-1" id="sec-de5a">
         <!-- <div class="u-align-right u-clearfix u-sheet u-sheet-1">-->
        <p class="u-text u-text-center u-text-1"><h2><strong><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are here to help ur organisation's growth :</strong></h2><span style="font-weight: 700;"></span>
          
      <br>
          <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Whatever your hiring needs,We provide recruitment solutions for a wide range of technology skill.sets and requirements from custom development work to engineering solutions migrations,up,grades and more.Read about our complete range of tech solutions here.<br>
       </h4>
     </p>
      <!-- </div> -->
    </section>
    <img src="images/account-management-development.jpg" alt=""height=640 width=1600>
    
    <section class="u-clearfix u-grey-5 u-lightbox  u-section-1" id="sec-de5a">
      <h1 class="u-align-left u-text u-text-left u-text-black u-text-1">
          <!--<div class="u-align-left u-clearfix u-sheet u-sheet-1">-->
        <p class="u-text u-text-left u-text-1"><h2><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provided Services :</strong></h2><span style="font-weight: 700;"></span></p>
          
    
     <!--<h1 class="u-align-center u-text u-text-center u-text-black u-text-1">-->
    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">1)Application services</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">2)infrastructure as service</h4><br></a>

    <!--<svg>
    <svg id="arrow-right" viewbox="0 0 50 50" width="50%" height="50%">
    <path d="M2,10.9374 L15.604,10.9374 L11.289,15.2964 C10.9,15.6884 10.904,16.3224 11.297,16.7104 C11.688,17.0994 12.323,17.0954 12.711,16.7034 L18.711,10.6414 C18.897,10.4524 19.001,10.1974 19,9.9324 C18.999,9.6664 18.892,9.4134 18.703,9.2264 L12.703,3.2894 C12.509,3.0964 12.254,3.0004 12,3.0004 C11.742,3.0004 11.484,3.0994 11.289,3.2964 C10.9,3.6884 10.904,4.3224 11.297,4.7104 L15.568,8.9374 L2,8.9374 C1.447,8.9374 1,9.3854 1,9.9374 C1,10.4894 1.447,10.9374 2,10.9374"></path>
    </svg>
    </svg>
    </span>
  </h1>-->
      <!--<h1 class="u-align-left u-text u-text-left u-text-black u-text-1" >-->
   <!-- <span class="box-text icon">--><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">3)end user services</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">4)embedded technologies/IOT</h4><br></a><!--</span>-->
    <!--<svg>
    <svg id="arrow-right" viewbox="0 0 50 50" width="50%" height="50%">
    <path d="M2,10.9374 L15.604,10.9374 L11.289,15.2964 C10.9,15.6884 10.904,16.3224 11.297,16.7104 C11.688,17.0994 12.323,17.0954 12.711,16.7034 L18.711,10.6414 C18.897,10.4524 19.001,10.1974 19,9.9324 C18.999,9.6664 18.892,9.4134 18.703,9.2264 L12.703,3.2894 C12.509,3.0964 12.254,3.0004 12,3.0004 C11.742,3.0004 11.484,3.0994 11.289,3.2964 C10.9,3.6884 10.904,4.3224 11.297,4.7104 L15.568,8.9374 L2,8.9374 C1.447,8.9374 1,9.3854 1,9.9374 C1,10.4894 1.447,10.9374 2,10.9374"></path>
    </svg>
    </svg>-->
    <!-- </span> 
  </h1>-->
     <!--<h1 class="u-align-center u-text u-text-left u-text-black u-text-1" >-->
    <!--<span class="box-text icon">--><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">5)strategy and architecture</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">6)POM services</h4><br></a><!--</span>-->
    
    <!--<svg>
        <svg id="arrow-right" viewbox="0 0 50 50" width="50%" height="50%">
          <path d="M2,10.9374 L15.604,10.9374 L11.289,15.2964 C10.9,15.6884 10.904,16.3224 11.297,16.7104 C11.688,17.0994 12.323,17.0954 12.711,16.7034 L18.711,10.6414 C18.897,10.4524 19.001,10.1974 19,9.9324 C18.999,9.6664 18.892,9.4134 18.703,9.2264 L12.703,3.2894 C12.509,3.0964 12.254,3.0004 12,3.0004 C11.742,3.0004 11.484,3.0994 11.289,3.2964 C10.9,3.6884 10.904,4.3224 11.297,4.7104 L15.568,8.9374 L2,8.9374 C1.447,8.9374 1,9.3854 1,9.9374 C1,10.4894 1.447,10.9374 2,10.9374"></path>
          </svg>
            </svg>-->
              <!-- </span> -->
            <!--</h1>
                <h1 class="u-align-left u-text u-text-left u-text-black u-text-1" >-->
                  <!--<span class="box-text icon">--><!--<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) embedded technologies & IoT</h3><br>--><!--</span>-->
              <!--<svg>
                <svg id="arrow-right" viewbox="0 0 50 50" width="50%" height="50%">
              <path d="M2,10.9374 L15.604,10.9374 L11.289,15.2964 C10.9,15.6884 10.904,16.3224 11.297,16.7104 C11.688,17.0994 12.323,17.0954 12.711,16.7034 L18.711,10.6414 C18.897,10.4524 19.001,10.1974 19,9.9324 C18.999,9.6664 18.892,9.4134 18.703,9.2264 L12.703,3.2894 C12.509,3.0964 12.254,3.0004 12,3.0004 C11.742,3.0004 11.484,3.0994 11.289,3.2964 C10.9,3.6884 10.904,4.3224 11.297,4.7104 L15.568,8.9374 L2,8.9374 C1.447,8.9374 1,9.3854 1,9.9374 C1,10.4894 1.447,10.9374 2,10.9374"></path>
                </svg>
            </svg>
        </span>-->
     <!-- </h1>
          <h1 class="u-align-left u-text u-text-left u-text-black u-text-1" >
                <span class="box-text icon">--><!--<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5) strategy and architecture</h3><br>-->
                  <!--</span>-->
          <!--<svg>
          <svg id="arrow-right" viewbox="0 0 50 50" width="50%" height="50%">
          <path d="M2,10.9374 L15.604,10.9374 L11.289,15.2964 C10.9,15.6884 10.904,16.3224 11.297,16.7104 C11.688,17.0994 12.323,17.0954 12.711,16.7034 L18.711,10.6414 C18.897,10.4524 19.001,10.1974 19,9.9324 C18.999,9.6664 18.892,9.4134 18.703,9.2264 L12.703,3.2894 C12.509,3.0964 12.254,3.0004 12,3.0004 C11.742,3.0004 11.484,3.0994 11.289,3.2964 C10.9,3.6884 10.904,4.3224 11.297,4.7104 L15.568,8.9374 L2,8.9374 C1.447,8.9374 1,9.3854 1,9.9374 C1,10.4894 1.447,10.9374 2,10.9374"></path>
          </svg>
        </svg>
      </span>-->
    <!--</h1>
        <h1 class="u-align-left u-text u-text-left u-text-black u-text-1" >
      <span class="box-text icon">--><!--<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6) PMO services</h3><br>--><!--</span>-->
    </h1>
  </section>
    
       <section class="u-clearfix u-custom-color-2 u-section-2" id="sec-2d18">
        <h1 class="u-align-left u-text u-text-left u-text-black u-text-1"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Connect with our cognate global
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and get practiced..</h2></h1>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="" class="btn head-btn2 " style="align-right">Contact us</a>
              </a>
          <br><br>

    </section>
     
            
    <section class="u-clearfix u-grey-5 u-lightbox  u-section-1" id="sec-de5a">
          
        <p class="u-text u-text-left u-text-1"><h1><strong><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Insdustries we support :
         <img src="images/tse3.gif" alt="" width=1600>

        </strong></h1><span style="font-weight: 700;"></span>
          <!--<img src="images/internet.png" alt="" >-->
        </p>
        <p>
        
          <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We service a wide range of customers from startups to the best-of-breed tech giants and Fortune 100 companies.Our specialist consultants and  recruiters support client requirements for talent solutions across industries from aircraft and aerospace, to pharma,retail,software development,insurance and telecommunications.</h4><br>
          
        </p>
        <img src="images/account-management development.jpg" alt="" >

      </section>

      <section class="u-clearfix u-custom-color-2 u-section-2" id="sec-2d18">
        
      <h1 class="u-align-left u-text u-text-left u-text-white u-text-1">Insights and Impact stories</h1>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="" class="btn head-btn2 " style="align-right">know more</a>
              
            <br><br>
            </section>
     
    
    <?php include "footer.php"; ?>


        <script>

const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

</script>           
