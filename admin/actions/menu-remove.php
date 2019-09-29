<?php
    require_once('../../db.php');

    $sql = "UPDATE tbl_menu SET
                active = 0
            WHERE
                id = ".$_GET['id']."
                ";
    // print_r($sql);

    if($conn->query($sql) === TRUE){
        header('location: ../menu-list.php');
    }
    else{
        $conn->error;
    }