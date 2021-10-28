
<?php session_start(); ?>

<?php
    
    
     $_SESSION['Email'] = null;
     $_SESSION['Firstname'] = null;
     $_SESSION['lastname'] = null;
     $_SESSION['Image'] = null;
     $_SESSION['Phone'] = null;

    header("Location:Member-Login.php");


?>
    
     