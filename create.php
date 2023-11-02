<?php
  
include "config.php";

header ('content-type:application/json');

if($_SERVER["REQUEST_METHOD"]=="POST"){

$data=json_decode(file_get_contents("php://input"),true);

$username=$data["username"];

$password=$data["password"];

$sql="INSERT INTO problem (username,password) VALUES(?,?)";

$stmt=$conn->prepare($sql);

$stmt->bind_param("ss",$username,$password);

if($stmt->execute()){

    echo json_encode(["message"=>"task completed"]);
}else{
    echo json_encode(["message"=>"task failed"]);
}





}

?>