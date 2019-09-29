<?php
    require_once('../../db.php');

    $sql = "UPDATE tbl_user SET
                username = '".$_POST['username']."',
                password = '".$_POST['password']."',
                user_type = '".$_POST['usertype']."',
                modified_at = (SELECT CURRENT_TIMESTAMP())
            WHERE
                id = '".$_POST['id']."'";

    // echo $sql;

    if($conn->query($sql) === TRUE){
        header('location: ../account-list.php');
    }
    else{
        echo $conn->error;
    }