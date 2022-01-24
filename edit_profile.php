<?php ob_start (); ?>
<?php session_start(); ?>
<?php include "db.php"; ?>


<?php

if(isset($_SESSION['id'])){

     $db_id =  $_SESSION['id'];  
           
     $query="SELECT * FROM users WHERE id = '{$db_id}' ";
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
           $Experience_years =$row['Experience_years'];
           $Experience_months =$row['Experience_months'];
           $Current_Salary_lakhs =$row['Current_Salary_lakhs'];
           $Current_Salary_thousand =$row['Current_Salary_thousand'];
           $Expected_Salary_lakhs =$row['Expected_Salary_lakhs'];
           $Expected_Salary_thousand =$row['Expected_Salary_thousand'];
           $CV = $row['CV'];
            
           }
         }

      if(isset($_POST['edit_profile'])){

          $Fullname=  $_POST['Fullname'];
           $Email    = $_POST['Email'];
           $Phone=  $_POST['Phone'];
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
           $Image = $_FILES['image']['name'];
           $user_image_tempname = $_FILES['image']['tmp_name'];
           $CV = $_FILES['file']['name'];
           $upload = $_FILES['file']['tmp_name'];

             move_uploaded_file($user_image_tempname,"images/$Image");
             move_uploaded_file($upload,"cv/$CV");
        
           if(empty($Image)){
            
            $query = "SELECT * FROM users WHERE id = $id ";
            $select_image = mysqli_query($connection,$query);
                
            while($row = mysqli_fetch_array($select_image)){
                
            $Image = $row['Image'];
              
               }
            
          }
          if(empty($CV)){

            $query = "SELECT * FROM users WHERE id = $id ";
            $select_cv = mysqli_query($connection,$query);
                
            while($row = mysqli_fetch_array($select_cv)){

            $CV = $row['CV'];
              
               }

            }
       
        if(preg_match('/^[\p{L} ]+$/u', $Fullname)) {
         
        $uppercase = preg_match('@[A-Z]@', $Password);
        $lowercase = preg_match('@[a-z]@', $Password);
        $number    = preg_match('@[0-9]@', $Password);
        $character = preg_match('/[\'^£!$%&*()}{@#~?><>,|=_+-]/', $password);
            

        if(strlen($Password) >= 8) { 
              
    $query="UPDATE users SET Fullname= '{$Fullname}', Image= '{$Image}', Email= '{$Email}',Phone= '{$Phone}',City='{$City}', Industry='{$Industry}',Function='{$Function}',Education='{$Education}',Experience_years='{$Experience_years}',Experience_months='{$Experience_months}',Current_Salary_lakhs='{$Current_Salary_lakhs}',Current_Salary_thousand='{$Current_Salary_thousand}',Expected_Salary_lakhs='{$Expected_Salary_lakhs}',Expected_Salary_thousand='{$Expected_Salary_thousand}',CV='{$CV}'  WHERE id= '{$id}' ";   
                      
        $update_profile_query=mysqli_query($connection,$query);

         if(!$update_profile_query) {
            
            die("Query Failed" . mysqli_error($connection));
        }           
          
           header("Location:profile.php"); 

         }else{
              $message_strnpassworad = "password contain atleast 8 characters";
              
       }

          }else{
              $message_Fullname ="Only Alphabets are allowed in Fullname";
          
       }   
          
            
       }

  ?>


<!doctype html>
<html class="no-js" lang="zxx">

<!--tittle-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGBS-Edit Profile</title>
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
<link rel="stylesheet" href="ProfilePage.css" media="screen">
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
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Services.php">Services</a>

  <ul class="submenu">
         
    <li><a href="submit_job.php">Submit A job</a></li><br>
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

     <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_83e4">
      <form action="" autocomplete="off" method="post" enctype="multipart/form-data">
       <!-- <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 50px;" redirect="true"> --><br>
        <br>
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-1"><?php echo $Fullname; ?></h1>
        <!-- <p class="u-large-text u-text u-text-variant u-text-2">I'm a creative graphic designer</p> -->

        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <center><img class="" style="width:140px; border-radius: 100%;" src ='images/<?php echo $Image ?>' alt=""></center><br>
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3">
                  <h3 class="u-text u-text-default u-text-6">Update your Profile</h3>
                  <p class="u-text u-text-7">
                <!-- <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                         <span style="font-weight: 600;"class="col-sm-3 col-form-label">Profile: </span>
                           <input type="file" name="image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                         <span style="font-weight: 600;"class="col-sm-3 col-form-label">CV: </span>
                           <input type="file" name="file">
                        </div>
                    </div>
                </div> -->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-3 col-form-label">Fullname: </span>
                         <div class="col-sm-12">
                          <input type="text" value="<?php echo $Fullname; ?>" class="form-control" name="Fullname">
                          <h6 style="color:#ff0000"><?php echo $message_Fullname; ?></h6>
                           </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-3 col-form-label">Email: </span>
                         <div class="col-sm-12">
                          <input type="text" value="<?php echo $Email; ?>" class="form-control" name="Email">
                          <h6 style="color:#ff0000"><?php echo $message_email; ?></h6>
                           </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span style="font-weight: 600;" class="col-sm-3 col-form-label">Mobile: </span>
                          <div class="col-sm-12">
                             <input type="text" value="<?php echo $Phone; ?>" class="form-control" name="Phone">
                             <h6 style="color:#ff0000"><?php echo $message_phone; ?></h6>
                          </div>
                    </div>
                 </div>
              
              <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-3 col-form-label">Education: </span>
                         <div class="col-sm-12">
                          <!-- <input type="text" value="<?php echo $Education; ?>" class="form-control" name="Education"> -->
                          
                          <select type="text" class="form-control" name="Education" id="Education">
                          <option value="<?php echo $Education; ?>">
                           <?php 

                                  if(!empty($Education)){

                                   echo $Education; 
                                   
                                   }else{

                            ?> -- please select education -- <?php } ?>
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
                 </div>
              <div class="row">
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span style="font-weight: 600;" class="col-sm-3 col-form-label">City: </span>
                          <div class="col-sm-12">
                             <!-- <input type="text" value="<?php echo $City; ?>" class="form-control" name="City"> -->
                             <select type="text" class="form-control" name="City" id="City">
                            <option value="<?php echo $City; ?>">
                            <?php 

                                  if(!empty($City)){

                                   echo $City; 
                                   
                                   }else{

                            ?> -- please select city -- <?php } ?>
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
                 <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-3 col-form-label">Experience</span>
                         <div class="col-sm-12">
                             <!-- <input type="text" value="<?php echo $Experience; ?>" class="form-control" name="Experience_years"> -->
                            <select type="text" class="form-control" name="Experience_years" id="Experience_years">
                          <option value="<?php echo $Experience_years; ?>">
                          <?php 

                              if(!empty($Experience_years)){

                               echo $Experience_years; 
                               
                               }else{

                          ?> Experience in years <?php } ?>
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
              </div>
              <!-- <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-3 col-form-label">Industry: </span>
                         <div class="col-sm-12">
                          <select type="text" class="form-control" name="Industry"id="Industry">
              
                          <option value="<?php echo $Industry; ?>">
                          <?php 

                                  if(!empty($Industry)){

                                   echo $Industry; 
                                   
                                   }else{

                            ?> -- please select industry -- <?php } ?>
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
                          </select>

                        </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span style="font-weight: 600;" class="col-sm-3 col-form-label">Function: </span>
                          <div class="col-sm-12">
            <select type="text" class="form-control" name="Function" id="Function">
            <option value="<?php echo $Function; ?>">
            <?php 

                  if(!empty($Function)){

                   echo $Function; 
                   
                   }else{

            ?> -- please select function -- <?php } ?>
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
            </select>
                             
                          </div>
                    </div>
                 </div>
              </div> -->
              <!-- <div class="row"> -->
                  
               
               <!-- <div class="col-md-6">
                <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-3 col-form-label">Experience</span>
                         <div class="col-sm-12">

                            <select type="text" class="form-control" name="Experience_months" id="Experience_months">
                             <option value="<?php echo $Experience_months; ?>">
                            <?php 

                              if(!empty($Experience_months)){

                               echo $Experience_months; 
                               
                               }else{

                           ?> months of experience <?php } ?>
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
                 </div> -->
               <!-- </div> -->

               <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                  <span style="font-weight: 600;" class="col-sm-6 col-form-label">Current CTC:&nbsp;&nbsp;&nbsp;&nbsp; </span>
                     <div class="col-sm-12">
                      <select type="text" id="myInput" class="form-control" name="Current_Salary_lakhs" id="Current_Salary_lakhs">
                                    <option value="<?php echo $Current_Salary_lakhs; ?>">
                                    <?php 

                                      if(!empty($Current_Salary_lakhs)){

                                       echo $Current_Salary_lakhs; 
                                       
                                       }else{

                                   ?> lakhs <?php } ?>
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
               
               <!-- <div class="col-md-6">
                <div class="form-group row">
                  <span style="font-weight: 600;" class="col-sm-6 col-form-label">Current CTC:&nbsp;&nbsp;&nbsp;&nbsp; </span>
                     <div class="col-sm-12">
                      <select type="text" class="form-control" name="Current_Salary_thousand" id="Current_Salary_thousand">
                             <option value="<?php echo $Current_Salary_thousand; ?>">
                             <?php 

                              if(!empty($Current_Salary_thousand)){

                               echo $Current_Salary_thousand; 
                               
                               }else{

                           ?> thousand <?php } ?>
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
                 </div> -->
               <!-- </div>

               <div class="row"> -->
                  <div class="col-md-6">
                    <div class="form-group row">
                  <span style="font-weight: 600;" class="col-sm-6 col-form-label">Expected CTC: </span>
                     <div class="col-sm-12">
                      <select type="text" class="form-control" name="Expected_Salary_lakhs" id="Expected_Salary_lakhs">
                                    <option value="<?php echo $Expected_Salary_lakhs; ?>">
                                    <?php 

                                        if(!empty($Expected_Salary_lakhs)){

                                          echo $Expected_Salary_lakhs; 
                                           
                                        }else{

                                    ?> lakhs <?php } ?>
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
               
               <!-- <div class="col-md-6">
                <div class="form-group row">
                  <span style="font-weight: 600;" class="col-sm-6 col-form-label">Expected CTC: </span>
                     <div class="col-sm-12">
                      <select type="text" class="form-control" name="Expected_Salary_thousand" id="Expected_Salary_thousand">
                          <option value="<?php echo $Expected_Salary_thousand; ?>">
                          <?php 

                                if(!empty($Expected_Salary_thousand)){

                                  echo $Expected_Salary_thousand; 
                                   
                                }else{

                          ?> thousand <?php } ?>
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
                 </div> -->
               </div>


         <div class="input-group-btn">
          <input class="btn btn-primary" type="submit" name="edit_profile" value="Update profile">
        </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
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

    <!-- Dropdown Profile  -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>


      <!-- JS here -->
  
    <!-- All JS Custom Plugins Link Here here -->
      <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>

      <!-- Jquery Mobile Menu -->
      <script src="assets/js/jquery.slicknav.min.js"></script>


    <!-- Jquery Slick , Owl-Carousel Plugins -->
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/price_rangs.js"></script>
      <!-- Date Picker -->
      <script src="assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
      <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/animated.headline.js"></script>
      <script src="assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
      <script src="assets/js/jquery.scrollUp.min.js"></script>
      <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
      
      <!-- contact js -->
      <script src="assets/js/contact.js"></script>
      <script src="assets/js/jquery.form.js"></script>
      <script src="assets/js/jquery.validate.min.js"></script>
      <script src="assets/js/mail-script.js"></script>
      <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        
    <!-- Jquery Plugins, main Jquery -->  
      <script src="assets/js/plugins.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>



<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  /*background-color: #f1f1f1;*/
  padding: 10px;
  font-size: 16px;
}

input[type=file] {
  border: 1px solid transparent;
  /*border-color: blue;*/
  /*background-color: #f1f1f1;*/
  padding: 10px;
  font-size: 16px;
  cursor: pointer;
}


input[type=text] {
  background-color: #ffffff;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9;
  /*height:45px;
  overflow: scroll;*/
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff;
  max-height: 100px;
  overflow-y: scroll;
  /* prevent horizontal scrollbar */
  overflow-x: hidden;
  /* add padding to account for vertical scrollbar */
  padding-right: 20px;


}
</style>


<style>
       .autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
        } 
</style>

