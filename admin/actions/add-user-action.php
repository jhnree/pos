<?php
    require_once('../../db.php');

    $sql = "INSERT INTO tbl_user 
                (username,
                password,
                user_type) 
            values 
                ('".$_POST['username']."',
                '".$_POST['password']."',
                '".$_POST['usertype']."'
                )";
    
    if($conn->query($sql) === TRUE){
        header('location: ../account-list.php');
    }
    else{
        echo $conn->error;
    }