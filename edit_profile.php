<?php ob_start (); ?>
<?php session_start(); ?>
<?php include "db.php"; ?>


<?php

if(isset($_SESSION['Firstname'])){

     $Firstname =  $_SESSION['Firstname'];  
           
     $query="SELECT * FROM users WHERE Firstname = '{$Firstname}' ";
     $select_users_profile = mysqli_query($connection,$query);

      
     while($row=mysqli_fetch_array($select_users_profile)){

             $db_id = $row['id'];
               $db_Email    = $row['Email'];
               $db_Password = $row['Password'];
               $db_Phone=  $row['Phone'];
               $db_Image=  $row['Image'];
               $db_Firstname=  $row['Firstname'];
               $db_Lastname=  $row['Lastname'];
               $db_City=  $row['City'];
               $db_Industry=  $row['Industry'];
               $db_Function=  $row['Function'];
               $db_Education =$row['Education'];
               $db_Experience =$row['Experience'];
               $db_Salary =$row['Salary'];
               $db_CV = $row['CV'];
            
           }
         }

      if(isset($_POST['edit_profile'])){
   
         $Firstname=  $_POST['Firstname'];
         $Lastname=  $_POST['Lastname'];
         $Email    = $_POST['Email'];
         $Password = $_POST['Password'];
         $Confirm_password = $_POST['Confirm_password'];
         $Phone=  $_POST['Phone'];
         $Image=  $_POST['Image'];
         $City=  $_POST['City'];
         $Industry=  $_POST['Industry'];
         $Function=  $_POST['Function'];
         $Education =$_POST['Education'];
         $Experience =$_POST['Experience'];
         $Salary =$_POST['Salary'];
         $CV = $_FILES['CV']['Name'];
         $upload = "uploads/".$CV;
         
         $otp=$_POST['otp'];


            $Password = mysqli_real_escape_string($connection,$_POST['Password']);
            $Confirm_password = mysqli_real_escape_string($connection,$_POST['Confirm_password']);
            $Password = md5($Password);      
            $Confirm_password = md5($Confirm_password); 
          
        move_uploaded_file($image_tempname,"images/$image");
        
        if(empty($user_image)){
            
            $query = "SELECT * FROM users WHERE id = $id ";
            $select_image = mysqli_query($connection,$query);
                
            while($row = mysqli_fetch_array($select_image)){ 
            $image = $row['image'];
              
               }
            
          } 
       
        if(preg_match('/^[\p{L} ]+$/u', $Firstname)) {
          
        if(preg_match('/^[\p{L} ]+$/u', $Lastname)) {  
         
        $uppercase = preg_match('@[A-Z]@', $Password);
        $lowercase = preg_match('@[a-z]@', $Password);
        $number    = preg_match('@[0-9]@', $Password);
        $character = preg_match('/[\'^£!$%&*()}{@#~?><>,|=_+-]/', $Password);
            

        if(strlen($Password) >= 8) { 
          
        if($Password==$Confirm_password){
              
    $query="UPDATE users SET Firstname= '{$Firstname}', Lastname= '{$Lastname}', Email= '{$Email}', Password= '{$Password}',Confirm_password= '{$Confirm_password}',Phone='{$Phone}', Image='{$Image}',City='{$City}',Industry='{$Industry}',Function='{$Function}',Education='{$Education}' ,Experience='{$Experience}',Salary='{$Salary}'   WHERE firstname= '{$Firstname}' ";  
                      
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
    <meta property="og:title" content="ProfilePage">
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
        <div class="u-image u-image-circle u-image-2" alt="" data-image-width="400" data-image-height="265"></div>
      </div></header>
    <section class="u-align-center u-clearfix u-white u-section-1" id="carousel_83e4">
      <form action="" autocomplete="off" method="post" enctype="multipart/form-data">
      
      <!-- <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"> -->
        <h1 class="u-text u-text-1"><?php echo $_SESSION['firstname'] ?></h1>
        
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">

            
              <div class="u-align-center u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3">
                  <!-- <h3 class="u-text u-text-default u-text-6">Details</h3> -->
                  <p class="u-text u-text-7">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-1 col-form-label">Firstname: </span>
                         <div class="col-sm-12">
                          <input type="text" value="<?php echo $Firstname; ?>" class="form-control" name="Firstname">
                          <h6 style="color:#ff0000"><?php echo $message_Firstname; ?></h6>
                           </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span style="font-weight: 600;" class="col-sm-1 col-form-label">Lastname: </span>
                          <div class="col-sm-12">
                             <input type="text" value="<?php echo $Lastname; ?>" class="form-control" name="Lastname">
                             <h6 style="color:#ff0000"><?php echo $message_Lastname; ?></h6>
                          </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-1 col-form-label">Email: </span>
                         <div class="col-sm-12">
                          <input type="text" value="<?php echo $Email; ?>" class="form-control" name="Email">
                          <h6 style="color:#ff0000"><?php echo $message_Email; ?></h6>
                           </div>
                    </div>
                 </div>
                
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span style="font-weight: 600;" class="col-sm-1 col-form-label">Phone: </span>
                          <div class="col-sm-12">
                             <input type="text" value="<?php echo $Phone; ?>" class="form-control" name="Phone">
                             
                          </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-1 col-form-label">City: </span>
                         <div class="col-sm-12">
                          <input type="text" value="<?php echo $City; ?>" class="form-control" name="City">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span style="font-weight: 600;" class="col-sm-1 col-form-label">Industry: </span>
                          <div class="col-sm-12">
                             <input type="text" value="<?php echo $Industry; ?>" class="form-control" name=">Industry">
                             
                          </div>
                    </div>
                 </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-1 col-form-label">Function: </span>
                         <div class="col-sm-12">
                             <input type="text" value="<?php echo $Function; ?>" class="form-control" name="Function">
                        <!-- <br>22 years<br> -->
                         
                        </div>
                    </div>
                 </div>
               
               <div class="col-md-6">
                <div class="form-group row">
                  <span style="font-weight: 600;" class="col-sm-1 col-form-label">Education: </span>
                     <div class="col-sm-12">
                      <input id="myInput" type="text" value="<?php echo $Education; ?>" class="form-control" name="Education">
                          </div>
                    </div>
                 </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-1 col-form-label">Experience: </span>
                         <div class="col-sm-12">
                          <input type="text" value="<?php echo $Experience; ?>" class="form-control" name="Experience">
                        </div>
                    </div>
                 </div>
                 <div class="col-md-6">
                    <div class="form-group row">
                       <span style="font-weight: 600;" class="col-sm-1 col-form-label">Salary: </span>
                          <div class="col-sm-12">
                             <input type="text" value="<?php echo $Salary; ?>" class="form-control" name="Salary">
                             
                          </div>
                    </div>
                 </div>
              </div>
              &nbsp
              <div class="container">
                <div class="button-wrap">
                  <span style="font-weight: 600;"class="col-sm-1 col-form-label">CV: </span>
                  <label class="button" for="upload">Upload CV</label>
                  <input id="upload" type="file">
                </div>
              </div>
              <!-- <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <span style="font-weight: 600;"class="col-sm-1 col-form-label">CV: </span> -->
                         <!-- <div class="col-sm-12"> -->
                         <!--  <div class="file-upload-wrapper" data-text = "choose file!"> -->
                         <!--  <input name="file-upload-field" type="file"class="file-upload-field"  /> -->
                        <!--  <input type="file-upload-field" name="file-upload-field" class="file-upload-field"onchange="FileSelected()"style="width: ;">
                        </div> -->
                        <!-- </div> -->
                    <!-- </div>
                 </div>
                 </div> -->
                   </p>
               
                   <div class="input-group-btn">
                    <input class="btn btn-primary" type="submit" name="edit_profile" value="Update profile">
                  </div>

                <!-- </div>
              </div> -->
            </div>
          </div>
        </div>
      <!-- </div> -->
    </form>
    </section>
    
    <section class="u-backlink u-clearfix">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>


<!DOCTYPE html>

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

input .form-control{
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
.form{
  width: 400px;
}
.file-upload-wrapper{
  position: relative;
  width: 100%;
  height: 60px;
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
 <style>
      .container {
        display: flex;
        align-items: flex-start;
        justify-content: flex-start;
        width: 100%;
      }
      input[type="file"] {
        position: absolute;
        z-index: -1;
        top: 10px;
        left: 8px;
        font-size: 17px;
        color: #b8b8b8;
      }
      .button-wrap {
        position: relative;
      }
      .button {
        display: inline-block;
        padding: 12px 18px;
        cursor: pointer;
        border-radius: 5px;
        background-color: #8ebf42;
        font-size: 16px;
        font-weight: bold;
        color: #fff;
      }
    </style>



<body>



<!-- <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","America","Albania","Australia","Azerbaijan","Bangladesh","Belgium","Bermuda","Bhutan","Brazil","Canada","China","Colombia","Congo","Cook Islands","Denmark","Djibouti","Dominica","Dominican Republic","Egypt","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Fiji","Finland","France","French","Gabon","Gambia","Georgia","Germany","Ghana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Latvia","Lebanon","Lesotho","Liberia","Libya","Malaysia","Maldives","Mali","Malta","Mauritania","Namibia","Nauro","Nepal","Netherlands","New Zealand","Oman","Pakistan","Palestine","Panama","Poland","Portugal","Qatar","Reunion","Romania","Russia","Rwanda","Serbia","Singapore","Somalia","Sri Lanka","Switzerland","Taiwan","Togo","Tonga","Tunisia","Turkey","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script> -->
</body>
</html>

      <!-- Dropdown Profile -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>

  </body>
</html>