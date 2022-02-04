
<?php session_start(); ?>

<?php
    
     $_SESSION['id'] = null;
     $_SESSION['Email'] = null;
     $_SESSION['Fullname'] = null;
     $_SESSION['Image'] = null;
     $_SESSION['Phone'] = null;
     $_SESSION['User_type']=null;

    header("Location:Member-Login.php");


?>
    
     