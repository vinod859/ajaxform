<?php
include('DbConnect.php');


$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);
 $id = ($mydata['id']);
 $name = ($mydata['name']);
 $email = ($mydata['email']);
 $salary = ($mydata['salary']);
 //insert data

//  if(!empty($name) && !empty($email) && !empty($salary)){
//     $sql = "INSERT INTO employee(name,email,salary) VALUES('$name','$email','$salary')";
//     if($conn->query($sql) == TRUE){
//         echo "Employee added successfully";  
//     }else{
//         echo "Unable to added Employee";
//     }
//  }else{
//     echo"All fields are required.";
//  }

//insert or update both 
if(!empty($name) && !empty($email) && !empty($salary)){
    $sql = "INSERT INTO employee(id,name,email,salary) VALUES('$id','$name','$email','$salary') ON DUPLICATE KEY UPDATE name='$name',email='$email',salary='$salary' ";
    if($conn->query($sql) == TRUE){
        echo "Employee added successfully";  
    }else{
        echo "Unable to added Employee";
    }
}else{
    echo"All fields are required.";
 }