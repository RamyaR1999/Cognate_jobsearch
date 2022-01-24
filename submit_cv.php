<?php session_start(); ?>
<?php include "db.php"; ?>
<?php

if(isset($_POST['submit'])){ 
     
   require 'PHPMailer/PHPMailerAutoload.php';
   require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer;
$link = "http://localhost:8889/demo/Cognate_jobsearch/email_verification.php";

//OTP generate
$rndno=rand(100000, 999999);

#$mail->SMTPDebug = 3;

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth = true;
$mail->SMTPSecure='tls'; 

         
         $Fullname=  $_POST['Fullname'];
         $Email    = $_POST['Email'];
         $Password = $_POST['Password'];
         $Confirm_password = $_POST['Confirm_password'];
         $Phone=  $_POST['Phone'];
         $Image=  $_POST['Image'];
         $City=  $_POST['City'];
         $Industry=  $_POST['Industry'];
         $Skills = $_POST['Skills'];
         $Function=  $_POST['Function'];
         $Education =$_POST['Education'];
         $Experience_years =$_POST['Experience_years'];
         $Experience_months =$_POST['Experience_months'];
         $Current_Salary_lakhs =$_POST['Current_Salary_lakhs'];
         $Current_Salary_thousand =$_POST['Current_Salary_thousand'];
         $Expected_Salary_lakhs =$_POST['Expected_Salary_lakhs'];
         $Expected_Salary_thousand =$_POST['Expected_Salary_thousand'];
         
         $email_verification_link = $_POST['email_verification_link'];
         // $CV = $_FILES['CV']['Name'];
         // $upload = "uploads/".$CV;

         $CV = $_FILES['file']['name'];
         $upload_tempname = $_FILES['file']['tmp_name'];
         $upload_dir = 'images';

         $otp=$_POST['otp'];
         $otp=$rndno;
         $error = 0;

        move_uploaded_file($upload_tempname,$upload_dir.'/'.$CV);
          // if(empty($Image)){
            
          //   $query = "SELECT * FROM users WHERE id = $id ";
          //   $select_image = mysqli_query($connection,$query);
                
          //   while($row = mysqli_fetch_array($select_image)){
                
          //   $CV = $row['CV'];
              
          //      }
            
          // }

      if(!empty($Fullname) && !empty($Phone) && !empty($Email) && !empty($Password) && !empty($City) && !empty($Industry) && !empty($Skills) && !empty($Function) && !empty($Education) && !empty($Experience_years) && !empty($Experience_months) && !empty($Current_Salary_lakhs) && !empty($Current_Salary_thousand) && !empty($Expected_Salary_lakhs) && !empty($Expected_Salary_thousand) && !empty($upload_tempname)){
       
      $Password = mysqli_real_escape_string($connection,$_POST['Password']);
      $Confirm_password = mysqli_real_escape_string($connection,$_POST['Confirm_password']);
      $Password = md5($Password);              
      $Confirm_password = md5($Confirm_password);              
     
      if(preg_match('/^[\p{L} ]+$/u', $Fullname)) {
            
            
        $uppercase  = preg_match('@[A-Z]@', $Password);
        $lowercase  = preg_match('@[a-z]@', $Password);
        $number     = preg_match('@[0-9]@', $Password);
        $character  = preg_match('/[\'^£!$%&*()}{@#~?><>,|=_+-]/', $Password);

        if(strlen($Password) >= 8) {
            
        if($Password == $Confirm_password){
        
        if(preg_match("/^[0-9]{10}$/", $Phone)) {   



        if(!$error){
        $check_query= "SELECT * FROM users WHERE Email = '{$Email}' ";
        $check_users_query = mysqli_query($connection,$check_query);

        if(mysqli_num_rows($check_users_query) > 0){

          $row = mysqli_fetch_assoc($check_users_query);

            if($Email==$row['Email'])
            {
                $message_Email= "Email already exists";
            }
        }else {

        
        $query = "INSERT INTO users (Fullname,Email,email_verification_link,Password,Confirm_password,Phone,Image,City,Industry,Skills,Function,Education,Experience_years,Experience_months,Current_Salary_lakhs,Current_Salary_thousand,Expected_Salary_lakhs,Expected_Salary_thousand,CV, otp) ";
        $query .= "VALUES ('{$Fullname}','{$Email}','{$link}','{$Password}','{$Confirm_password}','{$Phone}','profile.png','$City','$Industry','$Skills','$Function','$Education','$Experience_years','$Experience_months','$Current_Salary_lakhs','$Current_Salary_thousand','$Expected_Salary_lakhs','$Expected_Salary_thousand','$CV','$rndno')";
             
        $register_query = mysqli_query($connection,$query);
            
        // move_uploaded_file($upload,"images/$CV");
      
        if(!$register_query) {
            
            die("Query Failed" . mysqli_error($connection) .' '. mysqli_error($connection));
        }
          
         $_SESSION['status'] = "Registration Was Successful Please Sign In";

          $_SESSION['otp'] = $otp;
          $_SESSION['email'] = $email;
          $_SESSION['email_verification_link'] = $email_verification_link; 


          $mail->Username = 'CGBSTech2021@gmail.com';
          $mail->Password = 'cgbs@2021';

          $mail->setFrom ('barthalomena@gmail.com');
          $mail->addAddress($_POST['Email'],$_POST['Fullname']);
          #$mail->addReplyTo( $_POST['email'],$_POST['name']);
          
          $mail->isHTML(true);
          $mail->Subject = "Email Verification";
          $mail->Body    = 'Here is the verification link'.' '.$link;
          
          if(!$mail->send()) {
             echo "Message could not be sent.". $mail->ErrorInfo;
          }else{
             $message =  '<label class="text-success">Register Done, Please check your mail.</label>';
          }        
           
              // header( "Location: otp.php" ); 
        
 }

}
          }else{
              $message_phone = "Invalid Phone No";
            
        }
            
          }else{
            
            $message_cpassword = "password mismatch";
        }
       
          }else{
              $message_strnpassword = "password contain atleast 8 characters";
              
       }

          }else{
              $message_Fullname ="Only Alphabets are allowed in Fullname";
          
       }
          
          }else{
             // $empty_Fullname = "Fullname is required";
             // $empty_email = "email is required";
             // $empty_password = "password is required";
             // $empty_cpassword = "confirm password is required";
             // $empty_phone = "phone number is required";
             // $empty_city = "city is required";
             // $empty_industry = "industry is required";
             // $empty_function = "function is required";
             // $empty_education = "education is required";
             // $empty_experience = "experience is required";
             // $empty_salary = "salary is required";
             // $empty_cv = "CV is required";
             $message = "All fields are required *";
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
    <title>CGBS-Submit your CV</title>
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
<link rel="stylesheet" href="Register-Member.css" media="screen">
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

    <li><a href="Register-Member.php">Submit Your Resume</a></li>    
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
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Services.php">Services</a>

  <ul class="submenu">
         
    <li><a href="submit_job.php">Submit A job</a></li>
   <!--  <li><a href="request_callback.php">Request A Call Back</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="ourSolution.php">Our Solutions</a></li> -->
    <li><a href="Contact.php">Contact</a></li>
     
  </ul>

</li>
     <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About_us.php">About</a>


</li>
     <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact_us.php">Contact</a>

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

<style>
.u-input {
  display: block;
  width: 100%;
  padding: 10px 12px;
  background-image: none;
  background-clip: padding-box;
  border: 1px solid #c9ced1;
  border-radius: 3px;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  background-color: #ffffff;
  color: inherit;
  height: 48px;
}
  .u-input ~ .focus-border{
    position: absolute;
    height: 48px;
    bottom: 0;
    left: 0;
    /*width: 0;*/
    transition: 0.4s;
    border-radius: 2px;
    }
   .u-input:focus ~ .focus-border{
     width: 100%;
     transition: 0.4s;
     border: 1px solid #3399FF;
     cursor: text;
    } 
   .col-sm-12{
    padding-right: 0px;
    padding-left: 0px
    }
</style>
<style>
  span{
    font-family: "Barlow",sans-serif;
   font-weight: 400;
  }
</style>

  <section class="u-clearfix u-custom-color-2 u-section-2" id="sec-2d18">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-left u-text u-text-default u-text-1">Upload Your Resume Here</h1>
        <h1 class="u-align-left u-text u-text-custom-color-1 u-text-default u-text-2"></h1>
        <p class="u-align-left u-text u-text-default u-text-3"></p>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-1" id="sec-6065">
      <div class="u-align-left card-header bg-transparent border-0">
            <h3 class="mb-0" style="font-weight: 400;text-align: left; padding-top: 10px;"><i class=""></i>Enter your Details:</h3>
        </div>
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-radius-10 u- #f2f2f2 u-form-1">
          <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" enctype="multipart/form-data" source="custom" name="form" style="padding: 0px;" redirect="true">
                <div class="col-md-13">
                   <h6 class="" style="color:#ff0017"><?php echo $message; ?></h6><br>
                   <span  class="">Fields marked with * are required fields</span>
                   <h6 class="text-center" style="color:#ff0000"></h6>
               </div>
                  <div class="u-form-group u-form-name u-form-group-1">
                     <span >Fullname * </span>
                     <div class="col-sm-12">
                          <input type="text" value="<?php echo $Fullname; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1"placeholder="Enter the Fullname" name="Fullname">
                          <span class="focus-border"></span>
                        </div>
                          <h6 style="color:#ff0000"><?php echo $message_Fullname; ?></h6>
                          <h6 style="color:#ff0000"><?php echo $empty_Fullname; ?></h6>
                      </div>&nbsp;
                      <div class="u-form-group u-form-name u-form-group-2">
                        <span >Email *</span>
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Email; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-2" placeholder="Enter the Email"name="Email">
                          <span class="focus-border"></span>
                        </div>
                          <h6 style="color:#ff0000"><?php echo $message_Email; ?></h6>
                          <h6 style="color:#ff0000"><?php echo $empty_email; ?></h6>
                      </div>&nbsp;

                      <div class="u-form-group u-form-name u-form-group-2">
                        <span >Password * </span>
                        <div class="col-sm-12">
                          <input type="Password" id="id_Password" name="Password" value="<?php echo isset($_POST["Password"]) ? $_POST["Password"] : ''; ?>" placeholder="Enter the Password "class="u-input u-input-rectangle u-radius-3 u-white u-input-3">
                           <span class="focus-border"></span>
                         </div>
                          <h6 class="text-center" style="color:#ff0000"><?php echo $message_strnpassword; ?></h6>
                           <h6 style="color:#ff0000"><?php echo $empty_password; ?></h6>
                        </div>&nbsp;
                      <div class="u-form-group u-form-name u-form-group-2">
                        <span > Confirm_password * </span>
                        <div class="col-sm-12">
                          <input type="Password"  value="<?php echo isset($_POST["Confirm_password"]) ? $_POST["Confirm_password"] : ''; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-4" placeholder="Enter the Confirm_password" name="Confirm_password">
                          <span class="focus-border"></span>
                        </div>
                          <h6 style="color:#ff0000"><?php echo $message_cpassword; ?></h6>
                          <h6 style="color:#ff0000"><?php echo $empty_cpassword; ?></h6>
                      </div>&nbsp;
                      <div class="u-form-group u-form-name u-form-group-2">
                        <span >Phone * </span>
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Phone; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-5"placeholder="Enter the Phone no " name="Phone">
                          <span class="focus-border"></span>
                        </div>
                        <h6 style="color:#a7adb8"><?php echo '10-digit mobile number without prefixes' ?></h6>
                          <h6 style="color:#ff0000"><?php echo $message_phone; ?></h6>
                          <h6 style="color:#ff0000"><?php echo $empty_phone; ?></h6>
                      </div>&nbsp;

                      <div class="u-form-group u-form-name u-form-group-2">
                        <span >City * </span>
                        <div class="col-sm-12">
                          <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-6" name="City"id="City">
                            <option value="">-- please select city --</option>
                            <option value="Agartala">Agartala</option>
                            <option value="Agra">Agra</option>
                            <option value="Ahmadnagar">Ahmadnagar</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Allahabad">Allahabad</option>
                            <option value="Amritsar">Amritsar</option>
                            <option value="Bengaluru / Bangalore">Bengaluru / Bangalore</option>
                            <option value="Bhubaneswar">Bhubaneswar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chandrapur">Chandrapur</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Chittoor">Chittoor</option>
                            <option value="Coimbatore">Coimbatore</option>
                            <option value="Cuttack">Cuttack</option>
                            <option value="Dahod">Dahod</option>
                            <option value="Daman">Daman</option>
                            <option value="Dehradun">Dehradun</option>
                            <option value="Delhi">Delhi</option>
                            <option value="Delhi / NCR">Delhi / NCR</option>
                            <option value="Dindigul">Dindigul</option>
                            <option value="Ernakulam">Ernakulam</option>
                          </select>&nbsp;
                          <!-- <span class="focus-border"></span> -->
                        </div>
                          <h6 style="color:#ff0000"><?php echo $empty_city; ?></h6>
                    </div>

      <div class="u-form-group u-form-name u-form-group-2">
        <span >Industry * </span>
        <div class="col-sm-12">
           <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-7" name="Industry"id="Industry">
              
              <option value="">-- please select sector --</option>
              <option value="Accounting / Finance">Accounting / Finance</option>
              <option value="Banking & finance">Banking &amp; finance</option>
              <option value="General Administration">General Administration</option>
              <option value="Human Resources">Human Resources</option>
              <option value="Information Technology">Information Technology</option>
              <option value="Insurance">Insurance</option>
              <option value="ITeS & BPO">ITeS &amp; BPO</option>
              <option value="Manufacturing">Manufacturing</option>
              <option value="Sales">Sales</option>
              <option value="FMCG">FMCG</option>
              <option value="Retail">Retail</option>
              <option value="Telecom">Telecom</option>
              <option value="Media & entertainment">Media &amp; entertainment</option>
              <option value="Education">Education</option>
              <option value="Hospitality & Tourism">Hospitality &amp; Tourism</option>
              <option value="Consulting & VC">Consulting &amp; VC</option>
              <option value="Other">Other</option>
          </select>&nbsp;
              <!-- <span class="focus-border"></span> -->
            </div>
            <h6 style="color:#ff0000"><?php echo $empty_industry; ?></h6>
      </div>

      <div class="u-form-group u-form-name u-form-group-2">
        <span >Function * </span>
        <div class="col-sm-12">
          <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-8" name="Function"id="Function">
            <option value="">-- please select function --</option>
            <option value="Accounting / Tax / Company Secretary / Audit">Accounting / Tax / Company Secretary / Audit</option>
            <option value="Agent">Agent</option>
            <option value="Airline / Reservations / Ticketing / Travel">Airline / Reservations / Ticketing / Travel</option>
            <option value="Analytics &amp; Business Intelligence">Analytics &amp; Business Intelligence</option>
            <option value="Anchoring / TV / Films / Production">Anchoring / TV / Films / Production</option>
            <option value="Architects / Interior Design / Naval Arch.">Architects / Interior Design / Naval Arch</option>
            <option value="Art Director / Graphic / Web Designer">Art Director / Graphic / Web Designer</option>
            <option value="Banking / Insurance">Banking / Insurance</option>
            <option value="Beauty / Fitness / Spa Services">Beauty / Fitness / Spa Services</option>
            <option value="Content / Journalism">Content / Journalism</option>
            <option value="Corporate Planning / Consulting">Corporate Planning / Consulting</option>
            <option value="CSR & Sustainability">CSR &amp; Sustainability</option>
            <option value="Engineering Design / R&D">Engineering Design / R&D</option>
            <option value="Export / Import / Merchandising">Export / Import / Merchandising</option>
            <option value="Fashion / Garments / Merchandising">Fashion / Garments / Merchandising</option>
            <option value="Guards / Security Services">Guards / Security Services</option>
            <option value="Hotels / Restaurants">Hotels / Restaurants</option>
            <option value="HR / Administration / IR">HR / Administration / IR</option>
            <option value="IT - Hardware / Telecom / Technical Staff / Support">IT - Hardware / Telecom / Technical Staff / Support</option>
            <option value="IT Software - Application Programming / Maintenance">IT Software - Application Programming / Maintenance</option>
            <option value="IT Software - Client Server">IT Software - Client Server</option>
            <option value="IT Software - DBA / Data warehousing">IT Software - DBA / Datawarehousing</option>
            <option value="IT Software - Ecommerce / Internet Technologies">IT Software - Ecommerce / Internet Technologies</option>
            <option value="IT Software - Embedded /EDA /VLSI /ASIC / Chip Des">IT Software - Embedded /EDA /VLSI /ASIC / Chip Des.</option>
            <option value="IT Software - ERP / CRM">IT Software - ERP / CRM</option>
            <option value="IT Software - Mainframe">IT Software - Mainframe</option>
            <option value="IT Software - Middleware">IT Software - Middleware</option>
            <option value="IT Software - Mobile">IT Software - Mobile</option>
            <option value="IT Software - Network Administration / Security">IT Software - Network Administration / Security</option>
            <option value="IT Software - QA & Testing">IT Software - QA & Testing</option>
            <option value="IT Software - System Programming">IT Software - System Programming</option>
            <option value="IT Software - Systems / EDP / MIS">IT Software - Systems / EDP / MIS</option>
            <option value="IT Software - Telecom Software">IT Software - Telecom Software</option>
            <option value="ITES / BPO / KPO / Customer Service / Operations">ITES / BPO / KPO / Customer Service / Operations</option>
            <option value="Other">Other</option>
            <!-- <option value="Legal">Legal</option>
            <option value="Marketing / Advertising / MR / PR">Marketing / Advertising / MR / PR</option>
            <option value="Packaging">Packaging</option>
            <option value="Pharma / Biotech / Healthcare / Medical / R&amp;D">Pharma / Biotech / Healthcare / Medical / R&amp;D</option>
            <option value="Production / Maintenance / Quality">Production / Maintenance / Quality</option>
            <option value="Purchase / Logistics / Supply Chain">Purchase / Logistics / Supply Chain</option>
            <option value="Sales / BD">Sales / BD</option>
            <option value="Secretary / Front Office / Data Entry">Secretary / Front Office / Data Entry</option>
            <option value="Self Employed / Consultants">Self Employed / Consultants</option>
            <option value="Shipping">Shipping</option>
            <option value="Site Engineering / Project Management">Site Engineering / Project Management</option>
            <option value="Teaching / Education">Teaching / Education</option>
            <option value="Ticketing / Travel / Airlines">Ticketing / Travel / Airlines</option>
            <option value="Top Management">Top Management</option>
            <option value="TV / Films / Production">TV / Films / Production</option>
            <option value="Web / Graphic Design / Visualiser">Web / Graphic Design / Visualiser</option> -->
        </select>&nbsp;
        <!-- <span class="focus-border"></span> -->
      </div>
        <h6 style="color:#ff0000"><?php echo $empty_function; ?></h6>
  </div>

                  <div class="u-form-group u-form-name u-form-group-2">
                    <span >Education * </span>
                    <div class="col-sm-12">
                        <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-9" name="Education"id="Education">
                          <option value="">-- please select education --</option>
                          <option value="B.A">B.A</option>
                          <option value="B.Arch">B.Arch</option>
                          <option value="B.Com">B.Com</option>
                          <option value="B.Ed">B.Ed</option>
                          <option value="B.Pharma">B.Pharma</option>
                          <option value="B.Sc">B.Sc</option>
                          <option value="B.Tech/B.E">B.Tech/B.E.</option>
                          <option value="BCA">BCA</option>
                          <option value="BDS">BDS</option>
                          <option value="BVSC">BVSC</option>
                          <option value="CA">CA</option>
                          <option value="CS">CS</option>
                          <option value="Diploma">Diploma</option>
                          <option value="H.Sc/+2/Intermediate">H.Sc/+2/Intermediate</option>
                          <option value="ICWA (CMA)">ICWA (CMA)</option>
                          <option value="ITI">ITI</option>
                          <option value="LLB">LLB</option>
                          <option value="LLM">LLM</option>
                          <option value="M.A">M.A</option>
                        </select>&nbsp;
                        <!-- <span class="focus-border"></span> -->
                      </div>
                        <h6 style="color:#ff0000"><?php echo $empty_education; ?></h6>
                  </div>

                  <div class="u-form-group u-form-name u-form-group-2">
                    <div class="u-layout-row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <span >Experience *</span><br>
                                <div class="col-sm-12">
                        <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-10" name="Experience_years"placeholder="Enter your Experience years"id="Experience_years">
                          <option value="">years</option>
                          <option value="0 years">0</option>
                          <option value="1 year">1</option>
                          <option value="2 years">2</option>
                          <option value="3 years">3</option>
                          <option value="4 years">4</option>
                          <option value="5 years">5</option>
                          <option value="6 years">6</option>
                          <option value="7 years">7</option>
                          <option value="8 years">8</option>
                          <option value="9 years">9</option>
                          <option value="10 years">10</option>
                          <option value="11 years">11</option>
                          <option value="12 years">12</option>
                          <option value="13 years">13</option>
                          <option value="14 years">14</option>
                          <option value="15 years">15</option>
                          <option value="16 years">16</option>
                          <option value="17 years">17</option>
                          <option value="18 years">18</option>
                          <option value="19 years">19</option>
                          <option value="20 years">20</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group row">
                       <span class="col-sm-3 col-form-label"></span>
                          <div class="col-sm-12">
                            <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-11" name="Experience_months" placeholder="Enter your Experience_months"id="Experience_years">
                             <option value="">months</option>
                          <option value="0 months">0</option>
                          <option value="1 month">1</option>
                          <option value="2 months">2</option>
                          <option value="3 months">3</option>
                          <option value="4 months">4</option>
                          <option value="5 months">5</option>
                          <option value="6 months">6</option>
                          <option value="7 months">7</option>
                          <option value="8 months">8</option>
                          <option value="9 months">9</option>
                          <option value="10 months">10</option>
                          <option value="11 months">11</option>
                          <option value="12 months">12</option>
                          <option value="13 months">13</option>
                          <option value="14 months">14</option>
                          <option value="15 months">15</option>
                          <option value="16 months">16</option>
                          <option value="17 months">17</option>
                          <option value="18 months">18</option>
                          <option value="19 months">19</option>
                          <option value="20 months">20</option>
                          <option value="21 months">21</option>
                          <option value="22 months">22</option>
                          <option value="23 months">23</option>
                          <option value="24 months">24</option>
                          <option value="25 months">25</option>
                          <option value="26 months">26</option>
                          <option value="27 months">27</option>
                          <option value="28 months">28</option>
                          <option value="29 months">29</option>
                          <option value="30 months">30</option>  
                        </select>
                          </div>
                    </div>
                 </div>
              </div>
                        <!-- <span class="focus-border"></span> -->
                     
                        <h6 style="color:#ff0000"><?php echo $empty_experience; ?></h6>
                  </div>

                  <div class="u-form-group u-form-name u-form-group-2">
                    <div class="u-layout-row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <span > Current Salary *</span>
                                <div class="col-sm-12">
                        <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-11" name="Current_Salary_lakhs" placeholder="Enter your Current Salary"id="Current_Salary">
                          <option value="">lakhs</option>
                          <option value="0 lakhs">0</option>
                          <option value="1 lakhs">1</option>
                          <option value="2 lakhs">2</option>
                          <option value="3 lakhs">3</option>
                          <option value="4 lakhs">4</option>
                          <option value="5 lakhs">5</option>
                          <option value="6 lakhs">6</option>
                          <option value="7 lakhs">7</option>
                          <option value="8 lakhs">8</option>
                          <option value="9 lakhs">9</option>
                          <option value="10 lakhs">10</option>
                          <option value="11 lakhs">11</option>
                          <option value="12 lakhs">12</option>
                          <option value="13 lakhs">13</option>
                          <option value="14 lakhs">14</option>
                          <option value="15 lakhs">15</option>
                          <option value="16 lakhs">16</option>
                          <option value="17 lakhs">17</option>
                          <option value="18 lakhs">18</option>
                          <option value="19 lakhs">19</option>
                          <option value="20 lakhs">20</option>
                          <option value="21 lakhs">21</option>
                          <option value="22 lakhs">22</option>
                          <option value="23 lakhs">23</option>
                          <option value="24 lakhs">24</option>
                          <option value="25 lakhs">25</option>
                          <option value="26 lakhs">26</option>
                          <option value="27 lakhs">27</option>
                          <option value="28 lakhs">28</option>
                          <option value="29 lakhs">29</option>
                          <option value="30 lakhs">30</option>  
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group row">
                       <span  class="col-sm-3 col-form-label"></span>
                          <div class="col-sm-12">
                            <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-11" name="Current_Salary_thousand" placeholder="Enter your  Expected Salary"id="Expected_Salary">
                             <option value="">thousand</option>
                          <option value="0">0</option>
                          <option value="1 thousand">1</option>
                          <option value="2 thousand">2</option>
                          <option value="3 thousand">3</option>
                          <option value="4 thousand">4</option>
                          <option value="5 thousand">5</option>
                          <option value="6 thousand">6</option>
                          <option value="7 thousand">7</option>
                          <option value="8 thousand">8</option>
                          <option value="9 thousand">9</option>
                          <option value="10 thousand">10</option>
                          <option value="11 thousand">11</option>
                          <option value="12 thousand">12</option>
                          <option value="13 thousand">13</option>
                          <option value="14 thousand">14</option>
                          <option value="15 thousand">15</option>
                          <option value="16 thousand">16</option>
                          <option value="17 thousand">17</option>
                          <option value="18 thousand">18</option>
                          <option value="19 thousand">19</option>
                          <option value="20 thousand">20</option>
                          <option value="21 thousand">21</option>
                          <option value="22 thousand">22</option>
                          <option value="23 thousand">23</option>
                          <option value="24 thousand">24</option>
                          <option value="25 thousand">25</option>
                          <option value="26 thousand">26</option>
                          <option value="27 thousand">27</option>
                          <option value="28 thousand">28</option>
                          <option value="29 thousand">29</option>
                          <option value="30 thousand">30</option>  
                        </select>
                          </div>
                    </div>
                 </div>
              </div>
                        <!-- <span class="focus-border"></span> -->
                    <h6 style="color:#ff0000"><?php echo $empty_Current_Salary; ?></h6>
                  </div>
                  <div class="u-form-group u-form-name u-form-group-2">
                   
                  <div class="u-layout-row">
                    <div class="col-md-6">
                        <div class="form-group row">
                             <span> Expected Salary *</span>
                             <div class="col-sm-12">
                                <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-11" name="Expected_Salary_lakhs" placeholder="Enter your  Expected Salary"id="Expected_Salary">
                                    <option value="">lakhs</option>
                                    <option value="0 lakhs">0</option>
                                    <option value="1 lakhs">1</option>
                                    <option value="2 lakhs">2</option>
                                    <option value="3 lakhs">3</option>
                                    <option value="4 lakhs">4</option>
                                    <option value="5 lakhs">5</option>
                                    <option value="6 lakhs">6</option>
                                    <option value="7 lakhs">7</option>
                                    <option value="8 lakhs">8</option>
                                    <option value="9 lakhs">9</option>
                                    <option value="10 lakhs">10</option>
                                    <option value="11 lakhs">11</option>
                                    <option value="12 lakhs">12</option>
                                    <option value="13 lakhs">13</option>
                                    <option value="14 lakhs">14</option>
                                    <option value="15 lakhs">15</option>
                                    <option value="16 lakhs">16</option>
                                    <option value="17 lakhs">17</option>
                                    <option value="18 lakhs">18</option>
                                    <option value="19 lakhs">19</option>
                                    <option value="20 lakhs">20</option>
                                    <option value="21 lakhs">21</option>
                                    <option value="22 lakhs">22</option>
                                    <option value="23 lakhs">23</option>
                                    <option value="24 lakhs">24</option>
                                    <option value="25 lakhs">25</option>
                                    <option value="26 lakhs">26</option>
                                    <option value="27 lakhs">27</option>
                                    <option value="28 lakhs">28</option>
                                    <option value="29 lakhs">29</option>
                                    <option value="30 lakhs">30</option>  
                        </select>
                        </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span  class="col-sm-3 col-form-label"></span>
                          <div class="col-sm-12">
                            <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-11" name="Expected_Salary_thousand" placeholder="Enter your  Expected Salary"id="Expected_Salary">
                             <option value="">thousand</option>
                          <option value="0 thousand">0</option>
                          <option value="1 thousand">1</option>
                          <option value="2 thousand">2</option>
                          <option value="3 thousand">3</option>
                          <option value="4 thousand">4</option>
                          <option value="5 thousand">5</option>
                          <option value="6 thousand">6</option>
                          <option value="7 thousand">7</option>
                          <option value="8 thousand">8</option>
                          <option value="9 thousand">9</option>
                          <option value="10 thousand">10</option>
                          <option value="11 thousand">11</option>
                          <option value="12 thousand">12</option>
                          <option value="13 thousand">13</option>
                          <option value="14 thousand">14</option>
                          <option value="15 thousand">15</option>
                          <option value="16 thousand">16</option>
                          <option value="17 thousand">17</option>
                          <option value="18 thousand">18</option>
                          <option value="19 thousand">19</option>
                          <option value="20 thousand">20</option>
                          <option value="21 thousand">21</option>
                          <option value="22 thousand">22</option>
                          <option value="23 thousand">23</option>
                          <option value="24 thousand">24</option>
                          <option value="25 thousand">25</option>
                          <option value="26 thousand">26</option>
                          <option value="27 thousand">27</option>
                          <option value="28 thousand">28</option>
                          <option value="29 thousand">29</option>
                          <option value="30 thousand">30</option>  
                        </select>
                          </div>
                    </div>
                 </div>
              </div>
               <h6 style="color:#ff0000"><?php echo $empty_Expected_Salary; ?></h6>
          </div>
                       
                  

              <div class="u-form-group u-form-name u-form-group-2">
                 <span >CV * </span>
                   <div class="form-element">
                     <div class="custom-file-upload">
                        <!-- <div class="custom-file-upload-toggle">
                          <div class="custom-file-upload-toggle-btn btn btn-prim">     
                          </div>
                        </div> -->
                        <input type="file" name="file" id="" class="custom-file-upload-input" data-bit-id="cvFileUpload" />
                        <span class="focus-border"></span>
                     </div>
                    <span data-bit-output-upload-files="cvFileUpload"></span>
                      <div> 
                        <div  class="cms-file-upload-validator field-error" style="display:none;">
                          <span class="cms-file-upload-validator-error-message">CV is required</span>
                        </div>
                      </div>
                    </div>
                    <h6 style="color:#ff0000"><?php echo $empty_cv; ?></h6>
                </div>

              <div class="u-align-center u-form-group u-form-submit">

              <a href="" class="btn head-btn2 " style="align-center">Register</a>

              <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
              </div>
            
            <div class="u-form-send-message u-form-send-success">Thank you! Your Registraion is Successful</div>
            <div class="u-form-send-error u-form-send-message">Registraion Unsuccesful.</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div><br>
      </div>
    </section>
      </div>

<?php include "footer.php"; ?>

<script>

const togglePassword = document.querySelector('#togglePassword');
  const Password = document.querySelector('#id_Password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = Password.getAttribute('type') === 'Password' ? 'text' : 'Password';
    Password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

</script>
             