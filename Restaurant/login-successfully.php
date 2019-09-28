<?php

require_once('db.php');
$sql = "SELECT username, password from tbl_user where username='".$_POST['username']."'";

$arr = [];
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $arr = $row;
}

if(empty($arr)){
    echo 'Invalid Username or Password';
}
else{
    // header('location: home.php');
    if($arr['password'] == $_POST['password']){
        header('location: home.php');
    }
    else{
        echo 'Incorrect Password';    
    }
}

// print_r($arr);
// if($conn->query($sql) === TRUE){
//     header('location: index.php');
// }
// else{
//     echo $conn->error;
// }
