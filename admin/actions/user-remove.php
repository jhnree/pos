<?php
    require_once('../../db.php');

    $sql = "UPDATE tbl_user SET active = 0 WHERE id =".$_GET['id'];

    if($conn->query($sql) === TRUE){
        header('location: ../account-list.php');
    }
    else{
        echo $conn->error;
    }