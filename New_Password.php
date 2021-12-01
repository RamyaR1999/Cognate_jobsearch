<?php session_start(); ?>
<?php include "db.php"; ?>

<?php

   if(isset($_REQUEST['confirm'])){

     $Email =  $_SESSION['Email'];
     $Password = $_REQUEST['Password'];
     $Confirm_password = $_REQUEST['Confirm_password'];  
           
     $query="SELECT * FROM users WHERE Email = '{$Email}' ";
     $select_users_profile = mysqli_query($connection,$query);

      
     while($row=mysqli_fetch_array($select_users_profile)){

           $Firstname=  $row['Firstname'];
           $Lastname=  $row['Lastname'];
           $Email    = $row['Email'];
           $Password = $row['Password'];
           $Phone=  $row['Phone'];
           $Image=  $row['Image'];
           $City=  $row['City'];
           $Industry=  $row['Industry'];
           $Function=  $row['Function'];
           $Education =$row['Education'];
           $Experience =$row['Experience'];
           $Salary =$row['Salary'];
           $CV = $row['CV']['Name'];
           $upload = "uploads/".$CV;
         
         $otp=$row['otp'];
            
           }
         // }
    
    // if(isset($_POST['confirm'])){
             
    //      $password = $_POST['password'];
    //      $confirm_password = $_POST['confirm_password'];

     // if(!empty($password) && !empty($confirm_password)){

      if($password === $confirm_password){


        $_SESSION['Email'] = $db_Email;
        $_SESSION['Password'] = $db_Password;
        $_SESSION['Confirm_password'] = $db_Confirm_password;
          
      $Password = mysqli_real_escape_string($connection,$_REQUEST['Password']);
      $Confirm_password = mysqli_real_escape_string($connection,$_REQUEST['Confirm_password']);
      $Password = md5($Password);              
      $Confirm_password = md5($Confirm_password);

      $query="UPDATE users SET Password='{$Password}', Confirm_password='{$Confirm_password}' WHERE Email= '$Email' ";

      $users_query = mysqli_query($connection,$query);

      if(!$users_query) {
            
            die("Query Failed" . mysqli_error($connection));
        }


        header("Location:Member-Login.php"); 

        
        }else{

          $message_cpassword = "password mismatch";

        }

     // }else{

     //    $message = "Fields cannot be Empty";

     // }
   }


?>  


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Member Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Member-Login.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.23.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
    <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Site2",
    "logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Member Login">
    <meta property="og:description" content="">
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
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="submit-job.php" style="padding: 6px 0px;">Employers</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="About-us.html" style="padding: 6px 0px;">About us</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Contact-us.html" style="padding: 6px 0px;">Contact us</a></li>

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
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="submit-job.php" style="padding: 6px 0px;">Employers</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="About-us.html" style="padding: 6px 0px;">About us</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact-us.html" style="padding: 6px 0px;">Contact us</a></li>

<?php

    if(isset($_SESSION['email']) == $db_email){

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
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-3" href="https://nicepage.com">career hub</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-4">
                    <p class="u-text u-text-default u-text-4">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-body-color u-text-hover-black u-btn-4" href="https://nicepage.com">areas of expertise</a>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-container-layout-5">
                    <p class="u-text u-text-default u-text-5">
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-5" href="https://nicepage.com">security advice</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-10 u-section-1" id="sec-357b">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-style u-group u-radius-10 u-shape-round u-#f2f2f2 u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h3 class="text-center">Create New Password</h3>
            
            <div class="u-expanded-width u-form u-login-control u-form-1">
              <form action="" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-35 u-form-vertical u-inner-form" source="custom" name="form-2" style="padding: 10px;">
                

                <div class="u-form-group u-form-password">
                  <label for="password-708d" class="u-form-control-hidden u-label"></label>
                  <input type="Password" placeholder="Enter your New Password" id="id_password" name="Password" value="<?php echo isset($_REQUEST["Password"]) ? $_REQUEST["Password"] : ''; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" required="">
                  <span class="far fa-eye" id="togglePassword" style="margin-left: 350px; cursor: pointer;"></span>
                  <!-- <h6 class="text-center" style="color:#ff0000"><?php echo $message_password; ?></h6> -->
                </div>

                <div class="u-form-group u-form-password">
                  <label for="password-708d" class="u-form-control-hidden u-label"></label>
                  <input type="password" placeholder="Confirm Password" id="id_password" name="Confirm_password" value="<?php echo isset($_REQUEST["Password"]) ? $_REQUEST["Password"] : ''; ?>" class="u-input u-input-rectangle u-radius-3 u-white u-input-1" required="">
                  <h6 class="text-center" style="color:#ff0000"><?php echo $message_cpassword; ?></h6>
                </div>

                <div class="u-align-center u-form-group u-form-submit">
                  <a href="" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-17 u-btn-1">Submit</a>
                  <input type="submit" name="confirm" value="submit" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
              <div><?php if(isset($message)) { echo $message; } ?></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
   <!--  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-ff43"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
      </div> --><!-- </footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section> -->
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