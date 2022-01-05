<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>

<?php 

   if(isset($_POST['CheckBoxArray'])){
       
       foreach($_POST['CheckBoxArray'] as $uservalueId){
        
          $bulk_options = $_POST['bulk_options'];
           
          
  switch($bulk_options){

           case 'Admin':

             $query = "UPDATE users SET role='{$bulk_options}' WHERE id={$uservalueId} " ;                  
             $update_to_admin_status = mysqli_query($connection,$query);

               if(!$update_to_admin_status){
              die("Query Failed" . mysqli_error($connection));
}
             break; 


            case 'User':

              $query = "UPDATE users SET role='{$bulk_options}' WHERE id={$uservalueId} " ;                  
              $update_to_supplier_status = mysqli_query($connection,$query);

                   // confirmQuery($update_to_supplier_status);

              if(!$update_to_supplier_status){
              die("Query Failed" . mysqli_error($connection));
}
             break; 

            case 'delete':

              $query = "DELETE FROM users WHERE id={$uservalueId} " ;   

              $update_to_delete_status = mysqli_query($connection,$query);

                   // confirmQuery($update_to_delete_status);

              if(!$update_to_delete_status){
              die("Query Failed" . mysqli_error($connection));
}
             break;  
                 
          }
           
       }
       
   }

?>

<!doctype html>
<html class="no-js" lang="zxx">

<!--tittle-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGBS-Job seeker profile</title>
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
<link rel="stylesheet" href="Page-1.css" media="screen">
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

/*.u-sheet:not(.u-image):not(.u-video) {
    pointer-events: none;
}

@media (max-width: 1199px)
.u-section-1 .u-sheet-1 {
    min-height: 483px;
}*/
/*.u-section-1 .u-sheet-1 {
    min-height: 449px;
    max-width: 920px;
}*/
/*@media (min-width: 968px) and (max-width: 1091px)
.u-sheet {
    width: 920px;
}*/

</style>

    <section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-section-1" id="carousel_261b">
      <!-- <div class="u-clearfix u-sheet u-sheet-1" style="max-width: auto;"> -->
        <div class="" style="padding-left: 28px;">
        <div class="card">
        <h3 class="u-align-center u-text u-text-1">Job Seekers&nbsp;</h3><br>

<div class="u-layout-row">
      
<?php 

       $query = "SELECT * FROM users";
       $artist_id = mysqli_query($connection,$query);

        while($row=mysqli_fetch_array($artist_id)){

            $id=$row['id'];
            $Firstname=$row['Firstname'];
            $Lastname=$row['Lastname'];
            $Image=$row['Image'];
            $Email=$row['Email'];
            $Phone=$row['Phone'];
            $City=$row['City'];
            $Education=$row['Education'];
            // $Industry=substr($row['Industry'],0,37);
            // $Function=substr($row['Function'],0,37);
            $Industry=$row['Industry'];
            $Function=$row['Function'];
            $Experience=$row['Experience'];

  ?>  

<div class="u-border-2 u-border-grey-5 u-container-style u-expanded-width-xs u-group u-radius-8 u-shape-round u-group-8"> 
    <div class="u-container-layout u-container-layout-8">
       <div class="u-layout-row">
  

         <h6 class="u-text u-text-20 u-align-left" style="padding-left: 6px;"><a style="color: #4287f5;" href="Jobseeker_full_profile.php?profile=<?php echo $id; ?>"><b><?php echo $Firstname; ?> <?php echo $Lastname; ?></b></a>
              <br>

              <p class="u-text u-text-5">

              <span style="font-weight: 700;">Education </span><br>
               <?php echo $Education; ?><br>

              <span style="font-weight: 700;">Email </span><br>
               <?php echo $Email; ?><br>

              <span style="font-weight: 700;">Phone no </span><br>
               <?php echo $Phone; ?><br>  

              <!-- <span style="font-weight: 700;">Function </span><br>
               <?php echo $Function; ?><br>

              <span style="font-weight: 700;">Industry </span><br>
               <?php echo $Industry; ?><br>

              <span style="font-weight: 700;">Experience </span><br>
               <?php echo $Experience; ?><br>

              <span style="font-weight: 700;">City </span><br>
               <?php echo $City; ?><br> -->
              
               <br>
             </p>
            </h6>
        <h6 class="u-align-right" style="padding-left: 30px;">
           <div class="u-align-right">
                <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
                      <a class="u-nav-link" id="UserDropdown" href="" data-toggle="dropdown" aria-expanded="false">
                     <i style="font-size:22px" class="fa fa-ellipsis-v"></i></a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                   <?php echo "<a onClick=\"javascript:return confirm('Are you Sure you want to delete $Firstname profile');\"href='Jobseeker_profile.php?delete={$id}' class='dropdown-item'>Delete</a>" ?>
                  </div>
                </li>
           </div>
        <br>
           <img class="" style="width:80px; height:80px; border-radius:10%;" src ='images/<?php echo $Image ?>' alt="">
         </h6>
          
     </div>
    </div>
  </div>
&nbsp; &nbsp;

    <?php } ?> 

<?php

                 if(isset($_GET['delete'])){
                     $id=$_GET['delete'];
                     $query="DELETE FROM users WHERE id={$id}";
                     $delete_query=mysqli_query($connection,$query);
                     header("Location:Jobseeker_profile.php");
                 }
             ?>

      </div>
        </div>
    </div>
    </section>
    <br><br>

<?php include "footer.php"; ?>

<style>

.u-section-1 .u-text-5 {
  margin: 14px 0 0;
  word-wrap: break-word;
  position: relative;
  width: 270px;
}

.u-section-1 .u-group-8 {
  /*width: 53px;*/
  /*min-height: 485px;*/
  background-image: none;
  box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4);
  height: auto;
  margin: 32px 273px 0 auto;
}

.u-section-1 .u-container-layout-8 {
  padding: 30px 9px 0;
}

.u-section-1 .u-group-8 {
  margin-top: 15px;
  margin-right: 69px;
  height: auto;
}

.u-section-1 .u-group-8 {
    margin-top: 174px;
    margin-right: 30px;
}

.u-section-1 .u-group-8 {
    margin-top: 26px;
    margin-right: 7px;
}

.u-section-1 .u-group-8 {
    margin-top: 42px;
    margin-right: initial;
    margin-left: initial;
    width: 413px;
}

</style>