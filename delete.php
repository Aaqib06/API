<?php
 include "config.php";

 header ("content-type:application/json");

 if($_SERVER["REQUEST_METHOD"]=="DELETE"){

    $data=json_decode(file_get_contents("php://input"),true);

    $id=$data['id'];

    $sql="DELETE FROM problem WHERE id=?";

    $stmt=$conn->prepare($sql);

    $stmt->bind_param("i",$id);

    if($stmt->execute()){

        echo json_encode(['message'=>"task deleted"]);

    }else{

        echo json_encode(["message"=>"delete failed"]);
    }
 }



?>