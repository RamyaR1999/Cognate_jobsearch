<?php include "db.php"; ?>

<?php

$data = array();

switch ($_POST['type']) {
    default: break;
        
     case "Fullname":   
        
    $query = "SELECT Fullname FROM users  WHERE User_type='Job Seeker' AND Fullname LIKE '%" . $_POST['search'] . "%' ";
    
    $statement=mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["Fullname"];       
    }
    break;

    case "Skills":   
        
    $query = "SELECT Skills FROM skills  WHERE Skills LIKE '%" . $_POST['search'] . "%' ";
    
    $statement=mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["Skills"];       
    }
    break;

    case "Name":
        
     $query = "SELECT Job_title FROM jobs  WHERE Job_title LIKE '%" . $_POST['search'] . "%' ";
    
    $statement=mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["Job_title"];
        
//        $data[] = [
//        "D" => $row['product_name'],
//        "cost" => $row['product_cost'],
//        "qty" => $row['quantity']
//      ];     
    }
         break;

    case "Job_Skills":
        
     $query = "SELECT Skills FROM jobs  WHERE Skills LIKE '%" . $_POST['search'] . "%' ";
    
    $statement=mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["Skills"];
    
    }
         break;

     case "Location":
        
     $query = "SELECT Location FROM jobs  WHERE Location LIKE '%" . $_POST['search'] . "%' ";
    
     $statement=mysqli_query($connection,$query);
    
     while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["Location"];
    
     }
         break;

     case "Skill":

      $datas = file_get_contents("search_profile.json");
      $datas = json_decode($datas, true);

      foreach($datas as $row)
      {
         $Skills=$row['Skills'];
         
         $Skills2= preg_replace('/\[\"/i', '', json_encode($Skills));
         $Skills3= preg_replace('/\"\]/i', '', $Skills2);
         $Skills4= preg_replace('/"/i', '', $Skills3);

         $data[]=$Skills4;

      }

}

if (count($data)==0) { $data = null; }
echo json_encode($data);
$stmt = null;
$connection = null;


?>