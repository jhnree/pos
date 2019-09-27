<?php

require_once('db.php');
$sql = "SELECT username, password from tbl_user where username='".$_POST['username']."'";

$arr = [];
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $arr = $row;
}

print_r($arr);
// if($conn->query($sql) === TRUE){
//     header('location: index.php');
// }
// else{
//     echo $conn->error;
// }
