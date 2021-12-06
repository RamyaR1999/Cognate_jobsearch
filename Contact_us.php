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
    <title>Contact us</title>
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
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="" style="padding: 6px 0px;">About us</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="" style="padding: 6px 0px;">Contact us</a></li>

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
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-1 active" href="request_callback.php">request a call back</a>
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
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-3" href="">our solutions</a>
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
<section class="u-clearfix u-custom-color-2 u-section-2" id="sec-2d18">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-left u-text u-text-default u-text-1">Hello !</h1>
        <h1 class="u-align-right u-text u-text-custom-color-1 u-text-default u-text-2">We're here to help.</h1>
        <!-- <p class="u-align-left u-text u-text-default u-text-3"> This form is only for companies looking to hire roles.<br>If you are a job seeker, please share your profile at<br>
Submit Your CV</p> -->
      </div>
    </section>

    <section class="u-clearfix u-gradient u-section-1" id="sec-6065">
    <div class="u-align-left card-header bg-transparent border-0">
          <h3 class="mb-0" style="font-weight: 400;text-align: left; padding-top: 90px;"><i class="far fa-clone pr-1"></i>Contact us</h3>
          </div>

      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-radius-10 u-#f2f2f2 u-form-1">
          <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" source="custom" name="form" redirect="true">
            <h6 class="text-center" style="color:#ff0000"><?php echo $message; ?></h6>
            <div class="col-md-12">
            <span style="font-weight: 400;" class="">Fields marked with * are required fields</span>
            <h6 class="text-center" style="color:#ff0000"></h6>
          </div>
            <div class="u-layout-row">
               <div class="col-md-12">
                  <div class="input-group">
                     <span style="font-weight: 400;" class="">Firstname * </span><br>
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Firstname; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" name="Firstname">
                          <span class="focus-border"></span>
                          <h6 class="text-center" style="color:#ff0000"><?php echo $message_Firstname; ?></h6>
                        </div>
                      </div>
                    </div>
                   
                    <div class="col-md-12">
                      <div class="input-group">
                        <span style="font-weight: 400;" class="" >Lastname * </span> 
                        <div class="col-sm-12">
                          <input type="text"  value="<?php echo $Lastname; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" name="Lastname">
                          <span class="focus-border"></span>
                          <h6 class="text-center" style="color:#ff0000"><?php echo $message_Lastname; ?></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-layout-row">
                    <div class="col-md-12">
                      <div class="input-group">
                        <span style="font-weight: 400;" class="">Email * </span> 
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Email; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" name="Email">
                          <span class="focus-border"></span>
                          <h6 class="text-center" style="color:#ff0000"><?php echo $message_Email; ?></h6>
                        </div>
                      </div>
                    </div>
                   
                    <div class="col-md-12">
                      <div class="input-group">
                        <span style="font-weight: 400;" class="">Phoneb* </span> 
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Phone; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" name="Phone">
                          <span class="focus-border"></span>
                          <h6 class="text-center" style="color:#ff0000"><?php echo $message_Phone; ?></h6>
                        </div>
                        </div>
                      </div>
                    
                  </div>
                  <div class="u-layout-row">
                    <div class="col-md-12">
                      <div class="input-group">
                        <span style="font-weight: 400;" class="" >Designation * </span>
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Designation; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" name="Designation">
                          <span class="focus-border"></span>
                          <h6 class="text-center" style="color:#ff0000"></h6>
                          </div>
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="input-group">
                        <span style="font-weight: 400;" class="">Company * </span>
                        <div class="col-sm-12">
                          <input type="text" value="<?php echo $Company; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" name="Company">
                          <span class="focus-border"></span>
                          <h6 class="text-center" style="color:#ff0000"></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-layout-row">
                    <div class="col-md-12">
                      <div class="input-group">
                        <span style="font-weight: 400;" class="">Service * </span>
                        <div class="col-sm-12">
                          <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" name="Service"id="Service">
                          <option value="-1">-- please select --</option>
                          <option value="Contract Staffing">Contract Staffing</option>
                          <option value="Permanent Recruitment">Permanent Recruitment</option>
                          <option value="RPO">RPO</option>
                          <option value="IT Contract Staffing">IT Contract Staffing</option>
                        </select>
                        <span class="focus-border"></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="input-group">
                         <span style="font-weight: 400;" class="" >Branch * </span>
                        <div class="col-sm-12">
                            <select type="text" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" name="Branch"id="Branch">
                              <option value="">-- please select --</option>
                              <option value="Ahmedabad">Ahmedabad</option>
                              <option value="Baroda">Baroda</option>
                              <option value="Bengaluru">Bengaluru</option>
                              <option value="Bengaluru">Bengaluru</option>
                              <option value="Bhubaneswar">Bhubaneswar</option>
                              <option value="Chandigarh">Chandigarh</option>
                              <option value="Chennai">Chennai</option>
                              <option value="Cochin">Cochin</option>
                              <option value="Coimbatore">Coimbatore</option>
                              <option value="Gurgaon">Gurgaon</option>
                              <option value="Guwahati">Guwahati</option>
                              <option value="Hubli">Hubli</option>
                              <option value="Hyderabad">Hyderabad</option>
                              <option value="Indore">Indore</option>
                              <option value="Jaipur">Jaipur</option>
                              <option value="Jamshedpur">Jamshedpur</option>
                              <option value="Kolkata">Kolkata</option>
                              <option value="Lucknow">Lucknow</option>
                              <option value="Madurai">Madurai</option>
                              <option value="Mangalore">Mangalore</option>
                              <option value="Mumbai">Mumbai</option>
                              <option value="Nagpur">Nagpur</option>
                              <option value="New Delhi">New Delhi</option>
                              <option value="Patna">Patna</option>
                              <option value="Pune">Pune</option>
                              <option value="Rajkot">Rajkot</option>
                              <option value="Surat">Surat</option>
                              <option value="Trivandrum">Trivandrum</option>
                              <option value="Visakapatnam">Visakapatnam</option>
                            </select>
                            <span class="focus-border"></span>
                        </div> 
                        </div>
                      </div>
                    </div>
                <br>              
    
              <div class="u-align-center u-form-group u-form-submit">
              <a href="" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-1-light-2 u-radius-17 u-btn-1">Submit<br>
              </a>
              <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
            </div>

            <!-- <div class="u-form-send-message u-form-send-success">Thank you! Your Registraion is Successful</div>
            <div class="u-form-send-error u-form-send-message">Registraion Unsuccesful.</div>
            <input type="hidden" value="" name="recaptchaResponse">
             -->
          </form>
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
      </div>
    </footer>
    <section class="u-backlink u-clearfix u-footer">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>
     <!-- Profile Icon -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
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
             