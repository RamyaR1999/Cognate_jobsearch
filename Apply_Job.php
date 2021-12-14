<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Profile">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Apply Job</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Contact-us.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
 <!-- Profile Icon -->

 <link rel="stylesheet" href="assets/css/shared/style.css"> 
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contact us">
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
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="About_us.php" style="padding: 6px 0px;">About us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact_us.php" style="padding: 6px 0px;">Contact us</a></li>

<?php

    if(isset($_SESSION['Email']) === $db_Email){

  ?> 

<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Member-Login.php" style="padding: 6px 0px;">Login</a></li>

<?php 
              
    }
              
  ?> 

<!-- <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Profile.html" style="padding: 6px 0px;">Profile</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.html" style="padding: 6px 0px;">Page 1</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-2.html" style="padding: 6px 0px;">Page 2</a>
</li> -->


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
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-1 active" href="Available_jobs.php">find a job</a>
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
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-5" href="">security advice</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div></header>
   <section class="u-clearfix u-section-1" id="sec-8459">
      <div class="u-clearfix u-sheet u-sheet-1"><br>
        <div class="u-border-2 u-border-grey-5 u-container-style u-expanded-width-xs u-group u-radius-8 u-shape-round u-group-8">
        <div class="u-container-layout u-container-layout-8">
       <div class="u-layout-row">
        <div class="col-sm-6 col-md-6">

        <h6 class="u-text u-text-20 u-align-left" style="padding-left: 3px;">
       
         
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
            <a class="nav-link" id="easyA-tab" data-toggle="tab" href="#easyA" role="tab" aria-controls="easyA" aria-selected="false">Easy Apply</a>
            </li>

            <li class="nav-item">
            <a class="nav-link active" id="rsLogin-tab" data-toggle="tab" href="#rsLogin" role="tab" aria-controls="rsLogin" aria-selected="true">Sign In</a>
            </li>
          </ul>
  <?php

// if(){

?>         
         <!--  <div class="text">Sign In to apply for this job</div><br>
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

              
<?php //}else{} ?>

             <div class="text">Apply for this job</div><br>
              <p>Fill in the form below to apply for this job.</p><br>
              <br>
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
          <input type="text" value="<?php echo $Contact_Number; ?>" class="form-control" name="Contact Number">
          <br>
          <br>
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Address: </span>
          <input type="text" value="<?php echo $Address; ?>" class="form-control" name="Address">
          <br>
          <br>  
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
          <input type="text" value="<?php echo $Job_Title; ?>" class="form-control" name="Job Title">
          <br>
          <br>  
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Expected Pay Rate: </span>
          <input type="text" value="<?php echo $Expected_Pay_Rate; ?>" class="form-control" name="Expected Pay Rate">
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
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Resume: </span>
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
                    <a href="https://nicepage.com/css-templates" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-1-light-2 u-radius-3 u-btn-1">Next </a>
           


            
            </h6>
          </div>

            <h6 class="u-align-right" style="padding-left: 30px;">
              <div class="backTo" style="margin-left:275px;">
                <a href="Available_jobs.php" class="back_to_search_btn"><img src="" alt=""> Back to search</a>
              </div>
              
                  
 </h6>
</div>
</div>
</div>
</div>

          
     
     
</div>
</section>

    
 <?php include "footer.php"; ?>