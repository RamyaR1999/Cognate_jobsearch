// #Register Meber.php
<?php session_start(); ?>
<?php include "db.php"; ?>
<?php 

     if(isset($_POST['submit'])){
         
         $Firstname=  $_POST['Firstname'];
         $Lastname=  $_POST['Lastname'];
         $Email    = $_POST['Email'];
         $Password = $_POST['Password'];
         $Phone=  $_POST['Phone'];
         $City=  $_POST['City'];
         $Industry=  $_POST['Industry'];
         $Function=  $_POST['Function'];
         $Education =$_POST['Education'];
         $Experience =$_POST['Experience'];
         $Salary =$_POST['Salary'];
         $CV = $_FILES['CV']['Name'];
         $upload = "uploads/".$CV;
         
         $error = 0;

      if(!empty($Firstname) && !empty($Lastname) && !empty($Phone) && !empty($Email) && !empty($Password)){
          
      $Password = mysqli_real_escape_string($connection,$_POST['Password']);
      // $confirm_password = mysqli_real_escape_string($connection,$_POST['confirm_password']);
      $Password = md5($Password);              
      // $confirm_password = md5($confirm_password);              
     
      if(preg_match('/^[\p{L} ]+$/u', $Firstname)) {
          
        if(preg_match('/^[\p{L} ]+$/u', $Lastname)) {
            
            
        $uppercase  = preg_match('@[A-Z]@', $Password);
        $lowercase  = preg_match('@[a-z]@', $Password);
        $number     = preg_match('@[0-9]@', $Password);
        $character  = preg_match('/[\'^£!$%&*()}{@#~?><>,|=_+-]/', $Password);

        if(strlen($Password) >= 8) {
            
        // if($password == $confirm_password){
        
        if(preg_match("/^[0-9]{10}$/", $Phone)) {   



        if(!$error){
        $check_query= "SELECT * FROM users WHERE Email = '{$Email}' ";
        $check_users_query = mysqli_query($connection,$check_query);

        if(mysqli_num_rows($check_users_query) > 0){

          $row = mysqli_fetch_assoc($check_users_query);

            if($email==$row['email'])
            {
                $message_email= "Email already exists";
            }
        }else {

        
        $query = "INSERT INTO users (Firstname,Lastname,Email,Password,Phone,City,Industry,Function,Education,Experience,Salary,CV) ";
        $query .= "VALUES ('{$Firstname}','{$Lastname}','{$Email}','{$Password}','{$Phone}','$City','$Industry','$Function','$Education','$Experience','$Salary','$upload')";
             
        $register_query = mysqli_query($connection,$query);
            
            move_uploaded_file($_FILES['CV']['tmp_name'], $upload);
      
        if(!$register_query) {
            
            die("Query Failed" . mysqli_error($connection) .' '. mysqli_error($connection));
        }
          
         $_SESSION['status'] = "Registration Was Successful Please Sign In";   
           
             // header("Location:Member-Login.php");
             header( "Location: otp.php" );
            // header("Location:email_verification.php"); 

// $to=$email;
// $subject = "OTP";
// $rndno=rand(100000, 999999);//OTP generate
// $message = urlencode("otp number.".$rndno);
// $txt = "OTP: ".$rndno."";
// $headers = "From: thennarasan1988@gmail.com" . "\r\n";
// "CC: reshma21@gmail.com";
// if(mail($to,$subject,$txt,$headers)){

// $_SESSION['firstname']=$_POST['firstname'];
// $_SESSION['email']=$_POST['email'];
// $_SESSION['phone']=$_POST['phone'];
// $_SESSION['otp']=$rndno;


// header( "Location: otp.php" );
// }else{

// echo "mail send failed";

// }
          
 }

}
          }else{
              $message_phone = "Invalid Phone No";
            
        }
            
        //   }else{
            
        //     $message_cpassword = "password mismatch";
        // }
       
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
        $message = "Fields cannot be Empty";
       }  
         
          }else {         
              $message = ""; 
       }

  ?>


<?php
// session_start();
// $rndno=rand(100000, 999999);//OTP generate
// $message = urlencode("otp number.".$rndno);
// $to=$_POST['email'];
// $subject = "OTP";
// $txt = "OTP: ".$rndno."";
// $headers = "From: 07.ramyar@gmail.com" . "\r\n" .
// "CC: thennarasan1988@gmail.com";
// mail($to,$subject,$txt,$headers);
// if(isset($_POST['btn-save']))
// {
// $_SESSION['firstname']=$_POST['firstname'];
// $_SESSION['email']=$_POST['email'];
// $_SESSION['phone']=$_POST['phone'];
// $_SESSION['otp']=$rndno;
// header( "Location: otp.php" );

// }
 ?>




<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Register Member</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Register-Member.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.23.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

    <!-- password Icon -->
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
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-3ee6"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/cognate.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
           <ul class="u-nav u-unstyled u-nav-1">
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.php" style="padding: 10px 20px;">Job seekers</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="View_All_Artists.php" style="padding: 10px 20px;">Hiring</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Available_jobs.php" style="padding: 10px 20px;">Available Jobs</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">About us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.php" style="padding: 10px 20px;">Contact us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Register-Member.php" style="padding: 10px 20px;">Submit Your CV</a></li>

  <?php

    if(isset($_SESSION['email']) == $db_email){

  ?> 

<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Member-Login.php" style="padding: 10px 20px;">Login</a>
</li>

  <?php 
              
      }else{
              
    ?> 


           <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="u-nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="" style="width:40px" src ='images/<?php echo $_SESSION['image'] ?>' alt=""></a>
 <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">

  <img class="" style="width:60px" src ='images/<?php echo $_SESSION['image'] ?>' alt="">

                  <p class="mb-1 mt-3 font-weight-semibold" style="color:darkblue;">
                      <?php
                      
                      if(isset($_SESSION['firstname'])){
                          
                        echo $_SESSION['firstname']; 
                         
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

        </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php" style="padding: 10px 20px;">Job seekers</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="View_All_Artists.php" style="padding: 10px 20px;">Hiring</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Available_jobs.php" style="padding: 10px 20px;">Available Jobs</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 20px;">About us</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 20px;">Contact us</a></li>

</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Register-Member.php" style="padding: 10px 20px;">Submit Your CV</a></li>

 <?php

    if(isset($_SESSION['email']) == $db_email){

  ?> 

<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.php" style="padding: 10px 20px;">Login</a>
</li>

 <?php 
              
    }
              
  ?> 

</ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-gradient u-section-1" id="sec-6065">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-radius-50 u-white u-form-1">
          <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 50px;" redirect="true">
            <div class="u-layout-row">
               <div class="col-md-6">
                  <div class="input-group">
                     <span style="font-weight: 600;" class="col-sm-3 col-form-label">Firstname: </span><br>
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Firstname; ?>" class="form-control" name="Firstname">
                          <h6 class="text-center" style="color:#ff0000"><?php echo $message_Firstname; ?></h6>
                        </div>
                      </div>
                    </div>
                    &nbsp
                    &nbsp
                    <div class="col-md-6">
                      <div class="input-group">
                        <span style="font-weight: 600;" class="col-sm-3 col-form-label" >Lastname: </span>
                        <div class="col-sm-12">
                          <input type="text"  value="<?php echo $Lastname; ?>" class="form-control" name="Lastname">
                          <h6 class="text-center" style="color:#ff0000"><?php echo $message_Lastname; ?></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-layout-row">
                    <div class="col-md-6">
                      <div class="input-group">
                        <span style="font-weight: 600;" class="col-sm-3 col-form-label">Email: </span><br>
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Email; ?>" class="form-control" name="Email">
                          <h6 class="text-center" style="color:#ff0000"><?php echo $message_Email; ?></h6>
                        </div>
                      </div>
                    </div>
                    &nbsp
                    &nbsp
                    <div class="col-md-6">
                      <div class="input-group">
                        <span style="font-weight: 600;" class="col-sm-3 col-form-label" >Password: </span>
                        <div class="col-sm-12">
                          <input type="text"  value="<?php echo $Password; ?>" class="form-control" name="Password">
                          <h6 class="text-center" style="color:#ff0000"><?php echo $message_strnpassword; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-layout-row">
                    <div class="col-md-6">
                      <div class="input-group">
                        <span style="font-weight: 600;" class="col-sm-3 col-form-label">Phone: </span><br>
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Phone; ?>" class="form-control" name="Phone">
                          <h6 class="text-center" style="color:#ff0000"><?php echo $message_Phone; ?></h6>
                        </div>
                      </div>
                    </div>
                    &nbsp
                    &nbsp
                    <div class="col-md-6">
                      <div class="input-group">
                        <span style="font-weight: 600;" class="col-sm-3 col-form-label" >City: </span>
                        <div class="col-sm-12">
                          
                          <select type="text" class="form-control" name="City"id="City">
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
                       
                      </div>
                    </div>
                  </div>
                </div>
                <div class="u-layout-row">
                    <div class="col-md-6">
                      <div class="input-group">
                        <span style="font-weight: 600;" class="col-sm-3 col-form-label">Industry: </span><br>
                        <div class="col-sm-12">
                          
                             
                             <select type="text" class="form-control" name="Industry"id="Industry">
                              <option value="-1">-- please select --</option>
                              <option value="Accounting / Finance">Accounting / Finance</option>
                              <option value="Agriculture / Diary">Agriculture / Diary</option>
                              <option value="Airlines">Airlines</option>
                              <option value="Animation">Animation</option>
                              <!-- <option value="Architecture / Interior Design">Architecture / Interior Design</option> -->
                              <option value="Infrastructure">Infrastructure</option>
                              <option value="Insurance">Insurance</option>
                              <option value="Internet / Ecommerce">Internet / Ecommerce</option>
                              <option value="IT-Hardware  Networking">IT-Hardware  Networking</option>
                            </select>
                          
                        </div>
                      </div>
                    </div>
                    &nbsp
                    &nbsp
                    
                    

                    <div class="col-md-6">
                      <div class="input-group">
                        <span style="font-weight: 600;" class="col-sm-3 col-form-label" >Function: </span>
                        <div class="col-sm-12">
                          
                           
                          <select type="text" class="form-control" name="Function"id="Function"><option value="-1">-- please select --</option>
                          <option value="IT Software - ERP / CRM">IT Software - ERP / CRM</option>
                          <option value="IT Software - Mainframe">IT Software - Mainframe</option>
                          <option value="IT Software - Middleware">IT Software - Middleware</option>
                          <option value="Packaging">Packaging</option>
                          <option value="Production/Maintenance">Production/Maintenance</option>
                        </select>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-layout-row">
                <div class="col-md-6">
                  <div class="input-group">
                    <span style="font-weight: 600;" class="col-sm-3 col-form-label">Education: </span><br>
                    <div class="col-sm-12">
                      
                        <select type="text" class="form-control" name="Education"id="Education">
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
                     
                    </div>
                  </div>
                </div>
                 &nbsp
                 &nbsp
                 &nbsp
                 &nbsp
                 &nbsp
                 
                

                <div class="col-md-6">
                  <div class="input-group">
                    <span style="font-weight: 600;" class="col-sm-3 col-form-label" >Experience: </span>
                    <div class="col-sm-12">
                     
                         <select type="text" class="form-control" name="Experience"id="Experience">
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
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-layout-row">
                <div class="col-md-6">
                  <div class="input-group">
                    <span style="font-weight: 600;" class="col-sm-3 col-form-label">Salary: </span><br>
                    <div class="col-sm-12">
                      
                        <select type="text" class="form-control" name="Salary"id="Salary">
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
                      
                    </div>
                  </div>
                </div>
                 &nbsp
                 &nbsp
                  &nbsp
                   &nbsp
                    &nbsp
                     &nbsp
                      &nbsp
                       &nbsp
                        &nbsp
                         &nbsp
                          &nbsp
                           &nbsp
                            &nbsp
                             &nbsp
                              

                <div class="col-md-6">
                  <div class="form-group row">
                    <span style="font-weight: 600;" class="col-sm-3 col-form-label" >CV: </span>
                    <div class="col-sm-12">
                      <label for="ctl09_ctl04_CVFileUpload"  class="jbs-apply-form-lbl cv-file-upload is-required"></label>
                <div class="form-element">
                    <div class="custom-file-upload">
                        <div class="custom-file-upload-toggle">
                            <div class="custom-file-upload-toggle-btn btn btn-prim">
                                
                            </div>
                        </div>
                        <input type="file" name="ctl09$ctl04$CVFileUpload" id="ctl09_ctl04_CVFileUpload" class="custom-file-upload-input" data-bit-id="cvFileUpload" />
                    </div>
                    <span data-bit-output-upload-files="cvFileUpload"></span>
                    <div> 
                         <!-- <ul class="cms-icons cms-icons-valid">
                          <li><span title="Valid extensions:.doc, .docx, .rtf" class="cms-icon cms-icon-text"></span></li><li><span title="Valid extensions:.pdf" class="cms-icon cms-icon-pdf"></span></li>
                        </ul> --><div  class="cms-file-upload-validator field-error" style="display:none;">
                          <span class="cms-file-upload-validator-error-message">CV is required</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
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
            <div class="u-social-icons u-spacing-10 u-social-icons-1">
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
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer" id="sec-ff43"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
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
      </div></footer>
    <section class="u-backlink u-clearfix u-footer">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>
  </body>
</html>

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
              <!-- <div class="u-align-center u-form-group u-form-submit">
              <a href="" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-1-light-2 u-radius-17 u-btn-1">Register<br>
              </a>
              <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">Thank you! Your Registraion is Successful</div>
            <div class="u-form-send-error u-form-send-message">Registraion Unsuccesful.</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
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
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer" id="sec-ff43"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
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
      </div></footer>
    <section class="u-backlink u-clearfix u-footer">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>
  </body>
</html>

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

</script> -->