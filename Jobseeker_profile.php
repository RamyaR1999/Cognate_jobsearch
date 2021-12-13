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



<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Job Seeker</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
 <!-- Profile Icon -->
 <link rel="stylesheet" href="assets/css/shared/style.css">
<!-- Font Awesome Icon -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  
<!-- Autocomplete -->
<script type='text/javascript' src='js/autocomplete.js'></script>
<link rel="stylesheet" type='text/css' href="css/autocomplete.css"> 


    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/default-logo.png",
    "sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Page 1">
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
                <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
<li class="u-nav-item dropdown"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" style="padding: 6px 0px;">Job Seeker</a>
  <div class="dropdown-content">
      <a class="u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-nav-link" href="Job_seeker.php" style="color: grey;">Find your job</a>
      <a class="u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-nav-link" href="Jobseeker_profile.php" style="color: grey;">Job seekers profile</a>
  </div>
</li>
<li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="employer.php" style="padding: 6px 0px;">Employers</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="About_us.php" style="padding: 6px 0px;">About us</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Contact_us.php" style="padding: 6px 0px;">Contact us</a></li>

  <?php

    if(isset($_SESSION['Email']) == $db_Email){

  ?> 


<li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Member-Login.php" style="padding: 6px 0px;">Login</a></li>

  <?php 
              
      }else{
              
    ?> 



        <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="u-nav-link fa fa-sort-down" id="UserDropdown" href="" data-toggle="dropdown" aria-expanded="false">
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
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="employer.php" style="padding: 6px 0px;">Employers</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="About_us.php" style="padding: 6px 0px;">About us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact_us.php" style="padding: 6px 0px;">Contact us</a></li>

<?php

    if(isset($_SESSION['Email']) == $db_Email){

  ?> 

<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.php" style="padding: 6px 0px;">Login</a></li>

<?php 
              
    }
              
  ?> 

<!-- <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Profile.html" style="padding: 6px 0px;">Profile</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.html" style="padding: 6px 0px;">Page 1</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-2.html" style="padding: 6px 0px;">Page 2</a></li> -->


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
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-2" href="Register-Member.php">submit your CV</a>
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
      </div></header>
    <section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-section-1" id="carousel_261b">
      <!-- <div class="u-clearfix u-sheet u-sheet-1"> -->
        <h3 class="u-text u-text-1">Job Seekers&nbsp;</h3><br>

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
            $Industry=$row['Industry'];
            $Experience=$row['Experience'];
            $Function=$row['Function'];

  ?>  
<!-- &nbsp; &nbsp; &nbsp; &nbsp;
 --><div class="" style="padding-left: 28px;">
<div class="u-border-2 u-border-grey-5 u-container-style u-expanded-width-xs u-group u-radius-8 u-shape-round u-group-8"> 
    <div class="u-container-layout u-container-layout-8">
       <div class="u-layout-row">
  

         <h6 class="u-text u-text-20 u-align-left" style="padding-left: 6px;"><a style="color: #4287f5;" href="Jobseeker_full_profile.php?profile=<?php echo $id; ?>"><b><?php echo $Firstname; ?> <?php echo $Lastname; ?></b></a>
              <br>

              <p class="u-text u-text-5">

              <span style="font-weight: 700;">Function </span><br>
               <?php echo $Function; ?><br><br>

              <span style="font-weight: 700;">Industry </span><br>
               <?php echo $Industry; ?><br><br>

              <span style="font-weight: 700;">Education </span><br>
               <?php echo $Education; ?><br><br>

              <!-- <span style="font-weight: 700;">Experience </span><br>
               <?php echo $Experience; ?><br><br>

              <span style="font-weight: 700;">Email </span><br>
               <?php echo $Email; ?><br><br>

              <span style="font-weight: 700;">Phone no </span><br>
               <?php echo $Phone; ?><br><br>

              <span style="font-weight: 700;">City </span><br>
               <?php echo $City; ?><br><br> -->

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
</div>

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
        <!-- </div> -->
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