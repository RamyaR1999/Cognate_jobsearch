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
         
    <li><a href="submit_job.php">Submit A job</a></li>
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
          <div class="" style="padding-left: 68px;">
        <h3 class="u-align-center u-text u-text-1"style="padding-left: 28px;">Job Seekers&nbsp;</h3><br>
    </div>

<form action="" autocomplete="off" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-8 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 50px;" redirect="true">
<div class="u-layout-row">
     <div class="col-md-3">
         <h6>Search Job seekers</h6>
             <form action="" method="post" autocomplete="off">
                 <div class="input-group">
                     <input name="Firstname" id="Firstname" type="text" placeholder="Job seekers name" class="form-control">
                            <button name="submit" style="padding: 0.5rem 1rem;" class="btn head-btn2" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                   </div>
              </form>
         </div>

      <div class="col-md-3">
         <h6>Industry</h6>
         <select type="text" class="form-control" name="Industry"id="Industry">
                      
                        <?php      

                            $query="SELECT Industry FROM users";
                            $select_Location=mysqli_query($connection,$query);

                             if(!$select_Location) {
            
                              die("Query Failed" . mysqli_error($connection));
                          } 

                            while($row=mysqli_fetch_assoc($select_Location)){

                            $industry=$row['Industry'];               

                            // echo "<option value='$location'>$location</option>";
                            // } 

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

      <div class="col-md-3">
         <h6>Education</h6>
          <select type="text" class="form-control" name="Education"id="Education">
              <?php      

                            $query="SELECT Education FROM users";
                            $select_Location=mysqli_query($connection,$query);

                             if(!$select_Location) {
            
                              die("Query Failed" . mysqli_error($connection));
                          } 

                            while($row=mysqli_fetch_assoc($select_Location)){

                            $education=$row['Education'];               

                            // echo "<option value='$location'>$location</option>";
                            // } 

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

      <div class="col-md-3">
         <h6>Function</h6>
          <select type="text" class="form-control" name="Function"id="Function">
                <?php      

                            $query="SELECT Function FROM users";
                            $select_Location=mysqli_query($connection,$query);

                             if(!$select_Location) {
            
                              die("Query Failed" . mysqli_error($connection));
                          } 

                            while($row=mysqli_fetch_assoc($select_Location)){

                            $function=$row['Function'];               

                            // echo "<option value='$location'>$location</option>";
                            // } 

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
  </div>
</form>

    <br>

<div class="u-layout-row"style="min-width: 100%;">

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
                    $Experience=$row['Experience'];

?>


<div class="card">
<div class="container">
    <div class="u-layout-row">
           <div class="u-align-left" style="width: 270px;">
            <h4><a href="Jobseeker_full_profile.php?profile=<?php echo $id; ?>"><b><?php echo $Firstname; ?> <?php echo $Lastname; ?></b></a></h4> 
            <p><?php echo $Education; ?></p>
            <p><?php echo $Email; ?></p>
            <p><?php echo $Phone; ?></p>
 
  </div>
  <div class="u-align-right" style="padding-left: 40px;">
  <div class="u-align-right">
                <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
                      <a class="u-nav-link" id="UserDropdown" href="" data-toggle="dropdown" aria-expanded="false">
                     <i style="font-size:22px" class="fa fa-ellipsis-v"></i></a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                   <?php echo "<a onClick=\"javascript:return confirm('Are you Sure you want to delete $Firstname profile');\"href='Jobseeker_profile.php?delete={$id}' class='dropdown-item'>Delete</a>" ?>
                  </div>
                </li>
           </div>   
    <a href="Jobseeker_full_profile.php?profile=<?php echo $id; ?>">
     <img src="images/<?php echo $Image ?>" alt="Avatar" style="width:80px; height:80px; border-radius:10%;"></a>
  </div>

</div>
  </div>
</div>
&nbsp; &nbsp;
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
            $Experience=$row['Experience'];


?>

<div class="card">
    <div class="container">
        <div class="u-layout-row">
            <div class="u-align-left" style="width: 270px;">

            <h4>
              <a href="Jobseeker_full_profile.php?profile=<?php echo $id; ?>"><b><?php echo $Firstname; ?> <?php echo $Lastname; ?></b>
              </a>
            </h4> 

            <p><?php echo $Education; ?></p>
            <p><?php echo $Email; ?></p>
            <p><?php echo $Phone; ?></p>
     

            </div>

  <div class="u-align-right" style="padding-left: 40px;">
    <div class="u-align-right">
        <li class="u-nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="u-nav-link" id="UserDropdown" href="" data-toggle="dropdown" aria-expanded="false">
                <i style="font-size:22px" class="fa fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
             <?php echo "<a onClick=\"javascript:return confirm('Are you Sure you want to delete $Firstname profile');\"href='Jobseeker_profile.php?delete={$id}' class='dropdown-item'>Delete</a>" ?>
            </div>
        </li>
    </div>   
    <h4 style="padding-bottom: 4px;"><a href="Jobseeker_full_profile.php?profile=<?php echo $id; ?>">
       <img src="images/<?php echo $Image ?>" alt="Avatar" style="width:80px; height:80px; border-radius:10%;">
   </a></h4>
  </div>
</div>
</div>
</div>
&nbsp;&nbsp;

<?php  } }  ?>

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
</section>
<br>

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: flex;
  margin-bottom: 22px;
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

 <?php include "footer.php"; ?>