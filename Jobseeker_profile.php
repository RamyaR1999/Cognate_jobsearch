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

<!doctype html>
<html class="no-js" lang="zxx">

<!--tittle-->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CGBS-Job seekers profile</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- image in title-->
   <link rel="shortcut icon" type="image/x-icon" href="image/cognate.png">

   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <link rel="stylesheet" href="assets/css/price_rangs.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/responsive.css">


 <link rel="stylesheet" href="nicepage.css" media="screen">

<link rel="stylesheet" href="Contact-us.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
 <!-- Profile Icon -->

 <link rel="stylesheet" href="assets/css/shared/style.css">
 <script src="assets/vendors/js/vendor.bundle.base.js"></script>

 <!-- Font Awesome Icons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Autocomplete -->
<script type='text/javascript' src='js/autocomplete.js'></script>
<link rel="stylesheet" type='text/css' href="css/autocomplete.css">

   </head>

   <body>
       <!--loading time image-->
       <div id="preloader-active">
       <div class="preloader d-flex align-items-center justify-content-center">
       <div class="preloader-inner position-relative">
       <div class="preloader-circle"></div>
       <div class="preloader-img pere-text">
       <img src="image/cognate.png" alt="">
</div>
</div>
</div>
</div>

<header>
<div class="header-area header-transparrent">
<div class="headder-top header-sticky">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-3 col-md-2">
    <!--logoo-->
<div class="logo">
<a href="job_seeker.php"><img src="image/cognate.png" alt="" width="150px"> </a>
</div>  
</div>  
<div class="col-lg-9 col-md-9">
<div class="menu-wrapper">
     <!-- Main-menu -->
<div class="main-menu u-custom-menu u-nav-container">
  <nav class="d-none d-lg-block">
  <ul class="u-nav u-unstyled u-nav-1" id="navigation">
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Job_seeker.php">Job Seeker</a>

  <ul class="submenu">

    <li><a href="Register-member.php">Submit Your Resume</a></li>    
    <li><a href="Jobseeker_profile.php">Job Seeker Profile</a></li>
    <li><a href="Available_jobs.php">Find A Jobs</a></li>
   <!--  <li><a href="career_hub.php">Career Hub</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="security_advice.php">Security Advice</a></li> -->
     
  </ul>      
</li>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="employer.php">employers</a>

  <ul class="submenu">
         
    <li><a href="submit_job.php">Submit A job</a></li><br>
   <!--  <li><a href="request_callback.php">Request A Call Back</a></li>
    <li><a href="areas_of_expertise.php">Areas of Expertise</a></li>
    <li><a href="ourSolution.php">Our Solutions</a></li> -->
    <li><a href="Contact.php">Contact</a></li>
     
  </ul>

</li>
     <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About_Us.php">About</a>


</li>
     <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact_Us.php">Contact</a>

</li>
     </ul>
       </nav>
      </div>         
<!--header button-->
<div class="header-btn d-none f-right d-lg-block">

  <?php

    if(isset($_SESSION['Email']) == $db_Email){

  ?> 
      <a href="Register-Member.php" class="btn head-btn1">Register</a>
      <a href="Member-Login.php" class="btn head-btn2">Login</a>


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
                      
                      if(isset($_SESSION['Firstname'])){
                          
                        echo $_SESSION['Firstname']; 
                         
                      }
                      
                      ?>
                      
                    </p>     
            </div>
            <a class="dropdown-item" href="profile.php"><i class="dropdown-item-icon ti-dashboard"></i> My Profile</a>
            <a class="dropdown-item" href="Logout.php"><i class="dropdown-item-icon ti-power-off"></i> Sign Out</a>
        </div>
</li>

<?php 
              
      }

?> 



        </div>
    </div>
</div>
                     <!--mobile button--> 
                     <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
         </div>
     </div>
      <!-- Header End -->
  </header>

<style>

  .head-btn1 {
    margin-right: 5px;
}
.btn {
    background: #fb246a;
    -moz-user-select: none;
    text-transform: capitalize;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 1px;
    line-height: 0;
    margin-bottom: 0;
    padding: 27px 44px;
    border-radius: 0px;
    margin: 10px;
    cursor: pointer;
    transition: color 0.4s linear;
    position: relative;
    z-index: 1;
    border: 0;
    overflow: hidden;
    margin: 0;
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.head-btn2 {
    background: none;
    border: 1px solid #fb246a;
    color: #fb246a;
}

</style>

<style>
  span{
    font-family: "Barlow",sans-serif;
   font-weight: 400;
  }
</style>

   <section class="u-clearfix u-section-1" id="sec-8459">
      <div class="u-clearfix u-sheet u-sheet-1">
          <div class="" style="padding-left: 108px;">
        <h3 class="u-align-center u-text u-text-1">Job Seekers&nbsp;</h3><br>
    </div>


    <br>

<div class="u-layout-row"style="min-width: 100%;">
<form action="" autocomplete="off" method="POST" source="custom" name="form" redirect="true">
<div class="u-align-left" style="min-width: 300px;">
    <!-- <div class="col-md-18"> -->
 <h6>Search Job seekers</h6>
     <form action="" method="post" autocomplete="off">
         <div class="input-group">
             <input name="Firstname" id="Firstname" type="text" placeholder="Search for Name" class="form-control" style="width: 300px">
                    <!-- <button name="submit" style="padding: 0.5rem 1rem;" class="btn head-btn2" type="submit">
                        <i class="fa fa-search"></i>
                    </button> -->
           </div>
      </form>
  <!-- </div> -->
<br>
<h6>Industry</h6>
<div class="input-group">
         <select type="text" class="form-control" name="Industry"id="Industry">
                      
                        <?php      

                            $query="SELECT Industry FROM Industry";
                            $select_Location=mysqli_query($connection,$query);

                             if(!$select_Location) {
            
                              die("Query Failed" . mysqli_error($connection));
                          } 

                            while($row=mysqli_fetch_assoc($select_Location)){

                            $industry=$row['Industry'];               

                           if($industry == $Industry) {
                            
                         echo "<option value='$Industries'>$industry</option>";
                       
                        }else{
                            
                        echo "<option value='$industry'>$industry</option>";
             
                         }     
                        } 
                       
                        $Industries=$_POST['Industry'];
                        echo "<option selected value='$Industries'>Select Industry</option>";


                          ?>
         </select>
     </div>
  <br>

      <h6>Education</h6>
      <div class="input-group">
          <select type="text" class="form-control" name="Education"id="Education">
              <?php      

                            $query="SELECT Education FROM Education";
                            $select_Location=mysqli_query($connection,$query);

                             if(!$select_Location) {
            
                              die("Query Failed" . mysqli_error($connection));
                          } 

                            while($row=mysqli_fetch_assoc($select_Location)){

                            $education=$row['Education'];               

                           if($education == $Education) {
                            
                         echo "<option value='$Educate'>$education</option>";
                       
                        }else{
                            
                        echo "<option value='$education'>$education</option>";
             
                         }     
                        } 
                       
                        $Educate=$_POST['Education'];
                        echo "<option selected value='$Educate'>Select Education</option>";


                          ?>           
         </select>
     </div>
<br>
       <h6>Function</h6>
       <div class="input-group">
          <select type="text" class="form-control" name="Function"id="Function">
                <?php      

                            $query="SELECT Function FROM Function";
                            $select_Location=mysqli_query($connection,$query);

                             if(!$select_Location) {
            
                              die("Query Failed" . mysqli_error($connection));
                          } 

                            while($row=mysqli_fetch_assoc($select_Location)){

                            $function=$row['Function'];               

                           if($function == $Function) {
                            
                         echo "<option value='$Functions'>$function</option>";
                       
                        }else{
                            
                        echo "<option value='$function'>$function</option>";
             
                         }     
                        } 
                       
                        $Functions=$_POST['Function'];
                        echo "<option selected value='$Functions'>Select Function</option>";


                          ?>         
          </select>
      </div>
 <br>         
<center><button name="submit" style="padding: 0.8rem 2rem;" class="btn head-btn2" type="submit">
    <i class="fa fa-search">Search</i>
  </button></center>
  </div>
</form>

<div class="u-align-right" style="padding-left: 40px; float: left;">
<?php

 if (isset($_POST['submit'])){

            $search=$_POST['Firstname'];
            $Industries=$_POST['Industry'];
            $Educate=$_POST['Education'];
            $Functions=$_POST['Function'];

             if($search !="" || $Industries !="" || $Educate !="" || $Functions != ""){

              $users="SELECT * FROM users WHERE Firstname = '$search' || Industry='$Industries' || Education='$Educate'  || Function='$Functions' "; 

              $search_users=mysqli_query($connection, $users); 

                 if(!$search_users){
                    die("QUERY FAILED" . mysqli_error($connection));
                }
                $count=mysqli_num_rows($search_users);
                if($count == 0){

             ?>

          <div class="col-md-1">
           <?php   echo "<td><a class='btn head-btn2' href='Jobseeker_profile.php'>Back</a></td>";   ?>
          </div>

             <?php

                echo "<h3 style='color:#b0b5b1'>No Users Available on your search</h3>";
                    
            }
           else{
   
             while($row=mysqli_fetch_assoc($search_users)){

                    $id=$row['id'];
                    $Firstname=$row['Firstname'];
                    $Lastname=$row['Lastname'];
                    $Image=$row['Image'];
                    $Email=$row['Email'];
                    $Phone=$row['Phone'];
                    $City=$row['City'];
                    $Education=$row['Education'];
                    // $Industry=substr($row['Industry'],0,37);
                    // $Function=substr($row['Function'],0,37);
                    $Industry=$row['Industry'];
                    $Function=$row['Function'];
                    $Experience_years=$row['Experience_years'];
                    $Experience_months =$row['Experience_months'];

?>


<div class="card">
<div class="container">
    <div class="u-layout-row">
        <div class="u-align-left" style="width: 520px;">
    <a href="Jobseeker_full_profile.php?profile=<?php echo $id; ?>">
        <h4><b><?php echo $Firstname; ?> <?php echo $Lastname; ?></b></h4> 
            <p><?php echo $Education; ?></p>
            <p><?php echo $Email; ?></p>
            <p><?php echo $Phone; ?></p>
 </a>
  </div>
  <div class="u-align-center" style="padding-left: 40px;"> 
    <a href="Jobseeker_full_profile.php?profile=<?php echo $id; ?>">
     <img src="images/<?php echo $Image ?>" style="width:120px; height:120px; border-radius:10%;"></a>
     </div>
     <div class="u-align-right" style="width: 50px;">
        <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="u-nav-link" id="UserDropdown" href="" data-toggle="dropdown" aria-expanded="false">
             <i style="font-size:22px" class="fa fa-ellipsis-v"></i></a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
           <?php echo "<a onClick=\"javascript:return confirm('Are you Sure you want to delete $Firstname profile');\"href='Jobseeker_profile.php?delete={$id}' class='dropdown-item'>Delete</a>" ?>
          </div>
        </li>
     </div>  
  
</div>
  </div>
</div>

<?php 

      } 
    }
  }else{

    header("Location:Jobseeker_profile.php");

  }

}else{


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
            // $Industry=substr($row['Industry'],0,37);
            // $Function=substr($row['Function'],0,37);
            $Industry=$row['Industry'];
            $Function=$row['Function'];
            $Experience_years=$row['Experience_years'];
            $Experience_months =$row['Experience_months'];


?>

<div class="card">
<div class="container">
    <div class="u-layout-row">
        <div class="u-align-left" style="width: 520px;">
    <a href="Jobseeker_full_profile.php?profile=<?php echo $id; ?>">
        <h4><b><?php echo $Firstname; ?> <?php echo $Lastname; ?></b></h4> 
            <p><?php echo $Education; ?></p>
            <p><?php echo $Email; ?></p>
            <p><?php echo $Phone; ?></p>
 </a>
  </div>
  <div class="u-align-center" style="padding-left: 40px;"> 
    <a href="Jobseeker_full_profile.php?profile=<?php echo $id; ?>">
     <img src="images/<?php echo $Image ?>" style="width:120px; height:120px; border-radius:10%;"></a>
     </div>
     <div class="u-align-right" style="width: 50px;">
        <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="u-nav-link" id="UserDropdown" href="" data-toggle="dropdown" aria-expanded="false">
             <i style="font-size:22px" class="fa fa-ellipsis-v"></i></a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
           <?php echo "<a onClick=\"javascript:return confirm('Are you Sure you want to delete $Firstname profile');\"href='Jobseeker_profile.php?delete={$id}' class='dropdown-item'>Delete</a>" ?>
          </div>
        </li>
     </div>  
  
</div>
  </div>
</div>


<?php } } ?>



<?php

     if(isset($_GET['delete'])){
         $id=$_GET['delete'];
         $query="DELETE FROM users WHERE id={$id}";
         $delete_query=mysqli_query($connection,$query);
         header("Location:Jobseeker_profile.php");
     }
?>
</div>
     </div>          
   </div>
</section>
<br>
<br>
<br>
<br>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: flex;
  margin-bottom: 22px;
  padding-bottom: 20px;
}

.card:hover {
  /*box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);*/
  box-shadow: 0 8px 16px 0 rgba(107, 115, 109);
}

.container {
  padding: 2px 16px;
  margin-top: 22px;

}
</style>

<!-- Autocomplete Script -->
<script>
    // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
    window.addEventListener("DOMContentLoaded", function(){
      ac.attach({
        target: "Firstname",
        data: "search.php",
        post: { type: "Firstname" },
        // OPTIONAL
        delay : 50,
        min : 1
      });
    });
</script>
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
      </div></footer>
    <section class="u-backlink u-clearfix u-footer">
      <main>
        <p>Copyright &copy; Cognate Global alphabet 2021</p>
      </main>
    </section>

    <script src="assets/vendors/js/vendor.bundle.base.js"></script>

    <!-- JS here -->
  
    <!-- All JS Custom Plugins Link Here here -->
      <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
      <script src="./assets/js/popper.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>

      <!-- Jquery Mobile Menu -->
      <!-- <script src="./assets/js/jquery.slicknav.min.js"></script> -->


    <!-- Jquery Slick , Owl-Carousel Plugins -->
      <script src="./assets/js/owl.carousel.min.js"></script>
      <script src="./assets/js/slick.min.js"></script>
      <script src="./assets/js/price_rangs.js"></script>
      <!-- Date Picker -->
      <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
      <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
      <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
      <script src="./assets/js/jquery.scrollUp.min.js"></script>
      <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
      
      <!-- contact js -->
      <script src="./assets/js/contact.js"></script>
      <script src="./assets/js/jquery.form.js"></script>
      <script src="./assets/js/jquery.validate.min.js"></script>
      <script src="./assets/js/mail-script.js"></script>
      <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
    <!-- Jquery Plugins, main Jquery -->  
      <script src="./assets/js/plugins.js"></script>
      <script src="./assets/js/main.js"></script>

  </body>
</html>