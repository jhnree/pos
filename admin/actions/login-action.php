<?php

require_once('../../db.php');
$sql = "SELECT username, password from tbl_user where username='".$_POST['username']."' and (user_type='admin' or user_type='superadmin' )";

$arr = [];
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $arr = $row;
}

if(empty($arr)){
    echo 'Invalid Username or Password';
}
else{
    if($arr['password'] == $_POST['password']){
        header('location: ../menu-list.php');
        // echo 'Successfully Login';
    }
    else{
        echo 'Incorrect Password';    
    }
}
