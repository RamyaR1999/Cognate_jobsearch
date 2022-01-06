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
     $Job_specification = $row['Job_specification'];

}

}

?> 

<?php

if(isset($_SESSION['id'])){

     $db_id =  $_SESSION['id'];  
           
     $query="SELECT * FROM users WHERE id = '{$db_id}' ";
     $select_register_profile = mysqli_query($connection,$query);

      
     while($row=mysqli_fetch_array($select_register_profile)){

           $id = $row['id'];
           $Firstname=  $row['Firstname'];
           $Lastname=  $row['Lastname'];
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

if(isset($_POST['submit'])){

require 'PHPMailer/PHPMailerAutoload.php';
require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth = true;
$mail->SMTPSecure='tls';

           $Firstname=  $_POST['Firstname'];
           $Lastname=  $_POST['Lastname'];
           $Email    = $_POST['Email'];
           $Phone=  $_POST['Phone'];
           $City=  $_POST['City'];
           $Industry=  $_POST['Industry'];
           $Function=  $_POST['Function'];
           $Education =$_POST['Education'];
           $Expected_Salary_thousand =$_POST['Expected_Salary_thousand'];
       //     $CV = $_FILES['file']['name'];
       //     $upload = $_FILES['file']['tmp_name'];

       //  move_uploaded_file($upload,"images/$CV");
        
       // if(empty($CV)){

       //  $query = "SELECT * FROM users WHERE id = $id ";
       //  $select_cv = mysqli_query($connection,$query);
            
       //  while($row = mysqli_fetch_array($select_cv)){

       //  $CV = $row['CV'];
          
       //     }

       //  }
       
        if(preg_match('/^[\p{L} ]+$/u', $Firstname)) {
          
        if(preg_match('/^[\p{L} ]+$/u', $Lastname)) {  

        if(!empty($CV)){
              
    $query="UPDATE users SET Firstname= '{$Firstname}', Lastname= '{$Lastname}', Email= '{$Email}',CV='{$CV}' WHERE id= '{$db_id}' ";  
                      
        $update_profile_query=mysqli_query($connection,$query);

         if(!$update_profile_query) {
            
            die("Query Failed" . mysqli_error($connection));
        }


        $_SESSION['Firstname'] = $Firstname;
        $_SESSION['Lastname'] = $Lastname;
        $_SESSION['Image'] = $Image;
        $_SESSION['Email'] = $Email;
        $_SESSION['Phone'] = $Phone;
        $_SESSION['City'] = $City;
        $_SESSION['Industry'] = $Industry;
        $_SESSION['Function'] = $Function;
        $_SESSION['Education'] = $Education;
        $_SESSION['Expected_Salary_thousand'] = $Expected_Salary_thousand;
        $_SESSION['CV'] = $CV;


$mail->Username = 'CGBSTech2021@gmail.com';
$mail->Password = 'cgbs@2021';

$mail->setFrom ('CGBSTech2021@gmail.com');
$mail->addAddress($Email,$Firstname);

$mail->isHTML(true);
$mail->Subject = "Job Applied Successfully";
$mail->Body    = 'Hi'.' '.$Firstname.'<br><br>You have successfully applied for a job';

if(!$mail->send()) {
   echo "Message could not be sent.". $mail->ErrorInfo;
}else{
     $_SESSION['status']="You have successfully applied for a job you can update your details here";
  // echo " otp sent successfully to ur mail: " ;
}

 $the_id = $_GET['Job_details'];

  $query="SELECT * FROM Jobs WHERE id='$the_id'";
  $Jobs_list=mysqli_query($connection,$query);

  while($row=mysqli_fetch_array($Jobs_list)){

     $the_id = $row['id'];
     $the_Firstname = $row['Firstname'];
     $Job_title = $row['Job_title'];
     $Job_Email = $row['Email'];
     $Job_specification = $row['Job_specification'];

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
$receiver_mail->addAddress($Job_Email,$the_Firstname);
// $receiver_mail->addAttachment($CV);
$receiver_mail->addAttachment($_FILES['file']['tmp_name'],$_FILES['file']['name']);
$receiver_mail->isHTML(true);
$receiver_mail->Subject = "Resume for a job";
$receiver_mail->Body    = 'Hi'.' '.$the_Firstname.'<br><br>'.' '.$Firstname.' '.'Applied for a job';
if(!$receiver_mail->send()) {
   echo "Message could not be sent.". $receiver_mail->ErrorInfo;

}else{

   $CV = $_FILES['file']['name'];
           $upload = $_FILES['file']['tmp_name'];

        move_uploaded_file($upload,"images/$CV");
   if(empty($CV)){

        $query = "SELECT * FROM users WHERE id = $id ";
        $select_cv = mysqli_query($connection,$query);
            
        while($row = mysqli_fetch_array($select_cv)){

        $CV = $row['CV'];
          
           }

        }
              
       $query="UPDATE users SET CV='{$CV}' WHERE id= '{$db_id}' ";  
                      
        $update_profile_query=mysqli_query($connection,$query);

         if(!$update_profile_query) {
            
            die("Query Failed" . mysqli_error($connection));
        }

    header("Location:Jobseeker_full_profile.php?profile=$id");
}
 

        }else{
             $empty_cv ="please Signin";
             
        } 

        }else{
             $message_Lastname ="Only Alphabets are allowed in lastname";
            
        }

        }else{
             $message_Firstname ="Only Alphabets are allowed in firstname";
          
        }
                   
}

  ?>

<!doctype html>
<html class="no-js" lang="zxx">

<!--tittle-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGBS-Apply job </title>
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
  span{
    font-family: "Barlow",sans-serif;
   font-weight: 400;
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
            <a class="nav-link active" id="easyA-tab" href="Apply_Job.php?Job_details=<?php echo $the_id ?>&<?php echo $Job_title ?>" role="tab" aria-controls="easyA" aria-selected="false" name="Easy_Apply">Easy Apply</a>
            </li>

            <li class="nav-item">
           <div class="u-align-center u-form-group u-form-submit">
            <a class="nav-link" id="rsLogin-tab" href="Signin_Job.php?Job_details=<?php echo $the_id ?>&<?php echo $Job_title ?>" role="tab" aria-controls="rsLogin" aria-selected="true">Sign In</a>
            <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
           </div>
            </li>
          </ul>

          <div class="text">Apply for this job</div><br>
          <p>Fill in the form below to apply for this job.</p>
          <!-- <h6 class="" style="color:#13b013"><?php echo $success; ?></h6>
          <h6 class="" style="color:#13b013"><?php echo $receiver_success; ?></h6> -->

          <h6 class="" style="color:#13b013"><?php echo $empty_cv; ?></h6>
          <br>
         <form action="" method="POST" enctype="multipart/form-data" source="custom" name="form" style="padding: 0px;" redirect="true">

          <span class="col-sm-3 col-form-label">Firstname: </span>
          <input type="text" value="<?php echo $Firstname; ?>" class="form-control" name="Firstname" required="">
          <br>
          <br>

          <span class="col-sm-3 col-form-label">Lastname: </span>
          <input type="text" value="<?php echo $Lastname; ?>" class="form-control" name="Lastname" required="">
          <br>
          <br>

          <span class="col-sm-3 col-form-label">Email: </span>
          <input type="text" value="<?php echo $Email; ?>" class="form-control" name="Email" required="">
          <br>
          <br>

          <span class="col-sm-3 col-form-label">Resume:</span>
          <div class="col-md-6">
             <div class="form-group row">
                <input type="file" name="file"><?php //echo $CV; ?>
                <h6 style="color:#a7b0a9">choose your CV here</h6>
             </div>
          </div>
          <br>
          <div class="u-form-group u-form-submit">
            <input type="submit" name="submit" value="submit" class="btn head-btn1">
          </div>
          <br>
     </form>
            </h6>
          </div>
          <div class="col-sm-6 col-md-6">

            <h6 class="u-align-right" style="padding-left: 40px;">

             <div class="backTo" style="margin-left:285px;">
              
         
                <a href="Available_jobs.php" class="back_to_search_btn"><img src="" alt="">Back to search</a>
              </div>

 
 <p class="u-align-left u-text u-text-left u-text-black u-text-8"width="550" height="350"> <?php echo $Job_specification; ?></p>

                
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