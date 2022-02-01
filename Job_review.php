<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>


<?php

if(isset($_GET['Job_details'])){

  $the_id = $_GET['Job_details'];

  $query="SELECT * FROM Jobs WHERE id='$the_id'";
  $Jobs_list=mysqli_query($connection,$query);

  while($row=mysqli_fetch_array($Jobs_list)){

     $the_id = $row['id'];
     $Job_title = $row['Job_title'];
     $Job_Email = $row['Email'];
     $Job_description = $row['Job_description'];

}

}

?> 

<?php

if(isset($_SESSION['Email'])){

     $Email =  $_SESSION['Email'];       
        
     $query="SELECT * FROM users WHERE Email = '{$Email}' ";
     $select_user_profile = mysqli_query($connection,$query);

      
     while($row=mysqli_fetch_array($select_user_profile)){

           $id = $row['id'];
           $Fullname=  $row['Fullname'];
           $Email    = $row['Email'];
           $Password = $row['Password'];
           $Phone=  $row['Phone'];
           $Image=  $row['Image'];
           $City=  $row['City'];
           $Industry=  $row['Industry'];
           $Function=  $row['Function'];
           $Education =$row['Education'];
           $Experience =$row['Experience'];
           $Expected_Salary_thousand =$row['Expected_Salary_thousand'];
           $CV = $row['CV'];
            
           }

         }

      ?>

<?php

if(isset($_POST['submit'])){

  $Email =  $_SESSION['Email'];       
        
     $query="SELECT * FROM users WHERE Email = '{$Email}' ";
     $select_user_profile = mysqli_query($connection,$query);
      
     while($row=mysqli_fetch_array($select_user_profile)){

           $id = $row['id'];
           $Fullname=  $row['Fullname'];
           $Email    = $row['Email'];
           $Password = $row['Password'];
           $Phone=  $row['Phone'];
           $Image=  $row['Image'];
           $City=  $row['City'];
           $Industry=  $row['Industry'];
           $Function=  $row['Function'];
           $Education =$row['Education'];
           $Experience =$row['Experience'];
           $Salary =$row['Salary'];
           $CV = $row['CV'];
            
           }

require 'PHPMailer/PHPMailerAutoload.php';
require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth = true;
$mail->SMTPSecure='tls';

$mail->Username = 'CGBSTech2021@gmail.com';
$mail->Password = 'cgbs@2021';

$mail->setFrom ('CGBSTech2021@gmail.com');
$mail->addAddress($Email,$Fullname);

$mail->isHTML(true);
$mail->Subject = "Job Applied Successfully";
$mail->Body    = 'Hi'.' '.$Fullname.'<br><br>You have successfully applied for a job';

if(!$mail->send()) {
   echo "Message could not be sent.". $mail->ErrorInfo;
}else{
     $success="You have successfully applied for a job";
}


  $the_id = $_GET['Job_details'];

  $query="SELECT * FROM Jobs WHERE id='$the_id'";
  $Jobs_list=mysqli_query($connection,$query);

  while($row=mysqli_fetch_array($Jobs_list)){

     $the_id = $row['id'];
     $the_Fullname = $row['Fullname'];
     $Job_title = $row['Job_title'];
     $Job_Email = $row['Email'];
     $Job_description = $row['Job_description'];

 }

$receiver_mail = new PHPMailer;

$receiver_mail->isSMTP();

$receiver_mail->Host = 'smtp.gmail.com';
$receiver_mail->Port=587;
$receiver_mail->SMTPAuth = true;
$receiver_mail->SMTPSecure='tls';


$receiver_mail->Username = 'CGBSTech2021@gmail.com';
$receiver_mail->Password = 'cgbs@2021';

$receiver_mail->setFrom ('CGBSTech2021@gmail.com');
$receiver_mail->addAddress($Job_Email,$the_Fullname);

$receiver_mail->isHTML(true);
$receiver_mail->Subject = "Resume for a job";
$receiver_mail->Body    = 'Hi'.' '.$the_Fullname.'<br><br>'.' '.$Fullname.' '.'Applied for a job';

if(!$receiver_mail->send()) {
   echo "Message could not be sent.". $receiver_mail->ErrorInfo;
}else{
     $receiver_success="Mail sent successfully";
}

}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<!--tittle-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGBS-Review your details </title>
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
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Job_seeker.php">Job Seeker</a>
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
         
    <li><a href="submit_job.php">Submit Job</a></li><br>
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

   <section class="u-clearfix u-section-1" id="sec-8459">
      <div class="u-clearfix u-sheet u-sheet-1"><br>
        <div class="u-border-2 u-border-grey-5 u-container-style u-expanded-width-xs u-group u-radius-8 u-shape-round u-group-8">
        <div class="u-container-layout u-container-layout-8">
       <div class="u-layout-row">
        
        <div class="col-sm-6 col-md-6">
        <h6 class="u-text u-text-20 u-align-left" style="padding-left: 3px;">

          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
           <!--  <a class="nav-link active" id="easyA-tab" data-toggle="tab" href="Job_seeker.php" role="tab" aria-controls="easyA" aria-selected="false" name="Easy_Apply">Easy Apply</a> -->
            <a class="nav-link active" id="easyA-tab" href="" role="tab" aria-controls="easyA" aria-selected="false" name="Easy_Apply">Easy Apply</a>
            </li>
          </ul>
          <div class="text">Apply for this job</div><br>
          <p>Review your details here</p>
          <?php
            
            if(isset($_SESSION['status'])){
            ?> 
       <h6 class="" style="color:#13b013"> 
        <?php   echo $_SESSION['status'];  ?>    
        </h6>
        <?php
            }

           ?>
         <h6 class="" style="color:#13b013"><?php echo $success; ?></h6>
         <h6 class="" style="color:#13b013"><?php echo $receiver_success; ?></h6>
         <br>
        <form action="" method="POST" source="custom" name="form" enctype="multipart/form-data" style="padding: 0px;" redirect="true">

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Email: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Email; ?></span>
          <!-- <input type="text" value="<?php echo $Email; ?>" class="form-control" name="Email"> -->
          <br>
          <br>
          
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Fullname: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Fullname; ?></span>
          <!-- <input type="text" value="<?php echo $Fullname; ?>" class="form-control" name="Fullname"> -->
          <br>
          <br>

           <span style="font-weight: 600;"class="col-sm-3 col-form-label">Contact Number: </span><br><br>
           <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Phone; ?></span>
          <!-- <input type="text" value="<?php echo $Phone; ?>" class="form-control" name="Phone"> -->
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">City: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $City; ?></span>
          <!-- <input type="text" value="<?php echo $City; ?>" class="form-control" name="City"> -->
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Job Title: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Job_title; ?></span>
          <!-- <input type="text" value="<?php echo $Job_Title; ?>" class="form-control" name="Job Title"> -->
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Expected Pay Rate: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Expected_Salary_thousand; ?></span>
          <!-- <input type="text" value="<?php echo $Expected_Pay_Rate; ?>" class="form-control" name="Expected Pay Rate"> -->
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Resume:</span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $CV; ?></span>

          <br>
          <br>
       <!-- <div class="u-align-center u-form-group u-form-submit">
        <a href="" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-1-light-2 u-radius-17 u-btn-1">Submit</a> -->
        <input type="submit" name="submit" value="submit" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-1-light-2 u-radius-17 u-btn-1">
       <!-- </div> -->
       </form>
          </h6>
          </div>
          <div class="col-sm-6 col-md-6">

            <h6 class="u-align-right" style="padding-left: 40px;">

             <div class="backTo" style="margin-left:285px;">
                <a href="Apply_Job.php?Job_details=<?php echo $the_id ?>&<?php echo $Job_title ?>" class="back_to_search_btn"><img src="" alt=""> Back to search</a>
              </div>

 <p class="u-align-left u-text u-text-left u-text-black u-text-8"width="550" height="350"> <?php echo $Job_description; ?></p>
             
                  
 </h6>
</div>
</div>
</div>
</div>
</div>

</div>    
</div>
</section>
<br>
    
 <?php include "footer.php"; ?>