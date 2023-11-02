<?php
$servername="localhost";
$username="root";
$password="";
$dbname="api";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn==true){
    echo"";

}else{
    echo"failed";
}

?>