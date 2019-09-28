<?php

require_once('../../Restaurant/db.php');
$sql = "SELECT username, password from tbl_user where username='".$_POST['username']."' and user_type='admin'";

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
        header('location: ../home.php');
        // echo 'Successfully Login';
    }
    else{
        echo 'Incorrect Password';    
    }
}
