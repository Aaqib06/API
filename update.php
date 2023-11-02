<?php
include "config.php";

header ("content-type:application/json");

if($_SERVER["REQUEST_METHOD"]=="PUT"){

    $data=json_decode(file_get_contents("php://input"),true);

    $id=$data['id'];

    $username=$data['username'];

    $password=$data['password'];

    $sql="UPDATE problem SET username=?,password=? WHERE id=?";

    $stmt=$conn->prepare($sql);

    $stmt->bind_param("ssi",$username,$password,$id);

    if($stmt->execute()){

        echo json_encode(["message"=>"task updated"]);

    }else{

        echo json_encode(["message"=>"update failed"]);
    }
}



?>