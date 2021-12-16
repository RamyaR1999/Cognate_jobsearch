<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>


<?php
    
    if(isset($_REQUEST['submit'])){
         
        $Email    = $_REQUEST['Email'];
        $Password = $_REQUEST['Password'];
                        
        $Password = mysqli_real_escape_string($connection,$_POST['Password']);
        $Password = md5($Password);  
    
        $query = "SELECT * FROM users WHERE Email = '{$Email}' ";
        $select_users_query = mysqli_query($connection, $query);
        
        if(!$select_users_query){
            
            die("Query Failed" . mysqli_error($connection));
            
        }
          
          while($row = mysqli_fetch_array($select_users_query)){
               $db_id = $row['id'];
               $db_Email    = $row['Email'];
               $db_Password = $row['Password'];
               $db_Phone=  $row['Phone'];
               $db_Image=  $row['Image'];
               $db_Firstname=  $row['Firstname'];
               $db_Lastname=  $row['Lastname'];
               $db_City=  $row['City'];
               $db_Industry=  $row['Industry'];
               $db_Function=  $row['Function'];
               $db_Education =$row['Education'];
               $db_Experience =$row['Experience'];
               $db_Salary =$row['Salary'];
               $db_CV = $row['CV'];
              
          }
        
        
        if($Email === $db_Email){
        if($Password === $db_Password){
     
             $_SESSION['id'] = $db_id;
             $_SESSION['Email'] = $db_Email;
             $_SESSION['Firstname'] = $db_Firstname;
             $_SESSION['Lastname'] = $db_Lastname;
             $_SESSION['Image']=  $db_Image;
             $_SESSION['City'] = $db_City;
             $_SESSION['Industry'] = $db_Industry;
             $_SESSION['Function'] =  $db_Function;
             $_SESSION['Education'] = $db_Education;
             $_SESSION['Experience'] = $db_Experience;
             $_SESSION['Salary'] = $db_Salary;
             $_SESSION['CV'] = $db_CV;
             $_SESSION['Phone'] = $db_Phone;
             

 header("Location:Apply_Job.php");
           
        }else{
            
            $message_Password = "Incorrect password";
        }
         
        }else{
            $message_Email = "Invalid Email";   
              
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
     <div class="main-menu">
         <nav class="d-none d-lg-block">
     <ul id="navigation">
     <!-- <li><a href="home.php">Home</a></li> -->
     <li><a href="Job_seeker.php">Job Seeker </a>
     <ul class="submenu">
         
    <li><a href="Jobseeker_profile.php">Job Seeker Profile</a></li>
    <li><a href="Available_jobs.php">Find A Jobs</a></li>
    <li><a href="Register-member.php">Submit Your Resume</a></li>
    <li><a href="career_hub.php">Career Hub</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="security_advice.php">Security Advice</a></li>
     
</ul>      
</li>
<li><a href="employer.php">employers</a>

<ul class="submenu">
         
    <li><a href="submit_job.php">Submit A job</a></li>
    <li><a href="request_callback.php">Request A Call Back</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="ourSolution.php">Our Solutions</a></li>
    <li><a href="Contact.php">Contact</a></li>
     
</ul>

</li>
     <li><a href="About_Us.php">About</a>

<ul class="submenu">
         
    <li><a href="submit_job.php">Submit A job</a></li>
    <li><a href="request_callback.php">Request A Call Back</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="ourSolution.php">Our Solutions</a></li>
    <li><a href="Contact.php">Contact</a></li>
     
</ul>

</li>
     <li><a href="Contact_Us.php">Contact</a>

<ul class="submenu">
         
    <li><a href="Jobseeker_profile.php">Job Seeker Profile</a></li>
    <li><a href="Available_jobs.php">Find A Jobs</a></li>
    <li><a href="Register-member.php">Submit Your Resume</a></li>
    <li><a href="career_hub.php">Career Hub</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="security_advice.php">Security Advice</a></li>
     
</ul>

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

        <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
          <a class="u-nav-link dropdown-toggle" id="UserDropdown" href="" data-toggle="dropdown" aria-expanded="false">
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
                <a class="dropdown-item" href="profile.php"><i class="dropdown-item-icon ti-dashboard"></i> My Profile</a>
                 
                <a class="dropdown-item"href="Logout.php"><i class="dropdown-item-icon ti-power-off"></i> Sign Out</a>
              
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
    <form action="" method="POST">
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
            </li>
          </ul>

       
          <div class="text">Sign In to apply for this job</div><br>
          <p>To apply for this job log in to your existing account.</p><br>
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Email: </span>
          <input type="text" value="<?php echo $Email; ?>" class="form-control" name="Email">
          <br>
          <br>
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Password: </span>
          <input type="password" value="<?php echo $Password; ?>" class="form-control" name="Password">
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
                  <a href="Register-Member.php" class="u-border-1  u-btn u-button-style u-login-control u-login-forgot-password u-none u-text-palette-1-base u-btn-3">Sign up?</a>


            </h6>
          </div>
          <div class="col-sm-6 col-md-6">

            <h6 class="u-align-right" style="padding-left: 40px;">

             <div class="backTo" style="margin-left:285px;">
              
         
                <a href="Apply_Job.php" class="back_to_search_btn"><img src="" alt="">Back to search</a>
              </div>

 
 <p class="u-align-left u-text u-text-left u-text-black u-text-8"width="550" height="350"> <?php echo $Job_specification; ?></p>

                
 </h6>
</div>
</form>
</div>
</div>
</div>
</div>

</div>    
</div>
</section>
<br>
    
 <?php include "footer.php"; ?>