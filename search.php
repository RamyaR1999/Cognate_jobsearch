<?php

$pdo=mysqli_connect('localhost','root','root','job_search','3307');

$data = array();

switch ($_POST['type']) {
    default: break;
        
     case "Firstname":   
        
    $query = "SELECT Firstname FROM users  WHERE Firstname LIKE '%" . $_POST['search'] . "%' ";
    
    $statement=mysqli_query($pdo,$query);
    
    while($row=mysqli_fetch_assoc($statement)){
        
        $data[] = $row["Firstname"];       
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
}

if (count($data)==0) { $data = null; }
echo json_encode($data);
$stmt = null;
$pdo = null;


?>