<?php session_start(); ?>
<?php include "db.php"; ?>
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
         $Experience =$_POST['Experience'];
         $Salary =$_POST['Salary'];
         $CV = $_FILES['CV']['Name'];
         $upload = "uploads/".$CV;
         
         $otp=$_POST['otp'];
         $otp=$rndno;
         $error = 0;
    

          
       

      if(!empty($Firstname) && !empty($Lastname) && !empty($Phone) && !empty($Email) && !empty($Password) && !empty($City) && !empty($Industry) && !empty($Function) && !empty($Education) && !empty($Experience) && !empty($Salary) && !empty($upload)){
          
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

        
        $query = "INSERT INTO users (Firstname,Lastname,Email,Password,Confirm_password,Phone,Image,City,Industry,Function,Education,Experience,Salary,CV, otp) ";
        $query .= "VALUES ('{$Firstname}','{$Lastname}','{$Email}','{$Password}','{$Confirm_password}','{$Phone}','profile.png','$City','$Industry','$Function','$Education','$Experience','$Salary','$upload','$rndno')";
             
        $register_query = mysqli_query($connection,$query);
            
            move_uploaded_file($_FILES['CV']['tmp_name'], $upload);
      
        if(!$register_query) {
            
            die("Query Failed" . mysqli_error($connection) .' '. mysqli_error($connection));
        }
          
         $_SESSION['status'] = "Registration Was Successful Please Sign In"; 


         $mail->Username = 'reshmasamy21@gmail.com';
          $mail->Password = '9789261719';

          $mail->setFrom ('barthalomena@gmail.com');
          $mail->addAddress($_POST['Email'],$_POST['Firstname']);
          #$mail->addReplyTo( $_POST['email'],$_POST['name']);
          
          $mail->isHTML(true);
          $mail->Subject = "Email Verification";
          $mail->Body    = 'Hi'.' '.$_POST["Firstname"].'<br><br>To verify your email'.' '.$_POST['Email'].' '.'we sent you an otp, enter the otp in the field'.' '.$rndno;
          
          if(!$mail->send()) {
             echo "Message could not be sent.". $mail->ErrorInfo;
          }else{
            echo " otp sent successfully to ur mail: " ;
          }  
           
              header( "Location: otp.php" ); 
        
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
              $message_Lastname ="Only Alphabets are allowed in lastname";
            
       }

          }else{
              $message_Firstname ="Only Alphabets are allowed in firstname";
          
       }
          
          }else{
             $empty_firstname = "firstname is required";
             $empty_lastname = "lastname is required";
             $empty_email = "email is required";
             $empty_password = "password is required";
             $empty_cpassword = "confirm password is required";
             $empty_phone = "phone number is required";
             $empty_city = "city is required";
             $empty_industry = "industry is required";
             $empty_function = "function is required";
             $empty_education = "education is required";
             $empty_experience = "experience is required";
             $empty_salary = "salary is required";
             $empty_cv = "CV is required";
       }  
         
          }else {         
              $message = ""; 
       }

  ?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Upload Resume</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Register-Member.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.23.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

<!-- Profile Icon -->

 <link rel="stylesheet" href="assets/css/shared/style.css"> 

    <!-- Password Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Site2",
    "logo": "images/default-logo.png",
    "sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Register Member">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class=" u-clearfix u-header u-section-row-container" id="sec-6baa"><div class="u-section-rows">
        <div class="u-clearfix u-custom-color-2 u-section-row u-section-row-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-a8af">
          <div class="u-clearfix u-sheet u-valign-middle-xl u-valign-middle-xs u-sheet-1">
            <a href="Job_seeker.php" class="u-image u-logo u-image-1">
              <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
              <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" href="#">
                  <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
                 </a>
              </div>
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90 active" href="Job_seeker.php" style="padding: 6px 0px;">Job Seeker</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="employer.php" style="padding: 6px 0px;">Employers</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="" style="padding: 6px 0px;">About us</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Contact_us.php" style="padding: 6px 0px;">Contact us</a></li>

<?php

    if(isset($_SESSION['Email']) == $db_Email){

  ?> 


<li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Member-Login.php" style="padding: 6px 0px;">Login</a></li>

  <?php 
              
      }else{
              
    ?> 



        <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="u-nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="" style="width:40px; border-radius: 100%;" src ='images/<?php echo $_SESSION['Image'] ?>' alt=""></a>
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
                <a class="dropdown-item" href="profile.php">My Profile <span class="badge badge-pill badge-danger"></span><i class="dropdown-item-icon ti-dashboard"></i></a>
                 
                <a class="dropdown-item"href="Logout.php">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              
              </div>
          </li>

<?php 
              
      }

?> 

<!-- <li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Profile.html" style="padding: 6px 0px;">Profile</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Page-1.html" style="padding: 6px 0px;">Page 1</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Page-2.html" style="padding: 6px 0px;">Page 2</a>
</li> -->



</ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Job_seeker.php" style="padding: 6px 0px;">Job Seeker</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="employer.php" style="padding: 6px 0px;">Employers</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="" style="padding: 6px 0px;">About us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact_us.php" style="padding: 6px 0px;">Contact us</a></li>

<?php

    if(isset($_SESSION['email']) == $db_email){

  ?> 

<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.php" style="padding: 6px 0px;">Login</a></li>

<?php 
              
    }
              
  ?> 

</ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
          </div>
   
        </div>
        <div class="u-custom-color-2 u-section-row u-section-row-2" id="sec-56e4">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-2">
            <div class="u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <p class="u-text u-text-default u-text-1">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-1" href="Available_jobs.php">find a job</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                    <p class="u-text u-text-default u-text-2">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-2 active" href="Register-Member.php">submit your CV</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-3">
                    <p class="u-text u-text-default u-text-3">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-3" href="career_hub.php">career hub</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-4">
                    <p class="u-text u-text-default u-text-4">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-body-color u-text-hover-black u-btn-4" href="areas_of_expertise.php">areas of expertise</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-5">
                    <p class="u-text u-text-default u-text-5">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-5" href="security_advice.php">security advice</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </header>

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
  <section class="u-clearfix u-custom-color-2 u-section-2" id="sec-2d18">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-left u-text u-text-default u-text-1">Upload your resume here</h1>
        <h1 class="u-align-left u-text u-text-custom-color-1 u-text-default u-text-2"></h1>
        <p class="u-align-left u-text u-text-default u-text-3"></p>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-1" id="sec-6065">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-radius-10 u- #f2f2f2 u-form-1">
          <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 50px;" redirect="true">

                  <div class="u-form-group u-form-name u-form-group-1">
                     <span style="font-weight: 400;">Firstname * </span>
                     <div class="col-sm-12">
                          <input type="text" value="<?php echo $Firstname; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" name="Firstname">
                          <span class="focus-border"></span>
                        </div>
                          <h6 style="color:#ff0000"><?php echo $message_Firstname; ?></h6>
                          <h6 style="color:#ff0000"><?php echo $empty_firstname; ?></h6>
                      </div>
                      <div class="u-form-group u-form-name u-form-group-2">
                        <span style="font-weight: 400;">Lastname * </span>
                        <div class="col-sm-12">
                          <input type="text"  value="<?php echo $Lastname; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" name="Lastname">
                          <span class="focus-border"></span>
                        </div>
                          <h6 style="color:#ff0000"><?php echo $message_Lastname; ?></h6>
                          <h6 style="color:#ff0000"><?php echo $empty_lastname; ?></h6>
                        </div>
                      <div class="u-form-group u-form-name u-form-group-2">
                        <span style="font-weight: 400;">Email *</span>
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Email; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-2" name="Email">
                          <span class="focus-border"></span>
                        </div>
                          <h6 style="color:#ff0000"><?php echo $message_Email; ?></h6>
                          <h6 style="color:#ff0000"><?php echo $empty_email; ?></h6>
                      </div>

                      <div class="u-form-group u-form-name u-form-group-2">
                        <span style="font-weight: 400;">Password * </span>
                        <div class="col-sm-12">
                          <input type="Password" id="id_Password" name="Password" value="<?php echo isset($_POST["Password"]) ? $_POST["Password"] : ''; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-3">
                           <span class="focus-border"></span>
                         </div>
                          <h6 class="text-center" style="color:#ff0000"><?php echo $message_strnpassword; ?></h6>
                           <h6 style="color:#ff0000"><?php echo $empty_password; ?></h6>
                        </div>
                      <div class="u-form-group u-form-name u-form-group-2">
                        <span style="font-weight: 400;"> Confirm_password * </span>
                        <div class="col-sm-12">
                          <input type="Password"  value="<?php echo $Confirm_password; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-4" name="Confirm_password">
                          <span class="focus-border"></span>
                        </div>
                          <h6 style="color:#ff0000"><?php echo $message_cpassword; ?></h6>
                          <h6 style="color:#ff0000"><?php echo $empty_cpassword; ?></h6>
                      </div>
                      <div class="u-form-group u-form-name u-form-group-2">
                        <span style="font-weight: 400;">Phone * </span>
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Phone; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-5" name="Phone">
                          <span class="focus-border"></span>
                        </div>
                          <h6 style="color:#ff0000"><?php echo $message_Phone; ?></h6>
                          <h6 style="color:#ff0000"><?php echo $empty_phone; ?></h6>
                      </div>

                      <div class="u-form-group u-form-name u-form-group-2">
                        <span style="font-weight: 400;">City * </span>
                        <div class="col-sm-12">
                          <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-6" name="City"id="City">
                            <option value="-1">-- please select --</option>
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
                          </select>
                          <span class="focus-border"></span>
                        </div>
                          <h6 style="color:#ff0000"><?php echo $empty_city; ?></h6>
                    </div>

                      <div class="u-form-group u-form-name u-form-group-2">
                        <span style="font-weight: 400;">Industry * </span>
                        <div class="col-sm-12">
                             <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-7" name="Industry"id="Industry">
                              <option value="-1">-- please select --</option>
                              <option value="Accounting / Finance">Accounting / Finance</option>
                              <option value="Advertising / PR / MR / Events">Advertising / PR / MR / Events</option>
                              <option value="Agriculture / Diary">Agriculture / Diary</option>
                              <option value="Airlines">Airlines</option>
                              <option value="Animation">Animation</option>
                              <option value="Architecture / Interior Design">Architecture / Interior Design</option>
                              <option value="Auto / Auto Ancillary">Auto / Auto Ancillary</option>
                              <option value="Aviation / Aerospace Firm">Aviation / Aerospace Firm</option>
                              <option value="Banking / Financial Services / Broking / Asset Management">Banking / Financial Services / Broking / Asset Management</option>
                              <option value="BPO / ITES">BPO / ITES</option>
                              <option value="Brewery / Distillery">Brewery / Distillery</option>
                              <option value="Broadcasting">Broadcasting</option>
                              <option value="Cement">Cement</option>
                              <option value="Ceramics / Sanitary Ware">Ceramics / Sanitary Ware</option>
                              <option value="Chemicals / PetroChemical">Chemicals / PetroChemical</option>
                              <option value="Construction">Construction</option>
                              <option value="Consumer Durables">Consumer Durables</option>
                              <option value="Courier / Transportation / Freight">Courier / Transportation / Freight</option>
                              <option value="Defence / Government">Defence / Government</option>
                              <option value="Education / Teaching / Training">Education / Teaching / Training</option>
                              <option value="Electricals / Switchgears">Electricals / Switchgears</option>
                              <option value="Engineering / Heavy Engg. / EPC">Engineering / Heavy Engg. / EPC</option>
                              <option value="Export / Import">Export / Import</option>
                              <option value="Facility Management">Facility Management</option>
                              <option value="Fertilizers / Pesticides">Fertilizers / Pesticides</option>
                              <option value="FMCG / Foods / Beverage">FMCG / Foods / Beverage</option>
                              <option value="Food Processing">Food Processing</option>
                              <option value="Gems &amp; Jewellery">Gems &amp; Jewellery</option>
                              <option value="Glass">Glass</option>
                              <option value="Heat Ventilation Air Conditioning">Heat Ventilation Air Conditioning</option>
                              <option value="Hotels / Restaurants / Hospitality">Hotels / Restaurants / Hospitality</option>
                              <option value="Industrial Products / Heavy Machinery">Industrial Products / Heavy Machinery</option>
                              <option value="Infrastructure">Infrastructure</option>
                              <option value="Insurance">Insurance</option>
                              <option value="Internet / Ecommerce">Internet / Ecommerce</option>
                              <option value="IT-Hardware &amp; Networking">IT-Hardware &amp; Networking</option>
                              <option value="IT-Software / Software Services">IT-Software / Software Services</option>
                              <option value="KPO / Research / Analytics">KPO / Research / Analytics</option>
                              <option value="Leather">Leather</option>
                              <option value="Legal">Legal</option>
                              <option value="Media / Dotcom / Entertainment">Media / Dotcom / Entertainment</option>
                              <option value="Medical / Healthcare / Hospital">Medical / Healthcare / Hospital</option>
                              <option value="Medical Devices / Equipments">Medical Devices / Equipments</option>
                              <option value="Metals">Metals</option>
                              <option value="Mining">Mining</option>
                              <option value="NGO / Social Services">NGO / Social Services</option>
                              <option value="Office Equipment / Automation">Office Equipment / Automation</option>
                              <option value="Oil and Gas">Oil and Gas</option>
                              <option value="Paper">Paper</option>
                              <option value="Pharma / Biotech / Clinical Research">Pharma / Biotech / Clinical Research</option>
                              <option value="Plastics">Plastics</option>
                              <option value="Power / Energy / Non conventional Energy">Power / Energy / Non conventional Energy</option>
                              <option value="Printing / Packaging">Printing / Packaging</option>
                              <option value="Private Equity / Venture Capitalists / Incubators">Private Equity / Venture Capitalists / Incubators</option>
                              <option value="Publishing">Publishing</option>
                              <option value="Real Estate / Property">Real Estate / Property</option>
                              <option value="Recruitment / HR services">Recruitment / HR services</option>
                              <option value="Retail">Retail</option>
                              <option value="Rubber">Rubber</option>
                              <option value="Security / Law Enforcement">Security / Law Enforcement</option>
                              <option value="Semiconductors / Electronics">Semiconductors / Electronics</option>
                              <option value="Shipping / Marine">Shipping / Marine</option>
                              <option value="Steel">Steel</option>
                              <option value="Strategy / Management Consulting Firms">Strategy / Management Consulting Firms</option>
                              <option value="Sugar">Sugar</option>
                              <option value="Telecom / ISP">Telecom / ISP</option>
                              <option value="Textiles / Garments / Accessories">Textiles / Garments / Accessories</option>
                              <option value="Travel &amp; Tourism">Travel &amp; Tourism</option>
                              <option value="Tyres">Tyres</option>
                              <option value="Water Treatment /  Waste Management">Water Treatment /  Waste Management</option>
                              <option value="Wellness / Fitness / Sports">Wellness / Fitness / Sports</option> </select>
                              <span class="focus-border"></span>
                            </div>
                            <h6 style="color:#ff0000"><?php echo $empty_industry; ?></h6>
                      </div>

                      <div class="u-form-group u-form-name u-form-group-2">
                        <span style="font-weight: 400;">Function * </span>
                        <div class="col-sm-12">
                          <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-8" name="Function"id="Function">
                            <option value="-1">-- please select --</option>
                            <option value="Accounting / Tax / Company Secretary / Audit">Accounting / Tax / Company Secretary / Audit</option>
                            <option value="Agent">Agent</option>
                            <option value="Airline / Reservations / Ticketing / Travel">Airline / Reservations / Ticketing / Travel</option>
                            <option value="Analytics &amp; Business Intelligence">Analytics &amp; Business Intelligence</option>
                            <option value="Anchoring / TV / Films / Production">Anchoring / TV / Films / Production</option>
                            <option value="Architects / Interior Design / Naval Arch.">Architects / Interior Design / Naval Arch.</option>
                            <option value="Art Director / Graphic / Web Designer">Art Director / Graphic / Web Designer</option>
                            <option value="Banking / Insurance">Banking / Insurance</option>
                            <option value="Beauty / Fitness / Spa Services">Beauty / Fitness / Spa Services</option>
                            <option value="Content / Journalism">Content / Journalism</option>
                            <option value="Corporate Planning / Consulting">Corporate Planning / Consulting</option>
                            <option value="CSR &amp; Sustainability">CSR &amp; Sustainability</option>
                            <option value="Engineering Design / R&amp;D">Engineering Design / R&amp;D</option>
                            <option value="Export / Import / Merchandising">Export / Import / Merchandising</option>
                            <option value="Fashion / Garments / Merchandising">Fashion / Garments / Merchandising</option>
                            <option value="Guards / Security Services">Guards / Security Services</option>
                            <option value="Hotels / Restaurants">Hotels / Restaurants</option>
                            <option value="HR / Administration / IR">HR / Administration / IR</option>
                            <option value="IT - Hardware / Telecom / Technical Staff / Support">IT - Hardware / Telecom / Technical Staff / Support</option>
                            <option value="IT Software - Application Programming / Maintenance">IT Software - Application Programming / Maintenance</option>
                            <option value="IT Software - Client Server">IT Software - Client Server</option>
                            <option value="IT Software - DBA / Datawarehousing">IT Software - DBA / Datawarehousing</option>
                            <option value="IT Software - Ecommerce / Internet Technologies">IT Software - Ecommerce / Internet Technologies</option>
                            <option value="IT Software - Embedded /EDA /VLSI /ASIC / Chip Des.">IT Software - Embedded /EDA /VLSI /ASIC / Chip Des.</option>
                            <option value="IT Software - ERP / CRM">IT Software - ERP / CRM</option>
                            <option value="IT Software - Mainframe">IT Software - Mainframe</option>
                            <option value="IT Software - Middleware">IT Software - Middleware</option>
                            <option value="IT Software - Mobile">IT Software - Mobile</option>
                            <option value="IT Software - Network Administration / Security">IT Software - Network Administration / Security</option>
                            <option value="IT Software - QA &amp; Testing">IT Software - QA &amp; Testing</option>
                            <option value="IT Software - System Programming">IT Software - System Programming</option>
                            <option value="IT Software - Systems / EDP / MIS">IT Software - Systems / EDP / MIS</option>
                            <option value="IT Software - Telecom Software">IT Software - Telecom Software</option>
                            <option value="ITES / BPO / KPO / Customer Service / Operations">ITES / BPO / KPO / Customer Service / Operations</option>
                            <option value="Legal">Legal</option>
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
                            <option value="Web / Graphic Design / Visualiser">Web / Graphic Design / Visualiser</option>
                        </select>
                        <span class="focus-border"></span>
                      </div>
                        <h6 style="color:#ff0000"><?php echo $empty_function; ?></h6>
                  </div>

                  <div class="u-form-group u-form-name u-form-group-2">
                    <span style="font-weight: 400;">Education * </span>
                    <div class="col-sm-12">
                        <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-9" name="Education"id="Education">
                          <option value="-1">-- please select --</option>
                          <option value="B.A">B.A</option>
                          <option value="B.Arch">B.Arch</option>
                          <option value="B.Com">B.Com</option>
                          <option value="B.Ed">B.Ed</option>
                          <option value="B.Pharma">B.Pharma</option>
                          <option value="B.Sc">B.Sc</option>
                          <option value="B.Tech/B.E.">B.Tech/B.E.</option>
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
                          <option value="ICWA (CMA)">ICWA (CMA)</option>
                          <option value="ITI">ITI</option>
                          <option value="LLB">LLB</option>
                          <option value="LLM">LLM</option>
                        </select>
                        <span class="focus-border"></span>
                      </div>
                        <h6 style="color:#ff0000"><?php echo $empty_education; ?></h6>
                  </div>

                  <div class="u-form-group u-form-name u-form-group-2">
                    <span style="font-weight: 400;">Experience * </span><br>&nbsp
                     <div class="col-sm-12">
                         <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-10" name="Experience"id="Experience">
                          <option value="-1">years</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                        </select>
                        <span class="focus-border"></span>
                      </div>
                        <h6 style="color:#ff0000"><?php echo $empty_experience; ?></h6>
                  </div>

                  <div class="u-form-group u-form-name u-form-group-2">
                    <span style="font-weight: 400;">Salary * </span>
                  <div class="col-sm-12">
                        <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-11" name="Salary"id="Salary">
                          <option value="-1">lakhs</option>
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>  
                        </select>
                        <span class="focus-border"></span>
                      </div>
                        <h6 style="color:#ff0000"><?php echo $empty_salary; ?></h6>
                  </div>

              <div class="u-form-group u-form-name u-form-group-2">
                 <span style="font-weight: 400;">CV * </span>
                   <div class="form-element">
                     <div class="custom-file-upload">
                        <!-- <div class="custom-file-upload-toggle">
                          <div class="custom-file-upload-toggle-btn btn btn-prim">     
                          </div>
                        </div> -->
                        <input type="file" name="ctl09$ctl04$CVFileUpload" id="ctl09_ctl04_CVFileUpload" class="custom-file-upload-input" data-bit-id="cvFileUpload" />
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
              <a href="" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-1-light-2 u-radius-17 u-btn-1">Register<br>
              </a>
              <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
            </div>
            
            <div class="u-form-send-message u-form-send-success">Thank you! Your Registraion is Successful</div>
            <div class="u-form-send-error u-form-send-message">Registraion Unsuccesful.</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
           <!--  <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0ecf"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-0ecf"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d80a"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-d80a"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://instagram.com/name"><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5d38"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5d38"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
        </div> -->
      </div>
    </section>
    
    
    <!-- <footer class="u-clearfix u-footer" id="sec-ff43"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-12fb"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-12fb"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a27c"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a27c"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7849"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7849"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fb82"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-fb82"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div> -->
      </div><!-- </footer>
    <section class="u-backlink u-clearfix u-footer">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section> -->

<!--     <script src="assets/vendors/js/vendor.bundle.base.js"></script>

  </body>
</html> -->

<footer class="u-clearfix u-footer cf footer-main" id="sec-ff43">
<div class="box-inner">
<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
<div id="ctl07_ctl05_FooterDiv" class="grid-wrap">
<div class="u-layout-row">
                        
                        
          <div class="footer-main-col">
              <div class="footer-main-col-inner">
                  
          <div class="footer-link-list">
              <div>
                  <span class="footer-list-header footer-list-header-toggle has-bg-img-after">
                      job seeker
                  </span>
                  
                          <!-- <ul class="list-clean footer-link-list-sub" style="display: none;"> -->
                          <ul class="list-clean footer-link-list-sub">
                          
                          <li>
                              <a href="/jobs/" target="_self">find a job</a>
                          </li>
                      
                          <li>
                              <a href="/my-randstad/register/" target="_self">submit your cv</a>
                          </li>
                      
                          <li>
                              <a href="/job-seeker/areas-of-expertise/" target="_self">areas of expertise</a>
                          </li>
                      
                          <li>
                              <a href="/c/Unknown.aspx" target="_self">career hub</a>
                          </li>
                      
                          <li>
                              <a href="/job-seeker/our-offices/" target="_self">our offices</a>
                          </li>
                      
                          </ul>
                      
              </div>
              
          </div>
      
          <div class="footer-link-list">
              <div>
                  <span class="footer-list-header footer-list-header-toggle has-bg-img-after">
                      jobs by industry / function
                  </span>
                  
                          <!-- <ul class="list-clean footer-link-list-sub" style="display: none;"> -->
                           <ul class="list-clean footer-link-list-sub">

                          <li>
                              <a href="/jobs/s-agro-seeds/" target="_self">jobs in agro and seeds</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-construction-property/" target="_self">jobs in construction &amp; property</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-consumer-durables-electronics/" target="_self">jobs in consumer durables and electronics</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-education/" target="_self">jobs in education</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-fmcg/" target="_self">jobs in fmcg</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-banking-finance/" target="_self">jobs in banking &amp; finance</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-oil-gas-power-energy/" target="_self">jobs in oil, gas, power &amp; energy</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/q-hr/" target="_self">jobs in HR</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-information-technology/" target="_self">jobs in IT</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-consulting-vc/" target="_self">jobs in consulting &amp; vc</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-other/" target="_self">jobs in other</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-ites-bpo/" target="_self">jobs in ITeS and BPO</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-legal-regulatory-intellectual-property/" target="_self">jobs in legal &amp; intellectual property</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-manufacturing/" target="_self">jobs in manufacturing and industrial</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-digital-marketing-communication/" target="_self">jobs in digital marketing and communication</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-pharma-healthcare-lifesciences/" target="_self">jobs in pharma and healthcare</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-retail/" target="_self">jobs in retail</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/q-sales/" target="_self">jobs in sales</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-telecom/" target="_self">jobs in telecom</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/s-supply-chain-logistics/" target="_self">jobs in supply chain and logistics</a>
                          </li>
                      
                          </ul>
                      
              </div>
              
          </div>
      
              </div>
          </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-sm-2">
          <div class="footer-main-col">
              <div class="footer-main-col-inner">
                  
          <div class="footer-link-list">
              <div>
                  <span class="footer-list-header footer-list-header-toggle has-bg-img-after">
                      jobs by location
                  </span>
                  
                          <!-- <ul class="list-clean footer-link-list-sub" style="display: none;"> -->
                          <ul class="list-clean footer-link-list-sub">
                              
                          <li>
                              <a href="/jobs/gujarat/ahmedabad/" target="_self">jobs in Ahmedabad</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/karnataka/bengaluru/" target="_self">jobs in Bangalore</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/tamil-nadu/coimbatore/" target="_self">jobs in Coimbatore</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/rajasthan/jaipur/" target="_self">jobs in Jaipur</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/maharashtra/mumbai/" target="_self">jobs in Mumbai</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/gujarat/vadodara/" target="_self">jobs in Vadodara</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/haryana/gurgaon/" target="_self">jobs in Gurgaon</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/jharkhand/jamshedpur/" target="_self">jobs in Jamshedpur</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/bihar/patna/" target="_self">jobs in Patna</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/tamil-nadu/chennai/" target="_self">jobs in Chennai</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/telangana/hyderabad/" target="_self">jobs in Hyderabad</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/tamil-nadu/vellore/" target="_self">jobs in Vellore</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/west-bengal/kolkata/" target="_self">jobs in Kolkata</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/maharashtra/nagpur/" target="_self">jobs in Nagpur</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/maharashtra/pune/" target="_self">jobs in Pune</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/uttar-pradesh/kanpur/" target="_self">jobs in Kanpur</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/chandigarh/" target="_self">jobs in Chandigarh</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/madhya-pradesh/indore/" target="_self">jobs in Indore</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/gujarat/bharuch/" target="_self">jobs in Bharuch</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/karnataka/hubli/" target="_self">jobs in Hubli</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/uttar-pradesh/lucknow/" target="_self">jobs in Lucknow</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/new-delhi/" target="_self">jobs in Delhi</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/gujarat/rajkot/" target="_self">jobs in Rajkot</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/andhra-pradesh/visakhapatnam/" target="_self">jobs in Visakhapatnam</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/gujarat/surat/" target="_self">jobs in Surat</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/andhra-pradesh/vijayawada/" target="_self">jobs in Vijayawada</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/madhya-pradesh/bhopal/" target="_self">jobs in Bhopal</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/punjab/ludhiana/" target="_self">jobs in Ludhiana</a>
                          </li>
                      
                          <li>
                              <a href="/jobs/karnataka/mysore/" target="_self">jobs in Mysore</a>
                          </li>
                      
                          </ul>
                      
              </div>
              
          </div>
      
              </div>
          </div>
      </div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <div class="footer-main-col">
              <div class="footer-main-col-inner">
                  
          <div class="footer-link-list">
              <div>
                  <span class="footer-list-header footer-list-header-toggle has-bg-img-after">
                      employers
                  </span>
                  
                          <!-- <ul class="list-clean footer-link-list-sub" style="display: none;"> -->
                          <ul class="list-clean footer-link-list-sub">
                              
                          <li>
                              <a href="/employers/submit-a-job/" target="_self">submit a job</a>
                          </li>
                      
                          <li>
                              <a href="/employers/request-a-call-back/" target="_self">request a call back</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/" target="_self">areas of expertise</a>
                          </li>
                      
                          <li>
                              <a href="/employers/our-solutions/" target="_self">our solutions</a>
                          </li>
                      
                          <li>
                              <a href="/employers/our-offices/" target="_self">our offices</a>
                          </li>
                      
                          </ul>
                      
              </div>
              
          </div>
      
          <div class="footer-link-list">
              <div>
                  <span class="footer-list-header footer-list-header-toggle has-bg-img-after">
                      our solutions
                  </span>
                  
                          <!-- <ul class="list-clean footer-link-list-sub" style="display: none;"> -->
                          <ul class="list-clean footer-link-list-sub">
                              
                          <li>
                              <a href="/employers/our-solutions/permanent-recruitment/" target="_self">permanent recruitment</a>
                          </li>
                      
                          <li>
                              <a href="/employers/our-solutions/recruitment-process-outsourcing/" target="_self">recruitment process outsourcing</a>
                          </li>
                      
                          <li>
                              <a href="/employers/our-solutions/general-staffing/" target="_self">general staffing</a>
                          </li>
                      
                          <li>
                              <a href="/employers/our-solutions/specialty-staffing/" target="_self">specialty staffing</a>
                          </li>
                      
                          <li>
                              <a href="/employers/our-solutions/executive-search/" target="_self">executive search</a>
                          </li>
                      
                          <li>
                              <a href="/employers/our-solutions/headhunters/" target="_self">headhunting</a>
                          </li>
                      
                          <li>
                              <a href="/employers/our-solutions/manpower-consultancy/" target="_self">manpower consultancy</a>
                          </li>
                      
                          <li>
                              <a href="/employers/our-solutions/talent-acquisition-and-management-specialist/" target="_self">talent acquisition</a>
                          </li>
                      
                          <li>
                              <a href="/employers/our-solutions/payroll-services/" target="_self">payroll transfer services</a>
                          </li>
                      
                          <li>
                              <a href="/employers/our-solutions/sales-and-trade-marketing/" target="_self">sales and trade marketing</a>
                          </li>
                      
                          </ul>
                      
              </div>
              
          </div>
      
          <div class="footer-link-list">
              <div>
                  <span class="footer-list-header footer-list-header-toggle has-bg-img-after">
                      areas of expertise
                  </span>
                  
                          <!-- <ul class="list-clean footer-link-list-sub" style="display: none;"> -->
                          <ul class="list-clean footer-link-list-sub">
                              
                          <li>
                              <a href="/employers/areas-of-expertise/analytics-and-data-sciences/" target="_self">analytics and data sciences</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/banking-and-financial-services/" target="_self">banking and financial services</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/civil-and-architecture/" target="_self">civil and architecture</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/operations-logistics-and-supply-chain/" target="_self">operations logistics and supply chain</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/product-management-and-information-technology/" target="_self">product management and<br> information technology</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/sales-and-account-management/" target="_self">sales and account management</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/pharma-life-sciences-healthcare/" target="_self">pharma and healthcare</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/support-functions/" target="_self">support functions</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/hr-recruitment/" target="_self">human resource</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/construction-recruitment/" target="_self">construction recruitment</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/manufacturing-staffing/" target="_self">manufacturing staffing</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/fmcg-recruitment/" target="_self">fmcg recruitment</a>
                          </li>
                      
                          <li>
                              <a href="/employers/areas-of-expertise/bpo-recruitment/" target="_self">bpo recruitment</a>
                          </li>
                      
                          </ul>
                      
              </div>
              
          </div>
      
              </div>
          </div>
      <!-- </div> -->

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="col-sm-2">
          <div class="footer-main-col">
              <div class="footer-main-col-inner">
                  
          <div class="footer-link-list">
              <div>
                  <span class="footer-list-header footer-list-header-toggle has-bg-img-after">
                      about us
                  </span>
                  
                          <!-- <ul class="list-clean footer-link-list-sub" style="display: none;"> -->
                          <ul class="list-clean footer-link-list-sub">
                              
                          <li>
                              <a href="/about-us/our-history/" target="_self">our history</a>
                          </li>
                      
                          <li>
                              <a href="/about-us/our-sponsorships/" target="_self">our sponsorships</a>
                          </li>
                      
                          <li>
                              <a href="/about-us/social-responsibility-vso/" target="_self">social responsibility</a>
                          </li>
                      
                          <li>
                              <a href="/c/Unknown.aspx" target="_self">press releases</a>
                          </li>
                      
                          <li>
                              <a href="/about-us/randstad-in-the-news/" target="_self">Randstad in the news</a>
                          </li>
                      
                          </ul>
                      
              </div>
              
          </div>
      
          <div class="footer-link-list">
              <div>
                  <span class="footer-list-header footer-list-header-toggle has-bg-img-after">
                      career hub
                  </span>
                  
                          <!-- <ul class="list-clean footer-link-list-sub" style="display: none;"> -->
                          <ul class="list-clean footer-link-list-sub">
                              
                          <li>
                              <a href="/job-seeker/career-hub/all-articles/" target="_self">all articles</a>
                          </li>
                      
                          <li>
                              <a href="/job-seeker/career-hub/areas-of-expertise/" target="_self">Areas of Expertise</a>
                          </li>
                      
                          <li>
                              <a href="/job-seeker/career-hub/hr-trends/" target="_self">HR Trends</a>
                          </li>
                      
                          </ul>
                      
              </div>
              
          </div>
      
          <div class="footer-link-list">
              <div>
                  <span class="footer-list-header footer-list-header-toggle has-bg-img-after">
                      join our team
                  </span>
                  
                          <!-- <ul class="list-clean footer-link-list-sub" style="display: none;"> -->
                          <ul class="list-clean footer-link-list-sub">
                              
                          <li>
                              <a href="/job-seeker/our-offices/" target="_self">our offices</a>
                          </li>
                      
                          </ul>
                      
              </div>
              
          </div>
      
          <div class="footer-link-list">
              <div>
                  <span class="footer-list-header footer-list-header-toggle has-bg-img-after">
                      workforce360
                  </span>
                  
                          <!-- <ul class="list-clean footer-link-list-sub" style="display: none;"> -->
                          <ul class="list-clean footer-link-list-sub">
                              
                          <li>
                              <a href="/workforce360/all-articles" target="_self">all articles</a>
                          </li>
                      
                          <li>
                              <a href="/workforce360/areas-of-expertise/" target="_self">Areas of Expertise</a>
                          </li>
                      
                          <li>
                              <a href="/workforce360/hr-trends/" target="_self">HR Trends</a>
                          </li>
                      
                          <li>
                              <a href="/workforce360/knowledge-center/" target="_self">Knowledge Center</a>
                          </li>
                      
                          <li>
                              <a href="/workforce360/our-solutions/" target="_self">Our Solutions</a>
                          </li>
                      
                          </ul>
                      
              </div>
              
          </div>
      
          <div class="footer-link-list">
              <div>
                  <span class="footer-list-header footer-list-header-toggle has-bg-img-after">
                      women at work
                  </span>
                  
                          <!-- <ul class="list-clean footer-link-list-sub" style="display: none;"> -->
                          <ul class="list-clean footer-link-list-sub">
                              
                          <li>
                              <a href="/women-at-work/voices/" target="_self">voices</a>
                          </li>
                      
                          </ul>
                      
              </div>
              
          </div>
      
              </div>
          </div>
</div>      
</div>
</div>
<!-- </footer>
     <footer class="u-clearfix u-footer" id="sec-ff43"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1"> -->
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-12fb"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-12fb"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a27c"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-a27c"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7849"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7849"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-fb82"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-fb82"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
      </div>
    </div>
       <section class="u-backlink u-clearfix">
      <main>
        <p style="color: #ffffff;">Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>

    </footer>
    <!-- Profile Icon -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>

  </body>
</html>

<style>

element.style {
}
@media only screen and (min-width: 501px)
.footer-main {
    padding: 45px 0 102px 20px;
    position: relative;
    margin-left: -20px;
}
.footer-main {
    background: #0f1941;
    color: #f7f5f0;
    font-size: 16px;
    padding: 20px 0;
}
article, aside, details, figcaption, figure, footer, header, hgroup, nav, section, summary {
    display: block;
}
article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
    display: block;
}
*, *:before, *:after {
    box-sizing: inherit;
    margin: 0;
    padding: 0;
}
*, *:before, *:after {
    box-sizing: inherit;
    margin: 0;
    padding: 0;
}
user agent stylesheet
footer {
    display: block;
}
.main {
    background: #0f1941;
    line-height: 1.5;
    min-height: 100vh;
    overflow: hidden;
}
body {
    color: #0f1941;
    font: 400 18px/1.2 'Graphik Web',Tahoma,sans-serif;
    -webkit-font-smoothing: antialiased;
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
.cf:before, .cf:after {
    content: " ";
    display: table;
}
*, *:before, *:after {
    box-sizing: inherit;
    margin: 0;
    padding: 0;
}
*, *:before, *:after {
    box-sizing: inherit;
    margin: 0;
    padding: 0;
}
.cf:after {
    clear: both;
}
.cf:before, .cf:after {
    content: " ";
    display: table;
}
*, *:before, *:after {
    box-sizing: inherit;
    margin: 0;
    padding: 0;
}
*, *:before, *:after {
    box-sizing: inherit;
    margin: 0;
    padding: 0;
}

</style>

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
             