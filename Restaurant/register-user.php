<?php

require_once('../db.php');
$sql = "INSERT INTO tbl_user (username, password) values ('".$_POST['uname']."', '".$_POST['pword']."')";
// echo $sql;
if($conn->query($sql) === TRUE){
    header('location: index.php');
}
else{
    echo $conn->error;
}
