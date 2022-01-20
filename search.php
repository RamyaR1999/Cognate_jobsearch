<?php

$pdo=mysqli_connect('localhost','root','root','job_search','3307');

$data = array();

switch ($_POST['type']) {
    default: break;
        
     case "Fullname":   
        
    $query = "SELECT Fullname FROM users  WHERE User_type='Job Seeker' AND Fullname LIKE '%" . $_POST['search'] . "%' ";
    
    $statement=mysqli_query($pdo,$query);
    
    while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["Fullname"];       
    }
         break;
    case "Name":
        
     $query = "SELECT Job_title FROM jobs  WHERE Job_title LIKE '%" . $_POST['search'] . "%' ";
    
    $statement=mysqli_query($pdo,$query);
    
    while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["Job_title"];
        
//        $data[] = [
//        "D" => $row['product_name'],
//        "cost" => $row['product_cost'],
//        "qty" => $row['quantity']
//      ];     
    }
         break;

    case "Skills":
        
     $query = "SELECT Skills FROM jobs  WHERE Skills LIKE '%" . $_POST['search'] . "%' ";
    
    $statement=mysqli_query($pdo,$query);
    
    while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["Skills"];
    
    }
         break;

     case "Location":
        
     $query = "SELECT Location FROM jobs  WHERE Location LIKE '%" . $_POST['search'] . "%' ";
    
    $statement=mysqli_query($pdo,$query);
    
    while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["Location"];
    
    }
         break;
}

if (count($data)==0) { $data = null; }
echo json_encode($data);
$stmt = null;
$pdo = null;


?>