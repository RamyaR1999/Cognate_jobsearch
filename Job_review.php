<?php session_start(); ?>
<?php ob_start (); ?>
<?php include "db.php"; ?>


<?php

if(isset($_SESSION['id'])){

     $db_id =  $_SESSION['id'];       
        
     $query="SELECT * FROM users WHERE id = '{$db_id}' ";
     $select_user_profile = mysqli_query($connection,$query);

      
     while($row=mysqli_fetch_array($select_user_profile)){

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

      ?>
<?php

if(isset($_GET['Job_details'])){

  $the_id = $_GET['Job_details'];

  $query="SELECT * FROM Jobs WHERE id='$the_id'";
  $Jobs_list=mysqli_query($connection,$query);

  while($row=mysqli_fetch_array($Jobs_list)){

     $the_id = $row['id'];
     $the_Firstname = $row['Firstname'];
     $Job_title = $row['Job_title'];
     $Job_Email = $row['Email'];
     $Job_specification = $row['Job_specification'];

 }

}

?>

<?php

if(isset($_POST['submit'])){


   // $query="SELECT * FROM users WHERE id = '{$db_id}' ";
   // $select_user_profile = mysqli_query($connection,$query);

    
   // while($row=mysqli_fetch_array($select_user_profile)){

   //       $id = $row['id'];
   //       $Firstname=  $row['Firstname'];
   //       $Lastname=  $row['Lastname'];
   //       $Email    = $row['Email'];
   //       $Password = $row['Password'];
   //       $Phone=  $row['Phone'];
   //       $Image=  $row['Image'];
   //       $City=  $row['City'];
   //       $Industry=  $row['Industry'];
   //       $Function=  $row['Function'];
   //       $Education =$row['Education'];
   //       $Experience =$row['Experience'];
   //       $Salary =$row['Salary'];
   //       $CV = $row['CV'];
   //   } 

     // $id = $_POST['id'];
     // $Firstname=  $_POST['Firstname'];
     // $Lastname=  $_POST['Lastname'];
     // $the_Email    = $_POST['Email'];
     // $Password = $_POST['Password'];
     // $Phone=  $_POST['Phone'];
     // $Image=  $_POST['Image'];
     // $City=  $_POST['City'];
     // $Industry=  $_POST['Industry'];
     // $Function=  $_POST['Function'];
     // $Education =$_POST['Education'];
     // $Experience =$_POST['Experience'];
     // $Salary = $_POST['Salary'];
     // $CV = $_POST['CV'];
                
// require 'PHPMailer/PHPMailerAutoload.php';
// require('phpmailer/class.phpmailer.php');

// $mail = new PHPMailer;

// $mail->isSMTP();

// $mail->Host = 'smtp.gmail.com';
// $mail->Port=587;
// $mail->SMTPAuth = true;
// $mail->SMTPSecure='tls';


// $mail->Username = 'CGBSTech2021@gmail.com';
// $mail->Password = 'cgbs@2021';

// $mail->setFrom ('barthalomena@gmail.com');
// $mail->addAddress($Job_Email,$the_Firstname);
// #$mail->addReplyTo( $_POST['email'],$_POST['name']);

// $mail->isHTML(true);
// $mail->Subject = "Job Applied Successfully";
// $mail->Body    = 'Hi'.' '.$the_Firstname.'<br><br>You have successfully applied for a job';

// if(!$mail->send()) {
//    echo "Message could not be sent.". $mail->ErrorInfo;
// }else{
//   echo " otp sent successfully to ur mail: " ;
// }



require 'PHPMailer/PHPMailerAutoload.php';
require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth = true;
$mail->SMTPSecure='tls';


$mail->Username = 'CGBSTech2021@gmail.com';
$mail->Password = 'cgbs@2021';

$mail->setFrom ('CGBSTech2021@gmail.com');
$mail->addAddress('07.ramyar@gmail.com','Ramya');
#$mail->addReplyTo( $_POST['email'],$_POST['name']);

$mail->isHTML(true);
$mail->Subject = "Job Applied Successfully";
$mail->Body    = 'Hi'.' '.'Ramya'.'<br><br>You have successfully applied for a job';

if(!$mail->send()) {
   echo "Message could not be sent.". $mail->ErrorInfo;
}else{
  echo " otp sent successfully to ur mail: " ;
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
    <title>Review Details</title>
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
    <form action="" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;" redirect="true">
       <div class="u-layout-row">
        
        <div class="col-sm-6 col-md-6">
        <h6 class="u-text u-text-20 u-align-left" style="padding-left: 3px;">

          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
           <!--  <a class="nav-link active" id="easyA-tab" data-toggle="tab" href="Job_seeker.php" role="tab" aria-controls="easyA" aria-selected="false" name="Easy_Apply">Easy Apply</a> -->
            <a class="nav-link active" id="easyA-tab" href="" role="tab" aria-controls="easyA" aria-selected="false" name="Easy_Apply">Easy Apply</a>
            </li>
          </ul>

          <div class="text">Apply for this job</div><br>
          <p>Review your details before submit</p><br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Email: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Email; ?></span>
          <!-- <input type="text" value="<?php echo $Email; ?>" class="form-control" name="Email"> -->
          <br>
          <br>
          
          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Firstname: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Firstname; ?></span>
          <!-- <input type="text" value="<?php echo $Firstname; ?>" class="form-control" name="Firstname"> -->
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Lastname: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Lastname; ?></span>
          <!-- <input type="text" value="<?php echo $Lastname; ?>" class="form-control" name="Lastname"> -->
          <br>
          <br>

           <span style="font-weight: 600;"class="col-sm-3 col-form-label">Contact Number: </span><br><br>
           <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Phone; ?></span>
          <!-- <input type="text" value="<?php echo $Phone; ?>" class="form-control" name="Phone"> -->
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Address: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $_SESSION['Address']; ?></span>
          <!-- <input type="text" value="<?php echo $Address; ?>" class="form-control" name="Address"> -->
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">City: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $City; ?></span>
          <!-- <input type="text" value="<?php echo $City; ?>" class="form-control" name="City"> -->
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">State: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $City; ?></span>
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Job Title: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Job_title; ?></span>
          <!-- <input type="text" value="<?php echo $Job_Title; ?>" class="form-control" name="Job Title"> -->
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Expected Pay Rate: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Salary; ?>lakh</span>
          <!-- <input type="text" value="<?php echo $Expected_Pay_Rate; ?>" class="form-control" name="Expected Pay Rate"> -->
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Country: </span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $Country; ?></span>
          <br>
          <br>

          <span style="font-weight: 600;"class="col-sm-3 col-form-label">Resume:</span><br><br>
          <span style="font-weight: 400;"class="col-sm-3 col-form-label"><?php echo $CV; ?></span>

          <br>
          <br>
       <div class="u-align-center u-form-group u-form-submit">
             <a href="" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-base u-palette-1-light-2 u-radius-17 u-btn-1">Submit</a>
            <input type="submit" name="submit" value="submit" class="u-form-control-hidden">
       </div>
          </h6>
          </div>
          <div class="col-sm-6 col-md-6">

            <h6 class="u-align-right" style="padding-left: 40px;">

             <div class="backTo" style="margin-left:285px;">
                <a href="Apply_Job.php?Job_details=<?php echo $the_id ?>&<?php echo $Job_title ?>" class="back_to_search_btn"><img src="" alt=""> Back to search</a>
              </div>

 <p class="u-align-right u-text u-text-right u-text-black u-text-8"width="550" height="350"> <?php echo $Job_specification; ?></p>
             
                  
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