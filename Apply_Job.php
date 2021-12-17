<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>


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
           $Salary =$row['Salary'];
           $CV = $row['CV'];
            
           }
         }

      if(isset($_POST['edit_profile'])){

           $Firstname=  $_POST['Firstname'];
           $Lastname=  $_POST['Lastname'];
           $Email    = $_POST['Email'];
           $Phone=  $_POST['Phone'];
           $City=  $_POST['City'];
           $Industry=  $_POST['Industry'];
           $Function=  $_POST['Function'];
           $Education =$_POST['Education'];
           $Experience =$_POST['Experience'];
           $Salary =$_POST['Salary'];
           $Image = $_FILES['image']['name'];
           $user_image_tempname = $_FILES['image']['tmp_name'];
           $CV = $_FILES['CV']['name'];
           $upload = $_FILES['CV']['tmp_name'];


            $Password = mysqli_real_escape_string($connection,$_POST['Password']);
            // $confirm_password = mysqli_real_escape_string($connection,$_POST['confirm_password']);
            $Password = md5($Password);      
            // $confirm_password = md5($confirm_password); 

             move_uploaded_file($user_image_tempname,"images/$Image");
        
           if(empty($Image)){
            
            $query = "SELECT * FROM users WHERE id = $id ";
            $select_image = mysqli_query($connection,$query);
                
            while($row = mysqli_fetch_array($select_image)){
                
            $Image = $row['Image'];
              
               }
            
          }
       
        if(preg_match('/^[\p{L} ]+$/u', $Firstname)) {
          
        if(preg_match('/^[\p{L} ]+$/u', $Lastname)) {  
         
        $uppercase = preg_match('@[A-Z]@', $Password);
        $lowercase = preg_match('@[a-z]@', $Password);
        $number    = preg_match('@[0-9]@', $Password);
        $character = preg_match('/[\'^£!$%&*()}{@#~?><>,|=_+-]/', $password);
            

        if(strlen($Password) >= 8) { 
              
    $query="UPDATE users SET Firstname= '{$Firstname}', Lastname= '{$Lastname}', Image= '{$Image}', Email= '{$Email}',Phone= '{$Phone}',City='{$City}', Industry='{$Industry}',Function='{$Function}',Education='{$Education}',Experience='{$Experience}'  WHERE id= '{$db_id}' ";  
                      
        $update_profile_query=mysqli_query($connection,$query);

         if(!$update_profile_query) {
            
            die("Query Failed" . mysqli_error($connection));
        }           
          
           header("Location:profile.php"); 

         }else{
              $message_strnpassworad = "password contain atleast 8 characters";
              
       }
  
          
        }else{
              $message_Lastname ="Only Alphabets are allowed in lastname";
            
       }

          }else{
              $message_Firstname ="Only Alphabets are allowed in firstname";
          
       }   
          
            
       }

  ?>

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

// if(isset($_POST['submit'])){

//      $id = $_POST['id'];
//      $Firstname =  $_POST['Firstname'];
//      $Lastname =  $_POST['Lastname'];
//      $the_Email  = $_POST['Email'];
//      $Password = $_POST['Password'];
//      $Phone =  $_POST['Phone'];
//      $Image =  $_POST['Image'];
//      $City =  $_POST['City'];
//      $Industry =  $_POST['Industry'];
//      $Function =  $_POST['Function'];
//      $Education = $_POST['Education'];
//      $Experience = $_POST['Experience'];
//      $Salary = $_POST['Salary'];
//      $CV = $_POST['CV'];

// require 'PHPMailer/PHPMailerAutoload.php';
// require('phpmailer/class.phpmailer.php');

// $mail = new PHPMailer;

// $mail->isSMTP();

// $mail->Host = 'smtp.gmail.com';
// $mail->Port=587;
// $mail->SMTPAuth = true;
// $mail->SMTPSecure='tls';

// $mail->Username = 'CGBSTech2021@gmail.com';
// $mail->Password = 'cgbs@2021';

// $mail->setFrom ('CGBSTech2021@gmail.com');
// $mail->addAddress('07.ramyar@gmail.com','Ramya');
// #$mail->addReplyTo( $_POST['email'],$_POST['name']);

// $mail->isHTML(true);
// $mail->Subject = "Job Applied Successfully";
// $mail->Body    = 'Hi'.' '.'Ramya'.'<br><br>You have successfully applied for a job';

// if(!$mail->send()) {
//    echo "Message could not be sent.". $mail->ErrorInfo;
// }else{
//   echo " otp sent successfully to ur mail: " ;
// }

// }

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
         
    <li><a href="Jobseeker_profile.php">Job Seeker Profile</a></li>
    <li><a href="Available_jobs.php">Find A Jobs</a></li>
    <li><a href="Register-member.php">Submit Your Resume</a></li>
    <li><a href="career_hub.php">Career Hub</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="security_advice.php">Security Advice</a></li>
     
  </ul>      
</li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="employer.php">employers</a>

<ul class="submenu">
         
    <li><a href="submit_job.php">Submit A job</a></li>
    <li><a href="request_callback.php">Request A Call Back</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="ourSolution.php">Our Solutions</a></li>
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
                                  <a href="Register-Member.php" class="btn head-btn1">Register</a>


  <?php

    if(isset($_SESSION['Email']) == $db_Email){

  ?> 

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
            <a class="nav-link active" id="easyA-tab" href="Apply_Job.php" role="tab" aria-controls="easyA" aria-selected="false" name="Easy_Apply">Easy Apply</a>
            </li>

            <li class="nav-item">
           <div class="u-align-center u-form-group u-form-submit">
            <!-- <a class="nav-link" id="rsLogin-tab" data-toggle="tab" href="#rsLogin" role="tab" aria-controls="rsLogin" aria-selected="true">Sign In</a> -->
            <a class="nav-link" id="rsLogin-tab" href="Signin_Job.php" role="tab" aria-controls="rsLogin" aria-selected="true">Sign In</a>
            <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
           </div>
            <!--  <div class="u-align-center u-form-group u-form-submit">
              <a href="" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-1-light-2 u-radius-17 u-btn-1">Register<br>
              </a>
              <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
            </div> -->
            </li>
          </ul>
       
          <!-- <div class="text">Sign In to apply for this job</div><br>
          <p>To apply for this job log in to your existing account.</p><br>
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Email: </span>
          <input type="text" value="<?php echo $Email; ?>" class="form-control" name="Email">
          <br>
          <br>
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Password: </span>
          <input type="text" value="<?php echo $Password; ?>" class="form-control" name="Password">
          <br>
          <br>
          <div class="u-form-checkbox u-form-group">
                  <input type="checkbox" id="checkbox-708d" name="remember" value="On">
                  <label for="checkbox-708d" class="u-label">Remember me</label>
                </div>
                &nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="submit" name="submit" value="Sign in" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-12 u-btn-1"> 
                  <a href="Register-Member.php" class="u-border-1  u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-palette-1-base u-btn-3">Sign up?</a> -->

          <div class="text">Apply for this job</div><br>
          <p>Fill in the form below to apply for this job.</p><br>
          <br>
<form action="" method="POST"source="custom" name="form" style="padding: 0px;" redirect="true">
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Email: </span>
          <input type="text" value="<?php echo $Email; ?>" class="form-control" name="Email">
          <br>
          <br>
          
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Firstname: </span>
          <input type="text" value="<?php echo $Firstname; ?>" class="form-control" name="Firstname">
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Lastname: </span>
          <input type="text" value="<?php echo $Lastname; ?>" class="form-control" name="Lastname">
          <br>
          <br>

           <span style="font-weight: 600;"class="col-sm-3 col-form-label">Contact Number: </span>
          <input type="text" value="<?php echo $Phone; ?>" class="form-control" name="Phone">
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Address: </span>
          <!-- <textarea name="Address" value="<?php echo $Address; ?>" class="form_control" rows="3"></textarea> -->
          <input type="text" value="<?php echo $Address; ?>" class="form-control" name="Address">
          <br>
          <br>
<?php 

$_SESSION['Address'] = $Address;

?>
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">City: </span>
          <input type="text" value="<?php echo $City; ?>" class="form-control" name="City">
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">State: </span>
          <select type="text" value="<?php echo $City; ?>" class="form-control" name="City"> 
          <option value="">Select</option>
          <option value="1302">Andaman and Nicobar Islands</option>
          <option value="1303">Andhra Pradesh</option>
          <option value="1304">Assam</option>
          <option value="1305">Bihar</option>
          <option value="1306">Chandigarh</option>
          <option value="1307">Dadra and Nagar Haveli</option>
          <option value="1308">New Delhi</option>
          <option value="1309">Gujarat</option>
          <option value="1310">Haryana</option>
          <option value="1311">Himachal Pradesh</option>
          <option value="1312">Jammu and Kashmir</option>
          <option value="1313">Kerala</option>
          <option value="1314">Lakshadweep</option>
          <option value="1316">Maharashtra</option>
          <option value="1317">Manipur</option>
          <option value="1318">Meghalaya</option>
          <option value="1319">Karnataka</option>
          <option value="1320">Nagaland</option>
          <option value="1321">Odisha</option>
          <option value="1322">Pondicherry</option>
          <option value="1323">Punjab</option>
          <option value="1324">Rajasthan</option>
          <option value="1325">Tamilnadu</option>
          <option value="1326">Tripura</option>
          <option value="1327">Uttar Pradesh</option>
          <option value="1328">West Bengal</option>
          <option value="1329">Sikkim</option>
          <option value="1330">Arunachal Pradesh</option>
          <option value="1331">Mizoram</option>
          <option value="1332">Daman and Diu</option>
          <option value="1333">Goa</option>
          <option value="1334">Bihar</option>
          <option value="1335">Madhya Pradesh</option>
          <option value="1336">Uttar Pradesh</option>
          <option value="1337">Chhattisgarh</option>
          <option value="1338">Jharkhand</option>
          <option value="1339">Uttarakhand</option>
          <option value="3935">Telangana</option>
        </select> 
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Job Title: </span>
          <input type="text" value="<?php echo $Job_title; ?>" class="form-control" name="Job Title">
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Expected Pay Rate: </span>
          <input type="text" value="<?php echo $Salary; ?> lakh" class="form-control" name="Expected Pay Rate">
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Country: </span>
          <select type="text" value="<?php echo $Country; ?>" class="form-control" name="Country">
            <option value="">Select</option>
            <option value="1302">Andaman and Nicobar Islands</option>
            <option value="1303">Andhra Pradesh</option>
            <option value="1304">Assam</option>
            <option value="1305">Bihar</option>
            <option value="1306">Chandigarh</option>
            <option value="1307">Dadra and Nagar Haveli</option>
            <option value="1308">New Delhi</option>
            <option value="1309">Gujarat</option>
            <option value="1310">Haryana</option>
            <option value="1311">Himachal Pradesh</option>
            <option value="1312">Jammu and Kashmir</option>
            <option value="1313">Kerala</option>
            <option value="1314">Lakshadweep</option>
            <option value="1316">Maharashtra</option>
            <option value="1317">Manipur</option>
            <option value="1318">Meghalaya</option>
            <option value="1319">Karnataka</option>
            <option value="1320">Nagaland</option>
            <option value="1321">Odisha</option>
            <option value="1322">Pondicherry</option>
            <option value="1323">Punjab</option>
            <option value="1324">Rajasthan</option>
            <option value="1325">Tamilnadu</option>
            <option value="1326">Tripura</option>
            <option value="1327">Uttar Pradesh</option>
            <option value="1328">West Bengal</option>
            <option value="1329">Sikkim</option>
            <option value="1330">Arunachal Pradesh</option>
            <option value="1331">Mizoram</option>
            <option value="1332">Daman and Diu</option>
            <option value="1333">Goa</option>
            <option value="1334">Bihar</option>
            <option value="1335">Madhya Pradesh</option>
            <option value="1336">Uttar Pradesh</option>
            <option value="1337">Chhattisgarh</option>
            <option value="1338">Jharkhand</option>
            <option value="1339">Uttarakhand</option>
            <option value="3935">Telangana</option>
          </select>
            <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Resume:</span>
          <div class="form-element">
            <div class="custom-file-upload">
              <!-- <div class="custom-file-upload-toggle">
              <div class="custom-file-upload-toggle-btn btn btn-prim">
              </div>
              </div> -->
              <input type="file" name="image" id="ctl09_ctl04_CVFileUpload" class="custom-file-upload-input" data-bit-id="cvFileUpload" />
              <span class="focus-border"></span>
            </div>

            <span data-bit-output-upload-files="cvFileUpload"></span>
            <div> 
                <div  class="cms-file-upload-validator field-error" style="display:none;">
                  <span class="cms-file-upload-validator-error-message">CV is required</span>
                </div>
            </div>
          </div>
        <div class="u-align-center u-form-group u-form-submit">
        <a href="Job_review.php?Job_details=<?php echo $the_id ?>&<?php echo $Job_title ?>" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-1-light-2 u-radius-3 u-btn-1">Next</a>
        <!-- <input type="submit" name="submit" value="submit" class="u-form-control"> -->
       </div>
     </form>
<!-- Job_review.php?Job_details=<?php //echo $the_id ?>&<?php //echo $Job_title ?> -->
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