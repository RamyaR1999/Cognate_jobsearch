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

         
         $Firstname=  $_POST['Firstname'];
         $Lastname=  $_POST['Lastname'];
         $Email    = $_POST['Email'];
         $Password = $_POST['Password'];
         $Confirm_password = $_POST['Confirm_password'];
         $Phone=  $_POST['Phone'];
         $Image=  $_POST['Image'];
         $City=  $_POST['City'];
         $Industry=  $_POST['Industry'];
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

      if(!empty($Firstname) && !empty($Lastname)  && !empty($Email) && !empty($Password)
      && !empty($Confirm_password)  && !empty($upload_tempname)){
       
      $Password = mysqli_real_escape_string($connection,$_POST['Password']);
      $Confirm_password = mysqli_real_escape_string($connection,$_POST['Confirm_password']);
      $Password = md5($Password);              
      $Confirm_password = md5($Confirm_password);              
     
      if(preg_match('/^[\p{L} ]+$/u', $Firstname)) {
          
        if(preg_match('/^[\p{L} ]+$/u', $Lastname)) {
            
            
        $uppercase  = preg_match('@[A-Z]@', $Password);
        $lowercase  = preg_match('@[a-z]@', $Password);
        $number     = preg_match('@[0-9]@', $Password);
        $character  = preg_match('/[\'^£!$%&*()}{@#~?><>,|=_+-]/', $Password);

        if(strlen($Password) >= 8) {
            
        if($Password == $Confirm_password){
        
        // if(preg_match("/^[0-9]{10}$/", $Phone)) {   



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

        
        $query = "INSERT INTO users (Firstname,Lastname,Email,email_verification_link,Password,Confirm_password,Phone,Image,City,Industry,Function,Education,Experience_years,Experience_months,Current_Salary_lakhs,Current_Salary_thousand,Expected_Salary_lakhs,Expected_Salary_thousand,CV, otp) ";
        $query .= "VALUES ('{$Firstname}','{$Lastname}','{$Email}','{$link}','{$Password}','{$Confirm_password}','{$Phone}','profile.png','$City','$Industry','$Function','$Education','$Experience_years','$Experience_months','$Current_Salary_lakhs','$Current_Salary_thousand','$Expected_Salary_lakhs','$Expected_Salary_thousand','$CV','$rndno')";
             
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
          $mail->addAddress($_POST['Email'],$_POST['Firstname']);
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
        //   }else{
        //       $message_phone = "Invalid Phone No";
            
        // }
            
          }else{
            
            $message_cpassword = "password mismatch";
        }
       
          }else{
              $message_strnpassword = "password contain atleast 8 characters";
              
       }
            
          }else{
              $message_Lastname ="Only Alphabets are allowed in lastname";
            
       }

          }else{
              $message_Firstname ="Only Alphabets are allowed in firstname";
          
       }
          
          }else{
             // $empty_firstname = "firstname is required";
             // $empty_lastname = "lastname is required";
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
        <h1 class="u-align-left u-text u-text-default u-text-1">Upload your resume here</h1>
        <h1 class="u-align-left u-text u-text-custom-color-1 u-text-default u-text-2"></h1>
        <p class="u-align-left u-text u-text-default u-text-3"></p>
      </div>
    </section>
<section class="u-clearfix u-gradient u-section-1" id="sec-6065">  
<div class="u-layout-row">    
      <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-align-left">
            <h3 class=""><i class=""></i>Enter your Details:</h3>
          </div>
            <div class="u-align-right">
              <div class="u-form u-radius-10 u- #f2f2f2 u-form-1">
<form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" enctype="multipart/form-data" source="custom" name="form" style="padding: 0px;" redirect="true">

                    <div class="form-group row">
                <div class="col-md-13">
                   <h6 class="" style="color:#ff0017"><?php echo $message; ?></h6><br>
                   <span  class="">Fields marked with * are required fields</span>
                   <h6 class="text-center" style="color:#ff0000"></h6>
               </div>
             <div class="u-form-group u-form-name u-form-group-1">
                     <span >Firstname * </span>
                     <div class="col-sm-12">
                          <input type="text" value="<?php echo $Firstname; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1"placeholder="Enter the Firstname" name="Firstname">
                          <span class="focus-border"></span>
                        </div>
                          <h6 style="color:#ff0000"><?php echo $message_Firstname; ?></h6>
                          <h6 style="color:#ff0000"><?php echo $empty_firstname; ?></h6>
                      </div>&nbsp;
                      <div class="u-form-group u-form-name u-form-group-2">
                        <span >Lastname * </span>
                        <div class="col-sm-12">
                          <input type="text"  value="<?php echo $Lastname; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1"placeholder="Enter the Lastname " name="Lastname">
                          <span class="focus-border"></span>
                        </div>
                          <h6 style="color:#ff0000"><?php echo $message_Lastname; ?></h6>
                          <h6 style="color:#ff0000"><?php echo $empty_lastname; ?></h6>
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
        </div>
          </form>
          </div>
          </div>
           </div>
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
             