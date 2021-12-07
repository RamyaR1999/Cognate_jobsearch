<?php ob_start (); ?>
<?php session_start(); ?>
<?php include "db.php"; ?>


<?php

if(isset($_SESSION['id'])){

     $db_id =  $_SESSION['id'];  
           
     $query="SELECT * FROM register WHERE id = '{$db_id}' ";
     $select_register_profile = mysqli_query($connection,$query);

      
     while($row=mysqli_fetch_array($select_register_profile)){

            $id = $row['id'];
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
           $CV = $row['CV'];
            
           }
         }

      if(isset($_POST['edit_profile'])){

           $Firstname=  $_POST['Firstname'];
           $Lastname=  $_POST['Lastname'];
           $Email    = $_POST['Email'];
           $Password = $_POST['Password'];
           $Phone=  $_POST['Phone'];
           $Image=  $_POST['Image'];
           $City=  $_POST['City'];
           $Industry=  $_POST['Industry'];
           $Function=  $_POST['Function'];
           $Education =$_POST['Education'];
           $Experience =$_POST['Experience'];
           $Salary =$_POST['Salary'];
           $CV = $_POST['CV'];


            $password = mysqli_real_escape_string($connection,$_POST['password']);
            $confirm_password = mysqli_real_escape_string($connection,$_POST['confirm_password']);
            $password = md5($password);      
            $confirm_password = md5($confirm_password); 
          
        move_uploaded_file($image_tempname,"images/$image");
        
        if(empty($user_image)){
            
            $query = "SELECT * FROM register WHERE id = $id ";
            $select_image = mysqli_query($connection,$query);
                
            while($row = mysqli_fetch_array($select_image)){ 
            $image = $row['image'];
              
               }
            
          } 
       
        if(preg_match('/^[\p{L} ]+$/u', $firstname)) {
          
        if(preg_match('/^[\p{L} ]+$/u', $lastname)) {  
         
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $character = preg_match('/[\'^£!$%&*()}{@#~?><>,|=_+-]/', $password);
            

        if(strlen($password) >= 8) { 
          
        if($password==$confirm_password){
              
    $query="UPDATE register SET firstname= '{$firstname}', lastname= '{$lastname}', image= '{$image}', email= '{$email}',phone= '{$phone}',instagram='{$instagram}', facebook='{$facebook}',twitter='{$twitter}',youtube='{$youtube}',Location='{$Location}'  WHERE id= '{$db_id}' ";  
                      
        $update_profile_query=mysqli_query($connection,$query);

         if(!$update_profile_query) {
            
            die("Query Failed" . mysqli_error($connection));
        }
            
          
           header("Location:profile.php"); 
              
         }else{
             
           $message_confirm="password did not match";
             
         }
         }else{
              $message_strnpassworad = "password contain atleast 8 characters";
              
       }
  
          
        }else{
              $message_Lastname ="Only Alphabets are allowed in lastname";
            
       }

          }else{
              $message_Firstname ="Only Alphabets are allowed in firstname";
          
       }   
          
            
       }

  ?>


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Profile">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>EditProfilePage</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="ProfilePage.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.24.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    <link rel="stylesheet" href="assets/css/shared/style.css">

    <style>
img {
  border-radius: 50%;
}
</style>

    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
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
            <a href="https://nicepage.com" class="u-image u-logo u-image-1">
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
                      <a class="u-active-none u-border-2 u-border-active-black u-border-hover-black u-btn u-button-link u-button-style u-hover-none u-none u-text-active-black u-text-black u-text-hover-black u-btn-5" href="">security advice</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
          
          
          
        </div>
      </div></header>
    <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_83e4">
      <form action="" autocomplete="off" method="post" enctype="multipart/form-data">
       <!-- <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 50px;" redirect="true"> -->
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-1"><?php echo $_SESSION['Firstname'] ?></h1>
        <p class="u-large-text u-text u-text-variant u-text-2">I'm a creative graphic designer</p>
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">

              <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-video u-video-1">
                <!-- <div class="u-background-video u-expanded" style=""> -->
                  <div class="embed-responsive embed-responsive-1">

                   
                   <?php 

                       $youtube2 = preg_replace("/https:\/\/\www.youtube.com\/watch\?v=/" , "", $youtube);
                    
                    ?>

<iframe width="420" height="345" src="https://www.youtube.com/embed/<?php echo $youtube2; ?>?autoplay=1&mute=0"></iframe>


<!-- <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src='https://www.youtube.com/embed/B9YKnNtFqds?playlist=B9YKnNtFqds&amp;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=0&amp;autoplay=1;frameborder="0" allowfullscreen="" '></iframe> -->

                    <!--  <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="<?php echo $youtube ?>;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=0&amp;autoplay=1" frameborder="0" allowfullscreen=""></iframe>  -->
                  </div>
                </div>
                <!-- <div class="u-container-layout u-container-layout-1">
                  <div class="u-align-top u-expanded u-video">
                    <div class="embed-responsive embed-responsive-2">
                      <iframe style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;" class="embed-responsive-item" src="" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                  </div>
                </div> -->
              <!-- </div> -->

              <br>


            <div class="u-align-center u-container-style u-layout-cell u-palette-4-base u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h3 class="u-text u-text-default u-text-3">About me</h3>
                  <p class="u-text u-text-4">I am creative graphic designer. I am&nbsp;an expert in the Adobe Creative Suit and have worked with a varied myriad of clients.&nbsp;Connecting your ideas to customer perception &amp; all the digital dots in between...</p>
                  <p class="u-text u-text-5">Image from <a href="https://www.freepik.com/photos/business" class="u-active-none u-border-1 u-border-white u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1" target="_blank">Freepik</a>
                  </p>
                </div>
              </div>
            </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3">
                  <h3 class="u-text u-text-default u-text-6">Details</h3>
                  <p class="u-text u-text-7">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-3 col-form-label">FirstName: </span>
                         <div class="col-sm-12">
                          <input type="text" value="<?php echo $firstname; ?>" class="form-control" name="firstname">
                          <h6 style="color:#ff0000"><?php echo $message_Firstname; ?></h6>
                           </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span style="font-weight: 600;" class="col-sm-3 col-form-label">LastName: </span>
                          <div class="col-sm-12">
                             <input type="text" value="<?php echo $lastname; ?>" class="form-control" name="lastname">
                             <h6 style="color:#ff0000"><?php echo $message_Lastname; ?></h6>
                          </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-3 col-form-label">Email: </span>
                         <div class="col-sm-12">
                          <input type="text" value="<?php echo $email; ?>" class="form-control" name="email">
                          <h6 style="color:#ff0000"><?php echo $message_email; ?></h6>
                           </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span style="font-weight: 600;" class="col-sm-3 col-form-label">Mobile: </span>
                          <div class="col-sm-12">
                             <input type="text" value="<?php echo $phone; ?>" class="form-control" name="phone">
                             <h6 style="color:#ff0000"><?php echo $message_phone; ?></h6>
                          </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-3 col-form-label">Instagram: </span>
                         <div class="col-sm-12">
                          <input type="text" value="<?php echo $instagram; ?>" class="form-control" name="instagram">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span style="font-weight: 600;" class="col-sm-3 col-form-label">Facebook: </span>
                          <div class="col-sm-12">
                             <input type="text" value="<?php echo $facebook; ?>" class="form-control" name="facebook">
                             
                          </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-3 col-form-label">Twitter: </span>
                         <div class="col-sm-12">
                          <input type="text" value="<?php echo $twitter; ?>" class="form-control" name="twitter">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span style="font-weight: 600;" class="col-sm-3 col-form-label">Youtube: </span>
                          <div class="col-sm-12">
                             <input type="text" value="<?php echo $youtube; ?>" class="form-control" name="youtube">
                             
                          </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-3 col-form-label">Age: </span>
                         <div class="col-sm-12">
                             <input type="text" value="<?php echo $age; ?>" class="form-control" name="age">
                        <!-- <br>22 years<br> -->
                         
                        </div>
                    </div>
                 </div>
               
               <div class="col-md-6">
                <div class="form-group row">
                  <span style="font-weight: 600;" class="col-sm-3 col-form-label">Location: </span>
                     <div class="col-sm-12">
                      <input id="myInput" type="text" value="<?php echo $Location; ?>" class="form-control" onFocus="geolocate()" name="Location">
                          </div>
                    </div>
                 </div>
               </div>
               <!-- <span style="font-weight: 700;">Location: </span>
                    <div id="locationField"><input id="myInput" type="text" value="<?php echo $Location; ?>" class="form-control" onFocus="geolocate()" name="Location"></div> -->
                    <!-- <br>'s-Hertogenbosch, The Netherlands, Earth -->
                  </p>
                  
           <!-- <div class="u-align-center u-form-group u-form-submit">
              <a href="" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-1-light-2 u-radius-17 u-btn-1">Update profile<br>
              </a>
              <input type="submit" name="edit_profile" value="submit" class="u-form-control-hidden">
            </div> -->
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
    
    <section class="u-backlink u-clearfix">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>


<!DOCTYPE html>
<!-- <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
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
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
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
</html>

      <!-- Dropdown Profile -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>

  </body>
</html>