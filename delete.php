<?php
   include('DbConnect.php');
      $data = stripslashes(file_get_contents("php://input"));
      $mydata = json_decode($data,true);
      $id = $mydata['eid'];

 if(!empty($id)){
    $sql = "DELETE FROM employee WHERE id ={$id}";
    if($conn->query($sql)==TRUE){
        echo 1;
    }else{
        echo 0;
    }
 }
?>