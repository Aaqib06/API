<?php
include "config.php";

header("content-type:application/json");

if($_SERVER["REQUEST_METHOD"]=="GET"){

   $sql="SELECT * FROM problem";

   $result=$conn->query($sql);

   if($result->num_rows>0){

    $data=array();

    while($row=$result->fetch_assoc()){

      $data[]=$row;
    }
    echo json_encode([$data]);

   }else{
    
    echo json_encode(["message"=>" error"]);
   }


}


?>