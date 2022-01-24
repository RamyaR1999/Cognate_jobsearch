<?php session_start(); ?>
<?php include "db.php"; ?>


<?php
// session_start();
// $rndno=rand(100000, 999999);//OTP generate
// $message = urlencode("otp number.".$rndno);
// $to=$_POST['email'];
// $subject = "OTP";
// $txt = "OTP: ".$rndno."";
// $headers = "From: 07.ramyar@gmail.com.com" . "\r\n" .
// "CC: thennarasan1988@gmail.com";
// mail($to,$subject,$txt,$headers);
// if(isset($_POST['btn-save']))
// {
// $_SESSION['Fullname']=$_POST['Fullname'];
// $_SESSION['email']=$_POST['email'];
// $_SESSION['phone']=$_POST['phone'];
// $_SESSION['otp']=$rndno;
// // header( "Location: otp.php" );
// } 

?>
<?php

    if(isset($_REQUEST['submit'])){ 
     
    require 'PHPMailer/PHPMailerAutoload.php';
   require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer;


$rndno=rand(100000, 999999);
// echo $rndno;
//OTP generate
#$mail->SMTPDebug = 3;

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth = true;
$mail->SMTPSecure='tls'; 

        $Email    = $_REQUEST['Email'];
        // $otp = $_REQUEST['otp'];
        
    
        $query = "SELECT * FROM users WHERE Email = '{$Email}' ";
        $select_users_query = mysqli_query($connection, $query);
        
        if(!$select_users_query){
            
            die("Query Failed" . mysqli_error($connection));
            
        }
          
          while($row = mysqli_fetch_array($select_users_query)){
              
               $db_Fullname=  $row['Fullname'];
               $db_Email    = $row['Email'];
               $db_Password = $row['Password'];
               $db_Phone=  $row['Phone'];
               $db_Image=  $row['Image'];
               $db_City=  $row['City'];
               $db_Industry=  $row['Industry'];
               $db_Function=  $row['Function'];
               $db_Education =$row['Education'];
               $db_Experience =$row['Experience'];
               $db_Salary =$_POST['Salary'];
               $db_CV = $row['CV']['Name'];
               $upload = "uploads/".$CV;
               
               $db_otp=$row['otp'];         
              
          }

          if($Email === $db_Email){
            // if($otp === $db_otp){
            
             $_SESSION['Email'] = $db_Email;
             $_SESSION['otp'] = $db_otp;
             
            $query="UPDATE users SET otp='{$rndno}'WHERE Email= '$Email' ";
            $users_query = mysqli_query($connection,$query);

      if(!$users_query) {
            
            die("Query Failed" . mysqli_error($connection));
        }

           $mail->Username = 'CGBSTech2021@gmail.com';
          $mail->Password = 'cgbs@2021';

          $mail->setFrom ('barthalomena@gmail.com');
          $mail->addAddress($_POST['Email'],$_POST['Fullname']);
          #$mail->addReplyTo( $_POST['email'],$_POST['name']);
          
          $mail->isHTML(true);
          $mail->Subject = "Email Verification";
          $mail->Body    = 'Hi'.' '.$_POST["Fullname"].'<br><br>To verify your email'.' '.$_POST['Email'].' '.'we sent you an otp, enter the otp in the field'.' '.$rndno;
          
          if(!$mail->send()) {
             echo "Message could not be sent.". $mail->ErrorInfo;
          }else{
            echo " otp sent successfully to ur mail: " ;
          }  
          

          header("Location:Password_otp_old.php");
        //   }else{
        //     $message_otp = "Incorrect otp";   
              
        // }
           
         
        }else{
            $message_Email = "Invalid email";   
              
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
<link rel="stylesheet" href="Member-Login.css" media="screen">
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
         
    <li><a href="submit_job.php">Submit A job</a></li><br>
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

    <section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-357b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-style u-group u-radius-10 u-shape-round u-grey u-group-1">
        
         <div class="u-container-layout u-valign-middle u-container-layout-1">

          <?php

// if(!isset($_POST['submit'])){

  // if(!isset($_POST['save'])){ 


 ?>


         
            <h3 class="text-center">Trouble Logging In?</h3>
            
           <p class="font-weight-light text-muted mb-0">

            Enter your email, we'll send you a OTP

           </p>
            
            <div class="u-expanded-width u-form u-login-control u-form-1">
              <form action="" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">
                <div class="u-form-group u-form-name">
                  <label for="email-cd60" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Enter your Email" id="" name="Email" value="<?php echo isset($_REQUEST["Email"]) ? $_REQUEST["Email"] : ''; ?>"class="u-grey-5 u-input u-input-rectangle" required="">
                  <h6 class="text-center" style="color:#ff0000"><?php echo $message_Email; ?></h6>
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="" class="btn head-btn2">Send OTP</a>
                  <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
                </div>

<?php     

   // } }


?>
                

<?php

// if(isset($_POST['submit'])){

// if(isset($_REQUEST['save'])){


         
        // $email    = $_REQUEST['email']; 
    
        // $query = "SELECT * FROM register WHERE email = '{$email}' ";
        // $select_register_query = mysqli_query($connection, $query);
        
        // if(!$select_register_query){
            
        //     die("Query Failed" . mysqli_error($connection));
            
        // }

        // // header("Location:New_Password.php");
          
        //   while($row = mysqli_fetch_array($select_register_query)){
              
        //        $db_id = $row['id'];
        //        $db_title = $row['title'];
        //        $db_Fullname = $row['Fullname'];
        //        $db_image = $row['image'];
        //        $db_phone = $row['phone'];
        //        $db_email = $row['email'];
        //        $db_instagram = $row['instagram'];
        //        $db_facebook = $row['facebook'];
        //        $db_twitter = $row['twitter'];
        //        $db_youtube = $row['youtube'];         
              
        //   }

        //      header("Location:Member-Login.php");
        
        
        // }



 ?>

             
           <!--  <h3 class="text-center">Enter the OTP</h3>
            
           <p class="font-weight-light text-muted mb-0">

            Enter the OTP that we sent to your email.

           </p>
            
            <div class="u-expanded-width u-form u-login-control u-form-1">
              <form action="" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">
                <div class="u-form-group u-form-name">
                  <label for="email-cd60" class="u-form-control-hidden u-label"></label>
                  <input type="text" placeholder="Enter your OTP" id="email-cd60" name="email" class="u-grey-5 u-input u-input-rectangle" required="">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <a href="" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-btn-1">Next</a>
                  <input type="submit" name="save" value="submit" class="u-form-control-hidden">
                </div> -->

<?php

// }

?>


<?php 
      // if(isset($_POST['save'])){ 

   //   if(isset($_REQUEST['email'])){

   //   $email =  $_REQUEST['email'];  
           
   //   $query="SELECT * FROM register WHERE email = '{$email}' ";
   //   $select_register_profile = mysqli_query($connection,$query);

      
   //   while($row=mysqli_fetch_array($select_register_profile)){

   //          $id=$row['id'];
   //          $title=$row['title'];
   //          $Fullname=$row['Fullname'];
   //          $image=$row['image'];
   //          $phone=$row['phone'];
   //          $email=$row['email'];
   //          $password=$row['password'];
   //          $confirm_password=$row['confirm_password'];
   //          $instagram=$row['instagram'];
   //          $facebook=$row['facebook'];
   //          $twitter=$row['twitter'];
   //          $youtube=$row['youtube'];
            
   //         }
   //       }
    
   //  if(isset($_POST['confirm'])){
             
   //       $password = $_POST['password'];
   //       $confirm_password = $_POST['confirm_password'];

   //   if(!empty($password) && !empty($confirm_password)){

   //    if($password == $confirm_password){
          
   //    $password = mysqli_real_escape_string($connection,$_POST['password']);
   //    $confirm_password = mysqli_real_escape_string($connection,$_POST['confirm_password']);
   //    $password = md5($password);              
   //    $confirm_password = md5($confirm_password);

   //    $query="UPDATE register SET password='{$password}', confirm_password='{$confirm_password}' WHERE email= '$email' ";

   //    $register_query = mysqli_query($connection,$query);

   //    if(!$register_query) {
            
   //          die("Query Failed" . mysqli_error($connection));
   //      }

   //      header("Location:Member-Login.php"); 

        
   //      }else{

   //        $message_cpassword = "password mismatch";

   //      }

   //   }else{

   //      $message = "Fields cannot be Empty";

   //   }
   // }


 ?>

           <!--  <h3 class="text-center">Create New Password</h3>
            
            <div class="u-expanded-width u-form u-login-control u-form-1">
              <form action="" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">

                <div class="u-form-group u-form-password">
                  <label for="password-708d" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Enter your New Password" id="id_password" name="password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>" class="u-grey-5 u-input u-input-rectangle" required="">
                  <span class="far fa-eye" id="togglePassword" style="margin-left: 350px; cursor: pointer;"></span>
                  <h6 class="text-center" style="color:#ff0000"><?php echo $message_password; ?></h6>
                </div>

                <div class="u-form-group u-form-password">
                  <label for="password-708d" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Confirm Password" id="id_password" name="confirm_password" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>" class="u-grey-5 u-input u-input-rectangle" required="">
                  <h6 class="text-center" style="color:#ff0000"><?php echo $message_cpassword; ?></h6>
                </div>

                <div class="u-align-center u-form-group u-form-submit">
                  <a href="" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-btn-1">Submit</a>
                  <input type="submit" name="confirm" value="submit" class="u-form-control-hidden">
                </div>
 -->
<?php
 // }  
 ?>


                <input type="hidden" value="" name="recaptchaResponse">
              </form>
              <div><?php if(isset($message)) { echo $message; } ?></div>
            </div>
          </div>
        </div>
      </div>
    </section>  
  </body>
</html>
<!-- Profile Icon -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- JS here -->
  
    <!-- All JS Custom Plugins Link Here here -->
      <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
      <script src="./assets/js/popper.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>

      <!-- Jquery Mobile Menu -->
      <script src="./assets/js/jquery.slicknav.min.js"></script>


    <!-- Jquery Slick , Owl-Carousel Plugins -->
      <script src="./assets/js/owl.carousel.min.js"></script>
      <script src="./assets/js/slick.min.js"></script>
      <script src="./assets/js/price_rangs.js"></script>
      <!-- Date Picker -->
      <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
      <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
      <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
      <script src="./assets/js/jquery.scrollUp.min.js"></script>
      <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
      
      <!-- contact js -->
      <script src="./assets/js/contact.js"></script>
      <script src="./assets/js/jquery.form.js"></script>
      <script src="./assets/js/jquery.validate.min.js"></script>
      <script src="./assets/js/mail-script.js"></script>
      <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
    <!-- Jquery Plugins, main Jquery -->  
      <script src="./assets/js/plugins.js"></script>
      <script src="./assets/js/main.js"></script>

<!-- <script>

const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

</script> -->