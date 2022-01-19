<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Jobs in India">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 2</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-2.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
 <!-- Profile Icon -->
 <link rel="stylesheet" href="assets/css/shared/style.css">

 <!-- Dropdown text header -->
      <style>
      .dropdown {
        position: relative;
        display: inline-block;
        cursor: pointer;
      }

      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        border-radius: 3%;
        padding: 12px 16px;
        z-index: 1;
      }

      .dropdown:hover .dropdown-content {
        display: block;

      }
      </style>


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 2">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-white u-header" id="sec-6baa"><div class="u-clearfix u-sheet u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <a href="Job_seeker.php" class="u-image u-logo u-image-1">
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
<li class="u-nav-item dropdown"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 6px 0px;">Job Seeker</a>
  <div class="dropdown-content">
      <a class="u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-nav-link" href="Job_seeker.php" style="color: grey;">Find your job</a>
      <a class="u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-nav-link" href="Jobseeker_profile.php" style="color: grey;">Job seekers profile</a>
  </div>
</li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="View_All_Artists.php" style="padding: 10px 20px;">Hiring</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Available_jobs.php" style="padding: 10px 20px;">Available Jobs</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.php" style="padding: 10px 20px;">About us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.php" style="padding: 10px 20px;">Contact us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Register-Member.php" style="padding: 10px 20px;">Submit Your CV</a></li>

  <?php

    if(isset($_SESSION['Email']) == $db_Email){

  ?> 

<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Member-Login.php" style="padding: 10px 20px;">Login</a>
</li>

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
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                 <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
<li class="u-nav-item dropdown"><a class="u-button-style u-nav-link" style="padding: 6px 0px;">Job Seeker</a>
      <div class="dropdown-content">
         <a class="u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-nav-link" href="Job_seeker.php" style="color: grey;">Find your job</a>
         <a class="u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-nav-link" href="Jobseeker_profile.php" style="color: grey;">Job seekers profile</a>
      </div>
</li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="View_All_Artists.php" style="padding: 10px 20px;">Hiring</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Available_jobs.php" style="padding: 10px 20px;">Available Jobs</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php" style="padding: 10px 20px;">About us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.php" style="padding: 10px 20px;">Contact us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Register-Member.php" style="padding: 10px 20px;">Submit Your CV</a></li>

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
      </div>
    </header>