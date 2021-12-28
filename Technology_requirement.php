<?php session_start(); ?>
<?php include "db.php"; ?>
<?php 

     if(isset($_POST['submit'])){
         
         $Firstname=  $_POST['Firstname'];
         $Lastname=  $_POST['Lastname'];
         $Email    = $_POST['Email'];
         $Phone=  $_POST['Phone'];
         $Designation =  $_POST['Designation'];
         $Company=  $_POST['Company'];
         $Branch =  $_POST['Branch'];
         $Service = $_POST['Service'];
         $error = 0;

      if(!empty($Firstname) && !empty($Lastname) && !empty($Phone) && !empty($Email)){
                          
      if(preg_match('/^[\p{L} ]+$/u', $Firstname)) {
          
        if(preg_match('/^[\p{L} ]+$/u', $Lastname)) {      
        
        if(preg_match("/^[0-9]{10}$/", $Phone)) {   



        if(!$error){
        $check_query= "SELECT * FROM jobs WHERE Email = '{$Email}' ";
        $check_jobs_query = mysqli_query($connection,$check_query);

        if(mysqli_num_rows($check_jobs_query) > 0){

          $row = mysqli_fetch_assoc($check_jobs_query);

            if($Email==$row['Email'])
            {
                $message_Email= "Email already exists";
            }
        }else {

        
        $query = "INSERT INTO request_callback (Firstname,Lastname,Email,Phone,Designation,Company,Branch,Service) ";
        $query .= "VALUES ('{$Firstname}','{$Lastname}','{$Email}','{$Phone}','{$Designation}','{$Company}','{$Branch}','{$Service}')";
             
        $jobs_query = mysqli_query($connection,$query);

            
            // move_uploaded_file($_FILES['CV']['tmp_name'], $upload);
      
        if(!$jobs_query) {
            
            die("Query Failed" . mysqli_error($connection) .' '. mysqli_error($connection));
        }
       
 }

}
          }else{
              $message_phone = "Invalid Phone No";
            
        }
            
        
            
          }else{
              $message_Lastname ="Only Alphabets are allowed in lastname";
            
       }

          }else{
              $message_Firstname ="Only Alphabets are allowed in firstname";
          
       }
          
          }else{
        $message = "All fiels are required *";
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
    <title>Technology_requirement</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Register-Member.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.23.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

   <!-- Profile Icon -->

   <link rel="stylesheet" href="assets/css/shared/style.css"> 

    <!-- password Icon -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
    
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


  <body class="u-body"><header class=" u-clearfix u-header u-section-row-container" id="sec-6baa"><div class="u-section-rows">
        <div class="u-clearfix u-custom-color-2 u-section-row u-section-row-1" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-a8af">
          <div class="u-clearfix u-sheet u-valign-middle-xl u-valign-middle-xs u-sheet-1">
            <a href="Job_seeker.php" class="u-image u-logo u-image-1">
              <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
            </a>
           <!-- <h4>
            <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-image-1" href="Job_seeker.php">cognate global</a>
          </h4> -->
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
                <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Job_seeker.php" style="padding: 6px 0px;">Job Seeker</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90 active" href="employer.php" style="padding: 6px 0px;">Employers</a>
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
      <a class="u-nav-link fa fa-sort-down" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
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
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Job_seeker.php" style="padding: 6px 0px;">Job Seeker</a></li>
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
                  <div class="u-container-layout u-similar-container u-container-layout-2">
                    <p class="u-text u-text-default u-text-2">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-2" href="submit_job.php">submit a job</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-1">
                    <p class="u-text u-text-default u-text-1">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-1" href="request_callback.php">request a call back</a>
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
                  <div class="u-container-layout u-similar-container u-container-layout-3">
                    <p class="u-text u-text-default u-text-3">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-3" href="ourSolution.php">our solutions</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-5">
                    <p class="u-text u-text-default u-text-5">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-5 active" href="Contact.php">contact</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div></header>
<section class="u-clearfix u-custom-color-2 u-section-2" id="sec-2d18">
 
<br>

<!--<div class="grid-col-1-1">
<div class="snippet snp-header-illus snp-header-article-highlight snp-bg-opt1">
<div class="box-inner snp-header-illus-inner">
<div class="snp-header-illus-txt snp-content-txt">-->
<span class="snp-content-title-intro"><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All that you need to know about</h3></span>
<h3 class="snp-content-title-large">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cognate global business solution..</h3>



     <!-- <div class="u-clearfix u-sheet u-sheet-1 u-align-left u-clearfix u-sheet u-sheet-1">
       <div class="grid-col-1-1">
        <span class="snp-content-title-intro">All that you need to know about </span>
<h1 class="snp-content-title-large "style="color:black; font-size:50px;">Cognate global</h1>-->
       <!-- <h1 class="u-align-left u-text u-text-default u-text-1" style="color:red; font-size:110px;"><h3>All that you need to know about</h3>
          <br><strong><h1>Cognate global solution..</h1></strong></h1>
           
           <div class="u-align-right u-clearfix u-sheet u-sheet-1">-->

          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/tss1.gif" alt=""width=540>
       <!-- </div>
      </div></div></div>--> </section>
         <section class="u-clearfix u-grey-5 u-lightbox text-capitalize u-section-1" id="sec-de5a">
         <!-- <div class="u-align-left u-clearfix u-sheet u-sheet-1">-->
        <p class="u-text u-text-left u-text-1"><h2><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cognate Benefits :</strong></h2><span style="font-weight: 700;"></span>
        </p>
       <!--<div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                
              </div>
            </div>
          <h3>-->
          <h4>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Staffing and Consulting Services.Consultative approach backed with expertise across multiple technologies.Flat Management Structure,prompt decision &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; with flexible approach to help changing dynamics of the projects.</h4><!--</h3>-->
        <!-- </p> -->
      <!--</div>
    </div>-->
    </section>
      <section>


     <p class="u-text u-text-left u-text-1"><h2><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;which one makes us different :</strong></h2><span style="font-weight: 50;"></span>
      <!--<a class="btn btn-primary u-align-right u-text u-text-right u-text-black u-text-1" href="/cognate global solution/why-should-you-work-with-cognate global solution/">see the difference</a>-->
      <img src="images/download.jpg" alt="" height=640 width=1600> </p>
<!--quick learning.<br>
positive approaches.<br>
confidentiality.<br>-->

        
       <!-- <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
             </div>
            </div>
           <h3> 
          <br>
          creative thinking .<br>
          <br>
          speed performance<br>
          <br>
          creative thinking.<br>
          <br>
          broad knowledge in development.<br>
          <br>
          quick accessor.</h3></p>
      </div>-->
     <!--<div class="box-inner snp-img-text">-->
     <!--<div class="snp-img-text-inner snp-img-text-align-right">-->
        
      <!--</div>
      </div>
      </div>
    </div>-->
  </section>
   
       <section class="u-clearfix u-grey-5 u-lightbox u-section-1" id="sec-de5a">
         <!-- <div class="u-align-right u-clearfix u-sheet u-sheet-1">-->
        <p class="u-text u-text-center u-text-1"><h2><strong><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are here to help ur organisation's growth :</strong></h2><span style="font-weight: 700;"></span>
          
      <br>
          <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Whatever your hiring needs,We provide recruitment solutions for a wide range of technology skill.sets and requirements from custom development &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;work to engineering solutions migrations,up,grades and more.Read about our complete range of tech solutions here.<br>
       </h4>
     </p>
      <!-- </div> -->
    </section>
    <img src="images/account-management-development.jpg" alt=""height=640 width=1600>
    
    <section class="u-clearfix u-grey-5 u-lightbox  u-section-1" id="sec-de5a">
      <h1 class="u-align-left u-text u-text-left u-text-black u-text-1">
          <!--<div class="u-align-left u-clearfix u-sheet u-sheet-1">-->
        <p class="u-text u-text-left u-text-1"><h2><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Provided Services :</strong></h2><span style="font-weight: 700;"></span></p>
          
    
     <!--<h1 class="u-align-center u-text u-text-center u-text-black u-text-1">-->
    <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">1)Application services</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">2)infrastructure as service</h4><br></a>

    <!--<svg>
    <svg id="arrow-right" viewbox="0 0 50 50" width="50%" height="50%">
    <path d="M2,10.9374 L15.604,10.9374 L11.289,15.2964 C10.9,15.6884 10.904,16.3224 11.297,16.7104 C11.688,17.0994 12.323,17.0954 12.711,16.7034 L18.711,10.6414 C18.897,10.4524 19.001,10.1974 19,9.9324 C18.999,9.6664 18.892,9.4134 18.703,9.2264 L12.703,3.2894 C12.509,3.0964 12.254,3.0004 12,3.0004 C11.742,3.0004 11.484,3.0994 11.289,3.2964 C10.9,3.6884 10.904,4.3224 11.297,4.7104 L15.568,8.9374 L2,8.9374 C1.447,8.9374 1,9.3854 1,9.9374 C1,10.4894 1.447,10.9374 2,10.9374"></path>
    </svg>
    </svg>
    </span>
  </h1>-->
      <!--<h1 class="u-align-left u-text u-text-left u-text-black u-text-1" >-->
   <!-- <span class="box-text icon">--><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">3)end user services</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">4)embedded technologies/IOT</h4><br></a><!--</span>-->
    <!--<svg>
    <svg id="arrow-right" viewbox="0 0 50 50" width="50%" height="50%">
    <path d="M2,10.9374 L15.604,10.9374 L11.289,15.2964 C10.9,15.6884 10.904,16.3224 11.297,16.7104 C11.688,17.0994 12.323,17.0954 12.711,16.7034 L18.711,10.6414 C18.897,10.4524 19.001,10.1974 19,9.9324 C18.999,9.6664 18.892,9.4134 18.703,9.2264 L12.703,3.2894 C12.509,3.0964 12.254,3.0004 12,3.0004 C11.742,3.0004 11.484,3.0994 11.289,3.2964 C10.9,3.6884 10.904,4.3224 11.297,4.7104 L15.568,8.9374 L2,8.9374 C1.447,8.9374 1,9.3854 1,9.9374 C1,10.4894 1.447,10.9374 2,10.9374"></path>
    </svg>
    </svg>-->
    <!-- </span> 
  </h1>-->
     <!--<h1 class="u-align-center u-text u-text-left u-text-black u-text-1" >-->
    <!--<span class="box-text icon">--><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">5)strategy and architecture</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">6)POM services</h4><br></a><!--</span>-->
    
    <!--<svg>
        <svg id="arrow-right" viewbox="0 0 50 50" width="50%" height="50%">
          <path d="M2,10.9374 L15.604,10.9374 L11.289,15.2964 C10.9,15.6884 10.904,16.3224 11.297,16.7104 C11.688,17.0994 12.323,17.0954 12.711,16.7034 L18.711,10.6414 C18.897,10.4524 19.001,10.1974 19,9.9324 C18.999,9.6664 18.892,9.4134 18.703,9.2264 L12.703,3.2894 C12.509,3.0964 12.254,3.0004 12,3.0004 C11.742,3.0004 11.484,3.0994 11.289,3.2964 C10.9,3.6884 10.904,4.3224 11.297,4.7104 L15.568,8.9374 L2,8.9374 C1.447,8.9374 1,9.3854 1,9.9374 C1,10.4894 1.447,10.9374 2,10.9374"></path>
          </svg>
            </svg>-->
              <!-- </span> -->
            <!--</h1>
                <h1 class="u-align-left u-text u-text-left u-text-black u-text-1" >-->
                  <!--<span class="box-text icon">--><!--<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) embedded technologies & IoT</h3><br>--><!--</span>-->
              <!--<svg>
                <svg id="arrow-right" viewbox="0 0 50 50" width="50%" height="50%">
              <path d="M2,10.9374 L15.604,10.9374 L11.289,15.2964 C10.9,15.6884 10.904,16.3224 11.297,16.7104 C11.688,17.0994 12.323,17.0954 12.711,16.7034 L18.711,10.6414 C18.897,10.4524 19.001,10.1974 19,9.9324 C18.999,9.6664 18.892,9.4134 18.703,9.2264 L12.703,3.2894 C12.509,3.0964 12.254,3.0004 12,3.0004 C11.742,3.0004 11.484,3.0994 11.289,3.2964 C10.9,3.6884 10.904,4.3224 11.297,4.7104 L15.568,8.9374 L2,8.9374 C1.447,8.9374 1,9.3854 1,9.9374 C1,10.4894 1.447,10.9374 2,10.9374"></path>
                </svg>
            </svg>
        </span>-->
     <!-- </h1>
          <h1 class="u-align-left u-text u-text-left u-text-black u-text-1" >
                <span class="box-text icon">--><!--<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5) strategy and architecture</h3><br>-->
                  <!--</span>-->
          <!--<svg>
          <svg id="arrow-right" viewbox="0 0 50 50" width="50%" height="50%">
          <path d="M2,10.9374 L15.604,10.9374 L11.289,15.2964 C10.9,15.6884 10.904,16.3224 11.297,16.7104 C11.688,17.0994 12.323,17.0954 12.711,16.7034 L18.711,10.6414 C18.897,10.4524 19.001,10.1974 19,9.9324 C18.999,9.6664 18.892,9.4134 18.703,9.2264 L12.703,3.2894 C12.509,3.0964 12.254,3.0004 12,3.0004 C11.742,3.0004 11.484,3.0994 11.289,3.2964 C10.9,3.6884 10.904,4.3224 11.297,4.7104 L15.568,8.9374 L2,8.9374 C1.447,8.9374 1,9.3854 1,9.9374 C1,10.4894 1.447,10.9374 2,10.9374"></path>
          </svg>
        </svg>
      </span>-->
    <!--</h1>
        <h1 class="u-align-left u-text u-text-left u-text-black u-text-1" >
      <span class="box-text icon">--><!--<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6) PMO services</h3><br>--><!--</span>-->
    </h1>
  </section>
     <!-- <svg>
      
      <svg id="arrow-right" viewbox="0 0 50 50" width="50%" height="50%">-->
           <!-- <path d="M2,10.9374 L15.604,10.9374 L11.289,15.2964 C10.9,15.6884 10.904,16.3224 11.297,16.7104 C11.688,17.0994 12.323,17.0954 12.711,16.7034 L18.711,10.6414 C18.897,10.4524 19.001,10.1974 19,9.9324 C18.999,9.6664 18.892,9.4134 18.703,9.2264 L12.703,3.2894 C12.509,3.0964 12.254,3.0004 12,3.0004 C11.742,3.0004 11.484,3.0994 11.289,3.2964 C10.9,3.6884 10.904,4.3224 11.297,4.7104 L15.568,8.9374 L2,8.9374 C1.447,8.9374 1,9.3854 1,9.9374 C1,10.4894 1.447,10.9374 2,10.9374"></path>
           </svg>
             </svg>
             </h1>-->

       <section class="u-clearfix u-custom-color-2 u-section-2" id="sec-2d18">
        <h1 class="u-align-left u-text u-text-left u-text-black u-text-1"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Connect with our cognate global
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and get practiced..</h2></h1>
        
       <a  class="u-align-left u-text u-text-default u-text-1 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 30px; background-color: transparent; border-color: white; border-radius: 30px; color: white;" href="Contact_us.php">Contact us
              </a>
          <br><br>

    </section>
     <!--<section class="u-clearfix u-grey-2 u-lightbox text-capitalize u-section-1" id="sec-de5a">
      <div class="u-clearfix u-sheet u-sheet-1">-->
         <!--<section class="u-clearfix u-grey-5 u-lightbox text-capitalize u-section-1" id="sec-de5a">-->
         <!-- <div class="u-align-right u-clearfix u-sheet u-sheet-1">
       <a  class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 30px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="Contact_us.php">Contact us
              </a>-->
            
    <section class="u-clearfix u-grey-5 u-lightbox  u-section-1" id="sec-de5a">
          
        <p class="u-text u-text-left u-text-1"><h1><strong><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Insdustries we support :
         <img src="images/tse3.gif" alt="" width=1600>

        </strong></h1><span style="font-weight: 700;"></span>
          <!--<img src="images/internet.png" alt="" >-->
        </p>
        <p>
        
          <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We service a wide range of customers from startups to the best-of-breed tech giants and Fortune 100 companies.Our specialist consultants and &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; recruiters support client requirements for talent solutions across industries from aircraft and aerospace, to pharma,retail,software development,insurance &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and telecommunications.</h4><br>
          
        </p>
        <img src="images/account-management development.jpg" alt="" >

      </section>

      <section class="u-clearfix u-custom-color-2 u-section-2" id="sec-2d18">
        
      <h1 class="u-align-left u-text u-text-left u-text-black u-text-1"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;insights and impact stories</h2></h1>
        
       <a  class="u-align-left u-text u-text-default u-text-1 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 30px; background-color: transparent; border-color: white; border-radius: 20px; color: white;" href="Contact_us.php">know more
              </a>
            <br><br>
            </section>
      <!--<section class="u-clearfix u-grey-5 u-lightbox text-capitalize u-section-1" id="sec-de5a">
          <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-left u-text-1"><h2><strong><h1>Insight and impact stories</h1></strong></h2><span style="font-weight: 700;"></span>
        </p>
        <a  class="u-align-right u-text u-text-right u-text-1 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-2 u-radius-3 u-white u-btn-1"style="cursor: pointer; font-size: 30px; background-color: transparent; border-color: white; border-radius: 5px; color: white;" href="Contact_us.php">know more
              </a>-->
        
        <!--</div><div class="snippet snp-cta snp-bg-none">
<div class="box-inner">-->
    
    <?php include "footer.php"; ?>


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
