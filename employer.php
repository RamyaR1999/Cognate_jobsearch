<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>

<?php

if (isset($_POST['submit'])){

            $search=$_POST['Job_title'];
            // $role=$_POST['Roles'];
            // $offer=$_POST['Offerings'];
            // $locate=$_POST['Location'];


              $artist="SELECT * FROM jobs WHERE Job_title = '$search' "; 

              $search_artist=mysqli_query($connection, $artist); 

                 if(!$search_artist){
                    die("QUERY FAILED" . mysqli_error($connection));
                }
                $count=mysqli_num_rows($search_artist);
                if($count == 0){

               header ("Location: Available_jobs.php");
                       
            }else{
              while($row=mysqli_fetch_assoc($search_artist)){

                    $id=$row['id'];
                    $Job_title=$row['Job_title'];
            }

        }
        header ("Location: Available_jobs.php");
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
    <title>Employers</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
 <!-- Profile Icon -->

 <link rel="stylesheet" href="assets/css/shared/style.css">     
  
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
                <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Job_seeker.php" style="padding: 6px 0px;">Job Seeker</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="employer.php" style="padding: 6px 0px;">Employers</a>
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
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Page-1.php" style="padding: 6px 0px;">Page 1</a>
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
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-5" href="Contact.php">contact</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>          
        </div>
      </div></header>
    <section class="u-clearfix u-custom-color-2 u-lightbox u-section-1" id="sec-de5a">
     
  <div style="clear: both u-text-1">
    <h1 class="text-avatar text-capitalize text-monospace  text-left  " style="inset-inline-start: initial color:red;font-size:100px;">employment services</h1>
    <h1 class="text-right text-monospace text-dark text-capitalize " style="revert color:red;font-size:80px;">find the right talent....</h1>
</div>

        <div class="u-expanded-width-xs u-form u-form-1">
          <form action="" autocomplete="off" method="POST" class="u-clearfix u-form-custom-backend u-form-horizontal u-form-spacing-2 u-inner-form" style="padding: 15px;" source="custom" redirect="true">
           
            <div class="u-form-group u-form-submit">

  <p>
  <br>
Our unique sourcing methodology ensures
  <br>
  <br>
 that we find the right talent for you every single time.
  <br>
 <br>
  Call us at 1800-267-4050 to know more.
  <br>
  </p>
  <a class="u-clearfix u-form-custom-backend u-form-horizontal u-form-spacing-2 u-inner-form" style="padding: 15px;" source="custom" redirect="true">
           
  <a class="btn btn-dark" href="Available_jobs.php">speak to an expert</a>      
        </div>
        </form>
      </div>
    </section>
    
</div>
    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="snp-txt-img-cta-txt">
<h2>our secret</h2>
<div><p>Learn how our unique sourcing methodology helps organizations create wholes that are greater than the sum of their parts.</p></div>
<a class="btn btn-primary" href="/employers/talent-sourcing-methodology/">learn more</a>
</div>
</div>
        
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1"><h3>Our solutions..</h3><span style="font-weight: 700;"></span>
        </p>
         <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <p class="u-text u-text-default u-text-palette-1-base u-text-2">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-1" href="Available_jobs.php" target="_blank">Permanent Requirement</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <p class="u-text u-text-default u-text-palette-1-base u-text-3">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-2" href="Available_jobs.php" target="_blank">technology requirement</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <p class="u-text u-text-default u-text-palette-1-base u-text-4">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-3" href="Available_jobs.php" target="_blank">professional search and selection</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">talent acquisition</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">rpo&msp</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">salesforce enablement</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">payroll transfer services</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">stafing</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">manpower consultancy</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">executive search</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1"><h3>specialists in...</h3><span style="font-weight: 700;"></span>
        </p>
         <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <p class="u-text u-text-default u-text-palette-1-base u-text-2">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-1" href="Available_jobs.php" target="_blank">operations,logistics & SCM</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <p class="u-text u-text-default u-text-palette-1-base u-text-3">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-2" href="Available_jobs.php" target="_blank">civil & architecture</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <p class="u-text u-text-default u-text-palette-1-base u-text-4">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-3" href="Available_jobs.php" target="_blank">support functions</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">human resource</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">Manufacturing staffing</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">bpo requirement</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">product management &IT</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">banking & financial services</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">pharma,life sciences & healthcare</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">sales & account management</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">construction requirement</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">analytics & data sciences</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">fmcg requirement</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="sec-fa03">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1"><h3>placement services in..</h3><span style="font-weight: 700;"></span>
        </p>
         <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <p class="u-text u-text-default u-text-palette-1-base u-text-2">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-1" href="Available_jobs.php" target="_blank">ahemedabad</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <p class="u-text u-text-default u-text-palette-1-base u-text-3">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-2" href="Available_jobs.php" target="_blank">chennai</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <p class="u-text u-text-default u-text-palette-1-base u-text-4">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-3" href="Available_jobs.php" target="_blank">hyderabad</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">pune</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">bangalore</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">delhi</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">kolkata</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">chandigarh</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">gurgaon</a>
                </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <p class="u-text u-text-default u-text-palette-1-base u-text-5">
                  <a class="u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-1-base u-text-hover-palette-1-base u-text-palette-1-base u-btn-4" href="Available_jobs.php" target="_blank">mumbai</a>
                </p>
              </div>
            </div>
          </div>
        </div>
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
        </div>
      </div></footer>
    <section class="u-backlink u-clearfix">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>
    
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>

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

/*.cf:after {
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
}*/

</style>

<!-- Autocomplete Script -->
<script>
    // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
    window.addEventListener("DOMContentLoaded", function(){
      ac.attach({
        target: "demoB",
        data: "search.php",
        post: { type: "Name" },
        // OPTIONAL
        delay : 50,
        min : 1
      });
    });
</script>