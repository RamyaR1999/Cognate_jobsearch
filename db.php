<?php

$connection=mysqli_connect('localhost','root','root','job_search','3306');

   if($connection){
       
       echo "";
       
     } else{
       
        die ("connection failed");
     }
 
?>